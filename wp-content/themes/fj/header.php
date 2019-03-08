<!DOCTYPE html>
<html <?php language_attributes(); ?> lang="ru">
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="author" content="KasymovRuslan">
	<meta name="keywords" content="пвх завесы, завесы в Омске, морозостойкие завесы, завесы для сварки">
	<meta name="description"
		  content="ПВХ завесы в Омске на заказ! Морозостойкие, стандартные и специальные завесы по низкой цене!">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="yandex-verification" content="dde7bf11a3e3e182" />
	<title>ПВХ завесы в Омске на заказ</title>
	<link rel="icon" type="image/svg+xml" href="favicon.svg">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div class="wrapper">
	<div class="content">
		<div class="container top-header-hidden"></div>
		<div class="container-fluid top-header">
					<div class="container">
						<div class="row">
							<div class="col-12 col-md-6 col-lg-4">
								<div class="logo">
									<?php if($_SERVER['REQUEST_URI']=='/'){?>
										<img src="/wp-content/themes/fj/images/logo.svg" alt="фабрика жалюзи">
									<?php }else{?>
										<a href="/"><img src="/wp-content/themes/fj/images/logo.svg" alt="фабрика жалюзи"></a>
									<?php }?>
								</div>
							</div>
							<div class="col-12 col-md-2 col-lg-6">
								<nav class="navbar navbar-expand-lg">
									<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
										<span class="navbar-toggler-icon"><img src="/wp-content/themes/fj/images/menu-three-horizontal-lines-symbol.svg" alt="hamburger"></span>
									</button>
									<div class="collapse navbar-collapse" id="navbarNav">
										<ul class="navbar-nav" id="menu">
											<li class="nav-item active">
												<a class="nav-link animated" href="<?php echo !is_front_page() ? home_url('#type-zav', 'https') : "#type-zav";?>">Типы завес</a>
											</li>
											<li class="nav-item">
												<a class="nav-link animated" href="<?php echo !is_front_page() ? home_url('#calc', 'https') : "#calc"?>">Калькулятор</a>
											</li>
											<li class="nav-item">
												<a class="nav-link animated" href="<?php echo !is_front_page() ? home_url('#dost', 'https') : "#dost"?>">Доставка</a>
											</li>
											<li class="nav-item">
												<a class="nav-link animated" href="<?php echo !is_front_page() ? home_url('#advantages', 'https') : "#dost"?>">Преимущества</a>
											</li>
											<li class="nav-item">
												<a class="nav-link animated" href="<?php echo !is_front_page() ? home_url('#ab-company', 'https') : "#dost"?>">О нас</a>
											</li>
										</ul>
									</div>
								</nav>
							</div>
							<div class="d-sm-none d-xs-none d-md-flex col-md-4 col-lg-2">
								<a class="btn blue btn-header" href="#ab-company">Заказать звонок!</a>
							</div>
						</div>
					</div>
				</div>