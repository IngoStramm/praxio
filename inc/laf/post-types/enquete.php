<?php
$enquete = new Odin_Post_Type(
    __('Enquete', 'laf'), // Nome (Singular) do Post Type.
    'enquete' // Slug do Post Type.
);

$enquete->set_labels(
	array(
		'name'               => _x( 'Enquete', 'post type general name', 'laf' ),
		'singular_name'      => _x( 'Enquete', 'post type singular name', 'laf' ),
		'menu_name'          => _x( 'Enquete', 'admin menu', 'laf' ),
		'name_admin_bar'     => _x( 'Enquete', 'Adicionar Nova on admin bar', 'laf' ),
		'add_new'            => _x( 'Adicionar Nova', 'Enquete', 'laf' ),
		'add_new_item'       => __( 'Adicionar Nova Enquete', 'laf' ),
		'new_item'           => __( 'Nova Enquete', 'laf' ),
		'edit_item'          => __( 'Editar Enquete', 'laf' ),
		'view_item'          => __( 'Visualizar Enquete', 'laf' ),
		'all_items'          => __( 'Todas Enquete', 'laf' ),
		'search_items'       => __( 'Pesquisar Enquete', 'laf' ),
		'parent_item_colon'  => __( 'Enquete Pai:', 'laf' ),
		'not_found'          => __( 'Nenhuma Enquete encontrado.', 'laf' ),
		'not_found_in_trash' => __( 'Nenhuma Enquete encontrado na lixeira.', 'laf' )
	)
);

$enquete->set_arguments(
	array(
		'supports' => array( 'title', 'editor', 'thumbnail', 'revisions' )
	)
);