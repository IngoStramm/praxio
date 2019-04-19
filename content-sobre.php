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
					
					<div class="col-md-5 col-md-offset-1">
						
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
					<!-- /.col-md-5 -->

					<div class="clearfix m-b-40 visible-xs visible-sm"></div>

					<div class="col-md-5">
						
						<img src="<?php echo $sobre_section_1_img; ?>" alt="<?php echo $sobre_section_1_img_title; ?>" class="img-responsive center-block w-100p-i">

						<div class="block block-cinza sobre-section-1-block">
							<h3 class="sobre-section-1-img-title"><?php echo $sobre_section_1_img_title; ?></h3>
							<div class="clearfix m-b-20"></div>
							<div class="sobre-section-1-img-text"><?php echo $utils->nl2p( $sobre_section_1_img_text ); ?></div>
						</div>
						<!-- /.sobre-section-1-cinza block block-cinza -->

					</div>
					<!-- /.col-md-5 -->

				</div>
				<!-- /.row -->

				<div class="clearfix m-b-80"></div>
				
			</div>
			<!-- /.sobre-section-1 -->

		<?php endif; ?>

	<?php
		$sobre_section_2_show = get_post_meta( $post_id, 'sobre_section_2_show', true );
		$sobre_section_2_title = get_post_meta( $post_id, 'sobre_section_2_title', true );
		$sobre_section_2_area = get_post_meta( $post_id, 'sobre_section_2_area', true );
		$sobre_section_2_text = get_post_meta( $post_id, 'sobre_section_2_text', true );
		$sobre_section_2_img = get_post_meta( $post_id, 'sobre_section_2_img', true );
		$sobre_section_2_img_title = get_post_meta( $post_id, 'sobre_section_2_img_title', true );
		$sobre_section_2_img_text = get_post_meta( $post_id, 'sobre_section_2_img_text', true );
	?>
		<?php if( $sobre_section_2_show ) : ?>

			<div class="sobre-section-2">

				<div class="row">

					<div class="col-md-12">
						<h2 class="sobre-section-2-title text-center"><?php echo $sobre_section_2_title; ?></h2>
					</div>
					<!-- /.col-md-12 -->
					
				</div>
				<!-- /.row -->

				<div class="clearfix m-b-40"></div>

				<?php foreach ( $sobre_section_2_area as $marca ) : ?>

					<?php
						$marca_img = $marca[ 'sobre_section_2_img' ];
						$marca_text = $marca[ 'sobre_section_2_text' ];
						$marca_url = $marca[ 'sobre_section_2_url' ];
					?>

					<div class="sobre-section-2-marca">

						<div class="row">
						
							<div class="col-lg-3 col-md-4 col-sm-5">
								<figura class="sobre-section-2-marca-figure">
									<img class="sobre-section-2-marca-figure-img" src="<?php echo $marca_img; ?>">
								</figura>

								<div class="prx-linha prx-linha-b visible-xs m-t-20"></div>
							</div>
							<!-- /.col-lg-3 col-md-4 col-sm-5 -->

							<div class="clearfix m-b-20 visible-xs"></div>
						
							<div class="col-lg-9 col-md-8 col-sm-7">
								<div class="sobre-section-2-marca-text">
									
									<div class="prx-linha prx-linha-l hidden-xs" style="position: absolute; top: 0; right: 100%; width: 20px;"></div>

									<?php echo $utils->nl2p( $marca_text ); ?>
								</div>
								<!-- /.sobre-section-2-marca-text -->

								<div class="clearfix m-b-20"></div>

								<a href="http://<?php echo $marca_url; ?>" target="_blank" class="sobre-section-2-marca-url">
									<?php echo $marca_url; ?>
								</a>
							</div>
							<!-- /.col-lg-9 col-md-8 col-sm-7 -->
							
						
						</div>
						<!-- /.row -->

					</div>
					<!-- /.sobre-section-2-marca -->

					<div class="clearfix m-b-80"></div>

				<?php endforeach; ?>

			</div>
			<!-- /.sobre-section-2 -->

		<?php endif; ?>

		<?php
			$sobre_section_3_show = get_post_meta( $post_id, 'sobre_section_3_show', true );
			$sobre_section_3_linha_1 = get_post_meta( $post_id, 'sobre_section_3_linha_1', true );
			$sobre_section_3_linha_2 = get_post_meta( $post_id, 'sobre_section_3_linha_2', true );
			$sobre_section_3_uf = get_post_meta( $post_id, 'sobre_section_3_uf', true );
			$sobre_section_3_img = get_post_meta( $post_id, 'sobre_section_3_img', true );
		?>

		<?php if( $sobre_section_3_show ) : ?>

			<div class="sobre-section-3">

				<div class="clearfix m-t-80"></div>

				<div class="row">

					<div class="col-sm-4 col-lg-5">

						<h4 class="sobre-section-3-linha-1"><?php echo $sobre_section_3_linha_1; ?></h4>
						<h2 class="sobre-section-3-linha-2"><?php echo $sobre_section_3_linha_2; ?></h2>

						<div class="clearfix m-b-40"></div>

						<ul class="sobre-section-3-ufs">

						<?php foreach ( $sobre_section_3_uf as $uf ) : ?>

							<li><span><?php echo $uf; ?></span></li>
							
						<?php endforeach ?>
						
						</ul>
						<!-- /.sobre-section-3-ufs -->

					</div>
					<!-- /.col-sm-4 -->

					<div class="clearfix m-b-40 visible-xs"></div>

					<div class="col-sm-6 col-lg-7">

						<img src="<?php echo $sobre_section_3_img; ?>" class="sobre-section-3-img img-responsive center-block">
						
					</div>
					<!-- /.col-sm-6 -->

				</div>
				<!-- /.row -->

			<div class="clearfix m-b-80"></div>

			</div>
			<!-- /.sobre-section-3 -->


		<?php endif; ?>
			
	</div>
	<!-- /.container -->

	<?php
		$sobre_section_4_show = get_post_meta( $post_id, 'sobre_section_4_show', true );
		$sobre_section_4_img = get_post_meta( $post_id, 'sobre_section_4_img', true );
		$sobre_section_4_title = get_post_meta( $post_id, 'sobre_section_4_title', true );
		$sobre_section_4_text = get_post_meta( $post_id, 'sobre_section_4_text', true );
		$sobre_section_4_ano = get_post_meta( $post_id, 'sobre_section_4_ano', true );
		$sobre_section_4_linha_1 = get_post_meta( $post_id, 'sobre_section_4_linha_1', true );
		$sobre_section_4_linha_2 = get_post_meta( $post_id, 'sobre_section_4_linha_2', true );
		$sobre_section_4_profissionais = get_post_meta( $post_id, 'sobre_section_4_profissionais', true );
	?>	

	<?php if( $sobre_section_4_show ) : ?>

		<div class="sobre-section-4" style="background-image: url(<?php echo $sobre_section_4_img; ?>);">

			<div class="clearfix p-t-80"></div>
			
			<div class="container">

				<div class="row">

					<div class="col-md-12">

						<h1 class="sobre-section-4-title text-center"><?php echo $sobre_section_4_title; ?></h1>

						<div class="clearfix m-b-40"></div>

						<div class="sobre-section-4-text"><?php echo $utils->nl2p( $sobre_section_4_text ); ?></div>
						
					</div>
					<!-- /.col-md-12 -->

				</div>
				<!-- /.row -->

				<div class="clearfix m-b-40"></div>

				<div class="row">

					<div class="col-md-12">
						
						<div class="sobre-section-4-anos">
							
							<?php foreach ( $sobre_section_4_ano as $ano ) : ?>

								<?php //$utils->debug( $ano ); ?>

								<ul class="sobre-section-4-anos-item">
									
									<li class="sobre-section-4-anos-item-1"><?php echo $ano[ 'sobre_section_4_ano' ]; ?></li>

									<li class="sobre-section-4-anos-item-2">R$ <?php echo $ano[ 'sobre_section_4_real' ]; ?> <?php pll_e( 'Mi' ); ?></li>

									<li class="sobre-section-4-anos-item-3"><?php echo $ano[ 'sobre_section_4_funcionarios' ]; ?> <?php pll_e( 'Funcionários' ); ?></li>

									<li class="sobre-section-4-anos-item-4"><?php echo $ano[ 'sobre_section_4_contratos' ]; ?> <?php pll_e( 'Contratos' ); ?></li>

								</ul>
								<!-- /.sobre-section-4-anos-item -->

							<?php endforeach; ?>

						</div>
						<!-- /.sobre-section-4-anos -->

					</div>
					<!-- /.col-md-12 -->

				</div>
				<!-- /.row -->

				<div class="clearfix m-b-40 hidden-xs"></div>

				<div class="row">
					
					<div class="col-md-6">
						
						<h1 class="sobre-section-4-linha-1"><?php echo $sobre_section_4_linha_1; ?></h1>

						<h3 class="sobre-section-4-linha-2"><?php echo $sobre_section_4_linha_2; ?></h3>

					</div>
					<!-- /.col-md-6 -->

					<div class="clearfix m-b-40 visible-xs visible-sm"></div>

					<div class="col-md-6">
						
						<div class="sobre-section-4-profissionais">
							
							<?php foreach ( $sobre_section_4_profissionais as $profissional ) : ?>

								<div class="sobre-section-4-profissionais-item">

									<div class="sobre-section-4-profissionais-item-qtd" style="order: 1">
										<span><?php echo $profissional[ 'sobre_section_4_ano' ]; ?></span>
										<span class="sobre-section-4-profissionais-item-qtd-title"><?php pll_e( 'Profissionais' ); ?></span>
									</div>
									<!-- /.sobre-section-4-profissionais-item-qtd -->

									<div class="clearfix m-b-20 visible-xs"></div>

									<div class="sobre-section-4-profissionais-item-text" style="order: 2">

										<div class="prx-linha prx-linha-b m-b-20 visible-xs"></div>

										<?php echo pll_e( $profissional[ 'sobre_section_4_text' ] ); ?>
										
										<div class="clearfix m-b-10"></div>
									
										<div class="prx-linha prx-linha-l prx-linha-b prx-linha-radius-4 hidden-xs" style="width: 20px; position: absolute; bottom: 0; right: 100%;"></div>
										
										<div class="prx-linha prx-linha-b hidden-xs" style="position: absolute; bottom: 0; right: 0; left: 0;"></div>
										
									</div>

								</div>
								<!-- /.sobre-section-4-profissionais-item -->

								<div class="clearfix m-b-40 visible-xs"></div>

							<?php endforeach; ?>

						</div>
						<!-- /.sobre-section-4-profissionais -->

					</div>
					<!-- /.col-md-6 -->

				</div>
				<!-- /.row -->

			</div>
			<!-- /.container -->

			<div class="p-b-80"></div>

		</div>
		<!-- /.sobre-section-4 -->

	<?php endif; ?>

	<?php
		$sobre_section_5_show = get_post_meta( $post_id, 'sobre_section_5_show', true );
		$sobre_section_5_text = get_post_meta( $post_id, 'sobre_section_5_text', true );
		$sobre_section_5_linha_1 = get_post_meta( $post_id, 'sobre_section_5_linha_1', true );
		$sobre_section_5_linha_2 = get_post_meta( $post_id, 'sobre_section_5_linha_2', true );
	?>	

	<?php if( $sobre_section_5_show ) : ?>

		<div class="sobre-section-5">
			
			<div class="clearfix m-t-80"></div>

			<div class="container">

				<div class="row">
					
					<div class="col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2">

						<h1 class="sobre-section-5-linha-1 text-center">
							<?php echo $sobre_section_5_linha_1; ?>
							<span class="sobre-section-5-linha-2"><?php echo $sobre_section_5_linha_2; ?></span>
							<div class="clearfix p-b-20"></div>
						</h1>
						<!-- /.sobre-section-5-linha-1 -->
						
					</div>
					<!-- /.col-md-10 -->

					<div class="clearfix m-b-40"></div>

					<div class="col-md-4 col-md-offset-6">

						<div class="sobre-section-5-text"><?php echo $utils->nl2p( $sobre_section_5_text ); ?></div>
						
					</div>
					<!-- /.col-md-4 col-md-offset-6 -->
				
				</div>
				<!-- /.row -->

			</div>
			<!-- /.container -->

			<div class="clearfix m-b-80"></div>

		</div>
		<!-- /.sobre-section-5 -->

	<?php endif; ?>

	<?php
		$sobre_section_6_show = get_post_meta( $post_id, 'sobre_section_6_show', true );
		$sobre_section_6_img = get_post_meta( $post_id, 'sobre_section_6_img', true );
		$sobre_section_6_aba = get_post_meta( $post_id, 'sobre_section_6_aba', true );
		$sobre_section_6_text = get_post_meta( $post_id, 'sobre_section_6_text', true );
		$sobre_section_6_ano = get_post_meta( $post_id, 'sobre_section_6_ano', true );
		$sobre_section_6_linha_1 = get_post_meta( $post_id, 'sobre_section_6_linha_1', true );
		$sobre_section_6_linha_2 = get_post_meta( $post_id, 'sobre_section_6_linha_2', true );
		$sobre_section_6_profissionais = get_post_meta( $post_id, 'sobre_section_6_profissionais', true );
	?>

	<?php if( $sobre_section_6_show ) : ?>

		<div class="sobre-section-6" style="background-image: url(<?php echo $sobre_section_6_img; ?>);">
			
			<div class="container">

				<div class="row">

					<div class="col-md-5 col-md-offset-1" style="z-index: 9;">

						<div class="clearfix p-t-80"></div>

						<ul class="sobre-section-6-abas">

							<?php $i = 0; ?>

							<?php foreach( $sobre_section_6_aba as $aba ) : ?>

								<li class="sobre-section-6-aba-item<?php echo $i == 0 ? ' active' : ''; ?>">
									<a class="prx-btn sobre-section-6-aba-btn" data-toggle="pill" href="#sobre-section-6-aba-<?php echo $i + 1; ?>">
										<?php echo $aba[ 'sobre_section_6_title' ]; ?>
									</a>
								</li>
								<!-- /.sobre-section-6-aba-btn -->

								<?php $i++; ?>

							<?php endforeach; ?>

						</ul>
						<!-- /.nav nav-pills -->

						<div class="clearfix p-b-80"></div>
						
					</div>
					<!-- /.col-md-5 -->
					
					<div class="col-md-5">

						<div class="prx-linha prx-linha-l prx-linha-t prx-linha-radius-1 hidden-xs hidden-sm" style="position: absolute; bottom: 100%; left: 100%; width: 9999px;"></div>

						<div class="clearfix p-t-80"></div>

						<div class="sobre-section-6-img hidden-sm hidden-xs" style="background-image: url(<?php echo $sobre_section_6_img; ?>);"></div>

						<div class="tab-content sobre-section-6-tab-content" style="position: relative; z-index: 9;">
							
							<?php $i = 0; ?>

							<?php foreach( $sobre_section_6_aba as $aba ) : ?>

								<div id="sobre-section-6-aba-<?php echo $i + 1; ?>" class="sobre-section-6-aba-content tab-pane fade in<?php echo $i == 0 ? ' active' : ''; ?>">

									<h3 class="sobre-section-6-aba-linha-1"><?php echo $aba[ 'sobre_section_6_linha_1' ]; ?></h3>

									<div class="cleafix m-b-4h0"></div>

									<div class="sobre-section-6-aba-linha-2"><?php echo $utils->nl2p( $aba[ 'sobre_section_6_linha_2' ] ); ?></div>
									
								</div>
								<!-- /.sobre-section-6-aba-content -->

								<?php $i++; ?>

							<?php endforeach; ?>							
						
						</div>
						<!-- /.tab-content -->

						<div class="clearfix p-b-80"></div>

					</div>
					<!-- /.col-md-5 -->

				</div>
				<!-- /.row -->
			</div>
			<!-- /.container -->

			<div class="clearfix m-b-200"></div>

		</div>
		<!-- /.sobre-section-6 -->

	<?php endif; ?>

</article><!-- #post-## -->