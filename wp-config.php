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
define( 'DB_NAME', 'kveljkovic_digitel' );
/** Database username */
define( 'DB_USER', 'kveljkovic_digitelKorisnik' );
/** Database password */
define( 'DB_PASSWORD', 'G05tSQ_vWu4s' );
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
define( 'AUTH_KEY',         '@@@<8R,ThH3i5H.=iNQ=MUqjSXnjq8(%`@=LI?:(RbEFsr|,M+,=nW3XA3,nf;o)' );
define( 'SECURE_AUTH_KEY',  'Io_uYJMpk1k+t6A*{J^}tI{wp2nv hif %OD$<.hc)ItOx&4?A_taUQj3yJ%+0lJ' );
define( 'LOGGED_IN_KEY',    '-iZA-F0rp5$6 =#C{]4jm~WFsLJj%NDycs17LKKQDO5}G?nxZrTcE{~`xVJ?u$Li' );
define( 'NONCE_KEY',        'Rr$1*Je/M4vzXpS5*pjW:,N,!7Zzlf0J/.>FGRskV3D&VP7c_|;Y!mQ .gJWN$i,' );
define( 'AUTH_SALT',        'Yd64+Z:YEH5fY6Ui-?A^1ktW4J(U;g zdMmF#S>f4ZTwqMss+K;c~,?}miow+-^B' );
define( 'SECURE_AUTH_SALT', 'R.P%~017LPp2KY:R&WhJ/#=/)OV~=0f}[eZ(=VCm<#Ks#V ~7ZKdN!i3i}/g-_&0' );
define( 'LOGGED_IN_SALT',   '9]rh{MVznQ5;sT9mA*~o4lh.9[.~Q5X@%qS_h~t[7bQ}~pyC|x],jE=?]F>yG.7&' );
define( 'NONCE_SALT',       ':dT5kDr+C5`o{> R3?Ok;aQK<b!T0hu5[?91&P~2?zbwC,jnLwH S1V6Z})L,]$*' );
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