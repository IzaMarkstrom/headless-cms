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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

require_once dirname(__FILE__) . '/vendor/autoload.php';

// Load phpdotenv by instansiate the class and using the static function of createimmutable
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
// On that class we load phpdotenv
$dotenv->load();

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', $_ENV["DB_NAME"]);

/** Database username */
define('DB_USER', $_ENV["DB_USER"]);

/** Database password */
define('DB_PASSWORD', $_ENV["DB_PASSWORD"]);

/** Database hostname */
define('DB_HOST', $_ENV["DB_HOST"]);

/** Database charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The database collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

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
define('AUTH_KEY',         'i3=Ntya)f%%2CSM`z3R-vZ|D Nkdg!wB;fo8hO,soyGtql=8OCr>kuwZ$/lZO!oU');
define('SECURE_AUTH_KEY',  ':|1TZL+6Wb^ZYFxB0sVP,<mlb3tpE#VI{rI5,/G:.t^PzR<kM:b5;tCaCtodq.-X');
define('LOGGED_IN_KEY',    '5r:)+NAZEkwT-GS3%-(_>^d.9xE+$!yTdFqI@7KYP>ixBK20vw4066R|)y>&t3Ja');
define('NONCE_KEY',        'r,u>IBFgFgh+>O{T4Y{BEiw)f3Y3*^CT1K2N|Tb]z9,P=VSaW24C:aclfJTHz|<F');
define('AUTH_SALT',        'AHLp$M>Svk;f~1tP!A8^>ssVf,eqMbD3o}ZeX&v#~8~Y(8x_sLsVU!bKxzq%Eb,i');
define('SECURE_AUTH_SALT', 'GYVAsxWpZ,Z,!!$9L_-#z}H6[VS-#o&MKh->9}AXikWa:R+}ZD(}iceGu4}(,bf2');
define('LOGGED_IN_SALT',   '%$+k6kykWmovH1#R,2C&R:h)d|q%,q--<5DTKvWufBd;[`nV38s=4E$[?H98(=R=');
define('NONCE_SALT',       'cLb-xV]e,j/q<O/(`-=/&MXh23Val}+y^D6PD&S<@->v2gSKj!UHr`t3g:-s_LrP');

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_webb21_nackademin_';

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
define('WP_DEBUG', false);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
