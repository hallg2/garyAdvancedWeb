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
define('DB_NAME', 'wordPress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'mysql');

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
define('AUTH_KEY',         'H0pXOZoUc^r9Ff!ALSb~?;DEI|-^Qo$ZQD*);)XQ6+Wp}(sr)NpGBE/R)VZ5`xp&');
define('SECURE_AUTH_KEY',  'Y18j&c!;]]6Uh/og^QlQ60~^Ta03_3P.<OCQNrC@ o}vMx%WxZ.N/ZgYJp(>E3 x');
define('LOGGED_IN_KEY',    '[q7V0A!9,{A.-?Qc$cXWw2yQ}5_:2&i5egErFT)XCUe=Z6.,w>hs8T!qc,0bLg7y');
define('NONCE_KEY',        '5%GwhpQAtT${Hr$Nf4hn@3M|]H-f0jd}8/ xDm`.y0ti#mcc4}XP0JYyuywJJ5T.');
define('AUTH_SALT',        '?TXpTIg,E9t:S=(]dhTrzNOW0bIVpi$(uWS+NfioYkr>4i/>)rC~C.D|0,Cx7_Lp');
define('SECURE_AUTH_SALT', 'Gc3V90X-)  hZ8`{^`/f@o$j[YrC#K@#&;b=WY!vgqdkrV6kbm=yn/%6sb^1+{H0');
define('LOGGED_IN_SALT',   '6xU[sr6`*Z1N.~=W:`gzc3`)UPh|B:/_ux?YqOMt;6%zuR.g js8<2#oJ~Of? P(');
define('NONCE_SALT',       '|Po[6x`967ngYJM};!lv%@Xz@|__~ypbVY6? 7f gpc/m=$7`VU%~YXa?U`nl{dC');

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
