<?php
add_action( 'init', 'laf_evento_cat_taxonomy', 1 );

function laf_evento_cat_taxonomy() {
    $cat = new Odin_Taxonomy(
        __( 'Categoria' ), // Nome (Singular) da nova Taxonomia.
        'evento-categoria', // Slug do Taxonomia.
        'evento' // Nome do tipo de conteúdo que a taxonomia irá fazer parte.
    );

    $cat->set_labels(
        array(
            'menu_name' => __( 'Categorias de Eventos', 'odin' ),
            'name' => __( 'Categorias de Eventos', 'odin' ),
            'all_items' => __( 'Categorias de Eventos', 'odin' )
        )
    );
}