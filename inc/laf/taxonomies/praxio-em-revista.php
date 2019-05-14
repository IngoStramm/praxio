<?php
add_action( 'init', 'laf_praxio_em_revista_cat_taxonomy', 1 );

function laf_praxio_em_revista_cat_taxonomy() {
    $cat = new Odin_Taxonomy(
        __( 'Categoria' ), // Nome (Singular) da nova Taxonomia.
        'praxio-em-revista-categoria', // Slug do Taxonomia.
        'praxio-em-revista' // Nome do tipo de conteúdo que a taxonomia irá fazer parte.
    );

    $cat->set_labels(
        array(
            'menu_name' => __( 'Categorias de Praxio em Revista', 'odin' ),
            'name' => __( 'Categorias de Praxio em Revista', 'odin' ),
            'all_items' => __( 'Categorias de Praxio em Revista', 'odin' )
        )
    );
}