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

add_action('init', 'sfa_suggestion_init');
//add_shortcode('sfa_suggestion_form', array($this, 'sfa_form_shortcode'));
