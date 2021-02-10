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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'leK0td3j7RnOtiyMAHzgNA6U+S99RejlYNQzF79t0D1d7USeAIAjTCkoAes/nuHoJfAAPMGO7LFoTFUwmzgW5g==');
define('SECURE_AUTH_KEY',  'XKfl/RdAmogQLlivVyPPsrlIkP9ydQebSf7BgQWOsPrPLja8oTxeXp/tUEQ4z0hJjDETv0oMTdZRuE+OLSK73A==');
define('LOGGED_IN_KEY',    'VbqptRUzk3T0zaeX2bhgo9XQzzGGDA9vPtDQ0BX66NCtGs27CGjrg/R01an96uaEGKUNdGvtx6fiT6roXbwq+w==');
define('NONCE_KEY',        '/JeUQWFXVuX+h34qnW9x8yQ9SDNtvL6Os0kE9iMUxrXaBD81xR4+R+C6fgqYy93eNc011aOrnESAkOers3qURA==');
define('AUTH_SALT',        '62Zvo4GjIIfE7MfStoXX+LXY+1i2g7OhSQ7B3y+NAv2tTcoWRFTlJNBIEScKBkZLF6MhFzCXffOGVBQuBG/MsA==');
define('SECURE_AUTH_SALT', 'RQxYEK9DpwibYZorZxqlVm+khA5ofHQtaHLpQ15I9Ah9nB/Xngz+is/CB59w189DZHzGS3MUFdvLvb4T1xuV9A==');
define('LOGGED_IN_SALT',   'WtZXJdo8JWlVmVGgyWyaRqmD9R223KAgwdzupe+4ytSFRRv+2hKaHPqsiLWl6acE5PM49XFv+F795zQHcdu1Lw==');
define('NONCE_SALT',       'FZL8+K99WgSz7u972XPOsgogm4qZP8YuAa2YtXtY12tN2HH6F9r7crkVgKfiZg1lHJxRQGTxUtad+Qfy2+l/5A==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
