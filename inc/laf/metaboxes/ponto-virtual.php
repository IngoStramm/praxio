<?php
/**
 * Developer: Marcio Seabra.
 * Praxio - ponto-virtual.php
 * Date: 22/04/2019
 * Time: 13:17
 */

add_action( 'cmb2_admin_init', 'ponto_virtual_page_register_metabox' );

function ponto_virtual_page_register_metabox() {
    /**
     * TOP BANNER
     */
    $prefix = 'ponto_virtual_banner_';

    $cmb_banner = new_cmb2_box( array(
        'id'            => $prefix . 'banner',
        'title'         => __( 'Banner', 'laf' ),
        'object_types'  => array( 'page' ), // Post type
        'show_on_cb' => 'laf_show_if_ponto_virtual', // function should return a bool value
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
     * SESSION 1
     */
    $prefix = 'ponto_virtual_section_1_';

    $cmb_section_1 = new_cmb2_box( array(
        'id'            => $prefix . 'metabox',
        'title'         => esc_html__( 'Seção #1', 'cmb2' ),
        'object_types'  => array( 'page' ), // Post type
        'show_on_cb' => 'laf_show_if_ponto_virtual', // function should return a bool value
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

    /**
     * SESSION 1 ITENS
     */
    $prefix = 'ponto_virtual_section_1_itens_';

    $cmb_section_1_item = new_cmb2_box( array(
        'id'            => $prefix . 'list',
        'title'         => __( 'Ítens Seção #1', 'laf' ),
        'object_types'  => array( 'page' ), // Post type
        'show_on_cb' => 'laf_show_if_ponto_virtual', // function should return a bool value
    ) );

    $group_field_id = $cmb_section_1_item->add_field( array(
        'id'          => $prefix . 'item',
        'type'        => 'group',
        'description' => esc_html__( 'Adicione os itens da Seção #1', 'cmb2' ),
        'options'     => array(
            'group_title'   => esc_html__( 'Item {#}', 'cmb2' ), // {#} gets replaced by row number
            'add_button'    => esc_html__( 'Adicionar', 'cmb2' ),
            'remove_button' => esc_html__( 'Remover', 'cmb2' ),
            'sortable'      => true, // beta
            // 'closed'     => true, // true to have the groups closed by default
        ),
    ) );

    $cmb_section_1_item->add_group_field( $group_field_id, array(
        'name' 				=> __( 'Número', 'laf' ),
        'id'   				=> $prefix . 'number',
        'type' 				=> 'text',
        'sanitization_cb' => 'prx_allow_html',
        'attributes' 		=> array(
            // 'required'		=> ''
        )
    ) );

    $cmb_section_1_item->add_group_field( $group_field_id, array(
        'name' 				=> __( 'Texto', 'laf' ),
        'id'   				=> $prefix . 'title',
        'type' 				=> 'textarea',
        'sanitization_cb' => 'prx_allow_html',
        'attributes' 		=> array(
            // 'required'		=> ''
        )
    ) );

    /**
     * SESSION 2
     */
    $prefix = 'ponto_virtual_section_2_';

    $cmb_section_2 = new_cmb2_box( array(
        'id'            => $prefix . 'metabox',
        'title'         => esc_html__( 'Seção #2', 'cmb2' ),
        'object_types'  => array( 'page' ), // Post type
        'show_on_cb' => 'laf_show_if_ponto_virtual', // function should return a bool value
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
        'name'       => esc_html__( 'Subtítulo', 'cmb2' ),
        'id'         => $prefix . 'subtitle',
        'type'       => 'text',
        'sanitization_cb' => 'prx_allow_html',
    ) );

    $cmb_section_2->add_field( array(
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
     * SESSION 2 ITENS
     */
    $prefix = 'ponto_virtual_section_2_itens_';

    $cmb_section_2_item = new_cmb2_box( array(
        'id'            => $prefix . 'list',
        'title'         => __( 'Ítens Seção #2', 'laf' ),
        'object_types'  => array( 'page' ), // Post type
        'show_on_cb' => 'laf_show_if_ponto_virtual', // function should return a bool value
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
        'name' 				=> __( 'Título', 'laf' ),
        'id'   				=> $prefix . 'title',
        'type' 				=> 'text',
        'sanitization_cb' => 'prx_allow_html',
        'attributes' 		=> array(
            // 'required'		=> ''
        )
    ) );

    $cmb_section_2_item->add_group_field( $group_field_id, array(
        'name' 				=> __( 'Conteúdo', 'laf' ),
        'id'   				=> $prefix . 'content',
        'type' 				=> 'textarea',
        'sanitization_cb' => 'prx_allow_html',
        'attributes' 		=> array(
            // 'required'		=> ''
        )
    ) );

    /**
     * SECTION 8
     */
    $prefix = 'ponto_virtual_section_3_';

    $cmb_section_3 = new_cmb2_box( array(
        'id'            => $prefix . 'metabox',
        'title'         => esc_html__( 'Seção #3', 'cmb2' ),
        'object_types'  => array( 'page' ), // Post type
        'show_on_cb' => 'laf_show_if_ponto_virtual', // function should return a bool value
    ) );

    $cmb_section_3->add_field( array(
        'name' => esc_html__( 'Exibir Seção #3?', 'cmb2' ),
        'id'   => $prefix . 'show',
        'type' => 'checkbox',
    ) );

    $cmb_section_3->add_field( array(
        'name'       => esc_html__( 'Texto', 'cmb2' ),
        'id'         => $prefix . 'text',
        'type'       => 'textarea',
        'sanitization_cb' => 'prx_allow_html',
    ) );

}

function laf_show_if_ponto_virtual() {

    if(isset($_GET['post']) || isset($_GET['post_ID'])) :

        $post_id = $_GET['post'] ? $_GET['post'] : $_POST['post_ID'] ;

        if( !isset( $post_id ) )
            return;

        $template_file = get_post_meta($post_id, '_wp_page_template', true);
        $templates = array( 'ponto-virtual-page.php' );

        if(in_array($template_file, $templates))
            return true;
        else
            return false;
    endif;

}