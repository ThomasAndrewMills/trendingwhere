<html>
    <head>
        <title>
            trendingwhere?
        </title>
        <!--CSS link-->
        <link rel="stylesheet" type="text/css" href="style.css">
        <!--Google Maps API link-->
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?v=3.20"></script>

        <!-- Use jquery script -->
        <script type="text/javascript" src="jquery.js"></script>


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>

        <!--Importing fonts from Google-->
        <link href='https://fonts.googleapis.com/css?family=Oleo+Script:400,700' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Bitter:700' rel='stylesheet' type='text/css'>
    </head>
    <body>
        <div id="overlay">

        </div>
        <div id="overlay2">
            <span class="smallTitle">#trending<span class="titleColourEdit">Where?</span></span>
        </div>
        <div id="info">
            <h3 style="margin:0px;font-size:30px;">How to use</h3>
            <p style="font-size:16px;">
                Start by selecting a red marker over a city.
            </p>

            <p style="font-size:16px;">
                Click on each trend to search for it on Twitter.
            </p>
            <p style="font-size:16px;">
                The amount of tweets about each trend is also displayed.
            </p>
            <p style="font-size:16px;">

            </p>
            <p style="font-size:16px;">
                Developed by Thomas Mills, Darren Williamson, Ciaran Miller, Callum Meilia, Callum Robertson,
            </p>
        </div>
        <div id="map-canvas">
        </div>
        <div id="mainMenu">
            <div id="menuItem1">
                <span class="title">#trending<span class="titleColourEdit">Where?</span></span>
                <br>
                <span class="subtitle">
                    <script>

                        $(document).ready(function () {
                            $(".signintwitter").click(function () {
                                $('#overlay').hide();
                                $('#mainMenu').hide();
                                $('#overlay2').show();
                            });
                        });
                        </script>
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
                    <a href="#"><img src="signInTwitter.png" class="signInTwitter"></a>
                </span>
            </div>
        </div>
    </body>
</html>