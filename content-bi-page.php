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
	$bi_banner_show = get_post_meta( $post_id, 'bi_banner_show', true );
	$bi_banner_img = get_post_meta( $post_id, 'bi_banner_img', true );
	$bi_banner_linha_1 = get_post_meta( $post_id, 'bi_banner_linha_1', true );
	$bi_banner_linha_2 = get_post_meta( $post_id, 'bi_banner_linha_2', true );
	$bi_banner_linha_3 = get_post_meta( $post_id, 'bi_banner_linha_3', true );
	$bi_banner_title = get_post_meta( $post_id, 'bi_banner_title', true );
	$bi_banner_text = get_post_meta( $post_id, 'bi_banner_text', true );
	$bi_banner_btn_url = get_post_meta( $post_id, 'bi_banner_btn_url', true );
	$bi_banner_btn_txt = get_post_meta( $post_id, 'bi_banner_btn_txt', true );
?>

<?php $solucoes_form_id = get_post_meta( $post_id, 'solucoes_form_id', true ); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'bi' ); ?>>

	<?php if( $bi_banner_show ) : ?>

		<div class="page-banner bi-banner" style="background-image: url(<?php echo $bi_banner_img; ?>);">


			<div class="container">
				<div class="row">
					
					<div class="clearfix m-t-120 hidden-xs hidden-sm"></div>

					<div class="clearfix m-t-80"></div>
					
					<div class="col-lg-4 col-md-6 col-lg-offset-1">

						<h1 class="bi-banner-line-1"><?php echo wp_kses_decode_entities( $bi_banner_linha_1 ); ?></h1>
						<h3 class="bi-banner-line-2"><?php echo wp_kses_decode_entities( $bi_banner_linha_2 ); ?></h3>
						<div class="clearfix m-b-20"></div>
						<div class="bi-banner-line-3"><?php echo wp_kses_decode_entities( $bi_banner_linha_3 ); ?></div>
						
					</div>
					<!-- /.col-lg-4 -->

					<div class="clearfix m-b-40 visible-xs visible-sm"></div>

					<div class="col-lg-4 col-md-6 col-lg-offset-1">

						<div class="prx-linha prx-linha-l prx-linha-radius-4 prx-linha-b hidden-xs" style="position: absolute; top: -10px; right: 100%; width: 40px;">

						</div>
						<!-- /.prx-linha -->

						<h3 class="bi-banner-title"><?php echo $utils->nl2p( $bi_banner_title ); ?></h3>

						<div class="clearfix m-b-40"></div>

						<div class="bi-banner-text list-ul list-ul-arrow-2 list-ul-font-white"><?php echo $utils->nl2p( $bi_banner_text ); ?></div>

						<div class="clearfix m-t-80"></div>

						<?php if( $solucoes_form_id ) : ?>

							<a href="#<?php //echo $bi_banner_btn_url; ?>" class="bi-banner-btn prx-btn prx-btn-inline" style="position: relative;" data-toggle="modal" data-target="#prx-modal-solucoes">
								
								<?php echo $bi_banner_btn_txt ?>
								<div class="prx-linha prx-linha-b hidden-xs" style="position: absolute; left: 100%; margin-left: 20px; bottom: 20px; width: 80px;"></div>
							</a>

						<?php endif; ?>

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
		$bi_section_1_show = get_post_meta( $post_id, 'bi_section_1_show', true );
		$bi_section_1_title = get_post_meta( $post_id, 'bi_section_1_title', true );
		$bi_section_1_title_option_1 = get_post_meta( $post_id, 'bi_section_1_title_option_1', true );
		$bi_section_1_text_1_option_1 = get_post_meta( $post_id, 'bi_section_1_text_1_option_1', true );
		$bi_section_1_text_2_option_1 = get_post_meta( $post_id, 'bi_section_1_text_2_option_1', true );
		$bi_section_1_title_option_2 = get_post_meta( $post_id, 'bi_section_1_title_option_2', true );
		$bi_section_1_text_1_option_2 = get_post_meta( $post_id, 'bi_section_1_text_1_option_2', true );
		$bi_section_1_text_2_option_2 = get_post_meta( $post_id, 'bi_section_1_text_2_option_2', true );
	?>

	<?php if( $bi_section_1_show ) : ?>

		<div class="bi-section-1 ov-h">

			<div class="clearfix m-t-80"></div>
			
			<div class="container text-center">
				<div class="row">

					<div class="col-md-12">

						<h2 class="bi-title-section-1 b40-1"><?php echo $bi_section_1_title; ?></h2>

						<div class="clearfix m-b-40"></div>

						<div class="checkbox prx-checkbox-toggle">
							<label class="active prx-checkbox-toggle-label prx-checkbox-toggle-label-1 l40-1"><?php echo $bi_section_1_title_option_1; ?></label>

							<input id="bi-checkbox-toggle" type="checkbox" name="checkbox_toggle" checked data-toggle="toggle" data-on="<i class='fa fa-angle-left'></i>" data-off="<i class='fa fa-angle-right'></i>" data-onstyle="danger">

							<label class="prx-checkbox-toggle-label prx-checkbox-toggle-label-2 r40-1"><?php echo $bi_section_1_title_option_2; ?></label>
						</div>
						<!-- /.checkbox -->

					</div>
					<!-- /.col-md-12 -->
					
				</div>
				<!-- /.row -->
			</div>
			<!-- /.container -->

			<div class="clearfix m-b-40"></div>

			<div class="bi-box-cinza ov-h">
				
				<div class="container bi-tab-content" id="bi-tab-content-1">
					<div class="row">
						
						<div class="col-md-6 l40-1">
							
							<div class="bi-section-1-text-1"><?php echo $bi_section_1_text_1_option_1; ?></div>

						</div>

						<div class="clearfix m-b-20 visible-xs visible-sm"></div>

						<!-- /.col-md-6 -->
						<div class="col-md-6 r40-1">
							
							<div class="bi-section-1-text-2 prx-lista prx-lista-seta-1"><?php echo $utils->nl2p( $bi_section_1_text_2_option_1 ); ?></div>

						</div>
						<!-- /.col-md-6 -->

					</div>
					<!-- /.row -->
				</div>
				<!-- /.container -->

				<div class="container bi-tab-content" id="bi-tab-content-2">
					<div class="row">
						
						<div class="col-md-6">
							
							<div class="bi-section-1-text-1"><?php echo $bi_section_1_text_1_option_2; ?></div>

						</div>
						
						<div class="clearfix m-b-20 visible-xs visible-sm"></div>
						
						<!-- /.col-md-6 -->
						<div class="col-md-6">
							
							<div class="bi-section-1-text-2 prx-lista prx-lista-seta-1"><?php echo $utils->nl2p( $bi_section_1_text_2_option_2 ); ?></div>

						</div>
						<!-- /.col-md-6 -->

					</div>
					<!-- /.row -->
				</div>
				<!-- /.container -->

			</div>
			<!-- /.bi-box-cinza -->

		</div>
		<!-- /.bi-section-1 -->

		<div class="clearfix m-b-80"></div>

	<?php endif; ?>

	<?php
		$bi_section_2_show = get_post_meta( $post_id, 'bi_section_2_show', true );
		$bi_section_2_title = get_post_meta( $post_id, 'bi_section_2_title', true );
		$bi_section_2_text = get_post_meta( $post_id, 'bi_section_2_text', true );
		$bi_section_2_img = get_post_meta( $post_id, 'bi_section_2_img', true );
	?>

	<?php if( $bi_section_2_show ) : ?>

		<div class="bi-section-2 ov-h">

			<div class="container">
				<div class="row">
			
					<div class="col-md-12 b40-1">
						
						<h2 class="bi-section-2-title text-center"><?php echo $bi_section_2_title; ?></h2>
			
					</div>
					<!-- /.col-md-12 -->
			
					<div class="clearfix m-b-40"></div>
					
					<div class="col-md-6 l40-1">
						
						<div class="bi-section-2-text prx-lista prx-lista-seta-1"><?php echo $utils->nl2p( $bi_section_2_text ); ?></div>
			
					</div>
					<!-- /.col-md-6 -->

					<div class="clearfix m-b-40 visible-xs visible-sm"></div>
			
					<div class="col-md-6 r40-1">
						
						<img src="<?php echo $bi_section_2_img; ?>" class="bi-section-2-img">
			
					</div>
					<!-- /.col-md-6 -->
			
				</div>
				<!-- /.row -->
			</div>
			<!-- /.container -->

		</div>
		<!-- /.bi-section-2 -->

		<div class="clearfix m-b-80"></div>

	<?php endif; ?>

	<?php
		$bi_section_3_show = get_post_meta( $post_id, 'bi_section_3_show', true );
		$bi_section_3_title = get_post_meta( $post_id, 'bi_section_3_title', true );
		$bi_section_3_img = get_post_meta( $post_id, 'bi_section_3_img', true );
		$bi_section_3_text = get_post_meta( $post_id, 'bi_section_3_text', true );
		$bi_section_3_area = get_post_meta( $post_id, 'bi_section_3_area', true );
	?>

	<?php if( $bi_section_3_show ) : ?>

		<div class="bi-section-3 ov-h">

			<div class="container">
				<div class="row">
			
					<div class="col-md-5 l40-1">

						<h2 class="bi-section-3-title p-b-20" style="position: relative;">

							<?php echo $bi_section_3_title; ?>

							<div class="prx-linha prx-linha-t prx-linha-r prx-linha-radius-2 hidden-xs hidden-sm" style="position: absolute; top: 100%; left: 0; right: -65px; width: auto; height: 60px;">
								
								<div class="prx-linha prx-linha-t" style="position: absolute; bottom: 2px; right: 100%; margin-right: 40px; width: 999px;"></div>

							</div>

							<div class="prx-linha prx-linha-b visible-xs visible-sm m-t-20"></div>

						</h2>

						<div class="clearfix m-b-60"></div>
						
						<img src="<?php echo $bi_section_3_img ?>" class="bi-section-3-img">

						<div class="bi-section-3-text"><?php echo $utils->nl2p( $bi_section_3_text ); ?></div>
			
					</div>
					<!-- /.col-md-5 -->

					<div class="clearfix m-b-80 visible-xs visible-sm"></div>
			
					<div class="col-md-6 col-md-offset-1">

						<div class="clearfix m-t-120 hidden-xs hidden-sm"></div>

						<div class="bi-vantagens" style="position: relative;">

							<div class="prx-linha prx-linha-l visible-lg" style="position: absolute; top: -15px; bottom: 65px; right: 100%; width: 65px; height: auto;"></div>
						
							<div class="prx-linha prx-linha-l visible-md" style="position: absolute; top: -15px; bottom: 65px; right: 100%; width: 47px; height: auto;"></div>
						
							<?php foreach ( $bi_section_3_area as $item ): ?>
								
								<div class="bi-vantagens-item r40-1">

									<h4 class="bi-vantagens-title" style="position: relative;">

										<div class="prx-linha prx-linha-b prx-linha-l prx-linha-radius-4 visible-lg" style="position: absolute; bottom: 0; margin-bottom: 5px; right: 100%; margin-right: 20px; height: 30px; width: 45px;"></div>

										<div class="prx-linha prx-linha-b prx-linha-l prx-linha-radius-4 visible-md" style="position: absolute; bottom: 0; margin-bottom: 5px; right: 100%; margin-right: 20px; height: 30px; width: 27px;"></div>

										<?php echo $item[ 'bi_section_3_title' ]; ?>

										<div class="prx-linha prx-linha-b m-t-5 m-b-10 visible-xs visible-sm"></div>

									</h4>
									
									<div class="clearfix m-b-10"></div>
									
									<div class="bi-vantagens-text"><?php echo $item[ 'bi_section_3_text' ]; ?></div>

								</div>
								<!-- /.bi-vantagens-item -->

							<?php endforeach ?>

							<div class="clearfix m-b-80"></div>

							<div class="prx-linha prx-linha-l prx-linha-b prx-linha-radius-4 visible-lg" style="position: absolute; bottom: 0; right: 0; left: -65px; width: auto; height: 65px;">
								
								<div class="prx-linha prx-linha-b" style="position: absolute; bottom: -2px; left: 100%; margin-left: 40px; width: 999px;"></div>

							</div>

							<div class="prx-linha prx-linha-l prx-linha-b prx-linha-radius-4 visible-md" style="position: absolute; bottom: 0; right: 0; left: -47px; width: auto; height: 65px;">
								
								<div class="prx-linha prx-linha-b" style="position: absolute; bottom: -2px; left: 100%; margin-left: 40px; width: 999px;"></div>

							</div>

						</div>
						<!-- /.bi-vantagens -->

					</div>
					<!-- /.col-md-6 -->
			
				</div>
				<!-- /.row -->
			</div>
			<!-- /.container -->

		</div>
		<!-- /.bi-section-3 -->


	<?php endif; ?>

	<?php
		$bi_cta_show = get_post_meta( $post_id, 'bi_cta_show', true );
		$bi_cta_img = get_post_meta( $post_id, 'bi_cta_img', true );
		$bi_cta_text = get_post_meta( $post_id, 'bi_cta_text', true );
		$bi_cta_btn_txt = get_post_meta( $post_id, 'bi_cta_btn_txt', true );
		$bi_cta_text_url = get_post_meta( $post_id, 'bi_cta_btn_url', true );
	?>

	<?php if( $bi_cta_show ) : ?>

		<div class="bi-cta text-center" style="background-image: url(<?php echo $bi_cta_img; ?>);">
			
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 b40-1">
						
						<div class="bi-cta-text"><?php echo $utils->nl2p( $bi_cta_text ); ?></div>

						<div class="clearfix m-b-20"></div>

						<?php if( $solucoes_form_id ) : ?>

							<a href="#<?php //echo $bi_cta_text_url; ?>" class="prx-btn prx-btn-inline bi-cta-btn" data-toggle="modal" data-target="#prx-modal-solucoes"><?php echo $bi_cta_btn_txt; ?></a>

						<?php endif; ?>

					</div>
					<!-- /.col-md-8 -->
				</div>
				<!-- /.row -->
			</div>
			<!-- /.container -->

		</div>
		<!-- /.bi-cta -->

	<?php endif; ?>

	<?php
		$bi_section_4_show = get_post_meta( $post_id, 'bi_section_4_show', true );
		$bi_section_4_title = get_post_meta( $post_id, 'bi_section_4_title', true );
		$bi_section_4_img = get_post_meta( $post_id, 'bi_section_4_img', true );
		$bi_section_4_text = get_post_meta( $post_id, 'bi_section_4_text', true );
		$bi_section_4_area = get_post_meta( $post_id, 'bi_section_4_area', true );
	?>

	<?php if( $bi_section_4_show ) : ?>

		<div class="bi-section-4 ov-h">

			<div class="clearfix m-t-80"></div>

			<div class="container">

				<div class="row">

					<div class="col-md-12 b40-1">
						
						<h2 class="bi-section-4-title text-center"><?php echo $bi_section_4_title; ?></h2>

					</div>
					<!-- /.col-md-12 -->

					<div class="clearfix m-b-40"></div>
			
					<div class="col-md-6 l40-1">
						
						<div class="bi-section-4-text"><?php echo $utils->nl2p( $bi_section_4_text ); ?></div>
						
						<div class="clearfix m-b-20"></div>

						<img src="<?php echo $bi_section_4_img ?>" class="bi-section-4-img">
			
					</div>
					<!-- /.col-md-6 -->

					<div class="clearfix m-b-40 visible-xs visible-sm"></div>
			
					<div class="col-md-6 r40-1">

						<div class="bi-processos">
						
							<?php foreach ( $bi_section_4_area as $item ): ?>
								
								<div class="bi-processos-item">

									<h4 class="bi-processos-title">

										<?php echo $item[ 'bi_section_4_title' ]; ?>

									</h4>
									
									<div class="clearfix m-b-10"></div>
									
									<div class="bi-processos-text"><?php echo $utils->nl2p( $item[ 'bi_section_4_text' ] ); ?></div>

								</div>
								<!-- /.bi-processos-item -->

							<?php endforeach ?>

						</div>
						<!-- /.bi-processos -->

					</div>
					<!-- /.col-md-6 -->
			
				</div>
				<!-- /.row -->
			</div>
			<!-- /.container -->

			<div class="clearfix m-b-80"></div>

		</div>
		<!-- /.bi-section-4 -->


	<?php endif; ?>

	<?php get_template_part( 'inc/laf/parts/integracoes', 'section' ); ?>
	
</article><!-- #post-## -->