<html>
    <head>
        <title>Place Autocomplete</title>
        <!--Bootstrap CSS Links-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
        <!--Google Fonts Links-->
        <link href="https://fonts.googleapis.com/css?family=Julius+Sans+One" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Do+Hyeon" rel="stylesheet">
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
        
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
            #origin-input,#destination-input
            {
                z-index: 9999;
                position: absolute;
                outline: none;
                font-size: 16px;
                font-family: 'Do Hyeon', sans-serif;
                width: 17%;
                border: 2px solid #f44336;
                border-radius: 5px;
                padding: 5px 10px;
                box-shadow: 0 8px 6px -1px #00000070;
            }
            #origin-input
            {
                top: 50px;
                left: 50px;
            }
            #destination-input
            {
                top: 50px;
                left: 300px;
            }
            #search
            {
                z-index: 9999;
                position: absolute;
                top: 50px;
                left: 550px;
                padding: 5px 20px;
                font-family: 'Do Hyeon', sans-serif;
                background-color: white;
                color: #f44336;
                font-size: 16px;
                border: 2px solid #f44336;
                border-radius: 5px;
                outline: none;
                box-shadow: 0 8px 6px -1px #00000070;
                transition: all 400ms ease;
            }
            #search:hover
            {
                background-color: #f44336;
                color: white;
            }
            #information_panel
            {
                z-index: 9999;
                position: absolute;
                display: block;
                background: rgba(255,255,255,0.8);
                border: 2px solid #f44336;
                border-radius: 5px;
                top: 50px;
                left: 1060px;
                padding: 10px;
                width: 20%;
                height: 70%;
                overflow-y: auto;
            }
            #information_panel::-webkit-scrollbar {
                width: 1em;
            }

            #information_panel::-webkit-scrollbar-track {
                -webkit-box-shadow: inset 0 0 6px rgba(244,67,54,0.3);
            }

            #information_panel::-webkit-scrollbar-thumb {
              background-color: #f44336;
              outline: 1px solid #f44336;
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
                #origin-input,#destination-input
                {
                    width: 90%;
                    margin-right: 200px;
                    height: 80px;
                    left: 50px;
                    padding-left: 50px;
                    font-size: 28px;
                    top:80px;
                }
                #destination-input
                {
                    top:180px;
                    left: 50px;
                }
                #search
                {
                    font-size: 30px;
                    top: 280px;
                    left: 50px;
                    width: 30%;
                    height: 50px;
                }
                #information_panel
                {
                    top: 1280px;
                    left: 50px;
                    width: 90%;
                    height: 17%;
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
        <?php
        include('menu.php');
        ?>
        <div>
            <a id="navbar_open" onclick="openNav()"><i class="fa fa-bars"></i></a>
        </div>
        <div id="page">
            <div id="location_inputs">
                <div class="row">
                    <input id="origin-input" type="text" placeholder="Enter Origin Location">

                    <input id="destination-input" type="text" placeholder="Enter Destination Location">
                    
                    <button id="search" onclick="get_source_destination_nearest()">Search</button>
                </div>
            </div>
            <div id="information_panel" style="display:none;">
                
            </div>
            <div id="map"></div>
        </div>
    </body>
    
    <!--Bootstrap JS Links-->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    
    <!--Custom JS Links-->
    <script>
        const screen_size = window.matchMedia( "(max-width: 1280px)" );

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
                document.getElementById("page").style.marginLeft = "250px"; document.getElementById("information_panel").style.left = "860px";
                document.getElementById("navbar_open").style.display = "none";
            }
        }

        function closeNav() 
        {
            if(screen_size.matches)
            {
                document.getElementById("navbar").style.width = "0";
                document.getElementById("page").style.marginLeft= "0";
                document.getElementById("information_panel").style.left = "1060px";
            }

            else
            {
                document.getElementById("navbar").style.width = "0";
                document.getElementById("page").style.marginLeft= "0";
                document.getElementById("information_panel").style.left = "1060px";
            }
        }

        function delayNav(){
            closeNav();
            setTimeout(function(){
                 document.getElementById("navbar_open").style.display = "block";    
            },550);

        }


    </script>
    
    <!-- Google Map -->
    <script>
       var source,destination,map;

          function initMap() {
             map = new google.maps.Map(document.getElementById('map'), {
              mapTypeControl: false,
              center: {lat:23.744114,lng:90.3756356},
              zoom: 15, 
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
                  position: google.maps.ControlPosition.LEFT_BOTTOM
              },
              fullscreenControl: true,
              fullscreenControlOptions: {
                  position: google.maps.ControlPosition.LEFT_BOTTOM
              },
              mapTypeId: 'roadmap',
                });

            new AutocompleteDirectionsHandler(map);
          }

           /**
            * @constructor
           */
          function AutocompleteDirectionsHandler(map) {
            this.map = map;
            this.originPlaceId = null;
            this.destinationPlaceId = null;
            this.travelMode = 'WALKING';
            var originInput = document.getElementById('origin-input');
            var destinationInput = document.getElementById('destination-input');
            this.directionsService = new google.maps.DirectionsService;
            this.directionsDisplay = new google.maps.DirectionsRenderer;
            this.directionsDisplay.setMap(map);

            var originAutocomplete = new google.maps.places.Autocomplete(
                originInput, {geometry: true});
            var destinationAutocomplete = new google.maps.places.Autocomplete(
                destinationInput, {geometry: true});

            this.setupPlaceChangedListener(originAutocomplete, 'ORIG');
            this.setupPlaceChangedListener(destinationAutocomplete, 'DEST');
          }

          // Sets a listener on a radio button to change the filter type on Places
          // Autocomplete.
          AutocompleteDirectionsHandler.prototype.setupClickListener = function(id, mode) {
            var radioButton = document.getElementById(id);
            var me = this;
            radioButton.addEventListener('click', function() {
              me.travelMode = mode;
              me.route();
            });
          };

          AutocompleteDirectionsHandler.prototype.setupPlaceChangedListener = function(autocomplete, mode) {
            var me = this;
            autocomplete.bindTo('bounds', this.map);
            autocomplete.addListener('place_changed', function() {
            var place = autocomplete.getPlace();

              if (!place.place_id) {
                window.alert("Please select an option from the dropdown list.");
                return;
              }
              if (mode === 'ORIG') {
                me.originPlaceId = place.place_id;
                source = {
                  lat: place.geometry.location.lat(),
                  lng: place.geometry.location.lng()
                };
                console.log(source);

              } else {
                me.destinationPlaceId = place.place_id;
                 destination = {
                  lat: place.geometry.location.lat(),
                  lng: place.geometry.location.lng()
                };
                console.log(destination);
              }

            });

          };

          function get_source_destination_nearest(){

            var colors = ['#ff2d37','#1769ff','#34bf49','#8e43e7'];
              document.getElementById('information_panel').style="display:block;";
            
            var sourcenearBusStopdetails= find_near_BusStop_latlng(source);
            var sourceBusStop ={
               lat : parseFloat(sourcenearBusStopdetails.latlng.lat),
               lng : parseFloat(sourcenearBusStopdetails.latlng.lng)
            };

            console.log(sourcenearBusStopdetails.busstopid);
            var sorce_busstopid = sourcenearBusStopdetails.busstopid;


            var destinationnearBusStopdetails= find_near_BusStop_latlng(destination);
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

            if(sourcenearBusStopdetails.distance <= 100){

              new google.maps.Marker({
                      position: source,
                      map: map,
                      icon:"img/source_32.png",
                      title: "Near BusStop"
                    });

            }else{

              new google.maps.Marker({
                      position: source,
                      map: map,
                      icon:"img/source_32.png",
                      title: "Near BusStop"
                    });
              calculateAndDisplayRoute(directionsService, directionsDisplay, source, sourceBusStop);

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

                var newx = document.createElement("H5");
                var txtnode = document.createTextNode("No Bus Found");
                newx.appendChild(txtnode);
                document.getElementById('information_panel').appendChild(newx);
                newx.style="color:#f44336;font-size:16px;font-weight:bold;";

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
         var route1=[];
        var mainpath = [];
         for(var i=0; i<Object.keys(abc).length; i++){
          var route_latlng = [];
          var path_name = [];
             for(var j=0; j<Object.keys(abc[i]).length; j++){
              if( (j==0) && (abc[i][j].busstopid == sorce_busstopid)){
                flag=1;
              }
              if( (Object.keys(abc[i]).length>2) && (j > 0) && (j< Object.keys(abc[i]).length -1) ){
                route_latlng.push({
                     location: new google.maps.LatLng(abc[i][j].busstoplat,abc[i][j].busstoplng),
                     stopover: false
                });
                path_name.push({
                  bus_name:abc[i][j].busname,
                  busstop_name:abc[i][j].busstopname
                });
                }
              } 
              mainpath.push(path_name);
              route1.push(route_latlng);
            }  

            console.log(route1[0]);

            if(flag==1){             
              //show_near_busStop(sourceBusStop,destinationBusStop,route_latlng);              
            }
            else
            {
              //show_near_busStop(destinationBusStop,sourceBusStop,route_latlng);              
            }
            
            console.log(" ");

        
        for(var m=0;m<Object.keys(mainpath).length;m++){
            var flg=0;
          for(var n=0;n<Object.keys(mainpath[m]).length;n++){
            if(flg==0){

                

                var newx = document.createElement("H5");
                var txtnode = document.createTextNode("Bus Name: "+mainpath[m][n].bus_name);
                newx.appendChild(txtnode);
                document.getElementById('information_panel').appendChild(newx);
                newx.style="color:#f44336;font-size:16px;font-weight:bold;";

                if(flag==1){
                  
                    var btn = document.createElement("BUTTON");
                    var txt = document.createTextNode("Show Route");
                    btn.appendChild(txt);
                    btn.addEventListener("click", show_near_busStop.bind(null, sourceBusStop,destinationBusStop,route1[m]));
                    document.getElementById("information_panel").appendChild(btn);
                    btn.style="background-color: white;color: #00C853;border:2px solid #00C853;font-size:16px;padding: 3px 8px;margin: 10px 0px;";
                }
                else
                {
                    var btn = document.createElement("BUTTON");
                    var txt = document.createTextNode("Show Route");
                    console.log(destinationBusStop);
                   btn.addEventListener("click", show_near_busStop.bind(null, destinationBusStop,sourceBusStop,route1[m]));
                    btn.appendChild(txt);
                    document.getElementById("information_panel").appendChild(btn);      
                    btn.style="background-color: white;color: #00C853;border:2px solid #00C853;font-size:16px;padding: 3px 8px;margin: 10px 0px;";
                }

                var node = document.createElement("UL");
                node.setAttribute("id",m);
                document.getElementById("information_panel").appendChild(node);
                node.style="margin-left:0px;font-size: 15px;";
        
                flg++;
            }    
                console.log(mainpath[m][n].busstop_name);
                var node = document.createElement("LI");
                var textnode = document.createTextNode(mainpath[m][n].busstop_name);
                node.appendChild(textnode);
                document.getElementById(m).appendChild(node);
                node.style="margin-left:0px;list-style-type:square;font-weight:bold;";
              
          }
                var hr = document.createElement("HR");
                document.getElementById("information_panel").appendChild(hr);
                hr.style="border: 1px dashed #f44336;";

        }
            //console.log(xyz_main[0].location[1]);
            //console.log(xyz_main[0].location[2]);

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
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBpJmjhszpHAG4O_XAxqC8cS9Ij0XSPyzI&libraries=places&callback=initMap"
        async defer>
    </script>
</html>

