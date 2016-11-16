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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'learningWordPress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '+VY|}3sV&gMi|q4=H_RB?dktA`T9ZS`-;M5z-0ZnKSuF5#Xr/ 2)xCuWe$:6cyoe');
define('SECURE_AUTH_KEY',  ';PX?=/QWveM)2AXaw/&,k:uQ&<5j}fg?CK%7sf3}A+nA]!E8SU/hJocA*.N=FHxZ');
define('LOGGED_IN_KEY',    'F,Ar%%)Z]n**pE/6_{jJW7M@8m?^ipk-eqN7$6R>_B63?N_$<Xg,~y2;3]Xc .Kx');
define('NONCE_KEY',        'ckKyf#h$FN((B:f<W_QbA*yrJmyd?:wh9p>!Y]R@Yw{Jhj&xOBgYhT*lW_h2 %J!');
define('AUTH_SALT',        'O)]U1{(HnR]kr`J=&i_~q/0=|U6{)d$z} P_JsW9z`ZyrMV:!+R*NsVg2aqZ^?ZW');
define('SECURE_AUTH_SALT', '5Iqdx3O<;hE3ix4;] AovpNB>Dq&EO6tMJ5=JYo,XxaB;Qi$e[iVU?$v^*&k/c*X');
define('LOGGED_IN_SALT',   'QVYfC()]o6N)Mv3ydg8k] gY+(/#kBFh CY9~W44kA_Vx>a6l#pB;#=s&.=T.ob9');
define('NONCE_SALT',       'FZ2}@=?3Rt/[DISG)V|9Mvl<g|-=tzF<8R3cP Z7%[:!<7_&/3hS*b}uJqFrPB$:');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_testsite';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
