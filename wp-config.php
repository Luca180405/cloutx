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
define( 'AUTH_KEY',         'gSW>BC2,nbqP&TtZG%Oht/KL4$u,roGCG:y$7IZ7mvH8p,27/DlzlOij}/a#0,G2' );
define( 'SECURE_AUTH_KEY',  '4Ho!+IWU0 (O**,x`q5)(&;fiX9Sl8EWf@g@T#W4g~Ep%/TiQ%p/yh!nMSj:loft' );
define( 'LOGGED_IN_KEY',    'O~ZRZJ%Mrc9H=jB!ZIDQJs/eN5Q2M^`WWbESKS*pE 8Pk<ikU?Uo<v4oO=/E6)<v' );
define( 'NONCE_KEY',        '];.2D`K6,tr!X8wqv.=2m,$lecuv7}C,GJdb>hZCLS3fjGkE0;w|:]r;rlmkc9@,' );
define( 'AUTH_SALT',        '=qzC5+a~*!X37OC#m%`^zsk<%MzdlabDe5A_#he&({7tLD1H`w^bz9gP/7O Ssb ' );
define( 'SECURE_AUTH_SALT', 'u,nIK.u|}[EqY 6x3[jVjTdkWQk1L%%+U|vlm@d H^;e&t5|T5(1QOW_.}|EWsdi' );
define( 'LOGGED_IN_SALT',   '^`Euyj@+2Sxs7@y1~FEpS*K^7FmSX}=nQt<8i#q*0K<?6XCL0D lrmvalr_?7RB.' );
define( 'NONCE_SALT',       '{42@+:q_B!DxM8H<WXW*Y^XMecW~q6v6%UQU,z@]P!7JZ%OWf,n:s~*y%Hl<.g+=' );

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
