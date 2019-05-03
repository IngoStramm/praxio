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
$portal_cliente_banner_btn_url = get_post_meta( $post_id, 'portal_cliente_banner_btn_url', true );
$portal_cliente_banner_btn_txt = get_post_meta( $post_id, 'portal_cliente_banner_btn_txt', true );
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( array( 'portal-cliente', 'conexao-praxio' ) ); ?>>

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

						<div class="prx-linha prx-linha-l prx-linha-b prx-linha-radius-4 hidden-xs" style="position: absolute; top: -10px; right: 100%; width: 40px;"></div>
						<!-- /.prx-linha -->

                        <div class="portal-cliente-banner-text"><?php echo $utils->nl2p( $portal_cliente_banner_text ); ?></div>

                        <div class="clearfix m-t-80"></div>

                        <a href="<?php echo $portal_cliente_banner_btn_url; ?>" class="portal-cliente-banner-btn prx-btn prx-btn-inline" style="position: relative;">
                            <?php echo $portal_cliente_banner_btn_txt ?>
							<div class="prx-linha prx-linha-b hidden-xs" style="position: absolute; left: 100%; margin-left: 20px; bottom: 20px; width: 80px;"></div>
                        </a>

                    </div>
                    <!-- /.col-lg-4 -->

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
    $portal_cliente_section_1_show = get_post_meta( $post_id, 'portal_cliente_section_1_show', true );
    $portal_cliente_section_1_itens = get_post_meta( $post_id, 'portal_cliente_section_1_item', true );
    //var_dump($portal_cliente_section_1_itens);die;
    ?>

    <?php if( $portal_cliente_section_1_show ) : ?>

        <div class="portal-cliente-section-1">

            <div class="clearfix m-t-80"></div>

            <div class="container">

                <div class="row conexao-praxio-items">

                    <?php foreach( $portal_cliente_section_1_itens as $item ) : ?>

	                    <div class="col-sm-6 col-md-4 col-lg-3 conexao-praxio-item">

	                        <div class="conexao-praxio-item-img" style="background-image: url(<?php echo $item[ 'portal_cliente_section_1_img' ]; ?>);">

	                        	<?php if( $item[ 'portal_cliente_section_1_item_content' ] ) : ?>

                                	<div class="conexao-praxio-item-content"><?php echo $item[ 'portal_cliente_section_1_item_content' ]; ?></div>

                                <?php endif; ?>

	                        </div>
	                        <!-- /,conexao-praxio-item-img -->

	                        <div class="portal-cliente-content conexao-praxio-item-title-wrapper">

	                            <?php if( strlen( $item[ 'portal_cliente_section_1_button_url' ] ) > 0 ) : ?>

		                            <a href="<?php echo $item[ 'portal_cliente_section_1_button_url' ]; ?>" target="<?php echo $item[ 'portal_cliente_section_1_url_target' ]; ?>">

	                            <?php endif; ?>

	                                <h3 class="section-title conexao-praxio-item-title-text">
	                                    <?php echo $item[ 'portal_cliente_section_1_item_title' ]; ?>
	                                </h3>

	                            <?php if( strlen( $item[ 'portal_cliente_section_1_button_url' ] ) > 0 ) : ?>
		                            </a>
	                            <?php endif; ?>


	                        </div>
	                        <!-- /.portal-cliente-content -->
	                    
	                        <div class="m-b-80"></div>
	                    
	                    </div>
	                    <!-- /.col-sm-6 col-md-4 col-lg-3 -->

                    <?php endforeach; ?>

                </div>
                <!-- /.row -->

            </div>
            <!-- /.container -->
        </div>
        <!-- /.portal-cliente-section-1 -->
    
    <?php endif; ?>

</article>
