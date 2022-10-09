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
define( 'DB_NAME', 'test' );

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
define( 'AUTH_KEY',         'P|tt!+ySRG46ODp[chq+AS)iqYFvU;wq2.SN*zHXr1LRpsqzBX|LWj`rS:P|Lx?X' );
define( 'SECURE_AUTH_KEY',  'b`1lfFT14t%Y])<P1p|R `,r|)K`D+t+&KT+xw5]1nq=.%dCDWyFd96PToy<NX.N' );
define( 'LOGGED_IN_KEY',    '@qjH^Z%vh.t`$9ZocxbwHGL)ujyT_QijVzAo?`^P?Xn<#rR88E2]>oWtV_}js!4S' );
define( 'NONCE_KEY',        '_3:Yy|f##`o*zWlNox0Bje@v6a%9IrIQ_9Qootp31 *o8x,c$xu^Jqk(/uzhC;pB' );
define( 'AUTH_SALT',        '<>u|5X>K2n<Za%VQe7^01kl@+b~Yqr`+XLG9SbCr|L0T<<&BPM1Jq0L#H[%T|~;D' );
define( 'SECURE_AUTH_SALT', 'b]Pc]lCtCHV)Y8/YLJ+Q-6v-iqv_,qng<=p}Q5C*aai3nrM9uIQ!WAE#57syik/Q' );
define( 'LOGGED_IN_SALT',   '?Z/=~n P&N0a#h}h]S>O/Di${FIwKr3/HQVq<p+y/?_4D}_>*.1<8,|2{&,kD#;A' );
define( 'NONCE_SALT',       '^{]i9[dpc;lUg8C>]$?V?P[Pk!8&[W]oEY?*[fl)!.62e]:9S;sVX!#Q@@V2Z>`c' );

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
define ( 'WP_ALLOW_REPAIR', true);