<?php
/**
* Homepage (Static ) options
*
* @package Theme Palace
* @subpackage Top Travel Pro
* @since Top Travel Pro 1.0.0
*/

// Homepage (Static ) setting and control.
$wp_customize->add_setting( 'top_travel_theme_options[enable_frontpage_content]', array(
	'sanitize_callback'   => 'top_travel_sanitize_checkbox',
	'default'             => $options['enable_frontpage_content'],
) );

$wp_customize->add_control( 'top_travel_theme_options[enable_frontpage_content]', array(
	'label'       	=> esc_html__( 'Enable Content', 'top-travel' ),
	'description' 	=> esc_html__( 'Check to enable content on static front page only.', 'top-travel' ),
	'section'     	=> 'static_front_page',
	'type'        	=> 'checkbox',
	'active_callback' => 'top_travel_is_static_homepage_enable',
) );