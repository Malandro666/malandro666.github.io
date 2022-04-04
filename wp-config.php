<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache



// BEGIN iThemes Security - No modifiques ni borres esta línea
// iThemes Security Config Details: 2
define( 'FORCE_SSL_ADMIN', true ); // Redirige todas las peticiones de páginas HTTP a HTTPS - Seguridad > Ajustes > Secure Socket Layers (SSL) > SSL en el escritorio
// END iThemes Security - No modifiques ni borres esta línea

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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'i6576658_wp1' );

/** MySQL database username */
define( 'DB_USER', 'i6576658_wp1' );

/** MySQL database password */
define( 'DB_PASSWORD', 'I.aDVeeNsYjeE9MDIWA17' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'IFhCsIxr1rWhsI81uOB2PXrOOeSmXZWJcftOt8TbS9gPc9JKnm6bHqmWP1YXUGup');
define('SECURE_AUTH_KEY',  'QEDZtEbjMT6cXv8fzyAgauXmRb6sI5cxKt5ajuXH7lQ1rvrwH4OsEAVcmUvHCOXs');
define('LOGGED_IN_KEY',    'qwXSyRr6gxIiJ7I5FKHhxL1uycnWH3DACjd3xzwNTyZeDs9c609W2KAIP1cEYPaO');
define('NONCE_KEY',        '5Wj4SKo0xyd1rT8SnOTXv0rTaBL8Wajo0es06pUoVvndCRrBpwRnSDm0hz9X7cdI');
define('AUTH_SALT',        'tN4wRhsvBQKO6Anei18XS0H3Zqmg0IRpnHouJc5i5EkXvvBssSQQ4SyZgYQ59xy5');
define('SECURE_AUTH_SALT', 'okyFneUUrtoZ2AZ43qjHio3dMioWiA3VYqoTqgTuenjDUnERaeQtjvTBTYjmhryz');
define('LOGGED_IN_SALT',   'gvrvKvnrF4XPg5nIXplTlG9VNFPswtNZuHbfOQXYIoi5n2imzHjE5WIFa0DK5nIF');
define('NONCE_SALT',       '5vsGKln4D0N0ba3xjd8bEOAnzDtXjN5ODJWyBBsv0twq9kS6LPCCT0QtWZFFCzVH');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');
define('FS_CHMOD_DIR',0755);
define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');

/**
 * Turn off automatic updates since these are managed externally by Installatron.
 * If you remove this define() to re-enable WordPress's automatic background updating
 * then it's advised to disable auto-updating in Installatron.
 */
define('AUTOMATIC_UPDATER_DISABLED', true);


/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */

define( 'WP_DEBUG', false );
//define( 'WP_DEBUG_DISPLAY', false );
//define( 'WP_DEBUG_LOG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
