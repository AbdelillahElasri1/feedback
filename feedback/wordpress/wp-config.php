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
define( 'DB_NAME', 'feedback' );

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
define( 'AUTH_KEY',         'Wv)A.yVwa9nvg/LtI|kOTVfDY|)2%%sX.K|kLWH.;DK|[F#%,T-Mh~/4LpN6xK6Y' );
define( 'SECURE_AUTH_KEY',  'a7IQK8Pa9Vmm7zVP63X~iJv2MEw3In_k+@7J|Nb}Vd`U#MKjzpB|@1*m/Xg[<MCD' );
define( 'LOGGED_IN_KEY',    '{8xp{cIB:`HBi?3cc7^lCh~CE^D[!72b{qEJAs^g!&=zWT9a&lSKyXLbCZF!)1E-' );
define( 'NONCE_KEY',        'x~wbOPp!(atdiO[U`h-.B1>2u@fx`XOH[X-pw/h0+Ye`$e%0jMQb,i4ST+,THr[q' );
define( 'AUTH_SALT',        'vx2(d6K>2~L`q}v{:Uf|3VAV7_qld6@Pe}=(0iTgcx%WqN~IX94~k<4Z@C-U1}o?' );
define( 'SECURE_AUTH_SALT', '%X`DY5FL4(4ct%;Zw6{Mf7K* 2~@,v 2dk69wpH/q hmw* X D#N)y&QcfsRa~O-' );
define( 'LOGGED_IN_SALT',   ' 0=X3 KiV$Lj4U>CAv6FW34QO))|{-X}I~y#|@rjkE.Dnkv&^}|9M=~`#)~.Pua{' );
define( 'NONCE_SALT',       '8vMaPdhNQITH|4g[;|ef_tXCETA`r|GxGI|/3-xw+8Dn=BS(rO6lXZFDx6u6)<6&' );

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
