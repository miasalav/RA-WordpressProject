<?php
/**
 * Template part for displaying posts.
 *
 * @package RED_Starter_Theme
 */

?>
    <div class="adventure-archive-container-wrap large-6 column">
    
        <article class="adventure-archive-container" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


            <?php if ( has_post_thumbnail() ) : ?>
                <?php the_post_thumbnail( 'large' ); ?>             
            <?php endif; ?>

            <?php if ( 'post' === get_post_type() ) : ?>
            <?php red_starter_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?> / <?php red_starter_posted_by(); ?>
            <?php endif; ?>

            <div class="adventure-archive-container-info">
            <?php the_title( sprintf( '<h3 class="entry-title"><span><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></span></h3>' ); ?>
            <a class="read-more-link" href="<?php the_permalink(); ?>">Read More</a>


        </article><!-- #post-## -->
    </div>
