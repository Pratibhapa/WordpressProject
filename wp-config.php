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
define( 'DB_NAME', 'school' );

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
define( 'AUTH_KEY',         '*_JvxNe9QMI&VmE><qE~y~sEBzP.%r=] -p;`&:eDHQGd+:I)*xr1 *?kd&T&G>#' );
define( 'SECURE_AUTH_KEY',  '^_[i]>@06SzP;.Jlho$(|fDz|df;~O%H?2vcmK8{Y*.3ZMiVWSKfA$M<Gf=)tl>$' );
define( 'LOGGED_IN_KEY',    'K?i1j33=sOcofcpzOt6:u&T+yPH~];6k@N6_%|u@XUXQ![zxn>S`GDBS9v*N<W8e' );
define( 'NONCE_KEY',        '8cV#qRl^I[W0x/ k&^1Y_4CuDwhx|Iy,Bb6yP-3eo<BUF7iI#!!hrHk[H$7J^Thq' );
define( 'AUTH_SALT',        'd*IW?*A jo}A A(Vm^XiJ$ @jYSr%FG,-_}aA`q#t0+ON?W+K9]8Tgd^oV)y.=eY' );
define( 'SECURE_AUTH_SALT', 'X`x$@V.MMHPy>}FJIbN}ml-Ggu.U:K/s.Q]eW/V:1=W>j*Glp1n4Lf9BZ8+;O5O~' );
define( 'LOGGED_IN_SALT',   '{vR=dRB*]n1AqU_3ub0v57/[C2+|g+%@R|4ermi+#03!~vwdRPs}U3I*KX?YHUef' );
define( 'NONCE_SALT',       '}/ZwQz=GU=/7-Y]Y4vaiN^}ujCc}^/Xo3TR{9+)$9]D69K$?-r0J KKD()[_h_;?' );

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
