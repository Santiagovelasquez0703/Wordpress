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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '<hA|[csh!_@fU/#R{Py c5sME0Sl k2aa:KFcyC> .7iO1A,KDuX1NW}vQcRf>-6' );
define( 'SECURE_AUTH_KEY',  '{C[bHEiym#KEbJpV1u}UtA0KxqJ$VpI!cX$^2&Ihsq$]_$o[-BQ8p hs{vX<%-O}' );
define( 'LOGGED_IN_KEY',    'TkE%S~|[7foR#>k8l@;ySQXIHk&g[R`>iWpS<@9QIe)?Hp`b~%~k7,5`^AO)<ygQ' );
define( 'NONCE_KEY',        '_ixvhGOoJeTM$5giea;8Di:#:2*$<EotRCW%TE1(F6$$<{ndR`0|h&7~(c)x$DZL' );
define( 'AUTH_SALT',        's@(#/_fUKo~B/X*&k+iY]T<n1c_kq<bV=RfYL$G;7yJ!rc:T}rT NlYVN:KAW:zH' );
define( 'SECURE_AUTH_SALT', 'HWMQ?htZr/QNLUB-^4ci08-Q[lP[.t}[vl?~Q,7%~acc)[fX)J^/B@EJO[psG|$o' );
define( 'LOGGED_IN_SALT',   '?v[tQxm`]5UywWO0cXUZt_?>uV/?[Jrq)2Rt@ew<yi);_:Ci=LPpS|Ky<G([f6ON' );
define( 'NONCE_SALT',       '+N)e# VXE(nbNKd!~SzFK=EDM?dt86T7Qb%r4*x!h#3lSe}rQaWJ/jk^ld-FZw.z' );

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
