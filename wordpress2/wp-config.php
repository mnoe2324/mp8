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
define( 'DB_NAME', 'wordpress2' );

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
define( 'AUTH_KEY',         'Hk6tEWY;S{}]ytax$TT0R8,,St9&jsc{!Bs2IgXeU~2b7#R%.WZBee-q.2So).Es' );
define( 'SECURE_AUTH_KEY',  '^[)#%E:-K ohg/c66[=h1I_:&obgzAz!hhUcqB5(@3;>W.n/7%V{x_T),=~R1||e' );
define( 'LOGGED_IN_KEY',    'Lc<MFz!g|~a*/] =3a:eV=XlWN:`ob.0#Fib+h@kG0yQAmR!4$tq:4q4l}{)cqzF' );
define( 'NONCE_KEY',        'i1jNB*_o%%kft%~8p6hkX(r8,z$JYFW8igH[W] l#a>!N`pk^xn|Sw}u6GWf8tt_' );
define( 'AUTH_SALT',        'o6HA@wcq.@mP]b0#l=#J?4/mg`o;g>X5s~Z24~6WJJk%=3KLT=TftB<.$8=1KHPc' );
define( 'SECURE_AUTH_SALT', '?Iu>&@dRv<p,C]>u>KtKup[WE$[<2Tl0H/V^A*(?e2ThmZqdO/W(}7mMgwa|cy@2' );
define( 'LOGGED_IN_SALT',   'OUG Q1_gH[T6P:&TfM7;~#cKGI@|Y$3y;L{vJf.[c|<0wj>e+=8,%wT)~{CJ!4%M' );
define( 'NONCE_SALT',       '>L}Hd@G{Z^ZeC?PB:5+9m5Yr(T9~SKZI2~+^ez$v;rhB5 LUm:i$:J.<D:}.A5H_' );

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
