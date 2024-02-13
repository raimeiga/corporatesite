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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'C;.gGg6y%$V!BC-gEEu*6gV2[)iI7tXJp50h$f#n(k~67WK&)K~..@9J3:qD3H=h' );
define( 'SECURE_AUTH_KEY',   '~4NJn4E.]]}uG5fHQnwv]u!Qe]m4iZ_MDl|hX. TmvpiRM+Y1nPZF<sf6+b<~fFo' );
define( 'LOGGED_IN_KEY',     'y|njM6l0:ETBi[Pipjhvh 3b:N1hLTbJ~Z8/iO-b(,|-LBi8XYmv@1-xv^)o)[d$' );
define( 'NONCE_KEY',         'xrE>/~`$BxXUUk]8L36mhspuvl@u?@&7W/+I)fR|o<DtJT8wi/0X]>Tv`&S(b+rn' );
define( 'AUTH_SALT',         'g)U>/SVrdu[1iem~%:?/EM!xM]*V3[a.(V+]j q(Tgsab1A-)0l@}>4g>I=W96iV' );
define( 'SECURE_AUTH_SALT',  'C37f&xrl5/]B`_NW%@u`?i2rs,lV/?8H]!ov%ij-]YzJ7ToG1&R{0xIH!Va[R9PS' );
define( 'LOGGED_IN_SALT',    'u>n4W5^DT|GIKqQ%jCe9;^u=>)I_u`3[=Cv7xSFM/Faw*feCVMm];Ru2<hnJYiO9' );
define( 'NONCE_SALT',        '9dbDfCF<4`z`+uZ)SMOC<eZ;u,RL0CAF77;fmgNTBv@k{Bq,TeN6qp7,(fELB2y{' );
define( 'WP_CACHE_KEY_SALT', ']3+2N}KFkDyHo9*wP.7%0S+S0>dl5E.YAEH >KAY=Vs,J%ClIwFpE.?marA|=qar' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
