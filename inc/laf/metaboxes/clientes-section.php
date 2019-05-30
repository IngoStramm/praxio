<?php 
add_action( 'cmb2_admin_init', 'erp_clientes_section_register_metabox' );

function erp_clientes_section_register_metabox() {

	$prefix = 'clientes_section_';

	$cmb_clientes_options = new_cmb2_box( array(
		'id'            => $prefix . 'options',
		'title'         => __( 'Clientes', 'laf' ),
		'object_types'  => array( 'page' ), // Post type
		'show_on_cb' => 'laf_show_if_clientes_section', // function should return a bool value
	) );

	$cmb_clientes_options->add_field( array(
		'name' => esc_html__( 'Exibir clientes?', 'cmb2' ),
		'id'   => $prefix . 'show',
		'type' => 'checkbox',
	) );

	$cmb_clientes_options->add_field( array(
		'name'       => esc_html__( 'Título', 'cmb2' ),
		'id'         => $prefix . 'title',
		'type'       => 'text',
		'sanitization_cb' => 'prx_allow_html',
	) );


    $prefix = 'clientes_section_logos_';

    $cmb_clientes_logos = new_cmb2_box( array(
        'id'            => $prefix . 'logos',
        'title'         => __( 'Logos dos Clientes', 'laf' ),
        'object_types'  => array( 'page' ), // Post type
        'show_on_cb' => 'laf_show_if_clientes_section', // function should return a bool value
    ) );

    $group_field_id = $cmb_clientes_logos->add_field( array(
        'id'          => $prefix . 'logo',
        'type'        => 'group',
        'description' => esc_html__( 'Adicione os logos dos Clientes.', 'cmb2' ),
        'options'     => array(
            'group_title'   => esc_html__( 'Logo {#}', 'cmb2' ), // {#} gets replaced by row number
            'add_button'    => esc_html__( 'Adicionar', 'cmb2' ),
            'remove_button' => esc_html__( 'Remover', 'cmb2' ),
            'sortable'      => true, // beta
            // 'closed'     => true, // true to have the groups closed by default
        ),
    ) );

    $cmb_clientes_logos->add_group_field( $group_field_id, array(
        'name' 				=> __( 'Logo do Cliente', 'laf' ),
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

}

function laf_show_if_clientes_section( $cmb ) {

	if(isset($_GET['post']) || isset($_GET['post_ID']) || laf_show_if_front_page( $cmb )) :

		$post_id = $_GET['post'] ? $_GET['post'] : $_POST['post_ID'] ;
		
		if( !isset( $post_id ) ) 
			return;
		
		$template_file = get_post_meta($post_id, '_wp_page_template', true);
		$templates = array( 
			'erp-passageiro-page.php',
			'erp-logistica-page.php',
			'venda-de-passagens-page.php'
		);
		
		if(in_array($template_file, $templates) || laf_show_if_front_page( $cmb ))
			return true;
		else
			return false;
	endif;

}