<?php get_header(); ?>

        <div class="container-fluid banner-bg">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="banner">
                            <div class="banner-title">Москитные сетки в каждый дом</div>
                            <div class="banner-text">  Москитные сетки созданы для нашего удобства и комфорта, для того, чтобы защитить наше жилище от непрошенных гостей - мух и
                                комаров, не только создающих дискомфорт в помещении, но и являющихся распространителями инфекций и переносчиками опасных
                                болезней. Москитные сетки защитят ваш дом от пожара из-за брошенных сверху окурков. Также москитные сетки спасут от
                                вездесущего тополиного пуха и в большой степени задержат пыльцу других растений, что облегчит жизнь аллергикам. </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="type-net" class="container m-b-1">
            <div class="row">
                <div class="col-12"><div class="title">Компания «Фабрика Жалюзи» представляет 4 вида москитных сеток</div></div>
                <?echo do_shortcode('[get_product_list_wc]');?>
            </div>
        </div>
        <div id="compl-t" class="container">
            <div class="row">
                <div class="col-12">
                    <div class="title">Предлагаем партнерам наборы комплектации</div>
                </div>
            </div>
        </div>
        <div id="compl" class="container m-b-1">
            <div class="row">
                <div class="col-sm-7">
                    <div class="sub-title">
                        Компания «Фабрика Жалюзи» предлагает партнерам услуги по поставке
                        наборов для сборки москитных сеток
                    </div>
                    <div class="compl-content">
                        В набор входит сетка и соеденители и крепления. Материалы, из которых изготовлена
                        москитная сетка, устойчивы к воздействию погодных условий и перепадам температур.
                        Конструкция крепежа является каественной и устойчивой к механическим повреждениям
                    </div>
                    <div class="btn-fj btn-fixed-w animated" data-toggle="modal" data-target="#complModal" >Посмотреть набор</div>
                </div>
            </div>
        </div>
        <div id="rem-t" class="container">
            <div class="row">
                <div class="col-12">
                    <div class="title">Услуги по ремонту москитных сеток</div>
                </div>
            </div>
        </div>
        <div id="rem" class="container m-b-1">
            <div class="row">
                <div class="col-sm-8 offset-sm-4">
                    <div class="rem-content">
                        <div class="sub-title">
                            При поломке составляющих или повреждении сетки компания «Фабрика Жалюзи» предлагает услугу по
                            ремонту конструкции и замене сетки. Для этого Вам требуется лишь оставить номер, по которому с Вами
                            свяжутся наши мененджеры
                        </div>
                        <div class="rem-text justify-content-around d-flex">
                            <div class="d-flex">Перекатка москитной сетки</div>
                            <div class="d-flex">Всего 300р/кв.м</div>
                        </div>
                    </div>
                    <div class="btn-fj btn-fixed-w animated" id="rem_btn" data-toggle="modal" data-target="#netModal" data-id="31">Заказать</div>
                </div>
            </div>
        </div>
        <div id="dost" class="container m-b-1">
            <div class="row">
                <div class="col-sm-3 d-none d-sm-block">
                    <img class="car-icon" src="<?php echo get_template_directory_uri() ?>/images/shipped.svg" alt="car icon">
                </div>
                <div class="col-sm-9">
                    <div class="dost">
                        <div class="title">Доступна доставка по всей России и Казахстану</div>
                        <div class="sub-title m-b-1">Вы можете рассчитать доставку до вашего города в любой из транспортных компаний, мы доставим до места отправки в нашем городе
                            совершенно бесплатно!
                        </div>
                        <div class="btn-fj btn-fixed-w animated" data-toggle="modal" data-target="#dost-btn">Рассчитать!</div>
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

<div class="modal fade" id="dost-btn" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Доставка по России</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <img src="<?php echo get_template_directory_uri() ?>/images/icon-close.png" alt="close">
                </button>
            </div>
            <div class="modal-body">
                Доставка по России осуществляется транспортными
                компаниями. Комлектующие для самостоятельного
                изготовления отгружаются из г. Омска -
                доставка до транспортной компании бесплатно
                - понедельник, среда, пятница!
                <br/><br/>
                Для расчета цены перевозки основных т/к, перейдите
                по ссылкам ниже:
                <div class="tr-com justify-content-between align-items-center d-flex">
                    <a href="https://tk-kit.ru/" target="_blank" rel="nofollow"><img src="<?php echo get_template_directory_uri() ?>/images/kit.png" alt="kit"></a>
                    <a href="http://www.rateksib.ru/tarify" target="_blank" rel="nofollow"><img src="<?php echo get_template_directory_uri() ?>/images/ratec.png" alt="ratec"></a>
                    <a href="https://pecom.ru/services-are/the-calculation-of-the-cost/?utm_source=google&utm_medium=cpc&utm_campaign=pec_dm_poisk_brend_russia&utm_term=ssilka_kalkulator&gclid=CjwKCAjw2rjcBRBuEiwAheKeL9gtfEI4oi3NRB6X7jmtr_OuobzUCrsp9WWxWxFMGFyzs0QhigsKTBoCflgQAvD_BwE" target="_blank" rel="nofollow"><img src="<?php echo get_template_directory_uri() ?>/images/pec.png" alt="pec"></a>
                    <a href="https://m.dellin.ru/requests/" target="_blank" rel="nofollow"><img src="<?php echo get_template_directory_uri() ?>/images/del.png" alt="del"></a>
                </div>

            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="complModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="form_load">
                <div class="loader"></div>
            </div>
            <div class="modal-header">
                <h5 class="modal-title" id="morozModalLabel">Комплектация</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <img src="<?php echo get_template_directory_uri() ?>/images/icon-close.png" alt="close">
                </button>
            </div>
            <div class="modal-body">
                <div class="list-items-head">
                    <div class="item-name">Наименование</div>
                    <div class="item-price">Цена р/м</div>
                    <div class="item-inp">Количество</div>
                    <div class="item-sum">Сумма</div>
                </div>
                <div class="list-items-modal prod">
                    <?echo do_shortcode('[get_compl_list_wc]');?>
                </div>
                <div class="total-modal">
                    <div class="total-text">Итого</div>
                    <div class="total-num">0</div>
                </div>
                <div class="succes-result">Ваш заказ принят на обработку! Наши мененджеры свяжутся с Вами в ближайшее время!</div>
                <div class="error-result">Выберите товар из списка!</div>
                <div class="form-modal">
                    <div class="form-modal-text">
                        Введите контактные данные и наши мененджеры свяжутся с Вами в ближайшее время
                    </div>
                    <div class="form-modal-inp">
                        <form action="" method="post">
                            <label><input type="text" name="your-name" class="inp" placeholder="Имя" required></label>
                            <label><input type="text" name="your-mumber" class="inp" placeholder="Номер" required></label>
                            <div class=" buyZav">Заказать</div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>

