<?php

/* 
	Plugin Name: CBA Easy Embed
	Plugin URI: https://cba.fro.at
	Description: Makes it easier to embed content from the Cultural Broadcasting Archive
	Author: Thomas Diesenreiter and Ingo Leindecker
	Version: 1.1.0
	Author URI: http://cba.fro.at
	
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

wp_oembed_add_provider( '#https?://(www\.)?cba\.fro\.at/.*#i', 'https://cba.fro.at/?oembed=true', true );

?>