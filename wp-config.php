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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'newswebsite' );

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
define( 'AUTH_KEY',         '[p&Ed5Wa 3<F5~HM]KTw$g: ZmKy=l^YxCP.ATrcQ].iR<]8?Uw/(u5?s06=B}%_' );
define( 'SECURE_AUTH_KEY',  '3$g {27BZouzr9A|${~fd{T!$A?GY~T%23K85Q#=7 TA<Xw.U0-&{5rqSDDTAiD7' );
define( 'LOGGED_IN_KEY',    'G-I{CbbH*?zyt&l7b#%?Y=N=T!b1-CdR:HxGsC/9:Lht?#Kd,[r:;MyNQX=H8J&7' );
define( 'NONCE_KEY',        'ixZ7{R)iFt^*:379dG?`0EE_x.V{=dc[d)#3(*}CO/u_&#5yL2z46yExVgB6$+7V' );
define( 'AUTH_SALT',        '$}[deY4+UBb(tQvag{&R>c--`E?fc2}d<AB<R$(I,QzxSOYUYH&f?E_eSc~}O_~r' );
define( 'SECURE_AUTH_SALT', '[qRG#/@HWYqKS*wu(]Ggy)IgQ6rZqJl9Cr,1E) zQ/@%a]RLI~W~>V]tF<%3P^*x' );
define( 'LOGGED_IN_SALT',   'H`IJrHwb17T>^Ea6E]n$W=|T(Zq(6=/WWZ~dd<oIgiNrdMu{?;Re(#mfYi7u1I*c' );
define( 'NONCE_SALT',       'aN,K=B$zNGM*(I76X=wwwgk5{4,H|{EeJB};h9i!|]>-oIk<}@ 2c,}?xX)X!O4{' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
