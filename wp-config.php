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
 
// Set up WordPress to live in the /core folder

if( ( $_SERVER['SERVER_NAME'] == 'DOMAINNAME.com' ) || ( $_SERVER['SERVER_NAME'] == 'www.DOMAINNAME.com' )  ):
	define('WP_ENV', 'prod');
elseif( $_SERVER['SERVER_NAME'] == 'STAGING.DOMAINNAME.com' ):
	define('WP_ENV', 'staging');
else:
	define('WP_ENV', 'localdev');
endif;

define('WP_SITEURL', 'http://' . $_SERVER['SERVER_NAME'] . '/core');
define('WP_HOME',    'http://' . $_SERVER['SERVER_NAME']);
define('WP_CONTENT_DIR', dirname( __FILE__ ) . '/wp-content');
define('WP_CONTENT_URL', 'http://' . $_SERVER['SERVER_NAME'] . '/wp-content');
  
if( WP_ENV == 'staging' ):

	define('WP_SITEURL', 'http://' . $_SERVER['SERVER_NAME'] . '/SITENAME/core');
	define('WP_HOME',    'http://' . $_SERVER['SERVER_NAME'] . '/SITENAME');
	define('WP_CONTENT_DIR', dirname( __FILE__ ) . '/wp-content');
	define('WP_CONTENT_URL', 'http://' . $_SERVER['SERVER_NAME'] . '/SITENAME/wp-content');

	define('DB_NAME', 'DBNAME');
	define('DB_USER', 'DBUSER');
	define('DB_PASSWORD', 'DBPASS');
	define('DB_HOST', 'HOSTNAME');

	// Options

	define('WP_DEBUG', false);

elseif( WP_ENV == 'prod' ):

	define('DB_NAME', 'DBNAME');
	define('DB_USER', 'DBUSER');
	define('DB_PASSWORD', 'DBPASS');
	define('DB_HOST', 'HOSTNAME');

	// Options

	define('WP_DEBUG', false);

elseif( WP_ENV == 'localdev' ):
  
	define('DB_NAME', 'DBNAME');
	define('DB_USER', 'root');
	define('DB_PASSWORD', '');
	define('DB_HOST', 'localhost');

	// Options

	define('WP_DEBUG', false);
  
else:

  exit('No environment.');
  
endif;

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
define('AUTH_KEY',         'mNu|bROps6j^*[!9rsiErp]!t^h?leUqTN-(=tG=CW<L@$Ij9@jbkQx GpgVs#X[');
define('SECURE_AUTH_KEY',  'Mbp9lu6hCHPX6&%@VnR?Sh`Me4OH|G=Z5dTS7[HS.oFhjD)e+>*sci@CpwFC1C)$');
define('LOGGED_IN_KEY',    'IJ:pV|uUcXS!H[ylZerb(:iG.At{|(Z}.n8=IVrK{.AQV~=w6?!<QT*$KB:[71M8');
define('NONCE_KEY',        ']&[NP.piQ4STTV!l,jO$1<6cP6b/42*<8Sp9?x=c0`&UDPiXiBl;LSc6wWyFA#5?');
define('AUTH_SALT',        'H]I$)6=By#}}DK}Di>}MGo:hxMY)D_rV5MtKMeSr}m=pw)3cW#qB NgfvIu7f,jK');
define('SECURE_AUTH_SALT', 'W ,Zh?9P4&,?h*v0&a=m#C0Ol8&w<9r*XH0XI(~?N<CxE>KgmT5;PsD6IX~OLe!.');
define('LOGGED_IN_SALT',   'eZ5qt%w{FDec9Di1YbQ76y)N;P6W-mez<fzln?Yr@3*k{etT,v>Yx=opO&BY`# ,');
define('NONCE_SALT',       'j6<at`3u}P2@r]Cm7`SX?w+Ty?HJ%xEG ?yo*c8O;7J{_/42]_#]:d%cVX#&>XJ7');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'prefix_';

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
