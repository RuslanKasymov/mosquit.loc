</div>
<footer class="footer_bg">

	<div class="container">

		<div class="row">
			<div class="col-12 col-md-4">
				<div class="logo-footer">
					<img src="/wp-content/themes/fj/images/logo_w.svg" alt="фабрика жалюзи">
				</div>
			</div>
			<div class="col-12 col-md-5 col-xl-6">
				<div class="footer-text">Находясь на нашем сайте вы подписываете <a href="/%d0%bf%d0%be%d0%bb%d0%b8%d1%82%d0%b8%d0%ba%d0%b0-%d0%ba%d0%be%d0%bd%d1%84%d0%b8%d0%b4%d0%b5%d0%bd%d1%86%d0%b8%d0%b0%d0%bb%d1%8c%d0%bd%d0%be%d1%81%d1%82%d0%b8/">пользовательское соглашение</a></div>
			</div>
			<div class="col-12 col-md-3 col-xl-2">
				<div class="footer-social animated">
					<a href="https://ok.ru/fabrikazhalousie" class="animated"><span class="icon-odnoklassniki"></span></a>
					<a href="https://plus.google.com/104339461953822560479" class="animated"><span class="icon-google-plus"></span></a>
					<a href="https://www.instagram.com/fabrika.jalousie/" class="animated"><span class="icon-instagram"></span></a>
					<a href="https://vk.com/fabrikajalousie" class="animated"><span class="icon-vk"></span></a>
				</div>
			</div>
		</div>
	</div>
</footer>
</div>
<!-- Modal -->
</div>
</div>
<div class="modal fade" id="morozModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="form_load">
				<div class="loader"></div>
			</div>
			<div class="modal-header">
				<h5 class="modal-title" id="morozModalLabel">Морозостойкие</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<img src="/wp-content/themes/fj/images/icon-close.png" alt="close">
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
					<?echo do_shortcode('[get_product_list_wc cat="moroz"]');?>
				</div>
				<div class="list-items-head">Комплектующие</div>
				<div class="list-items-modal compl">
					<?echo do_shortcode('[get_product_list_wc cat="compl"]');?>

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
							<div class="btn blue buyZav">Заказать</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="standartModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="form_load">
				<div class="loader"></div>
			</div>
			<div class="modal-header">
				<h5 class="modal-title" id="morozModalLabel">Стандартные</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<img src="/wp-content/themes/fj/images/icon-close.png" alt="close">
				</button>
			</div>
			<div class="modal-body">
				<div class="list-items-head">
					<div class="item-name">Наименование</div>
					<div class="item-price">Цена р/м</div>
					<div class="item-inp">Количество</div>
					<div class="item-sum">Сумма</div>
				</div>
				<div class="list-items-modal">
					<?echo do_shortcode('[get_product_list_wc cat="standart"]');?>
				</div>
				<div class="list-items-head">Комплектующие</div>
				<div class="list-items-modal compl">
					<?echo do_shortcode('[get_product_list_wc cat="compl"]');?>
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
							<div class="btn blue buyZav">Заказать</div>
						</form>
					</div>
				</div>
			</div>

		</div>
	</div>
</div>
<div class="modal fade" id="specModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="form_load">
				<div class="loader"></div>
			</div>
			<div class="modal-header">
				<h5 class="modal-title" id="morozModalLabel">Специальные</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<img src="/wp-content/themes/fj/images/icon-close.png" alt="close">
				</button>
			</div>
			<div class="modal-body">
				<div class="list-items-head">
					<div class="item-name">Наименование</div>
					<div class="item-price">Цена р/м</div>
					<div class="item-inp">Количество</div>
					<div class="item-sum">Сумма</div>
				</div>
				<div class="list-items-modal">
					<?echo do_shortcode('[get_product_list_wc cat="spec"]');?>
				</div>
				<div class="list-items-head">Комплектующие</div>
				<div class="list-items-modal compl">
					<?echo do_shortcode('[get_product_list_wc cat="compl"]');?>

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
							<div class="btn blue buyZav">Заказать</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Доставка по России</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<img src="/wp-content/themes/fj/images/icon-close.png" alt="close">
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
				<div class="tr-com justify-content-between align-items-center">
					<a href="https://tk-kit.ru/" target="_blank" rel="nofollow"><img src="/wp-content/themes/fj/images/kit.png" alt="kit"></a>
					<a href="http://www.rateksib.ru/tarify" target="_blank" rel="nofollow"><img src="/wp-content/themes/fj/images/ratec.png" alt="ratec"></a>
					<a href="https://pecom.ru/services-are/the-calculation-of-the-cost/?utm_source=google&utm_medium=cpc&utm_campaign=pec_dm_poisk_brend_russia&utm_term=ssilka_kalkulator&gclid=CjwKCAjw2rjcBRBuEiwAheKeL9gtfEI4oi3NRB6X7jmtr_OuobzUCrsp9WWxWxFMGFyzs0QhigsKTBoCflgQAvD_BwE" target="_blank" rel="nofollow"><img src="/wp-content/themes/fj/images/pec.png" alt="pec"></a>
					<a href="https://m.dellin.ru/requests/" target="_blank" rel="nofollow"><img src="/wp-content/themes/fj/images/del.png" alt="del"></a>
				</div>

			</div>
		</div>
	</div>
</div>

<?php wp_footer(); ?>
<script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU"></script>

</body>
</html>
