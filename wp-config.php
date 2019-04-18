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
define('DB_NAME', 'db_pelicannew');    

/** MySQL database username */
define('DB_USER', 'pelicannew');

/** MySQL database password */
define('DB_PASSWORD', 'pelicannew');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('FS_METHOD','direct');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '8:]<=.9R%$67IxLKtop~js?:uB%^R?NpNXpu6a&[M43*p$l^4`ayI ?$e|M8+?m]');
define('SECURE_AUTH_KEY',  ':nPEr=pcUSWk `Y*~XX:F(F~u8N&.5cJC[nY<>>oa,L1pC`jS|3ns.@-blk, .J5');
define('LOGGED_IN_KEY',    '|17>E 8s)HV1Q:Ca6v^F:i4GG S0J+D#&lX/$x^vw_f,i*dp;w17PH;Z|Y2[CUJC');
define('NONCE_KEY',        '(jS${rjcJeXwG^m4X2Soq&>N_LmDcxdK8V|c3^}r2?yl; QTg*.+{Ip1*M45YmwF');
define('AUTH_SALT',        'A:|Oxi8s6YKNW5;gFvbc7_9C<y>~&gqP>l:_q0]8%17=|_Whw~T]I_+a? x#R]41');
define('SECURE_AUTH_SALT', '`(dl]4.XDQgY-]t?V~1Ng&Z)oZvL;Bv(#F|8+Cx,G9INna=N0-0NiWQwVqCHHDxu');
define('LOGGED_IN_SALT',   ':0H[b?N(@`n]Z32+K`<pu:xC:gQm}uWV}j @-lDJ%IWY(fF{5/vp?Sf^0|w*sS?M');
define('NONCE_SALT',       'u1)nI%oGyIkax1U3RSz%TNs<L{:M>=zk^:!Gf]f@+XhHY:I-qsp1@hjx`VKT!:Fp');

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
