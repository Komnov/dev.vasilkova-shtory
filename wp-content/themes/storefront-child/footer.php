<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package storefront
 */

?>

		</div><!-- .col-full -->
	</div><!-- #content -->

	<?php do_action( 'storefront_before_footer' ); ?>


	<footer id="colophon" class="footer" role="contentinfo">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 footer__logo">
					<div>
						<a href=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logo_white.png" alt="logo"></a>
						<div class="footer__logo_title">
							Дизайн-студия штор Превосходные решения для Вашего дома!
						</div>
					</div>
				</div>
				<div class="col-lg-3 footer__nav">
					<div>
						<?php
							if ( has_nav_menu( 'footer-menu' ) ) {
							    wp_nav_menu( array(
							        'theme_location' => 'footer-menu',
							        'menu_class'     => 'footer-menu-class',
							    ) );
							}
							?>
					</div>
				</div>
				<div class="col-lg-2 footer__phone">
					<div>
						<div class="footer__phone_number">
							<a href="tel:">+7 909-910-42-92</a>
							<a href="" class="footer__whatsapp"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/whatsapp.svg" alt=""></a>
						</div>
						<div class="footer__phone_number">
							<a href="tel:">+7 929-611-71-65 </a>
							<a href="" class="footer__whatsapp"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/whatsapp.svg" alt=""></a>
						</div>
						<div class="footer__phone_mail">
							<a class="footer__whatsapp" href="mailto:7725445@mail.ru">7725445@mail.ru</a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 footer__social">
					<div class="footer__social_links">
						<a href=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/viber.svg" alt=""></a>
						<a href=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/instagram.svg" alt=""></a>
						<a href=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/telegram.svg" alt=""></a>
					</div>
					<div class="footer__social_btn callback__btn"><button>Заказать расчет</button></div>
					<div class="footer__adress_name">Москва, Нахимовский проспект д. 24, стр. 1</div>
				</div>
			</div>
		</div>
	</footer>

	<?php do_action( 'storefront_after_footer' ); ?>

</div><!-- #page -->

<?php wp_footer(); ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>
