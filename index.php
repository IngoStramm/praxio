<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme and one of the
 * two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Odin
 * @since 2.2.0
 */

get_header(); ?>

	<?php 
		$utils = new Utils;
		$curr_lang = pll_current_language( 'locale' );
		$post_type = get_post_type();
		switch ( $post_type ) {
			case 'curso':
				$tipo = 'curso';
				break;
			
			case 'webinar':
				$tipo = 'webinar';
				break;
			
			case 'comunicado':
				$tipo = 'comunicado';
				break;
			
			case 'evento':
				$tipo = 'evento';
				break;
			
			case 'praxio-em-revista':
				$tipo = 'revista';
				break;
			
			case 'editorial':
				$tipo = 'editorial';
				break;
			
			case 'enquete':
				$tipo = 'enquete';
				break;
			
			case 'esocial-urgente':
				$tipo = 'esocial';
				break;
			
			default:
				$tipo = 'blog';
				break;
		}
		// $utils->debug( $tipo );
	?>

	<section class="blog-section">
		
		<?php if( is_home() || is_archive() || is_single() || is_search() ) : ?>
		
			<?php include_once( 'inc/laf/parts/blog-header.php'); ?>

		<?php endif; ?>


		<div class="container">
			<div class="row">
				<div class="col-md-9">
					<main id="content" class="<?php //echo odin_classes_page_sidebar(); ?>" tabindex="-1" role="main">

						<?php if ( have_posts() ) : ?>

							<?php if( is_home() || is_archive() || is_single() ) : ?>
							<?php if( $blog_title ) : ?>
								<h1 class="blog-title"><?php echo $blog_title; ?></h1>
							<?php endif; ?>
							<?php endif; ?>

								<?php $post_count = 0; ?>

								<?php while ( have_posts() ) : the_post(); ?>

									<?php if( $post_count <= 0 || $post_count % 2 > 0 ) : ?>
										<div class="row">
									<?php endif; ?>

									<div class="col-md-<?php echo $post_count <= 0 ? 12 : 6; ?> m-b-40">
										<?php get_template_part( 'content', get_post_format() ); ?>
									</div>


									<?php if( $post_count <= 0 || $post_count % 2 == 0  ) : ?>
										</div>
										<!-- /.row -->
									<?php endif; ?>


									<?php $post_count++; ?>

								<?php endwhile; ?>

							<?php odin_paging_nav(); ?>

						<?php else : ?>
							<?php get_template_part( 'content', 'none' ); ?>
						<?php endif; ?>

					</main><!-- #content -->
				</div>
				<!-- /.col-md-9 -->
					
				<?php
					if( $tipo == 'blog' )
						get_sidebar();
					else
						get_sidebar( 'tipo' );
					?>

			</div>
			<!-- /.row -->
		</div>
		<!-- /.container -->

	</section>
	<!-- /.blog -->

<div class="clearfix m-b-80"></div>
<?php

get_footer();
