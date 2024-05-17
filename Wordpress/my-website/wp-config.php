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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'my_website_db' );

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
define( 'AUTH_KEY',         'Vh[tflUZ^&ym(5!e-j#C5r`-svj9[b%X Sm>Q<MCI0z/X!%[h/Q<iWwpQ)~O|Rl(' );
define( 'SECURE_AUTH_KEY',  '!fB=Twh?SEh!!F ?FJ[JDMW0*5dgiN=[g#CQklv_4vsFFvtsD%Gkv!pQy!F)JqYR' );
define( 'LOGGED_IN_KEY',    '/2m0hX=Zh(81BD5l{Wn<}RYG;(v)TK?6uz_5|UjYU)Bv$hL<c$C*h0IEaLF$H{tQ' );
define( 'NONCE_KEY',        'uyQ&@%xZkiiz3jh_4`4)Z9,3F)/DG^[8ccfCS^$vfNl+|i #}6a8p49227Q rP=-' );
define( 'AUTH_SALT',        'RXE>Gee?}&+W)T`1C,b~IAKf1]A>~EV~sr-oM`>tiiNR##JGZA$%8Y_pu]@+rfD*' );
define( 'SECURE_AUTH_SALT', 'Se gS?!^CY);Z<.lMu[!@R9;|TtugUMvH>q9jbGn3?]@W}$meT9F(U:ugBV1Y%Q|' );
define( 'LOGGED_IN_SALT',   '($K7a8ju3>^_#fa!g2($X}^Y[%zi%U=dt {rXOW$|,t$r]|xhbPc/)/:C2>rPg(<' );
define( 'NONCE_SALT',       'IClAw~<6_,:|h=+hAp+c>Y%r<]hd?IK^B%5zqxVFyW%nm5XVX{9lS%V:MG^WwmE{' );

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
