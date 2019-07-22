<?php
$utils = new Utils;
$post_id = get_the_ID();
$meta = get_post_meta( $post_id, '', true );
$ebooks_e_materiais_banner_show = get_post_meta( $post_id, 'ebooks_e_materiais_banner_show', true );
$ebooks_e_materiais_banner_img = get_post_meta( $post_id, 'ebooks_e_materiais_banner_img', true );
$ebooks_e_materiais_banner_linha_1 = get_post_meta( $post_id, 'ebooks_e_materiais_banner_linha_1', true );
$ebooks_e_materiais_banner_linha_2 = get_post_meta( $post_id, 'ebooks_e_materiais_banner_linha_2', true );
$ebooks_e_materiais_banner_linha_3 = get_post_meta( $post_id, 'ebooks_e_materiais_banner_linha_3', true );
$ebooks_e_materiais_banner_text = get_post_meta( $post_id, 'ebooks_e_materiais_banner_text', true );
$ebooks_e_materiais_banner_btn_url = get_post_meta( $post_id, 'ebooks_e_materiais_banner_btn_url', true );
$ebooks_e_materiais_banner_btn_txt = get_post_meta( $post_id, 'ebooks_e_materiais_banner_btn_txt', true );
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( array( 'ebooks-e-materiais', 'conexao-praxio' ) ); ?>>

    <?php if( $ebooks_e_materiais_banner_show ) : ?>
        <div class="page-banner ebooks-e-materiais-banner" style="background-image: url(<?php echo $ebooks_e_materiais_banner_img; ?>);">

            <div class="container">
                <div class="row">
                    <div class="p-b-40"></div>
                    <div class="clearfix m-t-120 hidden-xs hidden-sm"></div>

                    <div class="col-lg-6 col-md-6">

                        <h3 class="ebooks-e-materiais-banner-line-2"><?php echo wp_kses_decode_entities( $ebooks_e_materiais_banner_linha_1 ); ?></h3>
                        <h1 class="ebooks-e-materiais-banner-line-1"><?php echo wp_kses_decode_entities( $ebooks_e_materiais_banner_linha_2 ); ?></h1>

                    </div>
                    <!-- /.col-lg-4 -->

                    <?php if( $$ebooks_e_materiais_banner_text || $ebooks_e_materiais_banner_btn_txt ) : ?>

	                    <div class="col-lg-4 col-md-4 col-md-offset-1 text-center">
	                        <div class="p-b-60"></div>

							<div class="prx-linha prx-linha-l prx-linha-b prx-linha-radius-4 hidden-xs" style="position: absolute; top: -10px; right: 100%; width: 40px;"></div>
							<!-- /.prx-linha -->

							<?php if( $ebooks_e_materiais_banner_text ) : ?>

		                        <div class="ebooks-e-materiais-banner-text"><?php echo $utils->nl2p( $ebooks_e_materiais_banner_text ); ?></div>

		                        <div class="clearfix m-t-80"></div>

		                    <?php endif; ?>
							
							<?php if( $ebooks_e_materiais_banner_btn_txt ) : ?>

		                        <a href="<?php echo $ebooks_e_materiais_banner_btn_url; ?>" class="ebooks-e-materiais-banner-btn prx-btn prx-btn-inline" style="position: relative;">
		                            <?php echo $ebooks_e_materiais_banner_btn_txt ?>
									<div class="prx-linha prx-linha-b hidden-xs" style="position: absolute; left: 100%; margin-left: 20px; bottom: 20px; width: 80px;"></div>
		                        </a>
		                    
		                    <?php endif; ?>

	                    </div>
	                    <!-- /.col-lg-4 -->

	                <?php endif; ?>

                    <div class="clearfix m-b-60"></div>

                </div>
                <!-- /.row -->
                <div class="m-b-40"></div>
            </div>
            <!-- /.container -->

        </div>
        <!-- /.page-banner -->
    <?php endif; ?>

    <?php
    /**
     * SESSION 1
     */
    $ebooks_e_materiais_section_1_show = get_post_meta( $post_id, 'ebooks_e_materiais_section_1_show', true );
    $ebooks_e_materiais_section_1_itens = get_post_meta( $post_id, 'ebooks_e_materiais_section_1_item', true );
    //var_dump($ebooks_e_materiais_section_1_itens);die;
    ?>

    <?php if( $ebooks_e_materiais_section_1_show ) : ?>

        <div class="ebooks-e-materiais-section-1">

            <div class="clearfix m-t-80"></div>

            <div class="container">

                <div class="row conexao-praxio-items">

                    <?php foreach( $ebooks_e_materiais_section_1_itens as $item ) : ?>

	                    <div class="col-sm-6 col-md-4 col-lg-3 conexao-praxio-item">

	                        <div class="conexao-praxio-item-img" style="background-image: url(<?php echo $item[ 'ebooks_e_materiais_section_1_img' ]; ?>);">

	                        	<?php if( $item[ 'ebooks_e_materiais_section_1_item_content' ] ) : ?>

                                	<div class="conexao-praxio-item-content"><?php echo $item[ 'ebooks_e_materiais_section_1_item_content' ]; ?></div>

                                <?php endif; ?>

	                        </div>
	                        <!-- /,conexao-praxio-item-img -->

	                        <div class="ebooks-e-materiais-content conexao-praxio-item-title-wrapper">

	                            <?php if( strlen( $item[ 'ebooks_e_materiais_section_1_button_url' ] ) > 0 ) : ?>

		                            <a href="<?php echo $item[ 'ebooks_e_materiais_section_1_button_url' ]; ?>" target="<?php echo $item[ 'ebooks_e_materiais_section_1_url_target' ]; ?>">

	                            <?php endif; ?>

	                                <h3 class="section-title conexao-praxio-item-title-text">
	                                    <?php echo $item[ 'ebooks_e_materiais_section_1_item_title' ]; ?>
	                                </h3>

	                            <?php if( strlen( $item[ 'ebooks_e_materiais_section_1_button_url' ] ) > 0 ) : ?>
		                            </a>
	                            <?php endif; ?>


	                        </div>
	                        <!-- /.ebooks-e-materiais-content -->
	                    
	                        <div class="m-b-80"></div>
	                    
	                    </div>
	                    <!-- /.col-sm-6 col-md-4 col-lg-3 -->

                    <?php endforeach; ?>

                </div>
                <!-- /.row -->

            </div>
            <!-- /.container -->
        </div>
        <!-- /.ebooks-e-materiais-section-1 -->
    
    <?php endif; ?>

</article>
