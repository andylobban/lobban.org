<?php
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
define('AUTH_KEY',         '%JA{DFT~-&;L1HAN+N9@tRQH(cO1(&I793comi/p)<x]].>kQ](Lc;?l9:t4$D2F');
define('SECURE_AUTH_KEY',  'i8]E9WcIg28sA@6-{3I7;)-|7+[<Fg|zDs;A#jcrcLYOC[nUv;+;KOo-4fA=YqU-');
define('LOGGED_IN_KEY',    '@*>eI#)F|*1N+tPvo_HQNP<ioz,$W%~N0]aPCccUFPlq(|w3nAZ_NlPeu|YGQG~ ');
define('NONCE_KEY',        'hTrL]K&&Ca5gKef4I*/sk;J[rK[cpyZFq|tb`&(~<I$$T-M2uRW4{L4V+Q/Eaa _');
define('AUTH_SALT',        '.~hsm7:_cDiQvGe92oDO+4O7XQ?>uWb)P>Q2$0r.S{qs2}Fl,p1+Zh,U:e+vVuNd');
define('SECURE_AUTH_SALT', ')&$`77V*_ i-L5J-t`ny )Qv$u[fv7+QDuVVL^D`lh9T,0qc@K|c4p,2~_bH3+(3');
define('LOGGED_IN_SALT',   't`jF=2<:PT,@Qw_B#JjVKT)t+p/DwM;PEIg*+J9q*cn=4]*%sx}o,)e!l0GEK_w/');
define('NONCE_SALT',       '!oFXC#~@l]wivx.dlG>WfW/cx.W=bB7jC3#@4Id~vzRNA8moi+m;o+Mc$=H.E`Ec');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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