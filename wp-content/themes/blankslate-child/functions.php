<?php

/* Chargement des styles du parent. */
add_action( 'wp_enqueue_scripts', 'wpchild_enqueue_styles' );
function wpchild_enqueue_styles(){
  wp_enqueue_style( 'wpm-blankslate-style', get_template_directory_uri() . '/style.css' );
}
function add_admin_link_to_menu( $items, $args ) {
  // Vérifiez si l'utilisateur est connecté et si l'emplacement du menu est le menu principal
  if ( is_user_logged_in() && $args->theme_location == 'main-menu' ) {
      // Créez le lien Admin
      $admin_link = '<li class="menu-item"><a href="' . admin_url() . '">Admin</a></li>';
      
      // Convertissez la chaîne des éléments du menu en un tableau
      $menu_items = explode('</li>', $items);
      
      // Insérez le lien Admin à la position souhaitée dans le tableau (1 dans ce cas)
      array_splice($menu_items, 1, 0, $admin_link);
      
      // Reconstruisez la chaîne des éléments du menu
      $items = implode('</li>', $menu_items);
  }
  return $items;
}
add_filter( 'wp_nav_menu_items', 'add_admin_link_to_menu', 10, 2 );
