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
define( 'AUTH_KEY',          '2S~cT+h/]J`~W*eT7q<[}=gvz*M;<%BR!l9S`%~G4i}s}k2ztMk@(&:cx10&{k!;' );
define( 'SECURE_AUTH_KEY',   '#{p;Da=sx]Tp[w`yEp*vX3F9enn]WxT<G<CY`}CI_-=6!((9/TP`)iJ9.7Lw7w e' );
define( 'LOGGED_IN_KEY',     '^*h(PWB[Ei|9!)1tdR^:S,h)oUd[)zRD6D4{6+odKkWtdtP!V:5ygJmi!g#zW>wf' );
define( 'NONCE_KEY',         'PnUO){bft_Pke{a*JYV,Pg`2ANUFqt6-}18A`t1?HXDj?Zqz$o)J)r=o.n{6q0`I' );
define( 'AUTH_SALT',         '_w1DNVN8UB<V(zY|y]g=rIv:q/+dzTV+*nSVtF&k zc[%/=?Kb]htJeK}i)FGPb`' );
define( 'SECURE_AUTH_SALT',  '^J_X3Lr}SP=jUIpe`3/p.Sng(Mn8$4/?^#3QM{jj#SGY>BuE$t{bU@)^6HxgYpdu' );
define( 'LOGGED_IN_SALT',    'krQMHi2cM{TQzz1}<JoeM=xz.Wpzgg;d[2pJdjrv08f5d!?iC^E{8#~72#~iMj(s' );
define( 'NONCE_SALT',        '0+b2bJ K,2F]e`hp_`S#TRw~ZbLr$Pa0;*!a?a8SF1Ohc ?0D&nH).UJzm(]okAV' );
define( 'WP_CACHE_KEY_SALT', '9~U!(RvgnlYO ZF)s?OP,Ymd)8:l.}ZF7=dmOT!mwc_ r~UvcLqm+;hXHYbw:&#|' );


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
