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
define('AUTH_KEY',         ' v*tRTj-OUA5Sb*|_`3t b|y,T}~-$GxV:YccEEnn-33Q3`OIqY2]Dm/VZ;}Vn/l');
define('SECURE_AUTH_KEY',  'c.p);gysXbJ~GTn#mx6O:X+@R<l[E54c6P4&8|*ENzw+5op>Ss3%|g;8V{`6nZB.');
define('LOGGED_IN_KEY',    'y$N|LPI9iw+oqL-U0nP&U+FH])aime,% h)q<`JGig{a]&&0I}>P9zD+--(P0a%m');
define('NONCE_KEY',        'ivF{:ju^f-Njb4o~] -G,reX3 VaJE:*yhC1KtIW*0U5{-|9bxK^rx``16k;F]Kv');
define('AUTH_SALT',        'l2b?!b]_inCwqxcsC4PS++i+@=/^u|glb-caUttKTpYIm4_e|~YzU+k}|:4M2 P+');
define('SECURE_AUTH_SALT', 'V%gVhgVFfg(riPGIkP*,<qO~ajXAEbRb/B_Fc#If/9.7Sy5dqPPOo0`FZ4*jJ&l6');
define('LOGGED_IN_SALT',   'bQf|-|pOKc$Ywr%w*GR-o4#C+J<QU}-%V,z55n|o}l(u6>8p_y]I6+s!mW0n@Ty)');
define('NONCE_SALT',       '%B6BB)}_w`lH`r]gVp:QO:pC|::(PS5<9qZ>/JazsKBn Ja$WXA-dW$/A=)BQyj@');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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