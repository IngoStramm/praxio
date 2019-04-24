<?php
/**
 * The template used for displaying frontpage content.
 *
 * @package Odin
 * @since 2.2.0
 */
?>

<?php
	$utils = new Utils;
	$post_id = get_the_ID();
	$meta = get_post_meta( $post_id, '', true );
	$show_banner = get_post_meta( $post_id, 'front_page_banner_show', true );
	$front_page_banner_slide = get_post_meta( $post_id, 'front_page_banner_slide', true );
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php if( $show_banner ) : ?>

		<div class="front-page-banner header-banner">
			
			<div id="front-page-banner" class="carousel carousel-normalize slide" data-ride="carousel">
				<!-- Indicators -->
				<ol class="carousel-indicators">
					<?php $i = 0; ?>
					<?php foreach( $front_page_banner_slide as $slide ) : ?>

						<li data-target="#front-page-banner" data-slide-to="<?php echo $i; ?>" <?php echo $i > 0 ? '' : 'class="active"' ?>><span class="demi-circle"></span></li>
						<?php $i++; ?>
					
					<?php endforeach; ?>
				</ol>

				<!-- Wrapper for slides -->
				<div class="carousel-inner">
					<?php $i = 0; ?>
					<?php foreach( $front_page_banner_slide as $slide ) : ?>
						<?php //$utils->debug( $slide ); ?>
						<div class="item<?php echo $i > 0 ? '' : ' active' ?>" style="background-image: url(<?php echo $slide[ 'front_page_banner_slide_img' ]; ?>);">

							<div class="container">
								<div class="row">

									<div class="row-height">
									
										<div class="col-md-4 col-xs-height col-xs-middle">

											<div class="inside"></div>
											
											<?php
												$front_page_banner_slide_txt_linha_1 = $slide[ 'front_page_banner_slide_txt_linha_1' ];
												$front_page_banner_slide_txt_linha_2 = $slide[ 'front_page_banner_slide_txt_linha_2' ];
												$front_page_banner_slide_btn_text = $slide[ 'front_page_banner_slide_btn_text' ];
												$front_page_banner_slide_btn_url = $slide[ 'front_page_banner_slide_btn_url' ];
											?>

											<h3><?php echo $front_page_banner_slide_txt_linha_1; ?></h3>
											<h2><?php echo $front_page_banner_slide_txt_linha_2; ?></h2>
											<div class="clearfix m-b-20"></div>
											<?php if( $front_page_banner_slide_btn_url && $front_page_banner_slide_btn_text ) : ?>
												<a href="<?php echo $front_page_banner_slide_btn_url; ?>" class="prx-btn"><?php echo $front_page_banner_slide_btn_text; ?></a>
											<?php endif; ?>

										</div>
										<!-- /.col-md-4 -->

										<div class="col-md-1 hidden-xs hidden-sm"></div>

										<div class="col-md-7 col-xs-height col-xs-middle">

											<div class="inside"></div>

											<div class="prx-linha prx-linha-l prx-linha-b prx-linha-radius-4"></div>
											
										</div>
										<!-- /.col-md-7 -->

										</div>
										<!-- /.row-height -->
									
									<div class="clearfix m-b-80"></div>

								</div>
								<!-- /.row -->
							</div>
							<!-- /.container -->

						</div>
						<!-- ./item -->
						<?php $i++; ?>
					<?php endforeach; ?>

				</div>

			</div>

			<div class="container">
				<div class="row">
					
					<div class="col-md-5">
						
					</div>
					<!-- /.col-md-5 -->

					<div class="col-md-7">
						
					</div>
					<!-- /.col-md-7 -->
				</div>
				<!-- /.row -->
			</div>
			<!-- /.container -->
		</div>
		<!-- /.front-page-banner -->

	<?php endif; ?>

	<?php
		$show_section_1 = get_post_meta( $post_id, 'front_page_section_1_show', true );
		$front_page_section_1_title = get_post_meta( $post_id, 'front_page_section_1_title', true );
		$front_page_section_1_text = get_post_meta( $post_id, 'front_page_section_1_text', true );
		$front_page_section_1_img = get_post_meta( $post_id, 'front_page_section_1_img', true );
		$front_page_section_1_img_title = get_post_meta( $post_id, 'front_page_section_1_img_title', true );
		$front_page_section_1_img_text = get_post_meta( $post_id, 'front_page_section_1_img_text', true );
		$front_page_section_1_btn_1_txt = get_post_meta( $post_id, 'front_page_section_1_btn_1_txt', true );
		$front_page_section_1_btn_1_url = get_post_meta( $post_id, 'front_page_section_1_btn_1_url', true );
		$front_page_section_1_btn_2_txt = get_post_meta( $post_id, 'front_page_section_1_btn_2_txt', true );
		$front_page_section_1_btn_2_url = get_post_meta( $post_id, 'front_page_section_1_btn_2_url', true );
	?>

	<?php if( $show_section_1 ) : ?>
		<div class="section-1 section">
			<div class="clearfix m-b-80"></div>		

			<div class="container">
				<div class="row">
					
					<div class="col-md-6">
						<h2 class="section-title"><?php echo wp_kses_decode_entities( $front_page_section_1_title ); ?></h2>
						<div class="clearfix m-t-40"></div>
						<div class="prx-linha prx-linha-b">
							<div class="prx-linha prx-linha-l prx-linha-t prx-linha-radius-1 hidden-xs" style="position: absolute; top: 0; right: 100%; height: 160px; width: 60px;"></div>
						</div>
						<div class="clearfix m-b-40"></div>
						<div class="section-text"><?php echo $utils->nl2p( $front_page_section_1_text ); ?></div>
						<div class="prx-linha prx-linha-l hidden-xs hidden-sm" style="position: absolute; bottom: -140px; left: -45px; height: 165px; width: 0;"></div>
					</div>
					<!-- /.col-md-6 -->

					<div class="clearfix m-b-40 visible-xs visible-sm"></div>

					<div class="col-md-5 col-md-offset-1">
						<div class="prx-img" style="background-image: url(<?php echo $front_page_section_1_img ?>);">
							<?php /* ?><img src="<?php echo $front_page_section_1_img ?>" class="prx-img-bg"><?php */ ?>
							<div class="prx-img-txt">
								<div class="clearfix m-t-150"></div>
								<h3 class="prx-img-title"><?php echo $front_page_section_1_img_title; ?></h3>
								<div class="prx-img-text"><?php echo $utils->nl2p( $front_page_section_1_img_text ); ?></div>
								<div class="clearfix m-b-20"></div>
								<div class="row">
									<div class="col-md-6">
										<a href="<?php echo $front_page_section_1_btn_1_url; ?>" class="prx-btn"><?php echo $front_page_section_1_btn_1_txt; ?></a>
									</div>

									<div class="clearfix m-b-20 visible-xs visible-sm"></div>
									<!-- /.col-md-6 -->
									<div class="col-md-6">
										<a href="<?php echo $front_page_section_1_btn_2_url; ?>" class="prx-btn"><?php echo $front_page_section_1_btn_2_txt; ?></a>
									</div>
									<!-- /.col-md-6 -->
								</div>
								<!-- /.row -->
							</div>
							<!-- /.prx-img-txt -->
						</div>
						<!-- /.prx-img -->
					</div>
					<!-- /.col-md-5 -->
				</div>
				<!-- /.row -->
			</div>
			<!-- /.container -->

		</div>
		<!-- /.section-1 section -->
	<?php endif; ?>

	<div class="clearfix m-t-120"></div>

	<?php
		$show_section_2 = get_post_meta( $post_id, 'front_page_section_2_show', true );
		$front_page_section_2_text_1_linha_1 = get_post_meta( $post_id, 'front_page_section_2_text_1_linha_1', true );
		$front_page_section_2_text_1_linha_2 = get_post_meta( $post_id, 'front_page_section_2_text_1_linha_2', true );
		$front_page_section_2_text_2_linha_1 = get_post_meta( $post_id, 'front_page_section_2_text_2_linha_1', true );
		$front_page_section_2_text_2_linha_2 = get_post_meta( $post_id, 'front_page_section_2_text_2_linha_2', true );
		$front_page_section_2_tabs_slide = get_post_meta( $post_id, 'front_page_section_2_tabs_slide', true );
	?>

	<?php if( $show_section_2 ) : ?>
		<div class="section-2 section">

			<div class="block block-cinza" style="overflow: hidden;">

				<div class="clearfix visible-xs visible-sm m-t-80"></div>
				
				<div class="container">
					<div class="row">

						<div class="row-height">

							<div class="col-md-5 col-md-height col-md-middle">

								<div class="prx-linha prx-linha-l" style="position: absolute; top: -250px; height: 1000px; left: -45px;"></div>

								<div class="row">
									<div class="col-md-8 col-md-offset-2 text-center">

										<h4 class="section-subtitle"><?php echo $front_page_section_2_text_1_linha_1; ?></h4>
										<h3 class="section-subtitle-stroked"><?php echo $front_page_section_2_text_1_linha_2; ?></h3>
										
									</div>
									<!-- /.col-md-8 col-md-offset-2 -->
								</div>
								<!-- /.row -->
								
							</div>
							<!-- /.col-md-5 -->

							<div class="clearfix visible-xs visible-sm m-t-20"></div>

							<div class="col-md-7 col-md-height col-md-middle">

								<div class="prx-tabs">												

									<ul class="nav nav-tabs">
										<?php $i = 0; ?>
										<?php foreach( $front_page_section_2_tabs_slide as $tab ) : ?>

											<li<?php echo $i == 0 ? ' class="active"' : '' ?>>

												<a data-toggle="tab" href="#menu-<?php echo $i + 1; ?>">

													<div class="clearfix m-t-30"></div>

													<figure class="prx-tabs-figure">
														<img src="<?php echo $tab[ 'front_page_section_2_tabs_icon_tab' ]; ?>" class="prx-tabs-icon">
													</figure>
													<!-- /.prx-tabs-figure -->
													<div class="prx-nav-tabs-title"><?php echo $tab[ 'front_page_section_2_tabs_title_tab' ]; ?></div>

													<div class="clearfix m-t-30"></div>

												</a>

											</li>

											<?php // $utils->debug( $tab ); ?>

											<?php $i++; ?>

										<?php endforeach; ?>
									</ul>
								
								</div>
								<!-- /.prx-tabs -->

							</div>
							<!-- /.col-md-7 -->
						
						</div>
						<!-- /.row-height -->

					</div>
					<!-- /.row -->
				</div>
				<!-- /.container -->

				<div class="clearfix visible-xs visible-sm m-b-80"></div>

			</div>
			<!-- /.block block-cinza -->

			<div class="container">
				<div class="row">

					<div class="row-height">
					
						<div class="col-md-4 col-md-height col-md-middle col-md-push-6">

							<div class="cleafix m-t-80"></div>

							<div class="prx-tabs">
							
								<div class="tab-content">

									<?php $i = 0; ?>
									<?php foreach( $front_page_section_2_tabs_slide as $tab ) : ?>

										<div id="menu-<?php echo $i + 1; ?>" class="tab-pane fade in<?php echo $i == 0 ? ' active' : '' ?>">
											<?php echo $utils->nl2p( $tab[ 'front_page_section_2_tabs_text_tab' ] ); ?>
										</div>
										<!-- ./tab-pane -->

										<?php $i++; ?>

									<?php endforeach; ?>

								</div>
								<!-- /.tab-content -->

							</div>
							<!-- ./prx-tabs -->

							<div class="cleafix m-b-80"></div>

						</div>
						<!-- /.col-md-4 -->

						<div class="col-md-5 col-md-height col-md-middle col-md-pull-7 text-center">

							<div class="cleafix m-t-80"></div>

							<h2 class="section-title section-title-red"><?php echo $front_page_section_2_text_2_linha_1; ?></h2>
							<h3 class="section-text section-text-red"><strong><?php echo $front_page_section_2_text_2_linha_2; ?></strong></h3>

							<div class="cleafix m-b-80"></div>
							
						</div>
						<!-- /.col-md-4 col-md-pull-7 -->

					<!-- ./row-height -->

				</div>
				<!-- /.row -->
			</div>
			<!-- /.container -->
			
		</div>
		<!-- /.section-2 section -->
	<?php endif; ?>

	<?php
		$show_section_3 = get_post_meta( $post_id, 'front_page_section_3_show', true );
		$front_page_section_3_img = get_post_meta( $post_id, 'front_page_section_3_img', true );
		$front_page_section_3_title = get_post_meta( $post_id, 'front_page_section_3_title', true );
		$front_page_section_3_text = get_post_meta( $post_id, 'front_page_section_3_text', true );
		$front_page_section_3_btn_txt = get_post_meta( $post_id, 'front_page_section_3_btn_txt', true );
		$front_page_section_3_btn_url = get_post_meta( $post_id, 'front_page_section_3_btn_url', true );
	?>

	<?php if( $show_section_3 ) : ?>
		<div class="section-3 section">
			
			<div class="container">
				<div class="row">

					<div class="col-md-12">
						
						<div class="section-3-banner text-center" style="background-image: url(<?php echo $front_page_section_3_img; ?>);">

							<div class="row">
								
								<div class="col-md-6 col-md-offset-6">

									<h2 class="section-3-title"><?php echo $front_page_section_3_title; ?></h2>
									<div class="clearfix m-b-20"></div>
									<div class="section-3-text"><?php echo $utils->nl2p( $front_page_section_3_text ); ?></div>
									<div class="clearfix m-b-20"></div>
									<a href="<?php echo $front_page_section_3_btn_url; ?>" class="prx-btn prx-btn-inline"><?php echo $front_page_section_3_btn_txt; ?></a>
									
								</div>
								<!-- /.col-md-6 col-md-ofsset-6 -->
							</div>
							<!-- /.row -->
							
						</div>
						<!-- /.section-3-banner -->

					</div>
					<!-- /.col-md-12 -->
					
				</div>
				<!-- /.row -->
			</div>
			<!-- /.container -->

		</div>
		<!-- /.section-3 section -->
	<?php endif; ?>

	<div class="clearfix m-t-140"></div>

	<?php
		$show_section_4 = get_post_meta( $post_id, 'front_page_section_4_show', true );
		$front_page_section_4_title = get_post_meta( $post_id, 'front_page_section_4_title', true );
		$front_page_section_4_text_1_linha_2 = get_post_meta( $post_id, 'front_page_section_4_text_1_linha_2', true );
		$front_page_section_4_tabs_slide = get_post_meta( $post_id, 'front_page_section_4_tabs_slide', true );
	?>

	<?php if( $show_section_4 ) : ?>
		<div class="section-4 section">
			
			<div class="container">
				<div class="row">

					<div class="col-md-6">
						<h2 class="section-title"><?php echo $utils->nl2p( $front_page_section_4_title ); ?></h2>
						<div class="clearfix m-b-40"></div>
						<div class="section-text"><?php echo $utils->nl2p( $front_page_section_4_text_1_linha_2 ); ?></div>
					</div>
					<!-- /.col-md-6 -->

					<div class="clearfix m-b-40 visible-xs visible-sm"></div>
					<div class="col-md-5 col-md-offset-1">
						
						<div id="front-page-carousel-2" class="carousel prx-carousel slide" data-ride="carousel">

							<!-- Wrapper for slides -->
							<div class="carousel-inner">

								<?php $i = 0; ?>
								<?php foreach( $front_page_section_4_tabs_slide as $slide ) : ?>

									<div class="item<?php echo $i > 0 ? '' : ' active' ?>">
										<?php // $utils->debug( $slide ); ?>

										<img class="img-responsive center-block" src="<?php echo $slide[ 'front_page_section_4_tabs_img' ]; ?>" alt="<?php echo $slide[ 'front_page_section_4_tabs_text' ]; ?>" style="width: 100%;">

										<div class="prx-carousel-block-txt"><?php echo $utils->nl2p( $slide[ 'front_page_section_4_tabs_text' ] ); ?></div>

									</div>
									<!-- ./item -->
									<?php $i++; ?>
								<?php endforeach; ?>

							</div>

							<!-- Indicators --> 
							<ol class="carousel-indicators">
								<?php $i = 0; ?>
								<?php foreach( $front_page_section_4_tabs_slide as $slide ) : ?>

									<li data-target="#front-page-carousel-2" data-slide-to="<?php echo $i; ?>" <?php echo $i > 0 ? '' : 'class="active"' ?>><span class="demi-circle"></span></li>
									<?php $i++; ?>
								
								<?php endforeach; ?>
							</ol>

						</div>

					</div>
					<!-- /.col-md-5 col-md-offset-1 -->
					
				</div>
				<!-- /.row -->
			</div>
			<!-- /.container -->

		</div>
		<!-- /.section-4 section -->
	<?php endif; ?>

	<div class="clearfix m-b-80"></div>

	<?php
		$show_section_5 = get_post_meta( $post_id, 'front_page_section_5_show', true );
		$front_page_section_5_title = get_post_meta( $post_id, 'front_page_section_5_title', true );
		$front_page_section_5_call = get_post_meta( $post_id, 'front_page_section_5_call', true );
		$front_page_section_5_text = get_post_meta( $post_id, 'front_page_section_5_text', true );
		$front_page_section_5_img = get_post_meta( $post_id, 'front_page_section_5_img', true );
		$front_page_section_5_img_text = get_post_meta( $post_id, 'front_page_section_5_img_text', true );
		$front_page_section_5_img_btn_txt = get_post_meta( $post_id, 'front_page_section_5_img_btn_txt', true );
		$front_page_section_5_img_btn_url = get_post_meta( $post_id, 'front_page_section_5_img_btn_url', true );	
	?>

	<?php if( $show_section_5 ) : ?>
		<div class="section-5 section">

			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center">
						<h1 class="section-title section-5-title"><?php echo $front_page_section_5_title; ?></h1>
					</div>
					<!-- /.col-md-12 -->
				</div>
				<!-- /.row -->			
			</div>
			<!-- /.container -->
			
			<div class="block block-cinza section-5-block">

				<div class="container">

					<div class="row">
						<div class="col-md-5">
							<h3 class="section-call section-5-call"><?php echo $utils->nl2p( $front_page_section_5_call ); ?></h3>
						</div>
						<!-- /.col-md-5 -->
						<div class="clearfix m-b-20 visible-xs visible-sm"></div>
						<div class="col-md-6 col-md-offset-1">
							<div class="section-txt section-5-txt"><?php echo $utils->nl2p( $front_page_section_5_text ); ?></div>
						</div>
						<!-- /.col-md-6 -->
					</div>
					<!-- /.row -->
				</div>
				<!-- /.container -->
				

			</div>
			<!-- /.block block-cinza -->

			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="section-5-banner" style="background-image: url(<?php echo $front_page_section_5_img; ?>);">

							<div class="row">
								<div class="col-md-5 div col-md-offset-1 text-center">
									<div class="section-5-banner-txt"><?php echo $utils->nl2p( $front_page_section_5_img_text ); ?></div>
									<div class="clearfix m-b-40"></div>
									<a href="<?php echo $front_page_section_5_img_btn_url; ?>" class="prx-btn prx-btn-inline"><?php echo $front_page_section_5_img_btn_txt; ?></a>
								</div>
								<!-- /.col-md-5 div col-md-offset-1 -->
							</div>
							<!-- /.row -->
							
						</div>
						<!-- /.section-5-banner -->
					</div>
					<!-- /.col-md-12 -->
				</div>
				<!-- /.row -->
			</div>
			<!-- /.container -->

		</div>
		<!-- /.section-5 section -->
	<?php endif; ?>

</article><!-- #post-## -->
