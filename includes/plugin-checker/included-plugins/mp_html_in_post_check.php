<?php
/**
 * Install HTML In Post Plugin
 *
 */
function mp_html_in_post_theme_updater() {
	$args = array(
		'plugin_name' => 'Move Plugins - HTML In Post', 
		'plugin_message' => 'You require the Move Plugins HTML In Post plugin. Install it here.', 
		'plugin_slug' => 'mp_html_in_post', 
		'plugin_subdirectory' => 'mp_html_in_post/', 
		'plugin_filename' => 'mp_html_in_post.php',
		'plugin_required' => true,
		'plugin_download_link' => 'http://moveplugins.com'
	);
	$mp_core_theme_updater = new MP_CORE_Plugin_Checker($args);
}
add_action( 'admin_init', 'mp_html_in_post_theme_updater' );

