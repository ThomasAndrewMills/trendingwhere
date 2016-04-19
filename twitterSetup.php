<?php

require "twitteroauth/autoload.php";
use Abraham\TwitterOAuth\TwitterOAuth;
    define('CONSUMER_KEY', 'OAtCFNvjagzQCoHp5sJU2KtuE');
    define('CONSUMER_SECRET','CXHT54PYFdFugE6LKaqvVhUeFRZr8BVhZyHN8iGEsZmfqBlBBZ');
    define('OAUTH_CALLBACK', 'http://trendingwhere.azurewebsites.net/twitterSetup.php');

    $request_token = [];
    $request_token['oauth_token'] = $_SESSION['oauth_token'];
    $request_token['oauth_token_secret'] = $_SESSION['oauth_token_secret'];

    if (isset($_REQUEST['oauth_token']) && $request_token['oauth_token'] !== $_REQUEST['oauth_token']) {
        echo($_REQUEST['oauth_token'] . "------------------------------" . $_SESSION['oauth_token_secret']);
    }

    $connection = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET, $request_token['oauth_token'], $request_token['oauth_token_secret']);

    $access_token = $connection->oauth("oauth/access_token", ["oauth_verifier" => $_REQUEST['oauth_verifier']]);

    $_SESSION['access_token'] = $access_token;

?>