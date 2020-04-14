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

define('WP_DEBUG', true);
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'GWNwyOn2opQKE1F7p19XHi4BndYgSvkg1PyvJqKZxgmDvDqKuyGDGJXWPamQQ03KO9ArTf+nr7zgw3eTPi4rcw==');
define('SECURE_AUTH_KEY',  '3WgoI4w0+qAxK/97UIbvtyJV+YYSzexY+J5DEnVqWqW+Jax5hO0VKrA2700tKbA9RHN1P5N9x/gkQBt8aZn88A==');
define('LOGGED_IN_KEY',    '63iF+wazaxNWW3EqxqiwbK6L9pnMIx2XbvRTQ05INlOEbxdCkvO5bo6UR7JRfes6RBfMk2i8Rv4j+sDXOVe3HA==');
define('NONCE_KEY',        '3MBbjOo0MbvMlKe2bEXBy1ONGzVeigFyIRzaIdeQuTKWWpDoyGgSeNwZJFxUnoVf/3va2TZiPYlMrTCRywsX4A==');
define('AUTH_SALT',        'tE25+K8mZaLHN3B1hHPu3ALS03gFQcgD04tRqYSehzpVrA7daX4PbKvMf/CP+JA8tha7Q3IygYm+YHG/s7HPjg==');
define('SECURE_AUTH_SALT', 'NxGutla72NTJrcu/EgL5BjHgEUY3a+/km4xKqVxut7X+B8VvlQtaoXsuPdStvO0rKbQEx7Y0dCvu99Y+IdicDg==');
define('LOGGED_IN_SALT',   '3LZJaLSZwzj62sZowAM5JZzF8zQg45m53D45ZwPmzxkdJdHdPwDGm68b+CWoIYofJNE4RX4TYPBa5o0NqG3NrQ==');
define('NONCE_SALT',       'IiFA5RD087mrYnUC6ZUia+FMTWy8O4aaUDv5W3RadN5bLftgpoBGuVEApG4H3CSkqhqPcE5/2FR1YNAELwTVKQ==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
