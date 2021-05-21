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
define( 'DB_NAME', 'yourcomrade_db' );

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
define( 'AUTH_KEY',         '`A=X2a4bMm5>GE!`Uz}ENgiqU6FiYOu*+A4jM#L8zOKz~46o<Y|vU;:D=;dCLAar' );
define( 'SECURE_AUTH_KEY',  'n1%FRvk^VFEXUP*LSib/QcRoRS`,kU^cIMDjYg+LG]+9QyNJzkG);$]x4xewdF2k' );
define( 'LOGGED_IN_KEY',    'aWKi;` srcOY}?i~te7jnE$tn?yb~=5zq1()|N=,(_tg!$L@XIWAHm-x<8Q]E$gT' );
define( 'NONCE_KEY',        '8e:pMJ=(K9v`6vo*~JPPjGz|!(5hdiBMjlLI3}Fi$nS+v5M#UBQ[5nJdbf!cc_p#' );
define( 'AUTH_SALT',        'Bpc&E__-b/DS|u/@>nJJa!K}T.A5M_/4Smgk_84tN$>Xw:v?&*gb; WG)<H$N(oc' );
define( 'SECURE_AUTH_SALT', '@@-1?EV=6,vq;{vgrs*hgB&({8!z0*-)ms=Py2QOiQa,d8Cn{-PmiQ#n~}wphz6B' );
define( 'LOGGED_IN_SALT',   '&/43yD%jUi)L>&?clvt_$oHirHhWBRaKLh/V|P]ICfipcSc5$Gk<*&k;)S @f(%O' );
define( 'NONCE_SALT',       'c5~2R&1qs3/E<05WJ*O:FNF;`4-<r-9Z=i5zrv?>+l@6G^Dw&F@me_7%PBt Bz8)' );

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
