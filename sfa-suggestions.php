<?php
/**
 * Stadtpromenade für alle Vorschläge Plugin
 *
 * @package SFA
 * @author Fabian Große
 * @since 0.1.0.0
 * @license GPL-3.0+
 */

/**
 * Plugin Name: SFA Vorschläge
 * Description: TODO
 * Author: Fabian Große
 * Version: 0.1.0 *
 * Text Domain: sfa-suggestions
 * License: GPL-3.0+
 */

// Exit if accessed directly.
if (!defined('ABSPATH')) {
	exit;
}

define('CPTUI_VERSION', '0.1.0');
define('CPTUI_WP_VERSION', get_bloginfo('version'));

function sfa_suggestion_init() {
	$labels = array(
		'name' => 'Vorschläge',
		'singular_name' => 'Vorschlag'
	);
	$p_args = array(
		'labels' => $labels,
		'public' => false,
		'show_ui' => true,
		'supports' => array('editor', 'excerpt', 'custom-fields')
	);

	register_post_type('sfa_suggestion', $p_args);
}

function sfa_display_form() {
	$path_to_form = WP_PLUGIN_DIR . '/' . basename(dirname(__FILE__)) .'/submission-form.php';
	ob_start();
	include $path_to_form;
	return apply_filters('sfa_form_shortcode', ob_get_clean());
}
add_shortcode('sfa-suggestion-form', 'sfa_display_form');

add_action('init', 'sfa_suggestion_init');
