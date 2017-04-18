<?php
function boldgrid_theme_framework_config( $boldgrid_framework_configs ) {

	// Required.
	$boldgrid_framework_configs['theme_name'] = 'boldgrid-cobalt';
	$boldgrid_framework_configs['scripts']['boldgrid-sticky-footer'] = true;
	$boldgrid_framework_configs['customizer-options']['typography']['enabled'] = true;
	$boldgrid_framework_configs['temp']['attribution_links'] = true;
	$boldgrid_framework_configs['boldgrid-parent-theme'] = true;
	$boldgrid_framework_configs['parent-theme-name'] = 'prime';
	$boldgrid_framework_configs['template']['footer'] = 'generic';
	$boldgrid_framework_configs['template']['header'] = 'generic';
	$boldgrid_framework_configs['template']['pages']['page_home.php']['entry-content'] = '';

	// Background.
	$boldgrid_framework_configs['customizer-options']['background']['defaults']['background_image'] = true;

	// Assign Locations for Generic Header.
	$boldgrid_framework_configs['template']['locations']['header'] = array(
		'1' => array( '[menu]secondary' ),
		'5' => array( '[widget]boldgrid-widget-1' ),
		'6' => array( '[action]boldgrid_site_identity' ),
		'7' => array( '[action]boldgrid_primary_navigation' ),
		'11' => array( '[widget]boldgrid-widget-2' ),
		'8' => array( '[menu]social' ),
		'9' => array( '[menu]tertiary' ),
	);

	// Assign Locations for Generic Footer.
		$boldgrid_framework_configs['template']['locations']['footer'] = array(
			'1' => array( '[menu]footer_center' ),
			'5' => array( '[widget]boldgrid-widget-3' ),
			'8' => array( '[action]boldgrid_display_attribution_links' ),
		);

	// Enable BoldGrid Color Palette System.
	$boldgrid_framework_configs['customizer-options']['colors']['enabled'] = true;
	$boldgrid_framework_configs['customizer-options']['colors']['defaults'] = array(
		array(
			'default' => true,
			'format' => 'palette-primary',
			'neutral-color' => '#ffffff',
			'colors' => array(
				'#8bbe1d',
				'#0047ab',
				'#0047ab',
				'#8bbe1d',
				'#2a2a2a',
			),
		),
		array(
			'format' => 'palette-primary',
			'neutral-color' => '#f4f4f4',
			'colors' => array(
				'#c1b653',
				'#555764',
				'#555764',
				'#c1b653',
				'#2f3038',
			),
		),
		array(
			'format' => 'palette-primary',
			'neutral-color' => '#ffffff',
			'colors' => array(
				'#ec576b',
				'#4ec5c1',
				'#4ec5c1',
				'#ec576b',
				'#f4f4f4',
			),
		),
		array(
			'format' => 'palette-primary',
			'neutral-color' => '#e8e8e8',
			'colors' => array(
				'#ff3b3f',
				'#22252c',
				'#22252c',
				'#ff3b3f',
				'#e2e2e2',
			),
		),
		array(
			'format' => 'palette-primary',
			'neutral-color' => '#d7cec7',
			'colors' => array(
				'#76323f',
				'#565656',
				'#565656',
				'#76323f',
				'#c0af9f',
			),
		),
		array(
			'format' => 'palette-primary',
			'neutral-color' => '#12131a',
			'colors' => array(
				'#03c9a9',
				'#544359',
				'#544359',
				'#03c9a9',
				'#2d2f41',
			),
		),
	);

	// Text Contrast Colors.
	$boldgrid_framework_configs['customizer-options']['colors']['light_text'] = '#ffffff';
	$boldgrid_framework_configs['customizer-options']['colors']['dark_text'] = '#2a2a2a';

	// Buttons
	$boldgrid_framework_configs['components']['buttons']['variables']['button-primary-classes'] = '.btn, .btn-3d, .btn-color-1, .btn-rounded';

	// Typography Headings.
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['headings_font_family'] = 'Heebo';
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['headings_font_size'] = 18;
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['headings_text_transform'] = 'uppercase';

	// Typography Alternate Headings.
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['alternate_headings_font_family'] = 'Heebo';
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['alternate_headings_font_size'] = 10;
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['alternate_headings_text_transform'] = 'uppercase';

	// Typography Navigation.
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['navigation_font_family'] = 'Heebo';
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['navigation_font_size'] = 17;
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['navigation_text_transform'] = 'uppercase';

	// Typography Body.
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['body_font_family'] = 'Lato';
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['body_font_size'] = 16;
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['body_line_height'] = 175;

	// Typography Tagline Classes.
	$boldgrid_framework_configs['template']['tagline-classes'] = 'h3 alt-font site-description';

	// Icons.
	$boldgrid_framework_configs['social-icons']['size'] = 'large';

	// Menu Locations.
	$boldgrid_framework_configs['menu']['locations']['primary'] = "Main Menu";
	$boldgrid_framework_configs['menu']['locations']['social'] = 'Below Site Title';
	$boldgrid_framework_configs['menu']['locations']['secondary'] = 'Above Header';
	$boldgrid_framework_configs['menu']['locations']['tertiary'] = 'Below Header';
	$boldgrid_framework_configs['menu']['locations']['footer_center'] = "Footer Bottom Left";
	

	// Name Widget Areas.
	$boldgrid_framework_configs['widget']['sidebars']['boldgrid-widget-1']['name'] = 'Above Primary Navigation';
	$boldgrid_framework_configs['widget']['sidebars']['boldgrid-widget-2']['name'] = 'Below Site Title';

	return $boldgrid_framework_configs;
}
add_filter( 'boldgrid_theme_framework_config', 'boldgrid_theme_framework_config' );

/**
 * Site Title & Logo Controls
 */
function filter_logo_controls( $controls ) {
	$controls['logo_font_family']['default'] = 'Heebo';
	$controls['logo_font_size']['default'] = 36;
	$controls['logo_letter_spacing']['default'] = -1;

	return $controls;
}
add_filter( 'kirki/fields', 'filter_logo_controls' );
