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
            <?php if (get_the_ID() === 14) { ?>
                <div class="row">
                    <div class="col-12">
                        <div class="table-wrap">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th scope="col">Ш / В</th>
                                    <th scope="col">0,5</th>
                                    <th scope="col">0,55</th>
                                    <th scope="col">0,6</th>
                                    <th scope="col">0,65</th>
                                    <th scope="col">0,7</th>
                                    <th scope="col">0,75</th>
                                    <th scope="col">0,8</th>
                                    <th scope="col">0,85</th>
                                    <th scope="col">0,9</th>
                                    <th scope="col">0,95</th>
                                    <th scope="col">1</th>
                                    <th scope="col">1,05</th>
                                    <th scope="col">1,1</th>
                                    <th scope="col">1,15</th>
                                    <th scope="col">1,2</th>
                                    <th scope="col">1,3</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>3222</td>
                                    <td>3368</td>
                                    <td>3515</td>
                                    <td>3663</td>
                                    <td>3810</td>
                                    <td>3957</td>
                                    <td>4104</td>
                                    <td>4251</td>
                                    <td>4398</td>
                                    <td>4545</td>
                                    <td>4692</td>
                                    <td>4839</td>
                                    <td>4986</td>
                                    <td>5133</td>
                                    <td>5281</td>
                                    <td>5575</td>
                                </tr>
                                <tr>
                                    <th scope="row">1,1</th>
                                    <td>3310</td>
                                    <td>3457</td>
                                    <td>3604</td>
                                    <td>3751</td>
                                    <td>3898</td>
                                    <td>4045</td>
                                    <td>4192</td>
                                    <td>4339</td>
                                    <td>4487</td>
                                    <td>4634</td>
                                    <td>4781</td>
                                    <td>4928</td>
                                    <td>5075</td>
                                    <td>5222</td>
                                    <td>5369</td>
                                    <td>5663</td>
                                </tr>
                                <tr>
                                    <th scope="row">1,2</th>
                                    <td>3398</td>
                                    <td>3546</td>
                                    <td>3693</td>
                                    <td>3840</td>
                                    <td>3987</td>
                                    <td>4134</td>
                                    <td>4281</td>
                                    <td>4428</td>
                                    <td>4575</td>
                                    <td>4722</td>
                                    <td>4869</td>
                                    <td>5016</td>
                                    <td>5163</td>
                                    <td>5311</td>
                                    <td>5458</td>
                                    <td>5752</td>
                                </tr>
                                <tr>
                                    <th scope="row">1,3</th>
                                    <td>3487</td>
                                    <td>3634</td>
                                    <td>3781</td>
                                    <td>3928</td>
                                    <td>4075</td>
                                    <td>4222</td>
                                    <td>4370</td>
                                    <td>4517</td>
                                    <td>4664</td>
                                    <td>4811</td>
                                    <td>4958</td>
                                    <td>5105</td>
                                    <td>5252</td>
                                    <td>5399</td>
                                    <td>5546</td>
                                    <td>5840</td>
                                </tr>
                                <tr>
                                    <th scope="row">1,4</th>
                                    <td>3575</td>
                                    <td>3723</td>
                                    <td>3870</td>
                                    <td>4017</td>
                                    <td>4164</td>
                                    <td>4311</td>
                                    <td>4458</td>
                                    <td>4605</td>
                                    <td>4752</td>
                                    <td>4899</td>
                                    <td>5046</td>
                                    <td>5194</td>
                                    <td>5341</td>
                                    <td>5488</td>
                                    <td>5635</td>
                                    <td>5929</td>
                                </tr>
                                <tr>
                                    <th scope="row">1,5</th>
                                    <td>3665</td>
                                    <td>3811</td>
                                    <td>3958</td>
                                    <td>4105</td>
                                    <td>4253</td>
                                    <td>4400</td>
                                    <td>4547</td>
                                    <td>4694</td>
                                    <td>4841</td>
                                    <td>4988</td>
                                    <td>5135</td>
                                    <td>5282</td>
                                    <td>5429</td>
                                    <td>5576</td>
                                    <td>5723</td>
                                    <td>6018</td>
                                </tr>
                                <tr>
                                    <th scope="row">1,6</th>
                                    <td>3753</td>
                                    <td>3900</td>
                                    <td>4047</td>
                                    <td>4194</td>
                                    <td>4341</td>
                                    <td>4488</td>
                                    <td>4635</td>
                                    <td>4782</td>
                                    <td>4929</td>
                                    <td>5077</td>
                                    <td>5224</td>
                                    <td>5371</td>
                                    <td>5518</td>
                                    <td>5665</td>
                                    <td>5812</td>
                                    <td>6106</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
    <div id="ab-company" class="container-fluid">
        <div id="map_contact"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-9 offset-lg-3 col-xl-7 offset-xl-5">
                    <div class="about-com">
                        <div class="ac-title">Фабрика Жалюзи</div>
                        <div>Мы предлагаем только качественный товар, оптимальные цены на росийском рынке и кратчайшие
                            сроки изготовления продукта любой сложности. Наши контакты:
                        </div>
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
                                                <label><input type="text" id="your-number" name="your-number"
                                                              class="inp"></label>
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
