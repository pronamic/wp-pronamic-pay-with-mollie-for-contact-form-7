<?php
/**
 * Plugin Name: Pronamic Pay with Mollie for Contact Form 7
 * Plugin URI: https://www.pronamic.eu/plugins/pronamic-pay-with-mollie-for-contact-form-7/
 * Description: Pronamic Pay plugin with Mollie for Contact Form 7 integration.
 *
 * Version: 1.0.0
 * Requires at least: 5.9
 * Requires PHP: 7.4
 *
 * Author: Pronamic
 * Author URI: https://www.pronamic.eu/
 *
 * Text Domain: pronamic-pay-with-mollie-for-contact-form-7
 * Domain Path: /languages/
 *
 * Provides: wp-pay/core
 *
 * License: GPL-2.0-or-later
 *
 * GitHub URI: https://github.com/pronamic/wp-pronamic-pay-with-mollie-for-contact-form-7
 *
 * @author    Pronamic <info@pronamic.eu>
 * @copyright 2005-2023 Pronamic
 * @license   GPL-3.0-or-later
 * @package   Pronamic\WordPress\Pay
 */

/**
 * Autoload.
 */
require_once __DIR__ . '/vendor/autoload_packages.php';

/**
 * Bootstrap.
 */
\Pronamic\WordPress\Pay\Plugin::instance(
	[
		'file'                 => __FILE__,
		'action_scheduler'     => __DIR__ . '/packages/action-scheduler/action-scheduler.php',
        'pronamic_service_url' => 'https://api.wp-pay.org/wp-json/pronamic-pay/v1/payments',
	]
);

add_filter(
	'pronamic_pay_plugin_integrations',
	function( $integrations ) {
		$integrations[] = new \Pronamic\WordPress\Pay\Extensions\ContactForm7\Extension();

		return $integrations;
	}
);

add_filter(
	'pronamic_pay_gateways',
	function( $gateways ) {
		$gateways[] = new \Pronamic\WordPress\Pay\Gateways\Mollie\Integration(
			[
				'register_url'           => 'https://www.mollie.com/nl/signup/665327',
				'manual_url'             => \__( 'https://www.pronamicpay.com/en/manuals/how-to-connect-mollie-to-wordpress-with-pronamic-pay/', 'pronamic-pay-with-mollie-for-contact-form-7' ),
				'version_option_name'    => 'pronamic_pay_mollie_version',
				'db_version_option_name' => 'pronamic_pay_mollie_db_version',
			]
		);

		return $gateways;
	}
);
