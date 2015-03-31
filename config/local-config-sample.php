<?php
/**
 * WP-Config file for your Local Development.
 * Rename this to local-config.php if you choose to use it, or delete if you choose not to.
 * Use this file if you are just working locally and on your production server and
 * do not need to set other environment specific configurations. See Readme for more info.
 * You must include at least the four main database defines.
 *
 * Other sample configuration variables have been included. Un-comment to use.
 */

// =================
// Database defines.
// =================
define( 'DB_NAME', 'local_db_name' );
define( 'DB_USER', 'local_db_user' );
define( 'DB_PASSWORD', 'local_db_password' );
define( 'DB_HOST', 'localhost' ); // Probably 'localhost'

// ==============================================
// Define Local Wordpress URL and Local Site URL.
// ==============================================
//define('WP_HOME', 'http://sitename.com');
//define('WP_SITEURL', WP_HOME . '/site/');

// ====================================
// Allow Debugging and Error Reporting.
// ====================================
//define( 'WP_DEBUG', true);
//error_reporting(E_ALL); ini_set('display_errors', 1);

// ====================================================
// Set environment specific PHP Memory Limit if needed.
// ====================================================
//define('WP_MEMORY_LIMIT', '64M');, '64M');

// =======================================
// Use Jetpack Plugin in Development Mode.
// =======================================
//define( 'JETPACK_DEV_DEBUG', true);
