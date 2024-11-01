<?php
/*
Plugin Name: wp-dBug
Version: 0.2
Plugin URI: http://neverblog.net/wp-dbug
Description: Plugin implements the awesome dBug class created by Kwaku Otchere for use in WordPress plugin debugging
Author: Vasken Hauri (brandwaffle), Matt Batchelder (borkweb)
Author URI: http://gigaom.com
*/

/*
 Copyleft (!C) 2013 Vasken Hauri

 This plugin owes a huge debt to
 Kwaku Otchere's dBug class, copyright (C) 2010
 and released under GPL.
 http://dbug.ospinto.com/

 This plugin honors and extends Otchere's work, and is licensed under the same terms.



 This program is free software; you can redistribute it and/or modify
 it under the terms of the GNU General Public License as published by
 the Free Software Foundation; either version 2 of the License, or
 (at your option) any later version.

 This program is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.	 See the
 GNU General Public License for more details.

 You should have received a copy of the GNU General Public License
 along with this program; if not, write to the Free Software
 Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA	 02111-1307	 USA
*/

require_once __DIR__ . '/class-dbug.php';
require_once __DIR__ . '/class-wp-dbug.php';

$wp_dbug = new WP_DBug;

//this is really it for the plugin
function wp_dbug( $var, $title = null ) {
	global $wp_dbug;
	
	$wp_dbug->log( $var, $title );
}//end wp_dbug
