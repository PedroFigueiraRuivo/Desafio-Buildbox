<?php
add_theme_support( 'menus' );

function httfox_register_nav_menus() {
  register_nav_menus(
      array(
        'menu_principal' => 'Principal', // Nome do menu e sua descrição
      )
  );
}
// add_action('after_setup_theme', 'httfox_register_nav_menus');
add_action('init', 'httfox_register_nav_menus');
?>