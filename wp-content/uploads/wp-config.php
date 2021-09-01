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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'chce40439e' );

/** MySQL database username */
define( 'DB_USER', 'chce40439e' );

/** MySQL database password */
define( 'DB_PASSWORD', 'gjkbyrf28' );

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
define( 'AUTH_KEY',         '!9C/T?~kMY2&$tmP#z!F {R{l`g#ERv~(TuUJTHk8/K|+,fpkx%,@VLrK3-JRSnq' );
define( 'SECURE_AUTH_KEY',  'sb^E9W%)[HP2)!!=A,Hs7/e2(f{B$ QpCA8`vM?5DXe,B]Zvi~aQb{6u%6!E8rzq' );
define( 'LOGGED_IN_KEY',    'I{ FA`t7cA|C4p{& }p&nf!W!^)2{ VJP6;FX=xc11dsf+@Rhwc0oBh5LA@D>Wkg' );
define( 'NONCE_KEY',        'Y[,dp{q*:DqoV2nW@z<gR,U}KaWiEha3H31:^}xCVSQ}}f15R~owe~~I9xl@ U:x' );
define( 'AUTH_SALT',        '{U6FQu!tNN!;$F`&()Qqp4?>^Uf >Pt+|rZ4./P/7^=P:6[7p<vz<^W~P0&j_>mn' );
define( 'SECURE_AUTH_SALT', '1ow}c1P[xXT>qj{ftio%.T/^ ^%}0+w]S26i]C >O.PWT5PYCb$xuZv23$Zg#hz+' );
define( 'LOGGED_IN_SALT',   'or-YN2v:`QChxppXn&P&O_U2VBZw6w#(|Wdc6nGNgO5oG`hO`,E>/BZE>$o#omNL' );
define( 'NONCE_SALT',       'p%GQ,4W./_ZnxPfUo#,zo}d>vG+qO<TS$w4{GuJmwbLN#<,,6A2B^?k}E^Ft]RhD' );

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
