<header  id="masthead" class="<?php echo (if(is_page_template( 'about.php' )){ 'about-header' : 'site-header' } elseif (is_home()){ 'full-header' : 'site-header' } elseif(is_singular( 'adventure')){ 'hidden' : 'display'} ) ?>" role="banner">







			<?php  if ( !empty(get_field('banner_image'))){
				$bannerImage = get_field('banner_image');
		
			echo "<header id='masthead' role='banner' class='(is_home() || is_page_template('about.php') || is_single('adventure') && get_field('banner_image'))? 'full-header' : 'site-header')'" ?>
			    <div class="header-container" style="background-image: url(<?php (is_home() || is_page_template('about.php') || is_single('adventure') && get_field('banner_image'))? '$bannerImage' : ' ') ?>)">
					<div class="row align-justify">
                        <div class="site-branding small-3 medium-1 large-1 column">
                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                                <img class="header-logo" src="<?php echo get_template_directory_uri() . '/images/inhabitent-logo-tent.svg'; ?>" alt="Inhabitent logo" />
                            </a>
                        </div>
					</div><!-- .site-branding -->

					<nav id="site-navigation" class="main-navigation small-4 column" role="navigation">
						<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html( 'Primary Menu' ); ?></button>
						<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
					</nav><!-- #site-navigation -->


				<div class="row align-center <?php echo (!is_page_template( 'about.php' )? 'hidden' : 'display') ?>">
					<div class="large-12 column about-header-title ">
						<h2>About</h2>
					</div>
				</div>

				<div class="row align-center <?php echo (!is_post_type_archive( 'adventure' )? 'hidden' : 'display') ?>">
					<div class="adventure-archive-header-title large-12 column ">
						<h2>Latest Adventures</h2>
					</div>
				</div>

                
				</div>
			<?php echo"</header>" ?>
								
			</div>


            <div class="<?php echo (is_singular('adventure')? 'display' : 'hidden') ?>">



