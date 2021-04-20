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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'openhub_db' );

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

define( 'WP_MEMORY_LIMIT', '256M' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '[uL% @wwVgJW^S|1FUYeP3| _M+GPY&:.Q{Kv/2|F[7`LEag fmo]BGHrb#:/X(|' );
define( 'SECURE_AUTH_KEY',  '_$Ze~S}O6l<g3V:GDI-kY$gEt3elG=_FtZpAR1XEd:WyM*f |3{0us3VF3[V0&9b' );
define( 'LOGGED_IN_KEY',    '];;O!c7K>H8K&Zv,%:oH7Ld+]bK<86X(!J`T(l]+{n:*#eo~m,}-uMNQ.B-qMJX0' );
define( 'NONCE_KEY',        '9b L~H}}(7e>aK$<AxN{W fqFMF|%/A=BrBo|Y2|6ZeEQ0{H~% 4#q1[Vc3 Rc#B' );
define( 'AUTH_SALT',        'Z}K;2<bc@HHqG|!OVtyiMh<J+k,73Fwr+:F?]f*vtr|1)$QNBm1a]SPq,yN&&RzC' );
define( 'SECURE_AUTH_SALT', 'r&>YP>4pVr>}HbyYKQMG0[K%6PK5.t>mm%tD;9w8S)lnqSQ{{D=,Y{2:W}lOlgwi' );
define( 'LOGGED_IN_SALT',   '.yb3Q9Ul9cUt%b+k+u3+jr%Vi#+WX,f#~dQDSu0JoYI=(pOu+&p`g(ex2;(iAvL4' );
define( 'NONCE_SALT',       '#@E>Ami>`x-MdVj%Hv&km*m0t9VkkzHZC78(~pt/[q)DI~y?qpT.4+8-I6UK.VaP' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
