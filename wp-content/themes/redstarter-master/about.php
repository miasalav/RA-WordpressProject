<?php
/**
 * template name: about page
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area single-container large-12 column">
     <main id="main" class="site-main" role="main">
        <div class="about-container row align-center">
        
          <?php 
            $aboutTitle = get_field('about_title');
            $aboutInfo = get_field('about_info');
            $secondaryAboutTitle = get_field('secondary_about_heading');
            $secondaryAboutInfo = get_field('secondary_about_info');

            echo "
                <div class='large-8 column'>
                    <div class='about-content-section'>
                        <h3>$aboutTitle</h3>
                        <p>$aboutInfo</p>
                    <div>
                    <div class='about-content-section'>
                        <h3>$secondaryAboutTitle</h3>
                        <p>$secondaryAboutInfo</p>
                    </div>
                </div>
                
                ";
            
            ?>
            
        </div>
     </main>
	</div><!-- #primary -->
  

<?php get_footer(); ?>
