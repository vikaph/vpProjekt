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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', '357-22_55399' );

/** Database username */
define( 'DB_USER', '357-22_55399' );

/** Database password */
define( 'DB_PASSWORD', '2390f7c8538fa7229fed' );

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
define( 'AUTH_KEY',         'ZwP5[5QOxbc}:/(YX] r)W Ek~sd8F;a mvi4>tBR.}w_+pbj*@fM7ll=<*^Hd@&' );
define( 'SECURE_AUTH_KEY',  'pEv*SD5+`-l)_pipzpY3*]c?@Yunb.])R*%|Yj@G1[#yXYoY3)LdsS>:n/H?&07F' );
define( 'LOGGED_IN_KEY',    'Vxf8i&DDwviGh&Qqe%hDMCn#iOK}h[)^@$^Q `9&[amFgC(P/hJf0dSU1hS]P#NH' );
define( 'NONCE_KEY',        '4x.,w9d,=uJHx|o}qk2/I) ox[O?0,3GIG!W6;!82Lp3CPVd3M^z]2FudB YRV=~' );
define( 'AUTH_SALT',        '#A@&;;Zyi.Y77U[/4^-j?mEy=mHVa#3[BXJS~:$<|VsmrUR1iE`N>EQ3r%<%Pebe' );
define( 'SECURE_AUTH_SALT', '$7xZcp(YulGdMoegQHr/l~P,u%W>S9iI^o|G{nVeI$*%|jx17E/7|J}$f;x@aO!0' );
define( 'LOGGED_IN_SALT',   'bY.. ]+CzUX:.mfb1r-i2LY&W&uj{t#/p=2h.IrMy3rc!.ivyL!>b~{d`ZZHWFIz' );
define( 'NONCE_SALT',       'G3g+v[Ci}ODqU([F:OxbR:ya.AY+&rge`UCJ}D>R]iF]B*90j~=/.Q5;_F2PuMH/' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'VIGXM_';


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