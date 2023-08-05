<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php bloginfo( 'name' ); ?> | <?php bloginfo( 'description' ); ?></title>
  <!-- Required Core Stylesheet -->
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/assets/style/css/glide.css">
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/assets/style/css/style.min.css">
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/assets/style/css/index.css">
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/assets/style/css/single-taxonomy.css">
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/assets/style/css/single-post.css">
  <?php wp_head();?>
</head>
<body>
  <header id="main-header" class="header">
    <div class="container header__container">
      <div class="logo">
        <a href="<?php echo home_url()?>">
          <img src="<?php echo get_stylesheet_directory_uri();?>/assets/imgs/Grupo 1.png" alt="Logo Play" class="logo__image">
        </a>
      </div>
      <nav class="nav-menu menu">
      <?php
        $menu_name = 'menu_principal';

        if ( ( $locations = get_nav_menu_locations() ) && isset( $locations[ $menu_name ] ) ) {

            $menu = wp_get_nav_menu_object( $locations[ $menu_name ] );
            $menu_items = wp_get_nav_menu_items($menu->term_id);
            $menu_list = '<ul id="menu-' . $menu_name . '" class="menu-list">';

                foreach ( (array) $menu_items as $key => $menu_item ) {
                    $id = $menu_item->ID;
                    $title = $menu_item->title;
                    $url = $menu_item->url;
                    $img_src = get_field('icon_menu', $menu_item->ID);
                    $image = $img_src ? '<img src="' . $img_src . '" alt="icon" class="menu-link__icon">' : '';
                    $menu_list .= '<li class="menu-item"><a href="' . $url . '" class="menu-link">' . $image . $title . '</a></li>';
                }

            $menu_list .= '</ul>';

        }

        echo $menu_list;

      ?>
      </nav>
    </div>
  </header>
