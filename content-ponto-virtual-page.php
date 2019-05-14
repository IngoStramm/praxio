<?php
/**
 * Developer: Marcio Seabra.
 * Software: ® Proovly - Social proof
 * Praxio - content-ponto-virtual-page.php
 * Date: 22/04/2019
 * Time: 13:19
 */
?>

<?php
	$utils = new Utils;
	$post_id = get_the_ID();
	$meta = get_post_meta( $post_id, '', true );
	$ponto_virtual_banner_show = get_post_meta( $post_id, 'ponto_virtual_banner_show', true );
	$ponto_virtual_banner_img = get_post_meta( $post_id, 'ponto_virtual_banner_img', true );
	$ponto_virtual_banner_linha_1 = get_post_meta( $post_id, 'ponto_virtual_banner_linha_1', true );
	$ponto_virtual_banner_linha_2 = get_post_meta( $post_id, 'ponto_virtual_banner_linha_2', true );
	$ponto_virtual_banner_linha_3 = get_post_meta( $post_id, 'ponto_virtual_banner_linha_3', true );
	$ponto_virtual_banner_text = get_post_meta( $post_id, 'ponto_virtual_banner_text', true );
	$ponto_virtual_banner_ul_list = get_post_meta( $post_id, 'ponto_virtual_banner_content', true );
	$ponto_virtual_banner_btn_url = get_post_meta( $post_id, 'ponto_virtual_banner_btn_url', true );
	$ponto_virtual_banner_btn_txt = get_post_meta( $post_id, 'ponto_virtual_banner_btn_txt', true );
?>

<?php $solucoes_form_id = get_post_meta( $post_id, 'solucoes_form_id', true ); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'ponto-virtual' ); ?>>

    <?php if( $ponto_virtual_banner_show ) : ?>
        <div class="page-banner ponto-virtual-banner" style="background-image: url(<?php echo $ponto_virtual_banner_img; ?>);">

            <div class="container">
                <div class="row">

                    <div class="clearfix m-t-120 hidden-xs hidden-sm"></div>

                    <div class="clearfix m-t-80"></div>

                    <div class="col-lg-4 col-md-6 col-lg-offset-1">

                        <h3 class="ponto-virtual-banner-line-2"><?php echo wp_kses_decode_entities( $ponto_virtual_banner_linha_1 ); ?></h3>
                        <h1 class="ponto-virtual-banner-line-1"><?php echo wp_kses_decode_entities( $ponto_virtual_banner_linha_2 ); ?></h1>
                        <div class="clearfix m-b-20"></div>
                        <div class="ponto-virtual-banner-line-3"><?php echo wp_kses_decode_entities( $ponto_virtual_banner_linha_3 ); ?></div>

                    </div>
                    <!-- /.col-lg-4 -->

                    <div class="clearfix m-b-40 visible-xs visible-sm"></div>

                    <div class="col-lg-4 col-md-6 col-lg-offset-1">

                        <div class="prx-linha prx-linha-l prx-linha-radius-4 hidden-xs" style="position: absolute; top: -10px; right: 100%; width: 40px;">

                            <div class="prx-linha prx-linha-b prx-linha-radius-4" style="position: absolute; bottom: 0; left: 0; right: 0;"></div>

                        </div>
                        <!-- /.prx-linha -->

                        <div class="ponto-virtual-banner-text"><?php echo $utils->nl2p( $ponto_virtual_banner_text ); ?></div>

                        <div class="ponto-virtual-banner-ul-list list-ul list-ul-arrow-2 list-ul-font-white m-t-30"><?php echo $utils->nl2p( $ponto_virtual_banner_ul_list ); ?></div>

                        <div class="clearfix m-t-80"></div>

                        <?php if( $solucoes_form_id ) : ?>

	                        <a href="#<?php //echo $ponto_virtual_banner_btn_url; ?>" class="ponto-virtual-banner-btn prx-btn prx-btn-inline" style="position: relative;" data-toggle="modal" data-target="#prx-modal-solucoes">
	                            <?php echo $ponto_virtual_banner_btn_txt ?>
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
    /**
     * SESSION 1
     */
    $ponto_virtual_section_1_show = get_post_meta( $post_id, 'ponto_virtual_section_1_show', true );
    $ponto_virtual_section_1_title = get_post_meta( $post_id, 'ponto_virtual_section_1_title', true );
    $ponto_virtual_section_1_itens = get_post_meta( $post_id, 'ponto_virtual_section_1_itens_item', true );
    ?>

    <?php if( $ponto_virtual_section_1_show ) : ?>

        <div class="ponto-virtual-section-1">

            <div class="clearfix m-t-50"></div>

            <div class="container">
                <div class="row">
                    <div class="col-md-12 b40-1"><h2 class="section-title"><?php echo $ponto_virtual_section_1_title; ?></h2></div>
                </div>
                <div class="row">
                    <?php foreach( $ponto_virtual_section_1_itens as $item ) : ?>
                        <div class="col-md-3 m-b-40">
                            <div class="number"><?php echo $item['ponto_virtual_section_1_itens_number']; ?></div>
                            <div class="separator"></div>
                            <p><?php echo $item['ponto_virtual_section_1_itens_title']; ?></p>
                        </div>
                    <?php endforeach; ?>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </div>
        <!-- /.erp-logistica-section-1 -->

    <?php endif; ?>

    <?php
    /**
    * SESSION 2
    */
    $ponto_virtual_section_2_show = get_post_meta( $post_id, 'ponto_virtual_section_2_show', true );
    $ponto_virtual_section_2_title = get_post_meta( $post_id, 'ponto_virtual_section_2_title', true );
    $ponto_virtual_section_2_subtitle = get_post_meta( $post_id, 'ponto_virtual_section_2_subtitle', true );
    $ponto_virtual_section_2_image = get_post_meta( $post_id, 'ponto_virtual_section_2_image', true );
    $ponto_virtual_section_2_items = get_post_meta( $post_id, 'ponto_virtual_section_2_itens_item', true );
    ?>
    <?php if( $ponto_virtual_section_2_show ) : ?>
        <div class="ponto-virtual-section-2 ov-h">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 b40-1"><h2 class="section-title"><?php echo $ponto_virtual_section_2_title; ?></h2></div>
                </div>
                <div class="row p-t-20">
                    <div class="col-md-6">
                        <h3 class="subtitle"><?php echo $ponto_virtual_section_2_subtitle; ?></h3>
                        <img src="<?php echo $ponto_virtual_section_2_image; ?>" alt="<?php echo $ponto_virtual_section_2_subtitle; ?>">
                    </div>
                    <div class="col-md-6 b40-1">
                        <?php foreach( $ponto_virtual_section_2_items as $item ) : ?>
                            <div>
                                <h4><?php echo $item['ponto_virtual_section_2_itens_title']; ?></h4>
                                <p><?php echo $item['ponto_virtual_section_2_itens_content']; ?></p>
                                <div class="p-b-20"></div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="p-t-50"></div>
    <?php endif; ?>

    <?php
    /**
     * SESSION 3
     */
    $ponto_virtual_section_3_show = get_post_meta( $post_id, 'ponto_virtual_section_3_show', true );
    $ponto_virtual_section_3_text = get_post_meta( $post_id, 'ponto_virtual_section_3_text', true );
    ?>

    <?php if( $ponto_virtual_section_3_show ) : ?>

        <div class="ponto-virtual-section-3">
            <div class="container">
                <div class="row">

                    <div class="col-md-12 b40-1">
                        <div class="ponto-virtual-section-3-text"><?php echo $utils->nl2p( $ponto_virtual_section_3_text ); ?></div>
                    </div>
                    <!-- /.col-md-12 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->

            <div class="clearfix m-t-80"></div>

        </div>
        <!-- /.erp-passageiro-section-1 -->

    <?php endif; ?>
    
</article>
