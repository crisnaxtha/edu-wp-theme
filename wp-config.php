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
define( 'DB_NAME', 'edu' );

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
define( 'AUTH_KEY',         'jQMa6;W87vcTKXQ|2nddMW!zlnFbw*64HX-E41+BeC>.bqSo//W){3W}c?@nZ4`X' );
define( 'SECURE_AUTH_KEY',  'I=OMf&2grD51LwNV&jV6Eg$WJE+n-O)n)Sa/G` KGv2qQ- ~%x_&cTc2Y}>E!&(H' );
define( 'LOGGED_IN_KEY',    'T`G[h2W4>/[_{>a2`t_H>{MZ@+U5hN0lUkqW-Nk@:q[vPLI-M52E1%/H;{Sobrxj' );
define( 'NONCE_KEY',        'a^463r04o|bUeuAdqD&6h^<l MCP%;rN<b&;D,L,=L<~&v,SWaC:=(8Fql{>&~A^' );
define( 'AUTH_SALT',        '4RemoQ3)wcs]()`3+[Z>2r-rn xd/zN2X?aG3J9*3j>iw9(OvY/_Cvkd!rNO^Kq$' );
define( 'SECURE_AUTH_SALT', 'Er2(y rZam~D$[gPfshkl`8L1sdzCV17PZQGs*}Z;rXNC*>=o]nD0)B.0FOP%IW.' );
define( 'LOGGED_IN_SALT',   'ziP{rhY%&{5)mps_cUH[_6x,V$1oG`(6K#pulE8Q>n(uu4Bk~&o#RF[/TMPbEA~f' );
define( 'NONCE_SALT',       'ZwCFr102V@*r)M)`yK]V|l?h]I]Nb+9eJfR<aT>3;z-j)]QTwg32-VyCS=4if^v+' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
