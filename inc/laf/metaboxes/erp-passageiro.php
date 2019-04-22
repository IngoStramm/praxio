<?php 
add_action( 'cmb2_admin_init', 'erp_passageiro_page_register_metabox' );

function erp_passageiro_page_register_metabox() {

	$prefix = 'erp_passageiro_banner_';

	$cmb_banner = new_cmb2_box( array(
		'id'            => $prefix . 'banner',
		'title'         => __( 'Banner', 'laf' ),
		'object_types'  => array( 'page' ), // Post type
		'show_on_cb' => 'laf_show_if_erp_passageiro', // function should return a bool value
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
	));

    $cmb_banner->add_field( array(
        'name'       => esc_html__( 'Lista', 'cmb2' ),
        'id'         => $prefix . 'ul_list',
        'type'       => 'textarea',
        'sanitization_cb' => 'prx_allow_html',
    ));

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

    /**
     * SECTION 1
     */
    $prefix = 'erp_passageiro_section_1_';

    $cmb_section_1 = new_cmb2_box( array(
        'id'            => $prefix . 'metabox',
        'title'         => esc_html__( 'Seção #1', 'cmb2' ),
        'object_types'  => array( 'page' ), // Post type
        'show_on_cb' => 'laf_show_if_erp_passageiro', // function should return a bool value
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

    /**
     * SECTION 2
     */

    $prefix = 'erp_passageiro_section_2_';

    /**
     * Sample metabox to demonstrate each field type included
     */
    $cmb_section_2 = new_cmb2_box( array(
        'id'            => $prefix . 'metabox',
        'title'         => esc_html__( 'Seção #2', 'cmb2' ),
        'object_types'  => array( 'page' ), // Post type
        'show_on_cb' => 'laf_show_if_erp_passageiro', // function should return a bool value
    ) );

    $cmb_section_2->add_field( array(
        'name' => esc_html__( 'Exibir Seção #2?', 'cmb2' ),
        'id'   => $prefix . 'show',
        'type' => 'checkbox',
    ) );

    $cmb_section_2->add_field( array(
        'name'       => esc_html__( 'Texto', 'cmb2' ),
        'id'         => $prefix . 'text_1',
        'type'       => 'text',
        'sanitization_cb' => 'prx_allow_html',
    ) );

    /**
     * SECTION 2 TABS
     */
    $prefix = 'erp_passageiro_section_2_tabs_';

    $cmb_section_2_tabs = new_cmb2_box( array(
        'id'            => $prefix . 'banner',
        'title'         => __( 'Abas Seção #2', 'laf' ),
        'object_types'  => array( 'page' ), // Post type
        'show_on_cb' => 'laf_show_if_erp_passageiro', // function should return a bool value
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
        'desc'				=> __( 'Ícone da aba inativa', 'laf' ),
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
        'name' 				=> __( 'Ícone da Aba (ativa)', 'laf' ),
        'desc'				=> __( 'Ícone da aba ativa', 'laf' ),
        'id'   				=> $prefix . 'icon_tab_active',
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
        'name' 				=> __( 'Título do texto', 'laf' ),
        'id'   				=> $prefix . 'title_text_tab',
        'type' 				=> 'text',
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

    /**
     * SECTION 3
     */
    $prefix = 'erp_passageiro_section_3_';

    $cmb_section_3 = new_cmb2_box( array(
        'id'            => $prefix . 'metabox',
        'title'         => esc_html__( 'Seção #3', 'cmb2' ),
        'object_types'  => array( 'page' ), // Post type
        'show_on_cb' => 'laf_show_if_erp_passageiro', // function should return a bool value
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
        'name'       => esc_html__( 'Título 2', 'cmb2' ),
        'id'         => $prefix . 'title_2',
        'type'       => 'text',
        'sanitization_cb' => 'prx_allow_html',
    ) );

    $cmb_section_3->add_field( array(
        'name'       => esc_html__( 'Texto', 'cmb2' ),
        'id'         => $prefix . 'text',
        'type'       => 'textarea',
        'sanitization_cb' => 'prx_allow_html',
    ) );

    /**
     * SESSION 4
     */
    $prefix = 'erp_passageiro_section_4_';

    $cmb_section_4 = new_cmb2_box( array(
        'id'            => $prefix . 'metabox',
        'title'         => __( 'Seção #4', 'laf' ),
        'object_types'  => array( 'page' ), // Post type
        'show_on_cb' => 'laf_show_if_erp_passageiro', // function should return a bool value
    ) );

    $cmb_section_4->add_field( array(
        'name' => esc_html__( 'Exibir Seção #4?', 'cmb2' ),
        'id'   => $prefix . 'show',
        'type' => 'checkbox',
    ) );

    $cmb_section_4->add_field( array(
        'name' 				=> __( 'Plano de fundo', 'laf' ),
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
        'name'       => esc_html__( 'Abas', 'cmb2' ),
        'id'         => $prefix . 'abas_title',
        'type'       => 'title',
    ) );

    $group_field_id = $cmb_section_4->add_field( array(
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

    $cmb_section_4->add_group_field( $group_field_id, array(
        'name' 				=> __( 'Título do botão', 'laf' ),
        'id'   				=> $prefix . 'title_button',
        'type' 				=> 'text',
        'sanitization_cb' => 'prx_allow_html',
    ) );

    $cmb_section_4->add_group_field( $group_field_id, array(
        'name' 				=> __( 'Ícone do botão', 'laf' ),
        'desc'				=> __( 'Ícone do botão inativo (32x32px ou proporcional).', 'laf' ),
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

    $cmb_section_4->add_group_field( $group_field_id, array(
        'name' 				=> __( 'Ícone do botão (Ativo)', 'laf' ),
        'desc'				=> __( 'Ícone do botão ativo (32x32px ou proporcional).', 'laf' ),
        'id'   				=> $prefix . 'icon_tab_active',
        'type' 				=> 'file',
        'text'				=> array(
            'add_upload_file_text' => __('Adicionar arquivo', 'laf') // Change upload button text. Default: "Add or Upload File"
        ),
        'attributes' 		=> array(
            'placeholder' 	=> 'http://',
            // 'required'		=> ''
        )
    ) );

    $cmb_section_4->add_group_field( $group_field_id, array(
        'name' 				=> __( 'Título do Texto', 'laf' ),
        'desc'				=> __( 'Normalmente a primeira linha do conteúdo', 'laf' ),
        'id'   				=> $prefix . 'linha_1',
        'type' 				=> 'text',
        'sanitization_cb' => 'prx_allow_html',
    ) );

    $cmb_section_4->add_group_field( $group_field_id, array(
        'name' 				=> __( 'Conteúdo do Texto', 'laf' ),
        'desc'				=> __( 'Conteúdo formadado. Pode ser texto ou listas UL/LI', 'laf' ),
        'id'   				=> $prefix . 'linha_2',
        'type' 				=> 'textarea',
        'sanitization_cb' => 'prx_allow_html',
    ) );

    /**
     * SESSION 5
     */
    $prefix = 'erp_passageiro_section_5_';

    $cmb_section_5 = new_cmb2_box( array(
        'id'            => $prefix . 'metabox',
        'title'         => esc_html__( 'Seção #5', 'cmb2' ),
        'object_types'  => array( 'page' ), // Post type
        'show_on_cb' => 'laf_show_if_erp_passageiro', // function should return a bool value
    ) );

    $cmb_section_5->add_field( array(
        'name' => esc_html__( 'Exibir Seção #5?', 'cmb2' ),
        'id'   => $prefix . 'show',
        'type' => 'checkbox',
    ) );

    $cmb_section_5->add_field( array(
        'name'       => esc_html__( 'Título Principal', 'cmb2' ),
        'id'         => $prefix . 'title',
        'type'       => 'text',
        'sanitization_cb' => 'prx_allow_html',
    ) );

    /**
     * SESSION 5 SLIDER
     */
    $prefix = 'erp_passageiro_section_5_slider_';

    $cmb_section_5_slider = new_cmb2_box( array(
        'id'            => $prefix . 'banner',
        'title'         => __( 'Slider Seção #5', 'laf' ),
        'object_types'  => array( 'page' ), // Post type
        'show_on_cb' => 'laf_show_if_erp_passageiro', // function should return a bool value
    ) );

    $group_field_id = $cmb_section_5_slider->add_field( array(
        'id'          => $prefix . 'slide',
        'type'        => 'group',
        'description' => esc_html__( 'Adicione os slides da Seção #5', 'cmb2' ),
        'options'     => array(
            'group_title'   => esc_html__( 'Slide {#}', 'cmb2' ), // {#} gets replaced by row number
            'add_button'    => esc_html__( 'Adicionar', 'cmb2' ),
            'remove_button' => esc_html__( 'Remover', 'cmb2' ),
            'sortable'      => true, // beta
            // 'closed'     => true, // true to have the groups closed by default
        ),
    ) );

    $cmb_section_5_slider->add_group_field( $group_field_id, array(
        'name' 				=> __( 'Texto', 'laf' ),
        'id'   				=> $prefix . 'text',
        'type' 				=> 'text',
        'sanitization_cb' => 'prx_allow_html',
        'attributes' 		=> array(
            // 'required'		=> ''
        )
    ) );

    $cmb_section_5_slider->add_group_field( $group_field_id, array(
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
    $prefix = 'erp_passageiro_section_5_list_';

    $cmb_section_5_list = new_cmb2_box( array(
        'id'            => $prefix . 'list',
        'title'         => __( 'Listas Seção #5', 'laf' ),
        'object_types'  => array( 'page' ), // Post type
        'show_on_cb' => 'laf_show_if_erp_passageiro', // function should return a bool value
    ) );

    $group_field_id = $cmb_section_5_list->add_field( array(
        'id'          => $prefix . 'list',
        'type'        => 'group',
        'description' => esc_html__( 'Adicione os itens da lista da Seção #5', 'cmb2' ),
        'options'     => array(
            'group_title'   => esc_html__( 'Item {#}', 'cmb2' ), // {#} gets replaced by row number
            'add_button'    => esc_html__( 'Adicionar', 'cmb2' ),
            'remove_button' => esc_html__( 'Remover', 'cmb2' ),
            'sortable'      => true, // beta
            // 'closed'     => true, // true to have the groups closed by default
        ),
    ) );

    $cmb_section_5_list->add_group_field( $group_field_id, array(
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

    $cmb_section_5_list->add_group_field( $group_field_id, array(
        'name' 				=> __( 'Título', 'laf' ),
        'id'   				=> $prefix . 'title',
        'type' 				=> 'text',
        'sanitization_cb' => 'prx_allow_html',
        'attributes' 		=> array(
            // 'required'		=> ''
        )
    ) );

    $cmb_section_5_list->add_group_field( $group_field_id, array(
        'name' 				=> __( 'Texto', 'laf' ),
        'id'   				=> $prefix . 'text',
        'type' 				=> 'textarea',
        'sanitization_cb' => 'prx_allow_html',
        'attributes' 		=> array(
            // 'required'		=> ''
        )
    ) );

}

function laf_show_if_erp_passageiro() {

	if(isset($_GET['post']) || isset($_GET['post_ID'])) :

		$post_id = $_GET['post'] ? $_GET['post'] : $_POST['post_ID'] ;
		
		if( !isset( $post_id ) ) 
			return;
		
		$template_file = get_post_meta($post_id, '_wp_page_template', true);
		$templates = array( 'erp-passageiro-page.php' );
		
		if(in_array($template_file, $templates))
			return true;
		else
			return false;
	endif;

}