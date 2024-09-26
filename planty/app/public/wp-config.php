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
define( 'AUTH_KEY',          '~PA09M-AWP%+zjb3:F#Iz]me]g8_&#Vq{_-xMkoRYeplmv:mL+NUAeI56$wUa&g7' );
define( 'SECURE_AUTH_KEY',   '<63l=)?SKafoEFB$gK{rS`B7vw ,)e<!=YoHA}$I`T+dwn12d.jL8jC_pF/E6k>C' );
define( 'LOGGED_IN_KEY',     '.X%l8=ICZCygGu3~Xf<D|@LVzs?HGI<4Po&L|AWjg$-4mAiRF6UeH4ykXZHLba05' );
define( 'NONCE_KEY',         'txwtuYI:]fTP.Uxgoh$}ch]}Y4)g?;1MH]]b^N%6f4!6deE+9]+Pqd?XYF&EM(eJ' );
define( 'AUTH_SALT',         'Cu-`a>?R-FNP;5/8W!m.Khp-.-)mi)se]9/ro.E0n1D9@[o1F)w_N1)dx+^HM(7d' );
define( 'SECURE_AUTH_SALT',  'DZs5*Sc]=bXGTypNi@:}}o,iqI}e?%M-4 H*%x#P<gJbvp)s74;_BT9AwS,-fA=[' );
define( 'LOGGED_IN_SALT',    'BljkGU0ZA+wA$ppD|!kF=dd%Du59lLVRY<}T6jO/iuA:|154IV$Bwwv6zFic&~u8' );
define( 'NONCE_SALT',        'OWy1?LL28q{R5^LKS}6Bzl2Y#` k.Xr0JU:FM+8 AQ1yJ^&gsOC?8K_?sNW@Ak^3' );
define( 'WP_CACHE_KEY_SALT', '-6Y%Rv/nQ.C>RP-EL2m4B#3qlhD7GQ45:B3H<|t*>R3e+7,xCk@b4TC7>-<ia5L%' );


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
