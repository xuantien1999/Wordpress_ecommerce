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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'eQMB! G>QLMV15),R!G2!~}Jy4*.2kGbXR/~Z7-#3?Mh*ic@FyA.{yuJ$DW;i(^]' );
define( 'SECURE_AUTH_KEY',  'SP]Sf*(vlu#R:Z.3=5VW~c|KlH(;L%j;*11ig+!ANnBUxM_*cHz,QxUavi755I/P' );
define( 'LOGGED_IN_KEY',    '1UT;3y>b&44&znQqE2Y~-Nmf`.^odZZVTc9Ex#hS|O<A#xZ98OiR>,{wIA*EOd=E' );
define( 'NONCE_KEY',        '?z~vR2!;}h&S>g<3U+x&*VqC;nh5TfWEeIPt92>Yf=-(.4zk8?jSl}H[bCzc5 vb' );
define( 'AUTH_SALT',        'k[M_7`k0Zg>M!;vT-,Aj+M>Vuy{.=jBBy0f#UL.6h4CiAERz0r6A)2=wb@}_52lV' );
define( 'SECURE_AUTH_SALT', ':3`t|FyI*k@J;%;sf [`1#J54.V5gKo%e_|?u]P3Xg/,I(8!9/zM[~Cjg]RAFb]#' );
define( 'LOGGED_IN_SALT',   'F1Kn0ipL.)u4Bo$`zb&By&]ja%cX2zTnf!w#OvvBm_-r%Nt,4&hKu8^i-guO~RU<' );
define( 'NONCE_SALT',       'k4h]PEz0%opZhSF8|JZT@xfnJkbI}W/K78UW8Fbg4]@&69Z2ZY|zz25-I`zu0r:v' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
