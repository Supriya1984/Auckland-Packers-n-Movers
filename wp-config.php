<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'Services' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '*?S%JZ$bo:V&US]{SW|Ei<-[xjBm}!bt;=)#bUSv!xpiE=5-z<Q/YCx&=!<ye.4m' );
define( 'SECURE_AUTH_KEY',  '0!S}dk1.T>($#hho$f+WC6SzOroD+TcqECzAp1rmm70=b9K&U8,W-z>F+ nIjs4$' );
define( 'LOGGED_IN_KEY',    '2J<p{7 SW1Ng=maw)1r14_pBI_7!!r8?JUl>%Y% B6q_jF-4?,J}h,m>M;aG33_#' );
define( 'NONCE_KEY',        '_*s7V$9ph,`4A5.C{2,mJ{=zqO|LfC|Dn(G*?! Y*{_atoS-{@kT;G-?+t7I*2[d' );
define( 'AUTH_SALT',        '=x0^qo0*`z3n8#Bi0vEyEh?<to$9dC1<Jak=F/B?W))fPvp,(;%t/<pxlzMCZL-B' );
define( 'SECURE_AUTH_SALT', '<?1[Pk1o$b^e^W=KmLf]_26^LowK?9XcH:%Qo}cMQxCq^LA#&3tsrxGW<3r`Q9FQ' );
define( 'LOGGED_IN_SALT',   'No|-leLF_}8!t?}W><3fZi2YQcL9mBVF^=B3CV3s>v>rD]K3+R[2!?wk/*TirN$@' );
define( 'NONCE_SALT',       'Tqy Z`H=#!TZEN[J;(cWtQ`}01:`aswqdRX5q1!^XY(AbA}j+5YoeB30D34=eDbO' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

