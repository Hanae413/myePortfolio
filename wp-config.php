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
define( 'DB_NAME', 'myeportfolio_db' );

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
define( 'AUTH_KEY',         '@j[NF!2_>`D^e4^s4k{9xo^N_EW80#`m,@<G|)jh:;@y9FI|uVD;wp{52V5z,Fe>' );
define( 'SECURE_AUTH_KEY',  'k!FPl|TY-z-8c3k+lxJO$Pav<j92d>pAifvDa*6=ee{yz%0{og!v4A<)V,[ j3m}' );
define( 'LOGGED_IN_KEY',    'D/^Y]nP8ai&1Npg~) J&glx>DrZ5PL,CXBHkD%r#)4]KjNy^[ro)ex:xw,3a4IoQ' );
define( 'NONCE_KEY',        'Td5BIy;s},Ta`[6dJZ{^zNM-Ia#r_-nQu2C]fC{U#Xf1};Rc%oQ:H9jB73yo$X~>' );
define( 'AUTH_SALT',        'Ld?;^z4/[n+*#nkg,]gJbDF4Bs88[=0`)MeZC^:J@#Su GfiY8rr`:.xzy6[qsT)' );
define( 'SECURE_AUTH_SALT', 'KDXPSx(IzBx}{u_5!BK>c`Xu|d? k,cU~yJ{*~A=JPHbuBb~q,7``A 57^cohFj?' );
define( 'LOGGED_IN_SALT',   'X_&Jr^(rB~]BiNqbg+v!Fbf{&$3dn;L{b|#2J5]RyQb=`CPxuh13[0y1usqg)o/N' );
define( 'NONCE_SALT',       '2ydaM&^@1N}t*;4<-6)D8X`O%~2+kv[ #7^fn]x4ndy1+mm+hi^+{*~05%036xnn' );

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
