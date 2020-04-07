<?php
/**
 * Social Options
 *
 * @since   finedine 1.0
 * @package finedine
 **/

function finedine_customize_register_social( $wp_customize ) {

	$defaults = finedine_get_option_defaults();

	// Social Media.
	$wp_customize->add_section( 'finedine_social_section',
		array(
			'title'       => __( 'Social Media', 'finedine' ),
			'priority'    => 7,
			'panel'       => 'finedine_theme_option_panel',
			'transport'   => 'postMessage',
			'description' => __( 'Finedine has support for four of the most popular social media platforms. To add your platform, just enter the full URL in the link fields. If you do not want to display a link, please leave the fields blank.', 'finedine' ),
		)
	);

	// Facebook URL - Setting.
	$wp_customize->add_setting( 'finedine_theme_settings[finedine_socials_facebook]',
		array(
			'type'              => 'option',
			'capability'        => 'manage_options',
			'sanitize_callback' => 'finedine_sanitize_text',
			'default'           => $defaults['finedine_socials_facebook'],

		)
	);

	$wp_customize->add_control( 'finedine_theme_settings[finedine_socials_facebook]',
		array(
			'label'    => __( 'Facebook Link', 'finedine' ),
			'section'  => 'finedine_social_section',
			'settings' => 'finedine_theme_settings[finedine_socials_facebook]',
			'priority' => 3,
		)
	);

	// Twitter URL - Setting.
	$wp_customize->add_setting( 'finedine_theme_settings[finedine_socials_twitter]',
		array(
			'type'              => 'option',
			'capability'        => 'manage_options',
			'sanitize_callback' => 'finedine_sanitize_text',
			'default'           => $defaults['finedine_socials_twitter'],
		)
	);

	$wp_customize->add_control( 'finedine_theme_settings[finedine_socials_twitter]',
		array(
			'label'    => __( 'Twitter Link', 'finedine' ),
			'section'  => 'finedine_social_section',
			'settings' => 'finedine_theme_settings[finedine_socials_twitter]',
			'priority' => 4,
		)
	);

	// Youtube URL - Setting.
	$wp_customize->add_setting( 'finedine_theme_settings[finedine_socials_youtube]',
		array(
			'type'              => 'option',
			'capability'        => 'manage_options',
			'sanitize_callback' => 'finedine_sanitize_text',
			'default'           => $defaults['finedine_socials_youtube'],
		)
	);

	$wp_customize->add_control( 'finedine_theme_settings[finedine_socials_youtube]',
		array(
			'label'    => __( 'Youtube Link', 'finedine' ),
			'section'  => 'finedine_social_section',
			'settings' => 'finedine_theme_settings[finedine_socials_youtube]',
			'priority' => 5,
		)
	);

	// instagram URL - Setting.
	$wp_customize->add_setting( 'finedine_theme_settings[finedine_socials_instagram]',
		array(
			'sanitize_callback' => 'finedine_sanitize_text',
			'type'              => 'option',
			'capability'        => 'manage_options',
			'default'           => $defaults['finedine_socials_instagram'],

		)
	);

	$wp_customize->add_control( 'finedine_theme_settings[finedine_socials_instagram]',
		array(
			'label'    => __( 'Instagram Link', 'finedine' ),
			'section'  => 'finedine_social_section',
			'settings' => 'finedine_theme_settings[finedine_socials_instagram]',
			'priority' => 5,
		)
	);

}

add_action( 'customize_register', 'finedine_customize_register_social' );

/**
 * Enqueue Style for fontawesome.
 */
function finedine_customize_fontawesome_style() {

	wp_enqueue_style( 'fontawesome', esc_url( get_template_directory_uri() ) . '/customizer/css/fontawesome.css', false, 'all' );

}

add_action( 'init', 'finedine_customize_fontawesome_style' );
