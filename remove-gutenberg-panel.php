<?php # -*- coding: utf-8 -*-
/**
 * Main plugin file.
 * @package           Remove Try Gutenberg Dashboard Panel
 * @author            David Decker
 * @copyright         Copyright (c) 2018, David Decker - DECKERWEB
 * @license           GPL-2.0+
 * @link              https://deckerweb.de/twitter
 *
 * @wordpress-plugin
 * Plugin Name:       Remove Try Gutenberg Dashboard Panel
 * Plugin URI:        https://github.com/deckerweb/remove-gutenberg-panel
 * Description:       Removes the Try Gutenberg panel from the WP-Admin Dashboard, introduced in WordPress 4.9.5 Beta 1. We only want to try Gutenberg once it's ready. Not now.
 * Version:           2018.03.23
 * Author:            David Decker - DECKERWEB
 * Author URI:        https://deckerweb.de/
 * License:           GPL-2.0+
 * License URI:       https://opensource.org/licenses/GPL-2.0
 * Text Domain:       remove-gutenberg-panel
 * Domain Path:       /languages/
 * GitHub Plugin URI: https://github.com/deckerweb/remove-gutenberg-panel
 * GitHub Branch:     master
 * Requires WP:       4.9
 * Requires PHP:      5.3
 *
 * Copyright (c) 2018 David Decker - DECKERWEB
 */

/**
 * Exit if called directly.
 */
if ( ! defined( 'WPINC' ) ) {
	die;
}


/**
 * We only want to try the Gutenberg Editor once it's ready. Not now.
 *
 * @since 2018.03.23
 */
remove_action( 'try_gutenberg_panel', 'wp_try_gutenberg_panel' );
