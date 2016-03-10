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
define('DB_NAME', 'woo');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
//define('DB_PASSWORD', 'root');
define('DB_PASSWORD', '123456StagingWooDB');

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
define('AUTH_KEY',         'F x6+b|fdT| 5*!vt`^+}-g*9p,+n-K~k4P<5 RM6N#bSGs&<OG8co*+j-q;4Sip');
define('SECURE_AUTH_KEY',  '#LR02=c|/A:%~sZnV-P^+WS^I+MF?(Kq>=ihG;#af/k5qV&g*rEm6w$ZDLhj_03;');
define('LOGGED_IN_KEY',    '({a/-Ap?46k.iY:sq%agxQy&JZetLO>8+;*zm2*|i|V4Vi!J~9;@y2k5e]eYDaDc');
define('NONCE_KEY',        'T8h|5P}^Q&e]` zcb|W|?dOsK&oYl4jnk*WC-=3yGVc|B-+Vu+dZTFY|A @4JJ)f');
define('AUTH_SALT',        '[o7]blu|X?3w<1cz9knxnx^@3o}lcR3;9N|L4Onw_6hIS3I>|LK%$9z%&F54dee}');
define('SECURE_AUTH_SALT', '?:,JckuEjAcMJ:dc}$y2QUk+qpGPp?dv?<S0igknU+TT<+$-%jcqRv+2 W|,X0db');
define('LOGGED_IN_SALT',   'Z9y00+@1:dT5+R<)a%ARPPlhi]W}U+--!{X:rA2oQ-k+z[GRE|&h#Of;G5`?wls4');
define('NONCE_SALT',       '2aynG{WV I3yZ+Y+d,M|{-pqvVwnIzX-,~EoDls!bVbyF0Gpc~G4}E*PK2Y7D>m#');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'woo_';

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

