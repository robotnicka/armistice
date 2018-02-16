<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package armistice
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php
	if ( ! is_front_page() ) {
	?>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title"><span>', '</span></h1>' ); ?>
	</header><!-- .entry-header -->
	<?php
	} elseif ( is_front_page() ) {
		?>
		<header class="entry-header">
			<h1 class="home-page entry-title"><span>Join us!</span></h1>
		</header>
		<?php
	}
	?>
	<div class="entry-content">
		<?php
			$introtext = get_post_meta($post->ID, 'intro-text', true);

			if ( $introtext ) { ?>

			<div class="intro__text"><?php echo $introtext; ?></div>

			<?php
			};

			the_content();

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'armistice' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
			<?php
				edit_post_link(
					sprintf(
						wp_kses(
							/* translators: %s: Name of current post. Only visible to screen readers */
							__( 'Edit <span class="screen-reader-text">%s</span>', 'armistice' ),
							array(
								'span' => array(
									'class' => array(),
								),
							)
						),
						get_the_title()
					),
					'<span class="edit-link">',
					'</span>'
				);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->
