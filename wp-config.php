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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'try-paintball' );

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
define( 'AUTH_KEY',         'Vq%!Kzh4V{yB|3X@U6*0r50MVeJg_W~]N,bPGC?2Bx@~g:c~4KQuq]O]j)_b#akz' );
define( 'SECURE_AUTH_KEY',  'A1v+]UXXl=9f;lJ9ML;8{oQ5crKed[p3=ynH}8vhOCj:J.Rf1V5HpBl$4z19Q km' );
define( 'LOGGED_IN_KEY',    'AjO*,(K0`y/f+m>5q;uJEN4~:5sGR,lSk.xQ+bcae{VfWX]P*Q4Xy F$)rkiqn+P' );
define( 'NONCE_KEY',        'syvePU$k;=,2b;%G.6O[lA}oq1+W<lYIEV#tt`VXeUB0)D,R0.9NI8|&HTN7/apP' );
define( 'AUTH_SALT',        'BEc#`MPs2OlVntxZ)?l+$+r*M3bNqzv-+U-/OBS9d:{0UlA,L2{eS<~KU.R{NHD=' );
define( 'SECURE_AUTH_SALT', 'N3|7`}_IJ7hmG`Ch|%4TS&ioRZG6^)[oI}J:$3+3hI4?PMBz(#Rw^[t4ShVz{},V' );
define( 'LOGGED_IN_SALT',   'pTqT&%^gCDFwJ<YBgeU7I;VslLk^:ek3%Zzvncy{I z:S*{qY7)@$D/qvbezQOn$' );
define( 'NONCE_SALT',       'yn[EZF%O0@N?:baR`-GQNyd/0m@M:Q679B`x|[KeFhFcgTV$ -(74tnnQ%<GRBYX' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
