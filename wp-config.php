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
define('DB_NAME', 't16559hd');

/** MySQL database username */
define('DB_USER', 't16559hd');

/** MySQL database password */
define('DB_PASSWORD', 'CCWNB02H');

/** MySQL hostname */
define('DB_HOST', 'webdb.sfc.keio.ac.jp');

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
define('AUTH_KEY',         '3M2Xi`OH?Nf1kDmJ!d|&rUG%c{!8I< -q6@akXDczR+*3[-G;rzO?6_zbVh%zNJm');
define('SECURE_AUTH_KEY',  ',k&iRk]t=BiAP6>;<Y7|;D}uyaP|/0mj-c k]QN?;e6uN1*3ct(7kLwohQ3jQP$Z');
define('LOGGED_IN_KEY',    'Ak?K$Js:{5f:NwE,<5vG@xPF6q^AafAO&Z|72<U?t)01c1tL[:v+c(QK$L9Gh`2j');
define('NONCE_KEY',        '|O!tJ5W({t2KnAZH9iJOCh3&IEZFh<$BI7msteqXgU4W%h*CTUH0,4dT7HKk#XH}');
define('AUTH_SALT',        'epMzY<Hl`nROrDH8W5k!iCiCEv_iKKm##ZrSLGwuO{ZL0hmQ&(x5G,V|;t=0n1q,');
define('SECURE_AUTH_SALT', 'z@dqb2hwTT.iIBx%z^*,PHri@Vtq</KUMAOV2S@#L1JX7>koHE1kBF.!p<V{4r26');
define('LOGGED_IN_SALT',   'Y@&dRn+@XTe!IB@7n>vZ:Aq+RM*}47Oan,Xq`xB&30VaT %V$Difz*+[h`EOn{K&');
define('NONCE_SALT',       '6<fGnna|c>qi.I9:z=z9YAj8_u-zc3YehgPb2y.`j9tfas[~#[16lMo_7[wZx@9Z');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_t16559hd';

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
