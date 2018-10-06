<?php
session_start();

  if( isset($_SESSION['id']) == NULL){

  echo"<script language='javascript'>
                var alertMsg = 'You Are not Loged In !!!';
                alert(alertMsg);  
                if (window.confirm)
                 {
                      window.location.href = 'index.php';
                 }    
            </script>
            "; 

}
?>
<html>
    <head>
        <title>HOME</title>
        <!--Bootstrap CSS Links-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
        <!--Google Fonts Links-->
        <link href="https://fonts.googleapis.com/css?family=Julius+Sans+One" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Do+Hyeon" rel="stylesheet">
        
        <!--Customized CSS Links-->
        <style type="text/css">
            html, body 
            {
                height: 100%;
                margin: 0;
                padding: 0;
                overflow: hidden;
                background: #E0E0E0;
            }

            /* Map */
            #map 
            {
                height: 95%;
                border: 5px solid #f44336;
                border-radius: 10px;
                z-index: 1;
            }

            /* Navbar */
            .sidenav 
            {
                height: 100%;
                width: 0;
                position: fixed;
                z-index: 1;
                top: 0;
                left: 0;
                background-color: #b71c1c;
                overflow: hidden;
                transition: 0.5s;
                padding-top: 60px;
            }

            #navbar_options 
            {
                padding: 0px 8px 0px 32px;
                text-decoration: none;
                font-size: 22px;
                font-family: 'Do Hyeon', sans-serif;
                color: #ffffff;
                display: block;
                transition: 0.4s;
            }

            #navbar_options:hover 
            {
                background-color: #ffffff;
                color: #b71c1c;
            }

            #navbar_close 
            {
                color: #ffffff;
                text-decoration: none;
                position: absolute;
                top: 0;
                right: 25px;
                font-size: 40px;
                margin-left: 50px;
                transition: all 500ms ease;
            }
            #navbar_close:hover
            {
                transform: scale(1.2);
            }

            #page {
                transition: margin-left .5s;
                padding: 16px;
                position: relative;
            }
            #navbar_open
            {
                position: absolute;
                top: 45%;
                left: 0;
                padding: 5px 5px;
                font-size:35px;
                cursor:pointer;
                text-decoration: none;
                z-index: 9999;
                color: #ffffff;
                background-color: #f44336;
                border-top-right-radius: 5px;
                border-bottom-right-radius: 5px;
                transition: all 300ms ease;
            }
            #navbar_open:hover
            {
                background-color: #b71c1c;
            }
            /* Navbar */

            /* Source & Destination */
            #start,#end
            {
                z-index: 9999;
                position: absolute;
                outline: none;
                font-size: 16px;
                font-family: 'Do Hyeon', sans-serif;
                width: 100%;
                border: 2px solid #f44336;
                border-radius: 5px;
                padding: 5px 10px;
                box-shadow: 0 8px 6px -1px #00000070;
            }
            #start
            {
                top: 50px;
                left: 50px;
            }
            #end
            {
                top: 50px;
                left: 100px;
            }


            /*Different Screen Size Property*/
            @media screen and (max-width: 1200px) {
                #navbar 
                {
                    padding-top: 100px;
                }
                #navbar_options 
                {
                    font-size: 30px;
                     padding: 8px 8px 8px 24px;
                }
                #navbar_close
                {
                    font-size: 80px;
                    margin-bottom: 100px;
                    padding-bottom: 50px;
                }
                #navbar_open
                {
                    padding: 10px 10px;
                    font-size: 70px;
                }
                #start,#end
                {
                    width: 90%;
                    margin-right: 200px;
                    height: 80px;
                    left: 50px;
                    font-size: 28px;
                    top:80px;
                }
                #end
                {
                    top:180px;
                    left: 50px;
                }
                #map
                {
                    height: 95%;
                    margin-top: 20px;
                }
            }

        </style>

       
        
    </head>

    
    <body>
        <div id="navbar" class="sidenav">
            <a id="navbar_close" href="javascript:void(0)" class="closebtn" onclick="delayNav()">&times;</a>
            <a id="navbar_options" href="#" onclick="show_all_BusStop()">Dhaka City Bus Stop</a><br>
            <a id="navbar_options" href="#" onclick="findAllBus()">All Bus Location</a><br>
            <a id="navbar_options" href="#" onclick="show_near_busStop()">Nearest Bus Stop</a><br>
            <a id="navbar_options" href="share_location.php" onclick="">Share Location</a><br>
            <a id="navbar_options" href="#" onclick="findbus()">Nearest Bus</a><br>
            <a id="navbar_options" href="effecientRoute.php" onclick="">Effecient Route</a><br>
            <a id="navbar_options" href="profile.php" onclick="">Profile</a><br>
            <a id="navbar_options" href="friends.php" onclick="">Friends</a><br>
            <a id="navbar_options" href="new_request.php" onclick="">New Request</a><br>
            <a id="navbar_options" href="#" onclick="traffic()">Traffic</a><br>
            <a id="navbar_options" href="logout.php" onclick="">LogOut</a><br><br>           
        </div>
        <div>
            <a id="navbar_open" onclick="openNav()"><i class="fa fa-bars"></i></a>
        </div>
        <div id="page">
            <div id="location_inputs">
                <!--<select id="start" class="controls">
                    <option value="pos">Your Current Location</option>
                </select>
                <select id="end" class="controls">
                </select>-->
                <div class="row">
                    <div class="col-md-2 col-sm-12">
                        <select id="start" class="controls">
                            <option id="start_option" value="pos">Your Current Location</option>
                        </select>
                    </div>
                    <div class="col-md-2 col-sm-12">
                        <select id="end" class="controls">
                        </select>
                    </div>
                    <div class="col-md-8"></div>
                </div>
            </div>
            <div id="map"></div>
        </div>
    </body>

    <!--Bootstrap JS Links-->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    
    <!--Custom JS Links-->
    <script src="js/home.js"></script>
    
    <!-- Google Map -->
    <script>
      var map,infoWindow,pos;

      function initMap() {

        var directionsService = new google.maps.DirectionsService;//Direction 
        //var directionsDisplay = new google.maps.DirectionsRenderer;//Direction
        var directionsDisplay = new google.maps.DirectionsRenderer({suppressMarkers: true});

        map = new google.maps.Map(document.getElementById('map'), {
          zoom: 16,
          center: new google.maps.LatLng(23.7436274, 90.3711769),
          animation: google.maps.Animation.DROP,
          mapTypeControl: true,
          mapTypeControlOptions: {
              style: google.maps.MapTypeControlStyle.HORIZONTAL_BAR,
              position: google.maps.ControlPosition.BOTTOM_CENTER
          },
          zoomControl: true,
          zoomControlOptions: {
              position: google.maps.ControlPosition.RIGHT_BOTTOM
          },
          scaleControl: true,
          streetViewControl: true,
          streetViewControlOptions: {
              position: google.maps.ControlPosition.RIGHT_BOTTOM
          },
          fullscreenControl: true,
          
      
          mapTypeId: 'roadmap',

          /*Custom Style for night google map*/
          
        });

        var iconBase = 'https://maps.google.com/mapfiles/kml/shapes/';
        var icons = {
         
          info: {
            icon: "img/bus_stop_32.png"
          },
          bus: {
            icon: "img/bus.png"
          },
          person:{
            icon: "img/person.png"
          }

        };
        infoWindow = new google.maps.InfoWindow;

        // Try HTML5 geolocation.
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            pos = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };
            
            new google.maps.Marker({
            position: pos,
            map: map,
            icon:"img/source_32.png",
            title:"Your Location"
            
        });
            map.setCenter(pos);
          }, function() {
            handleLocationError(true, infoWindow, map.getCenter());
          });
        } else {
          // Browser doesn't support Geolocation
          handleLocationError(false, infoWindow, map.getCenter());
        }


        //Direction Start

        directionsDisplay.setMap(map);
        
        var onChangeHandler = function() {
          calculateAndDisplayRoute(directionsService, directionsDisplay);
        };
        var start_location = document.getElementById('start').addEventListener('change', onChangeHandler);
        var end_location = document.getElementById('end').addEventListener('change', onChangeHandler);

        console.log(pos);
       
        function calculateAndDisplayRoute(directionsService, directionsDisplay) {
        directionsService.route({
          origin: pos,
          destination: document.getElementById('end').value,
          travelMode: 'DRIVING'
        }, function(response, status) {
          if (status === 'OK') {


            var value=document.getElementById('end').value;
            var destination ={
              lat: parseFloat(value.split(",")[0]),
              lng: parseFloat(value.split(",")[1])
            };
            console.log(destination);
             new google.maps.Marker({
                  position: destination,
                  map: map,
                  icon:"img/bus_stop_32.png",
                  title: "Near BusStop"
                });
             directionsDisplay.setDirections(response);
           
          } else {
            window.alert('Directions request failed due to ' + status);
          }
        });

      }

    }
    //End Initmap

    
    //For Traffic Button
    var f=0;

      function traffic(){
          //For Traffic 
          
          var trafficLayer = new google.maps.TrafficLayer();
          var transitLayer = new google.maps.TransitLayer();
          if(f==0){
            
            trafficLayer.setMap(map);
            transitLayer.setMap(null);
           
            f=1;
          }
          else
          {
            trafficLayer.setMap(null);
            transitLayer.setMap(map);
            f=0;
          }
          
          
        }
  


      //Create Marker On GoogleMap
       function addMarker(location,busstopname) {
        marker = new google.maps.Marker({
            position: location,
            map: map,
            icon:"img/bus_stop_32.png",
            title:busstopname
        });
      }

    //All Bus Stop Location
    function all_BusStop_details(){
          var bus_stop_details = new Array();
          var abc =  $.ajax({
                        type: 'POST',
                        url: 'save/busstoplocation.php', 
                        data:"",
                        async: false,
                        success: function(msg) {
                          if (msg) {                 
                          } else {
                            console.log("Very Bad"); 
                          }
                        }
                  }).responseText;
     
          bus_stop_details=JSON.parse(abc);
          //console.log(bus_stop_details);

          return bus_stop_details; 

    }

    function show_all_BusStop(){
      var busStopDetails = all_BusStop_details();
      var bounds = new google.maps.LatLngBounds();
          for(var i=0; i<Object.keys(busStopDetails).length; i++){
            
              var bus_stop_location = new google.maps.LatLng(busStopDetails[i].lat, busStopDetails[i].lng);
              addMarker(bus_stop_location,busStopDetails[i].busstopname);
              bounds.extend(bus_stop_location); 
          }
          map.fitBounds(bounds);
    }

    var x = 0;

    function findAllBus(){
          var myVar = setInterval(function() {
                go(x);
            }, 4000);


        function go(i) {
            $.ajax({  
                    url:"save/allbusloc.php",  
                    method:"POST",  
                    data:{index:i},  
                    success:function(data)  
                    {  
                        var a= JSON.parse(data);
                        var x = {
                            lat: parseFloat(a.lat),
                            lng: parseFloat(a.lng)
                        };
                         new google.maps.Marker({
                          position: x,
                          map: map,
                          icon:"img/bus_stop_32.png",
                          title: "Near BusStop"
                        });
                        infoWindow.setPosition(x);
                        infoWindow.setContent('Moving.....');
                        infoWindow.open(map);
                        map.setCenter(x);
                    }  
                });


            x++;
            if(x==20){
                clearInterval(myVar);
            }
        
        }
         
    }

    //Find Near Bus Stop
    function show_near_busStop(){

        var nearBusStopdetails= find_near_BusStop_latlng();
        
        var destinationBusStop ={
           lat : parseFloat(nearBusStopdetails.latlng.lat),
           lng : parseFloat(nearBusStopdetails.latlng.lng)
        };
        infoWindow.close();
       
        var colors = ['#ff0000', '#00ff00', '#0000ff', '#ffff00', '#ff00ff', '#00FFFF'];
        var pointA = pos,
        pointB = destinationBusStop,
        myOptions = {
          zoom: 7,
          center: pointA
        },

      
      // Instantiate a directions service.
        directionsService = new google.maps.DirectionsService,
        directionsDisplay = new google.maps.DirectionsRenderer({
          map: map,
          suppressMarkers: true
        }),
        
        markerB   

        // get route from A to B
        calculateAndDisplayRoute(directionsService, directionsDisplay, pointA, pointB);


        function calculateAndDisplayRoute(directionsService, directionsDisplay, pointA, pointB) {
            directionsService.route({
              origin: pointA,
              destination: pointB,
              provideRouteAlternatives: true,
              travelMode: google.maps.TravelMode.DRIVING,
              unitSystem: google.maps.UnitSystem.METRIC
            }, function(response, status) {
              if (status == google.maps.DirectionsStatus.OK) {

                for (var i = 0, len = response.routes.length; i < len; i++) {

                 new google.maps.DirectionsRenderer({
                    map: map,
                    suppressMarkers: true,
                    directions: response,
                    routeIndex: i,
                    polylineOptions:{strokeColor:colors[i]}

                  });
                  var x =i+1;
                  var center_point = response.routes[i].overview_path.length/2;
                  var infowindow2 = new google.maps.InfoWindow();
                  if(response.routes[i].legs[0].distance.value <= 500){
                    infowindow2.setContent(response.routes[i].legs[0].distance.text + "<br>" + response.routes[i].legs[0].duration.text + " <br>" + "Travel: Walking"+ " <br>" + "Route: "+ x );
                  }
                  else if(response.routes[i].legs[0].distance.value > 500 && response.routes[i].legs[0].distance.value <= 3000){
                    infowindow2.setContent(response.routes[i].legs[0].distance.text + "<br>" + response.routes[i].legs[0].duration.text + " <br>" + "Travel: Rickshaw"+ " <br>" + "Route: "+ x );
                  }
                  else{
                    infowindow2.setContent(response.routes[i].legs[0].distance.text + "<br>" + response.routes[i].legs[0].duration.text + " <br>" + "Travel: Others"+ " <br>" + "Route: "+ x );
                  }
                  infowindow2.setPosition(response.routes[i].overview_path[center_point|i]);
                  infowindow2.open(map);
                  
                }

                

                //directionsDisplay.setDirections(response);
                //infoWindow.setContent(directionsDisplay.directions.routes[0].legs[0].duration.text);
                //infoWindow.open(map);
                new google.maps.Marker({
                  position: pointB,
                  map: map,
                  icon:"img/bus_stop_32.png",
                  title: "Near BusStop"
                });
                
              } else {
                window.alert('Directions request failed due to ' + status);
              }
            });
          }
    }

    function findallbusloc(){
      var a = new Array();
      var abc = $.ajax({
              type: 'POST',
              url: 'save/busloc.php', //php to save the tracked locations
              data:"",
              async: false,
              success: function(msg) {
                if (msg) {                 
                } else {
                  console.log("Very Bad"); 
                }
              }
            }).responseText;
     
      a=JSON.parse(abc);
      console.log(a);
      return a;      
    }  

  function busStatusChange(ids){
    var id=ids;
      $.ajax({
              type: 'POST',
              url: 'save/busstatuschange.php', //php to save the tracked locations
              data:'index=' + id,
              success: function(msg) {
                if (msg) {  
                  console.log(msg);               
                } else {
                  console.log("Status Was Not Change"); 
                }
              }
            });

  }

//Find nearest bus LatLng
    function findbus(){
      initMap();
        var dx = new Array();
        var narbusStop=find_near_BusStop_latlng();
        console.log(narbusStop);
        var xy=findallbusloc();
        var min = 999999;
        var index;
        for(var i=0; i<Object.keys(xy).length; i++){
          
          dx[i] = google.maps.geometry.spherical.computeDistanceBetween(new google.maps.LatLng(23.798103, 90.449183), new google.maps.LatLng(xy[i].lat,xy[i].lng));
          console.log("Distance:"+dx[i]);
          if(25 < dx[i]){
              if(min>dx[i]){
                min=dx[i];
                index=i;
              }
          }else{
            busStatusChange(xy[i].id);
          }
        }

        //near();
        show_near_busStop();
        var nearbus={
          lat: parseFloat(xy[index].lat),
          lng: parseFloat(xy[index].lng)
        };


        var point_b={
          lat: parseFloat(narbusStop.latlng.lat),
          lng: parseFloat(narbusStop.latlng.lng)
        };
        console.log(point_b);
        var pointA =point_b,
        pointB = nearbus,
        myOptions = {
          zoom: 7,
          center: pointA
        },


      
      // Instantiate a directions service.
      directionsService = new google.maps.DirectionsService,
      directionsDisplay = new google.maps.DirectionsRenderer({
        map: map,
        suppressMarkers: true,
        polylineOptions: {
        strokeColor: "green",
        strokeOpacity: 2.0,
        strokeWeight: 10
        }
      }),
    
    markerD = new google.maps.Marker({
      position: pointB,
      map: map,
      icon:"bus.png",
      title: "Nearst Bus",
      
    });  

    // get route from A to B
    calculateAndDisplayRoute(directionsService, directionsDisplay, pointA, pointB);


    function calculateAndDisplayRoute(directionsService, directionsDisplay, pointA, pointB) {
        directionsService.route({
          origin: pointA,
          destination: pointB,
          travelMode: google.maps.TravelMode.DRIVING
        }, function(response, status) {
          if (status == google.maps.DirectionsStatus.OK) {
            directionsDisplay.setDirections(response);
           
            infoWindow.setContent(directionsDisplay.directions.routes[0].legs[0].duration.text);
            infoWindow.open(map);
          } else {
            window.alert('Directions request failed due to ' + status);
          }
        });
      }

       

  }



    //Calculation Find Near Bus Stop 
    function find_near_BusStop_latlng(){

      var busStopDetails = all_BusStop_details();
      var busStopDistance = new Array();

      for(var i=0; i<Object.keys(busStopDetails).length; i++){

          var a = google.maps.geometry.spherical.computeDistanceBetween(new google.maps.LatLng(pos), new google.maps.LatLng(busStopDetails[i].lat, busStopDetails[i].lng)); 
          //console.log(a);
          busStopDistance.push(a);

      }
      var sortDistanceBusStop =  Math.min.apply(null,busStopDistance);
      console.log(sortDistanceBusStop);

      for(var i=0; i<Object.keys(busStopDistance).length; i++){

          if(sortDistanceBusStop==busStopDistance[i]){
            var latlng ={lat:busStopDetails[i].lat, lng:busStopDetails[i].lng};
            return {latlng:latlng,distance:sortDistanceBusStop};
          }
      }
      
    }  
 
</script>
    
   <!-- google map api key -->
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBpJmjhszpHAG4O_XAxqC8cS9Ij0XSPyzI&callback=initMap">
    </script>
    <script type="text/javascript" src="js/busstop.js"></script>
    
    
</html>