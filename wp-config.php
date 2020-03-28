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
define('DB_NAME', 'cost');

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
define('AUTH_KEY',         '`nl%i#Y8k22azw6lb100wA^d #pRA~}55T RUb=pR&qzi_c<u<~VFZJsPjeA9RkA');
define('SECURE_AUTH_KEY',  ';0Cd+kITXk=Y^X8/[OK^6,D ZM{<B=B`m5^|+n[fi38cl5%Dg]/S5g7XzrOaKBQE');
define('LOGGED_IN_KEY',    '#02Uf<#h!TCV[f v[.r.tN,6Q}J*@n&Qv&hou.AZ}@XqGFLGmB8a8Q2YGDs39#R&');
define('NONCE_KEY',        '{~r_* EYXf@/P%)O|)%TwY2=G3Zyd!BF1R7z2V`B1wp;n>w9}J$[puklz;N)E/AX');
define('AUTH_SALT',        'Y1<OOrB*Su;?jzq<|XJu+2[|uOsNB7r3%9Z$3{EXwbZC5=3{?4|F{y~(FP:<t(E@');
define('SECURE_AUTH_SALT', '-]7.qQqGLwGmSy~~/Y,,Ro7xu?Z|ME[A> (*2>p:L., 59++|yWe.(<g?~LGs[N&');
define('LOGGED_IN_SALT',   'YM}%|(F7B{RK-}z8{u-op@;QT>%gi3*$JT3;x y]%1k#vtc@^Ah/M:*ZF<[aseHO');
define('NONCE_SALT',       'NL+1!}#dboXEe2px|IwO`V=WI``ZzjU@ z7ttbH!82G6VR#qO-0=s+XD]9c/,4bl');

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
