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
define( 'DB_NAME', 'lifelabyrinth' );

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
define( 'AUTH_KEY',         ':o;:j,gdDc(Zx~,H(s6!U0 |#N.i(st&Y;uIh`B@ua^-vQarxL}Wb)fZoB2+Z&,#' );
define( 'SECURE_AUTH_KEY',  '9PF1fG]xrofkO;J.Rbu<WU}#g0gFCp6!3CfoiT*3okz/3<><yYY;vi 2(Qtk5).G' );
define( 'LOGGED_IN_KEY',    'g9@xqAo5_Px/X;$#Lk#^giwp_2&W5bVee` @Pl[7V;XZty>vpcF:st1FB<Mt1oo!' );
define( 'NONCE_KEY',        'JdeM%VW!v&5kEq3p8uE@H,R!zC1CTd[e^q54#f*bVc5$m7&TG1$6Rh2%}d)u|u`F' );
define( 'AUTH_SALT',        'kf.]z%wh57x&tAl<:1`QV@)g=v0FiW9$Q_v{#)==W54q.^&yK!@kTTKUP!.J()!q' );
define( 'SECURE_AUTH_SALT', 'sJ gC$J{n@o?5`abP(uZ3{Tu9,9<eW[2 X;tO!ExG-2B{oIU0z<T#x=qrwT5K-L|' );
define( 'LOGGED_IN_SALT',   'lGdwP39}uJSDJB%=/|zW<31,=+@]_U|+DL5H@pkdu<eOSf91>1c>$(2Hh[J]9W_C' );
define( 'NONCE_SALT',       'hL8<5X;C;pePJM3)!K/Wv@hkI7]afwUEf9o,TYxS:CTPAJ*-Pg~yl-A%iIOP0[WL' );

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
