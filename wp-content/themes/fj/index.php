<?php get_header(); ?>

		<div class="container-fluid slider-bg">
			<?php do_shortcode('[twabc-carousel]')?>
			<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
				</ol>
				<div class="carousel-inner" >
					<div class="carousel-item active" style="background: url('/wp-content/themes/fj/images/banner1.jpg') top center no-repeat">
						<div class="container">
							<div class="row">
								<div class="col-12 col-lg-6">
									<div class="slide-title">Экономия</div>
									<div class="slide-text">Применение ПВХ завес позволит сэкономить до 50% расходов на дополнительный обогрев или охлаждение помещений</div>
								</div>
							</div>
						</div>
					</div>
					<div class="carousel-item" style="background: url('/wp-content/themes/fj/images/banner2.jpg')  top center no-repeat">
						<div class="container">
							<div class="row">
								<div class="col-12 col-lg-6">
									<div class="slide-title">Легкая чистка</div>
									<div class="slide-text">Пластиковые завесы легко чистить, при применении не вызывают экологической опасности. Не подвержены горению</div>
								</div>
							</div>
						</div>
					</div>
					<div class="carousel-item" style="background: url('/wp-content/themes/fj/images/banner3.jpg')  top center no-repeat">
						<div class="container">
							<div class="row">
								<div class="col-12 col-lg-6">
									<div class="slide-title">Морозостойкость</div>
									<div class="slide-text">Завесы сохраняют работоспособность даже при очень низких температурах</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
		</div>
		<div id="type-zav" class="container m-b-1">
			<div class="row">
				<div class="col-12"><div class="title">Компания «Фабрика Жалюзи» предлагает 3 типа завес:</div></div>
				<div class="col-sm-12 col-md-4">
					<div class="product">
						<div class="prod-img">
							<img src="/wp-content/themes/fj/images/moroz.jpg" alt="морозостойкие">
						</div>
						<div class="prod-content">
							<div class="prod-title">
								Морозостойкие
							</div>
							<div class="prod-descr">
								Температурный режим: от  -40С°  до  +5С°,
								Применяется в морозильных и холодильных
								камерах, уличных проёмах с большими
								перепадами температур.
							</div>
							<div class="btn blue" data-toggle="modal" data-target="#morozModal">Заказать сейчас!</div>
						</div>
					</div>
				</div>
				<div class="col-sm-12 col-md-4">
					<div class="product">
						<div class="prod-img">
							<img src="/wp-content/themes/fj/images/standart.jpg" alt="морозостойкие">
						</div>
						<div class="prod-content">
							<div class="prod-title">
								Стандартные
							</div>
							<div class="prod-descr">
								Температурный режим: от  -5С°  до  +50С°,
								Используется в холодильных камерах,
								в производственных помещениях для
								разделения рабочей площади.
							</div>
							<div class="btn blue" data-toggle="modal" data-target="#standartModal">Заказать сейчас!</div>
						</div>
					</div>
				</div>
				<div class="col-sm-12 col-md-4">
					<div class="product">
						<div class="prod-img">
							<img src="/wp-content/themes/fj/images/spec.jpg" alt="морозостойкие">
						</div>
						<div class="prod-content">
							<div class="prod-title">
								Специальные
							</div>
							<div class="prod-descr">
								Температурный режим: от  -5С°  до  +70С°,
								Используются при ограждении сварочных
								и прочих рабочих процессов, защищает
								от световых излучений и пыли.
							</div>
							<div class="btn blue" data-toggle="modal" data-target="#specModal">Заказать сейчас!</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="calc" class="container-fluid calc-bg m-b-1">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="title white">Рассчитайте приблизительную стоимость</div>
					</div>
					<div class="col-sm-8 col-lg-10 col-xl-8">
						<div class="calc-inputs">
							<label>
								Введите ширину
								<input type="text" name="width" id="width" class="inp"> м
							</label>
							<label>
								высоту
								<input type="text" name="height" id="height" class="inp"> м
							</label>
							<label>
								<select name="calc_select" id="calc_select" class="inp">
									<option value="0">Морозостойкие</option>
									<option value="1">Стандартные</option>
									<option value="2">Специальные</option>
								</select>
							</label>
						</div>
					</div>
					<div class="col-sm-4 col-lg-2 col-xl-4">
						<div class="btn blue m-b_1" id="calc_btn">Рассчитать!</div>
					</div>
					<div class="col-12">
						<div class="gray-line-block"></div>
					</div>
				</div>
				<div id="calc_hidden_block">
					<div class="row" >
						<div class="col-12 col-sm-4">
							<div class="calc-title">Итоги рассчета</div>
							<div class="calc-list calc-list-total">
								<div class="calc-list-elem"><div class="cle-name">Длинна полосы</div><div class="cle-vol"><span id="strip_length">64</span> м</div></div>
								<div class="calc-list-elem"><div class="cle-name">Цена пленки</div><div class="cle-vol"><span id="film_price">64</span> руб</div></div>
								<div class="calc-list-elem"><div class="cle-name">Цена крепления</div><div class="cle-vol"><span id="fastener_price">64</span> руб</div></div>
								<div class="calc-list-elem"><div class="cle-name">Цена монтажа</div><div class="cle-vol"><span id="install_price">64</span> руб</div></div>
							</div>
							<div class="calc-total">
								<div class="calc-list-elem"><div class="cle-name">Итого:</div><div class="cle-vol"><span id="total">64</span> руб</div></div>
							</div>
						</div>
						<div class="col-12 col-sm-4">
							<div class="calc-title">Содержание комплекта</div>
							<div class="calc-list">
								<div class="calc-list-elem"><div class="cle-name">Кол-во полос</div><div class="cle-vol"><span id="quant_length">64</span> шт</div></div>
								<div class="calc-list-elem"><div class="cle-name">Количество пластин</div><div class="cle-vol"><span id="quant_plates">64</span> шт</div></div>
								<div class="calc-list-elem"><div class="cle-name">Металлическая гребенка</div><div class="cle-vol"><span id="metal_comb">64</span> м</div></div>
							</div>
							<div class="calc-title">Харктеристика комплекта</div>
							<div class="calc-list">
								<div class="calc-list-elem">
									<div class="cle-name b">Типоразмер</div>
									<div class="cle-vol"><span id="type_size">2*200</span> шт</div>
								</div>
								<div class="calc-list-elem">
									<div class="cle-name b f-none">Нахлест: </div>
									<div class="cle-descr">
										40%,соседние полосы в нахлест на 1проушину
										с каждой стороны на 4 мм
									</div>
								</div>
							</div>
						</div>
						<div class="col-12 col-sm-4">
							<div class="calc-title">Закажите прямо сейчас!</div>
							<div class="calc-form">
								<form action="" method="post" id="calc-form">
									<div class="row">
										<div class="col-12 col-md-6">
											<label><input type="text" name="your-name" class="inp" placeholder="Имя"></label>
										</div>
										<div class="col-12 col-md-6">
											<label><input type="text" name="your-number" class="inp" placeholder="Номер"></label>
										</div>
									</div>
									<div class="btn blue" id="calc_form_btn">Заказать сейчас!</div>
								</form>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
		<div id="dost" class="container m-b-1">
			<div class="row">
				<div class="col-md-5 col-lg-3">
					<div class="dost-img">
						 <img src="/wp-content/themes/fj/images/car.png" alt="car icon">
					</div>
				</div>
				<div class="col-md-7 col-lg-9">
					<div class="dost">
						<div class="title">Доступна доставка по всей России и Казахстану</div>
						<div class="sub-title">Вы можете рассчитать доставку до вашего города в любой из транспортных компаний, мы доставим до места отправки в нашем городе
							совершенно бесплатно!
						</div>
						<div class="btn blue" data-toggle="modal" data-target="#exampleModal">Рассчитать!</div>
					</div>
				</div>
			</div>
		</div>
		<div id="advantages" class="container-fluid adv-bg">
			<div class="container">
				<div class="row">
					<div class="col-sm-12"><div class="title">Преимущества ПВХ завес</div></div>
					<div class="col-md-4 col-xl-6">
						<div class="adv-img">
							<img src="/wp-content/themes/fj/images/advantag_rul.png" alt="пвхзавесы">
						</div>
					</div>
					<div class="col-md-8 col-xl-6">
						<div class="popular-list">
							<div class="popular-elem"><img src="/wp-content/themes/fj/images/orange_point.png" alt="oранжевая иконка">Сохраняют до 50% тепла или холодного воздуха</div>
							<div class="popular-elem"><img src="/wp-content/themes/fj/images/orange_point.png" alt="oранжевая иконка">Изолируют от проникновения животных и насекомых</div>
							<div class="popular-elem"><img src="/wp-content/themes/fj/images/orange_point.png" alt="oранжевая иконка">Регулируют воздухообмен и воздушные потоки</div>
							<div class="popular-elem"><img src="/wp-content/themes/fj/images/orange_point.png" alt="oранжевая иконка">Ограничивают зону сварочных работ</div>
							<div class="popular-elem"><img src="/wp-content/themes/fj/images/orange_point.png" alt="oранжевая иконка">Подходят под все типы проемов</div>
						</div>
						<div class="popular-elem">Также завесы можно использовать в местах, где раскрытие дверей невозможно.</div>
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
													<label><input type="text" name="your-number" class="inp" id="your-number" placeholder="Номер"></label>
													<div class="btn blue" id="callback_form_btn">Заказать</div>
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

<?php get_footer(); ?>


</body>
</html>
