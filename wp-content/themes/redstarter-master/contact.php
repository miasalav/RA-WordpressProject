<?php
/**
 * template name: contact page
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area large-9 column">
		<main id="main" class="site-main contact-section" role="main">

		<?php $contactTitle = get_field('contact_page_title');
            echo ($contactTitle? "<h2>".$contactTitle."</h2>" : 'N/A');
         ?>

        <?php $mapSection = get_field('map_section');
            echo ($mapSection? "<div class='contact-map'>".$mapSection."</div>" : 'N/A');
         ?>      

        <div class="contact-blurb">
            <?php $contactDescTtl = get_field('contact_description_title');
            $contactDescription = get_field('contact_description');
            echo ($contactDescTtl? "<h3>".$contactDescTtl."</h3>" : '');
            echo ($contactDescription? "<p>".$contactDescription."</p>" : '');
         ?>            
        </div>

        <div>
            <?php 
            $formTitle = get_field('form_title');
                echo ($formTitle? "<h3>".$formTitle."</h3>" : '');
                echo do_shortcode(get_field('form')); 
                
            ?>
        </div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
