<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_homework' );

/** Database username */
define( 'DB_USER', 'homestead' );

/** Database password */
define( 'DB_PASSWORD', 'secret' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '0j@ EwtZi#RB0eFG/<~_tv=Md4(O] iZ{xZS7J<pfZk;@0>ht`&X68w?Lm_dpmi:' );
define( 'SECURE_AUTH_KEY',  'm|_}s&E01%Uu.^vA|q?wzt|c ]& `kZ,N|ffB#d`^6`CtWR_$t5M;]ke<qDzLlJB' );
define( 'LOGGED_IN_KEY',    'lQ.g7UC&`Xz<9-cF`o7p:r*YGr|O$y$f#!h9 v4>hpL8`z0!H|9_W6s*r9vHZW:(' );
define( 'NONCE_KEY',        'A`;;;JEE~GGyOCj5=r>%fqv-?B {pM)1^gLUx|l{{[QV~d4z8=u<T]V]8&N/Z8}<' );
define( 'AUTH_SALT',        'p8t4XmOGes+N+r2X@pL.9?t(:7,#YUIt^BLPE/G#lz{]n_$zWqtlem0KJT~m;1bz' );
define( 'SECURE_AUTH_SALT', 'fv+}&72>:bWjH?Ck|15(PfeSQ6A05C2Yia~(9F|**^l_^*6YwzA2gaqAWQ8bYF>g' );
define( 'LOGGED_IN_SALT',   'SK9tvY<,c3%WKbZu9Ql%*B2 V$BA,jaxIPc?*6<3o] d<pItIy_cmams&!gX1a{n' );
define( 'NONCE_SALT',       '@3Efxc_F>|pca%c;Xmsl,^`e]F>k3DvD !+-Mb=pe:rbZRZ|A&~.~s,&^t|`0;~U' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
