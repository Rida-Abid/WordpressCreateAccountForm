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
define( 'DB_NAME', 'dbProject' );

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
define( 'AUTH_KEY',         '|vzlEbGE e}(^~Jzo2&#265v]IO^;wrSuLv8PH5,um|uJP_ `$j3&VH]c>PCH,J(' );
define( 'SECURE_AUTH_KEY',  'r.^aLX[KQ7|t-&9i~1.`@Eu41V7tIaj![oV-D=N(% UiV?KoC}w{:M0IG%J#qLW?' );
define( 'LOGGED_IN_KEY',    'mi+pFJE+hWG`uo-@~SHQT7%q3wAgeW1{pwACc(]W58oU~vwYA<7JzoG`NJr/C[*t' );
define( 'NONCE_KEY',        'ZP`jyq3+71EMu/p61:?~DL8E1Fu}84a>Qqc0+Z3RZ;;]I0ujURv3FD+I`i, TO>q' );
define( 'AUTH_SALT',        'rJ5mm $pD$g*U4Gv@HZvG637b0S3zmXS/w&V>*_@jxMJ?HgIuNRK,dtzb!B{yz.1' );
define( 'SECURE_AUTH_SALT', 'w[LEKnS5jgF3rSvZAByw-*Q08/aHOIBy}W2Uo<|rHe*t-[>j9;sZP.g;`d8Mw@Py' );
define( 'LOGGED_IN_SALT',   '-_B[2Lc-&Y9Yf inZhnn`Z:8fO@G&KZB0LymyS8JHipp~Sf8*f!88KIy_#P$FfvU' );
define( 'NONCE_SALT',       'M;a$q4*JQy}[e}9r]Sc@g$a*x;KWSd=Bg9cja58uMyGdlBa(rX]_O{lC6^7Uy]lm' );

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
