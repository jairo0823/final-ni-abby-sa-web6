<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'coffeeshop' );

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
define( 'AUTH_KEY',         'HuJw;Ci1INhY#8+({12u7kY:Z8.1`TOI%,38V$],,TMA=iy]E6f+M}3Wg!YzdK0Q' );
define( 'SECURE_AUTH_KEY',  'q)g4*-/vjDKk/~J5c^m#Isrbh)(&l6_>V?H$(B3pX[aqaZl=q;doGi^M}3-Z$@#f' );
define( 'LOGGED_IN_KEY',    'kHS2275mM<E=@0X3qkKbV<],Fc/CAnIg2ed>)|wa3x,+>O4a=WUo-aQ6L3ccM$.1' );
define( 'NONCE_KEY',        'nqlVgV]Z~ttbK&(9ZdCq7c%pZ3{z-F7M2x8Tf?|F8y{hg;y8#R!`){9$ci z[~R~' );
define( 'AUTH_SALT',        'pDdm3ZH~g&%;7sJ-91_wU!1~X!{@~muxac}a|=O&@o_ma4D X+rDWN-Xc3~Fk7yi' );
define( 'SECURE_AUTH_SALT', 'SJyn~j(3<k)hPWiLYIXs|xulx#gb}z@`%558,1r8tYsk,X30_g>rokO=%e=g0SMO' );
define( 'LOGGED_IN_SALT',   '^K#A)[5<3s@5eV6mN>{f1AS):8+zFM8qTtAS9CUJZwEaJ;^`eMyZSwHw0%gEW.5I' );
define( 'NONCE_SALT',       'o^+]<Ud.37Z.Cbv?@ai|I=?C+Qu#z^6BX~P2n93*[;K72:;a1A9Q%C0}gRs{acze' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
