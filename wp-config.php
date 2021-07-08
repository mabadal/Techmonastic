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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '24Q[oaCObF<Rc`9x-[lYqxkmcJ6UuHU]FZgXb2v%y?MtjygAg!JAPLgGvG^OYTew' );
define( 'SECURE_AUTH_KEY',  '8Dioj[f_*^s /?7mK(t&Keb1-qH(f.hl<40W+DwAA]CaFrT9ljm|]KXdQgD[P2#;' );
define( 'LOGGED_IN_KEY',    '#asPR+cLWP_Sd*[g7*&7z5w6W((`t]MU+_(::^>~BYH,n fg;dS!MYP@~&#oSV-=' );
define( 'NONCE_KEY',        '16S-fo!V}r#::JHST0WQ@#!_?F1 dz#M~N8:cX9F<<9R$P;ypORq#bL%vJ@#d~,Q' );
define( 'AUTH_SALT',        'I,I,E+Zbr/B}JPYkV)5bLURLlZ$gmKKLA?6!r4jOjwGosQg@&^078|m+MJ%4M5}@' );
define( 'SECURE_AUTH_SALT', 'L3MAQz.sgkpy#D@oLKO(<@D< 0YQTQ<zNM6[mr *|:)vA!!:gP4=Q:xeA1Y5z}<5' );
define( 'LOGGED_IN_SALT',   'hGKYSJvG&v]?xId.ek. L&#@x37-d8<vpKRV{bJJv2Svhp_<S.W7<wtSpJDRa;}Z' );
define( 'NONCE_SALT',       'er6fsmF&1D=Jl-t2(#2Hu5{wtWXb%7Q|<:]vfS*AhO.9$108*7YhuuNE77W.<y. ' );
define('WP_DISABLE_FATAL_ERROR_HANDLER',TRUE);
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
define('WP_ALLOW_MULTISITE',true);
define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', false);
define('DOMAIN_CURRENT_SITE', 'localhost');
define('PATH_CURRENT_SITE', '/wordpress/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
define('DISALLOW_FILE_EDIT',false);
define('DISALLOW_FILE_MODS',false);
