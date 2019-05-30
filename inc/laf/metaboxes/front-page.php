<?php 
add_action( 'cmb2_admin_init', 'front_page_register_metabox' );

function front_page_register_metabox() {

	$prefix = 'front_page_banner_';

	$cmb_banner = new_cmb2_box( array(
		'id'            => $prefix . 'banner',
		'title'         => __( 'Banner', 'laf' ),
		'object_types'  => array( 'page' ), // Post type
		'show_on_cb' => 'laf_show_if_front_page', // function should return a bool value
	) );

	$cmb_banner->add_field( array(
		'name' => esc_html__( 'Exibir banner?', 'cmb2' ),
		// 'desc' => esc_html__( 'field description (optional)', 'cmb2' ),
		'id'   => $prefix . 'show',
		'type' => 'checkbox',
	) );

	$group_field_id = $cmb_banner->add_field( array(
		'id'          => $prefix . 'slide',
		'type'        => 'group',
		'description' => esc_html__( 'Adicione os slides do banner na homepage.', 'cmb2' ),
		'options'     => array(
			'group_title'   => esc_html__( 'Slide {#}', 'cmb2' ), // {#} gets replaced by row number
			'add_button'    => esc_html__( 'Adicionar novo Slide', 'cmb2' ),
			'remove_button' => esc_html__( 'Remover Slide', 'cmb2' ),
			'sortable'      => true, // beta
			// 'closed'     => true, // true to have the groups closed by default
		),
	) );
	
	$cmb_banner->add_group_field( $group_field_id, array(
		'name' 				=> __( 'Imagem do banner', 'laf' ),
		// 'desc'				=> __( 'Imagem do banner principal', 'laf' ),
		'id'   				=> $prefix . 'slide_img',
		'type' 				=> 'file',
		'text'				=> array(
			'add_upload_file_text' => __('Adicionar arquivo', 'laf') // Change upload button text. Default: "Add or Upload File"
		),
		'attributes' 		=> array(
			'placeholder' 	=> 'http://',
			// 'required'		=> ''
		)
	) );

	$cmb_banner->add_group_field( $group_field_id, array(
		'name' 				=> __( 'Texto da linha #1 do banner', 'laf' ),
		'id'   				=> $prefix . 'slide_txt_linha_1',
		'type' 				=> 'text',
		'sanitization_cb' => 'prx_allow_html',
		'attributes' 		=> array(
			// 'required'		=> ''
		)
	) );

	$cmb_banner->add_group_field( $group_field_id, array(
		'name' 				=> __( 'Texto da linha #2 do banner', 'laf' ),
		'id'   				=> $prefix . 'slide_txt_linha_2',
		'type' 				=> 'text',
		'sanitization_cb' => 'prx_allow_html',
		'attributes' 		=> array(
			// 'required'		=> ''
		)
	) );

	$cmb_banner->add_group_field( $group_field_id, array(
		'name' 				=> __( 'Texto do botão do banner (por ex: "Receba nossa Ligação")', 'laf' ),
		'id'   				=> $prefix . 'slide_btn_text',
		'type' 				=> 'text_medium',
		'attributes' 		=> array(
			// 'required'		=> ''
		)
	) );

	$cmb_banner->add_group_field( $group_field_id, array(
		'name' 				=> __( 'Url do botão do banner', 'laf' ),
		'id'   				=> $prefix . 'slide_btn_url',
		'type' 				=> 'text_url',
		'attributes' 		=> array(
			'placeholder' 	=> 'http://',
			// 'required'		=> ''
		)
	) );


	$prefix = 'front_page_section_1_';

	/**
	 * Sample metabox to demonstrate each field type included
	 */
	$cmb_section_1 = new_cmb2_box( array(
		'id'            => $prefix . 'metabox',
		'title'         => esc_html__( 'Seção #1', 'cmb2' ),
		'object_types'  => array( 'page' ), // Post type
		'show_on_cb' => 'laf_show_if_front_page', // function should return a bool value
	) );

	$cmb_section_1->add_field( array(
		'name' => esc_html__( 'Exibir Seção #1?', 'cmb2' ),
		'id'   => $prefix . 'show',
		'type' => 'checkbox',
	) );

	$cmb_section_1->add_field( array(
		'name'       => esc_html__( 'Título', 'cmb2' ),
		'id'         => $prefix . 'title',
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
			// 'required'		=> ''
		)
	) );

	$cmb_section_1->add_field( array(
		'name'       => esc_html__( 'Título da Imagem', 'cmb2' ),
		'id'         => $prefix . 'img_title',
		'type'       => 'text',
		'sanitization_cb' => 'prx_allow_html',
	) );

	$cmb_section_1->add_field( array(
		'name'       => esc_html__( 'Texto da Imagem', 'cmb2' ),
		'id'         => $prefix . 'img_text',
		'type'       => 'textarea',
	) );

	$cmb_section_1->add_field( array(
		'name'       => esc_html__( 'Texto do botão #1', 'cmb2' ),
		'id'         => $prefix . 'btn_1_txt',
		'type'       => 'text',
	) );

	$cmb_section_1->add_field( array(
		'name' 				=> __( 'Url do botão #1', 'laf' ),
		'id'   				=> $prefix . 'btn_1_url',
		'type' 				=> 'text_url',
		'attributes' 		=> array(
			'placeholder' 	=> 'http://',
			// 'required'		=> ''
		)
	) );

	$cmb_section_1->add_field( array(
		'name'       => esc_html__( 'Texto do botão #2', 'cmb2' ),
		'id'         => $prefix . 'btn_2_txt',
		'type'       => 'text',
	) );

	$cmb_section_1->add_field( array(
		'name' 				=> __( 'Url do botão #2', 'laf' ),
		'id'   				=> $prefix . 'btn_2_url',
		'type' 				=> 'text_url',
		'attributes' 		=> array(
			'placeholder' 	=> 'http://',
			// 'required'		=> ''
		)
	) );

	$prefix = 'front_page_section_2_';

	/**
	 * Sample metabox to demonstrate each field type included
	 */
	$cmb_section_2 = new_cmb2_box( array(
		'id'            => $prefix . 'metabox',
		'title'         => esc_html__( 'Seção #2', 'cmb2' ),
		'object_types'  => array( 'page' ), // Post type
		'show_on_cb' => 'laf_show_if_front_page', // function should return a bool value
	) );

	$cmb_section_2->add_field( array(
		'name' => esc_html__( 'Exibir Seção #2?', 'cmb2' ),
		'id'   => $prefix . 'show',
		'type' => 'checkbox',
	) );

	$cmb_section_2->add_field( array(
		'name'       => esc_html__( 'Texto #1 linha #1', 'cmb2' ),
		'id'         => $prefix . 'text_1_linha_1',
		'type'       => 'text',
		'sanitization_cb' => 'prx_allow_html',
	) );

	$cmb_section_2->add_field( array(
		'name'       => esc_html__( 'Texto #1 linha #2', 'cmb2' ),
		'id'         => $prefix . 'text_1_linha_2',
		'sanitization_cb' => 'prx_allow_html',
		'type'       => 'text',
	) );

	$cmb_section_2->add_field( array(
		'name'       => esc_html__( 'Texto #2 linha #1', 'cmb2' ),
		'id'         => $prefix . 'text_2_linha_1',
		'sanitization_cb' => 'prx_allow_html',
		'type'       => 'text',
	) );

	$cmb_section_2->add_field( array(
		'name'       => esc_html__( 'Texto #2 linha #2', 'cmb2' ),
		'id'         => $prefix . 'text_2_linha_2',
		'sanitization_cb' => 'prx_allow_html',
		'type'       => 'text',
	) );

	$prefix = 'front_page_section_2_tabs_';

	$cmb_section_2_tabs = new_cmb2_box( array(
		'id'            => $prefix . 'banner',
		'title'         => __( 'Abas Seção #2', 'laf' ),
		'object_types'  => array( 'page' ), // Post type
		'show_on_cb' => 'laf_show_if_front_page', // function should return a bool value
	) );

	$group_field_id = $cmb_section_2_tabs->add_field( array(
		'id'          => $prefix . 'slide',
		'type'        => 'group',
		'description' => esc_html__( 'Adicione o conteúdo das abas da Seção #2.', 'cmb2' ),
		'options'     => array(
			'group_title'   => esc_html__( 'Aba {#}', 'cmb2' ), // {#} gets replaced by row number
			'add_button'    => esc_html__( 'Adicionar', 'cmb2' ),
			'remove_button' => esc_html__( 'Remover', 'cmb2' ),
			'sortable'      => true, // beta
			// 'closed'     => true, // true to have the groups closed by default
		),
	) );
	
	$cmb_section_2_tabs->add_group_field( $group_field_id, array(
		'name' 				=> __( 'Ícone da Aba', 'laf' ),
		// 'desc'				=> __( 'Imagem do banner principal', 'laf' ),
		'id'   				=> $prefix . 'icon_tab',
		'type' 				=> 'file',
		'text'				=> array(
			'add_upload_file_text' => __('Adicionar arquivo', 'laf') // Change upload button text. Default: "Add or Upload File"
		),
		'attributes' 		=> array(
			'placeholder' 	=> 'http://',
			// 'required'		=> ''
		)
	) );

	$cmb_section_2_tabs->add_group_field( $group_field_id, array(
		'name' 				=> __( 'Título da aba', 'laf' ),
		'id'   				=> $prefix . 'title_tab',
		'type' 				=> 'text',
		'sanitization_cb' => 'prx_allow_html',
		'attributes' 		=> array(
			// 'required'		=> ''
		)
	) );

	$cmb_section_2_tabs->add_group_field( $group_field_id, array(
		'name' 				=> __( 'Texto da aba', 'laf' ),
		'id'   				=> $prefix . 'text_tab',
		'type' 				=> 'textarea',
		'attributes' 		=> array(
			// 'required'		=> ''
		)
	) );

	$prefix = 'front_page_section_3_';

	/**
	 * Sample metabox to demonstrate each field type included
	 */
	$cmb_section_3 = new_cmb2_box( array(
		'id'            => $prefix . 'metabox',
		'title'         => esc_html__( 'Seção #3', 'cmb2' ),
		'object_types'  => array( 'page' ), // Post type
		'show_on_cb' => 'laf_show_if_front_page', // function should return a bool value
	) );

	$cmb_section_3->add_field( array(
		'name' => esc_html__( 'Exibir Seção #3?', 'cmb2' ),
		'id'   => $prefix . 'show',
		'type' => 'checkbox',
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
		'name'       => esc_html__( 'Título', 'cmb2' ),
		'id'         => $prefix . 'title',
		'type'       => 'text',
		'sanitization_cb' => 'prx_allow_html',
	) );

	$cmb_section_3->add_field( array(
		'name'       => esc_html__( 'Texto', 'cmb2' ),
		'id'         => $prefix . 'text',
		'type'       => 'text',
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

	$prefix = 'front_page_extra_section_1_';

	/**
	 * Sample metabox to demonstrate each field type included
	 */
	$cmb_extra_section_1 = new_cmb2_box( array(
		'id'            => $prefix . 'metabox',
		'title'         => esc_html__( 'Seção Extra #1', 'cmb2' ),
		'object_types'  => array( 'page' ), // Post type
		'show_on_cb' => 'laf_show_if_front_page', // function should return a bool value
	) );

	$cmb_extra_section_1->add_field( array(
		'name' => esc_html__( 'Exibir Seção Extra #1?', 'cmb2' ),
		'id'   => $prefix . 'show',
		'type' => 'checkbox',
	) );

	$cmb_extra_section_1->add_field( array(
		'name'       => esc_html__( 'Título', 'cmb2' ),
		'id'         => $prefix . 'title',
		'type'       => 'text',
		'sanitization_cb' => 'prx_allow_html',
	) );

	$cmb_extra_section_1->add_field( array(
		'name'       => esc_html__( 'Título Destaque', 'cmb2' ),
		'id'         => $prefix . 'title_featured',
		'type'       => 'text',
	) );

	$prefix = 'front_page_extra_section_1_logos_';

	$cmb_extra_section_1_logos = new_cmb2_box( array(
		'id'            => $prefix . 'items',
		'title'         => __( 'Logos da Seção Extra #1', 'laf' ),
		'object_types'  => array( 'page' ), // Post type
		'show_on_cb' => 'laf_show_if_front_page', // function should return a bool value
	) );

	$group_field_id = $cmb_extra_section_1_logos->add_field( array(
		'id'          => $prefix . 'item',
		'type'        => 'group',
		'description' => esc_html__( 'Adicione os logos da Seção Extra #1.', 'cmb2' ),
		'options'     => array(
			'group_title'   => esc_html__( 'Logo {#}', 'cmb2' ), // {#} gets replaced by row number
			'add_button'    => esc_html__( 'Adicionar', 'cmb2' ),
			'remove_button' => esc_html__( 'Remover', 'cmb2' ),
			'sortable'      => true, // beta
			// 'closed'     => true, // true to have the groups closed by default
		),
	) );
	
	$cmb_extra_section_1_logos->add_group_field( $group_field_id, array(
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

	$prefix = 'front_page_extra_section_1_sanfona_';

	$cmb_extra_section_1_sanfona = new_cmb2_box( array(
		'id'            => $prefix . 'items',
		'title'         => __( 'Itens da Seção Extra #1', 'laf' ),
		'object_types'  => array( 'page' ), // Post type
		'show_on_cb' => 'laf_show_if_front_page', // function should return a bool value
	) );

	$group_field_id = $cmb_extra_section_1_sanfona->add_field( array(
		'id'          => $prefix . 'item',
		'type'        => 'group',
		'description' => esc_html__( 'Adicione o item da Seção Extra #1.', 'cmb2' ),
		'options'     => array(
			'group_title'   => esc_html__( 'Item {#}', 'cmb2' ), // {#} gets replaced by row number
			'add_button'    => esc_html__( 'Adicionar', 'cmb2' ),
			'remove_button' => esc_html__( 'Remover', 'cmb2' ),
			'sortable'      => true, // beta
			// 'closed'     => true, // true to have the groups closed by default
		),
	) );
	
	$cmb_extra_section_1_sanfona->add_group_field( $group_field_id, array(
		'name' 				=> __( 'Título', 'laf' ),
		'id'   				=> $prefix . 'title',
		'type' 				=> 'text',
	) );

	$cmb_extra_section_1_sanfona->add_group_field( $group_field_id, array(
		'name' 				=> __( 'Marca', 'laf' ),
		'id'   				=> $prefix . 'brand',
		'type' 				=> 'text',
		'repeatable'		=> true,
	) );

	$prefix = 'front_page_extra_section_2_';

	/**
	 * Sample metabox to demonstrate each field type included
	 */
	$cmb_extra_section_2 = new_cmb2_box( array(
		'id'            => $prefix . 'metabox',
		'title'         => esc_html__( 'Seção Extra #2', 'cmb2' ),
		'object_types'  => array( 'page' ), // Post type
		'show_on_cb' => 'laf_show_if_front_page', // function should return a bool value
	) );

	$cmb_extra_section_2->add_field( array(
		'name' => esc_html__( 'Exibir Seção Extra #2?', 'cmb2' ),
		'id'   => $prefix . 'show',
		'type' => 'checkbox',
	) );

	$cmb_extra_section_2->add_field( array(
		'name'       => esc_html__( 'Título', 'cmb2' ),
		'id'         => $prefix . 'title',
		'type'       => 'text',
		'sanitization_cb' => 'prx_allow_html',
	) );

	$cmb_extra_section_2->add_field( array(
		'name'       => esc_html__( 'Texto', 'cmb2' ),
		'id'         => $prefix . 'text',
		'type'       => 'textarea',
		'sanitization_cb' => 'prx_allow_html',
	) );

	$cmb_extra_section_2->add_field( array(
		'name'       => esc_html__( 'ID do vídeo do Youtube', 'cmb2' ),
		'desc'		=> __( 'Apenas o ID do vídeo, não o link inteiro.', 'cmb2 '),
		'id'         => $prefix . 'youtube',
		'type'       => 'text',
		// 'sanitization_cb' => 'prx_allow_html',
	) );

	$cmb_extra_section_2->add_field( array(
		'name' 				=> __( 'Imagem de Fundo', 'laf' ),
		'id'   				=> $prefix . 'bg',
		'type' 				=> 'file',
		'text'				=> array(
			'add_upload_file_text' => __('Adicionar arquivo', 'laf') // Change upload button text. Default: "Add or Upload File"
		),
		'attributes' 		=> array(
			'placeholder' 	=> 'http://',
			// 'required'		=> ''
		)
	) );

	$cmb_extra_section_2->add_field( array(
		'name' 				=> __( 'Thumb do Vídeo', 'laf' ),
		'id'   				=> $prefix . 'thumb',
		'type' 				=> 'file',
		'text'				=> array(
			'add_upload_file_text' => __('Adicionar arquivo', 'laf') // Change upload button text. Default: "Add or Upload File"
		),
		'attributes' 		=> array(
			'placeholder' 	=> 'http://',
			// 'required'		=> ''
		)
	) );

	$prefix = 'front_page_section_4_';

	/**
	 * Sample metabox to demonstrate each field type included
	 */
	$cmb_section_4 = new_cmb2_box( array(
		'id'            => $prefix . 'metabox',
		'title'         => esc_html__( 'Seção #4', 'cmb2' ),
		'object_types'  => array( 'page' ), // Post type
		'show_on_cb' => 'laf_show_if_front_page', // function should return a bool value
	) );

	$cmb_section_4->add_field( array(
		'name' => esc_html__( 'Exibir Seção #4?', 'cmb2' ),
		'id'   => $prefix . 'show',
		'type' => 'checkbox',
	) );

	$cmb_section_4->add_field( array(
		'name'       => esc_html__( 'Título', 'cmb2' ),
		'id'         => $prefix . 'title',
		'type'       => 'text',
		'sanitization_cb' => 'prx_allow_html',
	) );

	$cmb_section_4->add_field( array(
		'name'       => esc_html__( 'Texto', 'cmb2' ),
		'id'         => $prefix . 'text_1_linha_2',
		'type'       => 'textarea',
	) );

	$prefix = 'front_page_section_4_tabs_';

	$cmb_section_4_tabs = new_cmb2_box( array(
		'id'            => $prefix . 'banner',
		'title'         => __( 'Banner da Seção #4', 'laf' ),
		'object_types'  => array( 'page' ), // Post type
		'show_on_cb' => 'laf_show_if_front_page', // function should return a bool value
	) );

	$group_field_id = $cmb_section_4_tabs->add_field( array(
		'id'          => $prefix . 'slide',
		'type'        => 'group',
		'description' => esc_html__( 'Adicione os slides do banner da Seção #4.', 'cmb2' ),
		'options'     => array(
			'group_title'   => esc_html__( 'Slide {#}', 'cmb2' ), // {#} gets replaced by row number
			'add_button'    => esc_html__( 'Adicionar', 'cmb2' ),
			'remove_button' => esc_html__( 'Remover', 'cmb2' ),
			'sortable'      => true, // beta
			// 'closed'     => true, // true to have the groups closed by default
		),
	) );
	
	$cmb_section_4_tabs->add_group_field( $group_field_id, array(
		'name' 				=> __( 'Texto', 'laf' ),
		'id'   				=> $prefix . 'text',
		'type' 				=> 'text',
		'sanitization_cb' => 'prx_allow_html',
		'attributes' 		=> array(
			// 'required'		=> ''
		)
	) );

	$cmb_section_4_tabs->add_group_field( $group_field_id, array(
		'name' 				=> __( 'Ímagem', 'laf' ),
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

	$prefix = 'front_page_section_5_';

	/**
	 * Sample metabox to demonstrate each field type included
	 */
	$cmb_section_5 = new_cmb2_box( array(
		'id'            => $prefix . 'metabox',
		'title'         => esc_html__( 'Seção #5', 'cmb2' ),
		'object_types'  => array( 'page' ), // Post type
		'show_on_cb' => 'laf_show_if_front_page', // function should return a bool value
	) );

	$cmb_section_5->add_field( array(
		'name' => esc_html__( 'Exibir Seção #5?', 'cmb2' ),
		'id'   => $prefix . 'show',
		'type' => 'checkbox',
	) );

	$cmb_section_5->add_field( array(
		'name'       => esc_html__( 'Título', 'cmb2' ),
		'id'         => $prefix . 'title',
		'type'       => 'text',
		'sanitization_cb' => 'prx_allow_html',
	) );

	$cmb_section_5->add_field( array(
		'name'       => esc_html__( 'Chamada', 'cmb2' ),
		'id'         => $prefix . 'call',
		'type'       => 'text',
		'sanitization_cb' => 'prx_allow_html',
	) );

	$cmb_section_5->add_field( array(
		'name'       => esc_html__( 'Texto', 'cmb2' ),
		'id'         => $prefix . 'text',
		'type'       => 'textarea',
	) );

	$cmb_section_5->add_field( array(
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

	$cmb_section_5->add_field( array(
		'name'       => esc_html__( 'Texto', 'cmb2' ),
		'id'         => $prefix . 'img_text',
		'type'       => 'text',
		'sanitization_cb' => 'prx_allow_html',
	) );

	$cmb_section_5->add_field( array(
		'name'       => esc_html__( 'Texto do botão', 'cmb2' ),
		'id'         => $prefix . 'img_btn_txt',
		'type'       => 'text',
	) );

	$cmb_section_5->add_field( array(
		'name' 				=> __( 'Url do botão', 'laf' ),
		'id'   				=> $prefix . 'img_btn_url',
		'type' 				=> 'text_url',
		'attributes' 		=> array(
			'placeholder' 	=> 'http://',
			// 'required'		=> ''
		)
	) );

}
