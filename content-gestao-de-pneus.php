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
	$gestao_de_pneus_banner_show = get_post_meta( $post_id, 'gestao_de_pneus_banner_show', true );
	$gestao_de_pneus_banner_img = get_post_meta( $post_id, 'gestao_de_pneus_banner_img', true );
	$gestao_de_pneus_banner_linha_1 = get_post_meta( $post_id, 'gestao_de_pneus_banner_linha_1', true );
	$gestao_de_pneus_banner_linha_2 = get_post_meta( $post_id, 'gestao_de_pneus_banner_linha_2', true );
	$gestao_de_pneus_banner_text = get_post_meta( $post_id, 'gestao_de_pneus_banner_text', true );
	$gestao_de_pneus_banner_btn_txt = get_post_meta( $post_id, 'gestao_de_pneus_banner_btn_txt', true );
	//$utils->debug( $gestao_de_pneus_banner_show );
?>

<?php $solucoes_form_id = get_post_meta( $post_id, 'solucoes_form_id', true ); ?>


<article id="post-<?php the_ID(); ?>" <?php post_class( 'gestao-de-pneus' ); ?>>

    <?php if( $gestao_de_pneus_banner_show ) : ?>

        <div class="page-banner gestao-de-pneus-banner" style="background-image: url(<?php echo $gestao_de_pneus_banner_img; ?>);">

            <div class="container">
                <div class="row">

                    <div class="clearfix m-t-120 hidden-xs hidden-sm"></div>

                    <div class="clearfix m-t-80"></div>

                    <div class="col-lg-4 col-md-6 col-lg-offset-1">

                        <h1 class="gestao-de-pneus-banner-line-1"><?php echo wp_kses_decode_entities( $gestao_de_pneus_banner_linha_1 ); ?></h1>
                        <h3 class="gestao-de-pneus-banner-line-2"><?php echo wp_kses_decode_entities( $gestao_de_pneus_banner_linha_2 ); ?></h3>
                        <div class="clearfix m-b-20"></div>

                    </div>
                    <!-- /.col-lg-4 -->

                    <div class="clearfix m-b-40 visible-xs visible-sm"></div>

                    <div class="col-lg-4 col-md-6 col-lg-offset-1">

                        <div class="prx-linha prx-linha-l prx-linha-radius-4 hidden-xs" style="position: absolute; top: -10px; right: 100%; width: 40px;">

                            <div class="prx-linha prx-linha-b prx-linha-radius-4" style="position: absolute; bottom: 0; left: 0; right: 0;"></div>

                        </div>
                        <!-- /.prx-linha -->

                        <div class="gestao-de-pneus-banner-text"><?php echo $utils->nl2p( $gestao_de_pneus_banner_text ); ?></div>

                        <div class="clearfix m-t-80"></div>

						<?php if( $solucoes_form_id ) : ?>

	                        <a href="#<?php //echo $gestao_de_pneus_btn_url; ?>" class="gestao-de-pneus-banner-btn prx-btn prx-btn-inline" style="position: relative;" data-toggle="modal" data-target="#prx-modal-solucoes">
	                            <?php echo $gestao_de_pneus_banner_btn_txt ?>
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
    	$gestao_de_pneus_section_1_show = get_post_meta( $post_id, 'gestao_de_pneus_section_1_show', true );
    	$gestao_de_pneus_section_1_text = get_post_meta( $post_id, 'gestao_de_pneus_section_1_text', true );
    	$gestao_de_pneus_section_1_img = get_post_meta( $post_id, 'gestao_de_pneus_section_1_img', true );
    ?>

    <?php if( $gestao_de_pneus_section_1_show ) : ?>

    	<div class="gestao-de-pneus-section-1 gestao-de-pneus-etapa ov-h">
    		
    		<div class="container">

    			<div class="row">
    				
					<div class="col-md-8 col-md-offset-2">
						
						<?php prx_gestao_de_pneus_etapas( pll__( 'Cronograma de verificação', 'prx' ), array( 0 ), array() ); ?>

					</div>
					<!-- /.col-md-8 -->

					<div class="clearfix m-b-40"></div>

					<div class="col-md-8 gestao-de-pneus-etapa-text">
						<?php echo $utils->nl2p( $gestao_de_pneus_section_1_text ); ?>
					</div>

					<div class="clearfix m-b-40 visible-xs visible-sm"></div>

					<div class="col-md-4">

						<div class="prx-linha prx-linha-t prx-linha-r prx-linha-radius-2 visible-md visible-lg" style="position: absolute; top: 100px; left: 100%; width: 180px; height: 180px;">
							<div class="prx-linha prx-linha-r" style="position: absolute; top: 100%; right: -2px; margin-top: 80px; width: 180px; height: 180px;"></div>
						</div>

						<img src="<?php echo $gestao_de_pneus_section_1_img; ?>" class="gestao-de-pneus-etapa-img">
					</div>

    			</div>
    			<!-- /.row -->

    		</div>
    		<!-- /.container -->

    	</div>
    	<!-- /.gestao-de-pneus-section-1 -->

    	<div class="clearfix m-b-80"></div>

    <?php endif; ?>

    <?php
    	$gestao_de_pneus_section_2_show = get_post_meta( $post_id, 'gestao_de_pneus_section_2_show', true );
    	$gestao_de_pneus_section_2_text = get_post_meta( $post_id, 'gestao_de_pneus_section_2_text', true );
    	$gestao_de_pneus_section_2_img = get_post_meta( $post_id, 'gestao_de_pneus_section_2_img', true );
    ?>

    <?php if( $gestao_de_pneus_section_2_show ) : ?>

    	<div class="gestao-de-pneus-section-2 gestao-de-pneus-etapa ov-h">
    		
    		<div class="container">

    			<div class="row">
    				
					<div class="col-md-8 col-md-offset-2">
						
						<?php prx_gestao_de_pneus_etapas( pll__( 'Aferição', 'prx' ), array( 0, 1 ), array( 0 ) ); ?>

					</div>
					<!-- /.col-md-8 -->

					<div class="clearfix m-b-40"></div>

					<div class="col-md-6">

						<div class="prx-linha prx-linha-t prx-linha-l prx-linha-radius-1 visible-md visible-lg" style="position: absolute; top: 100px; right: 100%; width: 180px; height: 300px;"></div>

						<img src="<?php echo $gestao_de_pneus_section_2_img; ?>" class="gestao-de-pneus-etapa-img">
					</div>

					<div class="clearfix m-b-80 visible-xs visible-sm"></div>

					<div class="col-md-6 gestao-de-pneus-etapa-text">
						<?php echo $utils->nl2p( $gestao_de_pneus_section_2_text ); ?>
					</div>

    			</div>
    			<!-- /.row -->

    		</div>
    		<!-- /.container -->

    	</div>
    	<!-- /.gestao-de-pneus-section-2 -->

    	<div class="clearfix m-b-80"></div>

    <?php endif; ?>

    <?php
    	$gestao_de_pneus_section_3_show = get_post_meta( $post_id, 'gestao_de_pneus_section_3_show', true );
    	$gestao_de_pneus_section_3_text = get_post_meta( $post_id, 'gestao_de_pneus_section_3_text', true );
    	$gestao_de_pneus_section_3_img = get_post_meta( $post_id, 'gestao_de_pneus_section_3_img', true );
    	$gestao_de_pneus_section_3_text_calibragem = get_post_meta( $post_id, 'gestao_de_pneus_section_3_text_calibragem', true );
    	$gestao_de_pneus_section_3_text_inspecao = get_post_meta( $post_id, 'gestao_de_pneus_section_3_text_inspecao', true );
    	$gestao_de_pneus_section_3_text_movimentacao = get_post_meta( $post_id, 'gestao_de_pneus_section_3_text_movimentacao', true );
    ?>

    <?php if( $gestao_de_pneus_section_3_show ) : ?>

    	<div class="gestao-de-pneus-section-3 gestao-de-pneus-etapa gestao-de-pneus-etapa-cinza ov-h">
    		
    		<div class="container">

    			<div class="row">
    				
					<div class="col-md-8 col-md-offset-2">
						
						<?php prx_gestao_de_pneus_etapas( pll__( 'Leitura dos dados', 'prx' ), array( 0, 1, 2 ), array( 0, 1 ) ); ?>

					</div>
					<!-- /.col-md-8 -->

					<div class="clearfix m-b-40"></div>

					<div class="col-md-5 gestao-de-pneus-etapa-text gestao-de-pneus-section-3-text-strong">
						<?php echo $utils->nl2p( $gestao_de_pneus_section_3_text ); ?>
					</div>

					<div class="clearfix m-b-40 visible-xs visible-sm"></div>

					<div class="col-md-6 col-md-offset-1">

						<figure class="gestao-de-pneus-section-3-figure">
							<img src="<?php echo $gestao_de_pneus_section_3_img; ?>" class="gestao-de-pneus-section-3-img gestao-de-pneus-etapa-img">
						</figure>

					</div>

					<div class="clearfix p-b-80 visible-xs visible-sm"></div>

    			</div>
    			<!-- /.row -->

    			<div class="clearfix p-b-80"></div>

    			<div class="row">
    				
    				<div class="col-md-3">

    					<h4 class="gestao-de-pneus-etapa-cinza-box-titulo"><?php pll_e( 'Calibragem', 'prx' ); ?></h4>
    					
						<div class="gestao-de-pneus-etapa-cinza-box-texto"><?php echo $utils->nl2p( $gestao_de_pneus_section_3_text_calibragem ); ?></div>

    				</div>
    				<!-- /.col-md-3 -->

    				<div class="col-md-3 col-md-offset-1">

    					<h4 class="gestao-de-pneus-etapa-cinza-box-titulo"><?php pll_e( 'Inspeção', 'prx' ); ?></h4>
    					
						<div class="gestao-de-pneus-etapa-cinza-box-texto"><?php echo $utils->nl2p( $gestao_de_pneus_section_3_text_inspecao ); ?></div>
    					
    				</div>
    				<!-- /.col-md-3 -->

    				<div class="col-md-3 col-md-offset-1">

    					<h4 class="gestao-de-pneus-etapa-cinza-box-titulo"><?php pll_e( 'Movimentação', 'prx' ); ?></h4>
    					
						<div class="gestao-de-pneus-etapa-cinza-box-texto"><?php echo $utils->nl2p( $gestao_de_pneus_section_3_text_movimentacao ); ?></div>
    					
    				</div>
    				<!-- /.col-md-3 -->

    			</div>
    			<!-- /.row -->

    		</div>
    		<!-- /.container -->

    		<div class="clearfix p-b-80"></div>

    	</div>
    	<!-- /.gestao-de-pneus-section-3 -->

    <?php endif; ?>

        <?php
        	$gestao_de_pneus_section_4_show = get_post_meta( $post_id, 'gestao_de_pneus_section_4_show', true );
        	$gestao_de_pneus_section_4_title = get_post_meta( $post_id, 'gestao_de_pneus_section_4_title', true );
        	$gestao_de_pneus_section_4_text = get_post_meta( $post_id, 'gestao_de_pneus_section_4_text', true );
        	$gestao_de_pneus_section_4_img = get_post_meta( $post_id, 'gestao_de_pneus_section_4_img', true );
        ?>

        <?php if( $gestao_de_pneus_section_4_show ) : ?>

        	<div class="gestao-de-pneus-section-2 gestao-de-pneus-etapa">
        		
        		<div class="container">

        			<div class="row">
        				
    					<div class="col-md-8 col-md-offset-2">
    						
    						<?php prx_gestao_de_pneus_etapas( pll__( 'Finalização dos serviços', 'prx' ), array( 0, 1, 2, 3 ), array( 0, 1, 2 ) ); ?>

    					</div>
    					<!-- /.col-md-8 -->

    					<div class="clearfix m-b-40"></div>

    					<div class="col-md-6">
    						<img src="<?php echo $gestao_de_pneus_section_4_img; ?>" class="gestao-de-pneus-etapa-img">
    					</div>

    					<div class="clearfix m-b-40 visible-xs visible-sm"></div>

    					<div class="col-md-6">
    						<div class="gestao-de-pneus-etapa-text m-b-15"><h5><?php echo $gestao_de_pneus_section_4_title; ?></h5></div>

    						<div class="gestao-de-pneus-etapa-text"><?php echo $utils->nl2p( $gestao_de_pneus_section_4_text ); ?></div>
    					</div>

        			</div>
        			<!-- /.row -->

        		</div>
        		<!-- /.container -->

        	</div>
        	<!-- /.gestao-de-pneus-section-2 -->

        	<div class="clearfix m-b-80"></div>

        <?php endif; ?>    

        <?php
        	$gestao_de_pneus_section_5_show = get_post_meta( $post_id, 'gestao_de_pneus_section_5_show', true );
        	$gestao_de_pneus_section_5_items = get_post_meta( $post_id, 'gestao_de_pneus_section_5_item', true );
        	$gestao_de_pneus_section_5_img = get_post_meta( $post_id, 'gestao_de_pneus_section_5_img', true );
        ?>

        <?php if( $gestao_de_pneus_section_5_show ) : ?>

        	<div class="gestao-de-pneus-section-5 gestao-de-pneus-etapa ov-h">
        		
        		<div class="container">

        			<div class="row">

        				<div class="col-md-12">
        					
        					<h2 class="gestao-de-pneus-section-5-title" style="position: relative;">

        						<span style="position: relative; z-index: 9; background-color: #fff; padding: 0 20px 0 0;"><?php pll_e( 'Movimentação', 'prx' ); ?></span>

        						<div class="prx-linha prx-linha-t prx-linha-r prx-linha-radius-2 hidden-xs hidden-sm" style="position: absolute; top: 50%;right: 0; margin-right: -80px; width: 220px; height: 360px; z-index: 1;">
        							
        							<div class="prx-linha prx-linha-t" style="position: absolute; top: -2px; right: 100%; margin-right: 50px; width: 250%; height: 40px;"></div>

        							<div class="prx-linha prx-linha-r" style="position: absolute; top: 100%; margin-top: 40px; right: -2px; width: 40px; height: 200px;"></div>

        						</div>
        					</h2>

        				</div>

        				<div class="clearfix m-b-40"></div>

    					<div class="col-md-8 gestao-de-pneus-section-5-items gestao-de-pneus-etapa-text">
    						<?php if( $gestao_de_pneus_section_5_items ) : ?>

    							<?php foreach( $gestao_de_pneus_section_5_items as $item ) : ?>

									<h5 class="gestao-de-pneus-section-5-items-title"><?php echo $item[ 'gestao_de_pneus_section_5_title']; ?></h5>

									<div class="gestao-de-pneus-section-5-items-text"><?php echo $utils->nl2p( $item[ 'gestao_de_pneus_section_5_text' ] ); ?></div>

    							<?php endforeach; ?>

    						<?php endif; ?>
    					</div>

    					<div class="clearfix m-b-40 visible-xs visible-sm"></div>
    					
    					<div class="col-md-4">
    						<img src="<?php echo $gestao_de_pneus_section_5_img; ?>" class="gestao-de-pneus-etapa-img">
    					</div>

    					<div class="col-md-8 col-md-offset-2">
    						
    						<?php prx_gestao_de_pneus_etapas( '&nbsp;', array( 0, 1, 2, 3 ), array( 0, 1, 2, 3 ) ); ?>

    					</div>
    					<!-- /.col-md-8 -->

        			</div>
        			<!-- /.row -->

        		</div>
        		<!-- /.container -->

        	</div>
        	<!-- /.gestao-de-pneus-section-5 -->

        	<div class="clearfix m-b-80"></div>

        <?php endif; ?>

        <?php
        	$gestao_de_pneus_section_6_show = get_post_meta( $post_id, 'gestao_de_pneus_section_6_show', true );
        	$gestao_de_pneus_section_6_title = get_post_meta( $post_id, 'gestao_de_pneus_section_6_title', true );
        	$gestao_de_pneus_section_6_text = get_post_meta( $post_id, 'gestao_de_pneus_section_6_text', true );
        	$gestao_de_pneus_section_6_img = get_post_meta( $post_id, 'gestao_de_pneus_section_6_img', true );
        ?>

        <?php if( $gestao_de_pneus_section_6_show ) : ?>

        	<div class="gestao-de-pneus-section-6 gestao-de-pneus-etapa gestao-de-pneus-etapa-cinza p-t-80 p-b-80">
        		
        		<div class="container">

        			<div class="row">

        				<div class="row-height">
    					
	    					<div class="col-md-5 col-md-height col-md-middle">
	    						<img src="<?php echo $gestao_de_pneus_section_6_img; ?>" class="">
	    					</div>

	    					<div class="clearfix m-b-40 visible-xs visible-sm"></div>

	        				<div class="col-md-7 col-md-height col-md-middle">
	        					
	        					<h2 class="gestao-de-pneus-section-6-title m-b-30"><?php echo $gestao_de_pneus_section_6_title; ?></h2>

	        					<div class="gestao-de-pneus-section-6-text gestao-de-pneus-etapa-text"><?php echo $utils->nl2p( $gestao_de_pneus_section_6_text ); ?></div>

	        				</div>
        				
        				</div>

        			</div>
        			<!-- /.row -->

        		</div>
        		<!-- /.container -->

        	</div>
        	<!-- /.gestao-de-pneus-section-6 -->

        	<div class="clearfix m-b-80"></div>

        <?php endif; ?>    

        <?php
        	$gestao_de_pneus_section_7_show = get_post_meta( $post_id, 'gestao_de_pneus_section_7_show', true );
        	$gestao_de_pneus_section_7_title = get_post_meta( $post_id, 'gestao_de_pneus_section_7_title', true );
        	$gestao_de_pneus_section_7_text = get_post_meta( $post_id, 'gestao_de_pneus_section_7_text', true );
        	$gestao_de_pneus_section_7_img = get_post_meta( $post_id, 'gestao_de_pneus_section_7_img', true );
        	$gestao_de_pneus_section_7_title_list_1 = get_post_meta( $post_id, 'gestao_de_pneus_section_7_title_list_1', true );
        	$gestao_de_pneus_section_7_items_list_1 = get_post_meta( $post_id, 'gestao_de_pneus_section_7_items_list_1', true );
        	$gestao_de_pneus_section_7_title_list_2 = get_post_meta( $post_id, 'gestao_de_pneus_section_7_title_list_2', true );
        	$gestao_de_pneus_section_7_items_list_2 = get_post_meta( $post_id, 'gestao_de_pneus_section_7_items_list_2', true );
        ?>

        <?php if( $gestao_de_pneus_section_7_show ) : ?>

        	<div class="gestao-de-pneus-section-7 gestao-de-pneus-etapa ov-h">
        		
        		<div class="container">

        			<div class="row">

        				<div class="col-md-12">        					
    					
        					<h2 class="gestao-de-pneus-section-7-title m-b-40"><?php echo $gestao_de_pneus_section_7_title; ?></h2>
        					
        				</div>
        				<!-- /.col-md-12 -->

        				<div class="col-md-6">

        					<div class="row">
        						
        						<div class="col-md-6">

        							<h4 class="gestao-de-pneus-section-7-list-title"><?php echo $gestao_de_pneus_section_7_title_list_1; ?></h4>

        							<?php if( $gestao_de_pneus_section_7_items_list_1 ) : ?>

        								<div class="prx-lista prx-lista-seta-1">

	        								<ul class="gestao-de-pneus-section-7-list-items">
	        									
	        									<?php foreach( $gestao_de_pneus_section_7_items_list_1 as $item ) : ?>

	        										<li class="gestao-de-pneus-section-7-list-items-item"><?php echo $item; ?></li>

	        									<?php endforeach; ?>

	        								</ul>

        								</div>
        								<!-- /.prx-lista prx-lista-seta-1 -->

        							<?php endif; ?>
        							
        							<div class="gestao-de-pneus-section-7-list-text"><?php echo $utils->nl2p( $gestao_de_pneus_section_7_text_list_1 ); ?></div>

        						</div>
        						<!-- /.col-md-6 -->

        						<div class="col-md-6">

        							<h4 class="gestao-de-pneus-section-7-list-title"><?php echo $gestao_de_pneus_section_7_title_list_2; ?></h4>
        							
        							<?php if( $gestao_de_pneus_section_7_items_list_2 ) : ?>

        								<div class="prx-lista prx-lista-seta-1">

	        								<ul class="gestao-de-pneus-section-7-list-items">
	        									
	        									<?php foreach( $gestao_de_pneus_section_7_items_list_2 as $item ) : ?>

	        										<li class="gestao-de-pneus-section-7-list-items-item"><?php echo $item; ?></li>

	        									<?php endforeach; ?>

	        								</ul>

        								</div>
        								<!-- /.prx-lista prx-lista-seta-1 -->

        							<?php endif; ?>

        						</div>
        						<!-- /.col-md-6 -->

        					</div>
        					<!-- /.row -->

        				</div>

        				<div class="clearfix m-b-40 visible-xs visible-sm"></div>

    					<div class="col-md-6">

    						<img src="<?php echo $gestao_de_pneus_section_7_img; ?>" style="position: relative; z-index: 9; background-color: #fff;">

							<div class="prx-linha prx-linha-r prx-linha-b prx-linha-radius-3 hidden-xs hidden-sm" style="position: absolute; bottom: -80px; right: 0; width: 200px; height: 100px; z-index: 1;">

								<div class="prx-linha prx-linha-r" style="position: absolute; bottom: 100%; margin-bottom: 250px; right: 0; width: 40px; height: 200px;"></div>
								
								<div class="prx-linha prx-linha-b" style="position: absolute; bottom: -2px; width: 200px; right: 100%; margin-right: 40px;"></div>
							</div>

    					</div>

        			</div>
        			<!-- /.row -->

        		</div>
        		<!-- /.container -->

        		<div class="clearfix p-b-80"></div>

        	</div>
        	<!-- /.gestao-de-pneus-section-7 -->

        <?php endif; ?>    

        <?php
        	$gestao_de_pneus_section_8_show = get_post_meta( $post_id, 'gestao_de_pneus_section_8_show', true );
        	$gestao_de_pneus_section_8_title = get_post_meta( $post_id, 'gestao_de_pneus_section_8_title', true );
        	$gestao_de_pneus_section_8_text = get_post_meta( $post_id, 'gestao_de_pneus_section_8_text', true );
        	$gestao_de_pneus_section_8_items = get_post_meta( $post_id, 'gestao_de_pneus_section_8_item', true );
        	// $utils->debug( $gestao_de_pneus_section_8_items );
        ?>

        <?php if( $gestao_de_pneus_section_8_show ) : ?>

        	<div class="gestao-de-pneus-section-8">
        		
        		<div class="container">

        			<div class="row">
        				
        				<div class="col-md-12">

        					<h2 class="gestao-de-pneus-section-8-title m-b-40"><?php echo $gestao_de_pneus_section_8_title; ?></h2>

        					<div class="gestao-de-pneus-section-8-text"><?php echo $utils->nl2p( $gestao_de_pneus_section_8_text ); ?></div>
        					
        				</div>

        			</div>
        			<!-- /.row -->

        		</div>
        		<!-- /.container -->

        		<div class="clearfix m-b-40"></div>

        		<div class="gestao-de-pneus-section-8-block-cinza p-t-40">
        			
        			<div class="container">

        				<div class="row">
        					
							<div class="col-md-12">
								
								<?php if( $gestao_de_pneus_section_8_items ) : ?>

									<div class="gestao-de-pneus-section-8-items">
										
										<?php foreach( $gestao_de_pneus_section_8_items as $item ) : ?>

											<div class="gestao-de-pneus-section-8-items-item m-b-40">
												
												<figure class="gestao-de-pneus-section-8-items-item-figure">
													<img src="<?php echo $item[ 'gestao_de_pneus_section_8_img' ]; ?>" class="gestao-de-pneus-section-8-items-item-img">
												</figure>

												<h4 class="gestao-de-pneus-section-8-items-item-title"><?php echo $item[ 'gestao_de_pneus_section_8_title' ]; ?></h4>

												<div class="gestao-de-pneus-section-8-items-item-text"><?php echo $utils->nl2p( $item[ 'gestao_de_pneus_section_8_text' ] ); ?></div>

											</div>
											<!-- /.gestao-de-pneus-section-8-items-item -->

										<?php endforeach; ?>

									</div>
									<!-- /.gestao-de-pneus-section-8-items -->

								<?php endif; ?>

							</div>
							<!-- /.col-md-12 -->

        				</div>
        				<!-- /.row -->

        			</div>
        			<!-- /.container -->

        		</div>
        		<!-- /.gestao-de-pneus-section-8-block-cinza -->

        	</div>
        	<!-- /.gestao-de-pneus-section-8 -->

        <?php endif; ?> 

    <?php get_template_part( 'inc/laf/parts/clientes', 'section' ); ?>

</article>