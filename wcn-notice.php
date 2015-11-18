<?php
/*
Plugin Name: WCN Notice
Description: A simple plugin demo
Plugin URI: http://nepal.wordcamp.org
Author: WordCamp Nepal
Author URI: http://nepal.wordcamp.org
Version: 1.0
License: GPL2
Text Domain: wcn-notice
Domain Path: /languages/
*/

/*

    Copyright (C) 2015  WordCamp Nepal  nepal@nepal.wordcamp.org

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/


add_action( 'admin_notices', 'wcn_notice_admin_notice' );

function wcn_notice_admin_notice(){

	do_action( 'wcn_notice_before_admin_notices' );

	$notice = apply_filters( 'wcn_notice_admin_notice_text', __( 'This is simple admin notice', 'wcn-notice' ) );

	echo "<p class='wcn-notice-wrapper'>";

	echo $notice;

	echo "</p>";

	do_action( 'wcn_notice_after_admin_notices' );

}

function wcn_notice_scripts() {

	wp_enqueue_style( 'wcn-notice-style', plugins_url( 'css/wcn-notice-style.css', __FILE__ ) );
	
}

add_action( 'admin_enqueue_scripts', 'wcn_notice_scripts' );