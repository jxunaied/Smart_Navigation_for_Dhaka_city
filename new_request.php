<?php
include_once('connection.php');

session_start();
$userid = $_SESSION['id'];

$result = $conn->query("SELECT user.id,user.name,user.email FROM user JOIN friends ON user.id=friends.from_id AND to_id='$userid' AND status=0");
        


?>

<html>
    <head>
        <title>New Request</title>
        <!--Bootstrap CSS Links-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
        
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
            
            #header { margin-top: 4%; color: #f44336; }
            #table_div
            {
                height: 70%;
                margin-top: 5%;
                border: 2px solid #f44336;
                overflow-y: auto;
            }
            #table_div::-webkit-scrollbar {
                width: 1em;
            }

            #table_div::-webkit-scrollbar-track {
                -webkit-box-shadow: inset 0 0 6px rgba(244,67,54,0.3);
            }

            #table_div::-webkit-scrollbar-thumb {
              background-color: #f44336;
              outline: 1px solid #f44336;
            }
            #request_table
            {
                width: 100%;
                margin-top: 2%;
            }
            #request_table,#request_table th,#request_table td
            {
                text-align: center;
            }
            #request_table th
            {
                padding-bottom: 30px;
                font-size: 20px;
                color: #f44336;
            }
            #request_table td
            {
                padding-top: 10px;
                padding-bottom: 10px;
                font-size: 18px;
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
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        <h1 align="center" id="header">Friend Requests Table</h1>
                        <div id="table_div">
                            <table id="request_table">
                                
                            </table>
                        </div>  
                    </div>
                    <div class="col-md-2"></div>
                </div>
            </div>
        </div>
    </body>

    <!--Bootstrap JS Links-->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    
    <!--Custom JS Links-->
    <script>
        request_handle(0,0);
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




        function request_handle(user,command) {
            $( document ).ready(function() {
                $.ajax({  
                    url:"fetch/new_request_fetch.php",  
                    method:"POST",  
                    data:{user:user,command:command},  
                    success:function(data)  
                    {  
                        $('#request_table').fadeOut(300, function(){
                            $(this).html(data);
                            $(this).fadeIn(300);
                        });

                    }  
                });
            });
            
        }




    </script>
    
</html>
