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

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'test1_db' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'qM6rbk]uM__WZd|q>^uo0o*galZt]%wb5R)e@.eo#%V|NG[e0CjR5*L5X<y(C]}?' );
define( 'SECURE_AUTH_KEY',  '~u/<c_F.dMVVUppw,;Gr#,0|$Z2DA[^?_4+BOej~A!P^[r2./$//i5@DiZrxjN{8' );
define( 'LOGGED_IN_KEY',    'dxdNtQC)@`?8;&lO=S=x|UH%o^zo}NfthL(*s6*(9WX??;O[Q(s#>i1X)tY&8$|$' );
define( 'NONCE_KEY',        'tvaAMKhVje_Zr|*dxWitlc%@lKH1(=A&0(`EJPCcog5a$1]iH/r+yU12%7#lhCh{' );
define( 'AUTH_SALT',        '&viP$l$x~-BRS7W/m~{dB)4>61(YgZ9#R(pZd4_6qD});5!SIJip-k3&W=?l+9}[' );
define( 'SECURE_AUTH_SALT', '4h8SLtLrp66Q.1i$kx!7WEW4o+NDb*y[4q!k4,r):$b(l&~bLo=S6,(qBwML3l.%' );
define( 'LOGGED_IN_SALT',   ')/a9OALke>W/;Wr10xAE*T*(i{il,y<r$/0]=G^V4P*)(c`PQ5s./<%P/h{{1CYe' );
define( 'NONCE_SALT',       'xqF$PY%/M)R:o,cP9dWow+yvQh(D1Ax2s7p&K]J{s[chlfmD[R!24wKLz}l*:+~J' );

/**#@-*/

/**
 * WordPress database table prefix.
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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
