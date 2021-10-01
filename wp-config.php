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
define( 'DB_NAME', 'tamy4816_eazevillas' );

/** MySQL database username */
define( 'DB_USER', 'tamy4816_madeprayoga' );

/** MySQL database password */
define( 'DB_PASSWORD', '9M[%Cy2NotxP' );

/** MySQL hostname */
define( 'DB_HOST', 'tamuvip.com' );

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
define( 'AUTH_KEY',         'z~}yEzhX zagg[bIa|;52|-KI-~G?a$P/$r^#Ig#hSMY~E)pc@M2naCBWlU9_$#R' );
define( 'SECURE_AUTH_KEY',  'S5Pp%Yv`E:wl;P22|m+CXiC9;dKS?8x>tAe=~OgT)&j9PlT$Vp?aX5Y6ef)~PR#S' );
define( 'LOGGED_IN_KEY',    'm1w*}xs,k6I@Vx/A wom^rAS9<H~$j7q]6:oL{o[DHz(-@g>=_-#<U;O*&%]7bj0' );
define( 'NONCE_KEY',        'GrarWw%LKN.7NpXS@?k(qs<+zoTphNG@39+Fa~%MI<[Bsq:a$>k`X,#_Q$`}[(s)' );
define( 'AUTH_SALT',        '||3q{aHZFy03k*e$QKje(3d]W(`c_A-?sDJp?54@eA{)eApK(atuj$1hwnk*%bp$' );
define( 'SECURE_AUTH_SALT', 'lrgF|]SV+,}cXvT_+e*<<6J}2/9QFs:(R1wk7Yk~y${ynP)OuR}rGniiZ1+t^0cQ' );
define( 'LOGGED_IN_SALT',   'hV`i[P68QK;e-]6]n;CG&KiDoq_@Q8AHA2@S/*+DXki#6?V>wGyd$B6hp-j@q0;_' );
define( 'NONCE_SALT',       'm@Y;rl^JCFTBA]b%6C^Nok7kTPXG.}Hq=;>kBau0q@2?$R.}w]B8Wrer&YF&,-Y?' );

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
