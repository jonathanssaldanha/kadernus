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
define( 'DB_NAME', 'contabil' );

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
define( 'AUTH_KEY',         'cy8@#WplwCHv2T]%S36}ZX%67MWHlN,g}XN|jMh#/_4( wj5|xOc{-$co|CTERSU' );
define( 'SECURE_AUTH_KEY',  ']yi((>`=P{ICM3MxH}y]7Z7gOc-iJI Wkwi?BI4Pwz@GZPjDMRtH4N_XJ{/:L%%Y' );
define( 'LOGGED_IN_KEY',    '&;PpsqEnX?c+TKUTJNH:MakspfKf#+LC0wZUd,zJI1ts|IQx1)JmP.oFpXL!vwo4' );
define( 'NONCE_KEY',        '{lOk_.9H3IL};dn|o AB?+5iTEOGZl>H~fKfcJ6aL,1V#i9M CX[.Fl#r8iX#~@L' );
define( 'AUTH_SALT',        'z*VS,/bFGE7}gRZFS><U>~F%kY+J]vgZG[QnBc,lzkHpf0#J*EKM7x)FJZ25{puS' );
define( 'SECURE_AUTH_SALT', 'fQ:AGT9=N^j}ZT?jk3W|)AxP}tjs#qudH0TB5+0*v0FDwD@PvC[ZF!l&]EFeGKHa' );
define( 'LOGGED_IN_SALT',   'Cu^WE+0~B@^Ge+L>0?4`3iCd][aEd?0Jtw{~[-I.~mkT_zGW;&v,F{q~i~VLUbp3' );
define( 'NONCE_SALT',       'bI_$g]M*]um >Hue6pz08wP>1K3R[f}t4Ho;2cEk.CN&`MlG1]#<LR%*sYJ(vD{^' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'contabil_';

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
