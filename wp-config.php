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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'kveljkovic_trpkovic' );

/** Database username */
define( 'DB_USER', 'kveljkovic_trpkovic' );

/** Database password */
define( 'DB_PASSWORD', '&(b1WKuJWYsS' );

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
define( 'AUTH_KEY',         'BbEtj!I}W,n| 0_>ho90b[Mc}CPEFY`hu;#n~/78&3( ?q dj(c50P[yVf[T72f#' );
define( 'SECURE_AUTH_KEY',  '!KbS>2X#Khf*}1&(HU,qa!}ZR$->hm.g@Neq N<&m%t([c~e0Q9d8vxe~$aus<u`' );
define( 'LOGGED_IN_KEY',    'p?fMN4;B<@Ul?wYm@P#rg+8Ey %bbVX0B0N|L0Kw L-4IsFO5}B/ze4;_dhaxjA#' );
define( 'NONCE_KEY',        'N/yH!J]@^maABHuts!= *1bB9tFKD-T5GYEV>12t)Q11G~mRDB:2HRU|3Wvpg7ws' );
define( 'AUTH_SALT',        'f:kr;A9Tb?i*OOqGG2QY?:+A*rDK:1@enw+YM2BZln]xb3nF$7)%7Ni`p<e1G93l' );
define( 'SECURE_AUTH_SALT', 'AF79Ad)aX=R?M,bSJ#t8[d1(G<0O_StE{m%@5iq9/RGwC6}ck*1NqfUN.~e<=,fm' );
define( 'LOGGED_IN_SALT',   '|KvWl]9~[y|8d$43YeQzm;Md$}g[*MOnS&y=*jW612Fj(<lsED%q9Zyf}v*>aT`T' );
define( 'NONCE_SALT',       '1;v<fVZ$$S/KcJgrqLJYrs#-6{3l_zW7b_ju:v$rGN6eG;;7HXOTei:Bv;e~&}Ef' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
