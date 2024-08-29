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
define( 'DB_NAME', 'tours' );

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
define( 'AUTH_KEY',         'f@vryUHED=32c[gy,$lBhgpDRje+k#F[{@D1v9l7iDMa-Dy?T8NZr0FCwzEN+[@0' );
define( 'SECURE_AUTH_KEY',  '|Bm&(9]#}VBn#,U- $ GUjWDCvU1 ^MJaYqMw5_2@Y&1]f^>3!+N)(}Jt(EV?%g;' );
define( 'LOGGED_IN_KEY',    'bV(Ba~@Lv#5Cj@)HbV _o3:rH.Tb@ctOI#Sg(^-yBc}J]o.DN%e{azi!S%KBr:fV' );
define( 'NONCE_KEY',        ' +P(A:A_=(3iL!o@YT=$Yq;]b:yHkja8>B7S7iO`R#uAmG&YiBF5m{RU{`P??Xm}' );
define( 'AUTH_SALT',        'x;D;3_hGn,JQB5g=#atfJv{d,rYI(7-$-DWDt@]bsSaH-;=<Mqm;Gwo`R,.%@K:q' );
define( 'SECURE_AUTH_SALT', ')R]&=Vp )ZE$tB`2UseBMxFO9BMT68H]akW#cy UEtbkK,[Kgm#^hCkj[@n=US5?' );
define( 'LOGGED_IN_SALT',   'cs[.!c,Sq-`}Q7t;SmG`Rs5g-4bIy`BL{zbG((DB3/oi}]#MRAxzv?{/:6;|,d7 ' );
define( 'NONCE_SALT',       '<%l}43>XNBe$Mqa]> j:?Gv<xPSUU0L?vu_9fa|aI;,Lu>;tNf2~HJgW4;|v3]SM' );

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
