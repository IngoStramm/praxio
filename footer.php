<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #main div element.
 *
 * @package Odin
 * @since 2.2.0
 */
?>

<?php 
$utils = new Utils;
$curr_lang = pll_current_language( 'locale' );
$linha_1 = laf_get_option( 'linha_1_' . $curr_lang );
$linha_2 = laf_get_option( 'linha_2_' . $curr_lang );
$linha_3 = laf_get_option( 'linha_3_' . $curr_lang );
$txt_btn_1 = laf_get_option( 'txt_btn_1_' . $curr_lang );
$url_btn_1 = laf_get_option( 'url_btn_1_' . $curr_lang );
$txt_btn_2 = laf_get_option( 'txt_btn_2_' . $curr_lang );
$url_btn_2 = laf_get_option( 'url_btn_2_' . $curr_lang );
$url_facebook = laf_get_option( 'url_facebook' );
$url_linkedin = laf_get_option( 'url_linkedin' );
$url_twitter = laf_get_option( 'url_twitter' );
$url_instagram = laf_get_option( 'url_instagram' );
$url_youtube = laf_get_option( 'url_youtube' );
?>

	</div><!-- #wrapper -->


	<footer class="footer ov-h" role="contentinfo" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/images/footer-bg.jpg;">
		<div class="container">
			
			<div class="row">
				<div class="col-md-12 b40-1">
					<?php if( $linha_1 ): ?>
						<h1 class="footer-linha-1"><?php echo $linha_1; ?></h1>
					<?php endif; ?>
				</div>
				<!-- /.col-md-12 -->

				<div class="clearfix"></div>

				<div class="col-md-6 col-md-offset-3 b40-1">
					<?php if( $linha_2 ): ?>
						<h2 class="footer-linha-2"><?php echo $linha_2; ?></h1>
					<?php endif; ?>
				</div>
				<!-- /.col-md-6 col-md-offset-3 -->
					
				<div class="clearfix"></div>

				<div class="col-md-12 b40-1">
					<?php if( $linha_3 ): ?>
						<h3 class="footer-linha-3"><?php echo $linha_3; ?></h1>
					<?php endif; ?>
				</div>
				<!-- /.col-md-12 -->
			</div>
			<!-- /.row -->

			<div class="clearfix m-b-40"></div>			

			<div class="row">

				<div class="col-md-6 l40-1">
					<?php if( $txt_btn_1 && $url_btn_1 ) : ?>
						<a href="<?php echo $url_btn_1; ?>" class="footer-btn footer-btn-reverse" target="_self">
							<?php echo $txt_btn_1; ?>
						</a>
					<?php endif; ?>
				</div>
				<!-- /.col-md-6 -->

				<div class="clearfix m-b-20 visible-xs"></div>

				<div class="col-md-6 r40-1">
					<?php if( $txt_btn_2 && $url_btn_2 ) : ?>
						<a href="<?php echo $url_btn_2; ?>" class="footer-btn" target="_self">
							<?php echo $txt_btn_2; ?>
						</a>
					<?php endif; ?>
				</div>
				<!-- /.col-md-6 -->
				
			</div>
			<!-- /.row -->

			<div class="clearfix m-b-40"></div>

			<div class="row">
				
				<div class="col-md-3 col-sm-4 l40-1">
					<?php if ( is_active_sidebar( 'footer-widget-1' ) ) : ?>
						<?php dynamic_sidebar( 'footer-widget-1' ); ?>
					<?php endif; ?>
				</div>
				<!-- /.col-md-3 col-sm-4 -->

				<div class="col-md-3 col-sm-4 b40-1">
					<?php if ( is_active_sidebar( 'footer-widget-2' ) ) : ?>
						<?php dynamic_sidebar( 'footer-widget-2' ); ?>
					<?php endif; ?>
				</div>
				<!-- /.col-md-3 col-sm-4 -->

				<div class="col-md-3 col-sm-4 b40-1">
					<?php if ( is_active_sidebar( 'footer-widget-3' ) ) : ?>
						<?php dynamic_sidebar( 'footer-widget-3' ); ?>
					<?php endif; ?>
				</div>
				<!-- /.col-md-3 col-sm-4 -->

				<div class="clearfix m-b-40 visible-xs visible-sm"></div>

				<div class="col-md-3 r40-1">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/footer-logo.png" alt="<?php _e( 'Praxio', 'laf' ); ?>" class="img-responsive center-block">
					<div class="clearfix m-b-20"></div>
					<div class="footer-social-mida">
						<ul>

							<?php if( $url_facebook ) : ?>
								<li>
									<a href="<?php echo $url_facebook; ?>" target="_blank"><i class="fa fa-facebook"></i></a>
								</li>
							<?php endif; ?>

							<?php if( $url_linkedin ) : ?>
								<li>
									<a href="<?php echo $url_linkedin; ?>" target="_blank"><i class="fa fa-linkedin"></i></a>
								</li>
							<?php endif; ?>
							
							<?php if( $url_twitter ) : ?>
								<li>
									<a href="<?php echo $url_twitter; ?>" target="_blank"><i class="fa fa-twitter"></i></a>
								</li>
							<?php endif; ?>
							
							<?php if( $url_instagram ) : ?>
								<li>
									<a href="<?php echo $url_instagram; ?>" target="_blank"><i class="fa fa-instagram"></i></a>
								</li>
							<?php endif; ?>
							
							<?php if( $url_youtube ) : ?>
								<li>
									<a href="<?php echo $url_youtube; ?>" target="_blank"><i class="fa fa-youtube"></i></a>
								</li>
							<?php endif; ?>
							
						</ul>
					</div>
					<!-- /.footer-social-mida -->

				</div>
				<!-- /.col-md-3 -->

			</div>
			<!-- /.row -->

		</div><!-- .container -->
	</footer><!-- #footer -->
	

	<?php wp_footer(); ?>
</body>
</html>
