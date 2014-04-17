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
define('DB_NAME', 'vickyjr_afrihive');

/** MySQL database username */
define('DB_USER', 'vickyjr_afrihive');

/** MySQL database password */
define('DB_PASSWORD', 'erovfuQK');

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
define('AUTH_KEY', '4XKuEUW1gwaHrkekHTtCHePbqMbrMnNiJAUh04bZ351gzdEkpNp9vHLMg6bIz418');
define('SECURE_AUTH_KEY', 'YC03QhdWN3wVjlHTyy86HD9JWeoJrrKUXl5oOKaa5LICRPKNr60pa8uhRL4FlFx7');
define('LOGGED_IN_KEY', '6lRcdSpkfuGIdCx05bzFX8tXvex2eTfefTguq65Z0KCenLNjnodwDjqPdWx7YLnA');
define('NONCE_KEY', 'Ql3dfSMWFuMnnB808521CTQYriYgyLGhwV5pEegYlhcb7mG4ZNScg43nBvz4mNym');
define('AUTH_SALT', '1Bj4cRzN4zSl6OuEIVIpaZDDGg1HtYnbmwP5aLbQ8Mbe7bxSp98yA63V3CFEfnwj');
define('SECURE_AUTH_SALT', 'YhuK1eKX9IvOvuS9hZ8Tj8djbpv7TLBESdyjLyWfhLvhpb6AqXqutgNTMRwt4Ydj');
define('LOGGED_IN_SALT', 'tOswyS4qDiH3r9eQuuc4pOE8TILV3qVWw2WEKUNA0tm7Qk0xctuGETodeqCzaOLR');
define('NONCE_SALT', 'TgLaOa0FrnMcnMdK4N8JZHxMcCNRdswTHxKi8mWqbeqg9TDuc0GEkOyuVaot6i6T');

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
