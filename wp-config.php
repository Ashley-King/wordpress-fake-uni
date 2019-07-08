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
define( 'DB_NAME', 'fake-uni' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '&cAFu)Pa~eqI$jk$=ufMKKXFe<G6bkw ]+dc`-LPV_FMETq}yqv/=H~6TT|2LSg6' );
define( 'SECURE_AUTH_KEY',  'l:*`%xu+WZS)@;Gzodi2k^)-n.R}>F8U?g,7$zK&7&n#PuGj~s5Es8m_diKV!;s1' );
define( 'LOGGED_IN_KEY',    'h1GU,QsRNWL=f6@rF&?A}CSHyke%B99+=VE0zNEI^]>x!poJVv{Qu=A^~hew|gZ3' );
define( 'NONCE_KEY',        'NY=2 K/Pq`Qloj8,Z6(@2ps`{Y__Ub,E{u2x8.z:H[_2@1:jj~zH@Q@iR?h9vc>>' );
define( 'AUTH_SALT',        'NM}`3l4aR.?r%Yny;mLA[!b(Bo]J*,[^ZA07e9h=58$V-N*Xn/G6^Z`Hl`jW<3vV' );
define( 'SECURE_AUTH_SALT', '}J.Bv>nf5*f>4(>(1:ZRHnH?~{?kXS+Gh<-7l0qF5`q._x?5#U`8-TP~_3xQ_EqK' );
define( 'LOGGED_IN_SALT',   'qyf?ca:nL>X@C.,q?im7.NI0dONWXs<B4wr33@f.}0@, y180L*Drx.QGY*jU~m=' );
define( 'NONCE_SALT',       'tqkK||Mql:#v,Bt4}!}<mKFw*6%;z^^BNft`39Dy.2 ~z:7Hw]{/:h0WfrvaM0FQ' );

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
