<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache


/** Enable W3 Total Cache */
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
define( 'DB_NAME', 'kveljkovic_projekat' );
/** Database username */
define( 'DB_USER', 'kveljkovic_projekat' );
/** Database password */
define( 'DB_PASSWORD', '&Jn,%dE2qpcT' );
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
define( 'AUTH_KEY',         '_-{~!L+Yk(21M5u#p;K,| e~aUUs}u9GABTb03%2fu]ERUD@k497BpI.89_cx6gT' );
define( 'SECURE_AUTH_KEY',  '`JUhNr}JuDS-aa}:j+mN( >ywA66kbQX/( *#YcS4#TrMtuY?75kXj(>=_p! (&T' );
define( 'LOGGED_IN_KEY',    '1Z]E9rcl+?u4N*82Q?6:rnY5!B6WLG:rYZWW0{<Wpx~Q:HY0oe5:n|_j/^j }=6C' );
define( 'NONCE_KEY',        '|q{sEB;&]0:dAY:aYrh>NQ^j1af{~a42|=BNc)lGT2_-)losv[$0jjcd/*9WB:f4' );
define( 'AUTH_SALT',        'Ig@H@-d+dUMz}VbB<?GPL^}*Ad2j$.5T[w&-{}>P.8br63k4XdCMIOaQz>HIb3Y2' );
define( 'SECURE_AUTH_SALT', 'x=%S(mLchv~e<T31Eb^5[@fp|&LNnFC:`aY47G[kuggBaY`<:v|*J]971rYd~W^6' );
define( 'LOGGED_IN_SALT',   '{xZej-,)[Y#@dc%J%Jet}xS@{J4S*]87=x>mS-0~U0,=}7&m)EoT}T&MM9>~gi87' );
define( 'NONCE_SALT',       'b.(O5M0k,O7 sn-.9b}&m>{)@AOhAgAT}0q:iGR>CT%,N;0t?G|qW2E$HgWNNeOb' );
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