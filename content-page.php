<?php
/**
 * The template used for displaying page content.
 *
 * @package Odin
 * @since 2.2.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="page-banner" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/images/page-banner.jpg);">
		
		<div class="container">
			<div class="row div col-md-12">
				<div class="clearfix p-t-150"></div>
				<h3 class="page-banner-titulo"><?php echo get_the_title(); ?></h3>
				<div class="clearfix p-b-150"></div>
			</div>
			<!-- /.row div col-md-12 -->
		</div>
		<!-- /.container -->

	</div>
	<!-- /.page-banner -->

	<div class="clearfix m-t-80"></div>

	<div class="container">
		<div class="row">
			<div class="col-md-12 b40-1">
				<div class="entry-content page-content">
					<?php the_content(); ?>
				</div><!-- .entry-content -->
			</div>
			<!-- /.col-md-12 -->
		</div>
		<!-- /.row -->
	</div>
	<!-- /.container -->
</article><!-- #post-## -->

<div class="clearfix m-b-80"></div>
