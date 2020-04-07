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
define( 'DB_NAME', 'wp1' );

/** MySQL database username */
define( 'DB_USER', 'wp1' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Admin@121' );

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
define( 'AUTH_KEY',         '3ySTfV2@PiqfHpB2(FV?N^|uUy4lWz ULe,H!+6<Lw^J3>A?}B,Ti5[~b]1)B)/<' );
define( 'SECURE_AUTH_KEY',  '=|}-|T[_WPg]`6KI|AoB#EN55pkR*)eKLKJ+]/@bf&`|Zw[xUMcb@g4DEl~sr2PL' );
define( 'LOGGED_IN_KEY',    '%eo>!P4j}{)o9byEaMphG2>6iRXL%4o*p+rXwN^{*(+1CvVsVT5M3O[6Okh<]]z4' );
define( 'NONCE_KEY',        'nf<WA-~6FJYNbF>d2!iN-S-v1{r>l_i D@p=+Q]!19$EpH)z)Xxw8`1YRi~+xq3|' );
define( 'AUTH_SALT',        'SG`yxQ6wueOc`nd+V]^$QLr@x8WCTz%zG6c/c).A0P=%o-1r<[?@&<eOPpWn/XjS' );
define( 'SECURE_AUTH_SALT', ' p&uZ!`%B&2B(Pxw`9YGN4?[{7K7v!qD8NlK2%RkX#lPR:Vd?&bm$0H?G6|qV!@u' );
define( 'LOGGED_IN_SALT',   'v2#*7Hl~%69np!p8$0GoU@SdA]1Ve<w^f^^&d&yV+YtS*l@BBS!O9`E72wIp1&K5' );
define( 'NONCE_SALT',       '*_@Hmhy!_@bnfW|Etd1lK(6/U4{3!@+~.>.OE<&}Sa%vF{u$(CD[{<sN>>(W}7ss' );

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
