<?php

/**
 * @package SamsPlugin
 */

if(!defined('WP_UNINSTALL_PLUGIN')){
    die;
}

// Clear Db stored data
$books = get_posts( array('post_type' => 'book', 'numberposts' => -1));

foreach($books as $book) {
    //built-in method
    wp_delete_post( $book->ID, true);
}