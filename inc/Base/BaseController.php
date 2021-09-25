<?php

/**
 * @package SamsPlugin
 */

 namespace Inc\Base;

class BaseController {

    public $plugin_path;
    public $plugin_url;
    public $plugin;

    public function __construct() {

        //  __FILE__ points to the root directory(sams-plugin-test) so we need to specifiy how many levels deep to start(2, pointing to Base dir)
        $this->plugin_path = plugin_dir_path( dirname(__FILE__, 2));
        $this->plugin_url = plugin_dir_url( dirname(__FILE__, 2));
        $this->plugin = plugin_basename( dirname(__FILE__, 3)) . '/sams-plugin-test.php';
    }
} 
