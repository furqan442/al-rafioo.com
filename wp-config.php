<?php
define( 'WP_CACHE', true );
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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u521871898_8C92x' );

/** Database username */
define( 'DB_USER', 'u521871898_ThMtL' );

/** Database password */
define( 'DB_PASSWORD', 'PkDRuYVOze' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '}_-?VD|lPozF$,D!f0zG$r0ObzLH7yLk1cC$!9wZ%{vv.0#[bB^rI|SXlVuqWoW#' );
define( 'SECURE_AUTH_KEY',   'a#+l,A)}UH!871NI<y:Nb_}ro^g51FSB@U:0Nx7<7,y!#XWXrqFGVISTQ+Kl+e$V' );
define( 'LOGGED_IN_KEY',     '6cS@s@aWBi_H)l[AH!*d$*7Cn3}bzTIW8Cl2[SenziX<@4%q=4ngq=,ujn-3Iae-' );
define( 'NONCE_KEY',         '1BYLzPow25;Z$ @$z)Z#0i{_M3T| _i))i~VD>(sd}3Y2T/%Oud=:?X}aW87G3f6' );
define( 'AUTH_SALT',         'HtON*p]8/R5S}bYUpb2jd<.eq3Rww/xcQL fpYJ&H|JS?bFT2Tvv}S# 8$?x#DJp' );
define( 'SECURE_AUTH_SALT',  ';Z[-}WO^gI_Y,JH%V4aIc,o2f;[k}ne$@W9tSs g6n1zYv%*MFf)8!e)r~ZQ^ED5' );
define( 'LOGGED_IN_SALT',    'Q+gd-To`{:p/EA)*I6{qj!gTYDjf?9kl`ZY3 .|GjSbhfBqVXIL#tn&-zH[iMJ60' );
define( 'NONCE_SALT',        'n`43*&X+/ZEhihuo*9kW.4:k&!DuW7cEaN{3Wf`!sU:)GaMpH.eYD=:9fXpj_gr8' );
define( 'WP_CACHE_KEY_SALT', '3OG[}W<YGoF-R/|ZaEorMF:WJ@F[psy<(.17%=eiOJ)zZ- 9ZXcmBK^Sd9BFn}qI' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'FS_METHOD', 'direct' );
define( 'COOKIEHASH', '91f3583c5b122445c346b17f643f29ca' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
