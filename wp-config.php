<?php
define('WP_CACHE_KEY_SALT', 'f3d368196cb59adab19f08d9106e38fb');
define( 'WP_CACHE', false ); // Added by WP Rocket

define('WP_AUTO_UPDATE_CORE', 'minor');// This setting is required to make sure that WordPress updates can be properly managed in WordPress Toolkit. Remove this line if this WordPress website is not managed by WordPress Toolkit anymore.
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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wp_r9fo0');

/** MySQL database username */
define('DB_USER', 'wp_kl8yp');

/** MySQL database password */
define('DB_PASSWORD', 'vve4X~66');

/** MySQL hostname */
define('DB_HOST', 'localhost:3306');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY', '1vHel437~kjYDKfWEg|da01Har|//X#~25:)&_T0:6/Q9nU_404Gp6T38lOC_E7u');
define('SECURE_AUTH_KEY', '90z]qPpI8Ufk864Ku94ZDit3d]2SIA[Ff!B4rG!-35P7*KL0s[E-oquPu396pOa)');
define('LOGGED_IN_KEY', '3!uf95o#GFdw[I-2ZURJ];bh70]]m)eCR-F/dAn@i[@hEfR&k/J#0b49wj[!0*7y');
define('NONCE_KEY', '(s5P8p7h8o9-!@Ax|2ZA[d8#qOT/U8]FSc1TK:Gl-60CM1!bJ@|ki|XKT752-G4g');
define('AUTH_SALT', '7*_;o3qh8B)sRCf[Ur6ct[fmc+ZA)0%4XD/6GaX@B|R9GZv~z4Ixt724)lX/1]4M');
define('SECURE_AUTH_SALT', 'mYC7D8e7!pE03F3|50N;q7oRchXw+8*|6uJdc8M#L16lMc@4HZ(]RR26E:zJ055J');
define('LOGGED_IN_SALT', '2qNZ-1N*p4S7D78%uR;+q1zdn4/6X0X[aA8IQVX0|OyZKzb9#h7N;C)e|f]+oU15');
define('NONCE_SALT', 'hl+PW6m8@#KIs9vj+9cn!6;1GF]TPy~0T(yT/]2@3azK8hkqvD405H:MJXkD0p*9');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'fwaGG5_';


/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
