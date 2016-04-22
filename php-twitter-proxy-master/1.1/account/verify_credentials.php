
<?php
session_start();
/**
 * account/verify_credentials
 * https://dev.twitter.com/docs/api/1.1/get/account/verify_credentials
 */
 
require '../../twitter-proxy.php';

Proxy::relay( '1.1/account/verify_credentials' );

?>
