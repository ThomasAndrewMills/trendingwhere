session_start();
<?php
/**
 * Example configuration for php-twitter-proxy
 * Copy and rename this file to config.php
 */



// Global security checks have passed.
// The following configures the Twitter client for proxying request


// Twitter application key and secret
// See: https://dev.twitter.com/apps 
Proxy::init_client( 'OAtCFNvjagzQCoHp5sJU2KtuE', 'CXHT54PYFdFugE6LKaqvVhUeFRZr8BVhZyHN8iGEsZmfqBlBBZ' );


// Authenticated user access token.
// See: https://dev.twitter.com/docs/auth/obtaining-access-tokens
// Obtaining an access token is beyond the scope of this library.
// You could pull them from a database, or send the user through an OAuth flow, or just hard code them.
Proxy::auth_client($_SESSION['oauth_token'], $_SESSION['oauth_token_secret'] );