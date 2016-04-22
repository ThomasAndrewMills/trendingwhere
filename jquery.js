//defining the center of the map
var center = new google.maps.LatLng(55.864237,-4.251806);


function initialize() {
    var mapOptions = {
        center: center,
        zoom: 7,
        disableDefaultUI: true,
        styles: [{
            featureType: 'poi',
            stylers: [{ visibility: 'off' }]  // Turn off points of interest.
        }, {
            featureType: 'transit.station',
            stylers: [{ visibility: 'off' }]  // Turn off bus stations, train stations, etc.
        }],
        disableDoubleClickZoom: true
    };

    var map = new google.maps.Map(document.getElementById("map-canvas"),mapOptions);

    //pop up trends menu
    var content =       '<div class="trendsMenuContainer">' +
                            '<div class="cityTitle">' +
                                'CITY NAME' +
                            '</div>' +
                                '<div class="trendsGroup">' +
                                '<div class="trend">Trend1</div>' +
                                '<div class="trend">Trend2</div>' +
                                '<div class="trend">Trend3</div>' +
                                '<div class="trend">Trend4</div>' +
                            '</div>'+
                                '<div class="trendsGroup">' +
                                '<div class="trend">Trend5</div>' +
                                '<div class="trend">Trend6</div>' +
                                '<div class="trend">Trend7</div>' +
                                '<div class="trend">Trend8</div>' +
                            '</div>'+
                                '<div class="trendsGroup">' +
                                '<div class="trend">Trend9</div>' +
                                '<div class="trend">Trend10</div>' +
                                '<div class="trend">Trend11</div>' +
                                '<div class="trend">Trend12</div>' +
                            '</div>' +
                        '</div>';

    //The pop-up trends menu
    var infowindow = new google.maps.InfoWindow({
        content: content
    });

    // marker positions
    var city1 = new google.maps.LatLng(55.864237,-4.251806);
    var city2 = new google.maps.LatLng(57.149717,-2.094278);
    var city3 = new google.maps.LatLng(55.953252,-3.188267);
    var city4 = new google.maps.LatLng(51.507351,-0.127758);
    var city5 = new google.maps.LatLng(43.106456,-76.217705);
    var city6 = new google.maps.LatLng(53.480759,-2.242631);
    var city7 = new google.maps.LatLng(40.712784,-74.005941);
    var city8 = new google.maps.LatLng(48.856614,2.352222);
    var city9 = new google.maps.LatLng(52.520007,13.404954);
    var city10 = new google.maps.LatLng(55.755826,37.6173);
    var city11 = new google.maps.LatLng(28.613939,77.209021);

    // marker options
    var marker1 = new google.maps.Marker({
        position: google.maps.LatLng(55.864237,-4.251806),
        map: map,
        title:"Glasgow"
    });

    // marker options
    var marker2 = new google.maps.Marker({
        position: city2,
        map: map,
        title:"Aberdeen"
    });

    var marker3 = new google.maps.Marker({
        position: city3,
        map: map,
        title:"Aberdeen"
    });

    var marker4 = new google.maps.Marker({
        position: city4,
        map: map,
        title:"Aberdeen"
    });

    var marker5 = new google.maps.Marker({
        position: city5,
        map: map,
        title:"Aberdeen"
    });

    var marker6 = new google.maps.Marker({
        position: city6,
        map: map,
        title:"Aberdeen"
    });

    var marker7 = new google.maps.Marker({
        position: city7,
        map: map,
        title:"Aberdeen"
    });

    var marker8 = new google.maps.Marker({
        position: city8,
        map: map,
        title:"Aberdeen"
    });

    var marker9 = new google.maps.Marker({
        position: city9,
        map: map,
        title:"Aberdeen"
    });

    var marker10 = new google.maps.Marker({
        position: city10,
        map: map,
        title:"Aberdeen"
    });

    var marker11 = new google.maps.Marker({
        position: city11,
        map: map,
        title:"Aberdeen"
    });

    //marker listeners
    google.maps.event.addListener(marker1, 'click', function() {
        infowindow.open(map,marker1);
    });

    google.maps.event.addListener(marker2, 'click', function() {
        infowindow.open(map,marker2);
    });

    google.maps.event.addListener(marker3, 'click', function() {
        infowindow.open(map,marker3);
    });

    google.maps.event.addListener(marker4, 'click', function() {
        infowindow.open(map,marker4);
    });

    google.maps.event.addListener(marker5, 'click', function() {
        infowindow.open(map,marker5);
    });

    google.maps.event.addListener(marker6, 'click', function() {
        infowindow.open(map,marker6);
    });

    google.maps.event.addListener(marker7, 'click', function() {
        infowindow.open(map,marker7);
    });

    google.maps.event.addListener(marker8, 'click', function() {
        infowindow.open(map,marker8);
    });

    google.maps.event.addListener(marker9, 'click', function() {
        infowindow.open(map,marker9);
    });

    google.maps.event.addListener(marker10, 'click', function() {
        infowindow.open(map,marker10);
    });

    google.maps.event.addListener(marker11, 'click', function() {
        infowindow.open(map,marker11);
    });

    // close pop-up menu
    google.maps.event.addListener(map, 'click', function() {
        infowindow.close();
    });

    google.maps.event.addListener(infowindow, 'domready', function() {

        var iwOuter = $('.gm-style-iw');

        var iwBackground = iwOuter.prev();

        iwBackground.children(':nth-child(2)').css({'display' : 'none'});

        iwBackground.children(':nth-child(4)').css({'display' : 'none'});

        iwBackground.children(':nth-child(3)').find('div').children().css({'box-shadow': 'rgba(0, 0, 0, 0.6) 0px 1px 6px', 'z-index' : '1'});

        var iwCloseBtn = iwOuter.next();

        iwCloseBtn.css({opacity: '1', right: '40px', top: '3px', border: '7px solid white', 'border-radius': '13px', 'box-shadow': '0 0 5px black'});
    });
}
google.maps.event.addDomListener(window, 'load', initialize);
