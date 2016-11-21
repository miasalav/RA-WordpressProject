<?php
/**
 * The template for displaying the Archive Adventure Page.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main row align-center" role="main">

            <div class="large-10 column">
            <div class="row">
            <?php if ( have_posts() ) : ?>
                <header class="page-header">				
                </header><!-- .page-header -->
                <?php /* Start the Loop */ ?>
                <?php while ( have_posts() ) : the_post(); ?>
                    <?php
                        get_template_part( 'template-parts/content-adventure-archive' );
                    ?>
                <?php endwhile; ?>

            <?php else : ?>
                <?php get_template_part( 'template-parts/content', 'none' ); ?>
            <?php endif; ?>
            </div>
            </div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
