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
define( 'DB_NAME', 'jezzine' );

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
define( 'AUTH_KEY',         'ZbUxJNQ[;*m6 RfciuLQLl%fj8DL [0z6%y-eS)BLCw#m+Q_~L,ti=$@8T}.GXIM' );
define( 'SECURE_AUTH_KEY',  '+nN<;7zw.^Mn49cl!c|q:VdlAVbwjj!mP r_|;BS.A3!7M^Ros{hs!HoW!O@IdtU' );
define( 'LOGGED_IN_KEY',    '+RGJj XE=ofv]/g9YStKkM8hVH{ako/~xZdl;3[6Mk@zH^=&ADvDJ[gokTolb46g' );
define( 'NONCE_KEY',        '`lzXmC2o#NM8G*/^b*BD0(s5DI>Vsz{d<nMhK-sQK`QX;xJDz!zkz7j`{;l;!ZnI' );
define( 'AUTH_SALT',        'RqJ=0bEi*Lh[@hxHo 6`Nl/)|Y%z#_:@CxzYv(;T%^,+ .Z6x Oue)SLTg+f!WdF' );
define( 'SECURE_AUTH_SALT', 'EG3X%jX8p.rU!jTD8~mc}+!tU)j$(VLLDf0D}PIM?JGbu=Pe&I:oW62lvsY+T[`2' );
define( 'LOGGED_IN_SALT',   '5AF||_?Vrk;Z^h@4eh%v/{:E%9KQ:w|N%j>G>$H.xzXA*G^LD{;~,V[.@s*OqGBy' );
define( 'NONCE_SALT',       'f*OCOyZANV.UeN~i<H92n^Xp-CuD.9$1yx.~5GC;x>IqHnbw744(/E51Nl(FhE#-' );

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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
