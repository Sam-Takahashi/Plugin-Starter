<?php
/**
 * @package SamsPlugin
 */
namespace Inc\Base;

 class ActivatePlugin {
     public static function activate() {
         flush_rewrite_rules();
     }
 }