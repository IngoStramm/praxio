<?php 
add_action( 'cmb2_admin_init', 'gestao_de_oficinas_page_register_metabox' );

function gestao_de_oficinas_page_register_metabox() {

	$prefix = 'gestao_de_oficinas_banner_';

	$cmb_banner = new_cmb2_box( array(
		'id'            => $prefix . 'banner',
		'title'         => __( 'Banner', 'laf' ),
		'object_types'  => array( 'page' ), // Post type
		'show_on_cb' => 'laf_show_if_gestao_de_oficinas', // function should return a bool value
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

	$prefix = 'gestao_de_oficinas_section_1_';

	$cmb_section_1 = new_cmb2_box( array(
		'id'            => $prefix . 'metabox',
		'title'         => __( 'Seção #1', 'laf' ),
		'object_types'  => array( 'page' ), // Post type
		'show_on_cb' => 'laf_show_if_gestao_de_oficinas', // function should return a bool value
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
		'name'       => esc_html__( 'Caption da Imagem', 'cmb2' ),
		'id'         => $prefix . 'caption',
		'type'       => 'text',
		// 'sanitization_cb' => 'prx_allow_html',
	) );

	$prefix = 'gestao_de_oficinas_section_2_';

	/**
	 * Sample metabox to demonstrate each field type included
	 */
	$cmb_section_2 = new_cmb2_box( array(
		'id'            => $prefix . 'metabox',
		'title'         => esc_html__( 'Seção #2', 'cmb2' ),
		'object_types'  => array( 'page' ), // Post type
		'show_on_cb' => 'laf_show_if_gestao_de_oficinas', // function should return a bool value
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

	$cmb_section_2->add_field( array(
		'name'       => esc_html__( 'Texto', 'cmb2' ),
		'id'         => $prefix . 'text',
		'type'       => 'textarea',
		'sanitization_cb' => 'prx_allow_html',
	) );

	$cmb_section_2->add_field( array(
		'name'       => esc_html__( 'ID do vídeo do Youtube', 'cmb2' ),
		'desc'		=> __( 'Apenas o ID do vídeo, não o link inteiro.', 'cmb2 '),
		'id'         => $prefix . 'youtube',
		'type'       => 'text',
		// 'sanitization_cb' => 'prx_allow_html',
	) );

	$cmb_section_2->add_field( array(
		'name' 				=> __( 'Thumbnail do vídeo', 'laf' ),
		'id'   				=> $prefix . 'thumb',
		'type' 				=> 'file',
		'text'				=> array(
			'add_upload_file_text' => __('Adicionar arquivo', 'laf') // Change upload button text. Default: "Add or Upload File"
		),
		'attributes' 		=> array(
			'placeholder' 	=> 'http://',
		)
	) );

	$prefix = 'gestao_de_oficinas_section_3_';

	$cmb_section_3 = new_cmb2_box( array(
	    'id'            => $prefix . 'metabox',
	    'title'         => esc_html__( 'Seção #3', 'cmb2' ),
	    'object_types'  => array( 'page' ), // Post type
	    'show_on_cb' => 'laf_show_if_gestao_de_oficinas', // function should return a bool value
	) );

	$cmb_section_3->add_field( array(
	    'name' => esc_html__( 'Exibir Seção #5?', 'cmb2' ),
	    'id'   => $prefix . 'show',
	    'type' => 'checkbox',
	) );

	$cmb_section_3->add_field( array(
	    'name'       => esc_html__( 'Título Principal', 'cmb2' ),
	    'id'         => $prefix . 'title',
	    'type'       => 'text',
	    'sanitization_cb' => 'prx_allow_html',
	) );

	/**
	 * SESSION 5 SLIDER
	 */
	$prefix = 'gestao_de_oficinas_section_3_slider_';

	$cmb_section_3_slider = new_cmb2_box( array(
	    'id'            => $prefix . 'banner',
	    'title'         => __( 'Slider Seção #3', 'laf' ),
	    'object_types'  => array( 'page' ), // Post type
	    'show_on_cb' => 'laf_show_if_gestao_de_oficinas', // function should return a bool value
	) );

	$group_field_id = $cmb_section_3_slider->add_field( array(
	    'id'          => $prefix . 'slide',
	    'type'        => 'group',
	    'description' => esc_html__( 'Adicione os slides da Seção #3', 'cmb2' ),
	    'options'     => array(
	        'group_title'   => esc_html__( 'Slide {#}', 'cmb2' ), // {#} gets replaced by row number
	        'add_button'    => esc_html__( 'Adicionar', 'cmb2' ),
	        'remove_button' => esc_html__( 'Remover', 'cmb2' ),
	        'sortable'      => true, // beta
	        // 'closed'     => true, // true to have the groups closed by default
	    ),
	) );

	$cmb_section_3_slider->add_group_field( $group_field_id, array(
	    'name' 				=> __( 'Texto', 'laf' ),
	    'id'   				=> $prefix . 'text',
	    'type' 				=> 'text',
	    'sanitization_cb' => 'prx_allow_html',
	    'attributes' 		=> array(
	        // 'required'		=> ''
	    )
	) );

	$cmb_section_3_slider->add_group_field( $group_field_id, array(
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

	/**
	 * SESSION 5 LIST
	 */
	$prefix = 'gestao_de_oficinas_section_3_list_';

	$cmb_section_3_list = new_cmb2_box( array(
	    'id'            => $prefix . 'list',
	    'title'         => __( 'Listas Seção #3', 'laf' ),
	    'object_types'  => array( 'page' ), // Post type
	    'show_on_cb' => 'laf_show_if_gestao_de_oficinas', // function should return a bool value
	) );

	$group_field_id = $cmb_section_3_list->add_field( array(
	    'id'          => $prefix . 'list',
	    'type'        => 'group',
	    'description' => esc_html__( 'Adicione os itens da lista da Seção #3', 'cmb2' ),
	    'options'     => array(
	        'group_title'   => esc_html__( 'Item {#}', 'cmb2' ), // {#} gets replaced by row number
	        'add_button'    => esc_html__( 'Adicionar', 'cmb2' ),
	        'remove_button' => esc_html__( 'Remover', 'cmb2' ),
	        'sortable'      => true, // beta
	        // 'closed'     => true, // true to have the groups closed by default
	    ),
	) );

	$cmb_section_3_list->add_group_field( $group_field_id, array(
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

	$cmb_section_3_list->add_group_field( $group_field_id, array(
	    'name' 				=> __( 'Título', 'laf' ),
	    'id'   				=> $prefix . 'title',
	    'type' 				=> 'text',
	    'sanitization_cb' => 'prx_allow_html',
	    'attributes' 		=> array(
	        // 'required'		=> ''
	    )
	) );

	$cmb_section_3_list->add_group_field( $group_field_id, array(
	    'name' 				=> __( 'Texto', 'laf' ),
	    'id'   				=> $prefix . 'text',
	    'type' 				=> 'textarea',
	    'sanitization_cb' => 'prx_allow_html',
	    'attributes' 		=> array(
	        // 'required'		=> ''
	    )
	) );

	$prefix = 'gestao_de_oficinas_section_4_';

	$cmb_section_4 = new_cmb2_box( array(
	    'id'            => $prefix . 'metabox',
	    'title'         => __( 'Seção #4', 'laf' ),
	    'object_types'  => array( 'page' ), // Post type
	    'show_on_cb' => 'laf_show_if_gestao_de_oficinas', // function should return a bool value
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
	    'name'       => esc_html__( 'Subtítulo', 'cmb2' ),
	    'id'         => $prefix . 'subtitle',
	    'type'       => 'text',
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
	    'desc'				=> __( 'Adicione os itens da Sessão #4 com seus respectivos conteúdos.', 'laf' ),
	    'id'         => $prefix . 'abas_title',
	    'type'       => 'title',
	) );

	$group_field_id = $cmb_section_4->add_field( array(
	    'id'          => $prefix . 'item',
	    'type'        => 'group',
	    'options'     => array(
	        'group_title'   => esc_html__( 'Item {#}', 'cmb2' ), // {#} gets replaced by row number
	        'add_button'    => esc_html__( 'Adicionar novo Item', 'cmb2' ),
	        'remove_button' => esc_html__( 'Remover Item', 'cmb2' ),
	        'sortable'      => true, // beta
	        // 'closed'     => true, // true to have the groups closed by default
	    ),
	) );

	$cmb_section_4->add_group_field( $group_field_id, array(
	    'name' 				=> __( 'Título do item', 'laf' ),
	    'desc'				=> __( 'Normalmente a primeira linha do conteúdo', 'laf' ),
	    'id'   				=> $prefix . 'item_title',
	    'type' 				=> 'text',
	    'sanitization_cb' => 'prx_allow_html',
	) );

	$cmb_section_4->add_group_field( $group_field_id, array(
	    'name' 				=> __( 'Conteúdo do Texto', 'laf' ),
	    'desc'				=> __( 'Conteúdo formatado. Pode ser texto ou listas UL/LI', 'laf' ),
	    'id'   				=> $prefix . 'item_content',
	    'type' 				=> 'textarea',
	    'sanitization_cb' => 'prx_allow_html',
	) );

	$prefix = 'gestao_de_oficinas_section_5_';

	$cmb_section_5 = new_cmb2_box( array(
	    'id'            => $prefix . 'metabox',
	    'title'         => __( 'Seção #5', 'laf' ),
	    'object_types'  => array( 'page' ), // Post type
	    'show_on_cb' => 'laf_show_if_gestao_de_oficinas', // function should return a bool value
	) );

	$cmb_section_5->add_field( array(
	    'name' => esc_html__( 'Exibir Seção #5?', 'cmb2' ),
	    'id'   => $prefix . 'show',
	    'type' => 'checkbox',
	) );

	$cmb_section_5->add_field( array(
	    'name'       => esc_html__( 'Texto', 'cmb2' ),
	    'id'         => $prefix . 'text',
	    'type'       => 'textarea',
	    'sanitization_cb' => 'prx_allow_html',
	) );

}

function laf_show_if_gestao_de_oficinas() {

	if(isset($_GET['post']) || isset($_GET['post_ID'])) :

		$post_id = $_GET['post'] ? $_GET['post'] : $_POST['post_ID'] ;
		
		if( !isset( $post_id ) ) 
			return;
		
		$template_file = get_post_meta($post_id, '_wp_page_template', true);
		$templates = array( 'gestao-de-oficinas-page.php' );
		
		if(in_array($template_file, $templates))
			return true;
		else
			return false;
	endif;

}