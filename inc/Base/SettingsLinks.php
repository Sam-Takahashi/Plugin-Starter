<?php
/**
 * @package SamsPlugin
 */

namespace Inc\Base;

 class SettingsLinks {

    public function register() {
        add_filter("plugin_action_links_" . PLUGIN, array($this, 'settings_link'));
    }
     
    public function settings_link($links) {
        // add custom settings link
        $settings_link = '<a href="admin.php?page=sams_plugin">Settings</a>';
        // push to array and return
        array_push($links, $settings_link);
        return $links;
    }
 }