<?php
/**
 * These configuration for WordPress
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
define('DB_NAME', 'isaebooks');

/** MySQL database username */
define('DB_USER', 'isaebooks');

/** MySQL database password */
define('DB_PASSWORD', 'isae6200books');

/** MySQL hostname */
define('DB_HOST', 'root.cqrdsk303d9i.ap-northeast-1.rds.amazonaws.com:3306');

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
define('AUTH_KEY',         '%WzIxp{nddvh<Oe-m!g8X![<Fucw|Fa=#U-r#9sq(+JId)(,|Lw+q@Gp=J_bQBL5');
define('SECURE_AUTH_KEY',  'r*#nKW/-If%9zct{dm~E+BGKy}b`wF8e<uySgysrtag5#!Oql2>Wb[+ou0A<[L9&');
define('LOGGED_IN_KEY',    '=ptdDdKV?f2_[z(ZA_0G+}; V[0xlrk2~oBgKRQs|sBF|EKPbw|#!{_{D{LM/otA');
define('NONCE_KEY',        'D>oh3z+dKU#o1z3hJ+Q4i;+Wcj2w Uy<,v)5wdUuBmYrV-jRL` +{=FvyxL:(P|J');
define('AUTH_SALT',        'J1{Sa]<hgi2OmAF|gT:Z?&j@Tbg/,!Ulv:YJ=>M*!/[M2GbN3Ra^)wFn@[doRSB_');
define('SECURE_AUTH_SALT', 'ljPsv2*=Q|Q7HksaYPdj}pmkA2Hv-EzG;<H<)Q+UP2(wx1wg1zy:d]2Iq<Cs5-8+');
define('LOGGED_IN_SALT',   'a,9{0+nV^zLFU$I#%fY^1IcRo[U|sU$iq.cG8:dv[) n/{;S1,.x`p?^gfDJ,Y+6');
define('NONCE_SALT',       '#$YsTEZborShm}SF;fP!bS` |~<pIJtuuJ,NCG.OO||iFw_d`JB6Gh8wGUM[!K0E');

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

define('WP_HOME','http://isaebooks.com');
define('WP_SITEURL','http://isaebooks.com');
