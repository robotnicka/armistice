<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package armistice
 */

?>

	</div><!-- #content -->
	<?php
	if ( is_front_page() ) : 
		include ('inc/front-page-footer.php');	
	endif;
	?>
	<div class="booking-footer">
		<h1 class="booking-footer__heading">Are you ready for an unforgettable weekend?</h1>
		<a href="<?php echo esc_url( get_permalink( get_page_by_title( 'Apply' ) ) ); ?>" class="booking-footer__button">Book now</a>
		<div class="booking-footer__graphic">
			<?php include('images/footer-flourish.php'); ?>
		</div>
	</div>
	<div class="sponsors-footer">
		<h2 class="sponsors-footer__heading">Support our benefactors!</h2>
		<ul>
			<li><a href="https://auntsallys.com/" target="_blank">Aunt Sally’s</a></li>
			<li><a href="https://www.historicalemporium.com/" target="_blank">Historical Emporium</a></li>
			<li><a href="http://cosmangacraft.com/news/detail/collectible-cards-now-also-for-larpers?page=1" target="_blank">Cosmangacraft.com</a></li>
		</ul>
	</div>
	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( '&copy; %1$s | Website by %2$s.', 'armistice' ), 'ARMISTICE ARCANE and <a href="http://peculiarcrossroads.com" target="_blank">PECULIAR CROSSROADS PRODUCTIONS</a>', '<a href="http://emilymentrek.com/" target="_blank">Emily</a>' );
			?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
<?php wp_footer(); ?>

</body>
</html>
