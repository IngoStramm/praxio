<?php
add_action( 'init', 'laf_enquete', 1 );

function laf_enquete() {
    $cat = new Odin_Taxonomy(
        __( 'Categoria' ), // Nome (Singular) da nova Taxonomia.
        'enquete-categoria', // Slug do Taxonomia.
        'enquete' // Nome do tipo de conteúdo que a taxonomia irá fazer parte.
    );

    $cat->set_labels(
        array(
            'menu_name' => __( 'Categorias de Enquete', 'odin' ),
            'name' => __( 'Categorias de Enquete', 'odin' ),
            'all_items' => __( 'Categorias de Enquete', 'odin' )
        )
    );
}