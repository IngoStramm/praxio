<?php
$editorial = new Odin_Post_Type(
    __('Editorial', 'laf'), // Nome (Singular) do Post Type.
    'editorial' // Slug do Post Type.
);

$editorial->set_labels(
	array(
		'name'               => _x( 'Editorial', 'post type general name', 'laf' ),
		'singular_name'      => _x( 'Editorial', 'post type singular name', 'laf' ),
		'menu_name'          => _x( 'Editorial', 'admin menu', 'laf' ),
		'name_admin_bar'     => _x( 'Editorial', 'Adicionar Novo on admin bar', 'laf' ),
		'add_new'            => _x( 'Adicionar Novo', 'Editorial', 'laf' ),
		'add_new_item'       => __( 'Adicionar Novo Editorial', 'laf' ),
		'new_item'           => __( 'Novo Editorial', 'laf' ),
		'edit_item'          => __( 'Editar Editorial', 'laf' ),
		'view_item'          => __( 'Visualizar Editorial', 'laf' ),
		'all_items'          => __( 'Todos Editorial', 'laf' ),
		'search_items'       => __( 'Pesquisar Editorial', 'laf' ),
		'parent_item_colon'  => __( 'Editorial Pai:', 'laf' ),
		'not_found'          => __( 'Nenhum Editorial encontrado.', 'laf' ),
		'not_found_in_trash' => __( 'Nenhum Editorial encontrado na lixeira.', 'laf' )
	)
);

$editorial->set_arguments(
	array(
		'supports' => array( 'title', 'editor', 'thumbnail', 'revisions' )
	)
);