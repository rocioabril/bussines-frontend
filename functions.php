<?php

add_theme_support("post-thumbnails");
add_theme_support("menus");
add_theme_support("widgets");

function registrar_sidebar(){
    register_sidebar(array(
     'name' => 'Sidebar del Footer',
     'id' => 'sidebar-footer',
     'description' => 'Descripción de footer',
     'class' => 'sidebar',
     'before_widget' => '<div id="%1$s" class="widget %2$s">',
     'after_widget' => '</div>',
     'before_title' => '<h2 class="widget-title">',
     'after_title' => '</h2>',
    ));
  }
  add_action( 'widgets_init', 'registrar_sidebar');


?>

