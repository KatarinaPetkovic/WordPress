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
define( 'DB_NAME', 'kveljkovic_roman' );

/** Database username */
define( 'DB_USER', 'kveljkovic_roman' );

/** Database password */
define( 'DB_PASSWORD', 'In^i2Fv1Nk6!' );

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
define( 'AUTH_KEY',         '7a7WTy<_jZpMkP8JSJH%{A2@j6151E#mHPZ.|18 G)~s4VsAx{);;qir(kyyf$@:' );
define( 'SECURE_AUTH_KEY',  '.936s]cnSLbjPZuS:C]VNUYEd$@0uX/;e~ZC-JWVL{_T0w$hV]ud>W=BS-JA~y3z' );
define( 'LOGGED_IN_KEY',    ' H;!tYHe`Sh`8@Ho:GLcnsBz#!O7s|[1-?k,(y]m>7O95K*Ho8a~B[QYp7@~-VVe' );
define( 'NONCE_KEY',        'Haxg`1$/b)vU`63]}uSYM-D!@OGZ$ykXPlXP86:qpC:i BAe?M3^D`yBpG[Z!y19' );
define( 'AUTH_SALT',        '.OLSoCnq2l|Jl`qj(RP)}IQ%;K~G(J)6eF rBdyp{~Y*Mu9B5OB3(^XJG3IBBrQ.' );
define( 'SECURE_AUTH_SALT', 'nXw+r%1eN>ZpKy42|0>$v9},o)-bdN)F%v3b_ 0}eRHFcBfsKgjtrkDy?)rqlv:^' );
define( 'LOGGED_IN_SALT',   '[N![FK&RQIKS,qo=&92]rGGxn1a-EpLUY8W^|R#o?x1W;aA5-l5Fvvj>iXe*N#Mf' );
define( 'NONCE_SALT',       'z!~Jl%[AJ.cc7DzF9*22eiTlM<SRt )yVg|ew*x71d|L<jqntx.s=b+Dc/D0DsvH' );

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
