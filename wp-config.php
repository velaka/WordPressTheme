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
define('DB_NAME', 'agencia');

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
define('AUTH_KEY',         '^fHN^(55,:a..,*qN=GPm96>9W7B?*q#t&.85Ui,htVV?E2=G`@nlk0>}v0XC6sk');
define('SECURE_AUTH_KEY',  'fql=0`J%:V[lv!4SIJVz>? 2.)AiZuR:SDCLN$mD;Rh@:mMIh#a}J`v@yczZk#wc');
define('LOGGED_IN_KEY',    'izuGGEGv]I&-pH;.3%xMCj]s~K5[3;s2mKzAy|-,!0=g)|d0dvH^+Aj{X-3gestb');
define('NONCE_KEY',        'eQ<c+3IP1E  5<|<|7Y@OKpzi(A{G!9Y*KhE?8dj+qR%p#6j-?O$NZNqMASE<Xn%');
define('AUTH_SALT',        '766`BF!<(<U4hiO`0FvQ6}|I1!jW(inm8{%>gLbRa*Mgw3Qd%2[N&%,$]kCNk9hb');
define('SECURE_AUTH_SALT', 'iHk#~<.}2qR2/`+<mq=;LKFU#$I$,WcGw3HL=@$]&k^iY_i>6+c@iFQQm@YcI:lW');
define('LOGGED_IN_SALT',   '?n+Vl-nrv[OM27neJE[wCoI/>^I|yTW5oeTLVXfU3.31r[%I/G1[>N#/Yii$Kk?O');
define('NONCE_SALT',       'B/2-x3,,`P(C4-QIF3l4grwq}e21Y*&kj7VhWtO0]kJCY<,O,l]lP_T(9z3e5t1:');

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
