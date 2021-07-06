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
define( 'DB_NAME', 'cake' );

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
define( 'AUTH_KEY',         'X}wb-vRS&SA&R^}{BYN&3V0!U_BfQ;ezArtmyU30+Q8/:{%9BP.=_>WqT<M0m|WZ' );
define( 'SECURE_AUTH_KEY',  'W={p<Dg|+hnoE`Gqg5)0[2Y.kH?uAzEI7fT5G7NQRhwknjcbV6IxqTl[8[QeFq+_' );
define( 'LOGGED_IN_KEY',    'fq9Q!2FEr)7SJlrHF*cVLA?o^EcKQYeP#R0VN]I)k$WRvcf4_i8i}L8<Ukue(bSO' );
define( 'NONCE_KEY',        'hTA&QR7Judb/SH=&UmhG}(!9woh}@~}ocE/6rlsAO>me{6&zj>Pf54Lx{rvyS~>;' );
define( 'AUTH_SALT',        'Wtl&yw;~eaXv0ukfWfbl+avM~<Z}b9AO}Qb|vgp~=QVGXiIiiYS{yBA/ae`bHmf/' );
define( 'SECURE_AUTH_SALT', 'JlKb;nB.8WPwCaT2)p.Va5 4P*/7*+(6e6?781_#T3N7K wrf+!CZh^%n EWh{d]' );
define( 'LOGGED_IN_SALT',   'M^m0s,{uE@^ H,m!Fnj@Kg;42HbCMa7H04E3S(IW/$`*4/[B+kcafbI>3+;JmEOR' );
define( 'NONCE_SALT',       'e}*hb4:oe#%R!I7*`%c4o/aM3b2-J_Av14SBeK[!$.ACxcL.|=w2GBw/t+Zt;hrI' );

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
