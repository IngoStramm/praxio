<?php
/**
 * Developer: Marcio Seabra.
 * Software: ® Proovly - Social proof
 * Praxio - content-erp-logistica-page.php
 * Date: 21/04/2019
 * Time: 09:15
 */
?>
<?php
	$utils = new Utils;
	$post_id = get_the_ID();
	$meta = get_post_meta( $post_id, '', true );
	$erp_logistica_banner_show = get_post_meta( $post_id, 'erp_logistica_banner_show', true );
	$erp_logistica_banner_img = get_post_meta( $post_id, 'erp_logistica_banner_img', true );
	$erp_logistica_banner_linha_1 = get_post_meta( $post_id, 'erp_logistica_banner_linha_1', true );
	$erp_logistica_banner_linha_2 = get_post_meta( $post_id, 'erp_logistica_banner_linha_2', true );
	$erp_logistica_banner_linha_3 = get_post_meta( $post_id, 'erp_logistica_banner_linha_3', true );
	$erp_logistica_banner_text = get_post_meta( $post_id, 'erp_logistica_banner_text', true );
	$erp_logistica_banner_ul_list = get_post_meta( $post_id, 'erp_logistica_banner_content', true );
	$erp_logistica_banner_btn_url = get_post_meta( $post_id, 'erp_logistica_banner_btn_url', true );
	$erp_logistica_banner_btn_txt = get_post_meta( $post_id, 'erp_logistica_banner_btn_txt', true );
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'erp-logistica' ); ?>>
    <?php if( $erp_logistica_banner_show ) : ?>
        <div class="page-banner erp-logistica-banner" style="background-image: url(<?php echo $erp_logistica_banner_img; ?>);">

            <div class="container">
                <div class="row">

                    <div class="clearfix m-t-120 hidden-xs hidden-sm"></div>

                    <div class="clearfix m-t-80"></div>

                    <div class="col-lg-4 col-md-6 col-lg-offset-1">

                        <h1 class="erp-logistica-banner-line-1"><?php echo wp_kses_decode_entities( $erp_logistica_banner_linha_1 ); ?></h1>
                        <h3 class="erp-logistica-banner-line-2"><?php echo wp_kses_decode_entities( $erp_logistica_banner_linha_2 ); ?></h3>
                        <div class="clearfix m-b-20"></div>
                        <div class="erp-logistica-banner-line-3"><?php echo wp_kses_decode_entities( $erp_logistica_banner_linha_3 ); ?></div>

                    </div>
                    <!-- /.col-lg-4 -->

                    <div class="clearfix m-b-40 visible-xs visible-sm"></div>

                    <div class="col-lg-4 col-md-6 col-lg-offset-1">

                        <div class="prx-linha prx-linha-l prx-linha-radius-4 hidden-xs" style="position: absolute; top: -10px; right: 100%; width: 40px;">

                            <div class="prx-linha prx-linha-b prx-linha-radius-4" style="position: absolute; bottom: 0; left: 0; right: 0;"></div>

                        </div>
                        <!-- /.prx-linha -->

                        <div class="erp-logistica-banner-text"><?php echo $utils->nl2p( $erp_logistica_banner_text ); ?></div>

                        <div class="erp-logistica-banner-ul-list list-ul list-ul-arrow-2 list-ul-font-white m-t-30"><?php echo $utils->nl2p( $erp_logistica_banner_ul_list ); ?></div>

                        <div class="clearfix m-t-80"></div>

                        <a href="<?php echo $erp_logistica_banner_btn_url; ?>" class="erp-logistica-banner-btn prx-btn prx-btn-inline" style="position: relative;">
                            <?php echo $erp_logistica_banner_btn_txt ?>
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
    /**
     * SESSION 1
     */
    $erp_logistica_section_1_show = get_post_meta( $post_id, 'erp_logistica_section_1_show', true );
    $erp_logistica_section_1_text = get_post_meta( $post_id, 'erp_logistica_section_1_text', true );
    $erp_logistica_section_1_title = get_post_meta( $post_id, 'erp_logistica_section_1_title', true );
    ?>

    <?php if( $erp_logistica_section_1_show ) : ?>

        <div class="erp-logistica-section-1">

            <div class="clearfix m-t-50"></div>

            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <div class="erp-logistica-section-1-title"><?php echo wp_kses_decode_entities( $erp_logistica_section_1_title ); ?></div>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->

            <div class="clearfix m-t-30"></div>

            <div class="block block-cinza">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1">
                            <div class="clearfix p-t-30"></div>
                            <div class="erp-logistica-section-1-text"><?php echo $utils->nl2p( $erp_logistica_section_1_text ); ?></div>
                            <div class="clearfix p-t-20"></div>
                        </div>

                    </div>
                    <!-- /.row -->
                </div>
            </div>

            <div class="clearfix m-t-80"></div>

        </div>
        <!-- /.erp-logistica-section-1 -->

    <?php endif; ?>

    <?php
    /**
     * SESSION 2
     */
    $erp_logistica_section_2_show = get_post_meta( $post_id, 'erp_logistica_section_2_show', true );
    $erp_logistica_section_2_title = get_post_meta( $post_id, 'erp_logistica_section_2_title', true );
    $erp_logistica_section_2_itens = get_post_meta( $post_id, 'erp_logistica_section_2_itens_item', true );
    ?>
    <?php if( $erp_logistica_section_2_show ) : ?>
        <div class="erp-logistica-section-2">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="section-title"><?php echo $erp_logistica_section_2_title; ?></h2>
                    </div>
                </div>
                <div class="clearfix m-t-50"></div>
                <div class="row">
                    <?php foreach( $erp_logistica_section_2_itens as $item ) : ?>
                    <div class="col-md-4">
                        <img class="item-icon" src="<?php echo $item['erp_logistica_section_2_itens_icon']; ?>" alt="<?php echo $item['erp_logistica_section_2_itens_title']; ?>" align="left">
                        <h4 class="item-title"><?php echo $item['erp_logistica_section_2_itens_title']; ?></h4>
                        <div class="item-image"><img src="<?php echo $item['erp_logistica_section_2_itens_img']; ?>" alt="<?php echo $item['erp_logistica_section_2_itens_title']; ?>"></div>
                        <div class="p-b-50"></div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="clearfix m-t-20"></div>
        </div>
    <?php endif; ?>

    <?php
    /**
     * SESSION 3
     */
    $erp_logistica_section_3_show = get_post_meta( $post_id, 'erp_logistica_section_3_show', true );
    $erp_logistica_section_3_title = get_post_meta( $post_id, 'erp_logistica_section_3_title', true );
    $erp_logistica_section_3_subtitle = get_post_meta( $post_id, 'erp_logistica_section_3_subtitle', true );
    $erp_logistica_section_3_tabs = get_post_meta( $post_id, 'erp_logistica_section_3_tabs_tab', true );
    ?>
    <?php if( $erp_logistica_section_3_show ) : ?>
    <div class="erp-logistica-section-3">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="prx-linha prx-linha-b line-top">
                        <div class="prx-linha prx-linha-l prx-linha-t prx-linha-radius-1 hidden-xs line-left" style="position: absolute; top: 0; right: 100%; height: 160px; width: 60px;"></div>
                        <div class="prx-linha prx-linha-r prx-linha-t prx-linha-radius-2 hidden-xs line-right"></div>
                    </div>
                    <div class="clearfix m-b-40"></div>
                    <h2 class="section-title"><?php echo wp_kses_decode_entities( $erp_logistica_section_3_title ); ?></h2>
                    <h3 class="section-subtitle"><?php echo wp_kses_decode_entities( $erp_logistica_section_3_subtitle ); ?></h3>
                </div>
            </div>
            <div class="clearfix m-b-80"></div>
            <div class="row">
                <div class="col-md-6">
                    <ul class="erp-logistica-section-3-abas">

                        <?php $i = 0; ?>

                        <?php foreach( $erp_logistica_section_3_tabs as $aba ) : ?>

                            <li class="erp-logistica-section-3-aba-item<?php echo $i == 0 ? ' active' : ''; ?>">
                                <a class="prx-btn erp-logistica-section-3-aba-btn" data-toggle="pill" href="#erp-logistica-section-3-aba-<?php echo $i + 1; ?>">
                                    <?php echo $aba[ 'erp_logistica_section_3_tabs_title_button' ]; ?>
                                </a>
                            </li>
                            <!-- /.erp-logistica-section-3-aba-btn -->

                            <?php $i++; ?>

                        <?php endforeach; ?>

                    </ul>
                    <div class="m-b-40"></div>
                    <!-- /.nav nav-pills -->
                </div>
                <div class="col-md-6">

                    <div class="tab-content erp-logistica-section-3-tab-content" style="position: relative; z-index: 9;">

                        <?php $i = 0; ?>

                        <?php foreach( $erp_logistica_section_3_tabs as $aba ) : ?>

                            <div id="erp-logistica-section-3-aba-<?php echo $i + 1; ?>" class="erp-logistica-section-3-aba-content tab-pane fade in<?php echo $i == 0 ? ' active' : ''; ?>">

                                <div class="erp-logistica-section-3-aba-linha-2 list-ul list-ul-arrow-1">
                                    <?php echo $utils->nl2p( $aba[ 'erp_logistica_section_3_tabs_linha_2' ] ); ?>
                                </div>

                            </div>
                            <!-- /.erp-logistica-section-3-aba-content -->

                            <?php $i++; ?>

                        <?php endforeach; ?>

                    </div>
                    <!-- /.tab-content -->

                    <div class="clearfix p-b-40"></div>

                </div>
            </div>
        </div>
        <div class="clearfix m-t-80"></div>
    </div>
    <?php endif; ?>

    <?php
    /**
     * SESSION 4
     */
    $erp_logistica_section_4_show = get_post_meta( $post_id, 'erp_logistica_section_4_show', true );
    $erp_logistica_section_4_title = get_post_meta( $post_id, 'erp_logistica_section_4_title', true );
    $erp_logistica_section_4_icon = get_post_meta( $post_id, 'erp_logistica_section_4_icon', true );
    $erp_logistica_section_4_bg = get_post_meta( $post_id, 'erp_logistica_section_4_background', true );
    $erp_logistica_section_4_items = get_post_meta( $post_id, 'erp_logistica_section_4_itens_item', true );
    ?>
    <?php if( $erp_logistica_section_4_show ) : ?>
        <div class="erp-logistica-section-4 p-t-50 p-b-50" style="background-image: url(<?php echo $erp_logistica_section_4_bg; ?>);">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center"><img src="<?php echo $erp_logistica_section_4_icon; ?>" alt="<?php echo $erp_logistica_section_4_title; ?>"></div>
                    <div class="col-md-12"><h2 class="section-title"><?php echo $erp_logistica_section_4_title; ?></h2></div>
                </div>
                <div class="row p-t-20">
                    <?php foreach( $erp_logistica_section_4_items as $item ) : ?>
                    <div class="col-md-6">
                        <h4><?php echo $item['erp_logistica_section_4_itens_title']; ?></h4>
                        <p><?php echo $item['erp_logistica_section_4_itens_content']; ?></p>
                        <div class="p-b-30"></div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        <div class="p-b-80"></div>
    <?php endif; ?>

    <?php
    /**
     * SESSION 5
     */
    $erp_logistica_section_5_show = get_post_meta( $post_id, 'erp_logistica_section_5_show', true );
    $erp_logistica_section_5_title = get_post_meta( $post_id, 'erp_logistica_section_5_title', true );
    $erp_logistica_section_5_subtitle = get_post_meta( $post_id, 'erp_logistica_section_5_subtitle', true );
    $erp_logistica_section_5_image = get_post_meta( $post_id, 'erp_logistica_section_5_image', true );
    $erp_logistica_section_5_items = get_post_meta( $post_id, 'erp_logistica_section_5_itens_item', true );
    ?>
    <?php if( $erp_logistica_section_5_show ) : ?>
        <div class="erp-logistica-section-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12"><h2 class="section-title"><?php echo $erp_logistica_section_5_title; ?></h2></div>
            </div>
            <div class="row p-t-20">
                <div class="col-md-6">
                    <h3 class="subtitle"><?php echo $erp_logistica_section_5_subtitle; ?></h3>
                    <img src="<?php echo $erp_logistica_section_5_image; ?>" alt="<?php echo $erp_logistica_section_5_subtitle; ?>">
                </div>
                <div class="col-md-6">
                <?php foreach( $erp_logistica_section_5_items as $item ) : ?>
                    <div>
                        <h4><?php echo $item['erp_logistica_section_5_itens_title']; ?></h4>
                        <p><?php echo $item['erp_logistica_section_5_itens_content']; ?></p>
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
     * SESSION 6
     */
    $erp_logistica_section_6_show = get_post_meta( $post_id, 'erp_logistica_section_6_show', true );
    $erp_logistica_section_6_title = get_post_meta( $post_id, 'erp_logistica_section_6_title', true );
    $erp_logistica_section_6_btn = get_post_meta( $post_id, 'erp_logistica_section_6_text_button', true );
    $erp_logistica_section_6_url = get_post_meta( $post_id, 'erp_logistica_section_6_button_url', true );
    $erp_logistica_section_6_bg = get_post_meta( $post_id, 'erp_logistica_section_6_background', true );
    ?>
    <?php if( $erp_logistica_section_6_show ) : ?>
        <div class="erp-logistica-section-6 p-b-60 p-t-50" style="background-image: url(<?php echo $erp_logistica_section_6_bg; ?>);">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <h2 class="section-title"><?php echo $erp_logistica_section_6_title; ?></h2>
                        <a href="<?php echo $erp_logistica_section_6_url; ?>" class="erp-logistica-btn prx-btn prx-btn-inline" style="position: relative;">
                            <?php echo $erp_logistica_section_6_btn; ?>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="m-b-80"></div>
    <?php endif; ?>

    <?php
    /**
     * SESSION 7
     */
    $erp_logistica_section_7_show = get_post_meta( $post_id, 'erp_logistica_section_7_show', true );
    $erp_logistica_section_7_title = get_post_meta( $post_id, 'erp_logistica_section_7_title', true );
    $erp_logistica_section_7_slide = get_post_meta( $post_id, 'erp_logistica_section_7_slider_slide', true );
    $erp_logistica_section_7_list = get_post_meta( $post_id, 'erp_logistica_section_7_list_list', true );
    ?>

    <?php if( $erp_logistica_section_7_show ) : ?>
        <div class="erp-logistica-section-7">

            <div class="container">
                <div class="row">

                    <div class="col-md-12">
                        <h2 class="section-head"><?php echo $utils->nl2p( $erp_logistica_section_7_title ); ?></h2>
                    </div>

                    <div class="col-md-5">
                        <div class="prx-linha prx-linha-b">
                            <div class="prx-linha prx-linha-r prx-linha-t prx-linha-radius-2 hidden-xs" style="position: absolute;top: 0;left: 100%;height: 160px;width: 60px;"></div>
                        </div>

                        <div class="clearfix m-b-60"></div>

                        <div id="front-page-carousel-2" class="carousel prx-carousel slide" data-ride="carousel">

                            <!-- Wrapper for slides -->
                            <div class="carousel-inner">

                                <?php $i = 0; ?>
                                <?php foreach( $erp_logistica_section_7_slide as $slide ) : ?>

                                    <div class="item<?php echo $i > 0 ? '' : ' active' ?>">
                                        <?php // $utils->debug( $slide ); ?>

                                        <img class="img-responsive center-block" src="<?php echo $slide[ 'erp_logistica_section_7_slider_img' ]; ?>" alt="<?php echo $slide[ 'erp_logistica_section_7_slider_text' ]; ?>" style="width: 100%;">

                                        <div class="prx-carousel-block-txt"><?php echo $utils->nl2p( $slide[ 'erp_logistica_section_7_slider_text' ] ); ?></div>

                                    </div>
                                    <!-- ./item -->
                                    <?php $i++; ?>
                                <?php endforeach; ?>

                            </div>

                            <!-- Indicators -->
                            <ol class="carousel-indicators">
                                <?php $i = 0; ?>
                                <?php foreach( $erp_logistica_section_7_slide as $slide ) : ?>

                                    <li data-target="#front-page-carousel-2" data-slide-to="<?php echo $i; ?>" <?php echo $i > 0 ? '' : 'class="active"' ?>><span class="demi-circle"></span></li>
                                    <?php $i++; ?>

                                <?php endforeach; ?>
                            </ol>

                        </div>
                    </div>
                    <!-- /.col-md-6 -->

                    <div class="col-md-6">
                        <div class="clearfix p-t-60"></div>
                        <div class="box-list">

                            <?php foreach( $erp_logistica_section_7_list as $list ) : ?>
                                <div class="box-content">
                                    <div class="content-icon"><img src="<?php echo $list['erp_logistica_section_7_list_icon']; ?>" alt="<?php echo $list['erp_logistica_section_7_list_title']; ?>"></div>
                                    <div class="text-box">
                                        <h3 class="content-title"><?php echo $list['erp_logistica_section_7_list_title']; ?></h3>
                                        <div class="content-text"><?php echo $list['erp_logistica_section_7_list_text']; ?></div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                            <div class="clearfix p-b-60"></div>
                        </div>
                    </div>

                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
            <div class="clearfix p-b-80"></div>
        </div>
    <?php endif; ?>

</article>