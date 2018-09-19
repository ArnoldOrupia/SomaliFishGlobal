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
define('DB_NAME', 'SomaliFishGlobal');

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
define('AUTH_KEY',         '9[qyS<vwwfw_;x:qE_dyPLuCi=+*6Wr5([;=uK0.Lz.r|a{<e$hn-t*yB#d~:TCO');
define('SECURE_AUTH_KEY',  '5kvvI$V %Bn~)9 hCwjd:>dP-8v9UHTTR/[wLf6]X#3FvK$Y5jFan5I=;xp=ntU;');
define('LOGGED_IN_KEY',    'C!k{e459Ah=ju,b.AR|dSk&;`}!S^~0yy.io_yB>g`b9;L{$sS8EV-9#UgI{q9?U');
define('NONCE_KEY',        '<`]&IDg:[J=_ ]c>tyqS8vh$`sMQO<r-=f66[7<28BmLfgi7[1f>C.if[*6ly<nw');
define('AUTH_SALT',        '6n>By RGHhH>G<Gp!89;cf8-T?qd/_*YP//k7i~?~t(/>{;I63x^W}M8N8gF1oB$');
define('SECURE_AUTH_SALT', '8wA,p$yf!dAqMs`},3>63CygF#@Y$pe/w91!#l>D5@(AF>,j)qeG/$,_Vzn_j27|');
define('LOGGED_IN_SALT',   'GRlj>kAb_`HUM?/Tsnw&]w~Yp*`D--j>Lp5|{Rms0-b3hF?YvQX{*VTYs3]GjLM5');
define('NONCE_SALT',       '_Mrp(IqkTT_)!e;X^VrsM5q=b)%m{*&[@&e^k{QseR|{=KH9}EjXu7W=qIxi%=$x');

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
