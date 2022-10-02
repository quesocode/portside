<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_portsidecom_db' );

/** MySQL database username */
define( 'DB_USER', 'wp_portsidecom_user' );

/** MySQL database password */
define( 'DB_PASSWORD', 'wp_portsidecom_pw' );

/** MySQL hostname */
//define( 'DB_HOST', 'localhost' );
define( 'DB_HOST', 'localhost:/Applications/MAMP/tmp/mysql/mysql.sock' );
//define('DB_HOST', '127.0.0.1:3306');

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'HoT2ikE6/E9i/3ahIe(LaWU~tB`XGt$)`SMfwV,8WO,yv3#uXUEyImf;f~k^]2qo' );
define( 'SECURE_AUTH_KEY',   '_pcT9^oDzcPEmYhB%y~,(DV{O>NFF{o)?$fi1U_u{X}MSg0P|0mTdOc$~S|_[) +' );
define( 'LOGGED_IN_KEY',     '>V! PpNn9].75tFa6vl!f*yK+jGeKOSXQzOv15kyFj(*p[ ?ZhU`QW`K><uHDf<N' );
define( 'NONCE_KEY',         'Fs^|aPe68UW8,^DSmMY)ZZh0V#cj vLzX$ZD2*o%ToTK*^F7Z8xTI#JDj)P`WkOF' );
define( 'AUTH_SALT',         '=[kz;b&)E`w3%q|B>X#dGv9Mc4tpe1QKrFb-a$jz~%!S8@El{7qW`uk`ql#}>J8B' );
define( 'SECURE_AUTH_SALT',  'wz/nPqd;m>D|`){pV0~X_O?.+u@h0T~&iGH<xUTDTy,fW34iM=I^R<4~y})$uY)?' );
define( 'LOGGED_IN_SALT',    '6<p@p<39.8rH)RWV:X8XqiNG]Onyw<Y~GAMRDSx4Tbie2dtssNbSYj:UWJ]_KMe}' );
define( 'NONCE_SALT',        'OrjBO_ZKXX9UExX`t>}) dV;.> UuSaS1Q0QghS-+w4-d6ZXt,%@a.R#La;>Z$,h' );
define( 'WP_CACHE_KEY_SALT', 'j+lwv|hn)s:oW/cRKN@;TSzmR.vLc[Ttb+N?f}Z4=)Z!yVo<5+c*mUN2 A@/Fyl~' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
