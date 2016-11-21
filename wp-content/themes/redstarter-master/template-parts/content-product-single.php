<?php
/**
 * Template part for displaying posts.
 *
 * @package RED_Starter_Theme
 */

?>

<article class="row" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="product-image large-6 column">
	
			<?php if ( has_post_thumbnail() ) : ?>
			<?php the_post_thumbnail( 'large' ); ?>
			<?php endif; ?>   
			
	</div><!-- end product image -->

		<div class="product-content large-6 column">
           <h3><?php the_title(); ?></h3>
			<?php the_excerpt(); ?>	
 
		</div><!-- .entry-content -->

</article><!-- #post-## -->
