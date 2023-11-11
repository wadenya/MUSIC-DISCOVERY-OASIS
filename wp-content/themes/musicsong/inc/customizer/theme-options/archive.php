<?php
/**
 * Archive options
 *
 * @package Theme Palace
 * @subpackage Musicsong
 * @since Musicsong 1.0.0
 */

// Add archive section
$wp_customize->add_section( 'musicsong_archive_section', array(
	'title'             => esc_html__( 'Blog/Archive','musicsong' ),
	'description'       => esc_html__( 'Archive section options.', 'musicsong' ),
	'panel'             => 'musicsong_theme_options_panel',
) );

// Your latest posts title setting and control.
$wp_customize->add_setting( 'musicsong_theme_options[your_latest_posts_title]', array(
	'default'           => $options['your_latest_posts_title'],
	'sanitize_callback' => 'sanitize_text_field',
) );

$wp_customize->add_control( 'musicsong_theme_options[your_latest_posts_title]', array(
	'label'             => esc_html__( 'Your Latest Posts Title', 'musicsong' ),
	'description'       => esc_html__( 'This option only works if Static Front Page is set to "Your latest posts."', 'musicsong' ),
	'section'           => 'musicsong_archive_section',
	'type'				=> 'text',
	'active_callback'   => 'musicsong_is_latest_posts'
) );

// Archive date meta setting and control.
$wp_customize->add_setting( 'musicsong_theme_options[hide_date]', array(
	'default'           => $options['hide_date'],
	'sanitize_callback' => 'musicsong_sanitize_switch_control',
) );

$wp_customize->add_control( new Musicsong_Switch_Control( $wp_customize, 'musicsong_theme_options[hide_date]', array(
	'label'             => esc_html__( 'Hide Date', 'musicsong' ),
	'section'           => 'musicsong_archive_section',
	'on_off_label' 		=> musicsong_hide_options(),
) ) );

// Archive author category setting and control.
$wp_customize->add_setting( 'musicsong_theme_options[hide_category]', array(
	'default'           => $options['hide_category'],
	'sanitize_callback' => 'musicsong_sanitize_switch_control',
) );

$wp_customize->add_control( new Musicsong_Switch_Control( $wp_customize, 'musicsong_theme_options[hide_category]', array(
	'label'             => esc_html__( 'Hide Category', 'musicsong' ),
	'section'           => 'musicsong_archive_section',
	'on_off_label' 		=> musicsong_hide_options(),
) ) );

// Your latest posts title setting and control.
$wp_customize->add_setting( 'musicsong_theme_options[read_more_text]', array(
	'default'           => $options['read_more_text'],
	'sanitize_callback' => 'sanitize_text_field',
) );

$wp_customize->add_control( 'musicsong_theme_options[read_more_text]', array(
	'label'             => esc_html__( 'Read More Text', 'musicsong' ),
	'section'           => 'musicsong_archive_section',
	'type'				=> 'text',
) );