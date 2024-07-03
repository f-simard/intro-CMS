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
define( 'DB_NAME', 'wp_cours2' );

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
define( 'AUTH_KEY',         'GK=pD5wJ3*g_}4l0}$&sMp&rjh=(P-xN@~(Btidmk>nX<EhovCCRvE)wT(j_ M-z' );
define( 'SECURE_AUTH_KEY',  'P`Xz@9;I@PG}blgN2>1Y.1%<pE}P|:XsUtoA_BmI_wo*5i$dSWHkWZ!ic_BQZE1-' );
define( 'LOGGED_IN_KEY',    '3w7D4/2qy/=#8I&$gbo:.hh0oH+&up6i&7fP-Hp4)PNR3Aji?Ig0]PMOeZ;K5z[4' );
define( 'NONCE_KEY',        'lhHA;tN*X}*]j!F@F3>dDy72>ravkz)3:U@xCz+Q/!y|gUL~];,5N`]QjpxD%,!*' );
define( 'AUTH_SALT',        '~G:aQ>]7S@kXwXas2 .2DnvzZ9r&jNXnf&?{cSLk2t1o0fX@&(=<PyM`EaB)K3V|' );
define( 'SECURE_AUTH_SALT', 'Ri8OGs^N L[w+!++pLiP-~YR&iwd}UiBmfVaz-P/&6|NoQxuOHqk3KhfzH^O+%zs' );
define( 'LOGGED_IN_SALT',   ')uv:5QFT}c3 `s;_l~2QxK)!|wtW#Dw3w+$8<iO(/BH7W?7R_6**jyK+q;^*Ud<=' );
define( 'NONCE_SALT',       'Ke5jX^]MDDs]=HZw(x!^EjiE~r9A(~&FuHu B Z1%A=yzd3rXU1y6_[P.`i5&s9|' );

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
