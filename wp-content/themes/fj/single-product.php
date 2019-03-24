<?php

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}
global $product;
global $post;

get_header(); ?>
<?php while (have_posts()) : the_post(); ?>
    <div id="type-net-<?php the_ID(); ?>" <?php wc_product_class(); ?>>
        <div class="container m-b-1">
            <div class="row">
                <div class="col-12">
                    <div class="title m-t-0"><?php the_title(); ?></div>
                </div>
                <div class="col-sm-4">
                    <div class="prod-img">
                        <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="prod-content">
                        <div class="prod-price">
                            <?php echo $product->get_price_html(); ?>
                        </div>
                        <div class="btn-fj animated single-buy-prod" data-toggle="modal" data-target="#netModal"
                             data-id="<?php the_ID(); ?>">Заказать!
                        </div>
                        <div class="dop-info">
                            <?php echo $product->get_attribute('comment'); ?>
                        </div>
                        <div class="prod-descr">
                            <?php echo $product->get_description(); ?>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div id="ab-company" class="container-fluid">
        <div id="map_contact"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-9 offset-lg-3 col-xl-7 offset-xl-5">
                    <div class="about-com">
                        <div class="ac-title">Фабрика Жалюзи</div>
                        <div>Мы предлагаем только качественный товар, оптимальные цены на росийском рынке и кратчайшие сроки изготовления продукта любой сложности. Наши контакты:</div>
                        <div class="ab-us-text">
                            <div>г.Омск, ул 10 лет Октября 193/2</div>
                            <div><a href="mailto:info@fabrika55.ru">info@fabrika55.ru</a></div>
                            <div><a href="tel:83812790379">8(3812)79-03-79</a></div>
                        </div>
                        <div class="callback-wrap">
                            <div class="callback">
                                <div class="row">
                                    <div class="col-sm-5">
                                        <div class="callback-text">
                                            Заказать обратный звонок!<br>
                                            <span>Мененджеры свяжутся с Вами в ближайшее время!</span>
                                        </div>
                                    </div>
                                    <div class="col-sm-7">
                                        <div class="callback-form">
                                            <form action="" method="post" id="callback-form">
                                                <label><input type="text" id="your-number" name="your-number" class="inp"></label>
                                                <a class="btn-fj" id="callback_form_btn">Заказать</a>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endwhile; // end of the loop. ?>
<?php get_footer();
