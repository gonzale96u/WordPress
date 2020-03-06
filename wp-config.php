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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'p@@*B4A7#)ZktwAa%Wwy|^`jX_.GxZ,aGCw6fkI.S*rEU4E/Yi22m5:9]7#$suYH' );
define( 'SECURE_AUTH_KEY',  'I2KFl/ASx>A}J)8aAVCS&nOwA>BCi7%-<%85hjE+l}nwpv:+aV`[5Vyg@<Fe;:=<' );
define( 'LOGGED_IN_KEY',    'jQqbaD#W`Qd?7h|w_HP?&%bD[(%!$J%*bPDW^YdPy:GE^[#4H:LWzUm4iQB9<c75' );
define( 'NONCE_KEY',        '/Wc4WRTAXE=.*@8MM!np,2Pl/E:6NAfU=r0|HVC7s,p+X-ked^[VtkCe<yk`?.(O' );
define( 'AUTH_SALT',        'Ky3E0Nb5Jt!|f~XE_-mo9tRU:/4H68p+zGVpSTd?bXat SZP dQxJ!9$=Z3OLY49' );
define( 'SECURE_AUTH_SALT', 'Dbd=:|)agl? -GBA|EhVQ5;!|c_^UrT~,1].]c;CO2@C]gO:qT0jdWpuly4]jhXd' );
define( 'LOGGED_IN_SALT',   'kP5A60KAv yKda%X=L7CJSI1Ur%vP>*eBIm`Z`ecdxV.0Fa$aLi>%Il<t:qra5:=' );
define( 'NONCE_SALT',       ')om}:NJvVPhgR=!xiC meqBOWi<g@E?qIU9lRAi+s<^7w4u3S,(]1S@)DA4j:$(<' );

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
