<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package armistice
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-106533219-2"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-106533219-2');
	</script>

	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link href="https://fonts.googleapis.com/css?family=Bellefair|Josefin+Sans|Old+Standard+TT:400,400i" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

	<header id="masthead" class="site-header">
		<div class="site-header-top">
			<div class="site-branding">
				<?php
				the_custom_logo();
				if ( is_front_page() && is_home() ) : ?>
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php else : ?>
					<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
				endif;

				$description = get_bloginfo( 'description', 'display' );
				if ( $description || is_customize_preview() ) : ?>
					<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
				<?php
				endif;
				?>
			</div><!-- .site-branding -->
			<div class="book-now"><div class="button-flourish-container button-flourish-container--first"><?php include('images/button-flourish.php'); ?></div><a class="button-book-now" href="/apply">Apply Now!</a><div class="button-flourish-container button-flourish-container--last"><?php include('images/button-flourish.php'); ?></div></div>
		</div>
		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Navigation', 'armistice' ); ?></button>
			<?php
				wp_nav_menu( array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				) );
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
	<div id="content" class="site-content">
	<?php
	if ( is_front_page() ) : ?>
		<div class="date-container">
			<?php
				if ( (get_theme_mod( 'armistice_date_text_1' ) !== '') || (get_theme_mod( 'armistice_location_text_1' ) !== '') ) { 
				?>
			<div class="date-container__date">
				<span class="date-container__icon date-container__icon--chron-1"><?php include('images/book.php'); ?></span><em><?php echo get_theme_mod( 'armistice_location_text_1', 'default_value' ); ?> <?php echo get_theme_mod( 'armistice_date_text_1', 'default_value' ); ?> </em>
			</div>  
			<?php 
					
				}
			?>
			<?php
				if ( ( (get_theme_mod( 'armistice_date_text_1' ) !== '') || (get_theme_mod( 'armistice_location_text_1' ) !== '') ) && ( (get_theme_mod( 'armistice_date_text_2' ) !== '') || (get_theme_mod( 'armistice_location_text_2' ) !== '') ) ) { 
				?>
			<span class="date-container__divider">|</span>
			<?php 
					
				}
			?>
			<?php
				if ( (get_theme_mod( 'armistice_date_text_2' ) !== '') || (get_theme_mod( 'armistice_location_text_2' ) !== '') ) { 
				?>
			<div class="date-container__date">
				<em><?php echo get_theme_mod( 'armistice_location_text_2', 'default_value' ); ?> <?php echo get_theme_mod( 'armistice_date_text_2', 'default_value' ); ?></em><span class="date-container__icon date-container__icon--chron-2"><?php include('images/key.php'); ?></span>
			</div>
			<?php 
					
				}
			?>
		</div>
		<?php
		if ( has_header_video() && is_header_video_active() ) {
			?>
			<div class="video-container">
			<?php
				the_custom_header_markup();
			?>
			</div>
			<div class="big-flourish-container"><?php include('images/big-flourish.php'); ?></div>
			<?php
			$media_highlight = get_theme_mod( 'armistice_media_highlight', 'default_value' );
			if ($media_highlight !== 'default_value') { 
			?>
			<div class="media-highlight"><a href="<?php echo get_theme_mod( 'armistice_media_highlight_link', 'default_value' ); ?>" target="_blank" rel="noopener"><?php echo get_theme_mod( 'armistice_media_highlight', 'default_value' ); ?></a><div class="media-highlight__more"><a href="<?php echo get_theme_mod( 'armistice_media_highlight', 'default_value' ); ?>" target="_blank" rel="noopener">Read more...</a></div></div>
			<?php
			}
		} else {
			?>
			<div class="video-container"><iframe  class="video-container" src="https://www.youtube.com/embed/9GQYivQZuaw?showinfo=0&rel=0" frameborder="0"></iframe></div>
			<div class="big-flourish-container"><?php include('images/big-flourish.php'); ?></div>
			<?php
		}
		?>
	<?php endif;
	?>