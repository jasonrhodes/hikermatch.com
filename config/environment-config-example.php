<?php

/**
 * NOTE: Rename this file to environment-config.php 
 * to include it in the wp-config file. When you do, 
 * it will be ignored by VCS because that file name is
 * already added to .gitignore -- which is what you want
 * so that this file never ends up in your repo.
 *
 * ---
 * 
 * Local settings by default. Use deployment script to 
 * overwrite these with environment-specific files found
 * in __DIR__ . "/environments/{env}-config.php"
 */
define('WP_ENV', 'local');

// ===================================================
// Load database info
// ===================================================
define( 'DB_NAME', '%%DB_NAME%%' );
define( 'DB_USER', '%%DB_USER%%' );
define( 'DB_PASSWORD', '%%DB_PASSWORD%%' );
define( 'DB_HOST', '%%DB_HOST%%' ); // Probably 'localhost'

// ================================================
// You almost certainly do not want to change these
// ================================================
define( 'DB_CHARSET', 'utf8' );
define( 'DB_COLLATE', '' );

// ==============================================================
// Salts, for security
// Grab these from: https://api.wordpress.org/secret-key/1.1/salt
// ==============================================================
define( 'AUTH_KEY',         'put your unique phrase here' );
define( 'SECURE_AUTH_KEY',  'put your unique phrase here' );
define( 'LOGGED_IN_KEY',    'put your unique phrase here' );
define( 'NONCE_KEY',        'put your unique phrase here' );
define( 'AUTH_SALT',        'put your unique phrase here' );
define( 'SECURE_AUTH_SALT', 'put your unique phrase here' );
define( 'LOGGED_IN_SALT',   'put your unique phrase here' );
define( 'NONCE_SALT',       'put your unique phrase here' );

// ==============================================================
// Table prefix
// Change this if you have multiple installs in the same database
// ==============================================================
$table_prefix  = 'wp_';

// ================================
// Language
// Leave blank for American English
// ================================
define( 'WPLANG', '' );

// ===========
// Hide errors
// ===========
ini_set( 'display_errors', 0 );
define( 'WP_DEBUG_DISPLAY', false );

// =================================================================
// Debug mode
// Debugging? Enable these.
// =================================================================
define( 'SAVEQUERIES', true );
define( 'WP_DEBUG', true );

// ======================================
// Load a Memcached config if we have one
// ======================================
if ( file_exists( dirname( __FILE__ ) . '/memcached.php' ) )
	$memcached_servers = include( dirname( __FILE__ ) . '/memcached.php' );

// ===========================================================================================
// This can be used to programatically set the stage when deploying (e.g. production, staging)
// ===========================================================================================
define( 'WP_STAGE', '%%WP_STAGE%%' );
define( 'STAGING_DOMAIN', '%%WP_STAGING_DOMAIN%%' ); // Does magic in WP Stack to handle staging domain rewriting