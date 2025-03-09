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
define( 'DB_NAME', 'humankind' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '+gj[Zq-jYEE.mp9i]kO!1{?KxU@VI<|vRL8;>2rC~XfNjj<.EBW{Nk-)+U_<OjZ-' );
define( 'SECURE_AUTH_KEY',  'gGcqS~$eUA}@(O(j(x3bHX?G``=:UH=z8dJk2G<E9QhQ9^~obkfxdttTW!/o5rc#' );
define( 'LOGGED_IN_KEY',    'k0I?y9H[.*e .zr,DPVgu`e4c!$[kxxMm[ P=dHT}dHKNyZ?<gIEbhu0%B`nX}4f' );
define( 'NONCE_KEY',        '/e&HTtn4dZLJf6Em0fN?&ckoBrdL/n@R/1oHTB5~tIV476kx1{yxSx^MEx$u>Y$-' );
define( 'AUTH_SALT',        ' XT?$VE%d`^Jo0L`gQdr<l=i7K+-pk,WNnB#1r<,*{-T7_)7?6?wf*NGj1`t|UAf' );
define( 'SECURE_AUTH_SALT', 'w dCXF`X/Gi !XiL!G79!9wlGlny2*C{(Rs.c`48U4IXEm5)rQq}GJWW[$csTQCu' );
define( 'LOGGED_IN_SALT',   ']*hC{zv~Ft5U!7O(kF%2}pA$G)sX/a@180JK&+a(HEMEamivi]nW>h;fe^}HzIYw' );
define( 'NONCE_SALT',       'OMcmUBQ~~cHVAA*Oyg$bsao>1*#~+Rg>?VObP}Y2St%L+L+p]Pk|vD%lm+*vw({s' );

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
