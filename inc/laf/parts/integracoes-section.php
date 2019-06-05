<?php
	$utils = new Utils;
	$post_id = get_the_ID();
	$show_integracoes_section = get_post_meta( $post_id, 'integracoes_section_show', true );
	$integracoes_section_title = get_post_meta( $post_id, 'integracoes_section_title', true );
	$integracoes_section_title_featured = get_post_meta( $post_id, 'integracoes_section_title_featured', true );
	// Logos
	$integracoes_section_logos = get_post_meta( $post_id, 'integracoes_section_logos_item', true );
	// Sanfona
	$integracoes_section_sanfona = get_post_meta( $post_id, 'integracoes_section_items', true );
	// $utils->debug( $integracoes_section_logos );
	// $utils->debug( $integracoes_section_sanfona );
?>

<?php if( $show_integracoes_section ) : ?>

	<div class="extra-section-1 ov-h">
		
		<div class="container">

			<div class="row">
				
				<div class="col-md-12">
					
					<h3 class="extra-section-1-title text-center" style="position: relative; z-index: 10;"><?php echo $integracoes_section_title; ?></h3>

					<h1 class="extra-section-1-title-featured text-center" style="position: relative;">

						<span style="position: relative; background-color: #fff; z-index: 9; padding: 0 20px"><?php echo $integracoes_section_title_featured; ?></span>

						<div class="prx-linha prx-linha-b" style="position: absolute; bottom: 50%; left: 0; right: 0;">
							
							<div class="prx-linha prx-linha-t prx-linha-l prx-linha-radius-1 hidden-xs hidden-sm" style="position: absolute; top: 108px; right: 100%; width: 140px; height: 500px;"></div>

							<div class="prx-linha prx-linha-t prx-linha-r prx-linha-radius-2 hidden-xs hidden-sm" style="position: absolute; top: 108px; left: 100%; width: 140px; height: 500px;"></div>

						</div>
					</h1>

				</div>
				<!-- /.col-md-12 -->

				<div class="col-md-12">

					<ul class="extra-section-1-logos">
					
						<?php foreach( $integracoes_section_logos as $logo ) : ?>

							<?php //$utils->debug( $logo ); ?>

							<li class="extra-section-1-logos-item">
								<div class="extra-section-1-logos-item-img" style="background-image: url(<?php echo $logo[ 'integracoes_section_img' ]; ?>);">
								</div>
							</li>

						<?php endforeach; ?>

					</ul>
					<!-- /.extra-section-1-logos -->

				</div>
				<!-- /.col-md-12 -->

				<div class="clearfix m-b-40"></div>

				<div class="col-md-12">

					<?php 
						$rows = ceil( count( $integracoes_section_sanfona ) / 3 );
						$lists = array_chunk( $integracoes_section_sanfona, $rows );
					?>

					<div class="row">
						
						<?php foreach ( $lists as $k => $columns ) : ?>

							<div class="col-md-4">
							
								<?php foreach ( $columns as $id => $column ) : ?>

									<?php if( !empty( $column ) && !is_null( $column ) ) : ?>

										<?php $titulo = $column[ 'integracoes_section_title' ] ?>
										<?php $marcas = $column[ 'integracoes_section_brand' ] ?>

										<button data-toggle="collapse" data-target="#collapse-<?php echo $k . '-' . $id; ?>" class="extra-section-1-logos-collapse-btn collapsed">
											<span><?php echo $titulo; ?></span>
											<i class="fa fa-angle-up"></i>
											<i class="fa fa-angle-down"></i>
										</button>
										<div class="clearfix"></div>

										<ul id="collapse-<?php echo $k . '-' . $id; ?>" class="collapse extra-section-1-logos-collapse-content">

											<?php foreach( $marcas as $key => $marca ): ?>
												
												<li class="extra-section-1-logos-collapse-content-item"><?php echo $marca; ?></li>

											<?php endforeach ?>
											
										</ul>

										<div class="clearfix m-b-10"></div>

									<?php endif; ?>
								
								<?php endforeach; ?>

							</div>
							<!-- /.col-md-4 -->

						<?php endforeach; ?>

					</div>
					<!-- /.row -->

				</div>
				<!-- /.col-md-12 -->

			</div>
			<!-- /.row -->

		</div>
		<!-- /.container -->

	</div>
	<!-- /.extra-section-1 -->

	<div class="clearfix m-b-80"></div>
<?php endif; ?>
