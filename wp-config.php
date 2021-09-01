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
define( 'DB_NAME', 'more' );

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
define( 'AUTH_KEY',         '/D:q(+{6CUh~iBg):VLgeCKJ>DL<CCGlV3Yg9y a@.Z%n3!2Bo]4yGz^a9DFSIaj' );
define( 'SECURE_AUTH_KEY',  'M3=RypYwmkrU4%Ur#sd{3kJ;rmL=ce7,~#TYWbBwXZqJb1ceNq6#y^ GPqYAs.R?' );
define( 'LOGGED_IN_KEY',    'UDACT{ofvS4BNGxV<-ScG?|iORi 0sMT&5[I2}&jP6[Q4(Lz&*@VdejSnFd_Vh>;' );
define( 'NONCE_KEY',        '`rYb.:P?G$+:?.roKI>$3Jw9aL=@>afht+}Rc)Vz^/Omy_817kYOt3]|4O.R}dm5' );
define( 'AUTH_SALT',        'o7y3kz#l:on2Cw+aMUJI2<F><!L3.X-00E~J{Uur]OhIHgKYw8OyDqGbr_c`b1GJ' );
define( 'SECURE_AUTH_SALT', 'LL)k1z-nv0hY-c_/MzGee=(48R#Pj+y3z*ENSpIfG9JwZgJ[hf[-^HERTGY&?iS,' );
define( 'LOGGED_IN_SALT',   '-Nk;[$`{SVTn^k6~.eLRRxb1 ?itgL}>R6SJb6n=.t}4nCo=9!B#o%1(j0BX;6rG' );
define( 'NONCE_SALT',       '-2+4@#-(~9deB<qT,6zcxgF?F1q}[i9XQq/9sYJ597ozI44gGy)5i g&k8ajw=*U' );

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
