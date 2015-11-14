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
define('DB_NAME', 'ebowus');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'revolver@1966');

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
define('AUTH_KEY',         'xVAgNAV12{nN`CFXb}<@/s?H&|W[L4EZF;8AMfqAgHJF,(*QX(|bFN[&bx{$_k|f');
define('SECURE_AUTH_KEY',  '[vC{5wU^mY|PuE_6ATdsK[;H+(zZee+a 8#_W-STZAX#Yh;(R#S_>GwIiIYuo3/9');
define('LOGGED_IN_KEY',    'sDk209u*[RGa&`%B%/?sc&xcELxaZelIVh3 grD t&>&&enx:XweNWFUkK~^+k30');
define('NONCE_KEY',        'qexsHt4o6D1T3I=!Oy*,I-OJ]M8m}vt3*P?K&8HBEmSf%FyU^|p2?R+~ ;5Ep}tn');
define('AUTH_SALT',        'OMp=jo4n*c2$a`FW9[x4I_u`(4::9 R -pS3u>X]iYgK45bP&hBS`_m<PM80W1lW');
define('SECURE_AUTH_SALT', 'cEY]e-oS<~oG@stMvqA2k5j?.g(FwWex/(D yIF@<<:^-(d`g:+4%i?Uv@R#N^&o');
define('LOGGED_IN_SALT',   'en`DbNbwY.9LmS%&cb:f1_K~-9F0Vs:-jtV[EOP~[+;cA|R(%=w9kw9]R$l`D=:x');
define('NONCE_SALT',       '@EZI/xV|[=|q?.<[VxGjFU60;BRxq[X=<D<OD^`(%ns-+l~AiT^dgqUdA]4W.1{!');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
