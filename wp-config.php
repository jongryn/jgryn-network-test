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
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'bitnami_wordpress');

/** MySQL database username */
define('DB_USER', 'root');
/* define('DB_USER', 'bn_wordpress'); */

/** MySQL database password */
define('DB_PASSWORD', 'root');
/* define('DB_PASSWORD', 'd6ab501583'); */

/** MySQL hostname */
define('DB_HOST', 'localhost:8888');
/* define('DB_HOST', 'localhost:3306'); */

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', '785d6a2ef5939beb2ad4d397f47a6669b12d97ad9bf3bf3375d537508fc6b002');
define('SECURE_AUTH_KEY', 'e50cbb3d13cc3501b2eafbd729766e88f7731ef42c6a9ea76ecf7e5f9e4b32ed');
define('LOGGED_IN_KEY', 'b5a040a65822e16aa875e6ebe157e0990ffab3af2a33799381ad2cba1b71b388');
define('NONCE_KEY', '944f85501e61e01cf7e55642f45c58b55ea2389a6cba83b92053f788d4fafe25');
define('AUTH_SALT', '5ea178fdcfc987b57857dc87801b5de93e3c3e12fa8e52a25a7ff133d118b61c');
define('SECURE_AUTH_SALT', '71432aa839eceeb5279fddf581a13aa2b96e807fd82acd5303ad861c00ab5761');
define('LOGGED_IN_SALT', '32a1a9f47985b3bdf3d4d502eccaf86685aa896d5f965305c12804338e078cc2');
define('NONCE_SALT', 'b0db21785b1a3adca4f25bef8e35191cffa6bd5d70f42ea9e02843807ec81e77');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

define('FS_METHOD', 'direct');

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

define('WP_TEMP_DIR', '/opt/bitnami/apps/wordpress/tmp');


//  Disable pingback.ping xmlrpc method to prevent Wordpress from participating in DDoS attacks
//  More info at: https://docs.bitnami.com/general/apps/wordpress/troubleshooting/xmlrpc-and-pingback/

if ( !defined( 'WP_CLI' ) ) {
    // remove x-pingback HTTP header
    add_filter('wp_headers', function($headers) {
        unset($headers['X-Pingback']);
        return $headers;
    });
    // disable pingbacks
    add_filter( 'xmlrpc_methods', function( $methods ) {
            unset( $methods['pingback.ping'] );
            return $methods;
    });
    add_filter( 'auto_update_translation', '__return_false' );
}
