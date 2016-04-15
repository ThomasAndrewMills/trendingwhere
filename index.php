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

                        function getConnectionWithAccessToken($oauth_token, $oauth_token_secret) {
                            $connection = new TwitterOAuth('OAtCFNvjagzQCoHp5sJU2KtuE', 'CXHT54PYFdFugE6LKaqvVhUeFRZr8BVhZyHN8iGEsZmfqBlBBZ', $oauth_token, $oauth_token_secret);
                            return $connection;
                        }

                        $connection = getConnectionWithAccessToken("455303569-USh4o67B8c6vYzw8taIp4G6WtjQoxpMOS8rseRNI", "lIrlNxvTW6TY5DBUJmn7VuiWlMtAPz4tUrLE5ngUpENRL");
                        $content = $connection->post("oauth/request_token");

                        echo "test";
                        echo $content;

                        ?>
                        <a href="https://api.twitter.com/oauth/authorize?oauth_token=OAtCFNvjagzQCoHp5sJU2KtuE">CLICK HERE TO LOGIN</a>
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
                        <img src="signInTwitter.png" class="signInTwitter">
                    </span>
            </div>
        </div>
    </body>
</html>