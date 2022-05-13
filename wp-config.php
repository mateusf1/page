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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'j}u`?9:h]D29 Lk)Re[Pbmi.zK]PNTvqu0X+Ry =#u+?d`QU84;t9^Y+}Um0{I(;' );
define( 'SECURE_AUTH_KEY',  '#?gY?~D+t9>u|K;ijn!fGi.=cRyw|_,e-Itv8}+UuLg]fQdSyl96C$;5T~EX@3g=' );
define( 'LOGGED_IN_KEY',    ']s&B?JYE31+ }CwYcgK7!7J-4WBYl*M9][{>< %E`;|,fLB=zA9L9u4Xc1K-8`8Y' );
define( 'NONCE_KEY',        ']85$dR^ztp>-#bhd_pK|(zv&wnbgQ%q{|~?zZie5$z.mxtse6wPK4T1(^v<e[95g' );
define( 'AUTH_SALT',        'J !.]*fdSBF-3d[-c[#Al*S4wJpk5r*gRbc5: <%{/XFDWcINJrjNU@$CXVQp$]b' );
define( 'SECURE_AUTH_SALT', 'FQ2CvH~,~EgKcq0>RJ%f0/ES&m$1,=;.>Z_7Rm3RpsZxBL7]t8H$e;qZc.0rS@:Q' );
define( 'LOGGED_IN_SALT',   '{{.k+1%fc>l86&P[An9cCsSTV~q]E16Lk=}0fjm-i&s2_b|)tjJdDti]DfPMACJY' );
define( 'NONCE_SALT',       ' qJx|.X=|qqlU+Bcn|0,h/uqmI9GQ%UkaM[4euTt?1vP/WBD]y23j#^S-LAw=bIS' );

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
