<?php
$webinar = new Odin_Post_Type(
    __( 'Webinar', 'laf' ), // Nome (Singular) do Post Type.
    'webinar' // Slug do Post Type.
);

$webinar->set_labels(
	array(
		'name'               => _x( 'Webinars', 'post type general name', 'laf' ),
		'singular_name'      => _x( 'Webinar', 'post type singular name', 'laf' ),
		'menu_name'          => _x( 'Webinars', 'admin menu', 'laf' ),
		'name_admin_bar'     => _x( 'Webinar', 'Adicionar Novo on admin bar', 'laf' ),
		'add_new'            => _x( 'Adicionar Novo', 'Webinar', 'laf' ),
		'add_new_item'       => __( 'Adicionar Novo Webinar', 'laf' ),
		'new_item'           => __( 'Novo Webinar', 'laf' ),
		'edit_item'          => __( 'Editar Webinar', 'laf' ),
		'view_item'          => __( 'Visualizar Webinar', 'laf' ),
		'all_items'          => __( 'Todos Webinars', 'laf' ),
		'search_items'       => __( 'Pesquisar Webinars', 'laf' ),
		'parent_item_colon'  => __( 'Webinars Pai:', 'laf' ),
		'not_found'          => __( 'Nenhum Webinar encontrado.', 'laf' ),
		'not_found_in_trash' => __( 'Nenhum Webinar encontrado na lixeira.', 'laf' )
	)
);

$webinar->set_arguments(
	array(
		'supports' => array( 'title', 'editor', 'thumbnail', 'revisions' )
	)
);