<?php

add_action( 'cmb2_admin_init', 'bi_page_register_metabox' );

function bi_page_register_metabox() {

	$prefix = 'bi_banner_';

	$cmb_banner = new_cmb2_box( array(
		'id'            => $prefix . 'banner',
		'title'         => __( 'Banner', 'laf' ),
		'object_types'  => array( 'page' ), // Post type
		'show_on_cb' => 'laf_show_if_bi', // function should return a bool value
	) );

	$cmb_banner->add_field( array(
		'name' => esc_html__( 'Exibir banner?', 'cmb2' ),
		'id'   => $prefix . 'show',
		'type' => 'checkbox',
	) );

	$cmb_banner->add_field( array(
		'name' 				=> __( 'Imagem', 'laf' ),
		'id'   				=> $prefix . 'img',
		'type' 				=> 'file',
		'text'				=> array(
			'add_upload_file_text' => __('Adicionar arquivo', 'laf') // Change upload button text. Default: "Add or Upload File"
		),
		'attributes' 		=> array(
			'placeholder' 	=> 'http://',
		)
	) );

	$cmb_banner->add_field( array(
		'name'       => esc_html__( 'Texto da Linha #1', 'cmb2' ),
		'id'         => $prefix . 'linha_1',
		'type'       => 'text',
		'sanitization_cb' => 'prx_allow_html',
	) );

	$cmb_banner->add_field( array(
		'name'       => esc_html__( 'Texto da Linha #2', 'cmb2' ),
		'id'         => $prefix . 'linha_2',
		'type'       => 'text',
		'sanitization_cb' => 'prx_allow_html',
	) );

	$cmb_banner->add_field( array(
		'name'       => esc_html__( 'Texto da Linha #3', 'cmb2' ),
		'id'         => $prefix . 'linha_3',
		'type'       => 'text',
		'sanitization_cb' => 'prx_allow_html',
	) );

	$cmb_banner->add_field( array(
		'name'       => esc_html__( 'Título', 'cmb2' ),
		'id'         => $prefix . 'title',
		'type'       => 'text',
		'sanitization_cb' => 'prx_allow_html',
	) );

	$cmb_banner->add_field( array(
		'name'       => esc_html__( 'Texto', 'cmb2' ),
		'id'         => $prefix . 'text',
		'type'       => 'textarea',
		'sanitization_cb' => 'prx_allow_html',
	) );

	$cmb_banner->add_field( array(
		'name'       => esc_html__( 'Texto do botão', 'cmb2' ),
		'id'         => $prefix . 'btn_txt',
		'type'       => 'text',
		'sanitization_cb' => 'prx_allow_html',
	) );

	// $cmb_banner->add_field( array(
	// 	'name' 				=> __( 'Url do botão', 'laf' ),
	// 	'id'   				=> $prefix . 'btn_url',
	// 	'type' 				=> 'text_url',
	// 	'attributes' 		=> array(
	// 		'placeholder' 	=> 'http://',
	// 		// 'required'		=> ''
	// 	)
	// ) );

	$prefix = 'bi_section_1_';

	$cmb_section_1 = new_cmb2_box( array(
		'id'            => $prefix . 'metabox',
		'title'         => __( 'Seção #1', 'laf' ),
		'object_types'  => array( 'page' ), // Post type
		'show_on_cb' => 'laf_show_if_bi', // function should return a bool value
	) );

	$cmb_section_1->add_field( array(
		'name' => esc_html__( 'Exibir Seção #1?', 'cmb2' ),
		'id'   => $prefix . 'show',
		'type' => 'checkbox',
	) );

	$cmb_section_1->add_field( array(
		'name'       => esc_html__( 'Título da Seção #1', 'cmb2' ),
		'id'         => $prefix . 'title',
		'type'       => 'text',
		'sanitization_cb' => 'prx_allow_html',
	) );

	$cmb_section_1->add_field( array(
		'name'       => esc_html__( 'Título da Opção #1', 'cmb2' ),
		'id'         => $prefix . 'title_option_1',
		'type'       => 'text',
		'sanitization_cb' => 'prx_allow_html',
	) );

	$cmb_section_1->add_field( array(
		'name'       => esc_html__( 'Texto #1 da Opção #1', 'cmb2' ),
		'id'         => $prefix . 'text_1_option_1',
		'type'       => 'textarea',
		'sanitization_cb' => 'prx_allow_html',
	) );

	$cmb_section_1->add_field( array(
		'name'       => esc_html__( 'Texto #2 da Opção #1', 'cmb2' ),
		'id'         => $prefix . 'text_2_option_1',
		'type'       => 'textarea',
		'sanitization_cb' => 'prx_allow_html',
	) );

	$cmb_section_1->add_field( array(
		'name'       => esc_html__( 'Título da Opção #2', 'cmb2' ),
		'id'         => $prefix . 'title_option_2',
		'type'       => 'text',
		'sanitization_cb' => 'prx_allow_html',
	) );

	$cmb_section_1->add_field( array(
		'name'       => esc_html__( 'Texto #1 da Opção #2', 'cmb2' ),
		'id'         => $prefix . 'text_1_option_2',
		'type'       => 'textarea',
		'sanitization_cb' => 'prx_allow_html',
	) );

	$cmb_section_1->add_field( array(
		'name'       => esc_html__( 'Texto #2 da Opção #2', 'cmb2' ),
		'id'         => $prefix . 'text_2_option_2',
		'type'       => 'textarea',
		'sanitization_cb' => 'prx_allow_html',
	) );

	$prefix = 'bi_section_2_';

	$cmb_section_2 = new_cmb2_box( array(
		'id'            => $prefix . 'metabox',
		'title'         => __( 'Seção #2', 'laf' ),
		'object_types'  => array( 'page' ), // Post type
		'show_on_cb' => 'laf_show_if_bi', // function should return a bool value
	) );

	$cmb_section_2->add_field( array(
		'name' => esc_html__( 'Exibir Seção #2?', 'cmb2' ),
		'id'   => $prefix . 'show',
		'type' => 'checkbox',
	) );

	$cmb_section_2->add_field( array(
		'name'       => esc_html__( 'Título da Seção #2', 'cmb2' ),
		'id'         => $prefix . 'title',
		'type'       => 'text',
		'sanitization_cb' => 'prx_allow_html',
	) );

	$cmb_section_2->add_field( array(
		'name'       => esc_html__( 'Texto da Seção #2', 'cmb2' ),
		'id'         => $prefix . 'text',
		'type'       => 'textarea',
		'sanitization_cb' => 'prx_allow_html',
	) );

	$cmb_section_2->add_field( array(
		'name' 				=> __( 'Imagem', 'laf' ),
		'id'   				=> $prefix . 'img',
		'type' 				=> 'file',
		'text'				=> array(
			'add_upload_file_text' => __('Adicionar arquivo', 'laf') // Change upload button text. Default: "Add or Upload File"
		),
		'attributes' 		=> array(
			'placeholder' 	=> 'http://',
		)
	) );

	$prefix = 'bi_section_3_';

	$cmb_section_3 = new_cmb2_box( array(
		'id'            => $prefix . 'metabox',
		'title'         => __( 'Seção #3', 'laf' ),
		'object_types'  => array( 'page' ), // Post type
		'show_on_cb' => 'laf_show_if_bi', // function should return a bool value
	) );

	$cmb_section_3->add_field( array(
		'name' => esc_html__( 'Exibir Seção #3?', 'cmb2' ),
		'id'   => $prefix . 'show',
		'type' => 'checkbox',
	) );

	$cmb_section_3->add_field( array(
		'name'       => esc_html__( 'Título da Seção #3', 'cmb2' ),
		'id'         => $prefix . 'title',
		'type'       => 'text',
		'sanitization_cb' => 'prx_allow_html',
	) );

	$cmb_section_3->add_field( array(
		'name' 				=> __( 'Imagem', 'laf' ),
		'id'   				=> $prefix . 'img',
		'type' 				=> 'file',
		'text'				=> array(
			'add_upload_file_text' => __('Adicionar arquivo', 'laf') // Change upload button text. Default: "Add or Upload File"
		),
		'attributes' 		=> array(
			'placeholder' 	=> 'http://',
		)
	) );

	$cmb_section_3->add_field( array(
		'name'       => esc_html__( 'Texto da Seção #3', 'cmb2' ),
		'id'         => $prefix . 'text',
		'type'       => 'textarea',
		'sanitization_cb' => 'prx_allow_html',
	) );

	$cmb_section_3->add_field( array(
		'name'       => esc_html__( 'Itens', 'cmb2' ),
		'id'         => $prefix . 'title_html',
		'type'       => 'title',
		'sanitization_cb' => 'prx_allow_html',
	) );

	$group_field_id = $cmb_section_3->add_field( array(
		'id'          => $prefix . 'area',
		'type'        => 'group',
		// 'description' => esc_html__( 'Adicione os Itens.', 'cmb2' ),
		'options'     => array(
			'group_title'   => esc_html__( 'Item {#}', 'cmb2' ), // {#} gets replaced by row number
			'add_button'    => esc_html__( 'Adicionar novo Item', 'cmb2' ),
			'remove_button' => esc_html__( 'Remover Item', 'cmb2' ),
			'sortable'      => true, // beta
			// 'closed'     => true, // true to have the groups closed by default
		),
	) );

	$cmb_section_3->add_group_field( $group_field_id, array(
		'name' 				=> __( 'Título', 'laf' ),
		'id'   				=> $prefix . 'title',
		'type' 				=> 'text',
		'sanitization_cb' => 'prx_allow_html',
		'attributes' 		=> array(
		)
	) );

	$cmb_section_3->add_group_field( $group_field_id, array(
		'name' 				=> __( 'Texto', 'laf' ),
		'id'   				=> $prefix . 'text',
		'type' 				=> 'textarea',
		'sanitization_cb' => 'prx_allow_html',
		'attributes' 		=> array(
		)
	) );

	$prefix = 'bi_cta_';

	$cmb_cta = new_cmb2_box( array(
		'id'            => $prefix . 'metabox',
		'title'         => __( 'Call To Action (CTA)', 'laf' ),
		'object_types'  => array( 'page' ), // Post type
		'show_on_cb' => 'laf_show_if_bi', // function should return a bool value
	) );

	$cmb_cta->add_field( array(
		'name' => esc_html__( 'Exibir CTA?', 'cmb2' ),
		'id'   => $prefix . 'show',
		'type' => 'checkbox',
	) );

	$cmb_cta->add_field( array(
		'name' 				=> __( 'Imagem', 'laf' ),
		'id'   				=> $prefix . 'img',
		'type' 				=> 'file',
		'text'				=> array(
			'add_upload_file_text' => __('Adicionar arquivo', 'laf') // Change upload button text. Default: "Add or Upload File"
		),
		'attributes' 		=> array(
			'placeholder' 	=> 'http://',
		)
	) );

	$cmb_cta->add_field( array(
		'name'       => esc_html__( 'Texto do CTA', 'cmb2' ),
		'id'         => $prefix . 'text',
		'type'       => 'text',
		'sanitization_cb' => 'prx_allow_html',
	) );

	$cmb_cta->add_field( array(
		'name'       => esc_html__( 'Texto do botão', 'cmb2' ),
		'id'         => $prefix . 'btn_txt',
		'type'       => 'text',
		'sanitization_cb' => 'prx_allow_html',
	) );

	// $cmb_cta->add_field( array(
	// 	'name' 				=> __( 'Url do botão', 'laf' ),
	// 	'id'   				=> $prefix . 'btn_url',
	// 	'type' 				=> 'text_url',
	// 	'attributes' 		=> array(
	// 		'placeholder' 	=> 'http://',
	// 		// 'required'		=> ''
	// 	)
	// ) );

	$prefix = 'bi_section_4_';

	$cmb_section_4 = new_cmb2_box( array(
		'id'            => $prefix . 'metabox',
		'title'         => __( 'Seção #4', 'laf' ),
		'object_types'  => array( 'page' ), // Post type
		'show_on_cb' => 'laf_show_if_bi', // function should return a bool value
	) );

	$cmb_section_4->add_field( array(
		'name' => esc_html__( 'Exibir Seção #4?', 'cmb2' ),
		'id'   => $prefix . 'show',
		'type' => 'checkbox',
	) );

	$cmb_section_4->add_field( array(
		'name'       => esc_html__( 'Título da Seção #4', 'cmb2' ),
		'id'         => $prefix . 'title',
		'type'       => 'text',
		'sanitization_cb' => 'prx_allow_html',
	) );

	$cmb_section_4->add_field( array(
		'name'       => esc_html__( 'Texto da Seção #4', 'cmb2' ),
		'id'         => $prefix . 'text',
		'type'       => 'textarea',
		'sanitization_cb' => 'prx_allow_html',
	) );

	$cmb_section_4->add_field( array(
		'name' 				=> __( 'Imagem', 'laf' ),
		'id'   				=> $prefix . 'img',
		'type' 				=> 'file',
		'text'				=> array(
			'add_upload_file_text' => __('Adicionar arquivo', 'laf') // Change upload button text. Default: "Add or Upload File"
		),
		'attributes' 		=> array(
			'placeholder' 	=> 'http://',
		)
	) );

	$cmb_section_4->add_field( array(
		'name'       => esc_html__( 'Itens', 'cmb2' ),
		'id'         => $prefix . 'title_html',
		'type'       => 'title',
		'sanitization_cb' => 'prx_allow_html',
	) );

	$group_field_id = $cmb_section_4->add_field( array(
		'id'          => $prefix . 'area',
		'type'        => 'group',
		// 'description' => esc_html__( 'Adicione os Itens.', 'cmb2' ),
		'options'     => array(
			'group_title'   => esc_html__( 'Item {#}', 'cmb2' ), // {#} gets replaced by row number
			'add_button'    => esc_html__( 'Adicionar novo Item', 'cmb2' ),
			'remove_button' => esc_html__( 'Remover Item', 'cmb2' ),
			'sortable'      => true, // beta
			// 'closed'     => true, // true to have the groups closed by default
		),
	) );

	$cmb_section_4->add_group_field( $group_field_id, array(
		'name' 				=> __( 'Título', 'laf' ),
		'id'   				=> $prefix . 'title',
		'type' 				=> 'text',
		'sanitization_cb' => 'prx_allow_html',
		'attributes' 		=> array(
		)
	) );

	$cmb_section_4->add_group_field( $group_field_id, array(
		'name' 				=> __( 'Texto', 'laf' ),
		'id'   				=> $prefix . 'text',
		'type' 				=> 'textarea',
		'sanitization_cb' => 'prx_allow_html',
		'attributes' 		=> array(
		)
	) );

}

function laf_show_if_bi() {

	if(isset($_GET['post']) || isset($_GET['post_ID'])) :

		$post_id = $_GET['post'] ? $_GET['post'] : $_POST['post_ID'] ;
		
		if( !isset( $post_id ) ) 
			return;
		
		$template_file = get_post_meta($post_id, '_wp_page_template', true);
		$templates = array( 'bi-page.php' );
		
		if(in_array($template_file, $templates))
			return true;
		else
			return false;
	endif;

}