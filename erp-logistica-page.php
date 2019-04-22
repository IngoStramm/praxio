<?php
/*
Template Name: ERP Logística
*/

/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that other
 * 'pages' on your WordPress site will use a different template.
 *
 * @package Odin
 * @since 2.2.0
 */

/**
 * Developer: Marcio Seabra.
 * Praxio - erp-logistica-page.php
 * Date: 21/04/2019
 * Time: 09:15
 */

get_header(); ?>

    <main id="content" class="<?php //echo odin_classes_page_full(); ?>" tabindex="-1" role="main">

        <?php
        // Start the Loop.
        while ( have_posts() ) : the_post();

            // Include the page content template.
            get_template_part( 'content-erp-logistica', 'page' );

            // If comments are open or we have at least one comment, load up the comment template.
            if ( comments_open() || get_comments_number() ) :
                comments_template();
            endif;
        endwhile;
        ?>

    </main><!-- #main -->

<?php
get_footer();