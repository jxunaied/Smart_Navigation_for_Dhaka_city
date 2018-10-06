<?php

    session_start();
    $dbname     = "final_project";
    $username   = "root";
    $password   = "";
    $host       = "localhost";

     $conn       = mysqli_connect($host,$username,$password,$dbname);
   
   if( isset($_SESSION['id']) != NULL){

    echo"<script language='javascript'>
                var alertMsg = 'You Are Already Loged In !!!';
                alert(alertMsg);  
                if (window.confirm)
                 {
                      window.location.href = 'home.php';
                 }    
            </script>
            "; 

}

   
    if(isset($_POST['submit'])){
        
        $email      = $_POST['email'];
        $password   = $_POST['password'];
        
        $query      = "Select * From user Where email = '$email' and password = '$password'";
        echo $query;
        $result     = $conn->query($query);
        
        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                  
                $_SESSION["id"] = $row['id'];
                
            }
             header("Location:home.php");
        }
    }   
    $conn->close();

?>

<html>

    <head>
    
        <title>Project</title>
        
        
        <!--Bootstrap CSS Links-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
        
        <!--Google Fonts Links-->
        <link href="https://fonts.googleapis.com/css?family=Racing+Sans+One" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Gafata" rel="stylesheet">
        
        <!--Bootstrap JS Script-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Archivo+Narrow" rel="stylesheet">
        
        
        <!--Customized CSS Links-->
        <style>
            /*********** Resolution For PC ***********/

            body
            {
                width: 100%;
                height: 100%;
                overflow: hidden;
                box-sizing: border-box;
                display: block;
            }

            row
            {
                height: 100%;
                box-sizing: border-box;
                display: block;
            }

            /* Login Page */

            #welcome_header
            {
                font-size: 35px;
                font-family: 'Racing Sans One', cursive;
                background: -webkit-linear-gradient(#e52d27, #b31217);
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
                padding-left: 150px;
                margin-top: 105px;
            }

            #welcome_background
            {
                margin-top: 50px;
                width: 130%;
            }

            #login_box
            {
                border: 5px double #e52d27;
                width: 450px;
                height: auto;
                margin-top: 120px;
                display: block;
                box-sizing: border-box;
            }

            #login_box_header
            {
                color: #e52d27;
                font-family: 'Gafata', sans-serif;
            }

            #login_username,#login_password
            {
                border: 1px solid #b31217;
                font-size: 18px;
                width: 80%;
                padding: 10px 20px;
                outline:none;
                color: #333333;
                display: block;
                box-sizing: border-box;
            }
            #login_username
            {
                margin-top: 10%;
            }
            #login_password
            {
                margin-top: 1%;
            }

            #login_button
            {
                margin-top: 3%;
                margin-bottom: 1%;
                width: 40%;
                font-family: 'Racing Sans One', cursive;
                font-size: 20px;
                padding: 5px 0px;
                border: 1px solid #e52d27;
                color: #e52d27;
                background: #ffffff;
                display: block;
                box-sizing: border-box;
                transition: all 500ms ease;
            }
            #login_button:hover
            {
                background: #e52d27;
                color: #ffffff;
            }


            #create_account_button
            {
                font-size: 15px;
                text-decoration: none;
                color: #e52d27;
            }


            /* ********** */


            /*********** Resolution For Mobile ***********/

            @media only screen and (max-width: 1000px) 
            {
                /* Login Page */

                #welcome_header
                {
                    margin-top: 20%;
                    padding: 0px;
                    font-size: 55px;
                }
                #welcome_background
                {
                    margin-top: 50px;
                    width: 100%;
                }
                #login_box
                {
                    margin-top: 20%;
                    width: 98%;
                    height: auto;
                    border-width: 15px;
                    border-radius: 40px;
                    margin-bottom: 10%;
                }

                #login_box_header
                {
                    margin-top: 50px;
                    font-size: 80px;
                }

                #login_username
                {
                    margin-top: 80px;
                    padding: 35px 20px; 
                    font-size: 35px;
                }

                #login_password
                {
                    margin-top: 30px;
                    padding: 35px 20px; 
                    font-size: 35px;
                }

                #login_button
                {
                    margin-top: 7%;
                    margin-bottom: 1%;
                    width: 50%;
                    font-size: 38px;
                    padding: 25px 0px;
                    background: #e52d27;
                    color: #ffffff;
                }
                #create_account_button
                {
                    font-size: 30px;
                }

                /* ********** */

            }

        </style>
        
    </head>
    
    <body>
        
        <div class="container">
            <div class="row">
                <div align="center" class="col-md-5">
                    <div class="row">
                        <h1 id="welcome_header">Smart Navigation System</h1>
                    </div>
                    <div class="row">
                        <img id="welcome_background" src="img/index_background.png">
                    </div>
                </div>

                <div class="col-md-2"></div>

                <div class="col-md-5">
                    <div align="center" id="login_box">
                        <form action="" method="post">
                            <h1 id="login_box_header">Sign-In</h1>
                            <input id="login_username" name="email" placeholder="Enter Your Email">
                            <br>
                            <input id="login_password" name="password" type="password" placeholder="Enter Your Password">
                            <br>
                            <button id="login_button" type="submit" name="submit">Submit</button>
                            <br>
                            <a id="create_account_button" href="signup.php">Create An Account</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>    
        
    </body>
    
    <!--JavaScript-->
    <script src="js/index.js"></script>
    
</html>