<html>
    <head>
        <!--CSS link-->
        <link rel="stylesheet" type="text/css" href="style.css">
        <!--Google Maps API link-->
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?v=3.20&sensor=false"></script>

        <!-- use the existing file in the js folder -->
        <script type="text/javascript" src="jquery.js"></script>

        <!-- Using the Google CDN -->
        <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

        <!--Importing fonts from Google-->
        <link href='https://fonts.googleapis.com/css?family=Oleo+Script:400,700' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Bitter:700' rel='stylesheet' type='text/css'>
        <script>
            $(document).ready(function(){
                $(".signintwitter").click(function(){
                    $('#overlay').hide();
                    $('#mainMenu').hide();
                    $('mapLogo').show();
                });
            });
        </script>
    </head>
    <body>
    <div id="overlay">

    </div>
    <div id="map-canvas">
    </div>
        <div id="mainMenu">
            <div id="menuItem1">
                <span class="title">#trending<span class="titleColourEdit">Where?</span></span>
                <br>
                    <span class="subtitle">
                        <?php
                        require "twitteroauth/autoload.php";
                        use Abraham\TwitterOAuth\TwitterOAuth;

                        $connection = new TwitterOAuth('OAtCFNvjagzQCoHp5sJU2KtuE', 'CXHT54PYFdFugE6LKaqvVhUeFRZr8BVhZyHN8iGEsZmfqBlBBZ');
                        $request_token = $connection->oauth('oauth/request_token', array('oauth_callback' => 'http://www.trendingwhere.azurewebsites.net/'));
                        $_SESSION['oauth_token'] = $request_token['oauth_token'];
                        $_SESSION['oauth_token_secret'] = $request_token['oauth_token_secret'];
                        $url = $connection->url('oauth/authorize', array('oauth_token' => $request_token['oauth_token']));

                        define('CONSUMER_KEY', getenv('CONSUMER_KEY'));
                        define('CONSUMER_SECRET', getenv('CONSUMER_SECRET'));
                        define('OAUTH_CALLBACK', getenv('OAUTH_CALLBACK'));

                        $request_token = [];
                        $request_token['oauth_token'] = $_SESSION['oauth_token'];
                        $request_token['oauth_token_secret'] = $_SESSION['oauth_token_secret'];

                        if (isset($_REQUEST['oauth_token']) && $request_token['oauth_token'] !== $_REQUEST['oauth_token']) {
                            // Abort! Something is wrong.
                        }

                        $connection = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET, $request_token['oauth_token'], $request_token['oauth_token_secret']);

                        $access_token = $connection->oauth("oauth/access_token", ["oauth_verifier" => $_REQUEST['oauth_verifier']]);

                        $_SESSION['access_token'] = $access_token;

                        $access_token = $_SESSION['access_token'];

                        $connection = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET, $access_token['oauth_token'], $access_token['oauth_token_secret']);

                        $user = $connection->get("account/verify_credentials");


                        ?>
                        Sign in using your twitter account and explore the trending topics<br> of cities around the world!
                    </span>
                <br>
                <br>
                <img src="trendingWhereInterface.png" class="trendingWhereInterface">
                    <span class="bulletPointText">
                        <ul>
                            <li>Pan across the map by clicking and dragging your mouse.</li>
                            <li>Select your chosen city by clicking on the marker.</li>
                            <li>The top 10 trending topics for that city will be displayed.</li>
                            <li>Get started by signing in to twitter with the button below!</li>
                        </ul>
                        <a href="<?php echo($url);?>"><img src="signInTwitter.png" class="signInTwitter"></a>
                    </span>
            </div>
        </div>
    </body>
</html>