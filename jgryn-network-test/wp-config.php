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
define( 'DB_NAME', 'jgryn-network-test' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', '&Ta;E>&.0[ *qat&)K3U`N9GH+w9!G>n[y>CJ@-{1qFqtU,Bf9}b!jpe3I5A]D/D');
define('SECURE_AUTH_KEY', ']1uF/k|4{9?i;vp@eL;@C>;k[L<o m%Q9~,H3!dk-&Z8>=ZTNM5~}6d>ZKu59Sm;');
define('LOGGED_IN_KEY', 'QnI+!W-A%y1;hEt#pWa.8|&v h5F?-fFo~Nq!xRvB+[g@VkQ%)JE||f7l?^&L-A|');
define('NONCE_KEY', '$hxbt3_:&ZI0Yjd[CB1,i?|3sXgORIwy^|{ix_]p>~Lc|PI8<*BP?w/#e)wV9#HY');
define('AUTH_SALT', ',`3Lh8;z-1Ah1|!]<;_>.k1q`MjKi~>^#&+tFNPN]Eqs5I@E&Q:cHF&eU3Yt-)F3');
define('SECURE_AUTH_SALT', '[)cF$CDa1;8aY`|7y#M^/J%Y#kh3pBvH=^)e|Q[9DQ8=f=r9)[[yZ(7]UI{v*vGh');
define('LOGGED_IN_SALT', 'WeduNNRKH`VNwX.+gJ;1BLMhzLyTAPoR/%.E6c+Q$Vs<ho@S+J!O0N=:w)g)RD{;');
define('NONCE_SALT', '<:,,@EI8P5j (U#^oe+MZY`+G!N(}|U]I??}f6U}s|g N? }NMmVA2z06jKQ_|np');

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

/* Multisite */
define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', false);
define('DOMAIN_CURRENT_SITE', 'ec2-18-144-60-3.us-west-1.compute.amazonaws.com');
define('PATH_CURRENT_SITE', '/jgryn-network-test/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);

/* That's all, stop editing! Happy publishing. */

define('FS_METHOD', 'direct');

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );


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
