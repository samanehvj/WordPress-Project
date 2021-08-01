<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress_demo' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '=#y1lev)thCN5k}C`hbOp+1,>K!]=asE$PC/#blF9xj{C6&GEA7/d$k;-M ?=cA-' );
define( 'SECURE_AUTH_KEY',  'XD>92O#d[O{#0V$bs>>AN%f1>nG6+Sx*07rZR-~IwwVLQYu5:HG2_{v[@e9qPbf|' );
define( 'LOGGED_IN_KEY',    '-DZ[Wl,mnz6;suIMw-VV/U_zy:#4aDF]*Fdy4[Srm_ZNgYV&|aO4:[!X  $HHiFs' );
define( 'NONCE_KEY',        'f!%,A|Ll HU>2iY(;hSFm6q(zN cSM.q1^6&ze/}F}t2J${iJ+FELx-3A>=NVpDG' );
define( 'AUTH_SALT',        '@`*QAYc5I1D[TCM=7S8aaHfP->5[H_SWxsHkHk|?=+Q9A[fxbeIrmztdioqpl(x0' );
define( 'SECURE_AUTH_SALT', 'I^B`}07s(wgHNHD:&ytP*A?4y#rGkz#,sv-![io:x+ RcL*QP-WW~=H Inp4$ZT)' );
define( 'LOGGED_IN_SALT',   'FJ2Vs!9GMf&&Ou{*Y9#cRw}=bNh,:5%S6eU=^p7#&6K&MDpL;wtR| ^|h67$TuMm' );
define( 'NONCE_SALT',       ')N%2oZK&bm}h%|)eT[8;m|VzmMKn%};bOX~bPdM)U]D(tyGZ<pr`pBcob27N7*?5' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'sv_';

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
