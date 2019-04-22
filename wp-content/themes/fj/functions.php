<?php
function enqueue_styles()
{
    wp_register_style('my_bootstrap', get_template_directory_uri() . '/bootstrap/css/bootstrap.min.css');
    wp_register_style('my_style', get_template_directory_uri() . '/css/style.css');

    wp_enqueue_style('my_bootstrap');
    wp_enqueue_style('my_style');
}

add_action('wp_enqueue_scripts', 'enqueue_styles');

function enqueue_scripts()
{
    wp_register_script('my-jquery', get_template_directory_uri() . '/js/jquery.js', '', 1.1, true);
    wp_register_script('bootstrap', get_template_directory_uri() . '/bootstrap/js/bootstrap.min.js', '', 1.1, true);
    wp_register_script('script', get_template_directory_uri() . '/js/script.js', '', 1.1, true);
    if (is_front_page()) {
        wp_register_script('menu', get_template_directory_uri() . '/js/menu.js', '', 1.1, true);
    }
    wp_enqueue_script('my-jquery');
    wp_enqueue_script('bootstrap');
    wp_enqueue_script('script');
    wp_enqueue_script('menu');
}

add_action('wp_enqueue_scripts', 'enqueue_scripts');

function enqueue_recaptcha()
{
    if (is_front_page()) {
        wp_register_script('recapthca', get_template_directory_uri() . '/js/recapthcaWidget.js', '', 1.1, true);
    } else {
        wp_register_script('recapthca', get_template_directory_uri() . '/js/recapthcaWidgetOnlyNet.js', '', 1.1, true);
    }
    wp_enqueue_script('recapthca');
}

add_action( 'wp_head', 'enqueue_recaptcha' );

function get_compl_list_wc_func()
{
    $loop = new WP_Query(array(
        'posts_per_page' => 40,
        'orderby' => 'menu_order',
        'order' => 'ASC',
        'product_cat' => 'compl',
    ));


    while ($loop->have_posts()): $loop->the_post(); ?>
        <div class="item-modal">
            <div class="item-name"><?php the_title(); ?></div>
            <div class="item-price"><?php echo get_post_meta(get_the_ID(), '_price', true); ?></div>
            <div class="item-inp">
                <div class="minus">-</div>
                <label>
                    <input type="text" data-id="<?php the_ID(); ?>" class="inp-modal" value="0" max="99999" min="0">
                </label>
                <div class="plus">+</div>
            </div>
            <div class="item-sum"></div>
        </div>
    <?php endwhile;
}

function get_product_list_wc_func()
{
    $loop = new WP_Query(array(
        'post_type' => 'product',
        'posts_per_page' => 40,
        'orderby' => 'menu_order',
        'order' => 'ASC',
        'product_cat' => 'mosquit',
    ));

    while ($loop->have_posts()): $loop->the_post();
        ?>
        <div class="col-lg-6">
            <div class="product">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="prod-content">
                            <div class="prod-title">
                                <?php the_title(sprintf('<a href="%s">', esc_url(get_permalink())), '</a>'); ?>
                            </div>
                            <div class="prod-price">
                                от <?php echo get_post_meta(get_the_ID(), '_price', true); ?>
                            </div>
                            <div class="prod-descr">
                                <?php the_excerpt() ?>
                            </div>
                            <div class="btn-fj animated net-btn" data-toggle="modal" data-target="#netModal"
                                 data-id="<?php the_ID(); ?>">Заказать сейчас!
                            </div>
                            <a href="<?php echo esc_url(get_permalink()); ?>">Подробнее</a>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="prod-img">
                            <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endwhile;
}

add_shortcode('get_product_list_wc', 'get_product_list_wc_func');
add_shortcode('get_compl_list_wc', 'get_compl_list_wc_func');

add_action('wp_enqueue_scripts', 'myajax_data', 99);
function myajax_data()
{
    wp_localize_script('script', 'myajax', array(
        'url' => admin_url('admin-ajax.php')
    ));
}

add_action('wp_footer', 'my_action_javascript', 99);
function my_action_javascript()
{
    ?>
    <script type="text/javascript">
        $(document).ready(function ($) {
            $('.net-btn').on('click', function () {
                $('#buyZav')[0].dataset.id = $(this)[0].dataset.id;
                $('.succes-result').hide();
                $('#tovarModalLabel')[0].innerHTML = $(this).parent().find('.prod-title a')[0].innerHTML;
            });
            $('.single-buy-prod').on('click', function () {
                $('#buyZav')[0].dataset.id = $(this)[0].dataset.id;
                $('.succes-result').hide();
                $('#tovarModalLabel')[0].innerHTML = $('.title')[0].innerHTML;
            });
            $('#rem_btn').on('click', function () {
                $('#buyZav')[0].dataset.id = $(this)[0].dataset.id;
                $('.succes-result').hide();
                $('#tovarModalLabel')[0].innerHTML = 'Перекатка москитной сетки';
            });

            $('#buyZav').on('click', function () {
                var nameInp = $(this).parent().find('input[name="your-name"]');
                var phoneInp = $(this).parent().find('input[name="your-mumber"]');
                var googleResponse = grecaptcha.getResponse(widgetId2);
                if (validate(nameInp, phoneInp, googleResponse)) {
                    var data = {
                        action: 'buy_net',
                        product_id: $(this)[0].dataset.id,
                        name: nameInp[0].value,
                        numbers: phoneInp[0].value,
                        g_recaptcha_response: googleResponse,
                    };
                    $(this).parent().parent().parent().parent().parent().find('.form_load')[0].style.display = 'block';
                    var thisBtn = $(this);
                    console.log(data);
                    jQuery.post(
                        myajax.url,
                        data,
                        function (response) {
                            if (response) {
                                thisBtn.parent().parent().parent().parent().parent().find('.form_load')[0].style.display = 'none';
                                thisBtn.parent().parent().parent().parent().find('.succes-result').show(1000);
                            } else {
                                thisBtn.parent().parent().parent().parent().parent().find('.form_load')[0].style.display = 'none';
                                thisBtn.parent().parent().parent().parent().find('.error-valid-result').show(1000);
                            }
                        }
                    );
                }
            });

            $('#buyCompl').on('click', function () {
                var nameInp = $(this).parent().find('input[name="your-name"]');
                var phoneInp = $(this).parent().find('input[name="your-mumber"]');
                var inpsModal = $(this).parent().parent().parent().parent().find('.inp-modal');
                var googleResponse = grecaptcha.getResponse(widgetId1);
                if (validateInps(inpsModal) && validate(nameInp, phoneInp, googleResponse)) {
                    var orderList = [];
                    var checkInputs = false;
                    inpsModal.each(function (indx, element) {
                        if (parseInt($(element)[0].value) > 0) {
                            orderList.push({id: $(element)[0].dataset.id, val: $(element)[0].value});
                            checkInputs = true;
                        }
                    });
                    var data = {
                        action: 'compl_action',
                        orderList: orderList,
                        name: nameInp[0].value,
                        numbers: phoneInp[0].value,
                        g_recaptcha_response: googleResponse,
                    };
                    console.log(data);
                    $(this).parent().parent().parent().parent().parent().find('.form_load')[0].style.display = 'block';
                    var thisBtn = $(this);
                    jQuery.post(
                        myajax.url,
                        data,
                        function (response) {
                            if (response) {
                                thisBtn.parent().parent().parent().parent().parent().find('.form_load')[0].style.display = 'none';
                                thisBtn.parent().parent().parent().parent().find('.inp-modal').each(function (indx, element) {
                                    if (parseInt($(element)[0].value) > 0) {
                                        $(element)[0].value = 0;
                                        $(element).trigger("change");
                                    }
                                });
                                thisBtn.parent().parent().parent().parent().find('.succes-result').show(1000);
                            } else {
                                thisBtn.parent().parent().parent().parent().parent().find('.form_load')[0].style.display = 'none';
                                thisBtn.parent().parent().parent().parent().find('.error-valid-result').show(1000);
                            }
                        }
                    );
                }
            });
            $('#callback_form_btn').on('click', function () {
                var phoneInp = $('#your-number');
                var regNum = /^((8|\+7)[\- ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{7,10}$/;
                if (regNum.test(phoneInp[0].value)) {
                    phoneInp.removeClass('empty_field');
                    var data = {
                        action: 'callback',
                        numbers: phoneInp[0].value
                    };
                    jQuery.post(
                        myajax.url,
                        data,
                        function (response) {
                            if (response) {
                                $('.callback-wrap')[0].innerHTML = "<div class=\"succes-result d-block\">Ваш заказ принят на обработку! Наши мененджеры свяжутся с Вами в ближайшее время!</div>\n";
                            } else {
                                thisBtn.parent().parent().parent().parent().parent().find('.form_load')[0].style.display = 'none';
                                thisBtn.parent().parent().parent().parent().find('.error-valid-result').show(1000);
                            }
                        }
                    );
                } else {
                    phoneInp.addClass('empty_field');
                    result = false;

                }
            });

            function validate(nameInp, phoneInp, googleResponse) {
                var result = true;
                var regNum = /^((8|\+7)[\- ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{7,10}$/;
                if (nameInp[0].value !== '') {
                    $('.error-compl-valid-result').hide(1000);
                    nameInp.removeClass('empty_field');
                } else {
                    nameInp.addClass('empty_field');
                    $('.error-compl-valid-result').show(1000);
                    result = false;
                }
                if (regNum.test(phoneInp[0].value)) {
                    phoneInp.removeClass('empty_field');
                    $('.error-compl-valid-result').hide(1000);
                } else {
                    phoneInp.addClass('empty_field');
                    $('.error-compl-valid-result').show(1000);
                    result = false;
                }
                if (googleResponse) {
                    phoneInp.removeClass('empty_field');
                    $('.error-compl-valid-result').hide(1000);
                } else {
                    phoneInp.addClass('empty_field');
                    $('.error-compl-valid-result').show(1000);
                    result = false;
                }

                return result;
            }

            function validateInps(inpsModal) {
                var result = true;
                var checkInputs = false;
                inpsModal.each(function (indx, element) {
                    if (parseInt($(element)[0].value) > 0) {
                        checkInputs = true;
                    }
                });
                if (checkInputs) {
                    inpsModal.parent().parent().parent().parent().parent().find('.error-result').fadeOut("slow", function () {
                    });
                } else {
                    inpsModal.parent().parent().parent().parent().parent().find('.error-result').show(500);
                    result = false;
                }
                return result;
            }
        });
    </script>
    <?php
}

add_action('wp_ajax_buy_net', 'my_action_add');
add_action('wp_ajax_nopriv_buy_net', 'my_action_add');
function my_action_add()
{
    if (empty($_POST['name']) || empty($_POST['numbers']) || empty($_POST['product_id'])) {
        return false;
    }

    $url = 'https://www.google.com/recaptcha/api/siteverify';
    $data = [
        'secret' => '6Lf6l1AUAAAAANXqjPAwOc4-BF2teVb6M818UGyi',
        'response' => $_POST["g_recaptcha_response"]
    ];
    $options = [
        'http' => [
            'method' => 'POST',
            'content' => http_build_query($data)
        ]
    ];
    $context = stream_context_create($options);
    $verify = file_get_contents($url, false, $context);
    $captcha_success = json_decode($verify);
    if ($captcha_success->success == false) {
        return false;
    }

    global $post, $woocommerce;
    $order_id = wc_create_order();
    $order = wc_get_order($order_id);
    $order->add_product(get_product($_POST['product_id']), 1); //
    $address = array(
        'first_name' => $_POST['name'],
        'phone' => $_POST['numbers'],
    );

    $order->set_address($address, 'billing');
    $order->calculate_totals();
    // Отправить письмо админу
    $mailer = WC()->mailer();
    $email = $mailer->emails['WC_Email_New_Order'];
    $email->trigger($order->id);

    return true;
}

add_action('wp_ajax_compl_action', 'compl_action');
add_action('wp_ajax_nopriv_compl_action', 'compl_action');
function compl_action()
{
    if (empty($_POST['name']) || empty($_POST["g_recaptcha_response"]) || empty($_POST['numbers']) || empty($_POST['orderList'])) {
        return false;
    }

    $url = 'https://www.google.com/recaptcha/api/siteverify';
    $data = [
        'secret' => '6Lf6l1AUAAAAANXqjPAwOc4-BF2teVb6M818UGyi',
        'response' => $_POST["g_recaptcha_response"]
    ];
    $options = [
        'http' => [
            'method' => 'POST',
            'content' => http_build_query($data)
        ]
    ];

    global $post, $woocommerce;
    $order_id = wc_create_order();
    $order = wc_get_order($order_id);
    foreach ($_POST['orderList'] as $item) {
        $order->add_product(get_product($item['id']), $item['val']); //
    }
    $address = array(
        'first_name' => $_POST['name'],
        'phone' => $_POST['numbers'],
    );

    $order->set_address($address, 'billing');
    $order->calculate_totals();
    // Отправить письмо админу
    $mailer = WC()->mailer();
    $email = $mailer->emails['WC_Email_New_Order'];
    $email->trigger($order->id);

    return true;
}

add_action('wp_ajax_callback', 'callback_func');
add_action('wp_ajax_nopriv_callback', 'callback_func');//остановился тут
function callback_func()
{
    if (empty($_POST['numbers'])) {
        return false;
    }
    global $post, $woocommerce;
    $order_id = wc_create_order();
    $order = wc_get_order($order_id);
    $address = array(
        'first_name' => 'Заказ обратного звонка',
        'phone' => $_POST['numbers'],
    );

    $order->set_address($address, 'billing');
    $order->calculate_totals();
    // Отправить письмо админу
    $mailer = WC()->mailer();
    $email = $mailer->emails['WC_Email_New_Order'];
    $email->trigger($order->id);

    wp_die();
}

add_filter('wp_default_scripts', 'remove_jquery_migrate');

function remove_jquery_migrate(&$scripts)
{
    if (!is_admin()) {
        $scripts->remove('jquery');
        $scripts->add('jquery', false, array('jquery-core'), '1.2.1');
    }
}

/**
 * Оптимизация скриптов WooCommerce
 * Убираем WooCommerce Generator tag, стили, и скрипты для страниц, не относящихся к WooCommerce.
 */
add_action('wp_enqueue_scripts', 'child_manage_woocommerce_styles', 99);

function child_manage_woocommerce_styles()
{
    //убираем generator meta tag
    remove_action('wp_head', array($GLOBALS['woocommerce'], 'generator'));

    //для начала проверяем, активен ли WooCommerce, дабы избежать ошибок
    if (function_exists('is_woocommerce')) {
        //отменяем загрузку скриптов и стилей
        if (!is_woocommerce() && !is_cart() && !is_checkout()) {
            wp_dequeue_style('woocommerce_frontend_styles');
            wp_dequeue_style('woocommerce_fancybox_styles');
            wp_dequeue_style('woocommerce_chosen_styles');
            wp_dequeue_style('woocommerce_prettyPhoto_css');
            wp_dequeue_script('wc_price_slider');
            wp_dequeue_script('wc-single-product');
            wp_dequeue_script('wc-add-to-cart');
            wp_dequeue_script('wc-cart-fragments');
            wp_dequeue_script('wc-checkout');
            wp_dequeue_script('wc-add-to-cart-variation');
            wp_dequeue_script('wc-single-product');
            wp_dequeue_script('wc-cart');
            wp_dequeue_script('wc-chosen');
            wp_dequeue_script('woocommerce');
            wp_dequeue_script('prettyPhoto');
            wp_dequeue_script('prettyPhoto-init');
            wp_dequeue_script('jquery-blockui');
            wp_dequeue_script('jquery-placeholder');
            wp_dequeue_script('fancybox');
            wp_dequeue_script('jqueryui');

        }
    }
}
