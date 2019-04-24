<?php
add_action( 'init', 'laf_webinar_cat_taxonomy', 1 );

function laf_webinar_cat_taxonomy() {
    $cat = new Odin_Taxonomy(
        __( 'Categoria' ), // Nome (Singular) da nova Taxonomia.
        'webinar-categoria', // Slug do Taxonomia.
        'webinar' // Nome do tipo de conteúdo que a taxonomia irá fazer parte.
    );

    $cat->set_labels(
        array(
            'menu_name' => __( 'Categorias de Webinars', 'odin' ),
            'name' => __( 'Categorias de Webinars', 'odin' ),
            'all_items' => __( 'Categorias de Webinars', 'odin' )
        )
    );
}