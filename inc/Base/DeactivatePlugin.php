<?php
/**
 * @package SamsPlugin
 */
namespace Inc\Base;

 class DeactivatePlugin {
     public static function deactivate() {
         flush_rewrite_rules();
     }
 }