<?php

function xurais_child_enqueue_scripts() {

  wp_enqueue_style( 'xurais-child-style', get_stylesheet_uri() );

}
add_action('wp_enqueue_scripts', 'xurais_child_enqueue_scripts');
