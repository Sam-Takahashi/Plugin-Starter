<?php
/**
 * @package SamsPlugin
 */

namespace Inc\Pages;

 class AdminPages {
     
    public function register() {
        // add admin menu
        add_action('admin_menu', array($this, 'add_admin_pages'));
    }

    public function add_admin_pages()
    {
        //add_menu_page($page_title, $menu_title, $capability, $menu_slug, page_template, icon, list_hierarchy);
        add_menu_page('Sams Plugin', 'Sam', 'manage_options', 'sams_plugin', array($this, 'admin_index'), 'https://metisflowtraining.com/wp-content/uploads/2021/09/book-open2.svg', 110);
    }

    public function admin_index()
    {
        // require template
        require_once PLUGIN_PATH . 'templates/admin.php';
    }
 }