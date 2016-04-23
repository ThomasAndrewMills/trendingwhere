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
                        <a href="https://trendingwhere.azurewebsites.net/twitterproxy/1.1/account/verify_credentials.php?skip_status=1&callback=jsfunc"><img src="signInTwitter.png" class="signInTwitter"></a>
                    </span>
            </div>
        </div>
    </body>
</html>