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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'shop' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Y>P56Z[Oc2RV=/;=A6,tNb^R<]O9Pcl:Nezp)-c|m/@m0o4^P/?RWo|]7%}$=Il}' );
define( 'SECURE_AUTH_KEY',  '2K|<BP(ck/O$H5<2vf;O.0/~fzvIpy^G2Ftm *XxU?HTcb?wSPq0nk,HN_pLOus=' );
define( 'LOGGED_IN_KEY',    '+f<;M1pYwEq,kkX<}Ei(*Cx(lr2(3rTcy@gD#-x0#gw[OD[>j)@-c[KprYO&^F|M' );
define( 'NONCE_KEY',        'Z7es2*NW6SL)KLLqHaUT*lPm`labPBl/}F#StaTwQJQ5M/%l~3lT9Aa~Wmeh]f/k' );
define( 'AUTH_SALT',        'L%S5(**un-v8;%9^o }XN[!p)p?n5Loa@vXEl.$0%oj0CQv>iq=CZBJs4z1CnR]!' );
define( 'SECURE_AUTH_SALT', 'uGV97T4AbNN6&Z]12|JFRS3^}MijrD&~sECrQg?-w<JmRAA&YcW$4:~hfDRD1!}0' );
define( 'LOGGED_IN_SALT',   'sx5C$RBOr=N^eiPj?gNty{8Jo1YUGk^=%TGO&>k,As. [+i_!{06,Uen~O/Jos@q' );
define( 'NONCE_SALT',       ';@6Q?_-OEwun8+PuDh}D%q<vsBE(SS}>BEa%O*C3rm<x,`}b3Luy12.k=SX!DI].' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
