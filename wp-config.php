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
define('DB_NAME', 'desafio17');

/** MySQL database username */
define('DB_USER', 'aincatoni');

/** MySQL database password */
define('DB_PASSWORD', 'otaking25');

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
define('AUTH_KEY',         'U(K0O[2$RS?%F$fXx#8[}F-l=5W(Q9?.Bt^z*xu$,ug/C ldV*cgfmgy>f:v3O:I');
define('SECURE_AUTH_KEY',  'qlmcX9]4%fq+.t_Te+4(5?br>V6=A|{XHH3%.;HTSw|lT7(Un2oduaq%<BWtk;d%');
define('LOGGED_IN_KEY',    'xwo]RYGc(LR5={rCl*q)]|NBw,oVH<xdFj0nU>fut7ZR!iP7wk72WyWGxkz*l(wk');
define('NONCE_KEY',        'i#laR(LU|;8Y3#g1i7AT^Ec5(<@c1jFOMp,2B!RIf2B@,%Wos>m!arZk.H:JNtdr');
define('AUTH_SALT',        '34(20B*jqo4E_Qc>qXYo:t2>a)}xM9Z+OUnQB)[N-^FBrSDPaMrQ|+g~D1e4j Xn');
define('SECURE_AUTH_SALT', 'VHkp*03,iAWxR:QG/TTUly{Z.veKFe}1F*x*PLnju5EvB&;BwpIr=0]ddGP>VU .');
define('LOGGED_IN_SALT',   '$&:=;o~%`Lw2cHCnTas!WZe}-B1Z6qj1pn+GkX5ItPyd:pB{&p(l^V4VMnNWInI1');
define('NONCE_SALT',       '&s1*/QEH#f?Uo@GV7v)PtH]h4,~HXmO$+rMIuAFRFu-#5m#A;kQDn[cQ,.og/`E&');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'df_';

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
