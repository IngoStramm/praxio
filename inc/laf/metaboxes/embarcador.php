<?php
/**
 * Developer: Marcio Seabra.
 * Praxio - embarcador.php
 * Date: 23/04/2019
 * Time: 13:57
 */

add_action( 'cmb2_admin_init', 'embarcador_page_register_metabox' );

function embarcador_page_register_metabox() {

    /**
     * TOP BANNER
     */
    $prefix = 'embarcador_banner_';

    $cmb_banner = new_cmb2_box( array(
        'id'            => $prefix . 'banner',
        'title'         => __( 'Banner', 'laf' ),
        'object_types'  => array( 'page' ), // Post type
        'show_on_cb' => 'laf_show_if_embarcador', // function should return a bool value
    ) );

    $cmb_banner->add_field( array(
        'name' => esc_html__( 'Exibir banner?', 'cmb2' ),
        'id'   => $prefix . 'show',
        'type' => 'checkbox',
    ) );

    $cmb_banner->add_field( array(
        'name' 				=> __( 'Background', 'laf' ),
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
        'name'       => esc_html__( 'Texto principal', 'cmb2' ),
        'id'         => $prefix . 'text',
        'type'       => 'text',
        'sanitization_cb' => 'prx_allow_html',
    ));

    $cmb_banner->add_field( array(
        'name'       => esc_html__( 'Conteúdo', 'cmb2' ),
        'desc'				=> __( 'Conteúdo formatado. Pode ser texto ou listas UL/LI. TAGs HTML permitidas.', 'laf' ),
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
     * SESSION 1
     */
    $prefix = 'embarcador_section_1_';

    $cmb_section_1 = new_cmb2_box( array(
        'id'            => $prefix . 'metabox',
        'title'         => esc_html__( 'Seção #1', 'cmb2' ),
        'object_types'  => array( 'page' ), // Post type
        'show_on_cb' => 'laf_show_if_embarcador', // function should return a bool value
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
        'name'       => esc_html__( 'Subtítulo', 'cmb2' ),
        'id'         => $prefix . 'subtitle',
        'type'       => 'text',
        'sanitization_cb' => 'prx_allow_html',
    ) );

    $cmb_section_1->add_field( array(
        'name'       => esc_html__( 'Conteúdo', 'cmb2' ),
        'desc'				=> __( 'TAGs HTML permitidas.', 'laf' ),
        'id'         => $prefix . 'text',
        'type'       => 'textarea',
        'sanitization_cb' => 'prx_allow_html',
    ) );

    /**
     * SESSION 2
     */
    $prefix = 'embarcador_section_2_';

    $cmb_section_2 = new_cmb2_box( array(
        'id'            => $prefix . 'metabox',
        'title'         => __( 'Seção #2', 'laf' ),
        'object_types'  => array( 'page' ), // Post type
        'show_on_cb' => 'laf_show_if_embarcador', // function should return a bool value
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

    $cmb_section_2->add_field( array(
        'name'       => esc_html__( 'TABs', 'cmb2' ),
        'desc'				=> __( 'Adicione os itens das abas verticais com seus respectivos conteúdos e ícones.', 'laf' ),
        'id'         => $prefix . 'abas_title',
        'type'       => 'title',
    ) );

    $group_field_id = $cmb_section_2->add_field( array(
        'id'          => $prefix . 'aba',
        'type'        => 'group',
        'options'     => array(
            'group_title'   => esc_html__( 'TAB {#}', 'cmb2' ), // {#} gets replaced by row number
            'add_button'    => esc_html__( 'Adicionar nova TAB', 'cmb2' ),
            'remove_button' => esc_html__( 'Remover TAB', 'cmb2' ),
            'sortable'      => true, // beta
            // 'closed'     => true, // true to have the groups closed by default
        ),
    ) );

    $cmb_section_2->add_group_field( $group_field_id, array(
        'name' 				=> __( 'Título do botão', 'laf' ),
        'id'   				=> $prefix . 'title_button',
        'type' 				=> 'text',
        'sanitization_cb' => 'prx_allow_html',
    ) );

    $cmb_section_2->add_group_field( $group_field_id, array(
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

    $cmb_section_2->add_group_field( $group_field_id, array(
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

    $cmb_section_2->add_group_field( $group_field_id, array(
        'name' 				=> __( 'Título do Texto', 'laf' ),
        'desc'				=> __( 'Normalmente a primeira linha do conteúdo', 'laf' ),
        'id'   				=> $prefix . 'linha_1',
        'type' 				=> 'text',
        'sanitization_cb' => 'prx_allow_html',
    ) );

    $cmb_section_2->add_group_field( $group_field_id, array(
        'name' 				=> __( 'Conteúdo do Texto', 'laf' ),
        'desc'				=> __( 'Conteúdo formatado. Pode ser texto ou listas UL/LI', 'laf' ),
        'id'   				=> $prefix . 'linha_2',
        'type' 				=> 'textarea',
        'sanitization_cb' => 'prx_allow_html',
    ) );

    /**
     * SESSION 3
     */
    $prefix = 'embarcador_section_3_';

    $cmb_section_3 = new_cmb2_box( array(
        'id'            => $prefix . 'metabox',
        'title'         => __( 'Seção #3', 'laf' ),
        'object_types'  => array( 'page' ), // Post type
        'show_on_cb' => 'laf_show_if_embarcador', // function should return a bool value
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

    $cmb_section_3->add_field( array(
        'name'       => esc_html__( 'Itens', 'cmb2' ),
        'desc'				=> __( 'Adicione os itens da Sessão 3 com seus respectivos conteúdos.', 'laf' ),
        'id'         => $prefix . 'abas_title',
        'type'       => 'title',
    ) );

    $group_field_id = $cmb_section_3->add_field( array(
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

    $cmb_section_3->add_group_field( $group_field_id, array(
        'name' 				=> __( 'Título do item', 'laf' ),
        'desc'				=> __( 'Normalmente a primeira linha do conteúdo', 'laf' ),
        'id'   				=> $prefix . 'item_title',
        'type' 				=> 'text',
        'sanitization_cb' => 'prx_allow_html',
    ) );

    $cmb_section_3->add_group_field( $group_field_id, array(
        'name' 				=> __( 'Conteúdo do Texto', 'laf' ),
        'desc'				=> __( 'Conteúdo formatado. Pode ser texto ou listas UL/LI', 'laf' ),
        'id'   				=> $prefix . 'item_content',
        'type' 				=> 'textarea',
        'sanitization_cb' => 'prx_allow_html',
    ) );

    /**
     * SESSION 4
     */
    $prefix = 'embarcador_section_4_';

    $cmb_section_4 = new_cmb2_box( array(
        'id'            => $prefix . 'metabox',
        'title'         => esc_html__( 'Seção #4', 'cmb2' ),
        'object_types'  => array( 'page' ), // Post type
        'show_on_cb' => 'laf_show_if_embarcador', // function should return a bool value
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
        'name'       => esc_html__( 'Texto do Botão', 'cmb2' ),
        'id'         => $prefix . 'text_button',
        'type'       => 'text',
        'sanitization_cb' => 'prx_allow_html',
    ) );

    $cmb_section_4->add_field( array(
        'name'       => esc_html__( 'Link do Botão', 'cmb2' ),
        'id'         => $prefix . 'button_url',
        'type'       => 'text',
        'attributes' 		=> array(
            'placeholder' 	=> 'http://',
        ),
        'sanitization_cb' => 'prx_allow_html',
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
     * SESSION 5
     */
    $prefix = 'embarcador_section_5_';

    $cmb_section_5 = new_cmb2_box( array(
        'id'            => $prefix . 'metabox',
        'title'         => esc_html__( 'Seção #5', 'cmb2' ),
        'object_types'  => array( 'page' ), // Post type
        'show_on_cb' => 'laf_show_if_embarcador', // function should return a bool value
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
        'name'       => esc_html__( 'Conteúdo', 'cmb2' ),
        'desc'				=> __( 'Conteúdo formatado. Pode ser texto ou listas UL/LI. Tags HTML permitidas.', 'laf' ),
        'id'         => $prefix . 'content',
        'type'       => 'textarea',
        'sanitization_cb' => 'prx_allow_html',
    ) );

}

function laf_show_if_embarcador() {

    if(isset($_GET['post']) || isset($_GET['post_ID'])) :

        $post_id = $_GET['post'] ? $_GET['post'] : $_POST['post_ID'] ;

        if( !isset( $post_id ) )
            return;

        $template_file = get_post_meta($post_id, '_wp_page_template', true);
        $templates = array( 'embarcador-page.php' );

        if(in_array($template_file, $templates))
            return true;
        else
            return false;
    endif;

}