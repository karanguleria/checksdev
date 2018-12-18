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
define('DB_NAME', 'dextero3_checkforyou');

/** MySQL database username */
define('DB_USER', 'dextero3_declar');

/** MySQL database password */
define('DB_PASSWORD', 's~r8aJ8J??e4');

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
define('AUTH_KEY',         'lUdbbv}kNMaJ<^Of%&^qMpD=,ikX0kP8LSe}U3h?}]2LsgCrNI XQqWJ-9p; <gA');
define('SECURE_AUTH_KEY',  'nh`T%HLp7>-5v%9(prtdfGt=ja{AB7F.z>`)}.`}SNpO.R113` _ySR+lk*RgNnp');
define('LOGGED_IN_KEY',    'BnrRll@p,IN6v?G}R`F|P:ZeUEz7gj/(4(|~8meI2Z| 28{L2L~(r+BJAbT>aK`U');
define('NONCE_KEY',        'O&cu6?Mx|pE?YZtdu`;o>CiMVZzELX!+>iQ7Sp-cQ`^|M%!U)IVI/m+?$Q>RQ~Y4');
define('AUTH_SALT',        '[-_b4.h%+MqG;Xe k<MXUi.!|HesD9Q>($FY>N}b}G%wU&a0R}Twmg6ES37o!S-^');
define('SECURE_AUTH_SALT', '~Y*^U=v~=-j<Mv_*0m(Rz;yPbHk% O^h{)*xT4c~?Qj8Zc_#o{UD dy`X6fES(mR');
define('LOGGED_IN_SALT',   '~[yU5DWS[VvAU?o&)^ILMh//oSLRUu)miWr0IeZaIL#!5T$C}ypyR~=S::Ip~]>9');
define('NONCE_SALT',       'V$%OKkqo0[V/2WxM:9v_HLv@)w|c7*>K0t(fB.gE=e+1wi.jDyf4SV-{0sgwS.dy');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
