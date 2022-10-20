<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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
define('WP_HOME','https://wordpress.goodhumans.mx/');
define('WP_SITEURL','https://wordpress.goodhumans.mx/');
$_SERVER['HTTPS'] = 'on';

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordps_7X2p8' );

/** MySQL database username */
define( 'DB_USER', '6N4c7_wordps' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Yn43C3aDjFWQSSsXUT' );

/** MySQL hostname */
define( 'DB_HOST', 'mariadb' );

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
define( 'AUTH_KEY',         'HArR3XbXBmh8Bk3XABQJrTVh5yGZF7vWUXARyTaS52mk9xvybqdh2QNHUcn5SHu3evvj8b85Pbz2TkgtyUZVjvjjaUn7ucaVK6XhfyfCzTpnuXvLdvFsH7uTZcuKBj2F' );
define( 'SECURE_AUTH_KEY',  'n2rnvZWqbUuN5N2xReWL6W6mUEuJR56E5XrBGrMZfUuzJesfwTgYYvwwfPctNCY5LrakJNtzXnn87xLZUEHz34tgFBTPnCrhWWgWjBmjyA3s6Q6zCDLA4mnuJsSqRbuF' );
define( 'LOGGED_IN_KEY',    'u5CjQscbEHyN4zcTHHAHYuwuSMsFrcR2WuMpUMLhHutaD9F749qpD2MxrfXcsqfqqA3AAbzGCxYqFLtzYchkgnTBGxnQ3xykjqTXgfmMXzSWsY2AYNFNxxCfYst2fuVd' );
define( 'NONCE_KEY',        '6kU8WSarqVfjCVESdrRnnCQDsWuuwnpT6xUYP6Qt2QtVcrRAb7y5MSN2abeG5yQndazCJPaz24GWmry8jcPBaAC7Dgfn8Z5BCew4cFa8mYddpGpAYu3dkchsSL4mS5T7' );
define( 'AUTH_SALT',        'jDJUb38yTfWgqnVNLM9ENmyqSCmf4qfzzRdw94Y8XvKJgqu7FXQPCxptUxTnJvQJ9zTBQBZWAf2mrgREpwqzyaLBykaLz6pANxdpVvxySgnjKN55WDuS858p87bvcYTA' );
define( 'SECURE_AUTH_SALT', '3wth4D9yVGq3EKbWqhLhYtpZZJ8rqKhHqfYgYCFcZDhSBTrqD9R6xvYknttbEsEbtHPJz73Bbugw5qwhBmytnhgkLEYnWa8efxWTAFGcfcRE6mRdyQDPFxCsv67zpLHh' );
define( 'LOGGED_IN_SALT',   'RgSkdx2vGNXGSLAS3m5jmsWGQ4PYLQs26jLrDCZyAG2r7eHaaVH5TpcxrX7qpajSzDHUqHr5LeaSTtuQ7hN8cYG8YQPdJWwJ7fV9QXfQdgDhHEKKCGcSXWt4gMN9MHDY' );
define( 'NONCE_SALT',       'jcXThLd73gXqgnv9BQ4WfXfCceb3VVuYfBpRQfDJ8qMTU8BS944Ds2m5pBXpRwkQ9KBscps8sgU2bm5ySHss8k5NTNJEaphXFnkzYnwFyrJMhnUsXeWLqXGFdCj68efz' );

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
