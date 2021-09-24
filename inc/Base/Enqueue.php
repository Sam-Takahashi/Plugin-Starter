<?php
/**
 * @package SamsPlugin
 */

namespace Inc\Base;

 class Enqueue {
    
    public function register() {

        add_action('wp_enqueue_scripts', array($this, 'enqueue'));

        // enqueue scripts
        function enqueue()
        {
            wp_enqueue_style('mypluginstyle', PLUGIN_URL . 'assets/style.css');
            wp_enqueue_script('mypluginscript', PLUGIN_URL . 'assets/main.js');
        }

    }
 }