<?php
include_once('connection.php');

session_start();
$userid = $_SESSION['id'];

$query = "SELECT * FROM user WHERE id='$userid'";

$result = $conn->query($query);
       
while($row = $result->fetch_assoc()){
   $name = $row['name'];
   $email = $row['email'];
}


?>


<html>
    <head>
        <title>Profile</title>
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
                z-index: 1;
                overflow-x: auto;
            }
            #profile_page::-webkit-scrollbar
            {
                width: 1em;
            }
            #profile_page::-webkit-scrollbar-track
            {
                -webkit-box-shadow: inset 0 0 6px rgba(244,67,54,0.3);
            }
            #profile_page::-webkit-scrollbar-thumb
            {
              background-color: #f44336;
              outline: 1px solid #f44336;
            }

            #map 
            {
                height: 70%;
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

            #profile_box
            {
                width: 100%;
                border: 5px double #f44336;
                margin-top: 15%;
                margin-left: 10%;
                background-color: #FAFAFA;
            }
            #profile_header
            {
                margin-top:0;
                width: 100%;
                color: white;
                background-color: #f44336;
                padding: 5%;
            }
            #profile_box table { margin: 5%;margin-bottom: 0; }
            #profile_box th
            {
                padding-top: 2%;
                padding-bottom: 2%;
                font-size: 20px;
                color: #f44336;
            }
            #profile_box td 
            { 
                padding-top: 2%;
                padding-bottom: 2%;
                padding-left: 6%;
                font-size: 18px;
            }
            #profile_box input
            {
                padding: 5px;
                border: 1px solid #f44336;
                font-size: 16px;
                border-radius: 5px;
            }
            #password_change
            {
                width: 40%;
                padding: 5px;
                border: 2px solid #00C853;
                background-color: white;
                color: #00C853;
                font-weight: bold;
                font-size: 16px;
                transition: all 500ms ease;
            }
            #password_change:hover
            {
                background-color: #00C853;
                color: white;
                box-shadow: 0 8px 6px -1px #00000070;
            }
            #save_location_button
            {
                width: 50%;
                margin-top: 4%;
                margin-bottom: 4%;
                padding: 10px;
                border: 2px solid #f44336;
                background-color: white;
                color: #f44336;
                font-weight: bold;
                font-size: 16px;
                transition: all 500ms ease;
            }
            #save_location_button:hover
            {
                box-shadow: 0 8px 6px -1px #00000070;
                background-color: #f44336;
                color: white;
            }
            #saved_location_div
            {
                height: 71%;
                width: 120%;
                margin-top: 2.5%;
                border: 5px double #f44336;
                overflow-y: auto;
                
            }
            #saved_location_div::-webkit-scrollbar
            {
                width: 1em;
            }
            #saved_location_div::-webkit-scrollbar-track
            {
                -webkit-box-shadow: inset 0 0 6px rgba(244,67,54,0.3);
            }
            #saved_location_div::-webkit-scrollbar-thumb
            {
              background-color: #f44336;
              outline: 1px solid #f44336;
            }
            #saved_location_table
            {
                width: 100%;
            }
            #saved_location_table,#saved_location_table th,#saved_location_table td
            {
                text-align: center;
            }
            #saved_location_table th
            {
                padding: 10px;
                font-size: 18px;
                color: white;
                background-color: #f44336;
                vertical-align: center;
            }
            #saved_location_table td
            {
                padding-top: 10px;
                padding-bottom: 10px;
                font-size: 16px;
                font-weight: bold;
            }
            #saved_location_header
            {
                color: #f44336;
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
                <div class="row container">
                    <div class="col-md-5">
                        <div id="profile_box">
                            <h1 id="profile_header">Profile<span id='pass_warning' style="margin-left: 10%; font-size: 20px;"></span></h1>
                            
                            <table style="width:100%">
                                <tr>
                                    <th>Name</th>
                                    <td><?php echo $name ?></td>
                                </tr>
                                <tr>
                                    <th>Email</th>
                                    <td><?php echo $email ?></td>
                                </tr>
                                <tr>
                                    <th>Password</th>
                                    <td> 
                                        <input type="password" id="old_password" placeholder='Type In Old Password'>
                                    </td>
                                </tr>
                                <tr>
                                    <th></th>
                                    <td> 
                                        <input type="password" id="new_password" placeholder='Type In New Password'>
                                    </td>
                                </tr>
                                <tr>
                                    <th></th>
                                    <td>
                                        <button id="password_change" onClick='change()'>Change</button>
                                    </td>
                                </tr>
                            </table>
                            <div class="row" align="center">
                                <button onclick='save(1)' id="save_location_button">Save Current Location</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-1"></div>
                    <div class="col-md-6">
                        <h2 id="saved_location_header">Saved Location</h2>
                        <div id="saved_location_div">
                            <table id="saved_location_table">
                            
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="map_modal" role="dialog">
            <div class="modal-dialog" style="width:90%">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title" style="color:#f44336">Location In Map</h4>
                    </div>
                    <div class="modal-body" style="border-top:1px solid #f44336;border-bottom:1px solid #f44336;">
                        <div id="map"></div>
                    </div>
                    <div class="modal-footer"></div>
                </div>
            </div>
        </div>
    </body>

    <!--Bootstrap JS Links-->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    
    <!--Custom JS Links-->
    <script>
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
    </script>
    <script>
        save(0);
        // $("#pass_warning").hide();

        function change(){
            console.log('clicked');
            var new_pass =  document.getElementById("new_password").value;
            var old_pass =  document.getElementById("old_password").value;

            document.getElementById("new_password").value = '';
            document.getElementById("old_password").value = '';
            $( document ).ready(function() {
                $.ajax({  
                    url:"password_fetch.php",  
                    method:"POST",  
                    data:{old_pass:old_pass,new_pass:new_pass},  
                    success:function(data)  
                    {  
                        if(data){
                            console.log(data);
                        }
                        else if(data == 'wrong password'){
                            console.log
                            document.getElementById("pass_warning").innerHTML = "Wrong Password !!!";                        
                        } else if(data =='password changed'){
                            document.getElementById("pass_warning").innerHTML = "Password Changed";                        
                        }
                        $("#pass_warning").show();
                        $("#pass_warning").fadeOut(5000);

                    }  
                });
            });
        }



        function save(command){
            console.log('Scee');
            var lat ='';
            var lng ='';

            if(command == 1){
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
                
            }
            $( document ).ready(function() {
                console.log(lat);
                console.log(lng);
                $.ajax({  
                    url:"save_location_fetch.php",  
                    method:"POST",  
                    data:{command:command,lat:lat,lng:lng},  
                    success:function(data)  
                    {  
                        $('#saved_location_table').fadeOut(100, function(){
                            $(this).html(data);
                            $(this).fadeIn(100);
                        });
                    }  
                });
            });
        }
    </script>
    <script type="text/javascript">
        
      function initMap() {
         map = new google.maps.Map(document.getElementById('map'), {
          mapTypeControl: false,
          center: {lat:23.744114,lng:90.3756356},
          zoom: 15
        });

      
      }
      function viewinmap(destination_lat,destination_lng){

            var destination = {
            lat : parseFloat(destination_lat),
            lng : parseFloat(destination_lng)
        };
        var bounds = new google.maps.LatLngBounds();
        var marker = new google.maps.Marker({
          position: destination,
          map: map,
          title: 'Hello World!'
        });
         bounds.extend(destination);
          map.fitBounds(bounds);
          var listener = google.maps.event.addListener(map, "idle", function() { 
            if (map.getZoom() > 16) map.setZoom(15); 
            google.maps.event.removeListener(listener); 
         });

        }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBpJmjhszpHAG4O_XAxqC8cS9Ij0XSPyzI&libraries=geometry&callback=initMap"
        async defer></script>
    
</html>
