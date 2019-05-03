<?php
/**
 * Developer: Marcio Seabra.
 * Software: ® Proovly - Social proof
 * Praxio - portal-cliente.php
 * Date: 24/04/2019
 * Time: 14:10
 */

add_action( 'cmb2_admin_init', 'portal_cliente_page_register_metabox' );

function portal_cliente_page_register_metabox() {

    /**
     * TOP BANNER
     */
    $prefix = 'portal_cliente_banner_';

    $cmb_banner = new_cmb2_box( array(
        'id'            => $prefix . 'banner',
        'title'         => __( 'Banner', 'laf' ),
        'object_types'  => array( 'page' ), // Post type
        'show_on_cb' => 'laf_show_if_portal_cliente', // function should return a bool value
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
    $prefix = 'portal_cliente_section_1_';

    $cmb_section_1 = new_cmb2_box( array(
        'id'            => $prefix . 'metabox',
        'title'         => __( 'Seção #1', 'laf' ),
        'object_types'  => array( 'page' ), // Post type
        'show_on_cb' => 'laf_show_if_portal_cliente', // function should return a bool value
    ) );

    $cmb_section_1->add_field( array(
        'name' => esc_html__( 'Exibir Seção #1?', 'cmb2' ),
        'id'   => $prefix . 'show',
        'type' => 'checkbox',
    ) );

    $cmb_section_1->add_field( array(
        'name'       => esc_html__( 'Itens', 'cmb2' ),
        'desc'				=> __( 'Adicione os itens da Sessão 1 com seus respectivos conteúdos.', 'laf' ),
        'id'         => $prefix . 'abas_title',
        'type'       => 'title',
    ) );

    $group_field_id = $cmb_section_1->add_field( array(
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

    $cmb_section_1->add_group_field( $group_field_id, array(
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

    $cmb_section_1->add_group_field( $group_field_id, array(
        'name' 				=> __( 'Título do item', 'laf' ),
        'id'   				=> $prefix . 'item_title',
        'type' 				=> 'text',
        'sanitization_cb' => 'prx_allow_html',
    ) );

    $cmb_section_1->add_group_field( $group_field_id, array(
        'name' 				=> __( 'Descrição', 'laf' ),
        'id'   				=> $prefix . 'item_content',
        'type' 				=> 'text',
        'sanitization_cb' => 'prx_allow_html',
    ) );

    $cmb_section_1->add_group_field( $group_field_id, array(
        'name'       => esc_html__( 'Link do Botão', 'cmb2' ),
        'desc'				=> __( 'Deixe em branco se não quiser adicionar link ao item.', 'laf' ),
        'id'         => $prefix . 'button_url',
        'type'       => 'text',
        'attributes' 		=> array(
            'placeholder' 	=> 'http://',
        ),
        'sanitization_cb' => 'prx_allow_html',
    ) );

    $cmb_section_1->add_group_field( $group_field_id, array(
        'name'       => esc_html__( 'Abrir link em', 'cmb2' ),
        'id'         => $prefix . 'url_target',
        'type'       => 'select',
        'options'       => array(
            '_blank'   => 'Nova Guia/Página',
            '_self'   => 'Mesma Guia/Página',
        ),
    ) );

}

function laf_show_if_portal_cliente() {

    if(isset($_GET['post']) || isset($_GET['post_ID'])) :

        $post_id = $_GET['post'] ? $_GET['post'] : $_POST['post_ID'] ;

        if( !isset( $post_id ) )
            return;

        $template_file = get_post_meta($post_id, '_wp_page_template', true);
        $templates = array( 'portal-cliente-page.php' );

        if(in_array($template_file, $templates))
            return true;
        else
            return false;
    endif;

}