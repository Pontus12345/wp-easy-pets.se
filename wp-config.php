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
define('DB_NAME', 'easy-pets.se');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'FC5jAaZ6GimR');

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
define('AUTH_KEY',         'UT2U5.ZI:{^gYjfh76+pS.QtX%%tI|1On<J2{1~mIi<mJ8J3$9, yN/2pB&ZPxO.');
define('SECURE_AUTH_KEY',  '3lb6jDoZwQl$,)/a8bVmEVI,7&6~ & 8gRU@1,5(HV~)znq-_UYWzy|4~#+qp&Sb');
define('LOGGED_IN_KEY',    'u5/TdzFtv5V@F:zEVYb0-]sa6ab+NDL$_{G_dNGDO4ZIZS>Da`45|uZ`vTgSL GH');
define('NONCE_KEY',        's]JYzCz#iDKK#>V0sQ<<Fqy)WIpP?!Q+9p=NVC6(8,Ut+0ow0~.oS=Yle{;)P>mc');
define('AUTH_SALT',        'i{I;-wb8{Ru[m7yiGh(4WMf=3%|NywM>bf.Hc/jA>5b&;gXek&ydt}DMCi}qW0Gl');
define('SECURE_AUTH_SALT', 'lvhZHRB.vztRyAeLZ:%L_F{vqM|M=s0|5q*`&LVdp|t/i:c`o3@*p!xZ&VM91|w,');
define('LOGGED_IN_SALT',   'CI`S!=k.#$JC?U5]1LJX~k(E^@lEjGTCH>r~~l]YWE:%mniK;U;{t(mlwx7`lLc[');
define('NONCE_SALT',       'M(+9=K2Gm&Y=9i* =_7jR>@Q4BF)*C;o>/3`MS{?7l&l`hj>#G-Sl3mUxv30/eOS');

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
