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
define( 'AUTH_KEY',          'aoT{&pE(9!U_4J7eIR}cPz82%2,YAQpt%d0;;,_E;ypWlmD,Xm8p,ba:6xhoG@r^' );
define( 'SECURE_AUTH_KEY',   '/u5*n(%?7/6hXHofQ348I6)ciefr1-sGvi+ldIqZ)[ne-6iwU)^V:r<{J0Ng58c=' );
define( 'LOGGED_IN_KEY',     'c9`u5[-O9!YQ7mQZ0XV=DAv5_]!yLIAm-/@1u @/~)Dm-mo!ai[k}[S89.ls>lFr' );
define( 'NONCE_KEY',         'N&_ITB;}7:P2).~=Rhc#pZ7W/@5ItF@C9{NU&3EEw>9QkC2jt^x[W`cv~HRE8^p@' );
define( 'AUTH_SALT',         '#qX!x5gP>Bu8w/n!vLX:g;{mv-r{$KeO=b/ BH?4GP]kscq&w;IX*,P(&k(d/?}W' );
define( 'SECURE_AUTH_SALT',  'H3;8jWGg59HSmhdwP`vtA#n0r:L9{>:E-Ni j&T a<-A~vmaHBtvf2V<t*_P _~!' );
define( 'LOGGED_IN_SALT',    'M1};I+}izPsO^&q>>vN;zf~lW%;]r:(#RTS)CSpAi+4I7>1U! *y6c^RQ:<J|z,q' );
define( 'NONCE_SALT',        'uu(i$5aCy=/e/sFpJ?DBcc-s*n`<Tv+10!H9>34W%JtRE,H|z,c5euM^+hxGwF+j' );
define( 'WP_CACHE_KEY_SALT', '}jR* `f[^riv$WE]/AHAI`Fi6/x^4{34PG+k;7m6:WI(7hNMO;sLgh%w>^Vr3x5R' );


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
