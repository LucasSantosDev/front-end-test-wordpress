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
define('DB_NAME', 'empre895_wp299');

/** MySQL database username */
define('DB_USER', 'empre895_wp299');

/** MySQL database password */
define('DB_PASSWORD', 'j[qC-Sp188');

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
define('AUTH_KEY',         'mtsbqtfiwybqjjramq8nhsw7lftn89jwuve22aevzxb7alk9tvrr7exxnuqiklwt');
define('SECURE_AUTH_KEY',  '1yjgzhbcbhc7huojsca7yjxm9r9d8q7rq6khb9or8vckevszefjrbmbmmgryr8c7');
define('LOGGED_IN_KEY',    'arilcvnhxjdevicrgyrjwmlk12x6twjjpbbhs1tdli0w9iqqkaxphcyxkls7jf4p');
define('NONCE_KEY',        'ddp3f35bsmod1xkv3p7jpmtrbbdb5yjmh5ntjgkh0ikzuxaurfg6jscqdrusrk4n');
define('AUTH_SALT',        'j20rujugbbbganpytbp8ciqzplxgn8ioe8ezlgt8yzgaqbxc5ia1uscdc82bc386');
define('SECURE_AUTH_SALT', '3o9mtixysvcgo77tnquat5g3hqfe41lffscems0ivmczlq4sfbteouucgak7sif1');
define('LOGGED_IN_SALT',   'jkyyjxrdbldngh2yxiew19eia2aea7xy5ptrobkzgfvxhgthr40kmzmberfxtam0');
define('NONCE_SALT',       'zfhozrvhbefvgicspn5gaev0lpgh9ibuejcqnigvip1xg6akblwwnov9kazednfr');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wptr_';

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
