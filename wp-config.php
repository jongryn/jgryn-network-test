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
define('AUTH_KEY',         'K+ R|ppD{w7a0DA6Vn*E).X4|H-|d Ck+vfMO-AG8,SS+kZ9A6+(lhTEEF!/Q0g_');
define('SECURE_AUTH_KEY',  '+Q2,V%PwQ&]e:O|i*GOLN2M7>%]N+f)K}sKk||/y-^+.&:-5<Pf&+3IWB&-gdW|X');
define('LOGGED_IN_KEY',    'pg?^w=*h?anFyVq.!Tu0/coUzuB|qihE~G``1Vv#(0]moy 0@DSCD(4=NgnMI<?p');
define('NONCE_KEY',        'Ng>n.Wf)B4p6Ge|`T@eK&9>&|T*Fb|K i+cmSTh4h:DnC<?OV||k}&ezTeq{@TB_');
define('AUTH_SALT',        ')=V`s.whz{4mXX`PV!]^r4S(Qf_TF;4Ih8*[<Uy:#5WH`h`][4)S|,ALvuJ9.--j');
define('SECURE_AUTH_SALT', ',LS,K*b*HRD;?17fJT,~`0GS6^|vPQ<WDXA#BaVH~MlAc9TZkes7ri+s38@+hyp@');
define('LOGGED_IN_SALT',   'H:<# _T!``K!H7]}~p3EO{b[49>k@|l=YC1b;7S52$caJ>Gd>}q$YIbLgjj1`Yy_');
define('NONCE_SALT',       'b nRO6.vr<4[C~W_E)Vd^M*YnA}Wj.QkmRfT#IZp%30##PMn%f?`xM~pXJ8a{|Ho');
	

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