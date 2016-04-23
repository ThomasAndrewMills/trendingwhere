<?php
/**
 * account/verify_credentials
 * https://dev.twitter.com/docs/api/1.1/get/account/verify_credentials
 */
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
//echo"here";
require '../../twitter-proxy.php';

Proxy::relay( 'account/verify_credentials' );

//$token=$_GET["oauth_token"];
//$verifier=$_GET["oauth_verifier"];


?>

<!--<script>-->
<!---->
<!--    function getTrend()-->
<!--    {-->
<!--        var url="https://api.twitter.com/1.1/trends/place.json";-->
<!--        var data={"param1": "value1",-->
<!--                    "param2":"value2"-->
<!--                };-->
<!--        $.getJSON(url,data,-->
<!--                    function(reply){-->
<!---->
<!--                    }-->
<!--                   );-->
<!---->
<!--    } //end function-->
<!---->
<!--    function aFunction(){-->
<!--        print("Test");-->
<!--    }-->
<!--</script>-->
<html>
<head>
</head>
<body>
<p>Tested</p>
</body>
</html>

