<?php
/*
Template Name: Embarcador
*/
/**
 * Developer: Marcio Seabra.
 * Praxio - embarcador-page.php
 * Date: 23/04/2019
 * Time: 13:58
 */

get_header(); ?>

    <main id="content" class="<?php //echo odin_classes_page_full(); ?>" tabindex="-1" role="main">

        <?php
        // Start the Loop.
        while ( have_posts() ) : the_post();

            // Include the page content template.
            get_template_part( 'content-embarcador', 'page' );

            // If comments are open or we have at least one comment, load up the comment template.
            if ( comments_open() || get_comments_number() ) :
                comments_template();
            endif;
        endwhile;
        ?>

    </main><!-- #main -->

<?php
get_footer();