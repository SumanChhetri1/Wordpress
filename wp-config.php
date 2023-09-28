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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'merobazar' );

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
define( 'AUTH_KEY',         'Owoq9!%<;J@/6EnusNzbSdG&77y.[(w3cBI7=~w@Ne$:oU[D|iU4?7oDF(nyiT] ' );
define( 'SECURE_AUTH_KEY',  'x%2,*sfXy.Wdc2A%ZKj,D8#Bsbmk%TQsNtS$?n5>5RrxitvG?^|.}8FcdW|[_GG&' );
define( 'LOGGED_IN_KEY',    'gXv_NIoV$dqJ%fI1wKhEp3d<EL`PqO;|mKk6q8mU0U%$sX<RlIS2:=jA<w`3FTg|' );
define( 'NONCE_KEY',        'Y{t3Lr*Ed_M{Zp,c31 S-~cTJ)+BMSVeC8u4{Ec1+L AtV(vxdv[6X&0+~)ktNS`' );
define( 'AUTH_SALT',        'qf.>iy%Y~Y?|,|#<oh#ytM3t|uYr W_H2U?rV{==/aj4G.H>HkM?H8Qa79m[[OxC' );
define( 'SECURE_AUTH_SALT', 'g1WU,r0[*a/c_PlwQ+Bkk<{.OR*:]uCyHLPd!cn+uCayE43szbaY<acn[]%}jS{P' );
define( 'LOGGED_IN_SALT',   '/*;#{DdtDT<g-!q-sqFE%*Qxi@NOD;{Q)ZgV[hv)g7gOc0o.u*p&=?Nz7GiX^)}T' );
define( 'NONCE_SALT',       'QdLR**Zm1HW(PSiP93#JE6)=N~,|E`vTS$SJ5,;4g[KQiPiUbbGb9&; y?z-TK#g' );

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
