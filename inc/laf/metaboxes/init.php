<?php
/**
 * Include and setup custom metaboxes and fields. (make sure you copy this file to outside the CMB2 directory)
 *
 * Be sure to replace all instances of 'yourprefix_' with your project's prefix.
 * http://nacin.com/2010/05/11/in-wordpress-prefix-everything/
 *
 * @category Laf Framework
 * @package  Demo_CMB2
 * @license  http://www.opensource.org/licenses/gpl-license.php GPL v2.0 (or later)
 * @link     https://github.com/WebDevStudios/CMB2
 */
/**
 * Get the bootstrap! If using the plugin from wordpress.org, REMOVE THIS!
 */
if ( file_exists( dirname( __FILE__ ) . '/cmb2/init.php' ) ) {
    require_once dirname( __FILE__ ) . '/cmb2/init.php';
} elseif ( file_exists( dirname( __FILE__ ) . '/CMB2/init.php' ) ) {
    require_once dirname( __FILE__ ) . '/CMB2/init.php';
}
/*
 * CMB2 Taxonomy
 */
if ( !file_exists(  dirname(__FILE__) .'/cmb2-taxonomy/init.php' ) ) {
    exit;
}
require_once  dirname(__FILE__) .'/cmb2-taxonomy/init.php';
/* Theme Options */
function admin_enqueue_styles() {
    // styles
    // wp_enqueue_style( 'font-awesome-style', get_stylesheet_directory_uri() . '/inc/font-awesome/css/font-awesome.min.css', array(), '4.5.0' );
    // scripts
    wp_enqueue_script( 'jquery-masked-input-script', get_stylesheet_directory_uri() . '/inc/laf/jquery-masked-input/jquery.maskedinput.min.js', array('jquery'), '1.4.1', true );
    wp_enqueue_script( 'jquery-masked-input-masks', get_stylesheet_directory_uri() . '/inc/laf/jquery-masked-input/masks.js', array('jquery'), null, true );
}
add_action( 'admin_enqueue_scripts', 'admin_enqueue_styles' );
/**
 * Conditionally displays a metabox when used as a callback in the 'show_on_cb' cmb2_box parameter
 *
 * @param  CMB2 object $cmb CMB2 object
 *
 * @return bool             True if metabox should show
 */
function laf_show_if_front_page( $cmb ) {
    $frontpage_id = get_option( 'page_on_front' );
    $pll_id = pll_get_post( $frontpage_id );
    if ( (int)$cmb->object_id === (int)$frontpage_id || (int)$cmb->object_id === (int)$pll_id ) {
        return true;
    }
    return false;
}
function laf_hide_if_front_page( $cmb ) {
    // Show this metabox if it's not the front page template
    $frontpage_id = get_option( 'page_on_front' );
    $pll_id = pll_get_post( $frontpage_id );
    if ( $cmb->object_id === $frontpage_id || $cmb->object_id === $pll_id ) {
        return false;
    }
    return true;
}
add_action( 'admin_init', 'hide_editor' );
function hide_editor() {
    $utils = new Utils;
    // Get the Post ID.
    if(isset($_GET['post']) || isset($_GET['post_ID'])) :
        $post_id = $_GET['post'] ? $_GET['post'] : $_POST['post_ID'] ;

        if( !isset( $post_id ) )
            return;
        $template_file = get_post_meta($post_id, '_wp_page_template', true);
        $frontpage_id = get_option( 'page_on_front' );
        $pll_id = pll_get_post( $frontpage_id );

        $templates = array(
            'front-page.php',
            'fale-conosco-page.php',
            'areas-de-atuacao-page.php',
            'sobre-page.php',
            'erp-passageiro-page.php',
            'erp-logistica-page.php',
            'bi-page.php',
            'ponto-virtual-page.php',
            'venda-de-passagens-page.php',
            'embarcador-page.php'
        );

        if( (int)in_array($template_file, $templates) || (int)$post_id == (int)$frontpage_id || (int)$post_id == (int)$pll_id ){ // the filename of the page template
            remove_post_type_support('page', 'editor');
        }
    endif;
}
function prx_allow_html( $original_value, $args, $cmb2_field ) {
    return $original_value;
}
require_once 'theme-options.php';
require_once 'front-page.php';
require_once 'fale-conosco.php';
require_once 'areas-de-atuacao.php';
require_once 'sobre.php';
require_once 'erp-passageiro.php';
require_once 'erp-logistica.php';
require_once 'bi.php';
require_once 'venda-de-passagens.php';
require_once 'ponto-virtual.php';
require_once 'embarcador.php';