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
define('DB_NAME', 'wpmvc');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'maxilume');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define( 'WP_MEMORY_LIMIT', '256M' );


/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'WS{HStJva`,Hs%/<PC*;}UuEN{2#iwt+/^PKASnr7~R]D`VS1-:E{k5n@f!83lwU');
define('SECURE_AUTH_KEY',  'LM{ CGLtr5TyQ.|DC#%k_Sf^q]9E=:r^i@%t)Knu.Y$ptKxE^RP#ruJYFkQD%_nd');
define('LOGGED_IN_KEY',    'H*7QPAnn`s.eBpN*k  B0OX}wyU:%%c^x[dIw,)dP?Rs2-&VbkLER|d|MbqG~:9J');
define('NONCE_KEY',        '-76a15C1o->?JZ.k^EY[l-qEq/6mR@~)0>rVe+)DUmLu7oqqE>7QfVrK>A_=Q,SL');
define('AUTH_SALT',        'e1Wrlf]{*eX0^,!aqykAb]eg@MU 2XQZ}=6%E4^@|Ax$-sP4!`pD{`e*CF{**YCt');
define('SECURE_AUTH_SALT', '30BR0/<1|!Ho*X,:SDvxe]-~_Na6#Ek,(k}]JTx!n&z2JzxyqL~5I=/Ap,Jf0;;U');
define('LOGGED_IN_SALT',   '|NA6(RbH(Y&r>;yed}4}R`_LU4oXIc5hz%g-DfS4Dju6^$?cERGdqshgB20A6^C(');
define('NONCE_SALT',       'D1fFD#1^Z9tP7%[(Mugm};,D7ex[G+&I_5*J|,i`h.w_#yB}?tNVpu0/# a&qYu6');

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
