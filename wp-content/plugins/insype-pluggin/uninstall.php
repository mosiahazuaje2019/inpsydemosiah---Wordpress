<?php
/**
* Trigger this file on Pluggin uninstall
*
*@package InsypePluggin
**/

if (!defined('WP_UNINSTALL_PLUGIN')) {
	die();
}

//Clear Database store data
$books = get_posts(array('post_type' => 'book', 'numberposts' => -1));

foreach ($books as $book) {
	wp_delete_post( $book->ID, true );
}