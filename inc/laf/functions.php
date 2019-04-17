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
	wp_enqueue_script( 'jquery-masked-input-script', get_stylesheet_directory_uri() . '/inc/laf/jquery-masked-input/jquery.maskedinput.min.js', array('jquery'), '1.4.1', true );
	wp_enqueue_script( 'jquery-masked-input-masks', get_stylesheet_directory_uri() . '/inc/laf/jquery-masked-input/masks.js', array('jquery'), null, true );
	// wp_enqueue_script( 'js-parallax', get_stylesheet_directory_uri() . '/inc/laf/parallax.js-1.4.2/parallax.min.js', array('jquery'), null, true );
	// wp_enqueue_script( 'isotope-script', get_stylesheet_directory_uri() . '/inc/laf/isotope/isotope.pkgd.min.js', array('jquery'), '3.0.2', true );
	// wp_enqueue_script( 'royalslider-script', get_stylesheet_directory_uri() . '/inc/laf/royalslider/jquery.royalslider.min.js', array('jquery'), '9.5.7', true );
	if(is_page( 'contato' ))
		wp_enqueue_script( 'googleapi-gmap', 'https://maps.googleapis.com/maps/api/js?key=' . google_api_key() . '&callback=initMap', array( 'jquery', 'odin-main-min'), null, true );
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
});

function prx_return_0_to_100() {
	$return = [];
	for ( $i = 0; $i <= 100 ; $i++ ) { 
		$return[] = $i;
	}
	return $return;
}