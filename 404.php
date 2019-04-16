<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package Odin
 * @since 2.2.0
 */

get_header(); ?>


	<main id="content" class="<?php //echo odin_classes_page_full(); ?>" tabindex="-1" role="main">

		<?php include_once( 'inc/laf/parts/blog-header.php'); ?>

		<div class="container">
			<div class="row">
				<div class="col-md-12">
					
					<header class="page-header">
						<h1 class="page-title"><?php _e( 'Not Found', 'odin' ); ?></h1>
					</header>

					<div class="page-content">
						<p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'odin' ); ?></p>

						<?php get_search_form(); ?>
					</div><!-- .page-content -->

				</div>
				<!-- /.col-md-12 -->
			</div>
			<!-- /.row -->
		</div>
		<!-- /.container -->

	</main><!-- #main -->

	<div class="cleafix m-b-80"></div>

<?php
get_footer();
