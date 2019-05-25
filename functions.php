<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' ); // style.css du theme parent
 
    wp_enqueue_style( 'style-enfant'
        , get_stylesheet_directory_uri() . '/style.css' // style.css du theme enfant
        , array('parent-style') // permet d'indiquer la dépendance afin que ce fichier soit chargé après le style du thème parent
    );
}