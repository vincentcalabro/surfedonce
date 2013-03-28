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
define('DB_NAME', 'wp');

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
define('AUTH_KEY',         'C(T+WrX#ii^st7:hZU_]{C63|)DB+Oogo4cdnR%xq^!b2Sh+zF!t2|,Fk|bs8euV');
define('SECURE_AUTH_KEY',  'k/Ux6pF3<+VD?3Q8wy0h{0.O {335H^g3,qX]k=OC3>P?IeF4[z*i:CZ|oF+64@y');
define('LOGGED_IN_KEY',    '0]u%cg,{CRkVR7Cfc+g@hd1L,sIo*a.dFB=B.6*d,_W$Q1E(|jlb9_o)a)m-`]$%');
define('NONCE_KEY',        '_MP}:-~m*^85|IMgFM2+z.Z^ZBCA2|0r0G>7eH~neUqm w=)%|crh=78c$U=dh(C');
define('AUTH_SALT',        ']hkpQoS^iS=ngYtQ39 5pzWU<_S3`vdz,Ak;~N($FW+*1G5+4&)pC*}<gC!RaEIY');
define('SECURE_AUTH_SALT', '<gm6|Fx}U-o.QCw {#BnyO4fTbq3Of&T6L!|euujsxd*)_)N;LJr1WFhgMz?4o#,');
define('LOGGED_IN_SALT',   '>Y!6@44$KU,C),Gq:6na`HJTK,NeQ$642Ps>4a5T9g$deOnJ)>SreHyqhBzm>d/t');
define('NONCE_SALT',       '|.]GXCF7mYQ~56@U-d U=?E4Vq-l<AY[+9 /ET`ioJbpNRZm+Sk1ovrQp#=le]+R');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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
