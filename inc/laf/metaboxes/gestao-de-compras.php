<?php 
add_action( 'cmb2_admin_init', 'gestao_de_compras_page_register_metabox' );

function gestao_de_compras_page_register_metabox() {

	$prefix = 'gestao_de_compras_banner_';

	$cmb_banner = new_cmb2_box( array(
		'id'            => $prefix . 'settings',
		'title'         => __( 'Banner', 'laf' ),
		'object_types'  => array( 'page' ), // Post type
		'show_on_cb' => 'laf_show_if_gestao_de_compras', // function should return a bool value
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
		'name'       => esc_html__( 'Texto da Linha #4', 'cmb2' ),
		'id'         => $prefix . 'linha_4',
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

	$prefix = 'gestao_de_compras_secao_1_';

	$cmb_secao_1 = new_cmb2_box( array(
		'id'            => $prefix . 'settings',
		'title'         => __( 'Seção #1', 'laf' ),
		'object_types'  => array( 'page' ), // Post type
		'show_on_cb' => 'laf_show_if_gestao_de_compras', // function should return a bool value
	) );

	$cmb_secao_1->add_field( array(
		'name' => esc_html__( 'Exibir Seção #1?', 'cmb2' ),
		'id'   => $prefix . 'show',
		'type' => 'checkbox',
	) );

	$cmb_secao_1->add_field( array(
		'name' 				=> __( 'Ícone da coluna #1', 'laf' ),
		'id'   				=> $prefix . 'col_1_img',
		'type' 				=> 'file',
		'text'				=> array(
			'add_upload_file_text' => __('Adicionar arquivo', 'laf') // Change upload button text. Default: "Add or Upload File"
		),
		'attributes' 		=> array(
			'placeholder' 	=> 'http://',
		)
	) );

	$cmb_secao_1->add_field( array(
		'name'       => esc_html__( 'Título da Coluna #1', 'cmb2' ),
		'id'         => $prefix . 'col_1_title',
		'type'       => 'text',
		'sanitization_cb' => 'prx_allow_html',
	) );

	$cmb_secao_1->add_field( array(
		'name'       => esc_html__( 'Texto da Coluna #1', 'cmb2' ),
		'id'         => $prefix . 'col_1_text',
		'type'       => 'textarea',
		'sanitization_cb' => 'prx_allow_html',
	) );

	$cmb_secao_1->add_field( array(
		'name' 				=> __( 'Ícone da coluna #2', 'laf' ),
		'id'   				=> $prefix . 'col_2_img',
		'type' 				=> 'file',
		'text'				=> array(
			'add_upload_file_text' => __('Adicionar arquivo', 'laf') // Change upload button text. Default: "Add or Upload File"
		),
		'attributes' 		=> array(
			'placeholder' 	=> 'http://',
		)
	) );

	$cmb_secao_1->add_field( array(
		'name'       => esc_html__( 'Título da Coluna #2', 'cmb2' ),
		'id'         => $prefix . 'col_2_title',
		'type'       => 'text',
		'sanitization_cb' => 'prx_allow_html',
	) );

	$cmb_secao_1->add_field( array(
		'name'       => esc_html__( 'Texto da Coluna #2', 'cmb2' ),
		'id'         => $prefix . 'col_2_text',
		'type'       => 'textarea',
		'sanitization_cb' => 'prx_allow_html',
	) );

	$cmb_secao_1->add_field( array(
		'name' 				=> __( 'Ícone da coluna #3', 'laf' ),
		'id'   				=> $prefix . 'col_3_img',
		'type' 				=> 'file',
		'text'				=> array(
			'add_upload_file_text' => __('Adicionar arquivo', 'laf') // Change upload button text. Default: "Add or Upload File"
		),
		'attributes' 		=> array(
			'placeholder' 	=> 'http://',
		)
	) );

	$cmb_secao_1->add_field( array(
		'name'       => esc_html__( 'Título da Coluna #3', 'cmb2' ),
		'id'         => $prefix . 'col_3_title',
		'type'       => 'text',
		'sanitization_cb' => 'prx_allow_html',
	) );

	$cmb_secao_1->add_field( array(
		'name'       => esc_html__( 'Texto da Coluna #3', 'cmb2' ),
		'id'         => $prefix . 'col_3_text',
		'type'       => 'textarea',
		'sanitization_cb' => 'prx_allow_html',
	) );

	$prefix = 'gestao_de_compras_secao_2_';

	$cmb_secao_2 = new_cmb2_box( array(
		'id'            => $prefix . 'settings',
		'title'         => __( 'Seção #2', 'laf' ),
		'object_types'  => array( 'page' ), // Post type
		'show_on_cb' => 'laf_show_if_gestao_de_compras', // function should return a bool value
	) );

	$cmb_secao_2->add_field( array(
		'name' => esc_html__( 'Exibir Seção #2?', 'cmb2' ),
		'id'   => $prefix . 'show',
		'type' => 'checkbox',
	) );

	$cmb_secao_2->add_field( array(
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

	$cmb_secao_2->add_field( array(
		'name'       => esc_html__( 'Título', 'cmb2' ),
		'id'         => $prefix . 'title',
		'type'       => 'text',
		'sanitization_cb' => 'prx_allow_html',
	) );

	$cmb_secao_2->add_field( array(
		'name'       => esc_html__( 'Texto', 'cmb2' ),
		'id'         => $prefix . 'text',
		'type'       => 'textarea',
		'sanitization_cb' => 'prx_allow_html',
	) );

	$cmb_secao_2->add_field( array(
		'name' 				=> __( 'Ícone da coluna #1', 'laf' ),
		'id'   				=> $prefix . 'col_1_img',
		'type' 				=> 'file',
		'text'				=> array(
			'add_upload_file_text' => __('Adicionar arquivo', 'laf') // Change upload button text. Default: "Add or Upload File"
		),
		'attributes' 		=> array(
			'placeholder' 	=> 'http://',
		)
	) );

	$cmb_secao_2->add_field( array(
		'name'       => esc_html__( 'Item da Coluna #1', 'cmb2' ),
		'id'         => $prefix . 'col_1_item',
		'type'       => 'text',
		'repeatable'       => 'true',
		'sanitization_cb' => 'prx_allow_html',
	) );

	$cmb_secao_2->add_field( array(
		'name' 				=> __( 'Ícone da coluna #2', 'laf' ),
		'id'   				=> $prefix . 'col_2_img',
		'type' 				=> 'file',
		'text'				=> array(
			'add_upload_file_text' => __('Adicionar arquivo', 'laf') // Change upload button text. Default: "Add or Upload File"
		),
		'attributes' 		=> array(
			'placeholder' 	=> 'http://',
		)
	) );

	$cmb_secao_2->add_field( array(
		'name'       => esc_html__( 'Item da Coluna #2', 'cmb2' ),
		'id'         => $prefix . 'col_2_item',
		'type'       => 'text',
		'repeatable'       => 'true',
		'sanitization_cb' => 'prx_allow_html',
	) );

	$prefix = 'gestao_de_compras_secao_3_';

	$cmb_secao_3 = new_cmb2_box( array(
		'id'            => $prefix . 'settings',
		'title'         => __( 'Clientes', 'laf' ),
		'object_types'  => array( 'page' ), // Post type
		'show_on_cb' => 'laf_show_if_gestao_de_compras', // function should return a bool value
	) );

	$cmb_secao_3->add_field( array(
		'name' => esc_html__( 'Exibir Clientes?', 'cmb2' ),
		'id'   => $prefix . 'show',
		'type' => 'checkbox',
	) );

	$group_field_id = $cmb_secao_3->add_field( array(
		'id'          => $prefix . 'group',
		'type'        => 'group',
		// 'description' => esc_html__( 'Generates reusable form entries', 'cmb2' ),
		'options'     => array(
			'group_title'   => esc_html__( 'Logo {#}', 'cmb2' ), // {#} gets replaced by row number
			'add_button'    => esc_html__( 'Adicionar Logo', 'cmb2' ),
			'remove_button' => esc_html__( 'Remover Logo', 'cmb2' ),
			'sortable'      => true, // beta
			// 'closed'     => true, // true to have the groups closed by default
		),
	) );

	$cmb_secao_3->add_group_field( $group_field_id, array(
		'name' 				=> __( 'Imagem', 'laf' ),
		'id'   				=> $prefix . 'img',
		'type' 				=> 'file',
		'text'				=> array(
			'add_upload_file_text' => __('Adicionar arquivo', 'laf') // Change upload button text. Default: "Add or Upload File"
		),
		'attributes' 		=> array(
			'placeholder' 	=> 'http://',
		),
	) );

	$prefix = 'gestao_de_compras_secao_4_';

	$cmb_secao_4 = new_cmb2_box( array(
		'id'            => $prefix . 'settings',
		'title'         => __( 'Seção #4', 'laf' ),
		'object_types'  => array( 'page' ), // Post type
		'show_on_cb' => 'laf_show_if_gestao_de_compras', // function should return a bool value
	) );

	$cmb_secao_4->add_field( array(
		'name' => esc_html__( 'Exibir Seção #4?', 'cmb2' ),
		'id'   => $prefix . 'show',
		'type' => 'checkbox',
	) );

	$cmb_secao_4->add_field( array(
		'name'       => esc_html__( 'Título', 'cmb2' ),
		'id'         => $prefix . 'title',
		'type'       => 'text',
		'sanitization_cb' => 'prx_allow_html',
	) );

	$cmb_secao_4->add_field( array(
		'name'       => esc_html__( 'Texto #1', 'cmb2' ),
		'id'         => $prefix . 'text_1',
		'type'       => 'text',
		'sanitization_cb' => 'prx_allow_html',
	) );

	$cmb_secao_4->add_field( array(
		'name'       => esc_html__( 'Texto #2', 'cmb2' ),
		'id'         => $prefix . 'text_2',
		'type'       => 'text',
		'sanitization_cb' => 'prx_allow_html',
	) );

	$cmb_secao_4->add_field( array(
		'name'       => esc_html__( 'ID do vídeo do Youtube', 'cmb2' ),
		'desc'		=> __( 'Apenas o ID do vídeo, não o link inteiro.', 'cmb2 '),
		'id'         => $prefix . 'youtube',
		'type'       => 'text',
		// 'sanitization_cb' => 'prx_allow_html',
	) );

	$cmb_secao_4->add_field( array(
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

	$prefix = 'gestao_de_compras_secao_5_';

	$cmb_secao_5 = new_cmb2_box( array(
		'id'            => $prefix . 'settings',
		'title'         => __( 'Seção #5', 'laf' ),
		'object_types'  => array( 'page' ), // Post type
		'show_on_cb' => 'laf_show_if_gestao_de_compras', // function should return a bool value
	) );

	$cmb_secao_5->add_field( array(
		'name' => esc_html__( 'Exibir Seção #5?', 'cmb2' ),
		'id'   => $prefix . 'show',
		'type' => 'checkbox',
	) );

	$cmb_secao_5->add_field( array(
		'name'       => esc_html__( 'Título em Negrito', 'cmb2' ),
		'id'         => $prefix . 'title_bold',
		'type'       => 'text',
		'sanitization_cb' => 'prx_allow_html',
	) );

	$cmb_secao_5->add_field( array(
		'name'       => esc_html__( 'Título normal', 'cmb2' ),
		'id'         => $prefix . 'title',
		'type'       => 'text',
		'sanitization_cb' => 'prx_allow_html',
	) );

	$cmb_secao_5->add_field( array(
		'name'       => esc_html__( 'Texto', 'cmb2' ),
		'id'         => $prefix . 'text',
		'type'       => 'textarea',
		'sanitization_cb' => 'prx_allow_html',
	) );

	$cmb_secao_5->add_field( array(
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

	$cmb_secao_5->add_field( array(
		'name'       => esc_html__( 'Texto do botão', 'cmb2' ),
		'id'         => $prefix . 'btn_txt',
		'type'       => 'text',
		'sanitization_cb' => 'prx_allow_html',
	) );

	$cmb_secao_5->add_field( array(
		'name' 				=> __( 'Url do botão', 'laf' ),
		'id'   				=> $prefix . 'btn_url',
		'type' 				=> 'text_url',
		'attributes' 		=> array(
			'placeholder' 	=> 'http://',
			// 'required'		=> ''
		)
	) );


    /**
     * SESSION 7
     */
    $prefix = 'gestao_de_compras_secao_6_';

    $cmb_secao_6 = new_cmb2_box( array(
        'id'            => $prefix . 'metabox',
        'title'         => esc_html__( 'Seção #7', 'cmb2' ),
        'object_types'  => array( 'page' ), // Post type
        'show_on_cb' => 'laf_show_if_gestao_de_compras', // function should return a bool value
    ) );

    $cmb_secao_6->add_field( array(
        'name' => esc_html__( 'Exibir Seção #7?', 'cmb2' ),
        'id'   => $prefix . 'show',
        'type' => 'checkbox',
    ) );

    $cmb_secao_6->add_field( array(
        'name'       => esc_html__( 'Título Principal', 'cmb2' ),
        'id'         => $prefix . 'title',
        'type'       => 'text',
        'sanitization_cb' => 'prx_allow_html',
    ) );

    /**
     * SESSION 7 SLIDER
     */
    $prefix = 'gestao_de_compras_secao_6_slider_';

    $cmb_secao_6_slider = new_cmb2_box( array(
        'id'            => $prefix . 'banner',
        'title'         => __( 'Slider Seção #7', 'laf' ),
        'object_types'  => array( 'page' ), // Post type
        'show_on_cb' => 'laf_show_if_gestao_de_compras', // function should return a bool value
    ) );

    $group_field_id = $cmb_secao_6_slider->add_field( array(
        'id'          => $prefix . 'slide',
        'type'        => 'group',
        'description' => esc_html__( 'Adicione os slides da Seção #7', 'cmb2' ),
        'options'     => array(
            'group_title'   => esc_html__( 'Slide {#}', 'cmb2' ), // {#} gets replaced by row number
            'add_button'    => esc_html__( 'Adicionar', 'cmb2' ),
            'remove_button' => esc_html__( 'Remover', 'cmb2' ),
            'sortable'      => true, // beta
            // 'closed'     => true, // true to have the groups closed by default
        ),
    ) );

    $cmb_secao_6_slider->add_group_field( $group_field_id, array(
        'name' 				=> __( 'Texto', 'laf' ),
        'id'   				=> $prefix . 'text',
        'type' 				=> 'text',
        'sanitization_cb' => 'prx_allow_html',
        'attributes' 		=> array(
            // 'required'		=> ''
        )
    ) );

    $cmb_secao_6_slider->add_group_field( $group_field_id, array(
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
     * SESSION 7 LIST
     */
    $prefix = 'gestao_de_compras_secao_6_list_';

    $cmb_secao_6_list = new_cmb2_box( array(
        'id'            => $prefix . 'list',
        'title'         => __( 'Listas Seção #7', 'laf' ),
        'object_types'  => array( 'page' ), // Post type
        'show_on_cb' => 'laf_show_if_gestao_de_compras', // function should return a bool value
    ) );

    $group_field_id = $cmb_secao_6_list->add_field( array(
        'id'          => $prefix . 'list',
        'type'        => 'group',
        'description' => esc_html__( 'Adicione os itens da lista da Seção #7', 'cmb2' ),
        'options'     => array(
            'group_title'   => esc_html__( 'Item {#}', 'cmb2' ), // {#} gets replaced by row number
            'add_button'    => esc_html__( 'Adicionar', 'cmb2' ),
            'remove_button' => esc_html__( 'Remover', 'cmb2' ),
            'sortable'      => true, // beta
            // 'closed'     => true, // true to have the groups closed by default
        ),
    ) );

    $cmb_secao_6_list->add_group_field( $group_field_id, array(
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

    $cmb_secao_6_list->add_group_field( $group_field_id, array(
        'name' 				=> __( 'Título', 'laf' ),
        'id'   				=> $prefix . 'title',
        'type' 				=> 'text',
        'sanitization_cb' => 'prx_allow_html',
        'attributes' 		=> array(
            // 'required'		=> ''
        )
    ) );

    $cmb_secao_6_list->add_group_field( $group_field_id, array(
        'name' 				=> __( 'Texto', 'laf' ),
        'id'   				=> $prefix . 'text',
        'type' 				=> 'textarea',
        'sanitization_cb' => 'prx_allow_html',
        'attributes' 		=> array(
            // 'required'		=> ''
        )
    ) );

}

function laf_show_if_gestao_de_compras() {

	if(isset($_GET['post']) || isset($_GET['post_ID'])) :

		$post_id = $_GET['post'] ? $_GET['post'] : $_POST['post_ID'] ;
		
		if( !isset( $post_id ) ) 
			return;
		
		$template_file = get_post_meta($post_id, '_wp_page_template', true);
		$templates = array( 'gestao-de-compras-page.php' );
		
		if(in_array($template_file, $templates))
			return true;
		else
			return false;
	endif;

}