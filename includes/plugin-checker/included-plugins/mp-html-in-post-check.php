<?php
/**
 * Install HTML In Post Plugin
 *
 */
function mp_html_theme_updater() {
	$args = array(
		'plugin_name' => 'MP HTML In Post', 
		'plugin_message' => __('You require the Move Plugins HTML In Post plugin. Install it here.', 'mp_html_addon'),
		'plugin_slug' => 'mp_html', 
		'plugin_filename' => 'mp-html.php',
		'plugin_required' => true,
		'plugin_download_link' => 'http://moveplugins.com/repo/mp-html-in-post/?download=true'
	);
	$mp_core_theme_updater = new MP_CORE_Plugin_Checker($args);
}
add_action( 'admin_init', 'mp_html_theme_updater' );

