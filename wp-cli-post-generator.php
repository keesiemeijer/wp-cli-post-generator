<?php
/*
 * Plugin Name: WP-CLI Post Generator
 * Plugin URI: https://github.com/keesiemeijer/wp-cli-posts-generator
 * Description: WP-CLI commands to generate posts with images and terms.
 * Version: 1.0.0
 * Author: Kees Meijer
 * License: GPLv2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
 * TextDomain:
 * DomainPath:
 * Network:
 */

/*
WP-CLI Post Generator

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
(at your option) any later version. You may NOT assume that you can use any other version of the GPL.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

$plugin_dir = plugin_dir_path( __FILE__ );

if ( file_exists( $plugin_dir . 'vendor/trepmal/image-gen/image-gen.php' ) ) {
	/**
	 * Include Image Gen plugin.
	 *
	 * @author Kailey Lampert
	 * @see https://github.com/trepmal/image-gen
	 */
	include $plugin_dir . 'vendor/trepmal/image-gen/image-gen.php';
}

if ( file_exists( $plugin_dir . 'vendor/trepmal/post-gen/post-gen.php' ) ) {
	/**
	 * Include Post Gen plugin.
	 *
	 * @author Kailey Lampert
	 * @see https://github.com/trepmal/post-gen
	 */
	include $plugin_dir . 'vendor/trepmal/post-gen/post-gen.php';
}

if ( file_exists( $plugin_dir . 'vendor/keesiemeijer/term-gen/term-gen.php' ) ) {
	/**
	 * Include Term Gen plugin.
	 *
	 * @author Kees Meijer
	 * @see https://github.com/keesiemeijer/term-gen
	 */
	include $plugin_dir . 'vendor/keesiemeijer/term-gen/term-gen.php';
}
