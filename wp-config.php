<?php
define( 'WP_CACHE', false ); // Added by WP Rocket

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
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          'ptoixpP}Nx{pq2fIW?nF,$D%N~tf9@J%1{EEvr2=4]J~f$:6+^[JNu_8w&bvu;.0' );
define( 'SECURE_AUTH_KEY',   '9uxHJES:/#:3c3+#7,]+L?-w a:$4s9->JukX,~moBMa-I9X9yxuQrkAFQi-7Vma' );
define( 'LOGGED_IN_KEY',     'bc`0swIX7JzYQxNMc>25.ma|M1uK}w&kL}8B963)uar6k.bR&12pL*?vSf<}q9kb' );
define( 'NONCE_KEY',         'ZKNB|u@P%-(|mHwweUMSzyCDo3&1?G-m1a<Nm:59RaJXjAq<7T:`LR@~u~:ZQFb]' );
define( 'AUTH_SALT',         '2,[l!}mgiNrC5iosL?ss*,F_QazU,L?%*fe>&Tnk;M2,u<m}u+J^Z?,E(sXe]FbB' );
define( 'SECURE_AUTH_SALT',  '>Xcs9om-!-[Ryh=g36*E`J(CA;1_ De`4d3hV3n5tNfCGOK3+KWTA:t)Pl1`p,e_' );
define( 'LOGGED_IN_SALT',    'r+&fE;(=!ouasKv@Qmfr,&)IF0djJ$s=]W}p;WWc|-d:eDiv7LFNwl?Ji/XB1,:k' );
define( 'NONCE_SALT',        '8*F3N7A+-pD+Qq<*35#.oA_5XQ&w05r6[fb=;w1dj=#q?@^!$ELbLzQ7?0!3fLI&' );
define( 'WP_CACHE_KEY_SALT', 'LnQm;u!hO[q6(!_Y?gEB^Aq,{ch7^whu7OH,L1i_#QJUW.|;gqp){BuN|-SQ2YR-' );


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

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
