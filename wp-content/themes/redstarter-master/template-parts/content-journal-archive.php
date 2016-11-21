<?php
/**
 * Template part for displaying posts.
 *
 * @package RED_Starter_Theme
 */

?>

<article class="journal-archive-container large-3 column" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    
	<header class="entry-header">
			<?php if ( has_post_thumbnail() ) : ?>
                <a href="<?php the_permalink(); ?>">
                    <?php the_post_thumbnail( 'small' ); ?>
                    <?php endif; ?>
                </a>

            <p>
                <?php echo the_title(); ?>...........
                <?php $price = get_field('price');
                    echo '$' . ($price ? number_format($price, 2) : "N/A");
                    
                ?>
                
            </p>

	</header><!-- .entry-header -->

</article><!-- #post-## -->
