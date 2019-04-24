<?php
add_action( 'init', 'laf_comunicado_cat_taxonomy', 1 );

function laf_comunicado_cat_taxonomy() {
    $cat = new Odin_Taxonomy(
        __( 'Categoria' ), // Nome (Singular) da nova Taxonomia.
        'comunicado-categoria', // Slug do Taxonomia.
        'comunicado' // Nome do tipo de conteúdo que a taxonomia irá fazer parte.
    );

    $cat->set_labels(
        array(
            'menu_name' => __( 'Categorias de E-mails e Comunicados', 'odin' ),
            'name' => __( 'Categorias de E-mails e Comunicados', 'odin' ),
            'all_items' => __( 'Categorias de E-mails e Comunicados', 'odin' )
        )
    );
}