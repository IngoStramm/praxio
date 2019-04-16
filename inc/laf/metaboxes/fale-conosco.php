<?php 
add_action( 'cmb2_admin_init', 'fale_conosco_register_metabox' );

function fale_conosco_register_metabox() {

	$prefix = 'fale_conosco_banner_';

	$cmb_banner = new_cmb2_box( array(
		'id'            => $prefix . 'banner',
		'title'         => __( 'Banner', 'laf' ),
		'object_types'  => array( 'page' ), // Post type
		'show_on_cb' => 'laf_show_if_fale_conosco', // function should return a bool value
	) );

	$cmb_banner->add_field( array(
		'name' => esc_html__( 'Exibir banner?', 'cmb2' ),
		// 'desc' => esc_html__( 'field description (optional)', 'cmb2' ),
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
			// 'required'		=> ''
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
		'name'       => esc_html__( 'Shortcode do formulário de contato', 'cmb2' ),
		'id'         => $prefix . 'cf7',
		'type'       => 'text',
		'sanitization_cb' => 'prx_allow_html',
	) );



	$prefix = 'fale_conosco_section_1_';

	$cmb_section_1 = new_cmb2_box( array(
		'id'            => $prefix . 'metabox',
		'title'         => esc_html__( 'Seção #1', 'cmb2' ),
		'object_types'  => array( 'page' ), // Post type
		'show_on_cb' => 'laf_show_if_fale_conosco', // function should return a bool value
	) );

	$cmb_section_1->add_field( array(
		'name' => esc_html__( 'Exibir Seção #1?', 'cmb2' ),
		'id'   => $prefix . 'show',
		'type' => 'checkbox',
	) );

	$cmb_section_1->add_field( array(
		'name'       => esc_html__( 'Texto', 'cmb2' ),
		'id'         => $prefix . 'text',
		'type'       => 'textarea',
		'sanitization_cb' => 'prx_allow_html',
	) );

	$cmb_section_1->add_field( array(
		'name'       => esc_html__( 'Título', 'cmb2' ),
		'id'         => $prefix . 'title',
		'type'       => 'text',
		'sanitization_cb' => 'prx_allow_html',
	) );



	$prefix = 'fale_conosco_section_2_';

	$cmb_section_2 = new_cmb2_box( array(
		'id'            => $prefix . 'metabox',
		'title'         => esc_html__( 'Seção #2', 'cmb2' ),
		'object_types'  => array( 'page' ), // Post type
		'show_on_cb' => 'laf_show_if_fale_conosco', // function should return a bool value
	) );

	$cmb_section_2->add_field( array(
		'name' => esc_html__( 'Exibir Seção #2?', 'cmb2' ),
		'id'   => $prefix . 'show',
		'type' => 'checkbox',
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
			// 'required'		=> ''
		)
	) );

	$cmb_section_2->add_field( array(
		'name'       => esc_html__( 'Título', 'cmb2' ),
		'id'         => $prefix . 'title',
		'type'       => 'text',
		'sanitization_cb' => 'prx_allow_html',
	) );

	$cmb_section_2->add_field( array(
		'name'       => esc_html__( 'Porcentagem ', 'cmb2' ),
		'id'         => $prefix . 'pc',
		'type'       => 'select',
		// 'show_option_none' => true,
		'options'          => 'prx_return_0_to_100'	
	) );

	$cmb_section_2->add_field( array(
		'name'       => esc_html__( 'Texto ', 'cmb2' ),
		'id'         => $prefix . 'text',
		'sanitization_cb' => 'prx_allow_html',
		'type'       => 'text',
	) );



	$prefix = 'fale_conosco_section_3_';

	/**
	 * Sample metabox to demonstrate each field type included
	 */
	$cmb_section_3 = new_cmb2_box( array(
		'id'            => $prefix . 'metabox',
		'title'         => esc_html__( 'Seção #3', 'cmb2' ),
		'object_types'  => array( 'page' ), // Post type
		'show_on_cb' => 'laf_show_if_fale_conosco', // function should return a bool value
	) );

	$cmb_section_3->add_field( array(
		'name' => esc_html__( 'Exibir Seção #3?', 'cmb2' ),
		'id'   => $prefix . 'show',
		'type' => 'checkbox',
	) );

	$cmb_section_3->add_field( array(
		'name'       => esc_html__( 'Título', 'cmb2' ),
		'id'         => $prefix . 'title',
		'type'       => 'text',
		'sanitization_cb' => 'prx_allow_html',
	) );

	$cmb_section_3->add_field( array(
		'name'       => esc_html__( 'Texto', 'cmb2' ),
		'id'         => $prefix . 'text',
		'type'       => 'textarea',
		'sanitization_cb' => 'prx_allow_html',
	) );

	$cmb_section_3->add_field( array(
		'name'       => esc_html__( 'Texto do botão', 'cmb2' ),
		'id'         => $prefix . 'btn_txt',
		'type'       => 'text',
		'sanitization_cb' => 'prx_allow_html',
	) );

	$cmb_section_3->add_field( array(
		'name' 				=> __( 'Url do botão', 'laf' ),
		'id'   				=> $prefix . 'btn_url',
		'type' 				=> 'text_url',
		'attributes' 		=> array(
			'placeholder' 	=> 'http://',
			// 'required'		=> ''
		)
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
			// 'required'		=> ''
		)
	) );

	$cmb_section_3->add_field( array(
		'name'       => esc_html__( 'Título da Imagem', 'cmb2' ),
		'id'         => $prefix . 'img_title',
		'type'       => 'text',
		'sanitization_cb' => 'prx_allow_html',
	) );

	$cmb_section_3->add_field( array(
		'name'       => esc_html__( 'Texto da Imagem', 'cmb2' ),
		'id'         => $prefix . 'img_text',
		'type'       => 'textarea',
		'sanitization_cb' => 'prx_allow_html',
	) );

}

function laf_show_if_fale_conosco() {

	if(isset($_GET['post']) || isset($_GET['post_ID'])) :

		$post_id = $_GET['post'] ? $_GET['post'] : $_POST['post_ID'] ;
		
		if( !isset( $post_id ) ) 
			return;
		
		$template_file = get_post_meta($post_id, '_wp_page_template', true);
		$templates = array('fale-conosco-page.php');
		
		if(in_array($template_file, $templates))
			return true;
		else
			return false;
	endif;

}