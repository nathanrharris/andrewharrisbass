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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wordpress' );

/** Database password */
define( 'DB_PASSWORD', 'wordpress' );

/** Database hostname */
define( 'DB_HOST', 'database' );

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
define( 'AUTH_KEY',          'pI6[Y0.hp#|e:BJuglEi: wAaMHOm^,ASqx}wzgaPTC5D&co*S#q7lZS7E[k~7y2' );
define( 'SECURE_AUTH_KEY',   'BNIMw-%JN+Gr;`FSC/:pJGux(:zp%On0R.>]tWa@nd0inw9WwdS#S$Rac+<)eMJ;' );
define( 'LOGGED_IN_KEY',     'P{NyoKC2-9/NCv@A(Qubd8Yuz%tJ(+p,]AK([Ax^pKcYwM5oAu )~lO7]LgYfSuW' );
define( 'NONCE_KEY',         'i&I{(O`Gc:7`vcMuy2sEo>CCDZ,)j%PIoiU&`3lMObXu2@2CVv#!FfRRV1]sAe-X' );
define( 'AUTH_SALT',         'zhsMAsY2S [*bIBSXc!$,R;$o0UUo`h1 6lrPAxCt@+y-l%PWLgrdL+E[6&n*NT2' );
define( 'SECURE_AUTH_SALT',  'p}Y*R!nw==V+iV/z[^)]?u>V.Vf2j4G{U.:d-)}m2q::)<Vq1]n~{m*]q&x4ujz#' );
define( 'LOGGED_IN_SALT',    'JR+,F[{+FJW79R8j/4Jp{7JmPg f.+:kc7sUD>9C%%+DE21I:0/wa1WmYN-!s7zG' );
define( 'NONCE_SALT',        '<`]?&v2a14~;t!`#23HK0J{k4>8{(=kRG C[#ll+.]v< zOjRtC^)ku|4|P{GDU6' );
define( 'WP_CACHE_KEY_SALT', '!R`GV?L>cnX}*CxtX#DLdiWG37@iZ#Il[}7n~$}T0%?`5WG&rO5Px2KprNP::/LC' );


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
