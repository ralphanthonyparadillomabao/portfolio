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
define( 'DB_NAME', 'my_portfolio' );

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
define( 'AUTH_KEY',         '@A<#7yeTW@zRYMGb86`).,eX/)#3%/v(FTkH5v-]>aq/mk:BF_i[2p%b<6%]_Y[b' );
define( 'SECURE_AUTH_KEY',  '(=[dAFQb1ZK%^x*b@ku}cEz31SeNZuWK8]:3YsO$(P=t{g8NO5f1u1ymgXBGG|9;' );
define( 'LOGGED_IN_KEY',    'mZ!PK`iJnK[b`;*M~eAQA-@o&AF%sq_x!oL9u88r!8z;}q,gT+d88<T110zqEu~g' );
define( 'NONCE_KEY',        '|pY.HwAp|G&-18kz|oX&JXQ<Yt3Q(8J4KlWGAN}f.M26qvbpw-NSfnm/@jgAvy#W' );
define( 'AUTH_SALT',        '>#y)W0g[z[$9,fI}|;oFdgVmhxLtn@z:aT<z=Vd}QCNn@bA}Hz1 Zvf~f`g<>&=5' );
define( 'SECURE_AUTH_SALT', '9W8lIFkFrYUkh;HKP{~]/0VS0OwOp!=H0Da;~l@:>pIB3.yen(.*jQ )I{oOi7&M' );
define( 'LOGGED_IN_SALT',   'oosT ~Y8#N(XZ:^%@H>~j!`IH,iW2aWlHV&x=J<jL0inf4tNnfQFII#=:g n,nH<' );
define( 'NONCE_SALT',       '~x[aAqe*@108BJ@_L5,!NG:wa;}o=,G89l^ ?`l2XPA=G-kAQfbo{PD=`szt/6Ik' );

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
