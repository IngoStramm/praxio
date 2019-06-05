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
	$gestao_de_oficinas_banner_show = get_post_meta( $post_id, 'gestao_de_oficinas_banner_show', true );
	$gestao_de_oficinas_banner_img = get_post_meta( $post_id, 'gestao_de_oficinas_banner_img', true );
	$gestao_de_oficinas_banner_linha_1 = get_post_meta( $post_id, 'gestao_de_oficinas_banner_linha_1', true );
	$gestao_de_oficinas_banner_linha_2 = get_post_meta( $post_id, 'gestao_de_oficinas_banner_linha_2', true );
	$gestao_de_oficinas_banner_text = get_post_meta( $post_id, 'gestao_de_oficinas_banner_text', true );
	$gestao_de_oficinas_banner_btn_txt = get_post_meta( $post_id, 'gestao_de_oficinas_banner_btn_txt', true );
	//$utils->debug( $gestao_de_oficinas_banner_show );
?>

<?php $solucoes_form_id = get_post_meta( $post_id, 'solucoes_form_id', true ); ?>


<article id="post-<?php the_ID(); ?>" <?php post_class( 'gestao-de-oficinas' ); ?>>

    <?php if( $gestao_de_oficinas_banner_show ) : ?>

        <div class="page-banner gestao-de-oficinas-banner" style="background-image: url(<?php echo $gestao_de_oficinas_banner_img; ?>);">

            <div class="container">
                <div class="row">

                    <div class="clearfix m-t-120 hidden-xs hidden-sm"></div>

                    <div class="clearfix m-t-80"></div>

                    <div class="col-lg-4 col-md-6 col-lg-offset-1">

                        <h1 class="gestao-de-oficinas-banner-line-1 page-banner-title-stroke"><?php echo wp_kses_decode_entities( $gestao_de_oficinas_banner_linha_1 ); ?></h1>
                        <h3 class="gestao-de-oficinas-banner-line-2 page-banner-title-1"><?php echo wp_kses_decode_entities( $gestao_de_oficinas_banner_linha_2 ); ?></h3>
                        <div class="clearfix m-b-20"></div>

                    </div>
                    <!-- /.col-lg-4 -->

                    <div class="clearfix m-b-40 visible-xs visible-sm"></div>

                    <div class="col-lg-4 col-md-6 col-lg-offset-1">

                        <div class="prx-linha prx-linha-l prx-linha-radius-4 hidden-xs" style="position: absolute; top: -10px; right: 100%; width: 40px;">

                            <div class="prx-linha prx-linha-b prx-linha-radius-4" style="position: absolute; bottom: 0; left: 0; right: 0;"></div>

                        </div>
                        <!-- /.prx-linha -->

                        <div class="gestao-de-oficinas-banner-text page-banner-text-bigger"><?php echo $utils->nl2p( $gestao_de_oficinas_banner_text ); ?></div>

                        <div class="clearfix m-t-80"></div>

						<?php if( $solucoes_form_id ) : ?>

	                        <a href="#<?php //echo $gestao_de_oficinas_btn_url; ?>" class="gestao-de-oficinas-banner-btn prx-btn prx-btn-inline" style="position: relative;" data-toggle="modal" data-target="#prx-modal-solucoes">
	                            <?php echo $gestao_de_oficinas_banner_btn_txt ?>
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
    	$gestao_de_oficinas_section_1_show = get_post_meta( $post_id, 'gestao_de_oficinas_section_1_show', true );
    	$gestao_de_oficinas_section_1_text = get_post_meta( $post_id, 'gestao_de_oficinas_section_1_text', true );
    	$gestao_de_oficinas_section_1_img = get_post_meta( $post_id, 'gestao_de_oficinas_section_1_img', true );
    	$gestao_de_oficinas_section_1_caption = get_post_meta( $post_id, 'gestao_de_oficinas_section_1_caption', true );
    ?>

    <?php if( $gestao_de_oficinas_section_1_show ) : ?>

    	<div class="gestao-de-oficinas-section-1 p-t-100 p-b-100 ov-h">
    		
    		<div class="container">

    			<div class="row">
    				
    				<div class="container">

    					<div class="row">

    						<div class="col-md-6">

    							<div class="prx-linha prx-linha-t prx-linha-l prx-linha-radius-1 hidden-xs hidden-sm" style="position: absolute; top: 50%; right: 100%; width: 150px; height: 240px;margin-top: 2px;"></div>
    							
    							<div class="m-t-40 hidden-xs hidden-sm"></div>

    							<div class="gestao-de-oficinas-section-1-text"><?php echo $utils->nl2p( $gestao_de_oficinas_section_1_text ); ?></div>

    						</div>
    						<!-- /.col-md-6 -->

    						<div class="clearfix m-b-40 hidden-md hidden-lg"></div>

    						<div class="col-md-5 col-md-offset-1">
    							
								<figure class="gestao-de-oficinas-section-1-figure">
									
									<img src="<?php echo $gestao_de_oficinas_section_1_img; ?>" class="gestao-de-oficinas-section-1-img">

									<span class="gestao-de-oficinas-section-1-caption"><?php echo $gestao_de_oficinas_section_1_caption; ?></span>

								</figure>
								<!-- /.gestao-de-oficinas-section-1-figure -->

    						</div>
    						<!-- /.col-md-5 -->
    						
    					</div>
    					<!-- /.row -->

    				</div>
    				<!-- /.container -->

    			</div>
    			<!-- /.row -->

    		</div>
    		<!-- /.container -->

    	</div>
    	<!-- /.gestao-de-oficinas-section-1 -->

    <?php endif; ?>

    <?php
    	$show_section_2 = get_post_meta( $post_id, 'gestao_de_oficinas_section_2_show', true );
    	$gestao_de_oficinas_section_2_title = get_post_meta( $post_id, 'gestao_de_oficinas_section_2_title', true );
    	$gestao_de_oficinas_section_2_text = get_post_meta( $post_id, 'gestao_de_oficinas_section_2_text', true );
    	$gestao_de_oficinas_section_2_bg = get_post_meta( $post_id, 'gestao_de_oficinas_section_2_bg', true );
    	$gestao_de_oficinas_section_2_thumb = get_post_meta( $post_id, 'gestao_de_oficinas_section_2_thumb', true );
    ?>

    <?php if( $show_section_2 ) : ?>

    	<div class="extra-section-2 extra-section-2-bg-cinza p-t-80-i p-b-120-i" style="background-image: url(<?php echo $gestao_de_oficinas_section_2_bg; ?>);">

    		<div class="container">

    			<div class="row">

    				<div class="col-md-12">
    					<h2 class="extra-section-2-title extra-section-2-title-verm"><strong><?php echo $gestao_de_oficinas_section_2_title; ?></strong></h2>
    				</div>
    				<!-- /.col-md-12 -->

    				<div class="clearfix m-b-80"></div>

    				<div class="col-md-6">
    					
    					<div class="clearfix m-b-10"></div>
    					
    					<div class="extra-section-2-text extra-section-2-text-big"><?php echo $utils->nl2p( $gestao_de_oficinas_section_2_text ); ?></div>

    				</div>
    				<!-- /.col-md-6 -->
    				
    				<div class="clearfix m-b-40 visible-xs visible-sm"></div>

    				<div class="col-md-6">						

    					<a href="#" class="extra-section-2-link-show-youtube-modal" data-toggle="modal" data-target="#youtube-modal-gestao-de-oficinas">
    						
    						<figure class="extra-section-2-youtube-figure">

    							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/play-btn.png" class="extra-section-2-btn-show-youtube-icon-play" />
    							
    							<img src="<?php echo $gestao_de_oficinas_section_2_thumb; ?>" class="extra-section-2-youtube-img">

    						</figure>
    						<!-- /.extra-section-2-youtube-figure -->
    					</a>

    				</div>
    				<!-- /.col-md-6 -->

    			</div>
    			<!-- /.row -->

    		</div>
    		<!-- /.container -->
    		
    	</div>
    	<!-- /.extra-section-2 -->

    	<div class="clearfix m-b-80"></div>

    <?php endif; ?>

    <?php
	    $gestao_de_oficinas_section_3_show = get_post_meta( $post_id, 'gestao_de_oficinas_section_3_show', true );
	    $gestao_de_oficinas_section_3_title = get_post_meta( $post_id, 'gestao_de_oficinas_section_3_title', true );
	    $gestao_de_oficinas_section_3_slide = get_post_meta( $post_id, 'gestao_de_oficinas_section_3_slider_slide', true );
	    $gestao_de_oficinas_section_3_list = get_post_meta( $post_id, 'gestao_de_oficinas_section_3_list_list', true );
    ?>

    <?php if( $gestao_de_oficinas_section_3_show ) : ?>

        <div class="gestao-de-oficinas-section-3 prx-vantagens ov-h">

            <div class="container">

                <div class="row">

                    <div class="col-md-12 b40-1">

                        <h2 class="section-head prx-vantagens-titulo"><?php echo $utils->nl2p( $gestao_de_oficinas_section_3_title ); ?></h2>

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

                                <?php foreach( $gestao_de_oficinas_section_3_slide as $slide ) : ?>

                                    <div class="item<?php echo $i > 0 ? '' : ' active' ?> prx-vantagens-carousel-item">

                                        <?php // $utils->debug( $slide ); ?>

                                        <img class="img-responsive center-block prx-vantagens-carousel-item-img" src="<?php echo $slide[ 'gestao_de_oficinas_section_3_slider_img' ]; ?>" alt="<?php echo $slide[ 'gestao_de_oficinas_section_3_slider_text' ]; ?>" style="width: 100%;">

                                        <div class="prx-carousel-block-txt prx-vantagens-carousel-item-txt"><?php echo $utils->nl2p( $slide[ 'gestao_de_oficinas_section_3_slider_text' ] ); ?></div>

                                    </div>
                                    <!-- ./item -->
                                    <?php $i++; ?>

                                <?php endforeach; ?>

                            </div>
                            <!-- /.carousel-inner -->

                            <!-- Indicators -->
                            <ol class="carousel-indicators">

                                <?php $i = 0; ?>

                                <?php foreach( $gestao_de_oficinas_section_3_slide as $slide ) : ?>

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

                            <?php foreach( $gestao_de_oficinas_section_3_list as $list ) : ?>

                                <div class="box-content prx-vantagens-lista-item">

                                    <div class="content-icon prx-vantagens-lista-icon"><img src="<?php echo $list['gestao_de_oficinas_section_3_list_icon']; ?>" alt="<?php echo $list['gestao_de_oficinas_section_3_list_title']; ?>"></div>

                                    <div class="text-box prx-vantagens-lista-item-content">

	                                    <h3 class="content-title prx-vantagens-lista-item-content-titulo"><?php echo $list['gestao_de_oficinas_section_3_list_title']; ?></h3>

	                                    <div class="content-text prx-vantagens-lista-item-content-txt"><?php echo $list['gestao_de_oficinas_section_3_list_text']; ?></div>

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
        <!-- /.gestao-de-oficinas-section-3 -->

    <?php endif; ?>

    <?php
	    $gestao_de_oficinas_section_4_show = get_post_meta( $post_id, 'gestao_de_oficinas_section_4_show', true );
	    $gestao_de_oficinas_section_4_title = get_post_meta( $post_id, 'gestao_de_oficinas_section_4_title', true );
	    $gestao_de_oficinas_section_4_subtitle = get_post_meta( $post_id, 'gestao_de_oficinas_section_4_subtitle', true );
	    $gestao_de_oficinas_section_4_image = get_post_meta( $post_id, 'gestao_de_oficinas_section_4_img', true );
	    $gestao_de_oficinas_section_4_items = get_post_meta( $post_id, 'gestao_de_oficinas_section_4_item', true );
    ?>

    <?php if( $gestao_de_oficinas_section_4_show ) : ?>

        <div class="gestao-de-oficinas-section-4 ov-h">

            <div class="container">

                <div class="row">

                    <div class="col-md-12 b40-1"><h2 class="section-title"><?php echo $gestao_de_oficinas_section_4_title; ?></h2></div>

                </div>
                <!-- /.row -->

                <div class="row p-t-20 l40-1">

                    <div class="col-md-6">

                        <h3 class="subtitle"><?php echo $gestao_de_oficinas_section_4_subtitle; ?></h3>

                        <img src="<?php echo $gestao_de_oficinas_section_4_image; ?>" alt="<?php echo $gestao_de_oficinas_section_4_subtitle; ?>">

                    </div>
                    <!-- /.col-md-6 -->

                    <div class="col-md-5 col-md-offset-1 b40-1">

                        <?php foreach( $gestao_de_oficinas_section_4_items as $item ) : ?>

                            <div>

                                <h4><?php echo $item['gestao_de_oficinas_section_4_item_title']; ?></h4>

                                <p><?php echo $item['gestao_de_oficinas_section_4_item_content']; ?></p>

                                <div class="p-b-20"></div>

                            </div>

                        <?php endforeach; ?>

                    </div>
                    <!-- /.col-md-5 -->

                </div>
                <!-- /.row -->

            </div>
            <!-- /.container -->

        </div>
        <!-- /.gestao-de-oficinas-section-4 -->

        <div class="clearfix p-t-50"></div>

    <?php endif; ?>

    <?php
	    $gestao_de_oficinas_section_5_show = get_post_meta( $post_id, 'gestao_de_oficinas_section_5_show', true );
	    $gestao_de_oficinas_section_5_text = get_post_meta( $post_id, 'gestao_de_oficinas_section_5_text', true );
    ?>
    
    <?php if( $gestao_de_oficinas_section_5_show ) : ?>

    	<div class="gestao-de-oficinas-section-5">

    		<div class="container">

    			<div class="row">

    				<div class="col-md-12">
    					
    					<h2 class="gestao-de-oficinas-section-5-title"><?php echo $utils->nl2p( $gestao_de_oficinas_section_5_text ); ?></h2>

    				</div>
    				<!-- /.col-md-12 -->
    				
    			</div>
    			<!-- /.row -->

    		</div>
    		<!-- /.container -->
    		
    	</div>
    	<!-- /.gestao-de-oficinas-section-5 -->

    	<div class="clearfix m-b-80"></div>

    <?php endif; ?>

    <?php get_template_part( 'inc/laf/parts/integracoes', 'section' ); ?>
    
    <?php get_template_part( 'inc/laf/parts/clientes', 'section' ); ?>

</article>