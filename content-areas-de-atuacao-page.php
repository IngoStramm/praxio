<?php
/**
 * The template used for displaying page content.
 *
 * @package Odin
 * @since 2.2.0
 */
?>

<?php
	$utils = new Utils;
	$post_id = get_the_ID();
	$meta = get_post_meta( $post_id, '', true );
	$areas_de_atuacao_banner_show = get_post_meta( $post_id, 'areas_de_atuacao_banner_show', true );
	$areas_de_atuacao_banner_img = get_post_meta( $post_id, 'areas_de_atuacao_banner_img', true );
	$areas_de_atuacao_banner_linha_1 = get_post_meta( $post_id, 'areas_de_atuacao_banner_linha_1', true );
	$areas_de_atuacao_banner_linha_2 = get_post_meta( $post_id, 'areas_de_atuacao_banner_linha_2', true );
	$areas_de_atuacao_banner_linha_3 = get_post_meta( $post_id, 'areas_de_atuacao_banner_linha_3', true );
	$areas_de_atuacao_banner_text = get_post_meta( $post_id, 'areas_de_atuacao_banner_text', true );
	$areas_de_atuacao_banner_btn_url = get_post_meta( $post_id, 'areas_de_atuacao_banner_btn_url', true );
	$areas_de_atuacao_banner_btn_txt = get_post_meta( $post_id, 'areas_de_atuacao_banner_btn_txt', true );
?>


<article id="post-<?php the_ID(); ?>" <?php post_class( 'areas-de-atuacao' ); ?>>

	<?php if( $areas_de_atuacao_banner_show ) : ?>

		<div class="page-banner areas-de-atuacao-banner" style="background-image: url(<?php echo $areas_de_atuacao_banner_img; ?>);">


			<div class="container">
				<div class="row">
					
					<div class="clearfix m-t-120 hidden-xs hidden-sm"></div>

					<div class="clearfix m-t-80"></div>
					
					<div class="col-lg-4 col-md-6 col-lg-offset-2">

						<h1 class="areas-de-atuacao-banner-line-1"><?php echo wp_kses_decode_entities( $areas_de_atuacao_banner_linha_1 ); ?></h1>
						<h3 class="areas-de-atuacao-banner-line-2"><?php echo wp_kses_decode_entities( $areas_de_atuacao_banner_linha_2 ); ?></h3>
						<div class="clearfix m-b-20"></div>
						<div class="areas-de-atuacao-banner-line-3"><?php echo wp_kses_decode_entities( $areas_de_atuacao_banner_linha_3 ); ?></div>
						
					</div>
					<!-- /.col-lg-4 -->

					<div class="clearfix m-b-40 visible-xs visible-sm"></div>

					<div class="col-lg-4 col-md-6">

						<div class="prx-linha prx-linha-l prx-linha-radius-4 hidden-xs" style="position: absolute; top: -10px; right: 100%; width: 40px;">

							<div class="prx-linha prx-linha-b prx-linha-radius-4" style="position: absolute; bottom: 0; left: 0; right: 0;"></div>

						</div>
						<!-- /.prx-linha -->

						<div class="areas-de-atuacao-banner-text"><?php echo $utils->nl2p( $areas_de_atuacao_banner_text ); ?></div>

						<div class="clearfix m-t-80"></div>

						<a href="<?php echo $areas_de_atuacao_banner_btn_url; ?>" class="areas-de-atuacao-banner-btn prx-btn prx-btn-inline" style="position: relative;">
							<?php echo $areas_de_atuacao_banner_btn_txt ?>
							<div class="prx-linha prx-linha-b hidden-xs" style="position: absolute; left: 100%; margin-left: 20px; bottom: 20px; width: 80px;"></div>
						</a>

					</div>
					<!-- /.col-lg-4 -->

					<div class="clearfix m-b-80"></div>
				</div>
				<!-- /.row -->
			</div>
			<!-- /.container -->
			
		</div>
		<!-- /.page-banner -->
	<?php endif; ?>

	<?php
		$areas_de_atuacao_areas_show = get_post_meta( $post_id, 'areas_de_atuacao_areas_show', true );
		$areas_de_atuacao_areas_area = get_post_meta( $post_id, 'areas_de_atuacao_areas_area', true );
		$areas_de_atuacao_cta_show = get_post_meta( $post_id, 'areas_de_atuacao_cta_show', true );
	?>

	<?php if( $areas_de_atuacao_areas_show ) : ?>

		<div class="areas-de-atuacao-areas">		

			<div class="clearfix m-t-80"></div>

			<?php $i = 0; ?>

			<?php foreach( $areas_de_atuacao_areas_area as $area ) : ?>

				<?php //$utils->debug( $area ) ; ?>
				
				<div class="container">
					<div class="row">

						<div class="col-md-12">
							
							<div class="areas-de-atuacao-areas-area">
								
								<div class="areas-de-atuacao-areas-area-banner" style="background-image: url(<?php echo $area[ 'areas_de_atuacao_areas_img' ]; ?>);">
									
									<div class="row">
										<div class="col-md-4 text-center">

											<img src="<?php echo $area[ 'areas_de_atuacao_areas_icon' ]; ?>" alt="<?php echo $area[ 'areas_de_atuacao_areas_title' ]; ?>" class="img-responsive center-block areas-de-atuacao-areas-area-banner-icon">

											<div class="clearfix m-b-40"></div>

											<h3 class="areas-de-atuacao-areas-area-banner-title"><?php echo $area[ 'areas_de_atuacao_areas_title' ]; ?></h3>
											
										</div>
										<!-- /.col-md-4 -->
									</div>
									<!-- /.row -->
								</div>
								<!-- /.areas-de-atuacao-areas-area-banner -->

								<div class="clearfix m-b-40"></div>

								<div class="row">
									<div class="col-md-8 col-md-offset-3">

										<div class="prx-linha prx-linha-l prx-linha-radius-4 hidden-xs" style="position: absolute; top: -10px; right: 100%; width: 40px;">

											<div class="prx-linha prx-linha-b prx-linha-radius-4" style="position: absolute; bottom: 0; left: 0; right: 0;"></div>

										</div>
										<!-- /.prx-linha -->


										<div class="areas-de-atuacao-areas-area-text"><?php echo $utils->nl2p( $area[ 'areas_de_atuacao_areas_text' ] ) ; ?></div>

										<div class="clearfix m-b-20"></div>

										<a href="<?php echo $area[ 'areas_de_atuacao_areas_btn_url' ]; ?>" class="areas-de-atuacao-areas-area-btn prx-btn prx-btn-inline"><?php echo $area[ 'areas_de_atuacao_areas_btn_txt' ]; ?></a>
										
									</div>
									<!-- /.col-md-8 col-md-offset-3 -->
								</div>
								<!-- /.row -->

							</div>
							<!-- /.areas-de-atuacao-areas-area -->
						</div>
						<!-- /.col-md-12 -->

						<div class="col-md-6">
							<div class="areas-de-atuacao-areas-text"><?php echo $utils->nl2p( $areas_de_atuacao_section_1_text ); ?></div>
						</div>
						<!-- /.col-md-6 -->

						<div class="clearfix m-b-40 visible-xs visible-sm"></div>

						<div class="col-md-6">
							<div class="areas-de-atuacao-areas-title"><?php echo wp_kses_decode_entities( $areas_de_atuacao_section_1_title ); ?></div>
						</div>
						<!-- /.col-md-6 -->
											
					</div>
					<!-- /.row -->
				</div>
				<!-- /.container -->

				<?php if( $i < count( $areas_de_atuacao_areas_area ) ) : ?>

					<div class="cleafix m-b-80"></div>

				<?php endif; ?>

				<?php if( $i == 1 && $areas_de_atuacao_cta_show ) : ?>

					<?php include_once( 'inc/laf/parts/areas-de-atuacao-cta.php' ); ?>

					<div class="clearfix m-b-80"></div>

				<?php endif; ?>

				<?php $i++; ?>

			<?php endforeach ?>

		</div>
		<!-- /.areas-de-atuacao-areas -->

	<?php endif; ?>

	<?php if( $i < 1 && $areas_de_atuacao_cta_show ) : ?>

		<?php include_once( 'inc/laf/parts/areas-de-atuacao-cta.php' ); ?>

	<?php endif; ?>

</article><!-- #post-## -->