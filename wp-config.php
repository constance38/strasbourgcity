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
define( 'DB_NAME', 'strasbourgcity' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'k]7zYk;[8As{n;%h-mEAaNTH2qC0rcy9ExdPqN[S d6^k.Firj+>KItqkR]mPTA|' );
define( 'SECURE_AUTH_KEY',  '&gJmPS$stTY0QHf&{P4xZH5C(m/}Anw~O*Z+,V+A5lpA[Xjox^~GBKJyfd#:nwbV' );
define( 'LOGGED_IN_KEY',    'g,zRcffV(tJ`%+}0zp8pk8EjL+9HH%:3CXb`fm%MT9V{|YANQPGM!3Ry7sP#C&w)' );
define( 'NONCE_KEY',        'Hb9F>,:S~il?:O>dni9=5Yh7J MZpWy^=JKz4O@jE3i~ Q=uOi-yx<nibR=Asf&V' );
define( 'AUTH_SALT',        'P<o&TtDb>TG0@yUShvO9i6z)92@vA[JLk1&p~(%_(H$S|F*PH+u(<ZEJ6x9!@3R7' );
define( 'SECURE_AUTH_SALT', 'ye y19W*5fYWfzo|o]`o;TJC.{4^)5cZ2r~/>+F]rHOeLH!}#62@@-GCQ>Q(vG@w' );
define( 'LOGGED_IN_SALT',   'QEW=(& SvCqR4Be#_3YUg|<[j=WLN4NQHY&Jo:PE[Z8-7FYM=lGl/p!uI[K6>W.i' );
define( 'NONCE_SALT',       'HU[};<ZC|Rmdi=EtLNJ9!QSi25e3$g@ad;z27lH+ggN$KHTO[D*9*~%6mFHR~ On' );

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
