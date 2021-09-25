<?php

/**
 * @package SamsPlugin
 */
/*
 Plugin Name: Sam's Plugin
 Plugin URI: https://metisflowtraining.com/
 Description: Building my first plugin.
 Version: 1.0.0
 Author: Sam Takahashi
 Author URI: https://metisflow.com/
 License: GPLv2 or later
 Text Domain: SamsPlugin
 */

 // If this file is called incorrectly, abort!
defined('ABSPATH') or die('GTFO SKRUB!');

if (file_exists(dirname(__FILE__) . '/vendor/autoload.php')) {
    require_once dirname(__FILE__) . '/vendor/autoload.php';
}



// The code that runs during pugin activation
register_activation_hook( __FILE__ , array( 'Inc\Base\ActivatePlugin', 'activate' ) );
// The code that runs during pugin deactivation
register_deactivation_hook( __FILE__ , array( 'Inc\Base\DeactivatePlugin', 'deactivate' ) );

//Wont work?
// use Inc\Base\ActivatePlugin;
// use Inc\Base\DeactivatePlugin;
// function activate_sams_plugin() {
//     ActivatePlugin::activate;
// }

// function deactivate_sams_plugin() {
//     DeactivatePlugin::deactivate;
// }
// register_activation_hook( __FILE__, 'activate_sams_plugin');
// register_deactivation_hook( __FILE__, 'deactivate_sams_plugin');




// Trigger Classes
if (class_exists('Inc\\Init')) {
    //initialize(register_services class)
    Inc\Init::register_services();
}