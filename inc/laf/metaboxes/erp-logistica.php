<?php
/**
 * Developer: Marcio Seabra.
 * Praxio - erp-logistica.php
 * Date: 21/04/2019
 * Time: 09:11
 */

add_action( 'cmb2_admin_init', 'erp_logistica_page_register_metabox' );

function erp_logistica_page_register_metabox() {

    /**
     * TOP BANNER
     */
    $prefix = 'erp_logistica_banner_';

    $cmb_banner = new_cmb2_box( array(
        'id'            => $prefix . 'banner',
        'title'         => __( 'Banner', 'laf' ),
        'object_types'  => array( 'page' ), // Post type
        'show_on_cb' => 'laf_show_if_erp_logistica', // function should return a bool value
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
        'type'       => 'text',
        'sanitization_cb' => 'prx_allow_html',
    ));

    $cmb_banner->add_field( array(
        'name'       => esc_html__( 'Conteúdo', 'cmb2' ),
        'id'         => $prefix . 'content',
        'type'       => 'textarea',
        'sanitization_cb' => 'prx_allow_html',
    ));

    $cmb_banner->add_field( array(
        'name'       => esc_html__( 'Texto do botão', 'cmb2' ),
        'id'         => $prefix . 'btn_txt',
        'type'       => 'text',
        'sanitization_cb' => 'prx_allow_html',
    ) );

    // $cmb_banner->add_field( array(
    //     'name' 				=> __( 'Url do botão', 'laf' ),
    //     'id'   				=> $prefix . 'btn_url',
    //     'type' 				=> 'text_url',
    //     'attributes' 		=> array(
    //         'placeholder' 	=> 'http://',
    //         // 'required'		=> ''
    //     )
    // ) );

    /**
     * SESSION 1
     */
    $prefix = 'erp_logistica_section_1_';

    $cmb_section_1 = new_cmb2_box( array(
        'id'            => $prefix . 'metabox',
        'title'         => esc_html__( 'Seção #1', 'cmb2' ),
        'object_types'  => array( 'page' ), // Post type
        'show_on_cb' => 'laf_show_if_erp_logistica', // function should return a bool value
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

    /**
     * SESSION 2
     */
    $prefix = 'erp_logistica_section_2_';

    $cmb_section_2 = new_cmb2_box( array(
        'id'            => $prefix . 'metabox',
        'title'         => esc_html__( 'Seção #2', 'cmb2' ),
        'object_types'  => array( 'page' ), // Post type
        'show_on_cb' => 'laf_show_if_erp_logistica', // function should return a bool value
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

    /**
     * SESSION 2 ITENS
     */
    $prefix = 'erp_logistica_section_2_itens_';

    $cmb_section_2_item = new_cmb2_box( array(
        'id'            => $prefix . 'list',
        'title'         => __( 'Ítens Seção #2', 'laf' ),
        'object_types'  => array( 'page' ), // Post type
        'show_on_cb' => 'laf_show_if_erp_logistica', // function should return a bool value
    ) );

    $group_field_id = $cmb_section_2_item->add_field( array(
        'id'          => $prefix . 'item',
        'type'        => 'group',
        'description' => esc_html__( 'Adicione os itens da Seção #2', 'cmb2' ),
        'options'     => array(
            'group_title'   => esc_html__( 'Item {#}', 'cmb2' ), // {#} gets replaced by row number
            'add_button'    => esc_html__( 'Adicionar', 'cmb2' ),
            'remove_button' => esc_html__( 'Remover', 'cmb2' ),
            'sortable'      => true, // beta
            // 'closed'     => true, // true to have the groups closed by default
        ),
    ) );

    $cmb_section_2_item->add_group_field( $group_field_id, array(
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

    $cmb_section_2_item->add_group_field( $group_field_id, array(
        'name' 				=> __( 'Título', 'laf' ),
        'id'   				=> $prefix . 'title',
        'type' 				=> 'text',
        'sanitization_cb' => 'prx_allow_html',
        'attributes' 		=> array(
            // 'required'		=> ''
        )
    ) );

    $cmb_section_2_item->add_group_field( $group_field_id, array(
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
     * SESSION 3
     */
    $prefix = 'erp_logistica_section_3_';

    $cmb_section_3 = new_cmb2_box( array(
        'id'            => $prefix . 'metabox',
        'title'         => esc_html__( 'Seção #3', 'cmb2' ),
        'object_types'  => array( 'page' ), // Post type
        'show_on_cb' => 'laf_show_if_erp_logistica', // function should return a bool value
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
        'name'       => esc_html__( 'Subtítulo', 'cmb2' ),
        'id'         => $prefix . 'subtitle',
        'type'       => 'text',
        'sanitization_cb' => 'prx_allow_html',
    ) );

    /**
     * SESSION 3 VERTICAL TABS
     */
    $prefix = 'erp_logistica_section_3_tabs_';

    $cmb_section_3_tab = new_cmb2_box( array(
        'id'            => $prefix . 'tab',
        'title'         => __( 'Tabs Seção #3', 'laf' ),
        'object_types'  => array( 'page' ), // Post type
        'show_on_cb' => 'laf_show_if_erp_logistica', // function should return a bool value
    ) );

    $group_field_id = $cmb_section_3_tab->add_field( array(
        'id'          => $prefix . 'tab',
        'type'        => 'group',
        'description' => esc_html__( 'Adicione os TABs da Seção #3', 'cmb2' ),
        'options'     => array(
            'group_title'   => esc_html__( 'TAB {#}', 'cmb2' ), // {#} gets replaced by row number
            'add_button'    => esc_html__( 'Adicionar', 'cmb2' ),
            'remove_button' => esc_html__( 'Remover', 'cmb2' ),
            'sortable'      => true, // beta
            // 'closed'     => true, // true to have the groups closed by default
        ),
    ) );

    $cmb_section_3_tab->add_group_field( $group_field_id, array(
        'name' 				=> __( 'Título do botão', 'laf' ),
        'id'   				=> $prefix . 'title_button',
        'type' 				=> 'text',
        'sanitization_cb' => 'prx_allow_html',
    ) );

    $cmb_section_3_tab->add_group_field( $group_field_id, array(
        'name' 				=> __( 'Conteúdo do Texto', 'laf' ),
        'desc'				=> __( 'Conteúdo formadado. Pode ser texto ou listas UL/LI', 'laf' ),
        'id'   				=> $prefix . 'linha_2',
        'type' 				=> 'textarea',
        'sanitization_cb' => 'prx_allow_html',
    ) );

    /**
     * SESSION 4
     */
    $prefix = 'erp_logistica_section_4_';

    $cmb_section_4 = new_cmb2_box( array(
        'id'            => $prefix . 'metabox',
        'title'         => esc_html__( 'Seção #4', 'cmb2' ),
        'object_types'  => array( 'page' ), // Post type
        'show_on_cb' => 'laf_show_if_erp_logistica', // function should return a bool value
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
        'name' 				=> __( 'Ícone', 'laf' ),
        'id'   				=> $prefix . 'icon',
        'type' 				=> 'file',
        'text'				=> array(
            'add_upload_file_text' => __('Adicionar arquivo', 'laf') // Change upload button text. Default: "Add or Upload File"
        ),
        'attributes' 		=> array(
            'placeholder' 	=> 'http://',
        )
    ) );

    $cmb_section_4->add_field( array(
        'name' 				=> __( 'Plano de Fundo', 'laf' ),
        'id'   				=> $prefix . 'background',
        'type' 				=> 'file',
        'text'				=> array(
            'add_upload_file_text' => __('Adicionar arquivo', 'laf') // Change upload button text. Default: "Add or Upload File"
        ),
        'attributes' 		=> array(
            'placeholder' 	=> 'http://',
        )
    ) );

    /**
     * SESSION 4 ITENS
     */
    $prefix = 'erp_logistica_section_4_itens_';

    $cmb_section_4_item = new_cmb2_box( array(
        'id'            => $prefix . 'list',
        'title'         => __( 'Ítens Seção #4', 'laf' ),
        'object_types'  => array( 'page' ), // Post type
        'show_on_cb' => 'laf_show_if_erp_logistica', // function should return a bool value
    ) );

    $group_field_id = $cmb_section_4_item->add_field( array(
        'id'          => $prefix . 'item',
        'type'        => 'group',
        'description' => esc_html__( 'Adicione os itens da Seção #4', 'cmb2' ),
        'options'     => array(
            'group_title'   => esc_html__( 'Item {#}', 'cmb2' ), // {#} gets replaced by row number
            'add_button'    => esc_html__( 'Adicionar', 'cmb2' ),
            'remove_button' => esc_html__( 'Remover', 'cmb2' ),
            'sortable'      => true, // beta
            // 'closed'     => true, // true to have the groups closed by default
        ),
    ) );

    $cmb_section_4_item->add_group_field( $group_field_id, array(
        'name' 				=> __( 'Título', 'laf' ),
        'id'   				=> $prefix . 'title',
        'type' 				=> 'text',
        'sanitization_cb' => 'prx_allow_html',
        'attributes' 		=> array(
            // 'required'		=> ''
        )
    ) );

    $cmb_section_4_item->add_group_field( $group_field_id, array(
        'name' 				=> __( 'Conteúdo', 'laf' ),
        'id'   				=> $prefix . 'content',
        'type' 				=> 'textarea',
        'sanitization_cb' => 'prx_allow_html',
        'attributes' 		=> array(
            // 'required'		=> ''
        )
    ) );

    /**
     * SESSION 5
     */
    $prefix = 'erp_logistica_section_5_';

    $cmb_section_5 = new_cmb2_box( array(
        'id'            => $prefix . 'metabox',
        'title'         => esc_html__( 'Seção #5', 'cmb2' ),
        'object_types'  => array( 'page' ), // Post type
        'show_on_cb' => 'laf_show_if_erp_logistica', // function should return a bool value
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
        'name'       => esc_html__( 'Subtítulo', 'cmb2' ),
        'id'         => $prefix . 'subtitle',
        'type'       => 'text',
        'sanitization_cb' => 'prx_allow_html',
    ) );

    $cmb_section_5->add_field( array(
        'name' 				=> __( 'Imagem', 'laf' ),
        'id'   				=> $prefix . 'image',
        'type' 				=> 'file',
        'text'				=> array(
            'add_upload_file_text' => __('Adicionar arquivo', 'laf') // Change upload button text. Default: "Add or Upload File"
        ),
        'attributes' 		=> array(
            'placeholder' 	=> 'http://',
        )
    ) );

    /**
     * SESSION 5 ITENS
     */
    $prefix = 'erp_logistica_section_5_itens_';

    $cmb_section_5_item = new_cmb2_box( array(
        'id'            => $prefix . 'list',
        'title'         => __( 'Ítens Seção #5', 'laf' ),
        'object_types'  => array( 'page' ), // Post type
        'show_on_cb' => 'laf_show_if_erp_logistica', // function should return a bool value
    ) );

    $group_field_id = $cmb_section_5_item->add_field( array(
        'id'          => $prefix . 'item',
        'type'        => 'group',
        'description' => esc_html__( 'Adicione os itens da Seção #5', 'cmb2' ),
        'options'     => array(
            'group_title'   => esc_html__( 'Item {#}', 'cmb2' ), // {#} gets replaced by row number
            'add_button'    => esc_html__( 'Adicionar', 'cmb2' ),
            'remove_button' => esc_html__( 'Remover', 'cmb2' ),
            'sortable'      => true, // beta
            // 'closed'     => true, // true to have the groups closed by default
        ),
    ) );

    $cmb_section_5_item->add_group_field( $group_field_id, array(
        'name' 				=> __( 'Título', 'laf' ),
        'id'   				=> $prefix . 'title',
        'type' 				=> 'text',
        'sanitization_cb' => 'prx_allow_html',
        'attributes' 		=> array(
            // 'required'		=> ''
        )
    ) );

    $cmb_section_5_item->add_group_field( $group_field_id, array(
        'name' 				=> __( 'Conteúdo', 'laf' ),
        'id'   				=> $prefix . 'content',
        'type' 				=> 'textarea',
        'sanitization_cb' => 'prx_allow_html',
        'attributes' 		=> array(
            // 'required'		=> ''
        )
    ) );

    /**
     * SESSION 6
     */
    $prefix = 'erp_logistica_section_6_';

    $cmb_section_6 = new_cmb2_box( array(
        'id'            => $prefix . 'metabox',
        'title'         => esc_html__( 'Seção #6', 'cmb2' ),
        'object_types'  => array( 'page' ), // Post type
        'show_on_cb' => 'laf_show_if_erp_logistica', // function should return a bool value
    ) );

    $cmb_section_6->add_field( array(
        'name' => esc_html__( 'Exibir Seção #6?', 'cmb2' ),
        'id'   => $prefix . 'show',
        'type' => 'checkbox',
    ) );

    $cmb_section_6->add_field( array(
        'name'       => esc_html__( 'Título', 'cmb2' ),
        'id'         => $prefix . 'title',
        'type'       => 'text',
        'sanitization_cb' => 'prx_allow_html',
    ) );

    $cmb_section_6->add_field( array(
        'name'       => esc_html__( 'Texto do Botão', 'cmb2' ),
        'id'         => $prefix . 'text_button',
        'type'       => 'text',
        'sanitization_cb' => 'prx_allow_html',
    ) );

    // $cmb_section_6->add_field( array(
    //     'name'       => esc_html__( 'Link do Botão', 'cmb2' ),
    //     'id'         => $prefix . 'button_url',
    //     'type'       => 'text',
    //     'attributes' 		=> array(
    //         'placeholder' 	=> 'http://',
    //     ),
    //     'sanitization_cb' => 'prx_allow_html',
    // ) );

    $cmb_section_6->add_field( array(
        'name' 				=> __( 'Plano de Fundo', 'laf' ),
        'id'   				=> $prefix . 'background',
        'type' 				=> 'file',
        'text'				=> array(
            'add_upload_file_text' => __('Adicionar arquivo', 'laf') // Change upload button text. Default: "Add or Upload File"
        ),
        'attributes' 		=> array(
            'placeholder' 	=> 'http://',
        )
    ) );

    /**
     * SESSION 7
     */
    $prefix = 'erp_logistica_section_7_';

    $cmb_section_7 = new_cmb2_box( array(
        'id'            => $prefix . 'metabox',
        'title'         => esc_html__( 'Seção #7', 'cmb2' ),
        'object_types'  => array( 'page' ), // Post type
        'show_on_cb' => 'laf_show_if_erp_logistica', // function should return a bool value
    ) );

    $cmb_section_7->add_field( array(
        'name' => esc_html__( 'Exibir Seção #7?', 'cmb2' ),
        'id'   => $prefix . 'show',
        'type' => 'checkbox',
    ) );

    $cmb_section_7->add_field( array(
        'name'       => esc_html__( 'Título Principal', 'cmb2' ),
        'id'         => $prefix . 'title',
        'type'       => 'text',
        'sanitization_cb' => 'prx_allow_html',
    ) );

    /**
     * SESSION 7 SLIDER
     */
    $prefix = 'erp_logistica_section_7_slider_';

    $cmb_section_7_slider = new_cmb2_box( array(
        'id'            => $prefix . 'banner',
        'title'         => __( 'Slider Seção #7', 'laf' ),
        'object_types'  => array( 'page' ), // Post type
        'show_on_cb' => 'laf_show_if_erp_logistica', // function should return a bool value
    ) );

    $group_field_id = $cmb_section_7_slider->add_field( array(
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

    $cmb_section_7_slider->add_group_field( $group_field_id, array(
        'name' 				=> __( 'Texto', 'laf' ),
        'id'   				=> $prefix . 'text',
        'type' 				=> 'text',
        'sanitization_cb' => 'prx_allow_html',
        'attributes' 		=> array(
            // 'required'		=> ''
        )
    ) );

    $cmb_section_7_slider->add_group_field( $group_field_id, array(
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
    $prefix = 'erp_logistica_section_7_list_';

    $cmb_section_7_list = new_cmb2_box( array(
        'id'            => $prefix . 'list',
        'title'         => __( 'Listas Seção #7', 'laf' ),
        'object_types'  => array( 'page' ), // Post type
        'show_on_cb' => 'laf_show_if_erp_logistica', // function should return a bool value
    ) );

    $group_field_id = $cmb_section_7_list->add_field( array(
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

    $cmb_section_7_list->add_group_field( $group_field_id, array(
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

    $cmb_section_7_list->add_group_field( $group_field_id, array(
        'name' 				=> __( 'Título', 'laf' ),
        'id'   				=> $prefix . 'title',
        'type' 				=> 'text',
        'sanitization_cb' => 'prx_allow_html',
        'attributes' 		=> array(
            // 'required'		=> ''
        )
    ) );

    $cmb_section_7_list->add_group_field( $group_field_id, array(
        'name' 				=> __( 'Texto', 'laf' ),
        'id'   				=> $prefix . 'text',
        'type' 				=> 'textarea',
        'sanitization_cb' => 'prx_allow_html',
        'attributes' 		=> array(
            // 'required'		=> ''
        )
    ) );

}

function laf_show_if_erp_logistica() {

    if(isset($_GET['post']) || isset($_GET['post_ID'])) :

        $post_id = $_GET['post'] ? $_GET['post'] : $_POST['post_ID'] ;

        if( !isset( $post_id ) )
            return;

        $template_file = get_post_meta($post_id, '_wp_page_template', true);
        $templates = array( 'erp-logistica-page.php' );

        if(in_array($template_file, $templates))
            return true;
        else
            return false;
    endif;

}