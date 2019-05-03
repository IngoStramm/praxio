<?php 
add_action( 'cmb2_admin_init', 'sobre_page_register_metabox' );

function sobre_page_register_metabox() {

	$prefix = 'sobre_banner_';

	$cmb_banner = new_cmb2_box( array(
		'id'            => $prefix . 'banner',
		'title'         => __( 'Banner', 'laf' ),
		'object_types'  => array( 'page' ), // Post type
		'show_on_cb' => 'laf_show_if_sobre', // function should return a bool value
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

	$prefix = 'sobre_section_1_';

	$cmb_section_1 = new_cmb2_box( array(
		'id'            => $prefix . 'metabox',
		'title'         => __( 'Seção #1', 'laf' ),
		'object_types'  => array( 'page' ), // Post type
		'show_on_cb' => 'laf_show_if_sobre', // function should return a bool value
	) );

	$cmb_section_1->add_field( array(
		'name' => esc_html__( 'Exibir Seção #1?', 'cmb2' ),
		'id'   => $prefix . 'show',
		'type' => 'checkbox',
	) );

	$cmb_section_1->add_field( array(
		'name'       => esc_html__( 'Texto da Linha #1', 'cmb2' ),
		'id'         => $prefix . 'linha_1',
		'type'       => 'text',
		'sanitization_cb' => 'prx_allow_html',
	) );

	$cmb_section_1->add_field( array(
		'name'       => esc_html__( 'Texto da Linha #2', 'cmb2' ),
		'id'         => $prefix . 'linha_2',
		'type'       => 'text',
		'sanitization_cb' => 'prx_allow_html',
	) );

	$cmb_section_1->add_field( array(
		'name'       => esc_html__( 'Texto', 'cmb2' ),
		'id'         => $prefix . 'text',
		'type'       => 'textarea',
		'sanitization_cb' => 'prx_allow_html',
	) );

	$cmb_section_1->add_field( array(
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

	$cmb_section_1->add_field( array(
		'name'       => esc_html__( 'Título da imagem', 'cmb2' ),
		'id'         => $prefix . 'img_title',
		'type'       => 'text',
		'sanitization_cb' => 'prx_allow_html',
	) );

	$cmb_section_1->add_field( array(
		'name'       => esc_html__( 'Texto', 'cmb2' ),
		'id'         => $prefix . 'img_text',
		'type'       => 'textarea',
		'sanitization_cb' => 'prx_allow_html',
	) );

	$prefix = 'sobre_section_2_';

	$cmb_section_2 = new_cmb2_box( array(
		'id'            => $prefix . 'metabox',
		'title'         => __( 'Seção #2', 'laf' ),
		'object_types'  => array( 'page' ), // Post type
		'show_on_cb' => 'laf_show_if_sobre', // function should return a bool value
	) );

	$cmb_section_2->add_field( array(
		'name' => esc_html__( 'Exibir Seção #2?', 'cmb2' ),
		'id'   => $prefix . 'show',
		'type' => 'checkbox',
	) );

	$cmb_section_2->add_field( array(
		'name'       => esc_html__( 'Título', 'cmb2' ),
		'id'         => $prefix . 'title',
		'type'       => 'text',
		'sanitization_cb' => 'prx_allow_html',
	) );

	$group_field_id = $cmb_section_2->add_field( array(
		'id'          => $prefix . 'area',
		'type'        => 'group',
		'description' => esc_html__( 'Adicione as Marcas.', 'cmb2' ),
		'options'     => array(
			'group_title'   => esc_html__( 'Marca {#}', 'cmb2' ), // {#} gets replaced by row number
			'add_button'    => esc_html__( 'Adicionar nova Marca', 'cmb2' ),
			'remove_button' => esc_html__( 'Remover Marca', 'cmb2' ),
			'sortable'      => true, // beta
			// 'closed'     => true, // true to have the groups closed by default
		),
	) );

	$cmb_section_2->add_group_field( $group_field_id, array(
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

	$cmb_section_2->add_group_field( $group_field_id, array(
		'name' 				=> __( 'Texto', 'laf' ),
		'id'   				=> $prefix . 'text',
		'type' 				=> 'textarea',
		'sanitization_cb' => 'prx_allow_html',
		'attributes' 		=> array(
			// 'required'		=> ''
		)
	) );

	$cmb_section_2->add_group_field( $group_field_id, array(
		'name' 				=> __( 'Url', 'laf' ),
		'id'   				=> $prefix . 'url',
		'type' 				=> 'text',
		'attributes' 		=> array(
			'placeholder' 	=> 'http://',
			// 'required'		=> ''
		)
	) );

	$prefix = 'sobre_section_3_';

	$cmb_section_3 = new_cmb2_box( array(
		'id'            => $prefix . 'metabox',
		'title'         => __( 'Seção #3', 'laf' ),
		'object_types'  => array( 'page' ), // Post type
		'show_on_cb' => 'laf_show_if_sobre', // function should return a bool value
	) );

	$cmb_section_3->add_field( array(
		'name' => esc_html__( 'Exibir Seção #3?', 'cmb2' ),
		'id'   => $prefix . 'show',
		'type' => 'checkbox',
	) );

	$cmb_section_3->add_field( array(
		'name'       => esc_html__( 'Texto da Linha #1', 'cmb2' ),
		'id'         => $prefix . 'linha_1',
		'type'       => 'text',
		'sanitization_cb' => 'prx_allow_html',
	) );

	$cmb_section_3->add_field( array(
		'name'       => esc_html__( 'Texto da Linha #2', 'cmb2' ),
		'id'         => $prefix . 'linha_2',
		'type'       => 'text',
		'sanitization_cb' => 'prx_allow_html',
	) );

	$cmb_section_3->add_field( array(
		'name'       => esc_html__( 'Cidades', 'cmb2' ),
		'id'         => $prefix . 'uf',
		'type'       => 'text',
		'sanitization_cb' => 'prx_allow_html',
		'repeatable'	=> true
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

	$prefix = 'sobre_section_4_';

	$cmb_section_4 = new_cmb2_box( array(
		'id'            => $prefix . 'metabox',
		'title'         => __( 'Seção #4', 'laf' ),
		'object_types'  => array( 'page' ), // Post type
		'show_on_cb' => 'laf_show_if_sobre', // function should return a bool value
	) );

	$cmb_section_4->add_field( array(
		'name' => esc_html__( 'Exibir Seção #4?', 'cmb2' ),
		'id'   => $prefix . 'show',
		'type' => 'checkbox',
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
		'name'       => esc_html__( 'Título', 'cmb2' ),
		'id'         => $prefix . 'title',
		'type'       => 'text',
		'sanitization_cb' => 'prx_allow_html',
	) );

	$cmb_section_4->add_field( array(
		'name'       => esc_html__( 'Texto', 'cmb2' ),
		'id'         => $prefix . 'text',
		'type'       => 'textarea',
		'sanitization_cb' => 'prx_allow_html',
	) );

	$cmb_section_4->add_field( array(
		'name'       => esc_html__( 'Anos', 'cmb2' ),
		'id'         => $prefix . 'anos_title',
		'type'       => 'title',
	) );

	$cmb_section_4->add_field( array(
		'name' => esc_html__( 'Exibir Anos?', 'cmb2' ),
		'id'   => $prefix . 'anos_show',
		'type' => 'checkbox',
	) );

	$group_field_id = $cmb_section_4->add_field( array(
		'id'          => $prefix . 'ano',
		'type'        => 'group',
		// 'description' => esc_html__( 'Adicione os Anos.', 'cmb2' ),
		'options'     => array(
			'group_title'   => esc_html__( 'Ano {#}', 'cmb2' ), // {#} gets replaced by row number
			'add_button'    => esc_html__( 'Adicionar nova Ano', 'cmb2' ),
			'remove_button' => esc_html__( 'Remover Ano', 'cmb2' ),
			'sortable'      => true, // beta
			// 'closed'     => true, // true to have the groups closed by default
		),
	) );

	$cmb_section_4->add_group_field( $group_field_id, array(
		'name' 				=> __( 'Ano', 'laf' ),
		'id'   				=> $prefix . 'ano',
		'type' 				=> 'text',
		'attributes' 		=> array(
			'type'			=> 'number'
		)
	) );

	$cmb_section_4->add_group_field( $group_field_id, array(
		'name' 				=> __( 'Reais', 'laf' ),
		'id'   				=> $prefix . 'real',
		'type' 				=> 'text',
		'attributes' 		=> array(
			'type'			=> 'number'
		)
	) );

	$cmb_section_4->add_group_field( $group_field_id, array(
		'name' 				=> __( 'Funcionários', 'laf' ),
		'id'   				=> $prefix . 'funcionarios',
		'type' 				=> 'text',
		'attributes' 		=> array(
			'type'			=> 'number'
		)
	) );

	$cmb_section_4->add_group_field( $group_field_id, array(
		'name' 				=> __( 'Contratos', 'laf' ),
		'id'   				=> $prefix . 'contratos',
		'type' 				=> 'text',
		'attributes' 		=> array(
			'type'			=> 'number'
		)
	) );
	
	$cmb_section_4->add_field( array(
		'name'       => esc_html__( 'Texto da Linha #1', 'cmb2' ),
		'id'         => $prefix . 'linha_1',
		'type'       => 'text',
		'sanitization_cb' => 'prx_allow_html',
	) );

	$cmb_section_4->add_field( array(
		'name'       => esc_html__( 'Texto da Linha #2', 'cmb2' ),
		'id'         => $prefix . 'linha_2',
		'type'       => 'text',
		'sanitization_cb' => 'prx_allow_html',
	) );

	$cmb_section_4->add_field( array(
		'name'       => esc_html__( 'Profissionais', 'cmb2' ),
		'id'         => $prefix . 'profissionais_title',
		'type'       => 'title',
	) );

	$group_field_id = $cmb_section_4->add_field( array(
		'id'          => $prefix . 'profissionais',
		'type'        => 'group',
		// 'description' => esc_html__( 'Adicione os Profissionais.', 'cmb2' ),
		'options'     => array(
			'group_title'   => esc_html__( 'Profissional {#}', 'cmb2' ), // {#} gets replaced by row number
			'add_button'    => esc_html__( 'Adicionar nova Profissional', 'cmb2' ),
			'remove_button' => esc_html__( 'Remover Profissional', 'cmb2' ),
			'sortable'      => true, // beta
			// 'closed'     => true, // true to have the groups closed by default
		),
	) );

	$cmb_section_4->add_group_field( $group_field_id, array(
		'name' 				=> __( 'Ano', 'laf' ),
		'id'   				=> $prefix . 'ano',
		'type' 				=> 'text',
		'attributes' 		=> array(
			'type'			=> 'number'
		)
	) );

	$cmb_section_4->add_group_field( $group_field_id, array(
		'name' 				=> __( 'Texto', 'laf' ),
		'id'   				=> $prefix . 'text',
		'type' 				=> 'textarea',
		'sanitization_cb' => 'prx_allow_html',
	) );

	$prefix = 'sobre_section_5_';

	$cmb_section_5 = new_cmb2_box( array(
		'id'            => $prefix . 'metabox',
		'title'         => __( 'Seção #5', 'laf' ),
		'object_types'  => array( 'page' ), // Post type
		'show_on_cb' => 'laf_show_if_sobre', // function should return a bool value
	) );

	$cmb_section_5->add_field( array(
		'name' => esc_html__( 'Exibir Seção #5?', 'cmb2' ),
		'id'   => $prefix . 'show',
		'type' => 'checkbox',
	) );

	$cmb_section_5->add_field( array(
		'name'       => esc_html__( 'Texto da Linha #1', 'cmb2' ),
		'id'         => $prefix . 'linha_1',
		'type'       => 'text',
		'sanitization_cb' => 'prx_allow_html',
	) );

	$cmb_section_5->add_field( array(
		'name'       => esc_html__( 'Texto da Linha #2', 'cmb2' ),
		'id'         => $prefix . 'linha_2',
		'type'       => 'text',
		'sanitization_cb' => 'prx_allow_html',
	) );

	$cmb_section_5->add_field( array(
		'name'       => esc_html__( 'Texto', 'cmb2' ),
		'id'         => $prefix . 'text',
		'type'       => 'textarea',
		'sanitization_cb' => 'prx_allow_html',
	) );

	$prefix = 'sobre_section_6_';

	$cmb_section_6 = new_cmb2_box( array(
		'id'            => $prefix . 'metabox',
		'title'         => __( 'Seção #6', 'laf' ),
		'object_types'  => array( 'page' ), // Post type
		'show_on_cb' => 'laf_show_if_sobre', // function should return a bool value
	) );

	$cmb_section_6->add_field( array(
		'name' => esc_html__( 'Exibir Seção #6?', 'cmb2' ),
		'id'   => $prefix . 'show',
		'type' => 'checkbox',
	) );

	$cmb_section_6->add_field( array(
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

	$cmb_section_6->add_field( array(
		'name'       => esc_html__( 'Abas', 'cmb2' ),
		'id'         => $prefix . 'abas_title',
		'type'       => 'title',
	) );

	$group_field_id = $cmb_section_6->add_field( array(
		'id'          => $prefix . 'aba',
		'type'        => 'group',
		'options'     => array(
			'group_title'   => esc_html__( 'Aba {#}', 'cmb2' ), // {#} gets replaced by row number
			'add_button'    => esc_html__( 'Adicionar nova Aba', 'cmb2' ),
			'remove_button' => esc_html__( 'Remover Aba', 'cmb2' ),
			'sortable'      => true, // beta
			// 'closed'     => true, // true to have the groups closed by default
		),
	) );

	$cmb_section_6->add_group_field( $group_field_id, array(
		'name' 				=> __( 'Título', 'laf' ),
		'id'   				=> $prefix . 'title',
		'type' 				=> 'text',
		'sanitization_cb' => 'prx_allow_html',
	) );

	$cmb_section_6->add_group_field( $group_field_id, array(
		'name' 				=> __( 'Texto da Linha #1', 'laf' ),
		'id'   				=> $prefix . 'linha_1',
		'type' 				=> 'text',
		'sanitization_cb' => 'prx_allow_html',
	) );

	$cmb_section_6->add_group_field( $group_field_id, array(
		'name' 				=> __( 'Texto da Linha #2', 'laf' ),
		'id'   				=> $prefix . 'linha_2',
		'type' 				=> 'text',
		'sanitization_cb' => 'prx_allow_html',
	) );

}

function laf_show_if_sobre() {

	if(isset($_GET['post']) || isset($_GET['post_ID'])) :

		$post_id = $_GET['post'] ? $_GET['post'] : $_POST['post_ID'] ;
		
		if( !isset( $post_id ) ) 
			return;
		
		$template_file = get_post_meta($post_id, '_wp_page_template', true);
		$templates = array( 'sobre-page.php' );
		
		if(in_array($template_file, $templates))
			return true;
		else
			return false;
	endif;

}