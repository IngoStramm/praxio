<?php
	$utils = new Utils;
	$post_id = get_the_ID();
	$show_clientes_section = get_post_meta( $post_id, 'clientes_section_show', true );
	$clientes_section_title = get_post_meta( $post_id, 'clientes_section_title', true );
	$clientes_section_logos = get_post_meta( $post_id, 'clientes_section_logos_logo', true );
	// $utils->debug( $clientes_section_logos );
?>

<?php if( $show_clientes_section ) : ?>

	<div class="clearfix m-t-80"></div>

	<div class="clientes-section ov-h">
		
		<div class="container">
			
			<div class="row">

				<div class="col-md-6">

					<h2 class="clientes-section-title"><?php echo $clientes_section_title; ?></h2>
					
				</div>
				<!-- /.col-md-6 -->

				<?php if( $clientes_section_logos ) : ?>

					<div class="clearfix m-b-40 visible-xs visible-sm"></div>
				
					<div class="col-md-6">

						<div class="row" style="position: relative;">

							<?php
								$logo_count = 0;
								$total_logos = count( $clientes_section_logos );
								// $utils->debug( $total_logos );
							?>

							<?php foreach( $clientes_section_logos as $logo ) : ?>

								<?php // $utils->debug( $logo_count ); ?>

								<?php $src = $logo[ 'clientes_section_logos_img' ]; ?>

								<?php if( $src ) : ?>
							
									<div class="col-md-3 col-xs-6">
										
										<img class="clientes-section-title img-responsive center-block m-b-40" src="<?php echo $src; ?>">

									</div>
									<!-- /.col-md-3 -->

									<?php if( $logo_count % 4 == 3 && $logo_count < $total_logos - 1 ) : ?>

										<div class="clearfix hidden-xs hidden-sm m-b-40"></div>

									<?php endif; ?>

									<?php if( $logo_count % 2 == 1 && $logo_count < $total_logos - 1 ) : ?>

										<div class="clearfix visible-xs visible-sm"></div>

									<?php endif; ?>

									<?php $logo_count++; ?>
								
								<?php endif; ?>

							<?php endforeach; ?>

							<div class="prx-linha prx-linha-b prx-linha-l prx-linha-radius-4 hidden-xs hidden-sm" style="position: absolute; bottom: 0; left: -20px; width: 100%; height: 500px;">
								
								<div class="prx-linha prx-linha-b" style="position: absolute; bottom: -2px; right: 0; width: 40px;">
									
									<div class="prx-linha prx-linha-b" style="position: absolute; bottom: -2px; right: 100%; width: 40px; border-color: #fff;"></div>
								</div>
							</div>

						</div>
						<!-- /.row -->
						
					</div>
					<!-- /.col-md-6 -->

				<?php endif; ?>
				
			</div>
			<!-- /.row -->
		
		</div>
		<!-- /.container -->

	</div>
	<!-- /.clientes-section -->

	<div class="clearfix m-b-80"></div>

<?php endif; ?>