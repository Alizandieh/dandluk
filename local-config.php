<?php
// Database constants
// These are probably defined in local-config-db.php
define( 'DB_NAME', 'dandluk' );
define( 'DB_USER', 'admin' );
define( 'DB_PASSWORD', '@password' );
define( 'DB_HOST', 'localhost' ); // Probably 'localhost'

// Custom table prefix
$table_prefix  = 'wp_';

// URL to the content directory
// You'll probably want to change this.
define( 'WP_CONTENT_URL', 'http://' . $_SERVER['HTTP_HOST'] . '/wp-content' );

// Loopback connections can suck, disable if you don't need cron
# define( 'DISABLE_WP_CRON', true );

// You'll probably want Automatic Updates disabled during development
define( 'AUTOMATIC_UPDATER_DISABLED', true );

// Disable admin area file edits
define( 'DISALLOW_FILE_EDIT', true );


