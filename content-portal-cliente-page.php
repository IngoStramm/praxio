<?php
/**
 * Developer: Marcio Seabra.
 * Software: ® Proovly - Social proof
 * Praxio - content-portal-cliente-page.php
 * Date: 24/04/2019
 * Time: 14:11
 */
?>

<?php
$utils = new Utils;
$post_id = get_the_ID();
$meta = get_post_meta( $post_id, '', true );
$portal_cliente_banner_show = get_post_meta( $post_id, 'portal_cliente_banner_show', true );
$portal_cliente_banner_img = get_post_meta( $post_id, 'portal_cliente_banner_img', true );
$portal_cliente_banner_linha_1 = get_post_meta( $post_id, 'portal_cliente_banner_linha_1', true );
$portal_cliente_banner_linha_2 = get_post_meta( $post_id, 'portal_cliente_banner_linha_2', true );
$portal_cliente_banner_linha_3 = get_post_meta( $post_id, 'portal_cliente_banner_linha_3', true );
$portal_cliente_banner_text = get_post_meta( $post_id, 'portal_cliente_banner_text', true );
$portal_cliente_banner_ul_list = get_post_meta( $post_id, 'portal_cliente_banner_content', true );
$portal_cliente_banner_btn_url = get_post_meta( $post_id, 'portal_cliente_banner_btn_url', true );
$portal_cliente_banner_btn_txt = get_post_meta( $post_id, 'portal_cliente_banner_btn_txt', true );
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'portal-cliente' ); ?>>

    <?php if( $portal_cliente_banner_show ) : ?>
        <div class="page-banner portal-cliente-banner" style="background-image: url(<?php echo $portal_cliente_banner_img; ?>);">

            <div class="container">
                <div class="row">
                    <div class="p-b-40"></div>
                    <div class="clearfix m-t-120 hidden-xs hidden-sm"></div>

                    <div class="col-lg-6 col-md-6 col-lg-offset-1">

                        <h3 class="portal-cliente-banner-line-2"><?php echo wp_kses_decode_entities( $portal_cliente_banner_linha_1 ); ?></h3>
                        <h1 class="portal-cliente-banner-line-1"><?php echo wp_kses_decode_entities( $portal_cliente_banner_linha_2 ); ?></h1>
                        <div class="clearfix m-b-20"></div>
                        <div class="portal-cliente-banner-line-3"><?php echo wp_kses_decode_entities( $portal_cliente_banner_linha_3 ); ?></div>

                    </div>
                    <!-- /.col-lg-4 -->

                    <div class="col-lg-4 col-md-4 text-center">
                        <div class="p-b-60"></div>
                        <div class="portal-cliente-banner-text"><?php echo $utils->nl2p( $portal_cliente_banner_text ); ?></div>

                        <div class="portal-cliente-banner-ul-list list-ul list-ul-arrow-2 list-ul-font-white m-t-30 p-b-5"><?php echo $utils->nl2p( $portal_cliente_banner_ul_list ); ?></div>

                        <a href="<?php echo $portal_cliente_banner_btn_url; ?>" class="portal-cliente-banner-btn prx-btn prx-btn-inline" style="position: relative;">
                            <?php echo $portal_cliente_banner_btn_txt ?>
                        </a>

                    </div>
                    <!-- /.col-lg-4 -->

                    <div class="clearfix m-b-60"></div>

                    <div class="col-md-5 col-md-offset-2">
                        <div class="prx-linha prx-linha-b">
                            <div class="prx-linha prx-linha-l prx-linha-t prx-linha-radius-1 hidden-xs" style="position: absolute; top: 0; right: 100%; height: 65px; width: 60px;"></div>
                            <div class="prx-linha prx-linha-t hidden-xs hidden-sm" style="position: absolute;bottom: -2px;left: 100%;width: 420px;margin-left: 50px;height: 0;"></div>
                        </div>
                    </div>
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
    $portal_cliente_section_1_show = get_post_meta( $post_id, 'portal_cliente_section_1_show', true );
    $portal_cliente_section_1_itens = get_post_meta( $post_id, 'portal_cliente_section_1_item', true );
    //var_dump($portal_cliente_section_1_itens);die;
    ?>

    <?php if( $portal_cliente_section_1_show ) : ?>

        <div class="portal-cliente-section-1">

            <div class="clearfix m-t-50"></div>

            <div class="container">
                <div class="row display-flex">
                    <?php foreach( $portal_cliente_section_1_itens as $item ) : ?>
                    <div class="col-md-3">
                        <div class="portal-cliente-section-1-img"><img src="<?php echo $item['portal_cliente_section_1_img']; ?>" alt=""></div>
                        <div class="portal-cliente-content">
                            <?php if(strlen($item['portal_cliente_section_1_button_url']) > 0) : ?>
                            <a href="<?php echo $item['portal_cliente_section_1_button_url']; ?>" target="<?php echo $item['portal_cliente_section_1_url_target']; ?>">
                                <h3 class="section-title">
                                    <?php echo $item['portal_cliente_section_1_item_title']; ?>
                                </h3>
                                <p><?php echo $item['portal_cliente_section_1_item_content']; ?></p>
                            </a>
                            <?php else : ?>
                                <h3 class="section-title">
                                    <?php echo $item['portal_cliente_section_1_item_title']; ?>
                                </h3>
                                <p><?php echo $item['portal_cliente_section_1_item_content']; ?></p>
                            <?php endif; ?>
                        </div>
                        <div class="m-b-50"></div>
                    </div>
                    <?php endforeach; ?>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </div>
        <!-- /.portal-cliente-section-1 -->

    <?php endif; ?>

</article>
