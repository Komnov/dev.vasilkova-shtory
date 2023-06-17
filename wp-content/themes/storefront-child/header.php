<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package storefront
 */

?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<!-- bootstrap	 -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php wp_body_open(); ?>

<?php do_action( 'storefront_before_site' ); ?>

<div id="page" class="hfeed site">
	<?php do_action( 'storefront_before_header' ); ?>

	<header class="header" id="masthead" role="banner" style="<?php storefront_header_styles(); ?>">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 header__logo">
					<div>
						<a href="/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logo.png" alt="logo"></a>
						<div class="header__logo_title">
							Дизайн-студия штор Превосходные решения для Вашего дома!
						</div>
					</div>
				</div>
				<div class="col-lg-2 header__phone">
					<div>
						<div class="header__phone_number">
							<a href="tel:">+7 909-910-42-92</a>
							<a href="" class="header__whatsapp"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/whatsapp.svg" alt=""></a>
						</div>
						<div class="header__phone_number">
							<a href="tel:">+7 929-611-71-65 </a>
							<a href="" class="header__whatsapp"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/whatsapp.svg" alt=""></a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 header__adress">
					<div>
						<div class="header__adress_name">Москва, Нахимовский проспект д. 24, стр. 1</div>
						<a href="mailto:7725445@mail.ru">7725445@mail.ru</a>
					</div>
				</div>
				<div class="col-lg-3 header__social">
					<div class="header__social_links">
						<a href=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/viber.svg" alt=""></a>
						<a href=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/instagram.svg" alt=""></a>
						<a href=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/telegram.svg" alt=""></a>
					</div>
					<div class="header__social_btn callback__btn_small"><button class="sg-popup-id-286">Заказать расчет</button></div>
				</div>
			</div>
			<div class="row header__nav">
				<?php
					if ( has_nav_menu( 'header-menu' ) ) {
						wp_nav_menu( array(
						'theme_location' => 'header-menu',
						'menu_class'     => 'header-menu-class',
						) );
					}
				?>

			</div>	
		</div>
	</header>

	<header class="mobiler__header">
	<div class="bg__overlay"></div>
		<div class="container">
			<div class="row mobiler__header_top">
				<div class="col-5 mobiler__header_callback">
				<div class="callback__btn_small"><button class="sg-popup-id-286">Заказать расчет</button></div>
				</div>
				<div class="col-5 header__social">
					<div class="header__social_list">
						<a href="//api.whatsapp.com/send?phone=79296117165" target="_blank" rel="noopener noreferrer"><img decoding="async" src="/wp-content/themes/storefront-child/assets/img/icons/whatsapp.svg" alt=""></a><br>
						<a href="//resolve?domain=Natalishtori" target="_blank" rel="noopener noreferrer"><img decoding="async" src="/wp-content/themes/storefront-child/assets/img/icons/telegram.svg" alt=""></a><br>
						<a href="//add?number=120345678910" target="_blank" rel="noopener noreferrer"><img decoding="async" src="/wp-content/themes/storefront-child/assets/img/icons/viber.svg" alt=""></a><br>
						<a href="//instagram.com/vasilkova.shtor/" target="_blank" rel="noopener noreferrer"><img decoding="async" src="/wp-content/themes/storefront-child/assets/img/icons/instagram.svg" alt=""></a>
					</div>
				</div>
				<div class="col-2 mobiler__header_burger">
					<div class="burger" id="burger"><span></span></div>
				</div>
				<div class="col-12 mobiler__menu">
					<div class="mobiler__menu_logo">
						<div class="img">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logo.png" alt="logo">
						<div class="header__logo_title">
							Дизайн-студия штор Превосходные решения для Вашего дома!
						</div></div>
						<div class="phone__container">
							<div class="phone_number">
								<a href="tel:">+7 909-910-42-92</a>
								<a href="" class="whatsapp"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/whatsapp.svg" alt=""></a>
							</div>
							<div class="phone_number">
								<a href="tel:">+7 929-611-71-65 </a>
								<a href="" class="whatsapp"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/whatsapp.svg" alt=""></a>
							</div>
						</div>
					</div>
					<div class="mobiler__menu_nav">
					<?php
					if ( has_nav_menu( 'header-menu' ) ) {
						wp_nav_menu( array(
						'theme_location' => 'header-menu',
						'menu_class'     => 'header-menu-class',
						) );
					}
				?>
					</div>
				</div>
			</div>
		</div>
	</header>

	<?php
	/**
	 * Functions hooked in to storefront_before_content
	 *
	 * @hooked storefront_header_widget_region - 10
	 * @hooked woocommerce_breadcrumb - 10
	 */
	do_action( 'storefront_before_content' );
	?>

	<div id="content" class="site-content" tabindex="-1">
		<div class="col-full">

		<?php
		do_action( 'storefront_content_top' );
