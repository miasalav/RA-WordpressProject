
<?php
/**
 * The main template file.
 
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">        
		<main id="main" class="site-main" role="main">

		<div class="product-section-front row align-center">
			<div class="large-11 column">
				<h2 class="section-title">SHOP STUFF</h2>
				<div class="row">
					<?php 		
					$menuArray = get_terms('productcategory');
					
					if(!empty($menuArray)){
					foreach($menuArray as $link){  
						$name = $link->name;
						$description = $link->description;
						$ID = get_term_link($link->term_id); 
						$svg_url = get_bloginfo("stylesheet_directory").'/images/'. $name .'.svg';
						echo "
							<div class='large-3 column'>
							<div class='product-menu-item'>
								<img src='$svg_url' alt='$name'/>
								<p>$description</p>
								<a href='$ID'?>$name stuff</a>
							</div>
							</div>"; }
						}
					?>
				</div>
			</div>
		 </div>

       <div class="row align-center">
		<div class="large-10 column">
			<h2 class="section-title align-center">IHABITENT JOURNAL</h2>
			<div class="journal-section-container align-center row">
			<?php query_posts(array('post_type'=>'journal','posts_per_page'=>3)) ?>
				
				<?php if ( have_posts() ) : ?>		
					<?php if ( is_home() && ! is_front_page() ) : ?>
						<header>
							<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
						</header>
					<?php endif; ?>

				<?php while ( have_posts() ) : the_post(); ?>		
					<?php get_template_part( 'template-parts/content-journal-product' ); ?>
				<?php endwhile; ?>
				
				<?php else : ?>
					<?php get_template_part( 'template-parts/content', 'none' ); ?>
				<?php endif;  wp_reset_query(); ?>
				</div>
			</div>
		</div>

		<div class="row align-center">
			<div class="large-11 column">
			<h2 class="section-title">LATEST ADVENTURES</h2>
				<div class="adventure-section-container row">
			<?php query_posts(array('post_type'=>'adventure','posts_per_page'=>4)) ?>
				
				<?php if ( have_posts() ) : ?>		
					<?php if ( is_home() && ! is_front_page() ) : ?>
						<header>
							<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
						</header>
					<?php endif; ?>
			
				<div class="adventure-section-container row align-center">
					
				<?php while ( have_posts() ) : the_post(); ?>			
					<?php get_template_part( 'template-parts/content-adventure-product' ); ?>
				<?php endwhile; ?>

					<div class="adventure-right-container large-5 column">
						<div class="adventure-top row">
						<?php while ( have_posts() ) : the_post(); ?>
							<?php get_template_part( 'template-parts/content-adventure-right-top' ); ?>		
						<?php endwhile; ?>
						</div>
						<div class="adventure-bottom row">
						<?php while ( have_posts() ) : the_post(); ?>
							<?php get_template_part( 'template-parts/content-adventure-right-bottom' ); ?>		
						<?php endwhile; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<?php else : ?>
			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif;  wp_reset_query(); ?>
		

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
