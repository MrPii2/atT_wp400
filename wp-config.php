<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress40');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '9:kA&w:w!C-ISBIDf<iCz)-W.!l-Zo}n!MEMwFDe38k3<6CGR&g.&8@aA9M5z-|a');
define('SECURE_AUTH_KEY',  '7r+-[]q|B<|T`|y~^th%Rs;[4.Q]{3~Eh:H=ujom ^40g^gjqxZp8g`_}e[{<J&t');
define('LOGGED_IN_KEY',    '*t98}uw#F.-l+Zy#0.Vd,}l,K^l*!&}vv3i[di$.Z5GWAZs:~%c OD6nNV$-0xs@');
define('NONCE_KEY',        'bK@U|}OPv&OM2pnub9wBBBOq9-Mqo8GJ#pzC2+od_.)GoDLePYang$Z>w>-`K}fN');
define('AUTH_SALT',        'KZqXh13<|L:U|/$4Q6am~K{#+&[0Ts(CeH?_UXH|T{e+~-D+bcI5z[F46*w- icy');
define('SECURE_AUTH_SALT', 'm^sa`[FKi@XP)oj4|<O&Ph9},pF{O,J`vu|a2|ihf5(jSI;-S:brvs:wql/8rD( ');
define('LOGGED_IN_SALT',   '_[|z#|2J6}N[W(%qKn+ixL $n[)#_h)n$+KDt0fm|mg8U@8{+0#nQeTFHrE-ISUO');
define('NONCE_SALT',       '?{n}uy5=JK~QsdxzsQ(Ox,GkYtffsaVVQ(> 8[Gg^=mOvjZ.wfM)tU,|dCxE|)J-');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp4_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
