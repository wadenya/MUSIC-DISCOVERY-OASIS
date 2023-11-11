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
define( 'DB_NAME', 'wordpress_01' );

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
define( 'AUTH_KEY',         '8(H|EVxj>ta`IIV]wFkWNot8xa3{WFc#4ctzB-m$Jp?h|~iZp3Cf0Blz/!*0HD_t' );
define( 'SECURE_AUTH_KEY',  'l;D|-~?|[.z!ZjK6Fzmv1XJt+m-iUwwSN^B@+^&kE=<GhC~e:WXI{<TnCBd$a^D^' );
define( 'LOGGED_IN_KEY',    'ns7Vm:UdC-*X![)`;?,Ij9L5<@Z};QhEFS-5)N1 @H2`/X,LU>z,M}{8P_T{8O2#' );
define( 'NONCE_KEY',        'h+aFuPDoM:VS;+|xF-FyRtAJ KB`=F+^F{K.8g9whU}Lg.24r+Ur0klg7F{B=l,N' );
define( 'AUTH_SALT',        ';+r(~#ur(i0DwVbeALtfzu*Uso?R!f{@U`./hCxPK1Y]m#Ty)?,vh-=j3DagAd4|' );
define( 'SECURE_AUTH_SALT', '19m>:Bly*CQ/BhyZOLz2>`Z4=WS6W$)=NAQw`g^Y0t`r36h)KLbCZp !Amt)5848' );
define( 'LOGGED_IN_SALT',   'o6;DIN4{?5P$?IG)A5jL~by}1c3)*vS?2;{PDM8+r4qf|}5X@-/@WBDJ]@X^;`a3' );
define( 'NONCE_SALT',       'v^WL`8G7e=jpo[VJ`O[yh@KMHt(BX#N<A=x)4NlmfUJ{kpQJ{k^#,vCWF3]a4yUX' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'testsite02_';

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
