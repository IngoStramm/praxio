<?php
add_action( 'init', 'laf_editorial', 1 );

function laf_editorial() {
    $cat = new Odin_Taxonomy(
        __( 'Categoria' ), // Nome (Singular) da nova Taxonomia.
        'editorial-categoria', // Slug do Taxonomia.
        'editorial' // Nome do tipo de conteúdo que a taxonomia irá fazer parte.
    );

    $cat->set_labels(
        array(
            'menu_name' => __( 'Categorias de Editorial', 'odin' ),
            'name' => __( 'Categorias de Editorial', 'odin' ),
            'all_items' => __( 'Categorias de Editorial', 'odin' )
        )
    );
}