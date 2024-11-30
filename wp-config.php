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
define( 'DB_NAME', 'sihproject' );

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
define( 'AUTH_KEY',         '7=pSJu+<]>p6dRBY@i<fgM3|vIdR/cPlUEi-pE0N&sA|jIi&!bv<_oyC;1 *8IW.' );
define( 'SECURE_AUTH_KEY',  '-O^^e4h;&ooP2F[jwa(5B`@~eU[X(K_B|SuwpHUB^4>fr::km*sl19*wz8SggZda' );
define( 'LOGGED_IN_KEY',    'kN/wwEJR7h:%IqjT4jj.M-G67Dp82-ftC]~|9qBl]CxQG.?Pz!yfDk<C`H(}XKLq' );
define( 'NONCE_KEY',        '-d_qdDq&mko52ThP;0Rh7Q3$531fKmDgyO||s%xmEI)O(,P`j>FL}&ryf+vR?M|b' );
define( 'AUTH_SALT',        'yK9jydlP9olr;9)Wy}>(ki]d_C^SklBS:>*!{=nS=wu,s(8@2nUFj2]o~!h/t,4c' );
define( 'SECURE_AUTH_SALT', '$2/oIE` 8AdTfPQml$F}rIA]ZB(.^zrHz}r=B~6bUd/_rNdW!}j26)vg~9P0w1cp' );
define( 'LOGGED_IN_SALT',   'uu{tfLYjbGC##~u@%V$(bK%b-Jr<V>k-WY<%2_& (z:5?]}Roe7grXQCe ;Gj%t=' );
define( 'NONCE_SALT',       'rOo/U?W8U1wplfR2oR@8BWa) `3sILy64=idIri4T6%e~@SB%F~O@a0a5bdfa5EB' );

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
