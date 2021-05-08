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
define( 'DB_NAME', 'Pkhan' );

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
define( 'AUTH_KEY',         'S&&dHA!;;CPK_*z6adbBc1*=),2DOn%Wi!!.NlGUeN</x_p=(95IOG{cya(:50I=' );
define( 'SECURE_AUTH_KEY',  'uNJM[oZB$kHW$Q2{d.N6<>@4*zieF}{hB|+UxV-]/pO%[aXJ.#thYJ-6[&0z/xF=' );
define( 'LOGGED_IN_KEY',    'W~8t0?uQ4<G>b5u+)?4)#`Po ivVi+{! z7C6_*-<~BK|i6@HhpoSU!*bCrKL2ff' );
define( 'NONCE_KEY',        'D<Fd)^QhoRl;d-Ii,4stJ2L) W+fa9(CncehYUf ]@oOjuhi]N&vK/e*<G@aRg|4' );
define( 'AUTH_SALT',        'cedutDSQZ/)mgY@#8n~U&)=e#RLPDS;42c-e:/p}*3L*fo4,7ZF(G*VoUE7+-|X7' );
define( 'SECURE_AUTH_SALT', 'fm3k[WD0AD[?:Aqm5VB>mw?@M*THjm;K~*O[WM>1*c!ff?.u=rkU,&DCDLV|:WPa' );
define( 'LOGGED_IN_SALT',   'gG3yjO#+e@5/Da!pm|.cHW$kO61BG_7RR/z>B*=zdvK,3MAfh?5n:lw7X2[J%?;p' );
define( 'NONCE_SALT',       '`r8$@NWK1kxWK1O~z9n%mOtLFOi[tP9gt2m?K(:9MG_*1-~H6y0XZpa{]:A!TGcr' );

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
