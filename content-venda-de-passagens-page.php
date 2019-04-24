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
	// $utils->debug( $meta );
	$venda_de_passagens_banner_show = get_post_meta( $post_id, 'venda_de_passagens_banner_show', true );
	$venda_de_passagens_banner_img = get_post_meta( $post_id, 'venda_de_passagens_banner_img', true );
	$venda_de_passagens_banner_linha_1 = get_post_meta( $post_id, 'venda_de_passagens_banner_linha_1', true );
	$venda_de_passagens_banner_linha_2 = get_post_meta( $post_id, 'venda_de_passagens_banner_linha_2', true );
	$venda_de_passagens_banner_linha_3 = get_post_meta( $post_id, 'venda_de_passagens_banner_linha_3', true );
	$venda_de_passagens_banner_text_1 = get_post_meta( $post_id, 'venda_de_passagens_banner_text_1', true );
	$venda_de_passagens_banner_text_2 = get_post_meta( $post_id, 'venda_de_passagens_banner_text_2', true );
	$venda_de_passagens_banner_btn_url = get_post_meta( $post_id, 'venda_de_passagens_banner_btn_url', true );
	$venda_de_passagens_banner_btn_txt = get_post_meta( $post_id, 'venda_de_passagens_banner_btn_txt', true );
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'venda-de-passagens' ); ?>>

	<?php if( $venda_de_passagens_banner_show ) : ?>

		<div class="page-banner venda-de-passagens-banner" style="background-image: url(<?php echo $venda_de_passagens_banner_img; ?>);">


			<div class="container">
				<div class="row">
					
					<div class="clearfix m-t-120 hidden-xs hidden-sm"></div>

					<div class="clearfix m-t-80"></div>
					
					<div class="col-lg-4 col-md-6 col-lg-offset-1">

						<h1 class="venda-de-passagens-banner-line-1"><?php echo wp_kses_decode_entities( $venda_de_passagens_banner_linha_1 ); ?></h1>
						<h3 class="venda-de-passagens-banner-line-2"><?php echo wp_kses_decode_entities( $venda_de_passagens_banner_linha_2 ); ?></h3>
						<div class="clearfix m-b-20"></div>
						<div class="venda-de-passagens-banner-line-3"><?php echo wp_kses_decode_entities( $venda_de_passagens_banner_linha_3 ); ?></div>
						
					</div>
					<!-- /.col-lg-4 -->

					<div class="clearfix m-b-40 visible-xs visible-sm"></div>

					<div class="col-lg-4 col-md-5 col-md-offset-1">

						<div class="prx-linha prx-linha-l prx-linha-radius-4 prx-linha-b hidden-xs" style="position: absolute; top: -10px; right: 100%; width: 40px;">

						</div>
						<!-- /.prx-linha -->

						<h3 class="venda-de-passagens-banner-title"><?php echo $utils->nl2p( $venda_de_passagens_banner_text_1 ); ?></h3>

						<div class="clearfix m-b-40"></div>

						<div class="venda-de-passagens-banner-text list-ul list-ul-arrow-2 list-ul-font-white"><?php echo $utils->nl2p( $venda_de_passagens_banner_text_2 ); ?></div>

						<div class="clearfix m-t-80"></div>

						<a href="<?php echo $venda_de_passagens_banner_btn_url; ?>" class="venda-de-passagens-banner-btn prx-btn prx-btn-inline" style="position: relative;">
							
							<?php echo $venda_de_passagens_banner_btn_txt ?>
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
		$venda_de_passagens_section_1_show = get_post_meta( $post_id, 'venda_de_passagens_section_1_show', true );
		$venda_de_passagens_section_1_title = get_post_meta( $post_id, 'venda_de_passagens_section_1_title', true );
		$venda_de_passagens_section_1_text = get_post_meta( $post_id, 'venda_de_passagens_section_1_text', true );
	?>

	<?php if( $venda_de_passagens_section_1_show ) : ?>

		<div class="venda-de-passagens-section-1">

			<div class="clearfix m-t-80"></div>

				<div class="venda-de-passagens-section-1-box-cinza">
							
					<div class="container">
						<div class="row">
							
							<div class="col-md-6">
								
								<h2 class="venda-de-passagens-section-1-title"><?php echo $venda_de_passagens_section_1_title; ?></h2>

							</div>
							<!-- /.col-md-6 -->

							<div class="col-md-6">
								
								<div class="venda-de-passagens-section-1-text"><?php echo $utils->nl2p( $venda_de_passagens_section_1_text ); ?></div>
								
							</div>
							<!-- /.col-md-6 -->

						</div>
						<!-- /.row -->
					</div>
					<!-- /.container -->

				</div>
				<!-- /.venda-de-passagens-section-1-box-cinza -->

			<div class="clearfix m-b-80"></div>

		</div>
		<!-- /.venda-de-passagens-section-1 -->
	
	<?php endif; ?>

	<?php
		$venda_de_passagens_section_2_show = get_post_meta( $post_id, 'venda_de_passagens_section_2_show', true );
		$venda_de_passagens_section_2_title = get_post_meta( $post_id, 'venda_de_passagens_section_2_title', true );
		$venda_de_passagens_section_2_img = get_post_meta( $post_id, 'venda_de_passagens_section_2_img', true );
		$venda_de_passagens_section_2_text = get_post_meta( $post_id, 'venda_de_passagens_section_2_text', true );
		$venda_de_passagens_section_2_area = get_post_meta( $post_id, 'venda_de_passagens_section_2_item', true );
	?>

	<?php if( $venda_de_passagens_section_2_show ) : ?>

		<div class="venda-de-passagens-section-2">

			<div class="clearfix m-t-40"></div>

			<div class="container">

				<div class="row">

					<div class="col-md-12">
						
						<h2 class="venda-de-passagens-section-2-title text-center"><?php echo $venda_de_passagens_section_2_title; ?></h2>

					</div>
					<!-- /.col-md-12 -->

					<div class="clearfix m-b-40"></div>
			
					<div class="col-md-6">
						
						<div class="venda-de-passagens-section-2-text"><?php echo $utils->nl2p( $venda_de_passagens_section_2_text ); ?></div>
						
						<div class="clearfix m-b-20"></div>

						<img src="<?php echo $venda_de_passagens_section_2_img ?>" class="venda-de-passagens-section-2-img">
			
					</div>
					<!-- /.col-md-6 -->

					<div class="clearfix m-b-40 visible-xs visible-sm"></div>
			
					<div class="col-md-5 col-md-offset-1">

						<div class="venda-de-passagens-processos">
						
							<?php foreach ( $venda_de_passagens_section_2_area as $item ): ?>
								
								<div class="venda-de-passagens-processos-item">

									<h4 class="venda-de-passagens-processos-title">

										<?php echo $item[ 'venda_de_passagens_section_2_title' ]; ?>

									</h4>
									
									<div class="clearfix m-b-10"></div>
									
									<div class="venda-de-passagens-processos-text"><?php echo $utils->nl2p( $item[ 'venda_de_passagens_section_2_text' ] ); ?></div>

								</div>
								<!-- /.venda-de-passagens-processos-item -->

							<?php endforeach ?>

						</div>
						<!-- /.venda-de-passagens-processos -->

					</div>
					<!-- /.col-md-5 -->
			
				</div>
				<!-- /.row -->
			</div>
			<!-- /.container -->

			<div class="clearfix m-b-80"></div>

		</div>
		<!-- /.venda-de-passagens-section-2 -->

	<?php endif; ?>

	<?php
		$venda_de_passagens_cta_show = get_post_meta( $post_id, 'venda_de_passagens_cta_show', true );
		$venda_de_passagens_cta_img = get_post_meta( $post_id, 'venda_de_passagens_cta_img', true );
		$venda_de_passagens_cta_text = get_post_meta( $post_id, 'venda_de_passagens_cta_text', true );
		$venda_de_passagens_cta_btn_txt = get_post_meta( $post_id, 'venda_de_passagens_cta_btn_txt', true );
		$venda_de_passagens_cta_text_url = get_post_meta( $post_id, 'venda_de_passagens_cta_text_url', true );
	?>

	<?php if( $venda_de_passagens_cta_show ) : ?>

		<div class="venda-de-passagens-cta text-center" style="background-image: url(<?php echo $venda_de_passagens_cta_img; ?>);">

			<div class="clearfix p-t-40"></div>
			
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2">
						
						<div class="venda-de-passagens-cta-text"><?php echo $utils->nl2p( $venda_de_passagens_cta_text ); ?></div>

						<div class="clearfix m-b-20"></div>

						<a href="<?php echo $venda_de_passagens_cta_text_url; ?>" class="prx-btn prx-btn-inline venda-de-passagens-cta-btn"><?php echo $venda_de_passagens_cta_btn_txt; ?></a>

					</div>
					<!-- /.col-md-8 -->
				</div>
				<!-- /.row -->
			</div>
			<!-- /.container -->

			<div class="clearfix p-b-40"></div>

		</div>
		<!-- /.venda-de-passagens-cta -->

	<?php endif; ?>

	<?php
	$venda_de_passagens_section_3_show = get_post_meta( $post_id, 'venda_de_passagens_section_3_show', true );
	$venda_de_passagens_section_3_title = get_post_meta( $post_id, 'venda_de_passagens_section_3_title', true );
	$venda_de_passagens_section_3_slide = get_post_meta( $post_id, 'venda_de_passagens_section_3_slide', true );
	$venda_de_passagens_section_3_list = get_post_meta( $post_id, 'venda_de_passagens_section_3_list', true );
	?>

	<?php if( $venda_de_passagens_section_3_show ) : ?>

	    <div class="venda-de-passagens-section-3 ov-h">

	    	<div class="clearfix m-t-80"></div>

	        <div class="container">
	            <div class="row">

	                <div class="col-md-12">
	                    <h2 class="section-head venda-de-passagens-section-3-title"><?php echo $utils->nl2p( $venda_de_passagens_section_3_title ); ?></h2>
	                </div>

	                <div class="col-md-5">

	                    <div class="prx-linha prx-linha-b">

	                        <div class="prx-linha prx-linha-r prx-linha-t prx-linha-radius-2 hidden-xs" style="position: absolute; top: 0; left: 100%; height: 70px; width: 60px;"></div>
	                        <!-- /.prx-linha -->

                        	<div class="prx-linha prx-linha-t hidden-xs hidden-sm" style="position: absolute; top: 0; right: 100%; width: 999px; margin-right: 30px;"></div>

	                    </div>
	                    <!-- /.prx-linha -->

	                    <div class="clearfix m-b-60"></div>

	                    <div id="front-page-carousel-2" class="carousel prx-carousel slide" data-ride="carousel">

	                        <!-- Wrapper for slides -->
	                        <div class="carousel-inner">

	                            <?php $i = 0; ?>
	                            <?php foreach( $venda_de_passagens_section_3_slide as $slide ) : ?>

	                                <div class="item<?php echo $i > 0 ? '' : ' active' ?>">
	                                    <?php // $utils->debug( $slide ); ?>

	                                    <img class="img-responsive center-block venda-de-passagens-section-3-img" src="<?php echo $slide[ 'venda_de_passagens_section_3_img' ]; ?>" alt="<?php echo $slide[ 'venda_de_passagens_section_3_text' ]; ?>" style="width: 100%;">

	                                    <div class="prx-carousel-block-txt venda-de-passagens-section-3-img-text"><?php echo $utils->nl2p( $slide[ 'venda_de_passagens_section_3_text' ] ); ?></div>

	                                </div>
	                                <!-- ./item -->
	                                <?php $i++; ?>
	                            <?php endforeach; ?>

	                        </div>

	                        <!-- Indicators -->
	                        <ol class="carousel-indicators">
	                            <?php $i = 0; ?>
	                            <?php foreach( $venda_de_passagens_section_3_slide as $slide ) : ?>

	                                <li data-target="#front-page-carousel-2" data-slide-to="<?php echo $i; ?>" <?php echo $i > 0 ? '' : 'class="active"' ?>><span class="demi-circle"></span></li>
	                                <?php $i++; ?>

	                            <?php endforeach; ?>
	                        </ol>

	                    </div>
	                </div>
	                <!-- /.col-md-6 -->

	                <div class="col-md-5 col-md-offset-1">

	                    <div class="clearfix p-t-60"></div>

	                    <div class="box-list venda-de-passagens-section-3-box-list" style="position: relative;">

	                    	<div class="prx-linha prx-linha-l visible-lg" style="position: absolute; top: 0; bottom: 35px; right: 100%; width: 70px; height: auto;"></div>
	                    	
	                    	<div class="prx-linha prx-linha-l visible-md" style="position: absolute; top: 0; bottom: 35px; right: 100%; width: 55px; height: auto;"></div>

	                        <?php foreach( $venda_de_passagens_section_3_list as $list ) : ?>

	                            <div class="box-content venda-de-passagens-section-3-box-list-content">

	                                <div class="content-icon venda-de-passagens-section-3-box-list-content-icon-wrapper"><img class="venda-de-passagens-section-3-box-list-content-icon-wrapper-img" src="<?php echo $list['venda_de_passagens_section_3_icon']; ?>" alt="<?php echo $list['venda_de_passagens_section_3_title']; ?>"></div>

	                                <div class="text-box venda-de-passagens-section-3-box-list-content-text-box">

		                                <h3 class="content-title venda-de-passagens-section-3-box-list-content-text-box-title"><?php echo $list['venda_de_passagens_section_3_title']; ?></h3>

		                                <div class="prx-linha prx-linha-t visible-xs visible-sm p-b-10"></div>

		                                <div class="content-text venda-de-passagens-section-3-box-list-content-text-box-text"><?php echo $list['venda_de_passagens_section_3_text']; ?></div>

	                                </div>
	                                <!-- ./venda-de-passagens-section-3-box-list-content-text-box -->

	                            </div>
	                            <!-- /.venda-de-passagens-section-3-box-list-content -->

	                            <div class="clearfix m-b-20 visible-xs visible-sm"></div>

	                        <?php endforeach; ?>
	                    
	                        <div class="prx-linha prx-linha-b " style="width: 100%; height: 40px;">

	                        	<div class="prx-linha prx-linha-l prx-linha-b prx-linha-radius-4 visible-lg" style="position: absolute; top: 2px; bottom: 0; left: 0; margin-left: -70px;"></div>

	                        	<div class="prx-linha prx-linha-l prx-linha-b prx-linha-radius-4 visible-md" style="position: absolute; top: 2px; bottom: 0; left: 0; margin-left: -55px;"></div>

	                        	<div class="prx-linha prx-linha-t hidden-xs hidden-sm" style="position: absolute; bottom: -2px; left: 100%; width: 999px; margin-left: 30px; height: 0;"></div>

	                        </div>
	                        <!-- /.prx-linha -->
	                    
	                    </div>
	                    <!-- /.venda-de-passagens-section-3-box-list -->

	                </div>
	                <!-- /.col-md-5 -->

	            </div>
	            <!-- /.row -->
	        </div>
	        <!-- /.container -->
	        <div class="clearfix p-b-80"></div>
	    </div>

	<?php endif; ?>

	<?php
		$venda_de_passagens_section_4_show = get_post_meta( $post_id, 'venda_de_passagens_section_4_show', true );
		$venda_de_passagens_section_4_title_1 = get_post_meta( $post_id, 'venda_de_passagens_section_4_title_1', true );
		$venda_de_passagens_section_4_text = get_post_meta( $post_id, 'venda_de_passagens_section_4_text', true );
		$venda_de_passagens_section_4_img = get_post_meta( $post_id, 'venda_de_passagens_section_4_img', true );
		$venda_de_passagens_section_4_title_2 = get_post_meta( $post_id, 'venda_de_passagens_section_4_title_2', true );
	?>

	<?php if( $venda_de_passagens_section_3_show ) : ?>

		<div class="venda-de-passagens-section-4">

			<div class="clearfix m-t-40"></div>
			
			<div class="container">
				<div class="row">
					
					<div class="col-md-12">
						
						<h2 class="venda-de-passagens-section-4-titulo-1 text-center"><?php echo $venda_de_passagens_section_4_title_1 ?></h2>

					</div>
					<!-- /.col-md-12 -->

					<div class="clearfix m-b-40"></div>

					<div class="col-md-6">
						
						<div class="venda-de-passagens-section-4-text"><?php echo $utils->nl2p( $venda_de_passagens_section_4_text ); ?></div>

					</div>
					<!-- /.col-md-6 -->

					<div class="clearfix m-b-40 visible-xs visible-sm"></div>

					<div class="col-md-5 col-lg-4 col-md-offset-1">
						
						<img src="<?php echo $venda_de_passagens_section_4_img; ?>" class="venda-de-passagens-section-4-img">

					</div>
					<!-- /.col-md-5 -->
					
					<div class="clearfix m-b-80"></div>

					<div class="col-md-12">
						
						<h2 class="venda-de-passagens-section-4-titulo-2 text-center"><?php echo $venda_de_passagens_section_4_title_2 ?></h2>

					</div>
					<!-- /.col-md-12 -->


				</div>
				<!-- /.row -->
			</div>
			<!-- /.container -->

			<div class="clearfix m-b-80"></div>

		</div>
		<!-- /.venda-de-passagens-section-4 -->

	<?php endif; ?>

</article><!-- #post-## -->