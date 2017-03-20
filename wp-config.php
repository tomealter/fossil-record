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
define('DB_NAME', 'fossil-record');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         ',J*L I;&R<uuFoRSBL_2tJc.$.q+z7kRn33^|3P]y6,Q1,k7v+|YoUO1>d#L%w#b');
define('SECURE_AUTH_KEY',  'bP07&^$(Ex:#mrl<cVlvJ.|:%(w-L`(Xx#_-kYBpa3dU:(xKhX-}k^x8Q-V%_wM0');
define('LOGGED_IN_KEY',    '8k{L?=+0k7WOwG6!9>9<<%2;v<ae1uL>/OH# x]?OK)Ix3xV;kw*[I.TWx5At?,x');
define('NONCE_KEY',        '0iKxxLtko[Eju3):lMl*p)Iv%>J`53~kg48}-LC<sh$+xD^Dznu+MUWbx2mK97Mv');
define('AUTH_SALT',        '<b3*7gtE$}j[0tEU)_|KcH^Bv {:GmM!V^G brjbFO37K2&kGs$J_}BjsalHRk#S');
define('SECURE_AUTH_SALT', 'q{ISIpV*4)Q_yxZiQk(Y,,?7&};3Tz:Ii%(1 =*r;&H5$jYs4|czwbq;{ly|o7-d');
define('LOGGED_IN_SALT',   'ehCii@uM/Z@d)a!no)hTs?TD dz:EY$#fn/?0fvw3K!wr3f{%z#vD&>nn77(v*Ep');
define('NONCE_SALT',       '%+KcvN}ju7h8Rhw!p/jk#pn0s|aT[oMnQq9iK;KP$xMXear9NMb=sVIvWA8P~MS1');

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
