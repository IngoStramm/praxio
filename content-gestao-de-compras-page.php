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
	$gestao_de_compras_banner_show = get_post_meta( $post_id, 'gestao_de_compras_banner_show', true );
	$gestao_de_compras_banner_img = get_post_meta( $post_id, 'gestao_de_compras_banner_img', true );
	$gestao_de_compras_banner_linha_1 = get_post_meta( $post_id, 'gestao_de_compras_banner_linha_1', true );
	$gestao_de_compras_banner_linha_2 = get_post_meta( $post_id, 'gestao_de_compras_banner_linha_2', true );
	$gestao_de_compras_banner_linha_3 = get_post_meta( $post_id, 'gestao_de_compras_banner_linha_3', true );
	$gestao_de_compras_banner_linha_4 = get_post_meta( $post_id, 'gestao_de_compras_banner_linha_4', true );
	$gestao_de_compras_banner_text = get_post_meta( $post_id, 'gestao_de_compras_banner_text', true );
	$gestao_de_compras_banner_btn_url = get_post_meta( $post_id, 'gestao_de_compras_banner_btn_url', true );
	$gestao_de_compras_banner_btn_txt = get_post_meta( $post_id, 'gestao_de_compras_banner_btn_txt', true );
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'gestao-de-compras' ); ?>>

	<?php if( $gestao_de_compras_banner_show ) : ?>

		<div class="page-banner gestao-de-compras-banner" style="background-image: url(<?php echo $gestao_de_compras_banner_img; ?>);">


			<div class="container">
				<div class="row">
					
					<div class="clearfix m-t-120 hidden-xs hidden-sm"></div>

					<div class="clearfix m-t-80"></div>
					
					<div class="col-lg-4 col-md-6 col-lg-offset-1">

						<h1 class="gestao-de-compras-banner-line-1 page-banner-title-1"><?php echo wp_kses_decode_entities( $gestao_de_compras_banner_linha_1 ); ?></h1>
						<h3 class="gestao-de-compras-banner-line-2 page-banner-title-1 text-stroke-1"><?php echo wp_kses_decode_entities( $gestao_de_compras_banner_linha_2 ); ?></h3>
						<h1 class="gestao-de-compras-banner-line-3 page-banner-title-1"><?php echo wp_kses_decode_entities( $gestao_de_compras_banner_linha_3 ); ?></h1>
						<div class="clearfix m-b-20"></div>
						<div class="gestao-de-compras-banner-line-4 page-banner-text-smaller"><?php echo wp_kses_decode_entities( $gestao_de_compras_banner_linha_4 ); ?></div>
						
					</div>
					<!-- /.col-lg-4 -->

					<div class="clearfix m-b-40 visible-xs visible-sm"></div>

					<div class="col-lg-4 col-md-6 col-lg-offset-1">

						<div class="prx-linha prx-linha-l prx-linha-radius-4 prx-linha-b hidden-xs" style="position: absolute; top: -10px; right: 100%; width: 40px;">

						</div>
						<!-- /.prx-linha -->

						<div class="gestao-de-compras-banner-text page-banner-text-bigger"><?php echo $utils->nl2p( $gestao_de_compras_banner_text ); ?></div>

						<div class="clearfix m-t-80"></div>

						<a href="<?php echo $gestao_de_compras_banner_btn_url; ?>" class="gestao-de-compras-banner-btn page-banner-btn prx-btn prx-btn-inline" style="position: relative;">
							
							<?php echo $gestao_de_compras_banner_btn_txt ?>
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
		$utils = new Utils;
		$post_id = get_the_ID();
		$meta = get_post_meta( $post_id, '', true );
		$gestao_de_compras_secao_1_show = get_post_meta( $post_id, 'gestao_de_compras_secao_1_show', true );
		$gestao_de_compras_secao_1_col_1_img = get_post_meta( $post_id, 'gestao_de_compras_secao_1_col_1_img', true );
		$gestao_de_compras_secao_1_col_1_title = get_post_meta( $post_id, 'gestao_de_compras_secao_1_col_1_title', true );
		$gestao_de_compras_secao_1_col_1_text = get_post_meta( $post_id, 'gestao_de_compras_secao_1_col_1_text', true );
		$gestao_de_compras_secao_1_col_2_img = get_post_meta( $post_id, 'gestao_de_compras_secao_1_col_2_img', true );
		$gestao_de_compras_secao_1_col_2_title = get_post_meta( $post_id, 'gestao_de_compras_secao_1_col_2_title', true );
		$gestao_de_compras_secao_1_col_2_text = get_post_meta( $post_id, 'gestao_de_compras_secao_1_col_2_text', true );
		$gestao_de_compras_secao_1_col_3_img = get_post_meta( $post_id, 'gestao_de_compras_secao_1_col_3_img', true );
		$gestao_de_compras_secao_1_col_3_title = get_post_meta( $post_id, 'gestao_de_compras_secao_1_col_3_title', true );
		$gestao_de_compras_secao_1_col_3_text = get_post_meta( $post_id, 'gestao_de_compras_secao_1_col_3_text', true );
	?>

	<?php if( $gestao_de_compras_secao_1_show ) : ?>

		<div class="gestao-de-compras-secao-1 p-t-80 p-b-80 ov-h" style="position: relative;">
			
			<div class="container">
				
				<div class="row">
					
					<div class="col-md-4 col-sm-6">
						
						<img src="<?php echo $gestao_de_compras_secao_1_col_1_img; ?>" class="img-responsive m-b-20">

						<h4 class="gestao-de-compras-secao-1-titulo"><?php echo $gestao_de_compras_secao_1_col_1_title; ?></h4>

						<div class="gestao-de-compras-secao-1-texto"><?php echo $utils->nl2p( $gestao_de_compras_secao_1_col_1_text ); ?></div>

					</div>
					<!-- /.col-md-4 col-sm-6 -->

					<div class="clearfix visible-xs m-b-40"></div>

					<div class="col-md-4 col-sm-6">
						
						<img src="<?php echo $gestao_de_compras_secao_1_col_2_img; ?>" class="img-responsive m-b-20">

						<h4 class="gestao-de-compras-secao-1-titulo"><?php echo $gestao_de_compras_secao_1_col_2_title; ?></h4>

						<div class="gestao-de-compras-secao-1-texto"><?php echo $utils->nl2p( $gestao_de_compras_secao_1_col_2_text ); ?></div>

					</div>
					<!-- /.col-md-4 col-sm-6 -->
					
					<div class="clearfix visible-xs visible-sm m-b-40"></div>

					<div class="col-md-4 col-sm-6">
						
						<img src="<?php echo $gestao_de_compras_secao_1_col_3_img; ?>" class="img-responsive m-b-20">

						<h4 class="gestao-de-compras-secao-1-titulo"><?php echo $gestao_de_compras_secao_1_col_3_title; ?></h4>

						<div class="gestao-de-compras-secao-1-texto"><?php echo $utils->nl2p( $gestao_de_compras_secao_1_col_3_text ); ?></div>

					</div>
					<!-- /.col-md-4 col-sm-6 -->

					<div class="col-md-12" style="position: relative;">
						
						<div class="prx-linha prx-linha-l visible-md visible-lg" style="position: absolute; bottom: 0; right: 100%; width: 40px; height: 300px; right: 100%;"></div>
						
					</div>

				</div>
				<!-- /.row -->


			</div>
			<!-- /.container -->

		</div>
		<!-- /.gestao-de-compras-secao-1 -->

	<?php endif; ?>

	<?php
		$gestao_de_compras_secao_2_show = get_post_meta( $post_id, 'gestao_de_compras_secao_2_show', true );
		$gestao_de_compras_secao_2_img = get_post_meta( $post_id, 'gestao_de_compras_secao_2_img', true );
		$gestao_de_compras_secao_2_title = get_post_meta( $post_id, 'gestao_de_compras_secao_2_title', true );
		$gestao_de_compras_secao_2_text = get_post_meta( $post_id, 'gestao_de_compras_secao_2_text', true );
		$gestao_de_compras_secao_2_col_1_img = get_post_meta( $post_id, 'gestao_de_compras_secao_2_col_1_img', true );
		$gestao_de_compras_secao_2_col_1_item = get_post_meta( $post_id, 'gestao_de_compras_secao_2_col_1_item', true );
		$gestao_de_compras_secao_2_col_2_img = get_post_meta( $post_id, 'gestao_de_compras_secao_2_col_2_img', true );
		$gestao_de_compras_secao_2_col_2_item = get_post_meta( $post_id, 'gestao_de_compras_secao_2_col_2_item', true );
	?>

	<?php if( $gestao_de_compras_secao_2_show ) : ?>

		<div class="gestao-de-compras-secao-2 p-t-80 p-b-80 ov-h">

			<div class="gestao-de-compras-secao-2-bg hidden-xs hidden-sm" style="background-image: url(<?php echo $gestao_de_compras_secao_2_img; ?>);"></div>

			<div class="container">
				
				<div class="row">

					<div class="col-md-6 col-lg-8">

						<h2 class="gestao-de-compras-secao-2-title m-b-40" style="position: relative;">

							<div class="prx-linha prx-linha-l prx-linha-b prx-linha-radius-4" style="position: absolute; bottom: 50px; right: 100%; width: 40px; height: 300px; margin-right: 20px;"></div>

							<?php echo $gestao_de_compras_secao_2_title; ?>
								
							</h2>

						<div class="gestao-de-compras-text"><?php echo $utils->nl2p( $gestao_de_compras_secao_2_text ); ?></div>

					</div>
					<!-- /.col-md-8 -->

					<div class="col-md-6 m-t-40 col-lg-4 hidden-md hidden-lg">
						
						<img class="img-responsive center-block" src="<?php echo $gestao_de_compras_secao_2_img; ?>">

					</div>
					<!-- /.col-md-4 hidden-md hidden-lg -->
					
				</div>
				<!-- /.row -->

				<div class="clearfix m-t-80"></div>

				<div class="row">
					
					<div class="col-md-6">
						
						<div class="row">
							
							<div class="col-xs-4">
								
								<img src="<?php echo $gestao_de_compras_secao_2_col_1_img; ?>" class="center-block img-responsive">

							</div>
							<!-- /.col-xs-4 -->

							<div class="col-xs-8">
								
								<?php if( $gestao_de_compras_secao_2_col_1_item ) : ?>

									<div class="prx-lista prx-lista-seta-1">

										<ul>

										<?php foreach ( $gestao_de_compras_secao_2_col_1_item as $item ) : ?>

											<li><?php echo $item; ?></li>

										<?php endforeach; ?>

										</ul>

									</div>

								<?php endif; ?>

							</div>
							<!-- /.col-xs-8 -->

						</div>
						<!-- /.row -->

					</div>
					<!-- /.col-md-6 -->

					<div class="clearfix visible-xs visible-sm m-t-40"></div>

					<div class="col-md-6">
						
						<div class="row">
							
							<div class="col-xs-4">
								
								<img src="<?php echo $gestao_de_compras_secao_2_col_1_img; ?>" class="center-block img-responsive">

							</div>
							<!-- /.col-xs-4 -->

							<div class="col-xs-8">
								
								<?php if( $gestao_de_compras_secao_2_col_2_item ) : ?>

									<div class="prx-lista prx-lista-seta-1">

										<ul class="prx-lista prx-lista-seta-1">

										<?php foreach ( $gestao_de_compras_secao_2_col_2_item as $item ) : ?>

											<li><?php echo $item; ?></li>

										<?php endforeach; ?>

										</ul>

									</div>

								<?php endif; ?>

							</div>
							<!-- /.col-xs-8 -->

						</div>
						<!-- /.row -->

					</div>
					<!-- /.col-md-6 -->

				</div>
				<!-- /.row -->
			
			</div>
			<!-- /.container -->

		</div>
		<!-- /.gestao-de-compras-secao-2 -->
		
	<?php endif; ?>

	<?php
		$gestao_de_compras_secao_3_show = get_post_meta( $post_id, 'gestao_de_compras_secao_3_show', true );
		$gestao_de_compras_secao_3_group = get_post_meta( $post_id, 'gestao_de_compras_secao_3_group', true );
	?>

	<?php if( $gestao_de_compras_secao_3_show ) : ?>

		<div class="gestao-de-compras-secao-3 p-t-80 p-b-80">

			<?php if( $gestao_de_compras_secao_3_group ) : ?>

				<div class="container">
					<div class="row">
						
						<?php $count = 0; ?>
							
						<?php foreach( $gestao_de_compras_secao_3_group as $logo ) : ?>

							<?php // $utils->debug( count( $gestao_de_compras_secao_3_group ) - 2 ); ?>

							<div class="col-xs-6 col-sm-4 col-md-2">
								<img class="gestao-de-compras-secao-3-clientes-item-img img-responsive center-block" src="<?php echo $logo[ 'gestao_de_compras_secao_3_img' ]; ?>">
							</div>
							<!-- /.col-xs-6 col-sm-4 col-md-2 -->

							<?php if( $count % 3 === 2 && $count < count( $gestao_de_compras_secao_3_group ) - 3 ) : ?>
								<div class="clearfix visible-sm m-b-40"></div>
							<?php endif; ?>

							<?php if( $count % 2 === 1 && $count < count( $gestao_de_compras_secao_3_group ) - 2 ) : ?>
								<div class="clearfix visible-xs m-b-40"></div>
							<?php endif; ?>

							<?php $count++; ?>

						<?php endforeach; ?>

					</div>
					<!-- /.row -->
				</div>
				<!-- /.container -->

			<?php endif; ?>

		</div>
		<!-- /.gestao-de-compras-secao-3 -->
	
	<?php endif; ?>

	<?php
		$gestao_de_compras_secao_4_show = get_post_meta( $post_id, 'gestao_de_compras_secao_4_show', true );
		$gestao_de_compras_secao_4_title = get_post_meta( $post_id, 'gestao_de_compras_secao_4_title', true );
		$gestao_de_compras_secao_4_text_1 = get_post_meta( $post_id, 'gestao_de_compras_secao_4_text_1', true );
		$gestao_de_compras_secao_4_text_2 = get_post_meta( $post_id, 'gestao_de_compras_secao_4_text_2', true );
		$gestao_de_compras_secao_4_url = get_post_meta( $post_id, 'gestao_de_compras_secao_4_url', true );
		$gestao_de_compras_secao_4_thumb = get_post_meta( $post_id, 'gestao_de_compras_secao_4_thumb', true );
	?>

	<?php if( $gestao_de_compras_secao_4_show ) : ?>

		<div class="gestao-de-compras-secao-4 p-t-80 p-b-80 ov-h">
			
			<div class="container">

				<div class="row">

					<div class="col-md-6">
						
						<h2 class="gestao-de-compras-secao-4-title"><?php echo $gestao_de_compras_secao_4_title; ?></h2>

					</div>
					<!-- /.col-md-6 -->

					<div class="clearfix m-b-20"></div>
					
					<div class="col-md-5 col-lg-6" style="position: relative;">
						
						<div class="clearfix visible-md visible-lg m-b-80" style="position: relative;">
							<div class="prx-linha prx-linha-l prx-linha-t prx-linha-radius-1" style="position: absolute; top: 0; right: 0; left: -40px; height: 350px;"></div>
						</div>
						
						<h4 class="gestao-de-compras-secao-4-text-1"><?php echo $gestao_de_compras_secao_4_text_1; ?></h4>
						
						<div class="clearfix visible-xs visible-sm m-t-20"></div>

						<div class="clearfix visible-md visible-lg m-t-80"></div>

						<div class="gestao-de-compras-secao-4-text-2"><?php echo $gestao_de_compras_secao_4_text_2; ?></div>

					</div>
					<!-- /.col-md-5 col-lg-6 -->
						
					<div class="clearfix visible-xs visible-sm m-t-40"></div>

					<div class="col-md-7 col-lg-6">
						
						<a href="#" class="gestao-de-compras-link-show-youtube-modal" data-toggle="modal" data-target="#youtube-modal-gestao-de-compras">
							
							<figure class="gestao-de-compras-youtube-figure">

								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/play-btn.png" class="gestao-de-compras-btn-show-youtube-icon-play" />
								
								<img src="<?php echo $gestao_de_compras_secao_4_thumb; ?>" class="gestao-de-compras-youtube-img">

							</figure>
							<!-- /.extra-section-2-youtube-figure -->
						
						</a>

					</div>
					<!-- /.col-md-7 col-lg-6 -->

				</div>
				<!-- /.row -->

			</div>
			<!-- /.container -->

		</div>
		<!-- /.gestao-de-compras-secao-4 -->
	<?php endif; ?>

	<?php
		$gestao_de_compras_secao_5_show = get_post_meta( $post_id, 'gestao_de_compras_secao_5_show', true );
		$gestao_de_compras_secao_5_title = get_post_meta( $post_id, 'gestao_de_compras_secao_5_title', true );
		$gestao_de_compras_secao_5_title_bold = get_post_meta( $post_id, 'gestao_de_compras_secao_5_title_bold', true );
		$gestao_de_compras_secao_5_text = get_post_meta( $post_id, 'gestao_de_compras_secao_5_text', true );
		$gestao_de_compras_secao_5_img = get_post_meta( $post_id, 'gestao_de_compras_secao_5_img', true );
		$gestao_de_compras_secao_5_btn_url = get_post_meta( $post_id, 'gestao_de_compras_secao_5_btn_url', true );
		$gestao_de_compras_secao_5_btn_txt = get_post_meta( $post_id, 'gestao_de_compras_secao_5_btn_txt', true );
	?>

	<?php if( $gestao_de_compras_secao_5_show ) : ?>

		<div class="gestao-de-compras-secao-5 p-t-80 p-b-80">

			<div class="container">
				
				<div class="row">

					<div class="col-md-8 col-md-offset-2">
						
						<h2 class="gestao-de-compras-secao-5-title m-b-20">
							<?php echo $gestao_de_compras_secao_5_title_bold; ?>
							<span class="gestao-de-compras-secao-5-text-stroke"><strong><?php echo $gestao_de_compras_secao_5_title; ?></strong></span>
						</h2>

						<h4 class="gestao-de-compras-secao-5-text m-b-40"><?php echo $gestao_de_compras_secao_5_text; ?></h4>

					</div>
					<!-- /.col-md-8 col-md-offset-2 -->

					<div class="col-md-12">

						<img src="<?php echo $gestao_de_compras_secao_5_img; ?>" class="img-responsive center-block">

						<div class="clearfix m-b-60"></div>

						<div class="text-center">
							<a href="<?php echo $gestao_de_compras_secao_5_btn_url; ?>" class="prx-btn prx-btn-reverse prx-btn-verm prx-btn-inline"><?php echo $gestao_de_compras_secao_5_btn_txt; ?></a>
						</div>

					</div>
					<!-- /.col-md-12 -->
					
				</div>
				<!-- /.row -->

			</div>
			<!-- /.container -->

		</div>
		<!-- /.gestao-de-compras-secao-5 -->

	<?php endif; ?>

    <?php
    /**
     * SESSION 7
     */
    $gestao_de_compras_secao_6_show = get_post_meta( $post_id, 'gestao_de_compras_secao_6_show', true );
    $gestao_de_compras_secao_6_title = get_post_meta( $post_id, 'gestao_de_compras_secao_6_title', true );
    $gestao_de_compras_secao_6_slide = get_post_meta( $post_id, 'gestao_de_compras_secao_6_slider_slide', true );
    $gestao_de_compras_secao_6_list = get_post_meta( $post_id, 'gestao_de_compras_secao_6_list_list', true );
    ?>

    <?php if( $gestao_de_compras_secao_6_show ) : ?>
        <div class="gestao-de-oficinas-section-6 prx-vantagens ov-h p-t-80 p-b-80">

            <div class="container">

                <div class="row">

                    <div class="col-md-12 b40-1">

                        <h2 class="section-head prx-vantagens-titulo"><?php echo $utils->nl2p( $gestao_de_compras_secao_6_title ); ?></h2>

                    </div>
                    <!-- /.col-md-12 -->

                    <div class="col-md-5 l40-1">

                        <div class="prx-linha prx-linha-b">

                            <div class="prx-linha prx-linha-r prx-linha-t prx-linha-radius-2 hidden-xs" style="position: absolute;top: 0;left: 100%;height: 160px;width: 60px;"></div>

                            <div class="prx-linha prx-linha-t hidden-xs hidden-sm" style="position: absolute; top: 0; right: 100%; width: 999px; margin-right: 30px;"></div>

                        </div>
                        <!-- /.prx-linha -->

                        <div class="clearfix m-b-60"></div>

                        <div id="front-page-carousel-2" class="carousel prx-carousel prx-vantagens-carousel slide" data-ride="carousel">

                            <div class="carousel-inner">

                                <?php $i = 0; ?>

                                <?php foreach( $gestao_de_compras_secao_6_slide as $slide ) : ?>

                                    <div class="item<?php echo $i > 0 ? '' : ' active' ?> prx-vantagens-carousel-item">

                                        <?php // $utils->debug( $slide ); ?>

                                        <img class="img-responsive center-block prx-vantagens-carousel-item-img" src="<?php echo $slide[ 'gestao_de_compras_secao_6_slider_img' ]; ?>" alt="<?php echo $slide[ 'gestao_de_compras_secao_6_slider_text' ]; ?>" style="width: 100%;">

                                        <div class="prx-carousel-block-txt prx-vantagens-carousel-item-txt"><?php echo $utils->nl2p( $slide[ 'gestao_de_compras_secao_6_slider_text' ] ); ?></div>

                                    </div>
                                    <!-- ./item -->
                                    <?php $i++; ?>

                                <?php endforeach; ?>

                            </div>
                            <!-- /.carousel-inner -->

                            <!-- Indicators -->
                            <ol class="carousel-indicators">

                                <?php $i = 0; ?>

                                <?php foreach( $gestao_de_compras_secao_6_slide as $slide ) : ?>

                                    <li data-target="#front-page-carousel-2" data-slide-to="<?php echo $i; ?>" <?php echo $i > 0 ? '' : 'class="active"' ?>><span class="demi-circle"></span></li>
                                    <?php $i++; ?>

                                <?php endforeach; ?>

                            </ol>
                            <!-- /.carousel-indicators -->

                        </div>
                        <!-- /.carousel -->

                    </div>
                    <!-- /.col-md-5 -->

                    <div class="col-md-6 r40-1">

                        <div class="clearfix p-t-60"></div>

                        <div class="prx-linha prx-linha-t hidden-xs hidden-sm" style="position: absolute;bottom: 0px;left: 100%;width: 999px;margin-left: 20px;height: 0;"></div>

                        <div class="box-list prx-vantagens-lista">

                            <?php foreach( $gestao_de_compras_secao_6_list as $list ) : ?>

                                <div class="box-content prx-vantagens-lista-item">

                                    <div class="content-icon prx-vantagens-lista-icon"><img src="<?php echo $list['gestao_de_compras_secao_6_list_icon']; ?>" alt="<?php echo $list['gestao_de_compras_secao_6_list_title']; ?>"></div>

                                    <div class="text-box prx-vantagens-lista-item-content">

	                                    <h3 class="content-title prx-vantagens-lista-item-content-titulo"><?php echo $list['gestao_de_compras_secao_6_list_title']; ?></h3>

	                                    <div class="content-text prx-vantagens-lista-item-content-txt"><?php echo $list['gestao_de_compras_secao_6_list_text']; ?></div>

                                    </div>
                                    <!-- /.text-box -->

                                </div>
                                <!-- /.box-content -->

                            <?php endforeach; ?>

                            <div class="clearfix p-b-60"></div>

                        </div>
                        <!-- /.box-list -->

                    </div>
                    <!-- /.col-md-6 -->

                </div>
                <!-- /.row -->

            </div>
            <!-- /.container -->
            <div class="clearfix p-b-80"></div>

        </div>
        <!-- /.gestao-de-oficinas-section-6 -->
    <?php endif; ?>

</article><!-- #post-## -->