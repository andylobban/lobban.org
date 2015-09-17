<?php

// BEGIN iThemes Security - Do not modify or remove this line
// iThemes Security Config Details: 2
define( 'DISALLOW_FILE_EDIT', true ); // Disable File Editor - Security > Settings > WordPress Tweaks > File Editor
// END iThemes Security - Do not modify or remove this line

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

define('WP_SITEURL', 'http://' . $_SERVER['SERVER_NAME'] . '/wordpress');
define('WP_HOME',    'http://' . $_SERVER['SERVER_NAME']);
define('WP_CONTENT_DIR', $_SERVER['DOCUMENT_ROOT'] . '/wp-content');
define('WP_CONTENT_URL', 'http://' . $_SERVER['SERVER_NAME'] . '/wp-content');
define('WP_DEFAULT_THEME', 'lobban');

if ( file_exists( dirname( __FILE__ ) . '/wp-config-local.php' ) ) {  
    include( dirname( __FILE__ ) . '/wp-config-local.php' );  
    } 
    
elseif ( file_exists( dirname( __FILE__ ) . '/wp-config-staging.php' ) ) {  
    include( dirname( __FILE__ ) . '/wp-config-staging.php' );  
    }  

else {  
    define('DB_NAME', 'lobbanor_lobban');  
    define('DB_USER', 'lobbanor_lobban');  
    define('DB_PASSWORD', 'W7]pk.&<=|548>2');  
    define('DB_HOST', 'localhost'); 
    }  

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
define('AUTH_KEY',         'Ht:d{J1`3S2gPRC!Wu`Y+-nPhE{J^ntB^,Ec)>^+!>pm#rBCnb<~mV-%Kw`dqnW.');
define('SECURE_AUTH_KEY',  '%`$m91 9b dH),L$x6x}:>XQ@ad>2tm5tTJ49S_]hQRd5(.|D.)u~Lt,Hg3gJq9i');
define('LOGGED_IN_KEY',    'xegZ1dX:zTn@pk`Z-BOkz;* -E4#*{sE339H-I}ZB@^W/-+[)E}!IA?O^P~[+r?|');
define('NONCE_KEY',        'w,2=/%HW@{:Y[>`?!+4%s^G5k1.?y.x?b*E+pD8#c9$s)[dh?<MP5sF2=;yP^bXF');
define('AUTH_SALT',        'WUtC_d^NO0(n+wTdo&utD4sBOs(o?_V,.oFx~6(#P<d@Ckz@Bf~.*SxIl#,+1raQ');
define('SECURE_AUTH_SALT', 'c}=X=Jt:U-FTmXqP< GH.}wp[9J7k`X0:)sVce#A3:.7?Ux9u6yMH}ouiday#Rk-');
define('LOGGED_IN_SALT',   'jCujX/Y/zc[pqZ=RDX1y)h*je)}<*0E,Mm[a@3rh^SU#6[|YVQ5]Y(u!=BU-1!y?');
define('NONCE_SALT',       'LFp{A*[<|%#OXm>eG=2gpXB)rdV|v[H4dz=-vJ3^f~iadMSc4:;2yM`eg%/sQyAQ');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'qfr59d9c_';

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