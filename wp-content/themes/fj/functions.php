<?php
function enqueue_styles() {
wp_register_style( 'my_bootstrap', get_template_directory_uri() . '/bootstrap/css/bootstrap.min.css');
wp_register_style( 'my_style', get_template_directory_uri(). '/css/style.css');

wp_enqueue_style( 'my_bootstrap');
wp_enqueue_style( 'my_style');
}
add_action('wp_enqueue_scripts', 'enqueue_styles');

function enqueue_scripts () {
wp_register_script('my-jquery', get_template_directory_uri() . '/js/jquery.js', '', 1.1,true);
wp_register_script('bootstrap', get_template_directory_uri() . '/bootstrap/js/bootstrap.min.js', '', 1.1,true);
wp_register_script('script', get_template_directory_uri() . '/js/script.js', '', 1.1,true);
if(is_front_page()){
	wp_register_script('menu', get_template_directory_uri() . '/js/menu.js', '', 1.1,true);
}
wp_enqueue_script('my-jquery');
wp_enqueue_script('bootstrap');
wp_enqueue_script('script');
wp_enqueue_script('menu');
}
add_action('wp_enqueue_scripts', 'enqueue_scripts');

function get_product_list_wc_func($atts) {
$loop = new WP_Query( array(
	'post_type' => 'product',
	'posts_per_page' => 40,
	'orderby' => 'menu_order',
	'order' => 'ASC',
	'product_cat' => $atts['cat'],
));
while ( $loop->have_posts() ): $loop->the_post();
	foreach(get_post_meta(get_the_ID(),'_product_attributes')[0] as $elem){
		if($elem['name']=='Типоразмер'){
			$type = $elem['value'];
		}
	}
?>
	<div class="item-modal">
		<div class="item-name"><?php the_title(); ?></div>
		<div class="item-price" data-type="<?php echo $type?>" data-id="<?php the_ID();?>">
			<?php echo get_post_meta( get_the_ID(), '_price', true);?>
		</div>
		<div class="item-inp">
			<div class="minus">-</div>
			<label>
				<input type="text" name="" class="inp-modal" value="0" max="99999" min="0"  data-id="<?php the_ID(); ?>">
			</label>
			<div class="plus">+</div>
		</div>
		<div class="item-sum"></div>
	</div>
<?php endwhile;
}

add_shortcode( 'get_product_list_wc', 'get_product_list_wc_func');

add_action('wp_enqueue_scripts', 'myajax_data', 99);
function myajax_data(){
	wp_localize_script('script', 'myajax', array(
		'url' => admin_url('admin-ajax.php')
	));
}

add_action('wp_footer', 'my_action_javascript', 99); // для фронта
function my_action_javascript(){
	?>
	<script type="text/javascript">
        $(document).ready(function ($) {
            $('.buyZav').on('click', function () {
                var nameInp =$(this).parent().find('input[name="your-name"]');
                var phoneInp =$(this).parent().find('input[name="your-mumber"]');
                var inpsModal = $(this).parent().parent().parent().parent().find('.inp-modal');
                if( validateInps(inpsModal) && validate(nameInp,phoneInp)){
                    var orderList = [];
                    var checkInputs = false;
                    inpsModal.each(function(indx, element){
                    	if(parseInt($(element)[0].value)>0){
                            orderList.push({id:$(element)[0].dataset.id, val: $(element)[0].value});
                            checkInputs = true;
                        }
                    });
                    var data = {
                        action: 'my_action',
                    	orderList: orderList,
                    	name: nameInp[0].value,
                        numbers: phoneInp[0].value,
                        is_calc: 0
                    };
                    $(this).parent().parent().parent().parent().parent().find('.form_load')[0].style.display='block';
                    var thisBtn = $(this);
                    jQuery.post(
                        myajax.url,
                        data,
                        function (response) {
                            thisBtn.parent().parent().parent().parent().parent().find('.form_load')[0].style.display='none';
                            thisBtn.parent().parent().parent().parent().find('.inp-modal').each(function(indx, element){
                                if(parseInt($(element)[0].value)>0){
                                    $(element)[0].value = 0;
                                    $(element).trigger("change");
                                }
                            });
                            thisBtn.parent().parent().parent().parent().find('.succes-result').show(1000);
                        }
                    );
				}
            });
            $('#calc_form_btn').on('click', function () {
                var nameInp =$(this).parent().find('input[name="your-name"]');
                var phoneInp =$(this).parent().find('input[name="your-number"]');
                var width = parseFloat($('#width')[0].value.replace(/,/, '.'));
                var height = parseFloat($('#height')[0].value.replace(/,/, '.'));
                if(validate(nameInp,phoneInp)){
                    var orderList = [];
                    orderList.push({id:$('#quant_plates')[0].dataset.prodid, val: $('#quant_plates')[0].innerText});
                    orderList.push({id:$('#strip_length')[0].dataset.prodid, val: $('#strip_length')[0].innerText});
                    orderList.push({id:$('#metal_comb')[0].dataset.prodid, val: $('#metal_comb')[0].innerText});
                    var data = {
                        action: 'my_action',
                        orderList: orderList,
                        name: nameInp[0].value,
                        numbers: phoneInp[0].value,
                        strip_length: $('#strip_length')[0].innerText,
                        metal_comb: $('#metal_comb')[0].innerText,
                        width: width,
                        height: height,
						is_calc: 1
                    };
                    jQuery.post(
                        myajax.url,
                        data,
                        function (response) {
                            $('.calc-form')[0].innerHTML  = "<div class=\"succes-result d-block h-auto\">Ваш заказ принят на обработку!<br> Наши мененджеры свяжутся с Вами в ближайшее время!</div>\n";
                        }
                    );
                }
            });
            $('#callback_form_btn').on('click', function () {
                var phoneInp =$('#your-number');
                var regNum = /^((8|\+7)[\- ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{7,10}$/;
                if(regNum.test(phoneInp[0].value)){
                    phoneInp.removeClass('empty_field');
                    var data = {
                        action: 'callback',
                        numbers:phoneInp[0].value
                    };
                    var thisBtn = $(this);
                    jQuery.post(
                        myajax.url,
                        data,
                        function (response) {
                            $('.callback-wrap')[0].innerHTML = "<div class=\"succes-result d-block\">Ваш заказ принят на обработку! Наши мененджеры свяжутся с Вами в ближайшее время!</div>\n";
                        }
                    );
                }else{
                    phoneInp.addClass('empty_field');
                    result = false;

                }
            });
            function validate(nameInp, phoneInp) {
                var result = true;
                var regNum = /^((8|\+7)[\- ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{7,10}$/;
                if(nameInp[0].value !== ''){
                    nameInp.removeClass('empty_field');
                }else{
                    nameInp.addClass('empty_field');
                    result = false;
                }
                if(regNum.test(phoneInp[0].value)){
                    phoneInp.removeClass('empty_field');
                }else{
                    phoneInp.addClass('empty_field');
                    result = false;

                }
                return result;
            }
            function validateInps(inpsModal) {
                var result = true;
                var checkInputs = false;
                inpsModal.each(function(indx, element){
                    if(parseInt($(element)[0].value)>0){
                        checkInputs = true;
                    }
                });
                if(checkInputs){
                    inpsModal.parent().parent().parent().parent().parent().find('.error-result').fadeOut("slow", function () {});
                }else{
                    inpsModal.parent().parent().parent().parent().parent().find('.error-result').show(500);
                    result = false;
                }
                return result;
            }
        });
	</script>
	<?php
}

add_action('wp_ajax_my_action', 'my_action_add');
add_action('wp_ajax_nopriv_my_action', 'my_action_add');
function my_action_add(){
	global $post, $woocommerce;
	$order_id = wc_create_order();
	$order = wc_get_order( $order_id );
	foreach($_POST['orderList'] as $item){
		//$woocommerce->cart->add_to_cart( $product_id = $item['id'], $quantity = $item['val'], $variation_id = 0, $variation = array(), $cart_item_data = array() );
		$order->add_product(get_product($item['id']), $item['val']); //
	}
	$address = array(
		'first_name' => $_POST['name'],
		'phone'      => $_POST['numbers'],
	);
	if($_POST['is_calc']){
		$order->add_order_note("Ширина = ".$_POST['width']);
		$order->add_order_note("Высота= ".$_POST['height']);
		$order->add_order_note("Длинна полосы = ".$_POST['strip_length']);
		$order->add_order_note("Длинна гребенки= ".$_POST['metal_comb']);
	}

	$order->set_address( $address, 'billing' );
	$order->calculate_totals();
	// Отправить письмо админу
	$mailer = WC()->mailer();
	$email = $mailer->emails['WC_Email_New_Order'];
	$email->trigger( $order->id );

	wp_die();
}
add_action('wp_ajax_callback', 'callback_func');
add_action('wp_ajax_nopriv_callback', 'my_action_add');
function callback_func(){
	global $post, $woocommerce;
	$order_id = wc_create_order();
	$order = wc_get_order( $order_id );
	$address = array(
		'first_name' =>'Заказ обратного звонка',
		'phone'      => $_POST['numbers'],
	);

	$order->set_address( $address, 'billing' );
	$order->calculate_totals();
	// Отправить письмо админу
	$mailer = WC()->mailer();
	$email = $mailer->emails['WC_Email_New_Order'];
	$email->trigger( $order->id );

	wp_die();// выход нужен для того, чтобы в ответе не было ничего лишнего, только то что возвращает функция
}
add_filter( 'wp_default_scripts', 'remove_jquery_migrate' );

function remove_jquery_migrate( &$scripts){
	if(!is_admin()){
		$scripts->remove( 'jquery');
		$scripts->add( 'jquery', false, array( 'jquery-core' ), '1.2.1' );
	}
}
/**
 * Оптимизация скриптов WooCommerce
 * Убираем WooCommerce Generator tag, стили, и скрипты для страниц, не относящихся к WooCommerce.
 */
add_action( 'wp_enqueue_scripts', 'child_manage_woocommerce_styles', 99 );

function child_manage_woocommerce_styles() {
	//убираем generator meta tag
	remove_action( 'wp_head', array( $GLOBALS['woocommerce'], 'generator' ) );

	//для начала проверяем, активен ли WooCommerce, дабы избежать ошибок
	if ( function_exists( 'is_woocommerce' ) ) {
		//отменяем загрузку скриптов и стилей
		if ( ! is_woocommerce() && ! is_cart() && ! is_checkout() ) {
			wp_dequeue_style( 'woocommerce_frontend_styles' );
			wp_dequeue_style( 'woocommerce_fancybox_styles' );
			wp_dequeue_style( 'woocommerce_chosen_styles' );
			wp_dequeue_style( 'woocommerce_prettyPhoto_css' );
			wp_dequeue_script( 'wc_price_slider' );
			wp_dequeue_script( 'wc-single-product' );
			wp_dequeue_script( 'wc-add-to-cart' );
			wp_dequeue_script( 'wc-cart-fragments' );
			wp_dequeue_script( 'wc-checkout' );
			wp_dequeue_script( 'wc-add-to-cart-variation' );
			wp_dequeue_script( 'wc-single-product' );
			wp_dequeue_script( 'wc-cart' );
			wp_dequeue_script( 'wc-chosen' );
			wp_dequeue_script( 'woocommerce' );
			wp_dequeue_script( 'prettyPhoto' );
			wp_dequeue_script( 'prettyPhoto-init' );
			wp_dequeue_script( 'jquery-blockui' );
			wp_dequeue_script( 'jquery-placeholder' );
			wp_dequeue_script( 'fancybox' );
			wp_dequeue_script( 'jqueryui' );

		}
	}

}