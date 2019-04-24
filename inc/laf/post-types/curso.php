<?php
$curso = new Odin_Post_Type(
    __('Curso', 'laf'), // Nome (Singular) do Post Type.
    'curso' // Slug do Post Type.
);

$curso->set_labels(
	array(
		'name'               => _x( 'Cursos', 'post type general name', 'laf' ),
		'singular_name'      => _x( 'Curso', 'post type singular name', 'laf' ),
		'menu_name'          => _x( 'Cursos', 'admin menu', 'laf' ),
		'name_admin_bar'     => _x( 'Curso', 'Adicionar Novo on admin bar', 'laf' ),
		'add_new'            => _x( 'Adicionar Novo', 'Curso', 'laf' ),
		'add_new_item'       => __( 'Adicionar Novo Curso', 'laf' ),
		'new_item'           => __( 'Novo Curso', 'laf' ),
		'edit_item'          => __( 'Editar Curso', 'laf' ),
		'view_item'          => __( 'Visualizar Curso', 'laf' ),
		'all_items'          => __( 'Todos Cursos', 'laf' ),
		'search_items'       => __( 'Pesquisar Cursos', 'laf' ),
		'parent_item_colon'  => __( 'Cursos Pai:', 'laf' ),
		'not_found'          => __( 'Nenhum Curso encontrado.', 'laf' ),
		'not_found_in_trash' => __( 'Nenhum Curso encontrado na lixeira.', 'laf' )
	)
);

$curso->set_arguments(
	array(
		'supports' => array( 'title', 'editor', 'thumbnail', 'revisions' )
	)
);