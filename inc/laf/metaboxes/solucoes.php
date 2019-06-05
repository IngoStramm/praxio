<?php
add_action( 'cmb2_admin_init', 'solucoes_page_register_metabox' );

function solucoes_page_register_metabox() {


	$prefix = 'solucoes_';

	$solucoes = new_cmb2_box( array(
	    'id'            => $prefix . 'metabox',
	    'title'         => esc_html__( 'Formulário RD Station', 'cmb2' ),
	    'object_types'  => array( 'page' ), // Post type
	    'context'    => 'side',
	    'show_on_cb' => 'laf_show_if_solucoes', // function should return a bool value
	) );

	$solucoes->add_field( array(
	    'name'       => esc_html__( 'ID do Formulário', 'cmb2' ),
	    'id'         => $prefix . 'form_id',
	    'type'       => 'text',
	    'sanitization_cb' => 'prx_allow_html',
	) );

}

function laf_show_if_solucoes() {

	if(isset($_GET['post']) || isset($_GET['post_ID'])) :

		$post_id = $_GET['post'] ? $_GET['post'] : $_POST['post_ID'] ;
		
		if( !isset( $post_id ) ) 
			return;
		
		$template_file = get_post_meta($post_id, '_wp_page_template', true);
		$templates = array( 
			'erp-passageiro-page.php',
			'erp-logistica-page.php',
			'venda-de-passagens-page.php',
			'ponto-virtual-page.php',
			'bi-page.php',
			'embarcador-page.php',
			'gestao-de-pneus-page.php',
			'gestao-de-oficinas-page.php'
		);
		
		if(in_array($template_file, $templates))
			return true;
		else
			return false;
	endif;

}