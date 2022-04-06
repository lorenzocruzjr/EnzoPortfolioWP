<?php
define( 'WP_CACHE', true ); // Added by WP Rocket

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
define( 'DB_NAME', 'myportfolio-db' );

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
define( 'AUTH_KEY',         'oq;t|$G-!.W$SZD=bBxkB:sY@F#870$f_~qZY[ -`01y)~2v^>A#(Yk@}0EX!KMx' );
define( 'SECURE_AUTH_KEY',  'lWi7yIz@B*vy`&engk?@2g3TrZPe8i5EOG4jm;XpH2dTT8omXQ<(T;Ge~7>3u8-3' );
define( 'LOGGED_IN_KEY',    'DttA=lW0`_1w5$]w&@rf_^WZQ=sf)zM+zSu3v;,TB!(c>qTIxbq NkK~!@CS$+5N' );
define( 'NONCE_KEY',        'IwEh72*N!*ue[5?mn;R7@Sd^@Ut$?A_K`!|_Ya|3Lb5}cMGufr)`f~dQmqKZB%Xp' );
define( 'AUTH_SALT',        'Zz=<uxQNEii(LVHe3kbC|{GQ(r-##//w:C-PZqCP8%A%4+?pB/-lyYNE+4}.-?*5' );
define( 'SECURE_AUTH_SALT', '`2H/NxCX7O2^Q&{z>WT~j:-UBZUn8U?yc~[YCGOg{bAEw|c/]c`h0_b 9,BP:H=+' );
define( 'LOGGED_IN_SALT',   'h7y}W)SFVl1gcTvjv:F>$jf{7qVC2(zv#~]w(rw.Y_B.Udq!Z^|aE<00DTFm{~m$' );
define( 'NONCE_SALT',       't$.j~sB=bvR0oiI{/wpk>6 9@T5:Ca1uSsGk6nVa)u]*{lW^_Z2&c)I$W!kr`K:C' );

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
