<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'enigmait' );

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
define( 'AUTH_KEY',         'BNt[K<1<r2$u%TSX[5hv(>l4xZQcKJ#tWotx?l(w7b?fZs^b*H6HsHoPm[%[7Ku]' );
define( 'SECURE_AUTH_KEY',  '%nn5T|^ug3}9Sl+rJ}vpJE1o}GK0x.Obo{V)nX$mYGC&oo%+_?x0u&zP~;!sn}>-' );
define( 'LOGGED_IN_KEY',    '&m/Fr23R% XWEygx-w+ ;`5ce!-w7?A6Jq[`}]x$.zu}^DJLWCUmtzrEAK!`M(hn' );
define( 'NONCE_KEY',        '[Iiuc33k11[Id@X5Y1miD]%ues8~K5jd&}o}XWV3&!M5fR9gu0ZLUY17kw$c+^Wv' );
define( 'AUTH_SALT',        'GTo4si$nRacBLI+7:9ZAHwjGLum cmHqzNd8)7*05gBH1`-!H4HB0:TFfe4X@_Th' );
define( 'SECURE_AUTH_SALT', '=!of7LHnx[Y*Lc3;Zzg<;<?N]A[3eV^@MZl?6h7(^3pzu1^p8zBN*+m!G}2>R@cJ' );
define( 'LOGGED_IN_SALT',   '<+Ml-X![x +hq~h,dmr9~/$[FRn8_MV55|/)StA)Hr+aqK*Ptb=7rrD(.J?+U-~]' );
define( 'NONCE_SALT',       '1[62|I0QZ%D?[GE%UOpo7~I|JbS%[7araCwU6Y<<42Kcq?.$<n0fv@)Z:6_uNMe;' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
