<?php
$curso = new Odin_Post_Type(
    __('Praxio em Revista', 'laf'), // Nome (Singular) do Post Type.
    'praxio-em-revista' // Slug do Post Type.
);

$curso->set_labels(
	array(
		'name'               => _x( 'Praxio em Revista', 'post type general name', 'laf' ),
		'singular_name'      => _x( 'Praxio em Revista', 'post type singular name', 'laf' ),
		'menu_name'          => _x( 'Praxio em Revista', 'admin menu', 'laf' ),
		'name_admin_bar'     => _x( 'Praxio em Revista', 'Adicionar Novo on admin bar', 'laf' ),
		'add_new'            => _x( 'Adicionar Novo', 'Praxio em Revista', 'laf' ),
		'add_new_item'       => __( 'Adicionar Novo Praxio em Revista', 'laf' ),
		'new_item'           => __( 'Novo Praxio em Revista', 'laf' ),
		'edit_item'          => __( 'Editar Praxio em Revista', 'laf' ),
		'view_item'          => __( 'Visualizar Praxio em Revista', 'laf' ),
		'all_items'          => __( 'Todos Praxio em Revista', 'laf' ),
		'search_items'       => __( 'Pesquisar Praxio em Revista', 'laf' ),
		'parent_item_colon'  => __( 'Praxio em Revista Pai:', 'laf' ),
		'not_found'          => __( 'Nenhum Praxio em Revista encontrado.', 'laf' ),
		'not_found_in_trash' => __( 'Nenhum Praxio em Revista encontrado na lixeira.', 'laf' )
	)
);

$curso->set_arguments(
	array(
		'supports' => array( 'title', 'editor', 'thumbnail', 'revisions' )
	)
);