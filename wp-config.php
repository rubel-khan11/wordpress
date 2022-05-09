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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'web70' );

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
define( 'AUTH_KEY',         'yM!mX>q6+qAL@or-)0++v2 REMIGL=oe0eAoBUp@yYBdF0AiQ=!r&?,xbuk%PO;6' );
define( 'SECURE_AUTH_KEY',  '-[yHAXQ0 #n#]O|*SHS$7b-qu<}w0:=}BNZZHkEi7La8V<z*}G^`,dL#N]>Xr*J=' );
define( 'LOGGED_IN_KEY',    'aK9p~W~q4j|=d(N@w vo!1Tg/!,#7V>1D}}Yo>@`8)b,#]9)s_^~8Hzk::eZ9dxD' );
define( 'NONCE_KEY',        '`KI}) [gA6ZExSyfg%V:-^X%,D(Dsz=&1Q;v:WKMh3VVrTB=0T2tq8U#/oi@#SB$' );
define( 'AUTH_SALT',        'yu;RJRr&$ e< zocWAB#<[@O9mPk2JJ{GD4Z^Rzy!G&:|r]57pxpa-W5]KWNI^n1' );
define( 'SECURE_AUTH_SALT', '!7Dv1YM9C@`)k;[X$eh{><Sx]Sb hho>|YrwF[FY)I,Dd8]G,;pp>hs4_[}-q6z?' );
define( 'LOGGED_IN_SALT',   'w0Df6K`#S&TV?.U=?&V|LBU#$@[4BRgS9M$Oq7wXq|=[#Wn[Hu~6hRaNuS:sV]OX' );
define( 'NONCE_SALT',       'DS,Kg47OO,U?n>z|0,n WFu+]|MTyd m`F<&B0)b:sCFvG]D*3Hw/po;)~SwDU+o' );

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
