<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wpd4' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '&[Q9z+#a-&K,_rp.?/:r0H.+Y~!![[vY#<(X]=d*y2~ Bm{ZM!HcwLCoaF,.YXx<' );
define( 'SECURE_AUTH_KEY',  '4|<oCP!p-3retV&*G(s!_u)g1IqB/{)N<:lORIoWl,Tz|9l/5cs;R08sX~jb7CQK' );
define( 'LOGGED_IN_KEY',    'mK9V}V.I39uV[Qc:*B{0[Ky}jD xUnT^1CA_awF32.W1>*muhn[p{s,NxiD$:g^3' );
define( 'NONCE_KEY',        'hRo/8-.qnTC~7)ln-8^A4}b9Cq;!<P6&x)O|o]G6j+8Rf#7KO %bM*vr0cC?02m2' );
define( 'AUTH_SALT',        '==A7Od_,-MGg?=h:yhFN7a9Wc8gKK?sYD%2j65D&egP3rgtu8n;@2QU<{1Sk?qF4' );
define( 'SECURE_AUTH_SALT', ']|?EsP]zU!(WK,G0yi_uUI>mqf?{Af(~-BtV>vx-^sIXYi`::~VK&ZL6iqHx)RC<' );
define( 'LOGGED_IN_SALT',   'FBe.yjlX|B00ArdwW1#ca44M8_aq~0o};5BDR4]OQOOq g&D0($Ut}E)/9!2%)78' );
define( 'NONCE_SALT',       ':bRbl4*!njIEvv*(D^*J<jAa6>&h)f:J!Q^JThFS4f3;oHgvRJ)<9N/~bT&zTjR~' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
