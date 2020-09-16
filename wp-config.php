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
define( 'DB_NAME', 'darshan' );

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
define( 'AUTH_KEY',         'Hp)iS0(:e1n0zI>T-r^yP}%lQ5l#-J4K :E*#CH.tci>Q&d4+N[sEDCn#hw%2Yfk' );
define( 'SECURE_AUTH_KEY',  '//:1=EH8)r<E`L:pznjYC(hP0Nw4ZRv%y]0w5:J]oJ4$`&A<648)BDw1e@T|6za)' );
define( 'LOGGED_IN_KEY',    '+OFPR[a5tC6&[X=/Z 8JpGC1%4$s[~2a-bF@A@5kI!QX]xspA;v/^DX*!*q]S`RW' );
define( 'NONCE_KEY',        'nx3M8x/8@mY}Zgu~f~8_t}QaT-,zjFZwf_I,KE*cNQUZh4aCz7|.]ZNoP}P>D.G9' );
define( 'AUTH_SALT',        '@ltFAll<Dq~U(ddH2x&u=*lNx[BA[Wfg4~_Z6|)hT2vg~lI#+6[62VBavEF.1EbS' );
define( 'SECURE_AUTH_SALT', '1^dc#?nS[M6AFsi0b-AKz9dH85D,,G2$<;U0R.Iy7GxFWvCu;S;5az0.B^~=./|n' );
define( 'LOGGED_IN_SALT',   ')IoE4`+_Fr=>y4+-/61Rg(BOENuQt |j:,2yn;<b=!qCtb5t<Y3`}} vS;RXf~~%' );
define( 'NONCE_SALT',       ';cbdgQ@V{n!|Bb?C1UI;p~K!3`BLGU9|SSWo-ifWH<r*Z<y#=<V !oi0$%wi0>/[' );

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
