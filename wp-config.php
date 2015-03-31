<?php
/**
 * Custom base Wordpress configuration file used with Wordpress Skeleton Composer.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * Also includes Wordpress Skeleton Composer specific settings:
 * Defines the custom environment specific configurations in the config/env folder.
 * Defines the custom Content Directory, and other custom configurations.
 * For more information see the included README.md file or visit the GitHub page for
 * information on how these settings work, what they mean, and how to use them.
 * {@link https://github.com/peterjohnjoseph/Wordpress-Skeleton-Composer}
 *
 * @package WordPress
 */

// ====================================
// Environment specific configurations.
// ====================================
define('APP_ROOT', dirname(__FILE__));
define('APP_ENV', getenv('APPLICATION_ENV'));

if (file_exists(APP_ROOT . '/config/local-config.php')) {
	require APP_ROOT . '/config/local-config.php';
} else {
	require APP_ROOT . '/config/env/' . APP_ENV . '-config.php';
}

// =========================
// Custom Content Directory.
// =========================
define( 'WP_CONTENT_DIR', dirname( __FILE__ ) . '/content' );
define( 'WP_CONTENT_URL', 'http://' . $_SERVER['HTTP_HOST'] . '/content' );

// ===============================================================
// Table prefix
// Change this if you have multiple installs in the same database.
// ===============================================================
$table_prefix  = 'wp_';

// =================================
// Language
// Leave blank for American English.
// =================================
define( 'WPLANG', '' );

// ============
// Hide errors.
// ============
ini_set( 'display_errors', 0 );
define( 'WP_DEBUG_DISPLAY', false );

// =====================================================================================================
// Debug mode
// You can use the environment specific config files (i.e. development-config.php or staging-config.php)
// to set these locally or in development rather than allowing here, in production.
// =====================================================================================================
// define( 'SAVEQUERIES', true );
// define( 'WP_DEBUG', true );

// =========================================================
// Load a Memcached config if we have one. If not disregard.
// =========================================================
if ( file_exists( dirname( __FILE__ ) . '/memcached.php' ) )
    $memcached_servers = include( dirname( __FILE__ ) . '/memcached.php' );

// ============================================================================================
// This can be used to programatically set the stage when deploying (e.g. production, staging).
// ============================================================================================
define( 'WP_STAGE', '%%WP_STAGE%%' );
define( 'STAGING_DOMAIN', '%%WP_STAGING_DOMAIN%%' ); // Does magic in WP Stack to handle staging domain rewriting

// ====================
// Bootstrap WordPress.
// ====================
if ( !defined( 'ABSPATH' ) )
    define( 'ABSPATH', dirname( __FILE__ ) . '/wp/' );
require_once( ABSPATH . 'wp-settings.php' );
