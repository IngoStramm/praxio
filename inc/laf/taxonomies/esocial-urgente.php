<?php
add_action( 'init', 'laf_esocial_urgente', 1 );

function laf_esocial_urgente() {
    $cat = new Odin_Taxonomy(
        __( 'Categoria' ), // Nome (Singular) da nova Taxonomia.
        'esocial-urgente-categoria', // Slug do Taxonomia.
        'esocial-urgente' // Nome do tipo de conteúdo que a taxonomia irá fazer parte.
    );

    $cat->set_labels(
        array(
            'menu_name' => __( 'Categorias de eSocial Urgente', 'odin' ),
            'name' => __( 'Categorias de eSocial Urgente', 'odin' ),
            'all_items' => __( 'Categorias de eSocial Urgente', 'odin' )
        )
    );
}