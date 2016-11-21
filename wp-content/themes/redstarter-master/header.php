<?php
/**
 * The header for our theme.
 *
 * @package RED_Starter_Theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<div id="page" class="hfeed site">
			<a class="skip-link screen-reader-text" href="#content"><?php esc_html( 'Skip to content' ); ?></a>

			<?php $bannerImage = get_field('banner_image');
			 $linearGradient = 'linear-gradient( to bottom, rgba(0,0,0,0.7) 0%, rgba(0,0,0,0.35) 100% ), ';
			?>
		
			<header id='masthead' role='banner' class='<?php echo (is_front_page() || is_page_template('about.php') || is_singular('adventure') && get_field('banner_image')? 'full-header' : 'site-header'); ?> '
			style="background-image: url(<?php echo (is_front_page() || is_page_template('about.php') || is_singular('adventure')? $bannerImage : ' '); ?>)" >
			    
				<div class="header-container">
					<div class="row align-justify">
                        <div class="site-branding small-3 medium-1 large-1 column">
                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                                <img class="header-logo" src="<?php echo get_template_directory_uri() . '/images/inhabitent-logo-tent.svg'; ?>" alt="Inhabitent logo" />
                            </a>
                        </div>					

						<nav id="site-navigation" class="main-navigation small-4 column" role="navigation">
							<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html( 'Primary Menu' ); ?></button>
							<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
						</nav><!-- #site-navigation -->
					</div>

				<div class="row align-center <?php echo (!is_front_page()? 'hidden' : '') ?>">
					<div class="large-4 column home-header-logo ">
						<img src="<?php echo get_template_directory_uri() . '/images/inhabitent-logo-full.svg'; ?>" alt="Inhabitent Logo Full">
					</div>
				</div>

				<div class="row align-center <?php echo (!is_page_template( 'about.php' )? 'hidden' : '') ?>">
					<div class="large-12 column about-header-title ">
						<h2>About</h2>
					</div>
				</div>

				<div class="row align-center <?php echo (!is_post_type_archive( 'adventure' )? 'hidden' : '') ?>">
					<div class="adventure-archive-header-title large-12 column ">
						<h2>Latest Adventures</h2>
					</div>
				</div>


				</div>
			<?php echo"</header>" ?>
			

		

			<div id="content" class="site-content row align-justify">








			









