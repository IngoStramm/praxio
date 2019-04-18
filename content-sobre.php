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
	$sobre_banner_show = get_post_meta( $post_id, 'sobre_banner_show', true );
	$sobre_banner_img = get_post_meta( $post_id, 'sobre_banner_img', true );
	$sobre_banner_linha_1 = get_post_meta( $post_id, 'sobre_banner_linha_1', true );
	$sobre_banner_linha_2 = get_post_meta( $post_id, 'sobre_banner_linha_2', true );
	$sobre_banner_linha_3 = get_post_meta( $post_id, 'sobre_banner_linha_3', true );
	$sobre_banner_text = get_post_meta( $post_id, 'sobre_banner_text', true );
	$sobre_banner_btn_url = get_post_meta( $post_id, 'sobre_banner_btn_url', true );
	$sobre_banner_btn_txt = get_post_meta( $post_id, 'sobre_banner_btn_txt', true );
?>


<article id="post-<?php the_ID(); ?>" <?php post_class( 'sobre' ); ?>>

	<?php if( $sobre_banner_show ) : ?>

		<div class="page-banner sobre-banner" style="background-image: url(<?php echo $sobre_banner_img; ?>);">


			<div class="container">
				<div class="row">
					
					<div class="clearfix m-t-120 hidden-xs hidden-sm"></div>

					<div class="clearfix m-t-80"></div>
					
					<div class="col-lg-4 col-md-6 col-lg-offset-1">

						<h1 class="sobre-banner-line-1 page-banner-subtitulo"><?php echo wp_kses_decode_entities( $sobre_banner_linha_1 ); ?></h1>
						<div class="clearfix m-b-20"></div>
						<h3 class="sobre-banner-line-2 page-banner-titulo"><?php echo wp_kses_decode_entities( $sobre_banner_linha_2 ); ?></h3>
						<div class="clearfix m-b-20"></div>
						<div class="sobre-banner-line-3 page-banner-subtitulo"><?php echo wp_kses_decode_entities( $sobre_banner_linha_3 ); ?></div>
						
					</div>
					<!-- /.col-lg-4 -->

					<div class="clearfix m-b-40 visible-xs visible-sm"></div>

					<div class="col-lg-4 col-md-6 col-lg-offset-1">

						<div class="prx-linha prx-linha-l prx-linha-b prx-linha-radius-4 hidden-xs" style="position: absolute; top: -10px; right: 100%; width: 40px;"></div>
						<!-- /.prx-linha -->

						<div class="sobre-banner-text  page-banner-texto"><?php echo $utils->nl2p( $sobre_banner_text ); ?></div>

						<div class="clearfix m-t-80"></div>

						<a href="<?php echo $sobre_banner_btn_url; ?>" class=" page-banner-btn sobre-banner-btn prx-btn prx-btn-inline" style="position: relative;">
							<?php echo $sobre_banner_btn_txt ?>
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

	<div class="container">
		
	<?php
		$sobre_section_1_show = get_post_meta( $post_id, 'sobre_section_1_show', true );
		$sobre_section_1_linha_1 = get_post_meta( $post_id, 'sobre_section_1_linha_1', true );
		$sobre_section_1_linha_2 = get_post_meta( $post_id, 'sobre_section_1_linha_2', true );
		$sobre_section_1_text = get_post_meta( $post_id, 'sobre_section_1_text', true );
		$sobre_section_1_img = get_post_meta( $post_id, 'sobre_section_1_img', true );
		$sobre_section_1_img_title = get_post_meta( $post_id, 'sobre_section_1_img_title', true );
		$sobre_section_1_img_text = get_post_meta( $post_id, 'sobre_section_1_img_text', true );
	?>
		<?php if( $sobre_section_1_show ) : ?>
			
			<div class="sobre-section-1">

				<div class="clearfix m-t-80"></div>
				
				<div class="row">
					
					<div class="col-md-6">
						
						<h3 class="sobre_section-1-linha-1"><?php echo $sobre_section_1_linha_1; ?></h3>
						<h1 class="sobre_section-1-linha-2"><?php echo $sobre_section_1_linha_2; ?></h1>

						<div class="clearfix m-t-60 m-b-40" style="position: relative;">
							<div class="prx-linha prx-linha-t" style="position: absolute; top: 0; left: 60px; right: 0; width: auto;"></div>
						</div>

						<div class="sobre-section-1-text" style="position: relative;">
							<div class="prx-linha prx-linha-l prx-linha-t prx-linha-radius-1 hidden-xs" style="position: absolute; top: -40px; right: 100%; width: 40px;"></div>
							<?php echo $utils->nl2p( $sobre_section_1_text ); ?>
						</div>
						<!-- ./sobre-section-1-text -->

					</div>
					<!-- /.col-md-6 -->

					<div class="col-md-6">
						
						<img src="<?php echo $sobre_section_1_img; ?>" alt="<?php echo $sobre_section_1_img_title; ?>" class="img-responsive center-block">

					</div>
					<!-- /.col-md-6 -->

				</div>
				<!-- /.row -->

				<div class="clearfix m-b-80">
				
			</div>
			<!-- /.sobre-section-1 -->

		<?php endif; ?>
	</div>
	<!-- /.container -->

</article><!-- #post-## -->