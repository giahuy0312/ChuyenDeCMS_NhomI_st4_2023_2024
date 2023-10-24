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
define( 'DB_NAME', 'wordpressst4' );

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
define( 'AUTH_KEY',         'GB-^;Ya3yOp(/jmSG1ghJ}t,K*g)tv5@-lk/UzAwP*(sK#&g5,x{)s$b^4l$}XF|' );
define( 'SECURE_AUTH_KEY',  'lGB(lBpXe`Vyd?wwxE&h9aK4=#xC`#V^XdJ^n#0LUcg?j1p-A4dO@X7U:)G:]=hc' );
define( 'LOGGED_IN_KEY',    '|s%&zn*,dAvl#bU6=^X0b&{*q_Pk)apa-VfA4)m*k=TC-*!P4!?R]rl]iXI*f@hb' );
define( 'NONCE_KEY',        'i_bSgG~ZnISLtG(b|[UaKv9M3{In-XA.Z#;A3?BRucouQ7DWdfPj-t!Fg{jB3c5y' );
define( 'AUTH_SALT',        '_j)VIHx5Dl`^CN&uESbUwJ_j|d*0c8E#1jd#L-G.F#*5k-4V6z2@x6!tXX:#m~_K' );
define( 'SECURE_AUTH_SALT', 'Exqh`mN_z38OJQYCDRaUUqkr<C}Ym&`gaJ1={$M_f9Qr*xj8/RrI$:0eCp>L58SJ' );
define( 'LOGGED_IN_SALT',   '_96bb&H(!_LpZ{(?wnVneeOQ`0CcyT#K6|c,cuu+KS::zU<zR|u7LN/2;hD@?./&' );
define( 'NONCE_SALT',       'gFO;3I >h@$9e(1:V0U1$)*^As?vZlc?8+U%AS$&,h|FDOQB9g]Spu!&Q>I_+TXV' );

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
