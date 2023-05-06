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
define( 'AUTH_KEY',         'LsjBPQGANR[$NX)h|0UqcdLrt&Xv{f5CXy7NAG0mel^9HK=Qs=nlx&B`Wj(Qm;oN' );
define( 'SECURE_AUTH_KEY',  'cvg5xPd2LWIi#fl(h!li.Zoo@Z%Me<^0@c#kL%][pxJfZN,U7SbDI?dcZ$?*`T!v' );
define( 'LOGGED_IN_KEY',    'S$D@ZT,qfTbL{9e:h!F@^FbD`{VJt{E(=-z%rr_.t>[O(}5v/L#Wvb#CWlzfL.}&' );
define( 'NONCE_KEY',        'UtZs;3v[srm|sCd56/{rY!gqd>Y{dkK# J w^;P%lHg{%uiSUysmC{0b#Sand2K>' );
define( 'AUTH_SALT',        '44B{Xx<{aD:.#6;dWCS{??YocmOr_0OPS+3G=[E2lv$W[R3)hBGXjbHg{!0yB5?d' );
define( 'SECURE_AUTH_SALT', 'T[Xd{?c$M4cJ|K#WGvAbd:Yj]9oC.vUvPT7CQ,N6z<o=@Bv4x=Jd?tWhlP}ac2Rj' );
define( 'LOGGED_IN_SALT',   '4JHKv`oS3nEmS@0D?+kTOVMe`<{O6-kLYfThHyh$GU$/62s&9p2:pS(w<qCz1ClR' );
define( 'NONCE_SALT',       '*:)-?D&l{=KGSl~epz:EB?^P:)SHES((a<n?FhaR^,]YOYzge@LIzbixXOjAb<*)' );

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
