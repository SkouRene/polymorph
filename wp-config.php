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
define('DB_NAME', 'polymorph');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'rene1879');

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
define('AUTH_KEY',         'qrn.}i.{`5a}=X0;>@%cJ!J*n.zo! nN5 )41m<Z/,[#E!Wn3KbLR}T,EUO&=_.L');
define('SECURE_AUTH_KEY',  '#rboZYZo}earBY@~}JgLfY63aw#c*]gvyo?UXC(xDWF9E|qIP;XOKJ%%0Kp2v[Nb');
define('LOGGED_IN_KEY',    'La|BG^=I$;:}OBpz]:1tCz:iMK,dC_@Sdn6%Tt}Zl-^?K[;azC[l4DkL[O04BFXH');
define('NONCE_KEY',        'l`Xdoy$2u!fR?!!&?61~5#`*Vxq_$ ,G;ryi[W@5QX{hZ/B~Xz]OYqy7RP}j-?e%');
define('AUTH_SALT',        'xbl=d_`Xae 6}u!FHu8<7qMOz@aNad#<A|!0$jJ<<}+=@bzy(jqV&-VMP_#`DBRH');
define('SECURE_AUTH_SALT', '|`)%N.^2_fKs/y@v.%3qH:G~mQhO{v(df#9ht:6BHDOo0#vjUeu.ye<4=C-hl^L<');
define('LOGGED_IN_SALT',   'kXZ#56Ni{bl<9XNHhP{A>22T%f*<ZPwK2hdXly5Tj3lwgX/1aIN(%4Or`9A4O;h:');
define('NONCE_SALT',       'pQLF4)3hD/bm:foDcU5EOl[6#2qQJ;ACMowl}@y/t-/K4?:/t[In4x%}+Kz9=R}8');

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
