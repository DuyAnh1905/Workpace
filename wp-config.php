<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'university2' );

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
define( 'AUTH_KEY',         'C#*}<jMzb?S(m;:?ya=:#XKToYUq543T`t.?pDK@UU(,V_by_d!7?y(|=n`[E 4s' );
define( 'SECURE_AUTH_KEY',  'i;%*@_8kVdt2E9_pOpC%9WuSH2j>d0Q$lx=kEp&}W<C_kr@7>$[3R12o6TI}dv>z' );
define( 'LOGGED_IN_KEY',    'b5-hzcBO.fd+BHp,Ah6&!!tX3hJ]`kwn-Lit5%wA35Bh4cp~6{Vz=6wKl(5^iv0`' );
define( 'NONCE_KEY',        'C3*|^~wg~6YfJVW:cK95<Q(k#oet?,oO=v^rEMoQiJ^0L9.ZA>/r%[9cyB.qUR_C' );
define( 'AUTH_SALT',        'QV5qhD~Le!(]~-(FVgQb4PUYo,X=mWFST8RN*g=Sr6nkuK<NXf07h{Qv(JGR0bFZ' );
define( 'SECURE_AUTH_SALT', '_ZFLf.mXk]mGm^f Nz2BRXy?O/f5d r)/8fqsO[RdIw;HjlG_?^TgzXB;J~B2J0,' );
define( 'LOGGED_IN_SALT',   'jq70cv=uj^{--!>{oJ?C)YYG%M@pylT~vT>eg3MdqXXd=e&whkfw;Dx2+Ru$-Y0o' );
define( 'NONCE_SALT',       'bIW8io9Y}8iN#&=H&^PIT3!~)nf91hj$-;0|%HM3oBP3E`.xu<c55A(7PYqg<ppI' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
