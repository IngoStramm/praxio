<?php 
add_action( 'cmb2_admin_init', 'gestao_de_pneus_page_register_metabox' );

function gestao_de_pneus_page_register_metabox() {

	$prefix = 'gestao_de_pneus_banner_';

	$cmb_banner = new_cmb2_box( array(
		'id'            => $prefix . 'banner',
		'title'         => __( 'Banner', 'laf' ),
		'object_types'  => array( 'page' ), // Post type
		'show_on_cb' => 'laf_show_if_gestao_de_pneus', // function should return a bool value
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

	$prefix = 'gestao_de_pneus_section_1_';

	$cmb_section_1 = new_cmb2_box( array(
		'id'            => $prefix . 'metabox',
		'title'         => __( 'Cronograma', 'laf' ),
		'object_types'  => array( 'page' ), // Post type
		'show_on_cb' => 'laf_show_if_gestao_de_pneus', // function should return a bool value
	) );

	$cmb_section_1->add_field( array(
		'name' => esc_html__( 'Exibir Cronograma?', 'cmb2' ),
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

	$prefix = 'gestao_de_pneus_section_2_';

	$cmb_section_2 = new_cmb2_box( array(
		'id'            => $prefix . 'metabox',
		'title'         => __( 'Aferição', 'laf' ),
		'object_types'  => array( 'page' ), // Post type
		'show_on_cb' => 'laf_show_if_gestao_de_pneus', // function should return a bool value
	) );

	$cmb_section_2->add_field( array(
		'name' => esc_html__( 'Exibir Aferição?', 'cmb2' ),
		'id'   => $prefix . 'show',
		'type' => 'checkbox',
	) );

	$cmb_section_2->add_field( array(
		'name'       => esc_html__( 'Texto', 'cmb2' ),
		'id'         => $prefix . 'text',
		'type'       => 'textarea',
		'sanitization_cb' => 'prx_allow_html',
	) );

	$cmb_section_2->add_field( array(
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

	$prefix = 'gestao_de_pneus_section_3_';

	$cmb_section_3 = new_cmb2_box( array(
		'id'            => $prefix . 'metabox',
		'title'         => __( 'Leitura dos dados', 'laf' ),
		'object_types'  => array( 'page' ), // Post type
		'show_on_cb' => 'laf_show_if_gestao_de_pneus', // function should return a bool value
	) );

	$cmb_section_3->add_field( array(
		'name' => esc_html__( 'Exibir Aferição?', 'cmb2' ),
		'id'   => $prefix . 'show',
		'type' => 'checkbox',
	) );

	$cmb_section_3->add_field( array(
		'name'       => esc_html__( 'Texto', 'cmb2' ),
		'id'         => $prefix . 'text',
		'type'       => 'textarea',
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
		'name'       => esc_html__( 'Texto Calibragem', 'cmb2' ),
		'id'         => $prefix . 'text_calibragem',
		'type'       => 'textarea',
		'sanitization_cb' => 'prx_allow_html',
	) );

	$cmb_section_3->add_field( array(
		'name'       => esc_html__( 'Texto Inspeção', 'cmb2' ),
		'id'         => $prefix . 'text_inspecao',
		'type'       => 'textarea',
		'sanitization_cb' => 'prx_allow_html',
	) );

	$cmb_section_3->add_field( array(
		'name'       => esc_html__( 'Texto Movimentação', 'cmb2' ),
		'id'         => $prefix . 'text_movimentacao',
		'type'       => 'textarea',
		'sanitization_cb' => 'prx_allow_html',
	) );

	$prefix = 'gestao_de_pneus_section_4_';

	$cmb_section_4 = new_cmb2_box( array(
		'id'            => $prefix . 'metabox',
		'title'         => __( 'Finalização dos Serviços', 'laf' ),
		'object_types'  => array( 'page' ), // Post type
		'show_on_cb' => 'laf_show_if_gestao_de_pneus', // function should return a bool value
	) );

	$cmb_section_4->add_field( array(
		'name' => esc_html__( 'Exibir Finalização dos Serviços?', 'cmb2' ),
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
		'id'         => $prefix . 'text',
		'type'       => 'textarea',
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

	$prefix = 'gestao_de_pneus_section_5_';

	$cmb_section_5 = new_cmb2_box( array(
	    'id'            => $prefix . 'list',
	    'title'         => __( 'Movimentação', 'laf' ),
	    'object_types'  => array( 'page' ), // Post type
	    'show_on_cb' => 'laf_show_if_gestao_de_pneus', // function should return a bool value
	) );

	$cmb_section_5->add_field( array(
		'name' => esc_html__( 'Exibir Movimentação?', 'cmb2' ),
		'id'   => $prefix . 'show',
		'type' => 'checkbox',
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
		)
	) );

	$group_field_id = $cmb_section_5->add_field( array(
	    'id'          => $prefix . 'item',
	    'type'        => 'group',
	    'description' => esc_html__( 'Adicione os itens da Movimentação', 'cmb2' ),
	    'options'     => array(
	        'group_title'   => esc_html__( 'Item {#}', 'cmb2' ), // {#} gets replaced by row number
	        'add_button'    => esc_html__( 'Adicionar', 'cmb2' ),
	        'remove_button' => esc_html__( 'Remover', 'cmb2' ),
	        'sortable'      => true, // beta
	        // 'closed'     => true, // true to have the groups closed by default
	    ),
	) );

	$cmb_section_5->add_group_field( $group_field_id, array(
		'name'       => esc_html__( 'Título', 'cmb2' ),
		'id'         => $prefix . 'title',
		'type'       => 'text',
		'sanitization_cb' => 'prx_allow_html',
	) );

	$cmb_section_5->add_group_field( $group_field_id, array(
		'name'       => esc_html__( 'Texto', 'cmb2' ),
		'id'         => $prefix . 'text',
		'type'       => 'textarea',
		'sanitization_cb' => 'prx_allow_html',
	) );

	$prefix = 'gestao_de_pneus_section_6_';

	$cmb_section_6 = new_cmb2_box( array(
		'id'            => $prefix . 'metabox',
		'title'         => __( 'Seção #1', 'laf' ),
		'object_types'  => array( 'page' ), // Post type
		'show_on_cb' => 'laf_show_if_gestao_de_pneus', // function should return a bool value
	) );

	$cmb_section_6->add_field( array(
		'name' => esc_html__( 'Exibir Seção #1?', 'cmb2' ),
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
		'name'       => esc_html__( 'Texto', 'cmb2' ),
		'id'         => $prefix . 'text',
		'type'       => 'textarea',
		'sanitization_cb' => 'prx_allow_html',
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

	$prefix = 'gestao_de_pneus_section_7_';

	$cmb_section_7 = new_cmb2_box( array(
		'id'            => $prefix . 'metabox',
		'title'         => __( 'Seção #2', 'laf' ),
		'object_types'  => array( 'page' ), // Post type
		'show_on_cb' => 'laf_show_if_gestao_de_pneus', // function should return a bool value
	) );

	$cmb_section_7->add_field( array(
		'name' => esc_html__( 'Exibir Seção #2?', 'cmb2' ),
		'id'   => $prefix . 'show',
		'type' => 'checkbox',
	) );

	$cmb_section_7->add_field( array(
		'name'       => esc_html__( 'Título', 'cmb2' ),
		'id'         => $prefix . 'title',
		'type'       => 'text',
		'sanitization_cb' => 'prx_allow_html',
	) );

	$cmb_section_7->add_field( array(
		'name'       => esc_html__( 'Título Lista #1', 'cmb2' ),
		'id'         => $prefix . 'title_list_1',
		'type'       => 'text',
		'sanitization_cb' => 'prx_allow_html',
	) );

	$cmb_section_7->add_field( array(
		'name'       => esc_html__( 'Item Lista #1', 'cmb2' ),
		'id'         => $prefix . 'items_list_1',
		'type'       => 'text',
		'repeatable' => true,
		'sanitization_cb' => 'prx_allow_html',
	) );

	$cmb_section_7->add_field( array(
		'name'       => esc_html__( 'Título Lista #2', 'cmb2' ),
		'id'         => $prefix . 'title_list_2',
		'type'       => 'text',
		'sanitization_cb' => 'prx_allow_html',
	) );

	$cmb_section_7->add_field( array(
		'name'       => esc_html__( 'Item Lista #1', 'cmb2' ),
		'id'         => $prefix . 'items_list_2',
		'type'       => 'text',
		'repeatable' => true,
		'sanitization_cb' => 'prx_allow_html',
	) );

	$cmb_section_7->add_field( array(
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

	$prefix = 'gestao_de_pneus_section_8_';

	$cmb_section_8 = new_cmb2_box( array(
		'id'            => $prefix . 'metabox',
		'title'         => __( 'Seção #3', 'laf' ),
		'object_types'  => array( 'page' ), // Post type
		'show_on_cb' => 'laf_show_if_gestao_de_pneus', // function should return a bool value
	) );

	$cmb_section_8->add_field( array(
		'name' => esc_html__( 'Exibir Seção #3?', 'cmb2' ),
		'id'   => $prefix . 'show',
		'type' => 'checkbox',
	) );

	$cmb_section_8->add_field( array(
		'name'       => esc_html__( 'Título', 'cmb2' ),
		'id'         => $prefix . 'title',
		'type'       => 'text',
		'sanitization_cb' => 'prx_allow_html',
	) );

	$cmb_section_8->add_field( array(
		'name'       => esc_html__( 'Texto', 'cmb2' ),
		'id'         => $prefix . 'text',
		'type'       => 'textarea',
		'sanitization_cb' => 'prx_allow_html',
	) );

	$group_field_id = $cmb_section_8->add_field( array(
	    'id'          => $prefix . 'item',
	    'type'        => 'group',
	    'description' => esc_html__( 'Itens da Seção #8', 'cmb2' ),
	    'options'     => array(
	        'group_title'   => esc_html__( 'Item {#}', 'cmb2' ), // {#} gets replaced by row number
	        'add_button'    => esc_html__( 'Adicionar', 'cmb2' ),
	        'remove_button' => esc_html__( 'Remover', 'cmb2' ),
	        'sortable'      => true, // beta
	        // 'closed'     => true, // true to have the groups closed by default
	    ),
	) );

	$cmb_section_8->add_group_field( $group_field_id, array(
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

	$cmb_section_8->add_group_field( $group_field_id, array(
		'name'       => esc_html__( 'Título', 'cmb2' ),
		'id'         => $prefix . 'title',
		'type'       => 'text',
		'sanitization_cb' => 'prx_allow_html',
	) );

	$cmb_section_8->add_group_field( $group_field_id, array(
		'name'       => esc_html__( 'Texto', 'cmb2' ),
		'id'         => $prefix . 'text',
		'type'       => 'textarea',
		'sanitization_cb' => 'prx_allow_html',
	) );

}

function laf_show_if_gestao_de_pneus() {

	if(isset($_GET['post']) || isset($_GET['post_ID'])) :

		$post_id = $_GET['post'] ? $_GET['post'] : $_POST['post_ID'] ;
		
		if( !isset( $post_id ) ) 
			return;
		
		$template_file = get_post_meta($post_id, '_wp_page_template', true);
		$templates = array( 'gestao-de-pneus-page.php' );
		
		if(in_array($template_file, $templates))
			return true;
		else
			return false;
	endif;

}