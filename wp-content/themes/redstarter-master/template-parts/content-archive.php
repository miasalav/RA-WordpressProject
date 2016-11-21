<?php
/**
 * Template part for displaying posts.
 *
 * @package RED_Starter_Theme
 */

?>

<article class="post-section" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header">
		<div class="post-image">

			<?php if ( has_post_thumbnail() ) : ?>
			<?php the_post_thumbnail( 'large' ); ?>
			<?php endif; ?>

			<?php the_title( sprintf( '<h2 class="entry-title"><span><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></span></h2>' ); ?>      
			<?php if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta"><span>
			<?php red_starter_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?> / <?php red_starter_posted_by(); ?>
		</span></div><!-- .entry-meta -->
		<?php endif; ?>

		</div><!-- end post image -->

	</header><!-- .entry-header -->

		<div class="entry-content">
			<?php the_excerpt(); ?>	
           <a class="read-more-link" href="<?php the_permalink(); ?>">Read More</a>
		</div><!-- .entry-content -->
		

</article><!-- #post-## -->
