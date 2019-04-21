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
	$erp_passageiro_banner_show = get_post_meta( $post_id, 'erp_passageiro_banner_show', true );
	$erp_passageiro_banner_img = get_post_meta( $post_id, 'erp_passageiro_banner_img', true );
	$erp_passageiro_banner_linha_1 = get_post_meta( $post_id, 'erp_passageiro_banner_linha_1', true );
	$erp_passageiro_banner_linha_2 = get_post_meta( $post_id, 'erp_passageiro_banner_linha_2', true );
	$erp_passageiro_banner_linha_3 = get_post_meta( $post_id, 'erp_passageiro_banner_linha_3', true );
	$erp_passageiro_banner_text = get_post_meta( $post_id, 'erp_passageiro_banner_text', true );
	$erp_passageiro_banner_ul_list = get_post_meta( $post_id, 'erp_passageiro_banner_ul_list', true );
	$erp_passageiro_banner_btn_url = get_post_meta( $post_id, 'erp_passageiro_banner_btn_url', true );
	$erp_passageiro_banner_btn_txt = get_post_meta( $post_id, 'erp_passageiro_banner_btn_txt', true );
?>


<article id="post-<?php the_ID(); ?>" <?php post_class( 'erp-passageiro' ); ?>>

	<?php if( $erp_passageiro_banner_show ) : ?>

		<div class="page-banner erp-passageiro-banner" style="background-image: url(<?php echo $erp_passageiro_banner_img; ?>);">


			<div class="container">
				<div class="row">
					
					<div class="clearfix m-t-120 hidden-xs hidden-sm"></div>

					<div class="clearfix m-t-80"></div>
					
					<div class="col-lg-4 col-md-6 col-lg-offset-1">

						<h1 class="erp-passageiro-banner-line-1"><?php echo wp_kses_decode_entities( $erp_passageiro_banner_linha_1 ); ?></h1>
						<h3 class="erp-passageiro-banner-line-2"><?php echo wp_kses_decode_entities( $erp_passageiro_banner_linha_2 ); ?></h3>
						<div class="clearfix m-b-20"></div>
						<div class="erp-passageiro-banner-line-3"><?php echo wp_kses_decode_entities( $erp_passageiro_banner_linha_3 ); ?></div>
						
					</div>
					<!-- /.col-lg-4 -->

					<div class="clearfix m-b-40 visible-xs visible-sm"></div>

					<div class="col-lg-4 col-md-6 col-lg-offset-1">

						<div class="prx-linha prx-linha-l prx-linha-radius-4 hidden-xs" style="position: absolute; top: -10px; right: 100%; width: 40px;">

							<div class="prx-linha prx-linha-b prx-linha-radius-4" style="position: absolute; bottom: 0; left: 0; right: 0;"></div>

						</div>
						<!-- /.prx-linha -->

						<div class="erp-passageiro-banner-text"><?php echo $utils->nl2p( $erp_passageiro_banner_text ); ?></div>

                        <div class="erp-passageiro-banner-ul-list list-ul list-ul-arrow-2 list-ul-font-white m-t-30"><?php echo $utils->nl2p( $erp_passageiro_banner_ul_list ); ?></div>

						<div class="clearfix m-t-80"></div>

						<a href="<?php echo $erp_passageiro_banner_btn_url; ?>" class="erp-passageiro-banner-btn prx-btn prx-btn-inline" style="position: relative;">
							<?php echo $erp_passageiro_banner_btn_txt ?>
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
    $erp_passageiro_section_1_show = get_post_meta( $post_id, 'erp_passageiro_section_1_show', true );
    $erp_passageiro_section_1_text = get_post_meta( $post_id, 'erp_passageiro_section_1_text', true );
    $erp_passageiro_section_1_title = get_post_meta( $post_id, 'erp_passageiro_section_1_title', true );
    ?>

    <?php if( $erp_passageiro_section_1_show ) : ?>

        <div class="erp-passageiro-section-1">

            <div class="clearfix m-t-80"></div>

            <div class="container">
                <div class="row">

                    <div class="col-md-5 col-lg-offset-1">
                        <div class="erp-passageiro-section-1-text"><?php echo $utils->nl2p( $erp_passageiro_section_1_text ); ?></div>
                    </div>
                    <!-- /.col-md-6 -->

                    <div class="clearfix m-b-40 visible-xs visible-sm"></div>

                    <div class="col-md-6">
                        <div class="erp-passageiro-section-1-title"><?php echo wp_kses_decode_entities( $erp_passageiro_section_1_title ); ?></div>
                    </div>
                    <!-- /.col-md-6 -->

                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->

            <div class="clearfix m-t-80"></div>

        </div>
        <!-- /.erp-passageiro-section-1 -->

    <?php endif; ?>

    <?php
    /**
     * SESSION 2
     */
    $show_section_2 = get_post_meta( $post_id, 'erp_passageiro_section_2_show', true );
    $erp_passageiro_section_2_text_1 = get_post_meta( $post_id, 'erp_passageiro_section_2_text_1', true );
    $erp_passageiro_section_2_tabs_slide = get_post_meta( $post_id, 'erp_passageiro_section_2_tabs_slide', true );
    ?>

    <?php if( $show_section_2 ) : ?>
    <div class="erp-passageiro-section-2 section">

        <div class="block block-cinza" style="overflow: hidden;">

            <div class="clearfix visible-xs visible-sm m-t-80"></div>

            <div class="container">
                <div class="row">

                    <div class="row-height">

                        <div class="col-md-5 col-md-height col-md-middle">

                            <div style="position: absolute; top: -250px; height: 1000px; left: -45px;"></div>

                            <div class="row">
                                <div class="col-md-9 col-md-offset-1 text-center">

                                    <h3 class="section-subtitle"><?php echo $erp_passageiro_section_2_text_1; ?></h3>

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
                                    <?php foreach( $erp_passageiro_section_2_tabs_slide as $tab ) : ?>

                                        <li<?php echo $i == 0 ? ' class="active"' : '' ?>>

                                            <a data-toggle="tab" href="#menu-<?php echo $i + 1; ?>">

                                                <div class="clearfix m-t-30"></div>

                                                <figure class="prx-tabs-figure">
                                                    <img id="erp_passageiro_section_2_tabs_icon_tab" src="<?php echo $tab[ 'erp_passageiro_section_2_tabs_icon_tab' ]; ?>" class="prx-tabs-icon">
                                                    <img id="erp_passageiro_section_2_tabs_icon_tab_active" src="<?php echo $tab[ 'erp_passageiro_section_2_tabs_icon_tab_active' ]; ?>" class="prx-tabs-icon">
                                                </figure>
                                                <!-- /.prx-tabs-figure -->
                                                <div class="prx-nav-tabs-title"><?php echo $tab[ 'erp_passageiro_section_2_tabs_title_tab' ]; ?></div>

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

                    <div class="col-md-12 col-md-height col-md-middle">

                        <div class="prx-tabs">

                            <div class="tab-content">

                                <?php $i = 0; ?>
                                <?php foreach( $erp_passageiro_section_2_tabs_slide as $tab ) : ?>

                                    <div id="menu-<?php echo $i + 1; ?>" class="tab-pane fade in<?php echo $i == 0 ? ' active' : '' ?>">
                                        <h2 class="p-b-15"><strong><?php echo $utils->nl2p( $tab[ 'erp_passageiro_section_2_tabs_title_text_tab' ] ); ?></strong></h2>
                                        <?php echo $utils->nl2p( $tab[ 'erp_passageiro_section_2_tabs_text_tab' ] ); ?>
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

                    <!-- ./row-height -->

                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->

        </div>
        <!-- /.section-2 section -->
        <?php endif; ?>

        <?php
        /**
         * SESSION 3
         */
        $erp_passageiro_section_3_show = get_post_meta( $post_id, 'erp_passageiro_section_3_show', true );
        $erp_passageiro_section_3_title = get_post_meta( $post_id, 'erp_passageiro_section_3_title', true );
        $erp_passageiro_section_3_title_2 = get_post_meta( $post_id, 'erp_passageiro_section_3_title_2', true );
        $erp_passageiro_section_3_text = get_post_meta( $post_id, 'erp_passageiro_section_3_text', true );
        ?>

        <?php if( $erp_passageiro_section_3_show ) : ?>

            <div class="erp-passageiro-section-3">

                <div class="container">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="erp-passageiro-section-3-title">
                                <?php echo wp_kses_decode_entities( $erp_passageiro_section_3_title ); ?>
                                <br>
                                <?php echo wp_kses_decode_entities( $erp_passageiro_section_3_title_2 ); ?>
                            </div>
                        </div>
                        <!-- /.col-md-6 -->

                        <div class="clearfix m-b-40 visible-xs visible-sm"></div>

                        <div class="col-md-6">
                            <div class="erp-passageiro-section-3-text"><?php echo $utils->nl2p( $erp_passageiro_section_3_text ); ?></div>
                        </div>
                        <!-- /.col-md-6 -->

                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container -->

                <div class="clearfix m-t-80"></div>

            </div>
            <!-- /.erp-passageiro-section-1 -->

        <?php endif; ?>

        <?php
        /**
         * SESSION 4
         */
        $erp_passageiro_section_4_show = get_post_meta( $post_id, 'erp_passageiro_section_4_show', true );
        $erp_passageiro_section_4_img = get_post_meta( $post_id, 'erp_passageiro_section_4_img', true );
        $erp_passageiro_section_4_aba = get_post_meta( $post_id, 'erp_passageiro_section_4_aba', true );
        $erp_passageiro_section_4_title_button = get_post_meta( $post_id, 'erp_passageiro_section_4_title_button', true );
        $erp_passageiro_section_4_icon_tab = get_post_meta( $post_id, 'erp_passageiro_section_4_icon_tab', true );
        $erp_passageiro_section_4_icon_tab_active = get_post_meta( $post_id, 'erp_passageiro_section_4_icon_tab_active', true );
        $erp_passageiro_section_4_linha_1 = get_post_meta( $post_id, 'erp_passageiro_section_4_linha_1', true );
        $erp_passageiro_section_4_linha_2 = get_post_meta( $post_id, 'erp_passageiro_section_4_linha_2', true );
        ?>

        <?php if( $erp_passageiro_section_4_show ) : ?>

            <div class="erp-passageiro-section-4">

                <div class="container">

                    <div class="row">

                        <div class="erp-passageiro-section-4-bg p-t-40" style="background-image: url(<?php echo $erp_passageiro_section_4_img; ?>);">

                        <div class="col-md-5 col-md-offset-1" style="z-index: 9;">

                            <ul class="erp-passageiro-section-4-abas">

                                <?php $i = 0; ?>

                                <?php foreach( $erp_passageiro_section_4_aba as $aba ) : ?>

                                    <li class="erp-passageiro-section-4-aba-item<?php echo $i == 0 ? ' active' : ''; ?>">
                                        <a class="prx-btn erp-passageiro-section-4-aba-btn" data-toggle="pill" href="#erp-passageiro-section-4-aba-<?php echo $i + 1; ?>">
                                            <?php echo $aba[ 'erp_passageiro_section_4_title_button' ]; ?>

                                            <figure class="erp-passageiro-section-4-tabs-figure">
                                            <img id="erp_passageiro_section_4_tabs_icon_tab" src="<?php echo $aba[ 'erp_passageiro_section_4_icon_tab' ]; ?>" class="erp-passageiro-section-4-tabs-icon">
                                            <img id="erp_passageiro_section_4_tabs_icon_tab_active" src="<?php echo $aba[ 'erp_passageiro_section_4_icon_tab_active' ]; ?>" class="erp-passageiro-section-4-tabs-icon">
                                            </figure>
                                        </a>
                                    </li>
                                    <!-- /.erp-passageiro-section-4-aba-btn -->

                                    <?php $i++; ?>

                                <?php endforeach; ?>

                            </ul>
                            <!-- /.nav nav-pills -->

                            <div class="clearfix p-b-40"></div>

                        </div>
                        <!-- /.col-md-5 -->

                        <div class="col-md-5">

                            <div class="tab-content erp-passageiro-section-4-tab-content" style="position: relative; z-index: 9;">

                                <?php $i = 0; ?>

                                <?php foreach( $erp_passageiro_section_4_aba as $aba ) : ?>

                                    <div id="erp-passageiro-section-4-aba-<?php echo $i + 1; ?>" class="erp-passageiro-section-4-aba-content tab-pane fade in<?php echo $i == 0 ? ' active' : ''; ?>">

                                        <h3 class="erp-passageiro-section-4-aba-linha-1"><?php echo $aba[ 'erp_passageiro_section_4_linha_1' ]; ?></h3>

                                        <div class="cleafix m-b-4h0"></div>

                                        <div class="erp-passageiro-section-4-aba-linha-2 list-ul list-ul-arrow-1 list-ul-font-white"><?php echo $utils->nl2p( $aba[ 'erp_passageiro_section_4_linha_2' ] ); ?></div>

                                    </div>
                                    <!-- /.erp-passageiro-section-4-aba-content -->

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
            <!-- /.erp-passageiro-section-4 -->

        <?php endif; ?>

</article><!-- #post-## -->