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
define('DB_NAME', 'bappalpu_blog');

/** MySQL database username */
define('DB_USER', 'bappalpu_vivek');

/** MySQL database password */
define('DB_PASSWORD', 'vivek@123');

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
define('AUTH_KEY',         '.?]hlE+mQi&m%=o<W-3ML+i`4J1F${lT|z]iV-8+vH=K-q_zp-Fm]F^=bPyt%{{4');
define('SECURE_AUTH_KEY',  ')UgqH+>dazl!#ej_>Q:T)-r:o7Ja~0{#Gr74;f^e@K)hbz0US++A> %m=|T&=|W9');
define('LOGGED_IN_KEY',    '>it8IP.)=xHROe/p%Z=VRBk?(i8{Z.+PsflkW~!t+g>$lOwQHSBwb|0sog|:~<ML');
define('NONCE_KEY',        '<%I#^_LZWH+,o_3]B@aOz-8;O4^(*o6cDlC!eRMa51PA#H?mM^I@6VoKN}:TJ$iM');
define('AUTH_SALT',        'e#zmD!J6CFBxBgh()p!UvHmlNR MYd&EBkp!GO|[]uZZ3[vf@Q|yr3lA2d8JYR#5');
define('SECURE_AUTH_SALT', '0o_+cJPPHl&ir8}-zPSz!+yIez#kgk,Gksc{pX!**O` ?H8^~ N<~-bpe5|fUkhG');
define('LOGGED_IN_SALT',   'IW9c|4d!sj|<Vv4cbuiEO}b`lhSuiuoCa%UL94aw|t$<%-GOc707$G+2p!=)G6O!');
define('NONCE_SALT',       'Ez*s<Va|)s1W`&-?O*ke.2J}ZDM`!Z|dc*Sblu3t-`_)$XRV:H3-N9PR9:Cs$w{<');

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
