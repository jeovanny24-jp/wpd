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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wpdw' );

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
define( 'AUTH_KEY',         ')AF7!BzQK=f2*XRG(iaXnN9w<5I~iZ66mQIE%)fRAgG/$je0iK*V*f+%yTTb8 RU' );
define( 'SECURE_AUTH_KEY',  'wR64<^?Nu7;2[R!@s wGF#Y/#y*74NZ4K@%G[>G>;P,[wSo7OKq:^pKW~T_N+2l$' );
define( 'LOGGED_IN_KEY',    'K_8aA_uL7=}Gi<+LVPmLsDX:>Q3fy(!~fI]~5BHO[9}v&|;@CZH1W ]ezcs4so(v' );
define( 'NONCE_KEY',        '7J7#W/2%.AMKe++DcevJ!Ub(FT4OY31GmXveKeq|9rOghKk h{Lgb tT#?LvnfS-' );
define( 'AUTH_SALT',        '=rd#3[[y,^uH5?6+fPN]eYL3Y3e%TPLhA]{_YZ_MP~h4 xvA~2Cr(IOZ9mo?Pk/Q' );
define( 'SECURE_AUTH_SALT', 'Ywk>sTOO3-GJ>eN8=JB/s^92Z)V$ow1-Cx<,z%9CtD@j.I3=QqGO83#v:x.xQ-mv' );
define( 'LOGGED_IN_SALT',   'yFd0>Lw2%jB_fH/(A ?:;ApXGIzA~S*bo<DjBn[nk({]3T}By~`9Fo.iT|,(zcW[' );
define( 'NONCE_SALT',       'CFKkN&>FH$o/n@$RHQ])~l+CCcol#=_3-Sa&$c0Ii32,Dk[Tl]ZwEUpZh}[?+K8{' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
