<?php
$email_comunicado = new Odin_Post_Type(
    __( 'E-mail e Comunicado', 'laf' ), // Nome (Singular) do Post Type.
    'comunicado' // Slug do Post Type.
);

$email_comunicado->set_labels(
	array(
		'name'               => _x( 'E-mails e Comunicados', 'post type general name', 'laf' ),
		'singular_name'      => _x( 'E-mail e Comunicado', 'post type singular name', 'laf' ),
		'menu_name'          => _x( 'E-mails e Comunicados', 'admin menu', 'laf' ),
		'name_admin_bar'     => _x( 'E-mail e Comunicado', 'Adicionar Novo on admin bar', 'laf' ),
		'add_new'            => _x( 'Adicionar Novo', 'E-mail e Comunicado', 'laf' ),
		'add_new_item'       => __( 'Adicionar Novo E-mail e Comunicado', 'laf' ),
		'new_item'           => __( 'Novo E-mail e Comunicado', 'laf' ),
		'edit_item'          => __( 'Editar E-mail e Comunicado', 'laf' ),
		'view_item'          => __( 'Visualizar E-mail e Comunicado', 'laf' ),
		'all_items'          => __( 'Todos E-mails e Comunicados', 'laf' ),
		'search_items'       => __( 'Pesquisar E-mails e Comunicados', 'laf' ),
		'parent_item_colon'  => __( 'E-mails e Comunicados Pai:', 'laf' ),
		'not_found'          => __( 'Nenhum E-mail e Comunicado encontrado.', 'laf' ),
		'not_found_in_trash' => __( 'Nenhum E-mail e Comunicado encontrado na lixeira.', 'laf' )
	)
);

$email_comunicado->set_arguments(
	array(
		'supports' => array( 'title', 'editor', 'thumbnail', 'revisions' )
	)
);