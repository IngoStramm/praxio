<?php 
add_action( 'cmb2_admin_init', 'integracoes_section_register_metabox' );

function integracoes_section_register_metabox() {

	$prefix = 'integracoes_section_';

	/**
	 * Sample metabox to demonstrate each field type included
	 */
	$clientes_section = new_cmb2_box( array(
		'id'            => $prefix . 'metabox',
		'title'         => esc_html__( 'Integrações', 'cmb2' ),
		'object_types'  => array( 'page' ), // Post type
		'show_on_cb' => 'laf_show_if_integracoes_section', // function should return a bool value
	) );

	$clientes_section->add_field( array(
		'name' => esc_html__( 'Exibir Integrações?', 'cmb2' ),
		'id'   => $prefix . 'show',
		'type' => 'checkbox',
	) );

	$clientes_section->add_field( array(
		'name'       => esc_html__( 'Título', 'cmb2' ),
		'id'         => $prefix . 'title',
		'type'       => 'text',
		'sanitization_cb' => 'prx_allow_html',
	) );

	$clientes_section->add_field( array(
		'name'       => esc_html__( 'Título Destaque', 'cmb2' ),
		'id'         => $prefix . 'title_featured',
		'type'       => 'text',
	) );

	$clientes_section->add_field( array(
		'name'         => esc_html__( 'Logos da Integrações', 'laf' ),
		'id'            => $prefix . 'logos_title',
		'type'       => 'title',
	) );

	$group_field_1_id = $clientes_section->add_field( array(
		'id'          => $prefix . 'logos_item',
		'type'        => 'group',
		// 'description' => esc_html__( 'Adicione os logos da Integrações.', 'cmb2' ),
		'options'     => array(
			'group_title'   => esc_html__( 'Logo {#}', 'cmb2' ), // {#} gets replaced by row number
			'add_button'    => esc_html__( 'Adicionar', 'cmb2' ),
			'remove_button' => esc_html__( 'Remover', 'cmb2' ),
			'sortable'      => true, // beta
			// 'closed'     => true, // true to have the groups closed by default
		),
	) );
	
	$clientes_section->add_group_field( $group_field_1_id, array(
		'name' 				=> __( 'Arquivo', 'laf' ),
		'id'   				=> $prefix . 'img',
		'type' 				=> 'file',
		'text'				=> array(
			'add_upload_file_text' => __('Adicionar arquivo', 'laf') // Change upload button text. Default: "Add or Upload File"
		),
		'attributes' 		=> array(
			'placeholder' 	=> 'http://',
			// 'required'		=> ''
		)
	) );

	$clientes_section->add_field( array(
		'name'         => esc_html__( 'Itens da Integrações', 'laf' ),
		'id'            => $prefix . 'items_title',
		'type'       => 'title',
	) );

	$group_field_2_id = $clientes_section->add_field( array(
		'id'          => $prefix . 'items',
		'type'        => 'group',
		// 'description' => esc_html__( 'Adicione o item da Integrações.', 'cmb2' ),
		'options'     => array(
			'group_title'   => esc_html__( 'Item {#}', 'cmb2' ), // {#} gets replaced by row number
			'add_button'    => esc_html__( 'Adicionar', 'cmb2' ),
			'remove_button' => esc_html__( 'Remover', 'cmb2' ),
			'sortable'      => true, // beta
			// 'closed'     => true, // true to have the groups closed by default
		),
	) );
	
	$clientes_section->add_group_field( $group_field_2_id, array(
		'name' 				=> __( 'Título', 'laf' ),
		'id'   				=> $prefix . 'title',
		'type' 				=> 'text',
	) );

	$clientes_section->add_group_field( $group_field_2_id, array(
		'name' 				=> __( 'Marca', 'laf' ),
		'id'   				=> $prefix . 'brand',
		'type' 				=> 'text',
		'repeatable'		=> true,
	) );

}

function laf_show_if_integracoes_section( $cmb ) {

	if(isset($_GET['post']) || isset($_GET['post_ID']) || laf_show_if_front_page( $cmb )) :

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
		
		if(in_array($template_file, $templates) || laf_show_if_front_page( $cmb ))
			return true;
		else
			return false;
	endif;

}