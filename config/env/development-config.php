<?php
/**
 * wp-config file for your Development environment.
 * Place environment specific configurations here that will only be used in your Development environment.
 * You must include at least the four main database defines.
 * Other sample configuration variables have been included. Un-comment to use.
 */

/*  Database Defines */
define( 'DB_NAME', 'local_db_name' );
define( 'DB_USER', 'local_db_user' );
define( 'DB_PASSWORD', 'local_db_password' );
define( 'DB_HOST', 'localhost' ); // Probably 'localhost'

/* Allow Debugging and Error Reporting */
//define( 'WP_DEBUG', true);
//error_reporting(E_ALL); ini_set('display_errors', 1);


/* Use Jetpack plugin in Development mode */
//define( 'JETPACK_DEV_DEBUG', true);

/* Set environment specific PHP memory limit if needed. */
//define('WP_MEMORY_LIMIT', '64M');