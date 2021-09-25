<?php
/**
 * @package SamsPlugin
 */

namespace Inc\Base;

use \Inc\Base\BaseController;

 class Enqueue extends BaseController {
    
    public function register() {

        add_action('wp_enqueue_scripts', array($this, 'enqueue'));

        // enqueue scripts
        function enqueue()
        {
            wp_enqueue_style('mypluginstyle', $this->plugin_url . 'assets/style.css');
            wp_enqueue_script('mypluginscript', $this->plugin_url . 'assets/main.js');
        }

    }
 }