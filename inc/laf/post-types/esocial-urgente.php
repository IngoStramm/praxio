<?php
$esocial_urgente = new Odin_Post_Type(
    __('eSocial Urgente', 'laf'), // Nome (Singular) do Post Type.
    'esocial-urgente' // Slug do Post Type.
);

$esocial_urgente->set_labels(
	array(
		'name'               => _x( 'eSocial Urgente', 'post type general name', 'laf' ),
		'singular_name'      => _x( 'eSocial Urgente', 'post type singular name', 'laf' ),
		'menu_name'          => _x( 'eSocial Urgente', 'admin menu', 'laf' ),
		'name_admin_bar'     => _x( 'eSocial Urgente', 'Adicionar Novo on admin bar', 'laf' ),
		'add_new'            => _x( 'Adicionar Novo', 'eSocial Urgente', 'laf' ),
		'add_new_item'       => __( 'Adicionar Novo eSocial Urgente', 'laf' ),
		'new_item'           => __( 'Novo eSocial Urgente', 'laf' ),
		'edit_item'          => __( 'Editar eSocial Urgente', 'laf' ),
		'view_item'          => __( 'Visualizar eSocial Urgente', 'laf' ),
		'all_items'          => __( 'Todos eSocial Urgente', 'laf' ),
		'search_items'       => __( 'Pesquisar eSocial Urgente', 'laf' ),
		'parent_item_colon'  => __( 'eSocial Urgente Pai:', 'laf' ),
		'not_found'          => __( 'Nenhum eSocial Urgente encontrado.', 'laf' ),
		'not_found_in_trash' => __( 'Nenhum eSocial Urgente encontrado na lixeira.', 'laf' )
	)
);

$esocial_urgente->set_arguments(
	array(
		'supports' => array( 'title', 'editor', 'thumbnail', 'revisions' )
	)
);