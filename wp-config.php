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
define( 'DB_NAME', 'FasionPoint' );

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
define( 'AUTH_KEY',         'tK#]-QDg@YGlP%eWY-!z;* 41MLo-ne#-KoiSi4]LNY9q5-I:[:2c:^3V^q_Iizz' );
define( 'SECURE_AUTH_KEY',  '|jG9D x`FT r;x`R]S6nj>soFN4lZmW9ml#UmmGYtLJN#qe.8pJ ^`$I5!FFXj]~' );
define( 'LOGGED_IN_KEY',    'HR7Um.8BdLGsb-v]*N_+v_Xjy][|Lz`NdFzOO[mSN,@/mgLUik!D4&r;1}leTT8J' );
define( 'NONCE_KEY',        't[U lmgUpCh=TlKw0;2hdcTa/b.*nLFn|}OxWj@/0)F^3|O|2|B,`m>[I-w.HtIF' );
define( 'AUTH_SALT',        'L[cS%1C~C7.n8.LsvH|-D03:!X hhpb(c3 >A@#kQMA/A.SSCC:O+KI{Uf5o&1&#' );
define( 'SECURE_AUTH_SALT', 'xA#j8OH1Dg~:VgCf<vHXK1-)g{I=1:hpT?Ib;^D@Q;>w`s@o47 iaSw3)$I(FT3H' );
define( 'LOGGED_IN_SALT',   '6;}]H}K1(JDYqIH}<0NRu`#cnl`+?<kuX {hvBzH:X![A&B*5IJ$D=9$s@*sout-' );
define( 'NONCE_SALT',       'v{n6jA[,&k$nd2/;7SFN?a=}R;Nh4d[/l8<olIou.@8YtU&_Sj-EXXwT(@YM9b<)' );

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
