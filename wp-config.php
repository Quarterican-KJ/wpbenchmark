<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATHo
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'WPBenchmark' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** WP database repair */
// define('WP_ALLOW_REPAIR', true);

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'kFR53zpXjyLfXYCZll0RLwH9tgYh00KMPy1lx45GTtZxQrzy80CpMT8Vo0MpCJWk' );
define( 'SECURE_AUTH_KEY',  'dcaeGcUbYjLacV6pXxfFFCtkoJNNZXp2MBfXHbzbYLJBsgIDtrURGwaT7HetI18E' );
define( 'LOGGED_IN_KEY',    'deuBvMW3O3WTKygIWW1z1l27OCX3bn6rX87949E3583njnu6Eh0JkfhUyyxTRrsR' );
define( 'NONCE_KEY',        'hVu80EEkK5UNPBUgObRdDOKAzNGrhc6iXBnkcX99acoi122LIOGyNHLEvg6Unkyl' );
define( 'AUTH_SALT',        'TyETXbxoEVWqMBK3OJGwT14tkpsgxG7dpPiOsG6piH8vbqjBDDTWGFELRKN9fdC8' );
define( 'SECURE_AUTH_SALT', 'MOxeXSa9Z38PTlsOpwVMlc6dq8tIrMsW0WRqSWzEs41hIXDp5fi8Rx4HbHrGCUMV' );
define( 'LOGGED_IN_SALT',   'jvA4k0vjqVyJbG5GsSNORJsV3HTkQ9PTyfGTCU8qFVP4ZylJcHjgb3U6FJ8QpL4V' );
define( 'NONCE_SALT',       'Xv20i2dj7ry2zTD4kQSjXLc4iPqg5iSKCulpVEqGTdK8Vcyw5yVj0YwT8ug0WwSr' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
