<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'osloshiatsu');

/** MySQL database username */
define('DB_USER', 'osloshiatsu');

/** MySQL database password */
define('DB_PASSWORD', 'achFS4jn');

/** MySQL hostname */
define('DB_HOST', 'osloshiatsu.mysql.domeneshop.no');

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
define('AUTH_KEY',         'O+91k:7 =0+-|Ufz+9lu0!Ews,QD$3&z-NUI^nb7~JqK!W)zYhqg3S%fSs|z5|TC');
define('SECURE_AUTH_KEY',  '/1|u0+u79c]L#c!>@;WvA~5+r%iwMY0nB([7%(r<mK/SSypaU~phdh0ex.|9,9vN');
define('LOGGED_IN_KEY',    '.7Hje?/F^uML{)ww48nA?W,ct!Z*<77_<LjIkJi7M14U26Ja!]XnYon~zZ~!AG>a');
define('NONCE_KEY',        '02W%OVy~5b%4AYb=C*9{Y-Yiw^23+O0@z?g]3:gw0+kui$aYQ1~Iso(SJvTCazb ');
define('AUTH_SALT',        'OfE+)ICk5nL]:zyj84+Awx *(Q`C&Pip)O,uf)wIpj<-vkGY%|*fKF%T0V-@9nO=');
define('SECURE_AUTH_SALT', 'x!kzt!.<cu<`4<(`Jzk|u.L!{]85mb]#^X(}7Mxl m4Tb:p)U-@o@x:EA[2;E;L*');
define('LOGGED_IN_SALT',   'D!{-ubvo<ztfgl7#B|,Zatoz&-! Q=x<|N7srL/|/gnC7hqYs:Yrs8aY9](4^A$F');
define('NONCE_SALT',       '.Ak~H63ML`yGhFE@P|c<Wg}{k#B;|Smz4B-ee7$0w!V)Abt)HVTBFy+*X%r^fKu^');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'os_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress.  A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de.mo to wp-content/languages and set WPLANG to 'de' to enable German
 * language support.
 */
define ('WPLANG', 'nb_NO');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
