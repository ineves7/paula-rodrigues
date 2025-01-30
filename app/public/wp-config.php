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
define( 'AUTH_KEY',          '`s7`933Q+;d`PFxmIDQJa<K|Q ^|)3SiG.LA-C`@-`Hbh`:Mpn}z{JbWbZ4=3|c^' );
define( 'SECURE_AUTH_KEY',   '0D<=p@?Efcx|E>qCY/&4&(h>$*lGtq^T^yV<oO ;Mva&76Al{YsQ!gr1HL-i]+.z' );
define( 'LOGGED_IN_KEY',     'A.P&L?#MpldnMiM9l`h@KsARQJ2-P_^YMzW758D t=%{_>M#>t=PD[<SZ7?u.(%2' );
define( 'NONCE_KEY',         '`T8xH:FT=U@x({Q.Eeoi{hF+(dTegxxAWFA/W,7Kwuof1!+U0UZX{& A$/4FARB6' );
define( 'AUTH_SALT',         '$oYr7 =m9ApQ])Jea.X3,g_yz S$(4q(;>OB:qDA9nP(3LyG(#QW$[&PTY5GT 6o' );
define( 'SECURE_AUTH_SALT',  '65xq Kw~cy.7bBG3:b0i9+N<UtpF?e9[o,OgQ>*5h]9UWy}d&]9*Yu>nJD(.bLvX' );
define( 'LOGGED_IN_SALT',    '^AYVQ>RCJ4pmf[Hs=Zbi].h}[P>YxUgW}r7AdvVHYnG$XG_?ch@!|!m~9P)/):FZ' );
define( 'NONCE_SALT',        'oc).bEN*EsF-*[=Ef7n27xGwlL[h$L>?Q?z6&I+iuV~vQ?Nn)!9Y#/:BG.h6!n.*' );
define( 'WP_CACHE_KEY_SALT', '[ldQji4.F5T9re=POG)t]hw]H+|8u:J]S5)ArvgP)xQivy^0T8WFu{sVdj<28jb:' );


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
