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
define( 'DB_NAME', 'bootstrap2wordpress' );

/** MySQL database username */
define( 'DB_USER', 'bootman' );

/** MySQL database password */
define( 'DB_PASSWORD', '9guc457a5uzpyVuv' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define('AUTH_KEY',         ';P (epqe>PuS=fIM`H?4|FiWQRzRCI&s|F$u=,Q~yb[31<r%N1LPmMdH%z^Zm=g2');
define('SECURE_AUTH_KEY',  'awsaQ2-Yi^h&*e5%j;lKa*yA`Jw{Vqh#iLu;H$~y2IrY+HPu[I=1Kxj6F1BFdq|?');
define('LOGGED_IN_KEY',    '~{(l93J8&BsIKGs0SAkTnE50:@0%yH[tm]S+q,fg/p(}MEkN=lKK$!#KWJVEY]~P');
define('NONCE_KEY',        '#RQ/mPK0Im8e/zeDACVdg0Cm+C$$pcV+c-,WZXi o_1Zv}c%ooV-;+8DP0dw$Zyt');
define('AUTH_SALT',        'ZI^}c||=->+(?UpQSSqE5#UtE}F$j%}nWV N^+HY|;s#sN+Y|pl-/NDv-[Ky!`.3');
define('SECURE_AUTH_SALT', 'v2 )Xuy@s1ruyGkz0^?eykwt{Rg&?zD~rOr-@zUxU+U6-!lBuyrQmN?<QHzdvh4%');
define('LOGGED_IN_SALT',   '2#Q~^7M@wjB U-{~`Y-w=;^@hh3UR%lLW?q5&kp%Cv`d8m70!PWBp-[*3AU~}|_j');
define('NONCE_SALT',       '}dWyW-H@5 $,8q,c1jLM/K`+0+<d$>Ayf`=K=l3<vGW>3u< cu+vb+?jvb=2GMBn');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'dbbs_';

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
