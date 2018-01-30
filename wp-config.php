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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'gautam');

/** MySQL database password */
define('DB_PASSWORD', 'gautam123');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '*o_81V{Pnj+>^8ux-8|Q`GhMmMUM<8u;3c+ =Z=!7?@<u (KNkn|VuZO9CBMnGRn');
define('SECURE_AUTH_KEY',  'ffrMGgBj<eD/V2&mdELo4T,?g/ebluY_w%J(w/<Ek (fiu+d}STFqxXcj;I--Qb:');
define('LOGGED_IN_KEY',    'PQqKD!z/J&[87g&|G-<cR!Yx+n~<s-}Qa:W:+KeQz%unDXzs0wnN`5(s#J-Zlv[9');
define('NONCE_KEY',        '*V!@-)RG3tbN6UA,wafAJ0Oq+()V83ey>Dmwr5yN}2FSn;&?fM@a]s*Uh*s,;#q@');
define('AUTH_SALT',        'Y98?D4K].T!Y5-F+i824]trNS*<aRM;#^e9S]a)7[2Gq_q-yHhuTH|+Itz[U5p|X');
define('SECURE_AUTH_SALT', '7->}kkFOn`i/!i(N6RMgZ3-bimy#D| {4A!i%cF+;/<K`7i!W7j9yB{miWA(;o h');
define('LOGGED_IN_SALT',   '}Bn[##Ust0#FzE?_$5;S+9D-,Vu%5+p334|=qX4f^+0M4r+2H1d!=766!Lyo$wTA');
define('NONCE_SALT',       'V|RdGft^M}=qp>5G2=}+ZrW(4DU[$mk9Q$?/8aZOMRM+vW8YXbV4JFm.!xQ{c1[=');
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
