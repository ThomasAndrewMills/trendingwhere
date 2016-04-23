<?php
/**
 * Example configuration for php-twitter-proxy
 * Copy and rename this file to config.php
 */


// The following perform security checks for ALL proxy requests.
// Failures result in immediate HTTP error response.






// Global security checks have passed.
// The following configures the Twitter client for proxying request


// Twitter application key and secret
// See: https://dev.twitter.com/apps 
Proxy::init_client( 'OAtCFNvjagzQCoHp5sJU2KtuE','CXHT54PYFdFugE6LKaqvVhUeFRZr8BVhZyHN8iGEsZmfqBlBBZ');


// Authenticated user access token.
// See: https://dev.twitter.com/docs/auth/obtaining-access-tokens
// Obtaining an access token is beyond the scope of this library.
// You could pull them from a database, or send the user through an OAuth flow, or just hard code them.
Proxy::auth_client('455303569-USh4o67B8c6vYzw8taIp4G6WtjQoxpMOS8rseRNI', 'lIrlNxvTW6TY5DBUJmn7VuiWlMtAPz4tUrLE5ngUpENRL' );


// Lock screen_name and user_id parameters in some API calls.
// This prevents other people using some endpoints for their own Twitter feeds
Proxy::lock_users( array( '455303569' => 'ThomasMills_' ) );


// caching engine - currently only APC supported and is enabled by default
Proxy::enable_cache( 'apc', 'your_prefix' );
//Proxy::disable_cache();
