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

define('DB_NAME', 'nextbrick_db');


/** MySQL database username */

define('DB_USER', 'root');


/** MySQL database password */

define('DB_PASSWORD', 'NB700#noid@IN');


/** MySQL hostname */

define('DB_HOST', 'localhost');


/** Database Charset to use in creating database tables. */

define('DB_CHARSET', 'utf8mb4');


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

define('AUTH_KEY',         '4C~;?GRe9U4b~U@E,r}!vJ.u~])xQE[;.@t*|q(cU;bK e~ncyNg-ts7rR6Q7nnx');

define('SECURE_AUTH_KEY',  '8||_@i26=P*T@x0|>J`G#E(#2$!<bD+9-ciDL8h{=NtuCuKUarB]0w EDn}@g.`d');

define('LOGGED_IN_KEY',    'Sxi:r){3*^5HW:eK4OG#1n5G7I!9j5sYao!d3doR<2rHUj -Y0)GO:hL/$4jC7Jw');

define('NONCE_KEY',        '?zNL1?%A,(5&M^VrN&bSilvw=hR=<!*`XT*cnV>KI~lVU?3)n5u!/CXF?GUS{I&r');

define('AUTH_SALT',        '_32eDqb|%BmCSqc6d?bo`cEkw8k,dZ_wJxHig+nWO/11X-0^IY^>xStj(!e>n]>e');

define('SECURE_AUTH_SALT', ',_t`zph7j2tm0;iOeBJlyfei49jP?s6=tsiHTk@RN@FJ,6DB;-*E){{yI,G9d~aP');

define('LOGGED_IN_SALT',   'l._a&iS;0(xj/J?S:YFF<p2gH_&=[%`avS$vW*E2wP-UD7eE9zvlj1f{:wc#u3?I');

define('NONCE_SALT',       'TlY38Et-V)lVf:ARI%TKtU49g=9uGZ#nD;Dr|#@kYjcs8Xy)AF}~6M4*r>K#ArV>');


/**#@-*/


/**

 * WordPress Database Table prefix.

 *

 * You can have multiple installations in one database if you give each

 * a unique prefix. Only numbers, letters, and underscores please!

 */

$table_prefix  = 'wp_';


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

define('WP_DEBUG', false);


/* That's all, stop editing! Happy blogging. */


/** Absolute path to the WordPress directory. */

if ( !defined('ABSPATH') )

	define('ABSPATH', dirname(__FILE__) . '/');


/** Sets up WordPress vars and included files. */
define('FS_METHOD', 'direct');
require_once(ABSPATH . 'wp-settings.php');


