<?php
/**
 * Plugin name: [ Snow Monkey Design Skin ] Hakuji
 * Description: A design skin of the Snow Monkey.
 * Version: 0.2.4
 *
 * @package snow-monkey-design-skin-hakuji
 * @author inc2734
 * @license GPL-2.0+
 */

use Inc2734\WP_GitHub_Plugin_Updater\Bootstrap as Updater;

require_once( __DIR__ . '/vendor/autoload.php' );

add_action(
	'plugins_loaded',
	function() {
		load_plugin_textdomain(
			'snow-monkey-design-skin-hakuji',
			false,
			basename( __DIR__ ) . '/languages'
		);

		add_action(
			'init',
			function() {
				new Updater(
					plugin_basename( __FILE__ ),
					'inc2734',
					'snow-monkey-design-skin-hakuji'
				);
			}
		);

		add_filter(
			'snow_monkey_design_skin_choices',
			function( $choices ) {
				$plugin_data = get_file_data(
					__FILE__,
					[
						'label' => 'Plugin Name',
					],
					'plugin'
				);
				$choices[ basename( __FILE__, '.php' ) ] = $plugin_data['label'];
				return $choices;
			}
		);
	}
);

add_action(
	'after_setup_theme',
	function() {
		if ( class_exists( '\Snow_Monkey\app\model\Design_Skin' ) ) {
			new \Snow_Monkey\app\model\Design_Skin( __FILE__ );
		}

		if ( class_exists( '\Framework\Model\Design_Skin' ) ) {
			new \Framework\Model\Design_Skin( __FILE__ );
		}
	}
);
