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
define( 'DB_NAME', 'design' );

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
define( 'AUTH_KEY',         ',4nd+7{3tKm9+?h!?e/szh/k=1ZU#+Pcp4!,b?6aO|6slqVVbDUU4<*K~:5=As%i' );
define( 'SECURE_AUTH_KEY',  '><9/{ZuDbE`}%l!4d{oU@daU7Hf<.i/C,KR0TB!2-_5@H%_eSSy.AZQvSg#bOV-L' );
define( 'LOGGED_IN_KEY',    'k8b+k&}@q]#.n ^pRsyHy(jN/}1ly&*WC<m3q$|onDdGM[*R*S?qa3RmZ>&4G7D2' );
define( 'NONCE_KEY',        '6&d[GKUb>ctw!Ng`3P]5,g2ejwo{H{4Zpx|mdq2,VgJdEep4~Z2oaGhiyVbN20%E' );
define( 'AUTH_SALT',        '9^YXEu^S%D%GAt(xWB#FC%FAb$S>Bl~Nxs1N{h6NL+I*<] $yDiqU_^m e4X.%su' );
define( 'SECURE_AUTH_SALT', '!1:fn7aZn54)/{9:bm+p2aAb@*`0n5jRW99@all3O1#bjQ%+>e|tMr!nt6oMCHpR' );
define( 'LOGGED_IN_SALT',   '(E8x$5bCBYu:BKS:sYM@k)<6{I0<_I%LNx-;O#NHj-f(0I8)tmuox9Mev2_QMQJ@' );
define( 'NONCE_SALT',       'e$ZCV{=~{Oyd+}r-~}rx?)3}bDrul@O`Za$vmVcdMuL$u}_zCt7j%fC$`wkf]DiD' );

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
