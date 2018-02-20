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
	<div class="sponsors-footer">
		<h2>Support our sponsors!</h2>
		<ul>
			<li><a href="https://auntsallys.com/" target="_blank">Aunt Sally’s</a></li>
			<li><a href="https://www.historicalemporium.com/" target="_blank">Historical Emporium</a></li>
			<li><a href="http://cosmangacraft.com/news/detail/collectible-cards-now-also-for-larpers?page=1" target="_blank">Cosmangacraft.com</a></li>
		</ul>
	</div>
	<?php
	if ( is_front_page() ) : ?>
	<div class="row">
		<div class="block"><div class="pic pic-1"><img src="/wp-content/themes/armistice/images/pic1.jpg"/></div></div>
		<div class="block text date"><div><hr><p><?php echo get_theme_mod( 'armistice_date_text', 'default_value' ); ?></p>
		<p><em><?php echo get_theme_mod( 'armistice_location_text', 'default_value' ); ?></em></p><hr></div></div>
		<div class="block"><div class="pic pic-1"><img src="/wp-content/themes/armistice/images/pic2.jpg"/></div></div>
			<div class="block text light"><div><p>“THE ATTENTION TO DETAIL AND RELATIONSHIPS BETWEEN CHARACTERS CAUSE IT TO STAND APART FROM OTHER EVENTS!”</p>— ROBERT</div></div></div>
	<div class="row">


		<div class="block text"><div><p>“THEY OFFER AN INTRIGUING, FUN EXPERIENCE FOR BOTH THE EXPERIENCED ROLEPLAYER OR THE TRUE  REDSHIRT BEGINNER.”</p>— BRANTLY</div></div>
		<div class="block"><div class="pic pic-1"><img src="/wp-content/themes/armistice/images/pic4.jpg"/></div></div>
		<div class="block"><div class="pic pic-1"><img src="/wp-content/themes/armistice/images/pic5.jpg"/></div></div>
		<div class="block"><div class="pic pic-1"><img src="/wp-content/themes/armistice/images/pic3.jpg"/></div></div>

	</div>
	<?php endif;
	?>
	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( '&copy; %1$s | Website by %2$s.', 'armistice' ), 'Armistice Arcane and <a href="http://peculiarcrossroads.com" target="_blank">Peculiar Crossroads Productions</a>', '<a href="http://emilymentrek.com/" target="_blank">Emily</a>' );
			?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
