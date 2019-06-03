<?php
function google_api_key() {
	$google_api_key = laf_get_option( 'google_api_key' );
	return $google_api_key;
}

// add_action('wp_head', 'setup_js_api_key');

function setup_js_api_key() {
	$rua = laf_get_option( 'rua' );
	$numero = laf_get_option( 'numero' );
	$bairro = laf_get_option( 'bairro' );
	$cidade = laf_get_option( 'cidade' );
	$uf = laf_get_option( 'uf' );
	$cep = laf_get_option( 'cep' );
	$endereco = $rua . ', ' . $numero . ' - CEP:' . $cep . ' - ' . $bairro . ' - ' . $cidade . ' - ' . $uf;
	$site_name = get_bloginfo('name');
	?>
	<script>
		var g_key = "<?php echo google_api_key(); ?>";
		var lat = Number("<?php echo laf_get_option('lat'); ?>");
		var long = Number("<?php echo laf_get_option('long'); ?>");
		var endereco = "<?php echo $endereco; ?>";
		var site_name = "<?php echo $site_name; ?>";
	</script>
	<?php
}

// if ( function_exists( 'odin_classes_page_full' ) )
// 	return;

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );

function theme_enqueue_styles() {
	// wp_enqueue_style( 'royalslider-style', get_stylesheet_directory_uri() . '/inc/laf/royalslider/royalslider.css', array(), '1.0.6' );
	// https://fonts.google.com/specimen/Open+Sans?selection.family=Bubblegum+Sans|Montserrat:400,700|Open+Sans:300,400,700
	// fonts <link href="https://fonts.googleapis.com/css?family=Passion+One:400,700|Raleway:200,500,700" rel="stylesheet">
	wp_enqueue_style( 'wpb-google-fonts', 'https://fonts.googleapis.com/css?family=Mukta:300,400,700', false );
	// styles
	wp_enqueue_style( 'font-awesome-style', get_stylesheet_directory_uri() . '/inc/laf/font-awesome/css/font-awesome.min.css', array(), '4.7.0' );
	wp_enqueue_style( 'bootstrap-toggle-style', get_stylesheet_directory_uri() . '/assets/lib/bootstrap-toggle-master/css/bootstrap-toggle.min.css', array(), '2.2.0' );

	wp_enqueue_script( 'jquery-masked-input-script', get_stylesheet_directory_uri() . '/inc/laf/jquery-masked-input/jquery.maskedinput.min.js', array('jquery'), '1.4.1', true );
	wp_enqueue_script( 'jquery-masked-input-masks', get_stylesheet_directory_uri() . '/inc/laf/jquery-masked-input/masks.js', array('jquery'), null, true );
	wp_enqueue_script( 'bootstrap-toggle-script', get_stylesheet_directory_uri() . '/assets/lib/bootstrap-toggle-master/js/bootstrap-toggle.min.js', array('jquery'), null, true );
	wp_enqueue_script( 'scrollreveal-script', get_stylesheet_directory_uri() . '/assets/lib/scrollreveal/scrollreveal.min.js', array('jquery'), null, true );

	// wp_enqueue_script( 'js-parallax', get_stylesheet_directory_uri() . '/inc/laf/parallax.js-1.4.2/parallax.min.js', array('jquery'), null, true );
	// wp_enqueue_script( 'isotope-script', get_stylesheet_directory_uri() . '/inc/laf/isotope/isotope.pkgd.min.js', array('jquery'), '3.0.2', true );
	// wp_enqueue_script( 'royalslider-script', get_stylesheet_directory_uri() . '/inc/laf/royalslider/jquery.royalslider.min.js', array('jquery'), '9.5.7', true );
	// if(is_page( 'contato' ))
	// 	wp_enqueue_script( 'googleapi-gmap', 'https://maps.googleapis.com/maps/api/js?key=' . google_api_key() . '&callback=initMap', array( 'jquery', 'odin-main-min'), null, true );
}

add_action( 'wp_enqueue_scripts', 'rd_scripts' );

function rd_scripts() {

	$utils = new Utils;
	$post_id = get_the_ID();

	$rd_forms_script_url = laf_get_option( 'rd_forms_script_url_pt_BR' );
	$rd_forms_ua = laf_get_option( 'rd_forms_ua_pt_BR' );

	$rd_contact_id = laf_get_option( 'rd_contact_id_pt_BR' );
	$rd_train_id = laf_get_option( 'rd_train_id_pt_BR' );
	$rd_blog_id = laf_get_option( 'rd_blog_id_pt_BR' );
	$solucoes_form_id = get_post_meta( $post_id, 'solucoes_form_id', true );
	$rd_newsletter_id = laf_get_option( 'rd_newsletter_id_pt_BR' );

	if( $rd_forms_script_url && $rd_forms_ua ) :

		$rd = array(
			'url'						=> $rd_forms_script_url,
			'ua'						=> $rd_forms_ua,
			'contact_id'				=> $rd_contact_id,
			'train_id'					=> $rd_train_id,
			'solucoes_form_id'			=> $solucoes_form_id,
			'rd_blog_id'				=> $rd_blog_id,
			'rd_newsletter_id'				=> $rd_newsletter_id,
		);

		// $utils->debug( $rd[ 'id' ] );
		// $utils->debug( $rd[ 'url' ] );
		// $utils->debug( $rd[ 'ua' ] );

		wp_enqueue_script( 'rd-contact-include', $rd_forms_script_url, array(  ), null, true );

		wp_register_script( 'rd-contact-script', get_stylesheet_directory_uri() . '/assets/js/rd-contact-script.js', array( 'rd-contact-include' ), null, true );

		wp_localize_script( 'rd-contact-script', 'rd', $rd );

		wp_enqueue_script( 'rd-contact-script' );

	endif;

}

add_action( 'wp_head', 'prx_rd_form_style' );

function prx_rd_form_style() {
	$utils = new utils;
	$post_id = get_the_ID();
	$styles_array = [];
	$rd_contact_id_pt_BR = laf_get_option( 'rd_contact_id_pt_BR' );
	$rd_train_id = laf_get_option( 'rd_train_id_pt_BR' );
	$solucoes_form_id = get_post_meta( $post_id, 'solucoes_form_id', true );
	$rd_blog_id = laf_get_option( 'rd_blog_id_pt_BR' );
	$rd_newsletter_id = laf_get_option( 'rd_newsletter_id_pt_BR' );
	if( $rd_contact_id_pt_BR )
		$styles_array[] = $rd_contact_id_pt_BR;

	if( $rd_train_id )
		$styles_array[] = $rd_train_id;

	if( $solucoes_form_id )
		$styles_array[] = $solucoes_form_id;

	if( $rd_blog_id )
		$styles_array[] = $rd_blog_id;

	if( $rd_newsletter_id )
		$styles_array[] = $rd_newsletter_id;

	foreach( $styles_array as $style ) :
		// $utils->debug( $style );

		?>
			<style>
				.rd-form #conversion-<?php echo $style; ?>,
				.rd-form #conversion-<?php echo $style; ?> {
					background-color: transparent !important;
				}
				.rd-form #<?php echo $style; ?> form input, 
				.rd-form #<?php echo $style; ?> form select,
				.rd-form #<?php echo $style; ?> form select option,
				.rd-form #<?php echo $style; ?> form .select2-container,
				.rd-form #<?php echo $style; ?> form textarea {
					margin: auto !important;
					padding: 5px 20px !important;
					width: 100% !important;
					background-color: transparent !important;
					border: solid 1px #fff !important;
					color: #fff !important;
					text-transform: uppercase !important;
					font-family: 'Mukta', sans-serif !important;
					font-size: 15px !important;
					border-radius: 0 !important;
				}
				
				.rd-form #<?php echo $style; ?> form input[type="radio"] {
					margin: auto 10px auto auto !important;
					width: auto !important;
				}
				
				.rd-form #<?php echo $style; ?> form select option {
					background-color: #23282d !important;
					color: #fff !important;
				}

				.rd-form #<?php echo $style; ?> form select option:active,
				.rd-form #<?php echo $style; ?> form select option:hover,
				.rd-form #<?php echo $style; ?> form select option:focus,
				.rd-form #<?php echo $style; ?> form select option:hover:focus {
				}

				.rd-form #<?php echo $style; ?> form input::-webkit-input-placeholder {
					/* WebKit, Blink, Edge */
					color: #fff;
				}

				.rd-form #<?php echo $style; ?> form input:-moz-placeholder {
					/* Mozilla Firefox 4 to 18 */
					color: #fff;
				}

				.rd-form #<?php echo $style; ?> form input::-moz-placeholder {
					/* Mozilla Firefox 19+ */
					color: #fff;
				}

				.rd-form #<?php echo $style; ?> form input::-ms-input-placeholder {
					/* Internet Explorer 10-11 */
					color: #fff;
				}

				#form-container-<?php echo $style; ?> #conversion-<?php echo $style; ?> #conversion-form-<?php echo $style; ?> div.actions input.call_button {
					width: 100%;
					margin: auto !important;
					padding: 5px 20px !important;
					border: none !important;
					background-color: #EE273F !important;
					color: #fff !important;
					border-radius: 0 !important;
					font-size: 15px !important;
					text-transform: uppercase !important;
					font-weight: 600 !important;
				}
				#form-container-<?php echo $style; ?> #conversion-<?php echo $style; ?> #conversion-form-<?php echo $style; ?> div.actions input.call_button:active,
				#form-container-<?php echo $style; ?> #conversion-<?php echo $style; ?> #conversion-form-<?php echo $style; ?> div.actions input.call_button:hover,
				#form-container-<?php echo $style; ?> #conversion-<?php echo $style; ?> #conversion-form-<?php echo $style; ?> div.actions input.call_button:focus,
				#form-container-<?php echo $style; ?> #conversion-<?php echo $style; ?> #conversion-form-<?php echo $style; ?> div.actions input.call_button:focus:hover {
					background-color: #d40d25 !important;
				}
			</style>
		<?php
	endforeach;
}


//attach our function to the wp_pagenavi filter
// add_filter( 'wp_pagenavi', 'ik_pagination', 10, 2 );
  
//customize the PageNavi HTML before it is output
function ik_pagination($html) {
    $out = '';
  
    //wrap a's and span's in li's
    $out = str_replace("<div","",$html);
    $out = str_replace("class='wp-pagenavi'>","",$out);
    $out = str_replace("<a","<li><a",$out);
    $out = str_replace("</a>","</a></li>",$out);
    $out = str_replace("<span","<li><span",$out);  
    $out = str_replace("</span>","</span></li>",$out);
    $out = str_replace("</div>","",$out);
  
    return '<div class="clearfix"></div><div class="text-center"><ul class="pagination pagination-centered">'.$out.'</ul></div>';
}

add_action( 'widgets_init', 'footer_widgets_init' );

function footer_widgets_init() {

	register_sidebar(
		array(
			'name' => __( 'Widget Area dos Cursos e Workshops', 'odin' ),
			'id' => 'curso-widget',
			'description' => __( 'Área de Widget dos Cursos e Workshops', 'odin' ),
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget' => '</aside>',
			'before_title' => '<h3 class="widgettitle widget-title">',
			'after_title' => '</h3>',
		)
	);
	
	register_sidebar(
		array(
			'name' => __( 'Widget Area dos Webinars', 'odin' ),
			'id' => 'webinar-widget',
			'description' => __( 'Área de Widget dos Webinars', 'odin' ),
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget' => '</aside>',
			'before_title' => '<h3 class="widgettitle widget-title">',
			'after_title' => '</h3>',
		)
	);
	
	register_sidebar(
		array(
			'name' => __( 'Widget Area dos E-mails e Comunicados', 'odin' ),
			'id' => 'comunicado-widget',
			'description' => __( 'Área de Widget dos E-mails e Comunicados', 'odin' ),
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget' => '</aside>',
			'before_title' => '<h3 class="widgettitle widget-title">',
			'after_title' => '</h3>',
		)
	);
	
	register_sidebar(
		array(
			'name' => __( 'Widget Area dos Eventos', 'odin' ),
			'id' => 'evento-widget',
			'description' => __( 'Área de Widget dos Eventos', 'odin' ),
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget' => '</aside>',
			'before_title' => '<h3 class="widgettitle widget-title">',
			'after_title' => '</h3>',
		)
	);
	
	register_sidebar(
		array(
			'name' => __( 'Widget Praxio em Revista', 'odin' ),
			'id' => 'revista-widget',
			'description' => __( 'Área de Widget do Praxio em Revista', 'odin' ),
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget' => '</aside>',
			'before_title' => '<h3 class="widgettitle widget-title">',
			'after_title' => '</h3>',
		)
	);
	
	register_sidebar(
		array(
			'name' => __( 'Widget Editorial', 'odin' ),
			'id' => 'editorial-widget',
			'description' => __( 'Área de Widget do Praxio em Revista', 'odin' ),
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget' => '</aside>',
			'before_title' => '<h3 class="widgettitle widget-title">',
			'after_title' => '</h3>',
		)
	);
	
	register_sidebar(
		array(
			'name' => __( 'Widget Enquete', 'odin' ),
			'id' => 'enquete-widget',
			'description' => __( 'Área de Widget do Praxio em Revista', 'odin' ),
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget' => '</aside>',
			'before_title' => '<h3 class="widgettitle widget-title">',
			'after_title' => '</h3>',
		)
	);
	
	register_sidebar(
		array(
			'name' => __( 'Widget eSocial Urgente', 'odin' ),
			'id' => 'esocial-widget',
			'description' => __( 'Área de Widget do Praxio em Revista', 'odin' ),
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget' => '</aside>',
			'before_title' => '<h3 class="widgettitle widget-title">',
			'after_title' => '</h3>',
		)
	);
	
	register_sidebar(
		array(
			'name' => __( 'Widget Area #1 do Rodapé', 'odin' ),
			'id' => 'footer-widget-1',
			'description' => __( 'Área de Widget #1 do Rodapé', 'odin' ),
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget' => '</aside>',
			'before_title' => '<h3 class="widgettitle widget-title">',
			'after_title' => '</h3>',
		)
	);
	
	register_sidebar(
		array(
			'name' => __( 'Widget Area #2 do Rodapé', 'odin' ),
			'id' => 'footer-widget-2',
			'description' => __( 'Área de Widget #2 do Rodapé', 'odin' ),
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget' => '</aside>',
			'before_title' => '<h3 class="widgettitle widget-title">',
			'after_title' => '</h3>',
		)
	);
	
	register_sidebar(
		array(
			'name' => __( 'Widget Area #3 do Rodapé', 'odin' ),
			'id' => 'footer-widget-3',
			'description' => __( 'Área de Widget #3 do Rodapé', 'odin' ),
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget' => '</aside>',
			'before_title' => '<h3 class="widgettitle widget-title">',
			'after_title' => '</h3>',
		)
	);
	
}


/**
 * Filter the except length to 20 words.
 *
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

function wpdocs_custom_excerpt_length( $length ) {
    return 10;
}

/*
 * Share Button
 */

// remove_filter( 'the_content', 'hugeit_share_my_the_content_filter' );
// remove_action( "add_meta_boxes", "hugeit_share_buttons_add_meta_boxes_pages" );
// remove_action( "add_meta_boxes", "hugeit_share_buttons_add_meta_boxes_page" );
// remove_action('media_buttons_context', 'hugeit_share_add_share_buttons_my_custom_button' );

add_filter( 'wp_nav_menu_items','add_new_menu_item', 10, 2 );

function add_new_menu_item( $nav, $args ) {
	$utils = new Utils;
	// $utils->debug( $args->theme_location );
    if( $args->theme_location == 'main-menu' ) :
    	$newmenuitem = '<li id="menu-item-home" class="home-link menu-item menu-item-home current-menu-item current_page_item active"><a href="' .get_site_url() . '">' . laf_get_the_custom_logo() . '</a></li>';
    	$nav = $newmenuitem . $nav;
    endif;
    return $nav;
}

function laf_get_the_custom_logo() {
	$custom_logo_id = get_theme_mod( 'custom_logo' );

	if ( !$custom_logo_id )
		return;

	$custom_logo_attr = array(
        'class'    => 'custom-logo prx-logo img-responsive center-block',
        'itemprop' => 'logo',
    );

    $image_alt = get_post_meta( $custom_logo_id, '_wp_attachment_image_alt', true );

    if ( empty( $image_alt ) ) :
        $custom_logo_attr['alt'] = get_bloginfo( 'name', 'display' );
    endif;

    return wp_get_attachment_image( $custom_logo_id, 'full', false, $custom_logo_attr );
}


function laf_the_custom_logo() {
	$custom_logo = laf_get_the_custom_logo();
	if ( !$custom_logo )
		bloginfo( 'name' );
	else
        echo laf_get_the_custom_logo();

}


add_action('get_header', 'remove_admin_login_header');

function remove_admin_login_header() {
    remove_action('wp_head', '_admin_bar_bump_cb');
}

add_filter( 'excerpt_more', 'prx_modify_excerpt_more', 9999 );

function prx_modify_excerpt_more() {
    return ' <a class="prx-more-link" href="' . get_permalink() . '"> > ' . pll__( 'Leia Mais' ) . '</a>';
}

add_action( 'init', function() {
	pll_register_string( 'prx', 'Leia Mais' );
	pll_register_string( 'prx', 'Pesquisa por:' );
	pll_register_string( 'prx', 'Profissionais' );
	pll_register_string( 'prx', 'Mi' );
	pll_register_string( 'prx', 'Funcionários' );
	pll_register_string( 'prx', 'Contratos' );
	pll_register_string( 'prx', 'Inscreva-se' );
	pll_register_string( 'prx', 'Quero conhecer' );
	pll_register_string( 'prx', 'Agendar Demonstração' );
	pll_register_string( 'prx', 'Newsletter' );
});

function prx_return_0_to_100() {
	$return = [];
	for ( $i = 0; $i <= 100 ; $i++ ) { 
		$return[] = $i;
	}
	return $return;
}

add_action( 'prx_modal', 'prx_add_modal' );

function prx_add_modal( $modal_id ) {
	$utils = new Utils;
	$post_id = get_the_ID();
	$modal_arr = [];

	$rd_train_id = laf_get_option( 'rd_train_id_pt_BR' );
	if( $rd_train_id )
		$modal_arr[ 'prx-modal-treinamento' ] = $rd_train_id;

	$solucoes_form_id = get_post_meta( $post_id, 'solucoes_form_id', true );
	if( $solucoes_form_id )
		$modal_arr[ 'prx-modal-solucoes' ] = $solucoes_form_id;

	$rd_blog_id = laf_get_option( 'rd_blog_id_pt_BR' );
	if( $rd_blog_id )
		$modal_arr[ 'prx-modal-blog' ] = $rd_blog_id;

	foreach( $modal_arr as $modal_id => $form_id ) :

	?>
		<div id="<?php echo $modal_id ?>" class="prx-modal modal fade" role="dialog">
			<div class="modal-dialog">

				<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">
							<i class="fa fa-times-circle"></i>
						</button>
						<h4 class="modal-title"><?php pll_e( 'Inscreva-se', 'prx' ); ?></h4>
					</div>
					<div class="modal-body">
						<div class="rd-form">
							<div role="main" id="<?php echo $form_id; ?>"></div>
						</div>
					</div>
				</div>

			</div>
		</div>
	<?php
	endforeach;
}

add_action( 'prx_modal', 'youtube_home_add_modal' );

function youtube_home_add_modal( $modal_id ) {
	$utils = new Utils;
	$post_id = get_the_ID();
	$modal_arr = [];

	$front_page_extra_section_2_youtube = get_post_meta( $post_id, 'front_page_extra_section_2_youtube', true );

	if( $front_page_extra_section_2_youtube ) :

	?>
		<div id="youtube-modal-home" class="prx-modal modal fade" role="dialog">
			<div class="modal-dialog modal-lg">

				<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">
							<i class="fa fa-times-circle"></i>
						</button>
						<h4 class="modal-title"></h4>
					</div>
					<div class="modal-body">
						<div class="rd-form">
							<div class="embed-responsive embed-responsive-16by9">

								<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/<?php echo $front_page_extra_section_2_youtube; ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

							</div>
						</div>
					</div>
				</div>

			</div>
		</div>

	<?php
	endif;
}

function prx_gestao_de_pneus_etapas( $titulo, $selected_arr, $checked_arr ) {
	?>
	<div class="prx-gestao-de-pneus-etapas selected-<?php echo count( $selected_arr ) - 1; ?>">
		
		<h2 class="prx-gestao-de-pneus-etapas-title"><?php echo $titulo; ?></h2>

		<div class="row">

			<?php $labels_arr = array(
				pll__( 'Cronograma', 'prx' ),
				pll__( 'Aferição', 'prx' ),
				pll__( 'Análise', 'prx' ),
				pll__( 'Finalização', 'prx' ),
			); ?>

			<?php for( $i = 0; $i < 4; $i++ ) { ?>
			
				<div class="col-xs-3 prx-gestao-de-pneus-etapas-etapa <?php echo in_array( $i, $selected_arr ) ? 'selected' : ''; ?>">
					
					<div class="prx-gestao-de-pneus-etapas-circle <?php echo in_array( $i, $selected_arr ) ? 'selected' : ''; ?> <?php echo in_array( $i, $checked_arr ) ? 'checked' : ''; ?>">
						<span class="prx-gestao-de-pneus-etapas-number"><?php echo $i + 1; ?></span>
						<i class="prx-gestao-de-pneus-etapas-icon fa fa-check"></i>

					</div>

					<div class="prx-gestao-de-pneus-etapas-label <?php echo in_array( $i, $selected_arr ) ? 'selected' : ''; ?>"><?php echo $labels_arr[ $i ]; ?></div>
					
				</div>
				<!-- /.col-xs-3 -->

			<?php } ?>			

		</div>
		<!-- /.row -->

	</div>
	<!-- /.prx-gestao-de-pneus-etapas -->
	<?php

}