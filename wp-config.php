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
define('DB_NAME', 'prochestawpdb');

/** MySQL database username */
define('DB_USER', 'abir');

/** MySQL database password */
define('DB_PASSWORD', 'wqpZehaeJdZj8JUP');

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
define('AUTH_KEY',         '=oE)2R40I8bn*}=AFb)~5a^c]TrPWQRH@kGc]8fpG)R(B4SJ|=BHT&e~D+BD8LVb');
define('SECURE_AUTH_KEY',  'ps?Y(w&WCRL<}?u?oc3>e3Y#9 XYhOM/.&k5D+k>oWt<VaJBU151JvV=>!e>*?B:');
define('LOGGED_IN_KEY',    'wb8vmK.*k26m2.C@6f3G@jFTP(]d5J5cHw$)Xyc[L<nzNdeO]aZ[ELR|e-<pInd+');
define('NONCE_KEY',        ':KRpQ R=WO* 4t3W`H/SSZ|M.B7D}@&.Z.FEJ]F,oq._~m&r#IFh6w2ZhE&*a ?F');
define('AUTH_SALT',        'FLrs9M3U>mp}EZMl@40#}<2wO<C-Xpa[RO+V9=$Ii%DDLV>ttiC$%Hsc]5Z=7/TN');
define('SECURE_AUTH_SALT', 'j*IO%_/{p%|2j4ORu7qEe#Q*RWX|a,@-b)=;>~R@NAx{HezX)b4XtkUUB]w{!1rQ');
define('LOGGED_IN_SALT',   '}k{$MY,[s)]|!Yd|%Qe:v@r)Uk?a8tfe~L~sUx-ZXljvV6t?dP5NUQ[A Rkb0bg{');
define('NONCE_SALT',       '^W!MVex80^.*7)*gPwj&s4J~^%znv<.09CU!m}@FF6C!8m{gbxfB m4r.FX(QF0;');

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
