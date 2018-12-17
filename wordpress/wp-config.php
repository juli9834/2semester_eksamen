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
define('DB_NAME', 'juliehbjerning_dk');

/** MySQL database username */
define('DB_USER', 'juliehbjerning_dk');

/** MySQL database password */
define('DB_PASSWORD', 'UPZZoL4Yu46ghqYnBkpkYEv2');

/** MySQL hostname */
define('DB_HOST', 'juliehbjerning.dk.mysql');

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
define('AUTH_KEY',         '{#]cO482GwV<]@/y9?Yyp$ *[}?/fMY+w>rI!g6!#W_OV:d7pQJ%qE$6MlX#4;8e');
define('SECURE_AUTH_KEY',  'cgn=4pJz?bgUH~8,xvAbZOOb:5M}!WSU=||Q=`o8dCKzfHZP}3>}U*W8e(m}:?Ac');
define('LOGGED_IN_KEY',    '%mk!I6N[li?YVN%N$!.d!-=XW&sM93{Bq<Gg4-`M5IB UUSjTm;StW3%<p(tcHCu');
define('NONCE_KEY',        'CQ*TQ-VF8<czJ)w&M!<t`g/BqKq VvS_BAE)zhN!OIu:!wf=Llm]1/Z?8EO()y]a');
define('AUTH_SALT',        '@$~fhq8Ik mV/;`Tw#b^C/x;cz3`Um)y;(;J}Vl/ePjfdW{}tdBR]mia+89Q!}um');
define('SECURE_AUTH_SALT', 'O0Ox{I(.*(V)fa6GM3rhP#FCc, e{Y[/!s/NG0}W9jEK2IxS{@>H7!|yn~W#?fTa');
define('LOGGED_IN_SALT',   'C8|J%q^b]v2T.u{xYtO,>6_9N}9duj,+yR,tLh>%[x>_7{0[2u51O5QQ(tzR<bD;');
define('NONCE_SALT',       '!ZIO)^LPAX>VXBboVQul?(4CrX9pn9yihfWe?__6*zOXYI cyyX$jmdcbHzE:.)d');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'pip_';

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
