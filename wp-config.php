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
define( 'DB_NAME', 'primero' );

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
define( 'AUTH_KEY',         'AE6XH(&8N`p{JS?0iUoUv3#dY@y2/51bP1nZj2q@u^ar-r]+6>X/[i;aojYvHP<I' );
define( 'SECURE_AUTH_KEY',  '}m^8POZT>0bZD~ewF&<p{I](!~}Ft<xi&xC%ifvT?#r;bY.QCI*VC5(3M(=;7$]u' );
define( 'LOGGED_IN_KEY',    '*[_?9S{|fq%)eFs.OG %Mo@A/Y6S.q/6i&F7H6!5qFxSsM.?u96HkUW_7b_u?]ck' );
define( 'NONCE_KEY',        'ma+P+f*bzm0]sQ FAeJ5d8(]PM6On kOXy6niDg}q4i*J$ToItU8`L`@#{c;xQqi' );
define( 'AUTH_SALT',        't1z(H(qY# *qR./*CzY KjW9J)j3_m9g*Lz>EJBi%B9kg@RN7iuMz)=V59_{,/@u' );
define( 'SECURE_AUTH_SALT', 'G@J]3[`Y^Gj7G=0jMJFofO%}1qV6(nPP{[]~Q6~@t3eQfsT+fcwT&/FS2(b:>e&I' );
define( 'LOGGED_IN_SALT',   'n3u.d/;%tjS>QhyCH?]Q#Z}M,SO`,BK+ZeX<|V9AOIC;nhvcSJ]j.dd{w;!`H%TI' );
define( 'NONCE_SALT',       '<s#KjDr5}eqC0Dc{P7R@cfJu<4k.fa-}CTv3!2,zMGRXv1)C>0`D$N;AzI2Gm<.Z' );

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
