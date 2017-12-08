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
define('DB_NAME', 'murray-mallee-car-club');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'Coopers1988');

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
define('AUTH_KEY',         '1|b*kOyX< $)K)_jKLZLQY/0Za]@pS=CM%_ceC5i!>$aT5b:8:AByG8R^Q}~cj[:');
define('SECURE_AUTH_KEY',  'hl*[HJ#)z[Z`-;pk{uV7:s5!={f0&S[1:vQTopETxdf/3l2Fn^Cna/5mW&Qk/Sgr');
define('LOGGED_IN_KEY',    'Aq~RB0Qk[)<DB)I9#]A-%F&A7F;;o$y[fh-9GJ+;C!8M?!QeW#3c0])O.Zt4H>Ob');
define('NONCE_KEY',        'e1km,XLfW>0{Fw|;SvY,3zqbbl,otQBrC+k47f |&&jy{,}XMh %!j-7pp+{ky|t');
define('AUTH_SALT',        '7s!@)nWF-XnK4d}qQvDqca^Ht&][[}B:6]hScQ.mNp@1M8eh;;KT+0q[=dCdN=K2');
define('SECURE_AUTH_SALT', 'e#9.7]$]f=lR=q.,W cg(J[=RtY$!&]*P#dN7]-:[`u=W=;jg4zy4*95~5Ddmqo+');
define('LOGGED_IN_SALT',   'Cao(?.74y)7voggA[rSQSFH<w)E$iZ rt<6qR-tZjC )/d+2r3VF):lWf.,`1c)B');
define('NONCE_SALT',       'CG1Yatd`zCFvtFULjX+d~:@{4CPK%7`8ccxaS-.R,2a)Pp~ #ysrMn`rWo^v+ulJ');

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

