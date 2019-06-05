<?php
/**
 * Developer: Marcio Seabra.
 * Praxio - content-embarcador-page.php
 * Date: 23/04/2019
 * Time: 13:58
 */
?>

<?php
$utils = new Utils;
$post_id = get_the_ID();
$meta = get_post_meta( $post_id, '', true );
$embarcador_banner_show = get_post_meta( $post_id, 'embarcador_banner_show', true );
$embarcador_banner_img = get_post_meta( $post_id, 'embarcador_banner_img', true );
$embarcador_banner_linha_1 = get_post_meta( $post_id, 'embarcador_banner_linha_1', true );
$embarcador_banner_linha_2 = get_post_meta( $post_id, 'embarcador_banner_linha_2', true );
$embarcador_banner_linha_3 = get_post_meta( $post_id, 'embarcador_banner_linha_3', true );
$embarcador_banner_text = get_post_meta( $post_id, 'embarcador_banner_text', true );
$embarcador_banner_ul_list = get_post_meta( $post_id, 'embarcador_banner_ul_list', true );
$embarcador_banner_btn_url = get_post_meta( $post_id, 'embarcador_banner_btn_url', true );
$embarcador_banner_btn_txt = get_post_meta( $post_id, 'embarcador_banner_btn_txt', true );
?>

<?php $solucoes_form_id = get_post_meta( $post_id, 'solucoes_form_id', true ); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'embarcador' ); ?>>
    <?php if( $embarcador_banner_show ) : ?>
        <div class="page-banner embarcador-banner" style="background-image: url(<?php echo $embarcador_banner_img; ?>);">

            <div class="container">
                <div class="row">

                    <div class="clearfix m-t-120 hidden-xs hidden-sm"></div>

                    <div class="clearfix m-t-80"></div>

                    <div class="col-lg-4 col-md-6 col-lg-offset-1">

                        <h1 class="embarcador-banner-line-1"><?php echo wp_kses_decode_entities( $embarcador_banner_linha_1 ); ?></h1>
                        <h3 class="embarcador-banner-line-2"><?php echo wp_kses_decode_entities( $embarcador_banner_linha_2 ); ?></h3>
                        <div class="clearfix m-b-20"></div>
                        <div class="embarcador-banner-line-3"><?php echo wp_kses_decode_entities( $embarcador_banner_linha_3 ); ?></div>

                    </div>
                    <!-- /.col-lg-4 -->

                    <div class="clearfix m-b-40 visible-xs visible-sm"></div>

                    <div class="col-lg-4 col-md-6 col-lg-offset-1">

                        <div class="prx-linha prx-linha-l prx-linha-radius-4 hidden-xs" style="position: absolute; top: -10px; right: 100%; width: 40px;">

                            <div class="prx-linha prx-linha-b prx-linha-radius-4" style="position: absolute; bottom: 0; left: 0; right: 0;"></div>

                        </div>
                        <!-- /.prx-linha -->

                        <div class="embarcador-banner-text"><?php echo $utils->nl2p( $embarcador_banner_text ); ?></div>

                        <div class="embarcador-banner-ul-list list-ul list-ul-arrow-2 list-ul-font-white m-t-30"><?php echo $utils->nl2p( $embarcador_banner_ul_list ); ?></div>

                        <div class="clearfix m-t-80"></div>

                        <?php if( $solucoes_form_id ) : ?>

	                        <a href="#<?php //echo $embarcador_banner_btn_url; ?>" class="embarcador-banner-btn prx-btn prx-btn-inline" style="position: relative;"data-toggle="modal" data-target="#prx-modal-solucoes">
	                            <?php echo $embarcador_banner_btn_txt ?>
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
    $embarcador_section_1_show = get_post_meta( $post_id, 'embarcador_section_1_show', true );
    $embarcador_section_1_title = get_post_meta( $post_id, 'embarcador_section_1_title', true );
    $embarcador_section_1_subtitle = get_post_meta( $post_id, 'embarcador_section_1_subtitle', true );
    $embarcador_section_1_text = get_post_meta( $post_id, 'embarcador_section_1_text', true );
    ?>

    <?php if( $embarcador_section_1_show ) : ?>

        <div class="embarcador-section-1 ov-h">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 l40-1">
                        <div class="embarcador-section-1-title"><?php echo wp_kses_decode_entities( $embarcador_section_1_title ); ?></div>
                        <div class="embarcador-section-1-subtitle"><?php echo wp_kses_decode_entities( $embarcador_section_1_subtitle ); ?></div>
                    </div>
                    <div class="col-md-7 r40-1">
                        <div class="embarcador-section-1-text"><?php echo $utils->nl2p( $embarcador_section_1_text ); ?></div>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </div>
        <!-- /.embarcador-section-1 -->

    <?php endif; ?>

    <?php
    /**
     * SESSION 2
     */
    $embarcador_section_2_show = get_post_meta( $post_id, 'embarcador_section_2_show', true );
    $embarcador_section_2_title = get_post_meta( $post_id, 'embarcador_section_2_title', true );
    $embarcador_section_2_img = get_post_meta( $post_id, 'embarcador_section_2_img', true );
    $embarcador_section_2_aba = get_post_meta( $post_id, 'embarcador_section_2_aba', true );
    $embarcador_section_2_title_button = get_post_meta( $post_id, 'embarcador_section_2_title_button', true );
    $embarcador_section_2_icon_tab = get_post_meta( $post_id, 'embarcador_section_2_icon_tab', true );
    $embarcador_section_2_icon_tab_active = get_post_meta( $post_id, 'embarcador_section_2_icon_tab_active', true );
    $embarcador_section_2_linha_1 = get_post_meta( $post_id, 'embarcador_section_2_linha_1', true );
    $embarcador_section_2_linha_2 = get_post_meta( $post_id, 'embarcador_section_2_linha_2', true );
    ?>

    <?php if( $embarcador_section_2_show ) : ?>

        <div class="embarcador-section-2-header ov-h">
            <div class="container">
                <div class="row">
                    <div class="col-md-11 b40-1">
                        <div class="prx-linha prx-linha-l prx-linha-t prx-linha-radius-1 hidden-xs hidden-sm" style="position: absolute; top: 0; left: 100%; width: 9999px;">
                            <div class="prx-linha prx-linha-r" style="position: absolute; top: 100%; right: 100%; width: 0;"></div>
                        </div>
                        <h1 class="section-title"><?php echo $embarcador_section_2_title; ?></h1>
                    </div>
                </div>
            </div>
        </div>

        <div class="embarcador-section-2 ov-h">

            <div class="container">

                <div class="row">

                    <div class="embarcador-section-2-bg p-t-40" style="background-image: url(<?php echo $embarcador_section_2_img; ?>);">

                        <div class="col-md-5 col-md-offset-1 l40-1" style="z-index: 9;">

                            <ul class="embarcador-section-2-abas">

                                <?php $i = 0; ?>

                                <?php foreach( $embarcador_section_2_aba as $aba ) : ?>

                                    <li class="embarcador-section-2-aba-item<?php echo $i == 0 ? ' active' : ''; ?>">
                                        <a class="prx-btn embarcador-section-2-aba-btn" data-toggle="pill" href="#embarcador-section-2-aba-<?php echo $i + 1; ?>">
                                            <?php echo $aba[ 'embarcador_section_2_title_button' ]; ?>

                                            <figure class="embarcador-section-2-tabs-figure">
                                                <img id="embarcador_section_2_tabs_icon_tab" src="<?php echo $aba[ 'embarcador_section_2_icon_tab' ]; ?>" class="embarcador-section-2-tabs-icon">
                                                <img id="embarcador_section_2_tabs_icon_tab_active" src="<?php echo $aba[ 'embarcador_section_2_icon_tab_active' ]; ?>" class="embarcador-section-2-tabs-icon">
                                            </figure>
                                        </a>
                                    </li>
                                    <!-- /.embarcador-section-2-aba-btn -->

                                    <?php $i++; ?>

                                <?php endforeach; ?>

                            </ul>
                            <!-- /.nav nav-pills -->

                            <div class="clearfix p-b-40"></div>

                        </div>
                        <!-- /.col-md-5 -->

                        <div class="col-md-5 r40-1">

                            <div class="tab-content embarcador-section-2-tab-content" style="position: relative; z-index: 9;">

                                <?php $i = 0; ?>

                                <?php foreach( $embarcador_section_2_aba as $aba ) : ?>

                                    <div id="embarcador-section-2-aba-<?php echo $i + 1; ?>" class="embarcador-section-2-aba-content tab-pane fade in<?php echo $i == 0 ? ' active' : ''; ?>">

                                        <h3 class="embarcador-section-2-aba-linha-1"><?php echo $aba[ 'embarcador_section_2_linha_1' ]; ?></h3>

                                        <div class="cleafix m-b-4h0"></div>

                                        <div class="embarcador-section-2-aba-linha-2 list-ul list-ul-arrow-1 list-ul-font-white"><?php echo $utils->nl2p( $aba[ 'embarcador_section_2_linha_2' ] ); ?></div>

                                    </div>
                                    <!-- /.embarcador-section-2-aba-content -->

                                    <?php $i++; ?>

                                <?php endforeach; ?>

                            </div>
                            <!-- /.tab-content -->

                            <div class="clearfix p-b-40"></div>

                        </div>
                        <!-- /.col-md-5 -->
                    </div>

                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </div>
        <!-- /.embarcador-section-2 -->

    <?php endif; ?>

    <?php
    /**
     * SESSION 3
     */
    $embarcador_section_3_show = get_post_meta( $post_id, 'embarcador_section_3_show', true );
    $embarcador_section_3_title = get_post_meta( $post_id, 'embarcador_section_3_title', true );
    $embarcador_section_3_subtitle = get_post_meta( $post_id, 'embarcador_section_3_subtitle', true );
    $embarcador_section_3_image = get_post_meta( $post_id, 'embarcador_section_3_img', true );
    $embarcador_section_3_items = get_post_meta( $post_id, 'embarcador_section_3_item', true );
    ?>
    <?php if( $embarcador_section_3_show ) : ?>
        <div class="embarcador-section-3 ov-h">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 b40-1"><h2 class="section-title"><?php echo $embarcador_section_3_title; ?></h2></div>
                </div>
                <div class="row p-t-20">
                    <div class="col-md-6 l40-1">
                        <h3 class="subtitle"><?php echo $embarcador_section_3_subtitle; ?></h3>
                        <img src="<?php echo $embarcador_section_3_image; ?>" alt="<?php echo $embarcador_section_3_subtitle; ?>">
                    </div>
                    <div class="col-md-6 r40-1">
                        <?php foreach( $embarcador_section_3_items as $item ) : ?>
                            <div>
                                <h4><?php echo $item['embarcador_section_3_item_title']; ?></h4>
                                <p><?php echo $item['embarcador_section_3_item_content']; ?></p>
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
     * SESSION 4
     */
    $embarcador_section_4_show = get_post_meta( $post_id, 'embarcador_section_4_show', true );
    $embarcador_section_4_title = get_post_meta( $post_id, 'embarcador_section_4_title', true );
    $embarcador_section_4_btn = get_post_meta( $post_id, 'embarcador_section_4_text_button', true );
    $embarcador_section_4_url = get_post_meta( $post_id, 'embarcador_section_4_button_url', true );
    $embarcador_section_4_bg = get_post_meta( $post_id, 'embarcador_section_4_background', true );
    ?>
    <?php if( $embarcador_section_4_show ) : ?>
        <div class="embarcador-section-4 p-b-60 p-t-50" style="background-image: url(<?php echo $embarcador_section_4_bg; ?>);">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1 b40-1">
                        <h2 class="section-title"><?php echo $embarcador_section_4_title; ?></h2>

                        <?php if( $solucoes_form_id ) : ?>
                        	
	                        <a href="#<?php //echo $embarcador_section_4_url; ?>" class="erp-logistica-btn prx-btn prx-btn-inline" style="position: relative;" data-toggle="modal" data-target="#prx-modal-solucoes">
	                            <?php echo $embarcador_section_4_btn; ?>
	                        </a>

                        <?php endif; ?>

                    </div>
                </div>
            </div>
        </div>
        <div class="m-b-80"></div>
    <?php endif; ?>

    <?php
    /**
     * SESSION 5
     */
    $embarcador_section_5_show = get_post_meta( $post_id, 'embarcador_section_5_show', true );
    $embarcador_section_5_title = get_post_meta( $post_id, 'embarcador_section_5_title', true );
    $embarcador_section_5_subtitle = get_post_meta( $post_id, 'embarcador_section_5_subtitle', true );
    $embarcador_section_5_text = get_post_meta( $post_id, 'embarcador_section_5_content', true );
    ?>

    <?php if( $embarcador_section_5_show ) : ?>

        <div class="embarcador-section-1 ov-h">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 l40-1">
                        <div class="embarcador-section-1-title"><?php echo wp_kses_decode_entities( $embarcador_section_5_title ); ?></div>
                        <div class="embarcador-section-1-subtitle"><?php echo wp_kses_decode_entities( $embarcador_section_5_subtitle ); ?></div>
                    </div>
                    <div class="col-md-7 r40-1">
                        <div class="embarcador-section-1-text"><?php echo $utils->nl2p( $embarcador_section_5_text ); ?></div>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </div>
        <!-- /.embarcador-section-1 -->

    <?php endif; ?>

    <?php get_template_part( 'inc/laf/parts/integracoes', 'section' ); ?>

</article>
