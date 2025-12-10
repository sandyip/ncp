<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ncp' );

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
define( 'AUTH_KEY',         'kKZZ<F.?iYFN4[+AvqG_-;5h%LpIgt@B~M! XOnD##ZOXDW0*-&jm^TpP$pc ^xS' );
define( 'SECURE_AUTH_KEY',  '$=sgJ0uebNI{H@w`2IJw ^s4;Qz%*%dQRVy<NeeYYRHL;8/>`F?@|m+s3FDo,$oL' );
define( 'LOGGED_IN_KEY',    'K~W`;VGud]V-bxza$B!?ox;gX`;vL^WxzwhK!T^{WL=>c^Yo)7}X6V2WXzT=i<jp' );
define( 'NONCE_KEY',        'W1t)H(H%>3R.SA{Bn@y[eT7B|;kbE{Rb~wZr@qIO&Fu.I8<{*CUYP%4Ch#C08:I!' );
define( 'AUTH_SALT',        'C&=.I|Mw~>z3HuH&gOV[og:}/$LCBYoh&o~ ?yK~K|n_wQT?ujLi^F73/efS@jvZ' );
define( 'SECURE_AUTH_SALT', 'A!MR5S/Qcp7QF=caU>Gu#x^uq}{y93;5B3gGi%]=O,u6,x;$I!SIpnfFpCP5<qg/' );
define( 'LOGGED_IN_SALT',   'a;UHb<%(iw2]3`30oPsck!%7=gQUb?[vyl39CRU<xt{hYw?-hOa_MxN,4kb|(d1V' );
define( 'NONCE_SALT',       '^WbcZF=e2**LcX/4A-8r4FO&C=U7cUY:X_R=[pKBSc13vcm=ZUX<x5:-f[W!7+`[' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
