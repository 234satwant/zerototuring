<?php
/*
Plugin Name: LearnPress - bbPress Integration
Plugin URI: http://thimpress.com/learnpress
Description: Using the forum for courses provided by bbPress
Author: ThimPress
Version: 2.1.2
Author URI: http://thimpress.com
Tags: learnpress, lms
Text Domain: learnpress-bbpress
Domain Path: /languages/
*/

if ( !defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

function learn_press_addon_bbpress_notice() {
    ?>
    <div class="error">
        <p><?php _e( '<strong>LearnPress - bbPress Integration</strong> addon requires upgrading to works with <strong>LearnPress</strong> version 3.0 or higher', 'learnpress-bbpress' ); ?></p>
    </div>
	<?php
}

function learn_press_load_addon_bbpress() {
	if ( defined( 'LEARNPRESS_VERSION' ) && version_compare( LEARNPRESS_VERSION, '3.0', '<' ) ) {
		include_once __DIR__.DIRECTORY_SEPARATOR.'backward.php';
		LP_Addon_BBPress_Course_Forum::instance();
	} else {
		add_action( 'admin_notices', 'learn_press_addon_bbpress_notice' );
	}
}

add_action( 'plugins_loaded', 'learn_press_load_addon_bbpress' );