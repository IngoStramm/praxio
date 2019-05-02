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
	$fale_conosco_banner_show = get_post_meta( $post_id, 'fale_conosco_banner_show', true );
	$fale_conosco_banner_img = get_post_meta( $post_id, 'fale_conosco_banner_img', true );
	$fale_conosco_banner_linha_1 = get_post_meta( $post_id, 'fale_conosco_banner_linha_1', true );
	$fale_conosco_banner_linha_2 = get_post_meta( $post_id, 'fale_conosco_banner_linha_2', true );
	//$fale_conosco_banner_cf7 = get_post_meta( $post_id, 'fale_conosco_banner_cf7', true );
	$rd_contact_id_pt_BR = laf_get_option( 'rd_contact_id_pt_BR' );
?>


<article id="post-<?php the_ID(); ?>" <?php post_class( 'fale-conosco' ); ?>>

	<?php if( $fale_conosco_banner_show ) : ?>

		<div class="page-banner fale-conosco-banner ov-h" style="background-image: url(<?php echo $fale_conosco_banner_img; ?>);">


			<div class="container">
				<div class="row">
					
					<div class="clearfix m-t-120"></div>
					
					<div class="col-md-4 col-md-offset-2 l40-1">

						<h4><?php echo wp_kses_decode_entities( $fale_conosco_banner_linha_1 ); ?></h4>
						<h1><?php echo wp_kses_decode_entities( $fale_conosco_banner_linha_2 ); ?></h1>
						
					</div>
					<!-- /.col-md-4 -->

					<div class="clearfix m-b-20 visible-xs visible-sm"></div>

					<div class="col-md-4 r40-1">
						<div class="fale-conosco-form">
							<?php if( $rd_contact_id_pt_BR ) : ?>
								<div role="main" id="<?php echo $rd_contact_id_pt_BR; ?>"></div>
							<?php endif; ?>
						</div>
					</div>
					<!-- /.col-md-4 -->

					<div class="clearfix m-b-80"></div>
				</div>
				<!-- /.row -->
			</div>
			<!-- /.container -->
			
		</div>
		<!-- /.page-banner -->
	<?php endif; ?>

	<?php
		$fale_conosco_section_1_show = get_post_meta( $post_id, 'fale_conosco_section_1_show', true );
		$fale_conosco_section_1_text = get_post_meta( $post_id, 'fale_conosco_section_1_text', true );
		$fale_conosco_section_1_title = get_post_meta( $post_id, 'fale_conosco_section_1_title', true );
	?>

	<?php if( $fale_conosco_section_1_show ) : ?>

		<div class="fale-conosco-section-1">		

					<div class="clearfix m-t-80"></div>

			<div class="container">
				<div class="row">

					<div class="col-md-6 l40-1">
						<div class="fale-conosco-section-1-text"><?php echo $utils->nl2p( $fale_conosco_section_1_text ); ?></div>
					</div>
					<!-- /.col-md-6 -->

					<div class="clearfix m-b-40 visible-xs visible-sm"></div>

					<div class="col-md-6 r40-1">
						<div class="fale-conosco-section-1-title"><?php echo wp_kses_decode_entities( $fale_conosco_section_1_title ); ?></div>
					</div>
					<!-- /.col-md-6 -->
										
				</div>
				<!-- /.row -->
			</div>
			<!-- /.container -->
					
			<div class="clearfix m-t-80"></div>

		</div>
		<!-- /.fale-conosco-section-1 -->

	<?php endif; ?>

	<?php
		$fale_conosco_section_2_show = get_post_meta( $post_id, 'fale_conosco_section_2_show', true );
		$fale_conosco_section_2_img = get_post_meta( $post_id, 'fale_conosco_section_2_img', true );
		$fale_conosco_section_2_title = get_post_meta( $post_id, 'fale_conosco_section_2_title', true );
		$fale_conosco_section_2_text = get_post_meta( $post_id, 'fale_conosco_section_2_text', true );
		$fale_conosco_section_2_pc = get_post_meta( $post_id, 'fale_conosco_section_2_pc', true );
	?>

	<?php if( $fale_conosco_section_2_show ) : ?>

		<div class="fale-conosco-section-2 text-center" style="background-image: url(<?php echo $fale_conosco_section_2_img; ?>);">		
			<div class="clearfix p-t-80"></div>

			<div class="container">
				<div class="row">

					<div class="col-md-8 col-md-offset-2 b40-1">
						<h1 class="fale-conosco-section-2-title"><?php echo wp_kses_decode_entities( $fale_conosco_section_2_title ); ?></h1>
						<div class="clearfix m-b-20"></div>
						<span class="fale-conosco-section-2-pc"><?php echo $fale_conosco_section_2_pc; ?>%</span>
						<span class="fale-conosco-section-2-text"><?php echo wp_kses_decode_entities( $fale_conosco_section_2_text ); ?></span>
					</div>
					<!-- /.col-md-6 -->
					
				</div>
				<!-- /.row -->
			</div>
			<!-- /.container -->

			<div class="clearfix p-b-80"></div>

		</div>
		<!-- /.fale-conosco-section-2 -->

	<?php endif; ?>

	<?php
		$fale_conosco_section_3_show = get_post_meta( $post_id, 'fale_conosco_section_3_show', true );
		$fale_conosco_section_3_title = get_post_meta( $post_id, 'fale_conosco_section_3_title', true );
		$fale_conosco_section_3_text = get_post_meta( $post_id, 'fale_conosco_section_3_text', true );
		$fale_conosco_section_3_btn_txt = get_post_meta( $post_id, 'fale_conosco_section_3_btn_txt', true );
		$fale_conosco_section_3_btn_url = get_post_meta( $post_id, 'fale_conosco_section_3_btn_url', true );
		$fale_conosco_section_3_img = get_post_meta( $post_id, 'fale_conosco_section_3_img', true );
		$fale_conosco_section_3_img_title = get_post_meta( $post_id, 'fale_conosco_section_3_img_title', true );
		$fale_conosco_section_3_img_text = get_post_meta( $post_id, 'fale_conosco_section_3_img_text', true );
	?>

	<?php if( $fale_conosco_section_3_show ) : ?>

		<div class="fale-conosco-section-3 ov-h">

		<div class="clearfix m-t-80"></div>		

			<div class="container">
				<div class="row">

					<div class="col-md-6 l40-1">
						<h1 class="fale-conosco-section-3-title"><?php echo $fale_conosco_section_3_title; ?></h1>

						<div class="clearfix m-b-20"></div>

						<div class="prx-linha prx-linha-t" style="position: relative; height: 20px;">

							<div class="prx-linha prx-linha-l prx-linha-t prx-linha-radius-1 hidden-xs" style="position: absolute; top: -2px; right: 100%; width: 40px; height: 300px;"></div>

						</div>
						<!-- /.prx-linha -->

						<div class="fale-conosco-section-3-text"><?php echo $utils->nl2p( $fale_conosco_section_3_text ); ?></div>
						<div class="clearfix m-b-40"></div>
						<div class="text-center">
							<a href="<?php echo $fale_conosco_section_3_btn_url; ?>" class="prx-btn prx-btn-inline fale-conosco-section-3-btn"><?php echo $fale_conosco_section_3_btn_txt; ?></a>
						</div>
					</div>
					<!-- /.col-md-6 -->

					<div class="clearfix m-b-80 visible-xs visible-sm"></div>
					
					<div class="col-md-6 b40-1">
						<img src="<?php echo $fale_conosco_section_3_img; ?>" class="img-responsive center-block fale-conosco-section-3-img">
						<div class="fale-conosco-section-3-block-cinza">
							<h3 class="fale-conosco-section-3-img-title"><?php echo $fale_conosco_section_3_img_title; ?></h3>
							<div class="fale-conosco-section-3-img-text"><?php echo $utils->nl2p( $fale_conosco_section_3_img_text ); ?></div>
						</div>
						<!-- /.fale-conosco-section-3-block-cinza -->
					</div>
					<!-- /.col-md-6 -->
					
				</div>
				<!-- /.row -->
			</div>
			<!-- /.container -->

			<div class="clearfix m-b-80"></div>

		</div>
		<!-- /.fale-conosco-section-3 -->

	<?php endif; ?>

</article><!-- #post-## -->

<div class="clearfix m-b-40"></div>
