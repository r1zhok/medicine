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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wordpress' );

/** Database password */
define( 'DB_PASSWORD', '8b45fcd03231da92b504a5156a4d33e03f529d6994029199' );

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
define( 'AUTH_KEY',         '+$DD0@]hmug4<UEsUo`tq5K@?cOO;ERur`X#/sptKRl(5]=@r6t/HHnbY[qq~}AE' );
define( 'SECURE_AUTH_KEY',  'C#W;Qhq5EyS|JtR>_3^QB;:xe8_mA7../h+k2fjG[4OH<[ n|coF.^bK@u3)8Ts?' );
define( 'LOGGED_IN_KEY',    '-Dc).x2&^~lhQtEl)G0Sl*ez?PY0n;K)%4WpA_Ybb6CPC@HX{a=td?:8mWem}Xx6' );
define( 'NONCE_KEY',        'bI?@MqlQ)d3>f=(Ss9|P/)X66ta>>f,8/Kg]5LE=FO%N$:Cf/.g{OfBC@ts50T>d' );
define( 'AUTH_SALT',        'U>5qiaNcXKn]T10KA(8iPl[NrAZ}AaZpkWr7Ny.QE#(eAp`hQ!w49{[S@^Wlahr6' );
define( 'SECURE_AUTH_SALT', '|L?0s0KIziVQtSr0adES.=FqyRk4!!U9bs>H4F*]r$r#*KIU%A5:+iOd.NYJ E[F' );
define( 'LOGGED_IN_SALT',   '?XeK&~):VbiT[uO>?Iy3=p&x!apM}1Ne[1I<|<(L0A2jNU`AB3PGbp|qRaXm.2*i' );
define( 'NONCE_SALT',       'r!Q1/83jyQqyFrR>L_+(;&zPs8mXe$8>a>/UoxpRSWRuF+v}Q1(=)VsW.`|} j}F' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
