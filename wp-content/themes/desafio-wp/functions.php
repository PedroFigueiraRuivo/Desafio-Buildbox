<?php
/*
 * =======================================================
 * BEGIN -> General security
 */
if ( ! defined( 'ABSPATH' ) ) {
  exit; // Impede o acesso direto ao arquivo
}
// END -> General security


/*
 * =======================================================
 * BEGIN -> Define Consts 
 */
if( ! defined( 'HTTFOX_DIRECTORY' ) ){
  define('HTTFOX_DIRECTORY', $directory = get_stylesheet_directory());
}

if( ! defined( 'HTTFOX_REST_URL_PREFIX' ) ){
  define('HTTFOX_REST_URL_PREFIX', 'httfox_api');
}

/*
 * =======================================================
 * BEGIN -> Imports
 */
require_once (HTTFOX_DIRECTORY . '/includes/class/register-custom-post-types.php');
require_once (HTTFOX_DIRECTORY . '/includes/class/register-custom-taxonomy.php');
require_once (HTTFOX_DIRECTORY . '/includes/class/register-custom-taxonomy-item.php');
// END -> Imports



/*
 * =======================================================
 * BEGIN -> Config
 */
$path_config = HTTFOX_DIRECTORY . '/includes/config/';

require_once ($path_config  . 'remove-wp-native-endpoints.php');
require_once ($path_config  . 'custom-rest-url-prefix.php');
require_once ($path_config  . 'show-admin-bar.php');
require_once ($path_config  . 'disabled-gutenberg.php');
require_once ($path_config  . 'add-thumbnail-suport.php');
require_once ($path_config  . 'register-custom-nav-menus.php');

// Register and config custom post types
$path_config_cpts = HTTFOX_DIRECTORY . '/includes/config/manage-cpts-and-tax/';
require_once ($path_config_cpts  . 'videos.php');


require_once ($path_config  . 'default-acf.php');
// END -> Config

?>