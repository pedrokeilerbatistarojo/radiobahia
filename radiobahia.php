<?php

/**
 * Plugin Name
 *
 * @package           Radio Bahia
 * @author            Pedro Keiler Batista Rojo
 * @copyright         2022 Emisora Radio Bahia
 * @license           GPL-2.0-or-later
 *
 * @wordpress-plugin
 * Plugin Name:       Radio Bahia
 * Plugin URI:        https://gitlab.com/pedrokeilerbatistarojo/radio-bahia-plugin
 * Description:       Plugins para ajustar tema Newsup al sitio web de la Emisora Radio Bahia
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Pedro Keiler Batista Rojo
 * Author URI:        https://www.linkedin.com/in/pedro-keiler-batista-rojo-8451b81bb/
 * Text Domain:       radio-bahia
 * License:           GPL v2 or later
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Update URI:        https://gitlab.com/pedrokeilerbatistarojo/radio-bahia-plugin
 */

 /* exist if directly accessed */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// define variable for path to this plugin file.
define( 'RADIOBAHIA_LOCATION', dirname( __FILE__ ) );
define( 'RADIOBAHIA_LOCATION_URL', plugins_url( '', __FILE__ ) );


//load admin functions
include plugin_dir_path(__FILE__) . 'includes/admin/functions.php';

