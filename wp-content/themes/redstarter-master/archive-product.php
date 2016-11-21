<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>
	<div id="primary" class="content-area">
    <nav class="product-menu">
        <h2 class="row align-center">SHOP STUFF</h2>
        <ul class="row align-center">
        <?php 
       
        $menuArray = get_terms('productcategory');
        if(!empty($menuArray)){
        foreach($menuArray as $link){  
            $name = $link->name;
            $ID = get_term_link($link->term_id); 
            echo "<li><a href='$ID'?>$name</a></li>";     }
            }
         ?>
            </ul>
        </nav>

		<main id="main" class="site-main row" role="main">
        
		<?php if ( have_posts() ) : ?>
			<header class="page-header">				
			</header><!-- .page-header -->
			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php
					get_template_part( 'template-parts/content-product-archive' );
				?>
			<?php endwhile; ?>

		<?php else : ?>
			<?php get_template_part( 'template-parts/content', 'none' ); ?>
		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
