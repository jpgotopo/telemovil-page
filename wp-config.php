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
define( 'DB_NAME', 'group-telemovil' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ':KV/jkWqw9wolj0dA+T!R1rj7wS1O%W]IB*EPx9IA}=pXdEH&=.#;sC5^GhBtne>' );
define( 'SECURE_AUTH_KEY',  'F!Ardz8#A._X[K74t6iNMhWVqo:1_5A[TH~J3.+^d *.VT#zi`s3TOy,3S.GT.k#' );
define( 'LOGGED_IN_KEY',    'R(W;@Xiic&Xw(S}6~RD6ZDa3G3.KOB^3%oEipsQ3A-jVkvp ~GhWtq<=^Sb&3W/?' );
define( 'NONCE_KEY',        'wx4F0?6 ?C}`A1kY<{M( IK~9f3Nu`4%M4U[z/ pmZ#AkhJAWz04MjO1OIHMTO,g' );
define( 'AUTH_SALT',        'eiH;EG8ZY/U`>`w#xag_}T 6WzZ(qdD5$&Z;gU(?CZ<<b_i;uC$d&j<PMT7JE1O_' );
define( 'SECURE_AUTH_SALT', 'SX7C%]c(Fla7nu7$MSS$4-L+]RfaIs&tCLy8[kb1I@7qy6vlS9/{^p:%w1Q(f,ri' );
define( 'LOGGED_IN_SALT',   'CuI!r-bZyIjP?@hvIizI9Rx[_dv{`I>-vEq|j~h #/*2RfDA&xKV)/*oh))n%=B1' );
define( 'NONCE_SALT',       'CgAmqw)CM,%>4RAh6D-i57)F=7| JRZf:4H)>})0|+$cJR*R`L!Qz[&;r%LE|}X ' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
