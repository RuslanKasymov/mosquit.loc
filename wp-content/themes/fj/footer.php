</div>
<footer class="footer_bg">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-4">
                <div class="logo-footer">
                    <img src="<?php echo get_template_directory_uri() ?>/images/logo-white.svg" alt="фабрика жалюзи">
                </div>
            </div>
            <div class="col-12 col-md-5 col-xl-6">
                <div class="footer-text">Находясь на нашем сайте вы подписываете <a href="">пользовательское
                        соглашение</a></div>
            </div>
            <div class="col-12 col-md-3 col-xl-2">
                <div class="footer-social animated">
                    <a href="https://ok.ru/fabrikazhalousie" class="animated"><span class="icon-odnoklassniki"></span></a>
                    <a href="https://plus.google.com/104339461953822560479" class="animated"><span class="icon-google-plus"></span></a>
                    <a href="https://www.instagram.com/fabrika.jalousie/" class="animated"><span  class="icon-instagram"></span></a>
                    <a href="https://vk.com/fabrikajalousie" class="animated"><span class="icon-vk"></span></a>
                </div>
            </div>
        </div>
    </div>
</footer>
</div>
<!-- Modal -->
<div class="modal fade" id="netModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="form_load">
                <div class="loader"></div>
            </div>
            <div class="modal-header">
                <h5 class="modal-title" id="tovarModalLabel">Рулонные</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <img src="<?php echo get_template_directory_uri() ?>/images/icon-close.png" alt="close">
                </button>
            </div>
            <div class="modal-body">
                <div class="succes-result">Ваш заказ принят на обработку! Наши мененджеры свяжутся с Вами в ближайшее
                    время!
                </div>
                <div class="error-result">Выберите товар из списка!</div>
                <div class="form-modal">
                    <div class="form-modal-text">
                        Введите контактные данные и наши мененджеры свяжутся с Вами в ближайшее время
                    </div>
                    <div class="form-modal-inp">
                        <form action="" method="post">
                            <label><input type="text" name="your-name" class="inp" placeholder="Имя" required></label>
                            <label><input type="text" name="your-mumber" class="inp" placeholder="Номер"
                                          required></label>
                            <div class="buyZav" id="buyZav">Заказать</div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php wp_footer(); ?>
<script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU"></script>

</body>
</html>
