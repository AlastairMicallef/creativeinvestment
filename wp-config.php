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
define( 'DB_NAME', 'creativeinvestment_db' );

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
define( 'AUTH_KEY',         'qbgj`WWHWURl:ZCxCAR*:2u%.ZLY7FxHq$6:X}f.x0p+pvRE[a^eI(BK,1a>U4~I' );
define( 'SECURE_AUTH_KEY',  '_%:m2s}utKO=fHTG7 (EiIH|]Q)(68=>OEtx#IGRI8kJxX<q~4v@||jDPe9XE?_{' );
define( 'LOGGED_IN_KEY',    '#.]=KzHbrL;U]P.e4j$cD3QXo;;WE2K7AfFr.)Ij$,F8yT))RI.0%3q+G/vqe$g{' );
define( 'NONCE_KEY',        '>>}B1Rk$Z@3FMCE+WDo0+pqBW0hh*G1Iv?V_~j]|!a}gFk,}r%~>sNOH0n]0:l7v' );
define( 'AUTH_SALT',        '#nb92GxEHddiRt[z;=1Nhy2|sP:D9qnw+d:Lj/? l0*:|y?@{|TSwvVWGT#SkTCO' );
define( 'SECURE_AUTH_SALT', '140Z{? s]<v<>g&wQ4xbATCt1P/{1ghzV6~Z9-QUT,h]]qq@qCa DCY|AyVfq 1H' );
define( 'LOGGED_IN_SALT',   'gggp)814Be[|Fd&j;va3nL+Cp>bQub-$!8hXa[Mv0T,D4P!`}`>:/;YJ^<&~W|(]' );
define( 'NONCE_SALT',       '57|f|H=XNe-CT4DlfDQ63z*dWy8]_Q1ZMQQtCcRc58<~z&Bt#F,=cyMzgFVC3ob ' );

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
