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
define( 'DB_NAME', 'rehan' );

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
define( 'AUTH_KEY',         'MMY]VoRY7KYS1}uaf,Yq(dH63-oojo:k#[6yA>fI~cn>}I|rw[ FaJ4,v/v}HX:_' );
define( 'SECURE_AUTH_KEY',  'xQ^l;9W^_1kVP6gXu}g2o@onp!>vR?/@+> lAgGO]fasCLc+9rEAQlGU]8)r1iI=' );
define( 'LOGGED_IN_KEY',    '=U<Ue#)Afag{JMMG&nF!UZ;AV8w%Dx@el<>[z3w&vjb5rs*w~~nxM+$sPB~xBXsQ' );
define( 'NONCE_KEY',        'OW89.J~oEQNOWEje&me<&ar87|7}s8*f3{x~~RwF9v&3G0yClEppGmfo1;/#w!xk' );
define( 'AUTH_SALT',        'Q:p<i!m5EY:ixr*EWk$$4)T*4MXF|p:B:O]kfI-sKSilI9FTmRO>+|3Hm&dCf,~m' );
define( 'SECURE_AUTH_SALT', ' 31qlcCqbGnd0zTh4&ObPco^xY>C(Os7[IS}Uh$,5%ZMeO;-(ux^:m;@4KB7<bt/' );
define( 'LOGGED_IN_SALT',   '{ZJ,IZ&x_yRwqX=#$!prI?;3$!m+/6#Ka2`ORzE0 :]GzOL~d|(9$0-KK|@5siv@' );
define( 'NONCE_SALT',       'in*_? Tb?]6Gt0zjnp^7mvPiHibp/.)n.U4v@4b-zmm1kP*1))85rgLj3=L`zh2~' );

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
