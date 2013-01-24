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
define('DB_NAME', 'wordpress_asis');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         'IS-9vn]R-x0PwOP]PPmi(r*`V3hdXsVzX&fj^9JH,SQHUl%wcZD{mEY!n75,|zJ]');
define('SECURE_AUTH_KEY',  'mvO|dL}i`rJkBW4qAtCe6%0uG,hmTd=D1Q0huWUS#_!{}sj(qS*zBTSsSo?4cKAx');
define('LOGGED_IN_KEY',    '4#`]8`-?Un7t}AaD=Uq.l2>+E-*m2+Ki>h`=cv}D%#vm|UfW@./FOObm.+)C~[3g');
define('NONCE_KEY',        '5|&D?0kAS!CH.c,XW4O<35,6OX:4+O,oII||0?M hl? O~|6+P)dNG-91=x]ET9W');
define('AUTH_SALT',        'CD%DCH3UWR6>{(0<#!DQRPU:{#y_e>+K`BB,K^OSpF{oL^zB C}Mi<?<)97xh{f?');
define('SECURE_AUTH_SALT', 'Ca.ATis=WFllRIb*6Pac*<Y<S{UL;C5]MYNjMX}9(z1SEdikS{lqRE8{B?ym3A_@');
define('LOGGED_IN_SALT',   'A@yWzO-)132,L1eN cX_i}&@|+vUA`+#{-`sX-LS&t6`Ku67E$Q|Yf6O^QUj-}Hb');
define('NONCE_SALT',       ')B3Q@i3rMGoXGVC~0x6Br|L16s.K.Ins@0n<+,GhZ]wSt~w9Q+[A:$-wPopmI(yr');

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
