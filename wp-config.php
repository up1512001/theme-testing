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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '%{[)@`gJ*pud7KWnebmm-PGY-iD8t5?=`H:xH?i6DUj<DKumjd3z&kd#3nncXAt2' );
define( 'SECURE_AUTH_KEY',   'e`8f>;#eCTehk&pF utgnE&qI3ZN#8%*7zbLG]YKa*DxR/UgFhzVp{>T;r>s1.ua' );
define( 'LOGGED_IN_KEY',     '0zVA6h5E<OT-xEi$8 YB?0w:i7`xmNB_4=>;4eI0VV!)U,8>IwN.SYaO?{AKlTy_' );
define( 'NONCE_KEY',         'VE(07l~^lu$qqlho<;5na&ee%No&i20I(C.;f&GeL=h1vmKuR$w$3]-vl@gi;~x~' );
define( 'AUTH_SALT',         'Vlp{ww.HfQ*562#,$y)1lv}ar35>Qp;G4jT:zdbnI@y^D(>_-Y;0bxnilIBt0dg8' );
define( 'SECURE_AUTH_SALT',  'e-HyY&0ADAQYbfk[RPoJXQMZ{pHqdcdcY9AIUz6$tL:9`|]3JKfiAj0b1NrFdS;?' );
define( 'LOGGED_IN_SALT',    'qZe!F sB0 o{,W#1f]u%r88_UL$!mJroP&%1c4n{D eE}j:2@rN7Lz6#p<Ybgnm:' );
define( 'NONCE_SALT',        'qfWxp$L,4G^z]/;?}n@@a*rK0BrIUKu+S/6tm3RYoNjHl{Ejk@bUT8GUi~qNJ<eF' );
define( 'WP_CACHE_KEY_SALT', 'BJ~/_YcmMBp~o,QIUKc&&15k6^*8P79?J;cy6kU>p(:$n&C}H4>>~Z@]S-k #:ev' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
