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
define( 'DB_NAME', 'myanmarinsurance' );

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
define( 'AUTH_KEY',         'B)]#OdZO~4gHBaC$b%TVcz>&PqL2!`]m>RJR1zv)%r_8mS1_x>|VE%/;Y4Pb%hJ;' );
define( 'SECURE_AUTH_KEY',  '-S[%nl>7PG;9 1FRq1/tvxoZ|*CZE**->}L^i0RKL3(qt2vi3B9v>fQ<I[u>oK?9' );
define( 'LOGGED_IN_KEY',    'nHP`$nwLPSWH$_aS4R}bl40M~wQ^o+gKV~tUDx`&rSIH[KB8h0rR;/Qb@S&-+/1F' );
define( 'NONCE_KEY',        '~>]NJPE{XMJO?s.fDqaY;`rnAh>w J/~a@f_zZxyO/c2QW(66J$B2SoUt#e!F0YW' );
define( 'AUTH_SALT',        'rccu4oUWwag.whh#f+xW>edPX#,Eo)nsN+4J>J4#p#3UC+k:Bd}7>!W%=U$@ePJS' );
define( 'SECURE_AUTH_SALT', 'p$fIV+zDO]S4+ffzWhv+78zfD.$Xxbf[WSZ3p+yMg5N)yv#}H`ARWXqwWDCoF1z5' );
define( 'LOGGED_IN_SALT',   'P]}JC?PR9d~Z#qI]a%.*6n{`)X*}2?=I{ykfKKYI_D(@*K)@L>,TY_1TW;qkPJq@' );
define( 'NONCE_SALT',       '2 n%/usrf*s(8%qLCKTO[UWB<aU<Bv%$=bQU/qxh12JyE2ITvN+ X3~W~dNr,h s' );

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
