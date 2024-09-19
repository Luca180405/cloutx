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
define( 'DB_NAME', 'cloutx_db' );

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
define( 'AUTH_KEY',         '5UOY[M6Sz+.P>@gYhMhb=$#F`+FL#Ll,bx7@m-i9GkQ3-ZbZLnl;V]!tvXIt|4*_' );
define( 'SECURE_AUTH_KEY',  'fziT2MS#bB1Gr^XQKxlZY9(?}Om@,0z) +nb,ft`e1`IgI)C;eno5Bs,;zL5:Z**' );
define( 'LOGGED_IN_KEY',    'HGOs[!.f}DSssNG+]jf$WR9gtm;IkbeEzz$@*,~{VPTKdC}v*+F[*mt5[Lr%[xdk' );
define( 'NONCE_KEY',        'C8|TAJwl=ZUY^<eB1O6-,` 8xGb#QPn9*jW->kjI|G!VnsK-/#cLVnI6L$kxM_)^' );
define( 'AUTH_SALT',        '2@W?%!N[$m-6`/qh`}v:Oo`&sk{xyZsas6u4ELhb{Fh+vE_;gDBEl1x#<0%Guc|6' );
define( 'SECURE_AUTH_SALT', '.arz]fI?y`q]7ZDDF{EQ-wvGEZB8QMVV^5/9 NW(DC4!YBXMLm#G;XJrco3(jTvM' );
define( 'LOGGED_IN_SALT',   'rSCL^<WaS12Xmwv)bK@>iEM=Da#H!b}5G_v=-GW$>%/AlF{n|V8[[;hW}aV4Q%Ww' );
define( 'NONCE_SALT',       '{ZR#Ax6*F!anOw,AlD@j9;{F|3oHfOqJBEUW^wlPxi>6e zjC4]^w/J|hiy-rJ]V' );

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
