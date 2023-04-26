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
define( 'DB_NAME', 'database_name_here' );

/** Database username */
define( 'DB_USER', 'username_here' );

/** Database password */
define( 'DB_PASSWORD', 'password_here' );

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
define('AUTH_KEY',         '-v++7Y_*/MRao<S+yH7#2CpmlU-qLz|Lfd7!MBa?jzyrChs|mn`#JCx_4<>9zWU?');
define('SECURE_AUTH_KEY',  '-9yu1,CJ}r-lu=Dp-k}SOTugyP7MiL0Bd@-~Va6INfhxl}$}Tu$+m{.t_18F;lj|');
define('LOGGED_IN_KEY',    '0`{kw;LE,TE#?0/[E+ 0TRr]hmP]Fk{Y1xmr.|WT J689j #_W%7ou+g,ZHDS4Uo');
define('NONCE_KEY',        '-wkZ!B9%}zaRrNi0|4Ic6DR+XBNKc2Gt?O0LU7Bq=4jKk#vgY>|aPy!DN`GQ:RdC');
define('AUTH_SALT',        'tSXkYYEZtG]|(Iw0cd&RNn7SGT0OZP#u=+:zK/0}+6U-`l?MzPl0:O2B%L#RDqpv');
define('SECURE_AUTH_SALT', '/R[&CrZ#$>LkZwYm3-!F:I9%oHS#c6PvCaH3P,v<KePB<3C*^3-3Yd&$+_Q6+6tS');
define('LOGGED_IN_SALT',   '5xVI Xo>AQpWFjFt&;diCt(/0,LZHT[H,XuoL]d}.rR0TpO`_.|4G-]k$uJiTYMD');
define('NONCE_SALT',       'l1+I>z`6G4|8Q_zpzt}U{(zB~Te4f_PH6(|G6u-O$}=RbvM]8U&>-]xzeCc[!GLl');

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

define( 'WP_REDIS_HOST', 'redis');
define( 'WP_REDIS_PORT', 6379 );
define( 'WP_REDIS_CACHE', 'true' );
define( 'FS_METHOD', 'direct' );
// define( 'FTP_BASE', '/var/www/html' );
// define( 'FTP_CONTENT_DIR', '/var/www/html/wp-content' );
// define( 'FTP_PLUGIN_DIR', '/var/www/html/wp-content/plugins' );
// define( 'FTP_USER', 'eassofi' );
// define( 'FTP_PASS', '123@' );
// define( 'FTP_HOST', 'www.eassofi.42.fr' );
// define( 'FTP_SSL', 'false' );



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';