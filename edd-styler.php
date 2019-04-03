<?php
/**
 * Plugin Name: Checkout Styler for Easy Digital Downloads
 * Plugin URI: http://ideaboxcreations.com/
 * Description: Provide Easy Digital Downloads styling options in customizer.
 * Version: 1.0.0
 * Author: IdeaBox Creations
 * Author URI: http://ideaboxcreations.com/
 * Copyright: (c) 2019 IdeaBox Creations
 * License: GPL2
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: edd_checkout_styler
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'EDD_Checkout_Styler_DIR', plugin_dir_path( __FILE__ ) );

if ( class_exists( 'Easy_Digital_Downloads' ) ) {
	require_once 'includes/customizer.php';
}
