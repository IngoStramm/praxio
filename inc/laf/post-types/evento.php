<?php
$evento = new Odin_Post_Type(
    __( 'Evento', 'laf' ), // Nome (Singular) do Post Type.
    'evento' // Slug do Post Type.
);

$evento->set_labels(
	array(
		'name'               => _x( 'Eventos', 'post type general name', 'laf' ),
		'singular_name'      => _x( 'Evento', 'post type singular name', 'laf' ),
		'menu_name'          => _x( 'Eventos', 'admin menu', 'laf' ),
		'name_admin_bar'     => _x( 'Evento', 'Adicionar Novo on admin bar', 'laf' ),
		'add_new'            => _x( 'Adicionar Novo', 'Evento', 'laf' ),
		'add_new_item'       => __( 'Adicionar Novo Evento', 'laf' ),
		'new_item'           => __( 'Novo Evento', 'laf' ),
		'edit_item'          => __( 'Editar Evento', 'laf' ),
		'view_item'          => __( 'Visualizar Evento', 'laf' ),
		'all_items'          => __( 'Todos Eventos', 'laf' ),
		'search_items'       => __( 'Pesquisar Eventos', 'laf' ),
		'parent_item_colon'  => __( 'Eventos Pai:', 'laf' ),
		'not_found'          => __( 'Nenhum Evento encontrado.', 'laf' ),
		'not_found_in_trash' => __( 'Nenhum Evento encontrado na lixeira.', 'laf' )
	)
);

$evento->set_arguments(
	array(
		'supports' => array( 'title', 'editor', 'thumbnail', 'revisions' )
	)
);