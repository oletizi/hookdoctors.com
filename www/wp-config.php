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
define('DB_NAME', 'artpopmu_wrd2');

/** MySQL database username */
define('DB_USER', 'artpopmu_wrd2');

/** MySQL database password */
define('DB_PASSWORD', 'RRP0C805et');

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
define('AUTH_KEY',         'E2Pu1nqgRNAwuvynPRjuCiQBmTMhc5eE3EyOAcGmGNyYoVfpCpTfhIjk8PE6Hwme');
define('SECURE_AUTH_KEY',  'svJJGnpMtidFQYuezKpkfevOxPdOD1uTvF3JoMfHjZvjXvVuYpLnjdCFMPXywcyP');
define('LOGGED_IN_KEY',    'wohKHaHhtk2dcRW2i4yUFRVHMh7liwWxWJtFfK7JBvskKVuw0DTY85Cy6h08deaO');
define('NONCE_KEY',        'Nnc36OIJEqPlJkhfRSpmyuTnuAD2x0qx6DOokBTZMTtfVB1BVCF1mgK5QQSgBfbv');
define('AUTH_SALT',        'GNacFHCf7XrPl5TdUrKCEmOBxHoKIkDGkvtRuaCnF8qE6IxqlhTscKEVFxGdarAn');
define('SECURE_AUTH_SALT', 'bJvvNKdWiKpDrFBVSfgJDqDnglONMSmEV2QXps3hm5HbkShsG5H9zIcV6PV09MdD');
define('LOGGED_IN_SALT',   'p5BzrXKtbOExgj2o0dOTNTc21scNgPiz5f3IUXqFOYUbgrixgCsshQbie1a3JOyS');
define('NONCE_SALT',       'wWZhvLXG6wrxH73BQnbAfanISLWiK3MMWBj0muFlAgNZZjGl8c88ETIE36FcymkI');

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
