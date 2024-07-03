<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'intro_cms' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '%U| rN.B%VKl{AJm|:YE?2G0a82K7EbPlE`DjH(5c{#}^=Q=nNWv:Vu&ma7[XKpN' );
define( 'SECURE_AUTH_KEY',  ':;VtX$u7E%:iIf9Di[+MV,I$W<y<K>#gE*_q_.l}7py>o(||}u_~?[K#CnHk0D5:' );
define( 'LOGGED_IN_KEY',    'kY2gx<#%L[!%c]gnwk0Z7{iB^&Xf2+%(k^~$k/#Xwe3}VHPtQbIWcy.yuDUU~3xI' );
define( 'NONCE_KEY',        'VV_Wzg4PC7KDn)t%Cjg4c5r!GB=0sjhTM(<ZYD36G6 *8U7jCF}SuYUb~mDCMRXc' );
define( 'AUTH_SALT',        'LN$p|Z06#84u<nbdSfqE.#_5eY8xmDSU,:)21-%Zp3,y+MFkzuLiB;lLo+ran,GO' );
define( 'SECURE_AUTH_SALT', 'hY2q:EqGL2m]_D2pD1&!.lV?q#3V&,~7ul^yIrTsM{>Jg4h5+3h9Jh/(c1e_n>-~' );
define( 'LOGGED_IN_SALT',   'r*+CnrFll;9ow}YRI!!O#$07VN(3R10i$oE/bM~^G5ij*BCSrzj=j_ZpcDYw3f5y' );
define( 'NONCE_SALT',       '4~Yxe*^68l6/:`F:$Vz+6xfkQN-O&v)|=O7Ap!,=c*|6dS<xCTE~gtzH3W3<H)!P' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
