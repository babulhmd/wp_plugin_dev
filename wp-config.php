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
define('DB_NAME', 'wp');

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
define('AUTH_KEY',         '%Uj=+QVGF$`29!a /!%>f}*]>,}2dS*-44=O{21]ZU+[/=|5RPEKd-zQJ0UVD(B}');
define('SECURE_AUTH_KEY',  'n(Es:#PBH$?o`|nkrok.{]I2{Rj}-s2M[GK{6SS/*|yS(Q(v>?E6HqJ*cN;w^Oz/');
define('LOGGED_IN_KEY',    'R.=@qkgzN 6^a^~|LSM<ia>|k7@Lu{~`[0}Uc2NQ)/T-,xdEsn#>-+@4bs>wG4~e');
define('NONCE_KEY',        'W1V}@Y%  GP_[sNspHTnWrP:!|/$|+3R7oi*)+]9{Um-+QTq+n[&u<5S&s!x)E-T');
define('AUTH_SALT',        'KHz%dF3q+h12$<B G&:B@ADSX_16<Of&*7>0e{OZtC|TnH6{8{E{tXamB0(c#T%@');
define('SECURE_AUTH_SALT', '/DW+nVql&NnhK|yaO4>3U@+9[6PofD#e1I&;+3&aa|zEE-$s#yGn>wM#OO0aWUqm');
define('LOGGED_IN_SALT',   'b+=WbLo) _8M+*-)q{+qxS>fzVD3b1;~epDkT!F[F+Z%[%:LL0-`x9@ZRLWR*:&e');
define('NONCE_SALT',       '|F*R5lfngCU8I(f)SimobX|EwB[2yvMcN98>xcn#@mErX#hox~VV^AhewTW+~q-%');

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
