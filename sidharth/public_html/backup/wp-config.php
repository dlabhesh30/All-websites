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
define('DB_NAME', 'i2937233_wp1');

/** MySQL database username */
define('DB_USER', 'i2937233_wp1');

/** MySQL database password */
define('DB_PASSWORD', 'F&X^j2p^XHVs9sA9Ds~30^.8');

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
define('AUTH_KEY',         'ShSjsl3UzGf04gZJrpChXOKmAV0zTCuqmQHMGlawUmS6bhSHNdIFTxWxGBlpltW4');
define('SECURE_AUTH_KEY',  'RJqh7DzYEmJR6oSlth7g9uJnAf4yw961LincEJF1CbEmgIwEflt5Pp80fCPhBli3');
define('LOGGED_IN_KEY',    'FA8qLPbCOVJK8IBhXT1QK81ePAwlZDnhDb9FE1K7gFSji8ZMkzBETffMzNqjbrsS');
define('NONCE_KEY',        'QO0on8AfGzcQwj9C6pdCr4J9PnVDed7nTN07scnshmCF5I1NPA3iN0zjgiS6itaa');
define('AUTH_SALT',        'lJ6KO4LTkc9nEQvw8OPIp3iCVemzhqlI8ykcrWCxR80hrKAT3KRlwMMf9OMCdgiw');
define('SECURE_AUTH_SALT', 'owLJ7yd3kuC2AZn7M6uots9wGiihrbH3sovAWh3r7qg9s95lAUCKeJOUEXUHLo5O');
define('LOGGED_IN_SALT',   'u3iKqUPcvH0NybnHBKASFJ7HVuikGR14BFNsKvJOt0JeRfPEMx06GYkhGipgPx7s');
define('NONCE_SALT',       'HjsKLdhHlwOy6UhPswPQwuLzGXZW5TEpHNs8XQ1A2bKeZuOOEwdKZ3uvmTqM89Cv');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');define('FS_CHMOD_DIR',0755);define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');

/**
 * Turn off automatic updates since these are managed upstream.
 */
define('AUTOMATIC_UPDATER_DISABLED', true);


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
