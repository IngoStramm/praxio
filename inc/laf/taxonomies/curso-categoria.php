<?php
add_action( 'init', 'laf_curso_cat_taxonomy', 1 );

function laf_curso_cat_taxonomy() {
    $cat = new Odin_Taxonomy(
        __( 'Categoria' ), // Nome (Singular) da nova Taxonomia.
        'curso-categoria', // Slug do Taxonomia.
        'curso' // Nome do tipo de conteúdo que a taxonomia irá fazer parte.
    );

    $cat->set_labels(
        array(
            'menu_name' => __( 'Categorias de Cursos', 'odin' ),
            'name' => __( 'Categorias de Cursos', 'odin' ),
            'all_items' => __( 'Categorias de Cursos', 'odin' )
        )
    );
}