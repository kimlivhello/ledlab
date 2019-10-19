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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ledlab' );

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
define( 'AUTH_KEY',         'LLNXWj1-XlW)+LsZ8w/NH;sQ9.Ea4nhgX}I83N>H6FY-tevYD9Rx/Lx|^rh$BROJ' );
define( 'SECURE_AUTH_KEY',  ',||TNSFxD}]k[/v2+G9(/FvK5$yiQ)Oe+?$5eB`%W~9d3~#J$lR_%Fi!%p<!l1{;' );
define( 'LOGGED_IN_KEY',    'a6uaP{L1t;7tL6CtCE(=M~wZz)SH(3330OPlV.L*:Ls$T|eLQ@Gc|B3r7]Cxypf*' );
define( 'NONCE_KEY',        'Pw(> _=lH!(uZe#JCF12%fkK;-{d#V%I3G%/5SJ!j+5*JgHV|jIn,c!GyeG*U#^:' );
define( 'AUTH_SALT',        'qF 43 ,sz*pX#hspbV)Ba+f&)C=+Td^R!d_{@Nm_VNlTRxc);Hd}2*#~4,3i[v-K' );
define( 'SECURE_AUTH_SALT', 'T7XvvQZa1RKuOOXt7W};MZyH!cfV0YQa/%[w5L@O+==wPuE];%lk:l%K;N=@r7f+' );
define( 'LOGGED_IN_SALT',   ';{nEkMrXj~ZB6*;rQ!moi<xgrJ~owE-lnwzH/_beWvlPty8tt!V@o)vW^~P38ax,' );
define( 'NONCE_SALT',       '6Hg)fMbZU6A3=Dnza(;wNLQZ,Z6sTF!7mto;Jgff%QrwxwBIjo8h bLMQ($l!NHN' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
