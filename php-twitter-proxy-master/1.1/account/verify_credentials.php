<?php
/**
 * account/verify_credentials
 * https://dev.twitter.com/docs/api/1.1/get/account/verify_credentials
 */
echo '<p>Testing</p>';
require '../../twitter-proxy.php';
echo '<p>Testing</p>';
Proxy::relay( 'account/verify_credentials' );
?>
