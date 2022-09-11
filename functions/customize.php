<?php

function home_page_description($wp_customize)
{

	$wp_customize->add_setting('hp-description-setting', array(
		'default' => 'Lorem Ipsum Dolor Sit Amet',
		'sanitize_callback' => 'wp_kses_post',
	));

	$wp_customize->add_control('hp-description-control', array(
		'type' => 'textarea',
		'label' => 'Home Page Description',
		'section' => 'title_tagline',
		'settings' => 'hp-description-setting',

	));

	$wp_customize->add_setting('hp_number_of_posts_setting', array(
		'default' => '5',
		'sanitize_callback' => 'absint',
	));

	$wp_customize->add_control('hp_number_of_posts_control', array(
		'type' => 'number',
		'label' => 'Number of posts in home page',
		'section' => 'title_tagline',
		'settings' => 'hp_number_of_posts_setting',

	));
}
add_action('customize_register', 'home_page_description');

add_theme_support('custom-logo');

function wr_colors($wp_customize)
{
	$wp_customize->add_section('wr_colors_section', array(
		'title' => __('Colors', 'minimal-writers'),
		'priority' => 20,
	));

	$wp_customize->add_setting('wr_primary_color_setting', '#00afe5', array(
		'default' => '#00afe5',
		'sanitize_callback' => 'sanitize_hex_color',
	));

	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'wr_primary_color_control', array(
		'label' => __('Primary color', 'minimal-writers'),
		'section' => 'wr_colors_section',
		'settings' => 'wr_primary_color_setting', '#00afe5'
	)));
}
add_action('customize_register', 'wr_colors');

function wr_credits($wp_customize)
{
	$wp_customize->add_section('wr_credits_section', array(
		'title' => __('Credits', 'minimal-writers'),
		'priority' => 90,
	));

	$wp_customize->add_setting('wr_credits_setting', array(
		'default' => 'Copyright 2022 | Made with love in Italy',
		'sanitize_callback' => 'wp_kses_post',
	));

	$wp_customize->add_control('hp-description-control', array(
		'type' => 'textarea',
		'label' => 'Website Credits',
		'section' => 'wr_credits_section',
		'settings' => 'wr_credits_setting',

	));
}
add_action('customize_register', 'wr_credits');
