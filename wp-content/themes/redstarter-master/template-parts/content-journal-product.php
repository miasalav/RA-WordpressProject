<?php
/**
 * Template part for displaying posts.
 *
 * @package RED_Starter_Theme
 */

?>
<div class="large-4" column>
    <div class="journal-container" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        
                <?php if ( has_post_thumbnail() ) : ?>
                    <a href="<?php the_permalink(); ?>">
                        <?php the_post_thumbnail( 'medium' ); ?>
                    </a>
                <?php endif; ?>

                <?php if ( 'post' === get_post_type() ) : ?>
                <?php red_starter_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?> / <?php red_starter_posted_by(); ?>
                <?php endif; ?>

                <?php the_title( sprintf( '<h3 class="entry-title"><span><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></span></h3>' ); ?>
                <a class="read-more-link" href="<?php the_permalink(); ?>">Read More</a>
    </div>
</div><!-- #post-## -->

