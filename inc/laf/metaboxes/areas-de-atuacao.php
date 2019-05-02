<?php 
add_action( 'cmb2_admin_init', 'areas_de_atuacao_page_register_metabox' );

function areas_de_atuacao_page_register_metabox() {

	$prefix = 'areas_de_atuacao_banner_';

	$cmb_banner = new_cmb2_box( array(
		'id'            => $prefix . 'banner',
		'title'         => __( 'Banner', 'laf' ),
		'object_types'  => array( 'page' ), // Post type
		'show_on_cb' => 'laf_show_if_areas_de_atuacao', // function should return a bool value
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

	$cmb_banner->add_field( array(
		'name' 				=> __( 'Url do botão', 'laf' ),
		'id'   				=> $prefix . 'btn_url',
		'type' 				=> 'text_url',
		'attributes' 		=> array(
			'placeholder' 	=> 'http://',
			// 'required'		=> ''
		)
	) );

	$prefix = 'areas_de_atuacao_cta_';

	$cmb_cta = new_cmb2_box( array(
		'id'            => $prefix . 'cta',
		'title'         => __( 'Call To Action', 'laf' ),
		'object_types'  => array( 'page' ), // Post type
		'show_on_cb' => 'laf_show_if_areas_de_atuacao', // function should return a bool value
	) );

	$cmb_cta->add_field( array(
		'name' => esc_html__( 'Exibir Call To Action?', 'cmb2' ),
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
		'name'       => esc_html__( 'Texto', 'cmb2' ),
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

	$cmb_cta->add_field( array(
		'name' 				=> __( 'Url do botão', 'laf' ),
		'id'   				=> $prefix . 'btn_url',
		'type' 				=> 'text_url',
		'attributes' 		=> array(
			'placeholder' 	=> 'http://',
			// 'required'		=> ''
		)
	) );

	$prefix = 'areas_de_atuacao_areas_';

	$cmb_area = new_cmb2_box( array(
		'id'            => $prefix . 'banner',
		'title'         => __( 'Áreas de Atuação', 'laf' ),
		'object_types'  => array( 'page' ), // Post type
		'show_on_cb' => 'laf_show_if_areas_de_atuacao', // function should return a bool value
	) );

	$cmb_area->add_field( array(
		'name' => esc_html__( 'Exibir áreas?', 'cmb2' ),
		// 'desc' => esc_html__( 'field description (optional)', 'cmb2' ),
		'id'   => $prefix . 'show',
		'type' => 'checkbox',
	) );

	$group_field_id = $cmb_area->add_field( array(
		'id'          => $prefix . 'area',
		'type'        => 'group',
		'description' => esc_html__( 'Adicione as áreas de atuação.', 'cmb2' ),
		'options'     => array(
			'group_title'   => esc_html__( 'Área {#}', 'cmb2' ), // {#} gets replaced by row number
			'add_button'    => esc_html__( 'Adicionar nova Área', 'cmb2' ),
			'remove_button' => esc_html__( 'Remover Área', 'cmb2' ),
			'sortable'      => true, // beta
			// 'closed'     => true, // true to have the groups closed by default
		),
	) );
	
	$cmb_area->add_group_field( $group_field_id, array(
		'name' 				=> __( 'Imagem', 'laf' ),
		// 'desc'				=> __( 'Imagem do banner principal', 'laf' ),
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

	$cmb_area->add_group_field( $group_field_id, array(
		'name' 				=> __( 'Ícone', 'laf' ),
		// 'desc'				=> __( 'Imagem do banner principal', 'laf' ),
		'id'   				=> $prefix . 'icon',
		'type' 				=> 'file',
		'text'				=> array(
			'add_upload_file_text' => __('Adicionar arquivo', 'laf') // Change upload button text. Default: "Add or Upload File"
		),
		'attributes' 		=> array(
			'placeholder' 	=> 'http://',
			// 'required'		=> ''
		)
	) );

	$cmb_area->add_group_field( $group_field_id, array(
		'name' 				=> __( 'Título', 'laf' ),
		'id'   				=> $prefix . 'title',
		'type' 				=> 'text',
		'sanitization_cb' => 'prx_allow_html',
		'attributes' 		=> array(
			// 'required'		=> ''
		)
	) );

	$cmb_area->add_group_field( $group_field_id, array(
		'name' 				=> __( 'Texto', 'laf' ),
		'id'   				=> $prefix . 'text',
		'type' 				=> 'textarea',
		'sanitization_cb' => 'prx_allow_html',
		'attributes' 		=> array(
			// 'required'		=> ''
		)
	) );

	$cmb_area->add_group_field( $group_field_id, array(
		'name'       => esc_html__( 'Texto dos botões', 'cmb2' ),
		'id'         => $prefix . 'btn_txt',
		'type'       => 'text',
		'sanitization_cb' => 'prx_allow_html',
		'repeatable'		=> true
	) );

	$cmb_area->add_group_field( $group_field_id, array(
		'name' 				=> __( 'Url dos botões', 'laf' ),
		'id'   				=> $prefix . 'btn_url',
		'type' 				=> 'text_url',
		'attributes' 		=> array(
			'placeholder' 	=> 'http://',
			// 'required'		=> ''
		),
		'repeatable'		=> true
	) );

}

function laf_show_if_areas_de_atuacao() {

	if(isset($_GET['post']) || isset($_GET['post_ID'])) :

		$post_id = $_GET['post'] ? $_GET['post'] : $_POST['post_ID'] ;
		
		if( !isset( $post_id ) ) 
			return;
		
		$template_file = get_post_meta($post_id, '_wp_page_template', true);
		$templates = array( 'areas-de-atuacao-page.php' );
		
		if(in_array($template_file, $templates))
			return true;
		else
			return false;
	endif;

}