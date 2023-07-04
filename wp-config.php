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
define( 'DB_NAME', 'portafolio' );

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
define( 'AUTH_KEY',         'HoJ>xi:ou1$j#Cq{BI ZzhK.j$is+bmlj1=9,o5VR:W.h4VEK/lei:}l)A(Au-;b' );
define( 'SECURE_AUTH_KEY',  'k:N*`VObN$W+!F++YI<+L58d%i`y]_^ku{3`nDxyc3<,uq;o>cRpSzZOzi88kg]g' );
define( 'LOGGED_IN_KEY',    'Mv)8IJKy^M?SBtT`Vm3-|(?qc#T_Gd%V>8`g/V.{l#Id?i|6]%{e>,Q7ZJX1pjl~' );
define( 'NONCE_KEY',        '9.)lzGZ!U0DQ[ZYuO`m}Y5u6W:Ct&#prqoVcwT]T2<2}/z,C)KSVr`J`md*Qjs1k' );
define( 'AUTH_SALT',        'b[;3yYgxZ!vR(T.)-xSq!wgM_ZL[LF00>]U}MVpTj3h~uMsSK#A[<m*UxkF$KyLX' );
define( 'SECURE_AUTH_SALT', 'H_B}Agi2j|sm;1yG0L|<OXwZkUn_+l_mT`_NA`o<JCp5m;CcG4}DO(_Znx]jF6+[' );
define( 'LOGGED_IN_SALT',   'kAt|hr#l!*wW S`o:,eLf27vc}:]JEsB5TdIG`k>=ec/?[A>Z1zlm*uo G,?r( 6' );
define( 'NONCE_SALT',       ':f]q`A,vjI,a8hD1?]m<4C19KF:<h5n0Yxd(idiU0Rmj{>bE@qLZP!$[a*dPZ`m|' );

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
