<?php
/*
Plugin Name:  Featured Image Attachment Page Link
Plugin URI:   https://github.com/sterndata/fiapl
Description:  Links featured image to attachment page
Version:      1.0
Author:       Steven Stern
Author URI:   https://github.com/sterndata
License:      GPL2
License URI:  https://www.gnu.org/licenses/gpl-2.0.html
Text Domain:  fiapl
Domain Path:  /languages
*/

function sds_fiapl( $html, $post_id, $post_thumbnail_id, $size, $attr ) {
	return '<a href="' . get_bloginfo( 'url' ) . '/?p=' . $post_thumbnail_id . '" class="sds_fiapl">' . $html . '</a>';

}
add_filter( 'post_thumbnail_html', 'sds_fiapl', 10, 5 );
