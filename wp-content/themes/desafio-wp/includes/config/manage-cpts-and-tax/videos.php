<?php

/*
 * ACreate CPT
*/
$ctp_slug = 'video';

$args = [
  $ctp_slug,
  'Vídeos',
  'Vídeo',
  array( 'slug' => $ctp_slug ),
  'post',
  array( 'title', 'excerpt', 'thumbnail', 'custom-fields', 'thumbnail', 'revisions' ),
  'dashicons-video-alt3'
];

$cpt_video = new httFox_create_custom_post_types($args);


/*
 * Create Tax video and config default items
*/
$tax_video_slug = 'video_type';

$args_tax_category = [
  $tax_video_slug,
  $ctp_slug,
  'Categorias',
  'Categoria - Vídeo',
  true,
  array( 'slug' => 'category-' . $ctp_slug )
];

$tax_video = new httFox_create_custom_taxonomy($args_tax_category);


/*
  * Add default items in category
*/

// Filmes
$args_tax_category_item_films = [
  'Filmes',
  $tax_video_slug,
  'films',
  'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean scelerisque sed felis eu commodo. Duis dapibus eu arcu varius ornare. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Proin vel lorem malesuada, pellentesque purus eget, porttitor purus. Etiam eleifend facilisis lobortis. Curabitur erat lacus, ullamcorper ut magna a, maximus pellentesque dolor.'
];

$tax_video_item_films = new httFox_create_custom_taxonomy_item($args_tax_category_item_films);

// Documentários
$args_tax_category_item_documents = [
  'Documentários',
  $tax_video_slug,
  'documents',
  'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean scelerisque sed felis eu commodo. Duis dapibus eu arcu varius ornare. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Proin vel lorem malesuada, pellentesque purus eget, porttitor purus. Etiam eleifend facilisis lobortis. Curabitur erat lacus, ullamcorper ut magna a, maximus pellentesque dolor.'
];

$tax_video_item_documents = new httFox_create_custom_taxonomy_item($args_tax_category_item_documents);

// Séries
$args_tax_category_item_series = [
  'Séries',
  $tax_video_slug,
  'series',
  'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean scelerisque sed felis eu commodo. Duis dapibus eu arcu varius ornare. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Proin vel lorem malesuada, pellentesque purus eget, porttitor purus. Etiam eleifend facilisis lobortis. Curabitur erat lacus, ullamcorper ut magna a, maximus pellentesque dolor.'
];

$tax_video_item_series = new httFox_create_custom_taxonomy_item($args_tax_category_item_series);

?>