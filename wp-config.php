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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wordpress_user' );

/** Database password */
define( 'DB_PASSWORD', 'Test@246$' );

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
define( 'AUTH_KEY',         'pk|RfoHlVSvm!6w[nNNi6OaiLZ,!mfJ~]M|&~PfgSo]h@xj/2<*BrC.p&j_LIk(i' );
define( 'SECURE_AUTH_KEY',  '5AL9CL))uK&uR?$->6R>>|x]N*K3B.>M0-v[uT/P`rxE{%Xy~K:i4s^`8QSmdXH_' );
define( 'LOGGED_IN_KEY',    '1/+7Nitls=./w(s+cE<9$n-Gtl%j(-BJplQf])/JnOcDiabQ1Q)O[WPB{(5&CJH1' );
define( 'NONCE_KEY',        'HK4L>c2S C5f[dL5~!<ufOR_xOF,J<{ef.`;UxR~[IE:#_x95H)HU_+RMZ_1#ZVN' );
define( 'AUTH_SALT',        'l`WNP#xP&(7g+>%Trme2CH `M|mlt){!~<^FE2f<,pON[ntLiigYQm)]|Ug--ec5' );
define( 'SECURE_AUTH_SALT', 'Qql}Q!1$c:/8UU4T4AXkL<SD8MIdy3clGuyo>9y01$;US[6h6K&^YoVjo/CG)D[O' );
define( 'LOGGED_IN_SALT',   'oOhBuh::6]aQo2l$/Wbiy%A~Mq~4SX[p02!fFe_c2SClTbuW95.?*qfzn WRp{Rx' );
define( 'NONCE_SALT',       'caCq/1-`5W8b&WC8XTGEDl40LpQIjNwcs^1g;0s]<!k%f)>0<s&kg^Ysc6cXi0ik' );

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
