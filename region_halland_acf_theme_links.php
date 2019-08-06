<?php

	/**
	 * @package Region Halland ACF Theme Links
	 */
	/*
	Plugin Name: Region Halland ACF Theme Links
	Description: ACF-fält för tema länkar
	Version: 1.1.0
	Author: Roland Hydén
	License: GPL-3.0
	Text Domain: regionhalland
	*/

	// Anropa funktion om ACF är installerad & aktiverad
	add_action('acf/init', 'my_acf_add_theme_links_field_groups');

	// Lägg till ett formulär
	function my_acf_add_theme_links_field_groups() {

		// Om funktionen existerar
		if (function_exists('acf_add_local_field_group')):

			// Lägg till formulär via acf
			acf_add_local_field_group(array(
				'key' => 'group_1000180',
				'title' => 'Hantera länkar för jobb',
				'fields' => array(
					array(
						'key' => 'field_1000181',
						'label' => 'Länkar',
						'name' => '',
						'type' => 'tab',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'placement' => 'top',
						'endpoint' => 0,
					),
					array(
						'key' => 'field_1000182',
						'label' => '',
						'name' => 'name_1000183',
						'type' => 'group',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'layout' => 'block',
						'sub_fields' => array(
							array(
								'key' => 'field_1000184',
								'label' => '1) Vad söker ni',
								'name' => 'name_1000185',
								'type' => 'text',
								'instructions' => 'Ange vad ni söker',
								'required' => 0,
								'conditional_logic' => 0,
								'wrapper' => array(
									'width' => '',
									'class' => '',
									'id' => '',
								),
								'default_value' => '',
								'placeholder' => '',
								'maxlength' => '',
								'rows' => 3,
								'new_lines' => '',
							),
							array(
								'key' => 'field_1000186',
								'label' => '1) Länk till annons',
								'name' => 'name_1000187',
								'type' => 'text',
								'instructions' => 'Skriv in fullständig länk till annons.',
								'required' => 0,
								'conditional_logic' => 0,
								'wrapper' => array(
									'width' => '',
									'class' => '',
									'id' => '',
								),
								'default_value' => '',
								'placeholder' => '',
								'maxlength' => '',
								'rows' => 3,
								'new_lines' => '',
							),
							array(
								'key' => 'field_1000188',
								'label' => '2) Vad söker ni',
								'name' => 'name_1000189',
								'type' => 'text',
								'instructions' => 'Ange vad ni söker',
								'required' => 0,
								'conditional_logic' => 0,
								'wrapper' => array(
									'width' => '',
									'class' => '',
									'id' => '',
								),
								'default_value' => '',
								'placeholder' => '',
								'maxlength' => '',
								'rows' => 3,
								'new_lines' => '',
							),
							array(
								'key' => 'field_1000190',
								'label' => '2) Länk till annons',
								'name' => 'name_1000191',
								'type' => 'text',
								'instructions' => 'Skriv in fullständig länk till annons.',
								'required' => 0,
								'conditional_logic' => 0,
								'wrapper' => array(
									'width' => '',
									'class' => '',
									'id' => '',
								),
								'default_value' => '',
								'placeholder' => '',
								'prepend' => '',
								'append' => '',
								'maxlength' => '',
							),
						),
					)
				),
				'location' => array(
					array(
						array(
							'param' => 'options_page',
							'operator' => '==',
							'value' => 'acf-options-temainstallningar',
						),
					),
				),
				'menu_order' => 0,
				'position' => 'normal',
				'style' => 'default',
				'label_placement' => 'top',
				'instruction_placement' => 'label',
				'hide_on_screen' => '',
				'active' => 1,
				'description' => '',
			));

		endif;

	}

	// Hämta ACF-texter för cokkie-notice
	function get_region_halland_theme_links()
	{
		// Hämta respektive värde från databasen
		$links['text_1'] = get_field('name_1000183_name_1000185', 'options');
		$links['link_1'] = get_field('name_1000183_name_1000187', 'options');
		$links['text_2'] = get_field('name_1000183_name_1000189', 'options');
		$links['link_2'] = get_field('name_1000183_name_1000191', 'options');
		
		// Returnera värdena som en array
		return $links;
	}

	// Metod som anropas när pluginen aktiveras
	function region_halland_acf_theme_links_activate() {
		// Ingenting just nu...
	}

	// Metod som anropas när pluginen av-aktiveras
	function region_halland_acf_theme_links_deactivate() {
		// Ingenting just nu...
	}

	// Aktivera pluginen och anropa metod
	register_activation_hook( __FILE__, 'region_halland_acf_theme_links_activate');

	// Av-aktivera pluginen och anropa metod
	register_deactivation_hook( __FILE__, 'region_halland_acf_theme_links_deactivate');

?>