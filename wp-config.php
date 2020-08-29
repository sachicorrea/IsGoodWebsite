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
define( 'DB_NAME', 'good_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'eight8einstein&' );

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
define( 'AUTH_KEY',         'aF.H{sUf8eCG#^?t0h-1Ry1.W*Xh?q>@>1t&fQ(v f,gF:h=l  -Z_uoxTQvbb?J' );
define( 'SECURE_AUTH_KEY',  'VDds<M@eM`uc%_m}-urwnCU6D`cF=4Zu.E{*(n|aB|ry3z9KilES4eW^s>m*7!<=' );
define( 'LOGGED_IN_KEY',    '?A:T1q3fjoev 8x*byP0b>iyiCRoJ1XggXbcii/i9`khT{CxNXov;_rT_3X[{07i' );
define( 'NONCE_KEY',        '^Pxv=QN[GPNASh$|E?7(7d$;}%E,-O1yo(WxvLhBEh&j?=#-=Zh3!z(|[a5!#=y=' );
define( 'AUTH_SALT',        'Tap2;$6=igX{@$7^Okq~iDWq=Yckajn tbN_()Ng=C1]/OJQ$G:-FX MGf6Pg{?*' );
define( 'SECURE_AUTH_SALT', 'ad&:Ft*vc&e`2|~UK5f=TDbxz9<_ysxR4xwcG%89e>C(:l9faEksX,GD6Zb29|^u' );
define( 'LOGGED_IN_SALT',   'OF`M0)yC-<$a|efVu$G>61Kf}xMxaj;AISrV#BKY,(TTzmgW$:ZAh&UsgKR:0`&b' );
define( 'NONCE_SALT',       'B:bBoy?A9[Vauq@|.1 ;P6k&sc0:jMzGZ!~,E[>5>,mw$Mv%OJ%#,jG.^[AA{-z@' );

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

define('FS_METHOD', 'direct');