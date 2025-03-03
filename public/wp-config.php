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
define( 'DB_NAME', 'test' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'password_root' );

/** Database hostname */
define( 'DB_HOST', '10.10.4.123' );

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
define( 'AUTH_KEY',         ':Nn=R>|+m@>O|M*{#aFqGc^[Z,Qonl{/M](<gdF9vL@qNc((y1dl?*.qodE.MHm!' );
define( 'SECURE_AUTH_KEY',  '_g=sfu6qs1c}n8oa,w;~wOB.z6khkX}.alyI~oBW)#5)FIF%KC;c:Ali!/_LxDh1' );
define( 'LOGGED_IN_KEY',    'S=obmKcheax=wdvy*kq*F#i{i+mm ~>|/bnh}tolB~ZUJ?SSel3eIh6+0;WpOx5[' );
define( 'NONCE_KEY',        ')$ty/0KpQpYaYPAfYK=[$9%y&U:0bM5vg}]$xIBNA|g}&cLEe&*}NjyBS@DSXUw}' );
define( 'AUTH_SALT',        'WYjo{kaM:`-7 PHMx MG<CVMO5(,h:X5 3I{,vj/_I*_KxYydc:7s69{0AF90RZ^' );
define( 'SECURE_AUTH_SALT', 'o|(B uFL@`xg~V&PAx&4QcpfE!kndL[:3r[GdYuf>&M,NP^ ] |[x{jr*ITVSN}3' );
define( 'LOGGED_IN_SALT',   ',#<[/DxI5vPx#S.8?.[*hF@Ki6bzPCQZ!<4& WWSfal!m,Hu&CXw[`VfWto+cD=P' );
define( 'NONCE_SALT',       '^`,4w>W$Hf3e?R4(2*t@gY)v.{/`PsSv|;yI]NKFSL`z9P8X^l~uKh_~02+w.w)P' );

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
