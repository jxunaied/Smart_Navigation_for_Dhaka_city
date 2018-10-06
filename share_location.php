<html>
    <head>
        <title>Share Location</title>
        <!--Bootstrap CSS Links-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        
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
                background: #F5F5F5;
            }

            /* Map */
            #profile_page 
            {
                height: 95%;
                border: 5px solid #f44336;
                border-radius: 10px;
                overflow-y: auto;
                overflow-x: hidden;
                z-index: 1;
            }
            #profile_page::-webkit-scrollbar{
                width: 1em;
            }

            #profile_page::-webkit-scrollbar-track {
                -webkit-box-shadow: inset 0 0 6px rgba(244,67,54,0.3);
            }

            #profile_page::-webkit-scrollbar-thumb{
              background-color: #f44336;
              outline: 1px solid #f44336;
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

            #page 
            {
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
            #search_header
            {
                color: #f44336;
            }
            #search_field
            {
                width: 100%;
                outline-color: #f44336;
                border: 1px solid #f44336;
                padding: 8px;
                font-size: 16px;
            }
            /* Navbar */

            #map 
            {
                height: 70%;
                border: 5px solid #f44336;
                border-radius: 10px;
                z-index: 1;
            }

            /*Different Screen Size Property*/
            @media screen and (max-width: 600px) {
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
                #profile_page
                {
                    height: 95%;
                    margin-top: 20px;
                }
            }

            
            #share_with_friend_div,#shared_with_me_div,#share_now_div
            {
                height: 60%;
                margin-top: 2%;
                border: 2px solid #f44336;
                overflow-y: auto;
                
            }
            #shared_with_me_div { margin-top: 3%; }
            #share_with_friend_div::-webkit-scrollbar,#shared_with_me_div::-webkit-scrollbar,#shared_now_div::-webkit-scrollbar {
                width: 1em;
            }

            #share_with_friend_div::-webkit-scrollbar-track,#shared_with_me_div::-webkit-scrollbar-track,#shared_now_div::-webkit-scrollbar-track {
                -webkit-box-shadow: inset 0 0 6px rgba(244,67,54,0.3);
            }

            #share_with_friend_div::-webkit-scrollbar-thumb,#shared_with_me_div::-webkit-scrollbar-thumb,#shared_now_div::-webkit-scrollbar-thumb {
              background-color: #f44336;
              outline: 1px solid #f44336;
            }
            .share_with_friend_table,.shared_with_me_table,.share_now_table
            {
                width: 100%;
            }
            .share_with_friend_table,.share_with_friend_table th,.share_with_friend_table td,.shared_with_me_table,.shared_with_me_table th,.shared_with_me_table td,.share_now_table,.share_now_table th,.share_now_table td
            {
                text-align: center;
            }
            .share_with_friend_table th,.shared_with_me_table th,.share_now_table th
            {
                /*padding-bottom: 20px;*/
                padding: 10px;
                font-size: 18px;
                color: white;
                background-color: #f44336;
                vertical-align: center;
            }
            .share_with_friend_table td,.shared_with_me_table td,.share_now_table td
            {
                padding-top: 10px;
                padding-bottom: 10px;
                font-size: 16px;
            }
        </style>

       
        
    </head>

    
    <body>
        <?php
        include('menu.php');
        ?>
        <div>
            <a id="navbar_open" onclick="openNav()"><i class="fa fa-bars"></i></a>
        </div>
        <div id="page">
            <div id="profile_page">
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-10">
                        <div class="row">
                            <h2 id="search_header">Share Location With...</h2>
                            <input onkeyup="search(this.value)" id="search_field" type="text" placeholder="Type Email Here...">
                        </div>
                        <div class="row">
                            <div class="col-md-2"></div>
                            <div class="col-md-8">
                                <h3 style="color:#f44336">Share Now</h3>
                                <div id="share_now_div">
                                    <table id="share_now_table" class="share_now_table">
                                        
                                    </table>
                                </div>
                            </div>
                            <div class="col-md-2"></div>
                        </div>
                        <div id="friend_box">
                            <div class="row">
                                <div class="col-md-5">
                                    <h3 style="color:#f44336">Location Shared With Friends</h3>
                                    <div id="share_with_friend_div">
                                        <table id="share_with_friend_table" class="share_with_friend_table">
                                            
                                        </table>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <h3 style="color:#f44336">Location Shared With You</h3>
                                    <div id="shared_with_me_div">
                                        <table id="shared_with_me_table" class="shared_with_me_table">
                                            
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-1"></div>
                </div>
                <br><br>
                
            </div>
        </div>
        <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog" style="width:80%;">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title" style="color:#f44336;">Details</h4>
                    </div>
                    <div class="modal-body" style="border-bottom:1px solid #f44336;border-top:1px solid #f44336;">
                        <div id="map"></div>
                    </div>
                    <div class="modal-footer" style=""></div>
                </div>
            </div>
        </div>
    </body>

    <!--Bootstrap JS Links-->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    
    <!--Custom JS Links-->
    <script>

        var pos;
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            pos = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
                };
            });
        }
         
      

        share('','','');
        search('');
        setInterval(function() {
            sharedWithFriends('');
        }, 500);
        setInterval(function() {
            sharedWithYou('');
        }, 1000);

        const screen_size = window.matchMedia( "(max-width: 600px)" );

        function openNav() {
            if(screen_size.matches)
            {
                document.getElementById("navbar").style.width = "300px";
                document.getElementById("page").style.marginLeft = "300px";
                document.getElementById("navbar_open").style.display = "none";
            }
            else 
            {
                document.getElementById("navbar").style.width = "250px";
                document.getElementById("page").style.marginLeft = "250px";
                document.getElementById("navbar_open").style.display = "none";
            }
        }

        function closeNav() {
            if(screen_size.matches)
            {
                document.getElementById("navbar").style.width = "0";
                document.getElementById("page").style.marginLeft= "0";
            }

            else
            {
                document.getElementById("navbar").style.width = "0";
                document.getElementById("page").style.marginLeft= "0";
            }
        }

        function delayNav(){
            closeNav();
            setTimeout(function(){
                 document.getElementById("navbar_open").style.display = "block";    
            },550);

        }


        function share(friend) {
            console.log("jhsgbhsag");
            var lat ='';
            var lng ='';

            if(friend!=''){
                getLocation();
                function getLocation() {
                    if (navigator.geolocation) {
                        navigator.geolocation.getCurrentPosition(showPosition);
                    }
                }
                
                function showPosition(position) {
                    lat = position.coords.latitude;
                    lng =  position.coords.longitude;
                    
                }
            
                console.log(pos);
                var addname;
                
                
               var geocoder = new google.maps.Geocoder;

               geocoder.geocode({'location': pos}, function(results, status) {
                  if (status === 'OK') 
                  {
                     if (results[0])
                     {
                        addname=results[0].formatted_address;
                        console.log(addname);
                      
                     } 
                     else 
                     {
                        window.alert('No results found');
                     }
                  } 
                  else 
                  {
                     window.alert('Geocoder failed due to: ' + status);
                  }
                
            });
               



                
            }
            $( document ).ready(function() {
                $.ajax({  
                    url:"fetch/share_location_fetch/share_now_fetch.php",  
                    method:"POST",  
                    data:{friend:friend,lat:lat,lng:lng,addname:addname},  
                    success:function(data)  
                    {  
                        if(data){
                            console.log(data);
                        }
                        // $('#share_now_table').fadeOut(100, function(){
                        //     $(this).html(data);
                        //     $(this).fadeIn(100);
                        // });
                    }  
                });
            });
            sharedWithFriends('');
            
        }


        function search(friend) {
            console.log("Search");
            $( document ).ready(function() {
                $.ajax({  
                    url:"fetch/share_location_fetch/search_fetch.php",  
                    method:"POST",  
                    data:{search:friend},  
                    success:function(data)  
                    {  
                        $('#share_now_table').fadeOut(100, function(){
                            $(this).html(data);
                            $(this).fadeIn(100);
                        });
                    }  
                });
            });
            
        }

        function sharedWithFriends( removeNotification ){
            $( document ).ready(function() {
                $.ajax({  
                    url:"fetch/share_location_fetch/sharedWithFriends.php",  
                    method:"POST",  
                    data:{id:removeNotification},  
                    success:function(data)  
                    {  
                        $('#share_with_friend_table').html(data);
                            
                    }  
                });
            });
        }
        function sharedWithYou(removeNotification){
            
            $( document ).ready(function() {
                $.ajax({  
                    url:"fetch/share_location_fetch/sharedWithYou.php",  
                    method:"POST",  
                    data:{friendid:removeNotification},  
                    success:function(data)  
                    {  
                        $('#shared_with_me_table').html(data);
                           
                    }  
                });
            });
        }

        
    </script>

    <script>
      // This example requires the Places library. Include the libraries=places
      // parameter when you first load the API. For example:
      // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">
      var destination,map,pos;

      if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            pos = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };
            
            
          }, function() {
            handleLocationError(true, infoWindow, map.getCenter());
          });
        } else {
          // Browser doesn't support Geolocation
          handleLocationError(false, infoWindow, map.getCenter());
        }
  
      function initMap() {
         map = new google.maps.Map(document.getElementById('map'), {
          mapTypeControl: false,
          center: {lat:23.744114,lng:90.3756356},
          zoom: 15
        });

      
      }


      function get_source_destination_nearest(destination_lat,destination_lng){

        destination = {
            lat : parseFloat(destination_lat),
            lng : parseFloat(destination_lng)
        };

        console.log(destination);
        
        var colors = ['#ff2d37','#1769ff','#34bf49','#8e43e7'];

        var sourcenearBusStopdetails= find_near_BusStop_latlng(pos);
        var sourceBusStop ={
           lat : parseFloat(sourcenearBusStopdetails.latlng.lat),
           lng : parseFloat(sourcenearBusStopdetails.latlng.lng)
        };

        console.log(sourcenearBusStopdetails.busstopid);
        var sorce_busstopid = sourcenearBusStopdetails.busstopid;
         

        var destinationnearBusStopdetails= find_near_BusStop_latlng( destination );
        console.log(destinationnearBusStopdetails);
        var destinationBusStop ={
           lat : parseFloat(destinationnearBusStopdetails.latlng.lat),
           lng : parseFloat(destinationnearBusStopdetails.latlng.lng)
        };


        console.log(destinationnearBusStopdetails.busstopid);
        var destination_busstopid = destinationnearBusStopdetails.busstopid;


        // Instantiate a directions service.
        directionsService = new google.maps.DirectionsService,
        directionsDisplay = new google.maps.DirectionsRenderer({
          map: map,
          suppressMarkers: true
        });

       //Try HTML5 geolocation.
       

        if(sourcenearBusStopdetails.distance <= 100){

          new google.maps.Marker({
                  position: pos,
                  map: map,
                  icon:"img/source_32.png",
                  title: "Near BusStop"
                });

        }else{

          new google.maps.Marker({
                  position: pos,
                  map: map,
                  icon:"img/source_32.png",
                  title: "Near BusStop"
                });
          calculateAndDisplayRoute(directionsService, directionsDisplay, pos, sourceBusStop);

        }


        if(destinationnearBusStopdetails.distance <= 100){

           new google.maps.Marker({
                  position: destination,
                  map: map,
                  icon:"img/destination_32.png",
                  title: "Near BusStop"
                });

        }else{

          new google.maps.Marker({
                  position: destination,
                  map: map,
                  icon:"img/destination_32.png",
                  title: "Near BusStop"
                });
          calculateAndDisplayRoute(directionsService, directionsDisplay, destination, destinationBusStop);

        }

        function calculateAndDisplayRoute(directionsService, directionsDisplay, pointA, pointB) {
            directionsService.route({
              origin: pointA,
              destination: pointB,
              provideRouteAlternatives: true,
              travelMode: google.maps.TravelMode.WALKING,
              unitSystem: google.maps.UnitSystem.METRIC
            }, function(response, status) {
              if (status == google.maps.DirectionsStatus.OK) {

                //sort distance btwn routes
                var index = 0;
                var value = 999999;
                var lent = response.routes.length;

                for (var i = 0; i < lent; i++) {
                  if (response.routes[i].legs[0].distance.value < value) {
                    value = response.routes[i].legs[0].distance.value;
                    index = i;
                  }
                }

                 new google.maps.DirectionsRenderer({
                    map: map,
                    suppressMarkers: true,
                    directions: response,
                    routeIndex: i,
                    polylineOptions:{strokeColor:colors[i],strokeWeight:4,strokeOpacity:0.8}

                  });
                  var x =index+1;
                  var center_point = response.routes[index].overview_path.length/2;
                  var infowindow2 = new google.maps.InfoWindow();
                  if(response.routes[index].legs[0].distance.value <= 500){
                    infowindow2.setContent(response.routes[index].legs[0].distance.text + "<br>" + response.routes[index].legs[0].duration.text + " <br>" + "Travel: Walking");
                  }
                  else if(response.routes[index].legs[0].distance.value > 500 && response.routes[index].legs[0].distance.value <= 3000){
                    infowindow2.setContent(response.routes[index].legs[0].distance.text + "<br>" + response.routes[index].legs[0].duration.text + " <br>" + "Travel: Rickshaw");
                  }
                  else{
                    infowindow2.setContent(response.routes[index].legs[0].distance.text + "<br>" + response.routes[index].legs[0].duration.text + " <br>" + "Travel: Others");
                  }
                  infowindow2.setPosition(response.routes[index].overview_path[center_point|index]);
                  infowindow2.open(map);
                  
                //}

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


        var abc = new Array();
        var bus_services_sorce =  $.ajax({
                        type: 'POST',
                        url: 'save/get_bus_from_busstop.php', 
                        data:{sid:sorce_busstopid , did:destination_busstopid},
                        async: false,
                        success: function(msg) {
                          if (msg) {
                            //console.log(msg);           
                          } else {
                            console.log("Not Get"); 
                          }
                        }
                  }).responseText;

        //console.log(bus_services_sorce);  

         abc=JSON.parse(bus_services_sorce);
         console.log(abc);
         if(Object.keys(abc).length == 0){

                var directionsService = new google.maps.DirectionsService;//Direction 
                //var directionsDisplay = new google.maps.DirectionsRenderer;//Direction
                var directionsDisplay = new google.maps.DirectionsRenderer({suppressMarkers: true});
                 directionsDisplay.setMap(map);
                calculateAndDisplayRoute(directionsService, directionsDisplay);

                function calculateAndDisplayRoute(directionsService, directionsDisplay) {
                    directionsService.route({
                      origin: sourceBusStop,
                      destination: destinationBusStop,
                      travelMode: 'DRIVING'
                    }, function(response, status) {
                      if (status === 'OK') {
                        var destination =destinationBusStop;
                        console.log(destination);
                        directionsDisplay.setDirections(response);
                       
                      } else {
                        window.alert('Directions request failed due to ' + status);
                      }
                    });

                  }
            }
         var flag = 0;
         for(var i=0; i<Object.keys(abc).length; i++){
            var xyz = [];
             for(var j=0; j<Object.keys(abc[i]).length; j++){
                if( (j==0) && (abc[i][j].busstopid == sorce_busstopid)){
                flag=1;
              }
                if( (Object.keys(abc[i]).length>2) && (j > 0) && (j< Object.keys(abc[i]).length -1) ){
                    xyz.push({
                     location: new google.maps.LatLng(abc[i][j].busstoplat,abc[i][j].busstoplng),
                     stopover: false
                });
                }       
            }  

            if(flag==1){
              show_near_busStop(sourceBusStop,destinationBusStop,xyz);
            }
            else
            {
              show_near_busStop(destinationBusStop,sourceBusStop,xyz);
            }


           
            
            console.log(" ");
         }


        

      }


      function show_near_busStop(sourceA,destinationA,waypts){

       var colors = ['#ff2d37','#1769ff','#34bf49','#8e43e7'];
       

       new google.maps.Marker({
                  position: sourceA,
                  map: map,
                  icon:"img/bus_stop_32.png",
                  title: "Near BusStop"
                });
        var pointA = sourceA,
        pointB = destinationA,
        myOptions = {
          zoom: 7,
          center: pointA
        },

      
      // Instantiate a directions service.
        directionsService = new google.maps.DirectionsService,
        directionsDisplay = new google.maps.DirectionsRenderer({
          map: map,
          suppressMarkers: true
        });

        // get route from A to B
        
         /*var waypts = [{location: "New Market ,dhaka", stopover: true},{location: "Science Lab,dhaka", stopover: true},{location: "Kalabagan bus stop,dhaka", stopover: true},{location: "Shukrabad bus stop,dhaka", stopover: true},{location: "Syamoli bus stop,dhaka", stopover: true},{location: "Agargaon bus stop,dhaka", stopover: true},{location: "Shewrapara bus stop,dhaka", stopover: true},{location: "Kazipara,dhaka", stopover: true}];
       /* var waypts = [{location: "Kazipara Bus Stop,Dhaka", stopover: false},{location: "ShewraPara Bus Stand,Dhaka", stopover: false},{location: "Agargaon Bus Stop, Dhaka", stopover: false},{location: "Shyamoli Bus Stop,Dhaka", stopover: false},{location: "Shukrabad Bus Stop, Dhaka", stopover: false},{location: "Kalabagan Bus Stop, Dhaka", stopover: false},{location: "Science Lab Bus Stop, Dhaka", stopover: false},{location: "New Market,Dhaka", stopover: false}];*/
       
        calculateAndDisplayRoute(directionsService, directionsDisplay, pointA, pointB,waypts);
        

        //Not needed
        if(100 > 100000){
          var bounds = new google.maps.LatLngBounds();
          new google.maps.Marker({
                  position: pointA,
                  map: map,
                  icon:"img/user_location_32.png",
                  title: "Near BusStop"
                });

          new google.maps.Marker({
                  position: pointB,
                  map: map,
                  icon:"img/bus_stop_32.png",
                  title: "Near BusStop"
                });

          bounds.extend(pointA);
          map.fitBounds(bounds);

        }
       

         
        function calculateAndDisplayRoute(directionsService, directionsDisplay, pointA, pointB,waypts) {
         console.log(waypts);
            directionsService.route({
              origin: pointA,
              destination: pointB,
              waypoints: waypts, 
              optimizeWaypoints: true,
              provideRouteAlternatives: false,
              travelMode: google.maps.TravelMode.DRIVING,
              unitSystem: google.maps.UnitSystem.METRIC
            }, function(response, status) {
              if (status == google.maps.DirectionsStatus.OK) {

                for (var i = 0, len = response.routes.length; i < len; i++) {

                 new google.maps.DirectionsRenderer({
                    map: map,
                    suppressMarkers: false,
                    directions: response,
                    routeIndex: i,
                    polylineOptions:{strokeColor:colors[i],strokeWeight:4,strokeOpacity:0.8}

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

    function find_near_BusStop_latlng(sourcePoint){

    console.log(sourcePoint);
      var busStopDetails = all_BusStop_details();
      var busStopDistance = new Array();

      for(var i=0; i<Object.keys(busStopDetails).length; i++){

          var a = google.maps.geometry.spherical.computeDistanceBetween(new google.maps.LatLng(sourcePoint), new google.maps.LatLng(busStopDetails[i].lat, busStopDetails[i].lng)); 
          //console.log(a);
          busStopDistance.push(a);

      }
      var sortDistanceBusStop =  Math.min.apply(null,busStopDistance);
      console.log(sortDistanceBusStop);

      for(var i=0; i<Object.keys(busStopDistance).length; i++){

          if(sortDistanceBusStop==busStopDistance[i]){
            var latlng ={lat:busStopDetails[i].lat, lng:busStopDetails[i].lng};
            return {busstopid:busStopDetails[i].id,latlng:latlng,distance:sortDistanceBusStop};
          }
      }
      
  }  
    
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBpJmjhszpHAG4O_XAxqC8cS9Ij0XSPyzI&libraries=geometry&callback=initMap"
        async defer></script>
    
</html>
