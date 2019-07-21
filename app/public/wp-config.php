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

// ** MySQL settings ** //
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
define('AUTH_KEY',         'TveXon5Bcjrn2JC0dbO7SMuDrJl2u2S/69OhOVfdf/x2vBpstQx6wq5CE54i88Hn6sKDgVc4z9uiBYTh1bWslg==');
define('SECURE_AUTH_KEY',  'DqpqBDcaDgBZE61R6Zdyd/zBu8zgZY85pNGN7DmvTA7sCbi9JatdiprB38ACu9FbdBJBP/EK+H9P3PLPRt+IVQ==');
define('LOGGED_IN_KEY',    'PN5fX5MrTO+TSrJm3xwYx0U17FdOu54cj5QzNKS3FBzaXQkPCBZXeRvFy0eLUEbKEdMFcAMZhO4FOsAFp8uyyQ==');
define('NONCE_KEY',        'pL2qr+eGqPBERh7waIIFOkCgHUwxJHrnKMwT0Pj7mOEGO7rUFMeBIpec0wRNh6qUtkoWM0d441ISzcgLRhc+/Q==');
define('AUTH_SALT',        'Aq+bPGAd9ZNeTb09lw0AcgwaA4huuT6yoyB8FCZqgZxYd9iB8IhZd95tO7dHhCy+Bh/XZxXERYTk/yjUCiE/OA==');
define('SECURE_AUTH_SALT', 'Wz3SUVqW2M3wAQU7eGba3O4tQPacyScqynvGK2xeI3gr9SPA71zmdSpRN7MvEfmMTVEZERywv6pII9XHuDkkrw==');
define('LOGGED_IN_SALT',   'Hdsd//ZhW9dtRrN4rZNg1KVyX2cxEDfD/epg5p72ENxmox0kkOcxUL4I+MBzZruS56XB9dSWbXS9UipirBlRbQ==');
define('NONCE_SALT',       'T9tGnhmhRhSDJkB5Q5cqN9FATT2Dcuf8d/YBLnvdw7pFpe4z3nfYTloUDep/7xHvQE/d0EyXCGeA4COBML80Wg==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
