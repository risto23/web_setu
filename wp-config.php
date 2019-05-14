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
define('DB_NAME', 'kelurahan');

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
define('AUTH_KEY',         '&NzmIO,Q63Eth9axv+-UnE $9`fF7PkDbwUki2~`|0!Fr6^7l3N@D}jW`kv&jE>-');
define('SECURE_AUTH_KEY',  'Cq{32??)Bu$_WEW+rqR2*l{n!!Q~*=^:s|f]kal?{g6q+qyd~rArH@mXUkel.){L');
define('LOGGED_IN_KEY',    '{i7Qjln,;M3$>k x{po(~S)O9Gsr!pzPvURR#8. 7sR>1SW>MzWW/}}N@03ID__J');
define('NONCE_KEY',        'PB<tbL8V/T36[}}pADp1|?a;Ep`F3}Bhrf8zZz-eEL $<jz%iEs<R?KhWU@7qJ 3');
define('AUTH_SALT',        '6>%2S9x?Kv4Lj^Rp]f5{.}qA;a2_#5qT8rmV)AY;10T8>qeOK3Z6PXe_Kx]|b)4C');
define('SECURE_AUTH_SALT', 'iuI1ga:hoktXmfWs#o}q+JuqZ0y1g}t$sRY`P2^a>a*)3{3l~}?e&3wrMoRsEml_');
define('LOGGED_IN_SALT',   '<zq.IVdW_ LaEo8g-YuU)L5*?b4M:0am#s2)G,YM;jXHIyr?;loBYXJblWz4<3Di');
define('NONCE_SALT',       'Q.J,-+f<Q8W%}#<P9oN+(2[Bd}3DuAi-Uq~rvkT<8E;w#Rk%!e)3:^jOd>|oYH25');

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
