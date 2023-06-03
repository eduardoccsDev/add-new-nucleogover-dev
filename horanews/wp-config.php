<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'uVc2m9Lx/9JdVVzs3zwIxPOXPgK4kqlwwQBd5ztqTp0ZtJKnSv4J1nkAFw2rp4jaDqMgV0amOQs9+HtFW4sb3w==');
define('SECURE_AUTH_KEY',  'PMeRJp8mcv2RHJQZ9X8xTXr9pUsSzDyF2REtkiueNIqOum8hrgC01gq5bHJz+9CXhEcnDZUUP1K8hL5eXkn1SQ==');
define('LOGGED_IN_KEY',    'l2IZiZpcxpYKZlpSNWVXrGQnIvvjs5bwgr5mNyojGtt/gSQ5eYDhgAKGsnnwC8TSPa9PASUj0ATwyPrYKWNlhw==');
define('NONCE_KEY',        '9qF7Pc/ubX8zUgV4+Mu24RxFkMMViFP9FWqVvFX+i3+MsVRJbLMdDiu66o5VPeoAacq2pv0fRALktT4By7mBsw==');
define('AUTH_SALT',        'qV6tcKUx0zn411M8pOsOJnFMT1oaUhFI9BsEP6qkzkfolrUqB5kAlw0btd32VFMtE91nOf41MIMJWEBoUiVMLQ==');
define('SECURE_AUTH_SALT', 'vMrV/ineDjqSmp4hef2O9r3qhhU4+0pTEpYzWeBb4+yMAASsLgykIB5M7xfbOM+TM5Xt6EOC/sDMfZG20a+8xg==');
define('LOGGED_IN_SALT',   'PP9zGnmPCuP9mY6ATojjj/cAtDWHFhL40ngpe/Kk7Jwh1JdSsWRGaVTz3pZeLMN7J7j671lGx9iHSDr8lpoEIQ==');
define('NONCE_SALT',       '0PqYhVx1I4m4b5BgFLV/Lv82PXSDcp4DKXI4XcfAft25mxAoKMrYUxlmxRhbfC2G9CeNIFnUOnUuVqIMe5XbKg==');


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
