<?php
/**
 * Reset options
 *
 * @package Theme Palace
 * @subpackage Musicsong
 * @since Musicsong 1.0.0
 */

/**
* Reset section
*/
// Add reset enable section
$wp_customize->add_section( 'musicsong_reset_section', array(
	'title'             => esc_html__('Reset all settings','musicsong'),
	'description'       => esc_html__( 'Caution: All settings will be reset to default. Refresh the page after clicking Save & Publish.', 'musicsong' ),
) );

// Add reset enable setting and control.
$wp_customize->add_setting( 'musicsong_theme_options[reset_options]', array(
	'default'           => $options['reset_options'],
	'sanitize_callback' => 'musicsong_sanitize_checkbox',
	'transport'			  => 'postMessage',
) );

$wp_customize->add_control( 'musicsong_theme_options[reset_options]', array(
	'label'             => esc_html__( 'Check to reset all settings', 'musicsong' ),
	'section'           => 'musicsong_reset_section',
	'type'              => 'checkbox',
) );
