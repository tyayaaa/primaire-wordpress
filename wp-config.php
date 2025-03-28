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
define( 'DB_NAME', 'primaire-wordpress' );

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
define( 'AUTH_KEY',         '_;DX}T<xV85M(&[raE.KpKbcfdsbU(yzQ^2L_e;t)]9-7cm]YzQmznch4gsfY_`E' );
define( 'SECURE_AUTH_KEY',  ')yX`?LF9tKs:IAdQy}RpO#4yoU |&Tzll_#a!yH[*RN:0XPZrj>Zx=Q10:$EnG`q' );
define( 'LOGGED_IN_KEY',    'TZ]k||}.gH{&;+,zYO`=yM_vl^a[|[T[:} A^JlkEnYIk=+u9:p|on2#m.-=h_?|' );
define( 'NONCE_KEY',        '`Ic+269OJ%OfjoFAbQOoO4+^0h`>u2J6ZGv~Au8[`(Jb^SvYsWH5SpNc//T7&ES@' );
define( 'AUTH_SALT',        '0(2U~!f`Ohj#c-2gKY3<cNj 5d|zU`JV}iJpD(}F:v;1sRpNL_,(a(O4hg*euqRn' );
define( 'SECURE_AUTH_SALT', '98Wj>LJ=T,&Y!k-)P@1^ Uc+fPPdEr3RAn]i|_JPE|mdQxc S-ox;}EQNO[B|m~&' );
define( 'LOGGED_IN_SALT',   'Yspax>>M?qiE2K#C`tDsH$t2c]T+UUqp4n9.@y(^RNnX303Zq;Y3cVv0/fI%y^^H' );
define( 'NONCE_SALT',       'Up?C3~k(2>Aqe4+XllC}+{<~?zZ*ZQX_dL!F.uk`*~9k7]N-2<-b0!g!e/le#,hC' );

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
