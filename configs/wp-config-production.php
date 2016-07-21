<?php


// ** MySQL settings ** //
/** The name of the database for WordPress */
define('DB_NAME', 'moelisprod');

/** MySQL database username */
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'wordpress');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');


$table_prefix = 'wp_';

/** Use Secure Keys for FTP updates
**/

define( 'WP_SITEURL', 'http://' . $_SERVER['HTTP_HOST'] . '/' );
define( 'WP_HOME', 'http://' . $_SERVER['HTTP_HOST'] . '/' );

/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
