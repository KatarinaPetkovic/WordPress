<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

/** Enable W3 Total Cache */
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
define( 'DB_NAME', 'kveljkovic_portfolio' );
/** Database username */
define( 'DB_USER', 'kveljkovic_portfolioKorisnik' );
/** Database password */
define( 'DB_PASSWORD', 'Vk(Nh~%dD[7E' );
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
define( 'AUTH_KEY',         'Yl#ts;6}LaYWs$QO6^<%4m6^4kg*R]!4VO?Rph_@9}>aDoEc@.x-LS?}`08b~~g:' );
define( 'SECURE_AUTH_KEY',  'hCFByg>~5*!ISXvWqg=Nf.,0qBoiz=#}IZR|WP<(+ke+tWJj#Z0*=X!V@BUNuPnR' );
define( 'LOGGED_IN_KEY',    'C2&C_k*mSHUVf01ST67x]DM1?BaFHj/abQx_S5qetl=:KzF#P+c7NUy6a)yB:~!-' );
define( 'NONCE_KEY',        '_BTg7bx8C)T3=,uyO`+8bf&mCl-s!LW*p~&Ql+eH6|l!EaE(BtpZXWc2>k.()%1t' );
define( 'AUTH_SALT',        '$P~FG*z,XqJ;-^@vW81@JsP-ANZfr~?qk=SoEXh.L#Mu~qI!7:c@oW5`*i45ef=o' );
define( 'SECURE_AUTH_SALT', '0zeH29, +(S6=agd_4K){2x`yW>tJTrSGI!d*tG%dBMHft0_PdRROEyF~&&7Hv&A' );
define( 'LOGGED_IN_SALT',   '>mD;lPo/Y[Ef/V9WO-qFYNssG]pip^wIE7TE}l@%!gtE99BI5C>:gL@n`BQsb4)+' );
define( 'NONCE_SALT',       'Ad>}y0/3^wF)PK7KfA.C@!UHyrlh25H8Fi!z5h6W36s0?KE}ir[8uhjVCZS5.fty' );
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