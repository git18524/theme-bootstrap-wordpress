<?php 

namespace App;

function montheme_supports(){

add_theme_support('title-tag');

}

function load_bootstrap(){

    wp_enqueue_script( 'bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js');

    wp_enqueue_style( 'bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css');
}

add_action('after_setup_theme','App\montheme_supports');
add_action('wp_enqueue_scripts','App\load_bootstrap');
 
 ?>