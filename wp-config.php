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
define('DB_NAME', 'jgryn-network-test-db');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         '?Nwhz!7YYIB9D|B;2Q] 9V-J:PtPjl+juFZ2&#>ajS T|Q65LF8p~7x/G9OtMQ3i');
define('SECURE_AUTH_KEY',  'Sh+|(1>8xSps6q|w!heEc|XUNiK;rI|tJ$ova;8}-gAxZU[0+!r]FRJH?zj$Hi5s');
define('LOGGED_IN_KEY',    '%mUx),dl#[.sJw0YT6E3> PDI*DxbRldF+pK&(j)[OJm@!@g:krc_lfUC K 4>?h');
define('NONCE_KEY',        'Pth^<_@> m*i%oi/DT/QRB$MdD$fK]nws]}d%-812q?h_SCI,<RM047G]?Ms|MCc');
define('AUTH_SALT',        'ZgWraFVRWl*Pq:UmMNIYp.xXEipRcA:|=g+BkF]j4Lci1|SmhtdkAh`%RB`YS$$q');
define('SECURE_AUTH_SALT', '0Ob&-yscl+dsi&IWP`L~g(0e5e_rM8U`;4S6Kfu%:-5Q|2T>PWHz#T-IsJdXqu 5');
define('LOGGED_IN_SALT',   '1OZ_)Io{t:Fr(|7D`vk)d(mYBR_]#O}$s/e^|CiL^=_RLaH))/)Xo>+$-^K9A,>f');
define('NONCE_SALT',       'M-e9<`J3X/^rmNd98HQv#*7+nR-9YR= tt~ZX}d.Ktme=Gp_9*jMt27N+b+ol%dW');

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

/* Multisite */
define( 'WP_ALLOW_MULTISITE', true );

/* That's all, stop editing! Happy blogging. */

define('FS_METHOD', 'direct');

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');


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
