<?php

/**
 * Plugin Name: Clean the Plugin Install screen
 * Plugin URI: https://gist.github.com/fahdi/bd38ec99927469145168df1196a98363
 * Description: Clean the CSS which fixes the plugin info display issues in wordpress admin
 * Version: 1.0
 * Author: Fahad Murtaza
 * Author URI: https://fahdmurtaza.com
 */

// If this file is called directly, abort.
if ( ! defined( 'ABSPATH' ) ) {
	die;
}
// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

add_action('admin_head', 'fm_clean_plugin_info_screen');

function fm_clean_plugin_info_screen() {
  echo '<style>
    @media screen and (max-width: 782px){ 
	.wrap {
    	clear: none !important;    
	}
  </style>';
}
