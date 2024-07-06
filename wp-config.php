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
define( 'DB_NAME', 'futureads_db' );

/** Database username */
define( 'DB_USER', 'admin' );

/** Database password */
define( 'DB_PASSWORD', 'EAII3_Kb3S1o(7gf' );

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
define( 'AUTH_KEY',         '9,!?#kH-aCrlAPt=kmNrB0j-$+N;kF6Qx)?=RGy_go*|J%Bui{X0tA4FGHFm5Bmx' );
define( 'SECURE_AUTH_KEY',  ',B:V#dEqABCi3DQ%~!<>X/HUHGCe_HSqz?/7D`y1N,TPiG,xs?8n^,@,y_;GNl*H' );
define( 'LOGGED_IN_KEY',    '$aP.vLSL.3jm8g>G8sZ.pv1 Q0MZX=xx~8QzO=~Qdv({x#Q~p}k2buGXr`VPQiu3' );
define( 'NONCE_KEY',        '=C<GtMu@hHzd=L5Mz4}7Cp9LY-($Yr!MZMI1=3!Wz=xJM92ux/M9@/n9ZquD.|h<' );
define( 'AUTH_SALT',        'D={&c=-9T%^]KsD~4]_J%fM8#Ko(~F/ausUtp-e9-%:d+rBv6-Y6*,w^R#DlVh!l' );
define( 'SECURE_AUTH_SALT', 'I_B$2,A skH!XXy;}%PgB2~3-E4`8ZYRlU/oZc%{a]Q}k#sd%:ea-L|aY;_L-?_L' );
define( 'LOGGED_IN_SALT',   'P:Vfhh{q5FIzip8|xFC^o|EMQzD9npBo6;uC@pvsn6q=rHDN/982m~u:fhN0|_AA' );
define( 'NONCE_SALT',       '+?.y~E9i&kr<q>Qnm6HU0kO@I.~Ex!@_pbRT,P4/(Xw@&Sv|%ZNlpqZN?41R5~dW' );

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
