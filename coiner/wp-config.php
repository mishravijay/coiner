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
define('DB_NAME', 'coiner');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'u+,Cey?XjLY{c&20B# K1qT~:KZ6/d%q%b>Y4b3}V%IGISk{*-|4);NCsM/5)FTJ');
define('SECURE_AUTH_KEY',  'iA42=:l/F dJjsDZh57|z<^53pbJ?9.DPg2*G1Exh{fy$s,1Ngd9:|2;4!1C<^Fz');
define('LOGGED_IN_KEY',    'l7_jM#iZ$9-NoSLdQ+lc~]<#=1%_`F%TnKJ.6y:&@?f;gtCxE4{^^2*#%0F1Swcl');
define('NONCE_KEY',        'v@MmLMySMHyUK.,sUZ3Kh)NK+7HMZ}fZyHv9Wcg9dO3OtpyZLY|G%Mf=Gt^?YA%u');
define('AUTH_SALT',        'o8ZX~46~67.n, l0Ev)fnFMQLK3;W[0]}ca#yRo[BZ5W,vJl@7Vd%?rH7+QGrm[Z');
define('SECURE_AUTH_SALT', '(y{:~ImLU&HRKV,Z~Y-YYCM>~=X20xy+>o:V#H _c5-<bYiU8T}0[iacEPBMcyN9');
define('LOGGED_IN_SALT',   '&n4ar3R1q=&~fyZ!2=nO/Yx*|r39&m P=.!]1s~Nyi-CM|{Z@-~qe3`4mN}>[zG(');
define('NONCE_SALT',       'Jqxi5sop?4=1ir`UC#x0%p!w5iQ7(ac2Y~wE8i(kgb]{DlMh4C;/_]?bnw$YM0{:');

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