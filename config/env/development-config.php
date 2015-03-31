<?php
/**
 * WP-Config file for your Development environment.
 * Place environment specific configurations here that will only be used in your Development environment.
 * You must include at least the four main database defines.
 * Other sample configuration variables have been included. Un-comment to use.
 */

// !! Remember to copy and paste the code snippet below in .htaccess or your servers httpd.conf file
// in order to set the environment variable (ENV) for this config to work. See Readme for more.
//
// Copy and paste this snippet-  SetEnv APPLICATION_ENV "development"

// =================
// Database defines.
// =================
define( 'DB_NAME', 'local_db_name' );
define( 'DB_USER', 'local_db_user' );
define( 'DB_PASSWORD', 'local_db_password' );
define( 'DB_HOST', 'localhost' ); // Probably 'localhost'

// ==================================
// Define Wordpress URL and Site URL.
// ==================================
//define('WP_HOME', 'http://sitename.com');
//define('WP_SITEURL', WP_HOME . '/site/');

// ===========================================================================================
// Custom Content Directory. Only change if you are moving the content folder per environment.
// ===========================================================================================
define( 'WP_CONTENT_DIR', dirname( __DIR__ ) . '/content' );
define( 'WP_CONTENT_URL', 'http://' . $_SERVER['HTTP_HOST'] . '/content' );

// =============================================================================
// Authentication Unique Keys and Salts.
//
// Change these to different unique phrases!
// You can generate these from https://api.wordpress.org/secret-key/1.1/salt/
// You can change these at any point in time to invalidate all existing cookies.
// This will force all users to have to log in again.
//
// @since 2.6.0
//
// =============================================================================
define( 'AUTH_KEY',         'put your unique phrase here' );
define( 'SECURE_AUTH_KEY',  'put your unique phrase here' );
define( 'LOGGED_IN_KEY',    'put your unique phrase here' );
define( 'NONCE_KEY',        'put your unique phrase here' );
define( 'AUTH_SALT',        'put your unique phrase here' );
define( 'SECURE_AUTH_SALT', 'put your unique phrase here' );
define( 'LOGGED_IN_SALT',   'put your unique phrase here' );
define( 'NONCE_SALT',       'put your unique phrase here' );

// ====================================
// Allow Debugging and Error Reporting.
// ====================================
//define( 'WP_DEBUG', true);
//error_reporting(E_ALL); ini_set('display_errors', 1);

// ====================================================
// Set environment specific PHP Memory Limit if needed.
// ====================================================
//define('WP_MEMORY_LIMIT', '64M');, '64M');