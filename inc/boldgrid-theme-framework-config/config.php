<?php
function boldgrid_theme_framework_config( $boldgrid_framework_configs ) {
	/**
	 * General Configs
	 */
	$boldgrid_framework_configs['theme_name'] = 'boldgrid-cobalt';
	$boldgrid_framework_configs['boldgrid-parent-theme'] = true;
	$boldgrid_framework_configs['parent-theme-name'] = 'prime';

	// Enable sticky footer and attribution links.
	$boldgrid_framework_configs['scripts']['boldgrid-sticky-footer'] = true;
	$boldgrid_framework_configs['temp']['attribution_links'] = true;
	
	// Disable background image and CTA
	$boldgrid_framework_configs['customizer-options']['background']['defaults']['background_image'] = false;
	$boldgrid_framework_configs['template']['call-to-action'] = 'disabled';
	
	// Assign menus, widgets, and actions to locations in generic header template.
	$boldgrid_framework_configs['template']['locations']['header'] = array(
		'1' => array( '[menu]secondary' ),
		'5' => array( '[widget]boldgrid-widget-1' ),
		'6' => array( '[action]boldgrid_site_identity' ),
		'7' => array( '[action]boldgrid_primary_navigation' ),
		'8' => array( '[menu]tertiary' ),
		'11' => array( '[widget]boldgrid-widget-2' ),
	);

	// Assign menus, widgets, and actions to locations in generic footer template.
	$boldgrid_framework_configs['template']['locations']['footer'] = array(
		'1' => array( '[menu]social' ),
		'5' => array( '[menu]footer_center' ),
		'8' => array( '[widget]boldgrid-widget-3' , '[action]boldgrid_display_contact_block' ),
		'11' => array( '[action]boldgrid_display_attribution_links' ),
	);
	
	// Specify container classes.
	$boldgrid_framework_configs['template']['pages']['global']['header'] = 'container-fluid';
	$boldgrid_framework_configs['template']['pages']['global']['footer'] = 'container-fluid';
	$boldgrid_framework_configs['template']['pages']['page_home.php']['entry-header'] = 'container-fluid';
	$boldgrid_framework_configs['template']['pages']['page_home.php']['entry-content'] = 'container-fluid';
	$boldgrid_framework_configs['template']['pages']['page_home.php']['entry-footer'] = 'container-fluid';

	/**
	 * Customizer Configs
	 */
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

	// Override customizer options per subcategory.
	switch ( $boldgrid_framework_configs['inspiration']['subcategory_key'] ) {
		case 'Consulting':
			$boldgrid_framework_configs['customizer-options']['colors']['defaults'][1]['default'] = true;
			break;
		case 'Home Repair':
			$boldgrid_framework_configs['customizer-options']['colors']['defaults'][1]['default'] = true;
			break;
		case 'Music':
			$boldgrid_framework_configs['customizer-options']['colors']['defaults'][2]['default'] = true;
			break;
		case 'Fitness':
			$boldgrid_framework_configs['customizer-options']['colors']['defaults'][2]['default'] = true;
			break;
		case 'Restaurant':
			$boldgrid_framework_configs['customizer-options']['colors']['defaults'][3]['default'] = true;
			break;
		case 'Design':
			$boldgrid_framework_configs['customizer-options']['colors']['defaults'][3]['default'] = true;
			break;
		case 'Fashion':
			$boldgrid_framework_configs['customizer-options']['colors']['defaults'][4]['default'] = true;
			break;
		case 'General':
			$boldgrid_framework_configs['customizer-options']['colors']['defaults'][4]['default'] = true;
			break;
		case 'Photography':
			$boldgrid_framework_configs['customizer-options']['colors']['defaults'][5]['default'] = true;
			break;
		case 'Real Estate':
			$boldgrid_framework_configs['customizer-options']['colors']['defaults'][5]['default'] = true;
			break;		
		// Default
		default:
			$boldgrid_framework_configs['customizer-options']['colors']['defaults'][0]['default'] = true;
			break;
	}

	// Text Contrast Colors.
	$boldgrid_framework_configs['customizer-options']['colors']['light_text'] = '#ffffff';
	$boldgrid_framework_configs['customizer-options']['colors']['dark_text'] = '#2a2a2a';

	// Enable Typography Controls.
	$boldgrid_framework_configs['customizer-options']['typography']['enabled'] = true;

	// Typography Headings.
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['headings_font_family'] = 'Heebo';
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['headings_font_size'] = 18;
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['headings_text_transform'] = 'uppercase';

	// Typography Alternate Headings.
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['alternate_headings_font_family'] = 'Heebo';
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['alternate_headings_font_size'] = 47;
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
	$boldgrid_framework_configs['template']['tagline-classes'] = 'h5 site-description';

	// Typography Relationships
	$boldgrid_framework_configs['customizer-options']['typography']['selectors']['.woocommerce-page h2.alt-font']= array(
		'type' => 'subheadings',
		'round' => 'floor',
		'amount' => .6,
	);

	// Button Classes
	$boldgrid_framework_configs['components']['buttons']['variables']['button-primary-classes'] = '.btn, .btn-3d, .btn-color-1, .btn-rounded';
	$boldgrid_framework_configs['components']['buttons']['variables']['button-secondary-classes'] = '.btn, .btn-3d, .btn-color-2, .btn-rounded';

	// Social Icons.
	$boldgrid_framework_configs['social-icons']['size'] = 'large';

	// Menu Locations.
	$boldgrid_framework_configs['menu']['locations']['primary'] = "Primary Menu";
	$boldgrid_framework_configs['menu']['locations']['secondary'] = 'Header Top';
	$boldgrid_framework_configs['menu']['locations']['tertiary'] = 'Header Bottom';
	$boldgrid_framework_configs['menu']['locations']['social'] = 'Footer Top';
	$boldgrid_framework_configs['menu']['locations']['footer_center'] = "Footer Bottom";
	$boldgrid_framework_configs['menu']['footer_menus'][] = 'social';

	// Widget Areas.
	$boldgrid_framework_configs['widget']['sidebars']['boldgrid-widget-1']['name'] = 'Above Site Title';
	$boldgrid_framework_configs['widget']['sidebars']['boldgrid-widget-2']['name'] = 'Below Site Title';
	$boldgrid_framework_configs['widget']['sidebars']['boldgrid-widget-3']['name'] = 'Footer';

	return $boldgrid_framework_configs;
}
add_filter( 'boldgrid_theme_framework_config', 'boldgrid_theme_framework_config' );

/**
 * Site Title & Logo Controls
 */
function filter_logo_controls( $controls ) {
	$controls['logo_font_family']['default'] = 'Heebo';
	$controls['logo_font_size']['default'] = 36;
	$controls['logo_letter_spacing']['default'] = 1;

	// Controls above will override framework defaults
	return $controls;
}
add_filter( 'kirki/fields', 'filter_logo_controls' );
