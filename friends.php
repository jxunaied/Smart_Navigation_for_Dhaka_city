<html>
    <head>
        <title>Friends</title>
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

            
            #new_friends_div,#friend_list_div
            {
                height: 60%;
                margin-top: 2%;
                border: 2px solid #f44336;
                overflow-y: auto;
                
            }
            #friend_list_div { margin-top: 3%; }
            #new_friends_div::-webkit-scrollbar,#friend_list_div::-webkit-scrollbar {
                width: 1em;
            }

            #new_friends_div::-webkit-scrollbar-track,#friend_list_div::-webkit-scrollbar-track {
                -webkit-box-shadow: inset 0 0 6px rgba(244,67,54,0.3);
            }

            #new_friends_div::-webkit-scrollbar-thumb,#friend_list_div::-webkit-scrollbar-thumb {
              background-color: #f44336;
              outline: 1px solid #f44336;
            }
            .new_friends_table,.friend_list_table
            {
                width: 100%;
            }
            .new_friends_table,.new_friends_table th,.new_friends_table td,.friend_list_table,.friend_list_table th,.friend_list_table td
            {
                text-align: center;
            }
            .new_friends_table th,.friend_list_table th
            {
                /*padding-bottom: 20px;*/
                padding: 10px;
                font-size: 18px;
                color: white;
                background-color: #f44336;
                vertical-align: center;
            }
            .new_friends_table td,.friend_list_table td
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
                            <h2 id="search_header">Search for friends...</h2>
                            <input onkeyup="search(this.value,'')" id="search_field" type="text" placeholder="Type Email Here...">
                        </div>
                        <div id="friend_box">
                            <div class="row">
                                <div class="col-md-7">
                                    <h3 style="color:#f44336">Make Friends</h3>
                                    <div id="new_friends_div">
                                        <table id="new_friends_table" class="new_friends_table">
                                            
                                        </table>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <h3 style="color:#f44336">Friend List</h3>
                                    <div id="friend_list_div">
                                        <table id="friend_list_table" class="friend_list_table">
                                            
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-1"></div>
                </div>
            </div>
        </div>
    </body>

    <!--Bootstrap JS Links-->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    
    <!--Custom JS Links-->
    <script>
        // addfriend('');
        search('');
        unfriend('');
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



        function search(keys) {
            $( document ).ready(function() {
                $.ajax({  
                    url:"fetch/friends_fetch/friend_fetch.php",  
                    method:"POST",  
                    data:{search:keys},  
                    success:function(data)  
                    {  
                        $('#new_friends_table').fadeOut(100, function(){
                            $(this).html(data);
                            $(this).fadeIn(100);
                        });
                    }  
                });
            });
            
        }
        function addfriend(user) {
            $( document ).ready(function() {
                $.ajax({  
                    url:"fetch/friends_fetch/add_friend_fetch.php",  
                    method:"POST",  
                    data:{user:user},  
                    success:function(data)  
                    {  
                        $('#new_friends_table').fadeOut(100, function(){
                            $(this).html(data);
                            $(this).fadeIn(100);
                        });
                    }  
                });
            });
            
        }
        
        function unfriend(user) {
            $( document ).ready(function() {
                $.ajax({  
                    url:"fetch/friends_fetch/unfriend_fetch.php",  
                    method:"POST",  
                    data:{user:user},  
                    success:function(data)  
                    {  
                        $('#friend_list_table').fadeOut(100, function(){
                            $(this).html(data);
                            $(this).fadeIn(100);
                        });
                    }  
                });
            });
            
        }
    </script>
    
</html>
