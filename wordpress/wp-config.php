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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '?otrKxeh&@t=;&ua+C1l!s]9|m?8+{~OyVY}X3lJe{Gw-s/~e>C(#0h|/@Od<Tv/' );
define( 'SECURE_AUTH_KEY',  '/PQ05R)S_PhN/f3_ZqWC#1V@t:@2<o6}GF$q{`^^L<9_/,25w+_gf4&V9Va1 8dk' );
define( 'LOGGED_IN_KEY',    'Ly@_5yy!p6Hcwr5-WZM3~3O91z|AEN/}QD;cOPD`3ur41/*;6 DS%Dz6W0WD FkU' );
define( 'NONCE_KEY',        'i`M&?B}:%r44bPehK=}4|b.RP06>p+~ns3a4wSQ,zpQld]>{1s|?{[08_;sE*;4{' );
define( 'AUTH_SALT',        'Y4!K~p;VHPU.BhVD%jd.[tatlrY[(1QrX,1,]Jk!!T_J ][J>;#XrbUG[b4w)>+l' );
define( 'SECURE_AUTH_SALT', '5 60l`hE{q&Q:EMQytsf^XPVs4rF<A2tnd.,+]kvRh_jMxQ}}5/LO10[&D*YJGSp' );
define( 'LOGGED_IN_SALT',   'OmGQkY#|LtqL5$`_l^G$Vw;aZ=7PH#db*:GlgJRqan}l>e_w4`(f%uFcAmlW[!,<' );
define( 'NONCE_SALT',       '):_2_{FjmCKc&4j$Mk|TN!X(<2J^d]K*)X ,<,!XGMmRW%11Na1A>MFKgf+x<zRn' );

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
