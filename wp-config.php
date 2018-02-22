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
define('DB_NAME', 'assignment1');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '/J82!+T5-j>%ZD:!F~w&Qd:2!@eg}ER:Dq&BOd+0z++kL<Y8qlMxBsMk#mm+(*S$');
define('SECURE_AUTH_KEY',  'H(j:A;!+3:_{_Ku%W&FYNKWJ1h~&x/aWKAZ$BGGj>D|C_&F gBVj;p|dQa~GmUO7');
define('LOGGED_IN_KEY',    'QAkGNnr:g,4ZD[%oS3Fym0JHE;Ywa@0*k!PIs`?p;w2y)v4AJso3ryMAS*yFZS4+');
define('NONCE_KEY',        '*[XW!Zw/%z6BeCq4U#8-@O+QIhs-LJ!V-QI>OObn}3`XM35pt{Et]wf zA3yoJo_');
define('AUTH_SALT',        'gVnz1FC+!nZ^5D.zp</rwVDCa&j~Yp),okh*7C-1`U WA.b;xJyq~,$FHzyUgTBI');
define('SECURE_AUTH_SALT', '7ZJnpYTCx> n~h@$nsFPUg(-w7u/WLKm [[QM@kbp/%i16kKW.?!FkPLx^{>*{Lu');
define('LOGGED_IN_SALT',   'tC);F:,1B)Q6gKxWL*MlZ@oVifmO[E_1VTLiRXo6=m/.:GW`;0P`|+6fZBW<#N+l');
define('NONCE_SALT',       ' 9EB(qEk}+G|S8 e;cFfn<2Q^Zh2:#Pf(>ZbeIaQ|<ZYalC[e&V&!nhpMCX*Q6W|');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
