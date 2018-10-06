<?php
    session_start();
    $dbname     = "final_project";
    $username   = "root";
    $password   = "";
    $host       = "localhost";
    
    $conn       = mysqli_connect($host,$username,$password,$dbname);

    if(isset($_POST['submit'])){
        
        $name       = $_POST['name'];
        $email      = $_POST['email'];
        $password   = $_POST['password'];
        
        $query      = "INSERT INTO user (name, email, password)
                        VALUES ('$name', '$email', '$password')";
        
        $conn->query($query);
        
        header("Location:index.php");
        exit;
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

            /* signup Page */

            #welcome_header
            {
                font-size: 35px;
                font-family: 'Racing Sans One', cursive;
                background: -webkit-linear-gradient(#4CAF50, #2E7D32);
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
                padding-left: 150px;
                margin-top: 125px;
            }

            #welcome_background
            {
                margin-top: 50px;
                width: 130%;
            }

            #signup_box
            {
                border: 5px double #4CAF50;
                width: 450px;
                height: auto;
                margin-top: 100px;
                display: block;
                box-sizing: border-box;
            }

            #signup_box_header
            {
                color: #43A047;
                font-family: 'Gafata', sans-serif;
            }

            #signup_email,#signup_password,#signup_name
            {
                border: 1px solid green;
                font-size: 18px;
                width: 80%;
                padding: 10px 20px;
                outline:none;
                color: #333333;
                display: block;
                box-sizing: border-box;
            }
            #signup_name
            {
                margin-top: 10%;
            }
            #signup_email
            {
                margin-top: 1%;
            }
            #signup_password
            {
                margin-top: 1%;
            }

            #signup_button
            {
                margin-top: 3%;
                margin-bottom: 1%;
                width: 40%;
                font-family: 'Racing Sans One', cursive;
                font-size: 20px;
                padding: 5px 0px;
                border: 1px solid #4CAF50;
                color: #4CAF50;
                background: #ffffff;
                display: block;
                box-sizing: border-box;
                transition: all 500ms ease;
            }
            #signup_button:hover
            {
                background: #4CAF50;
                color: #ffffff;
            }


            #create_account_button
            {
                font-size: 15px;
                text-decoration: none;
                color: #4CAF50;
            }


            /* ********** */


            /*********** Resolution For Mobile ***********/

            @media only screen and (max-width: 1000px) 
            {
                /* signup Page */

                #welcome_header
                {
                    margin-top: 10%;
                    padding: 0px;
                    font-size: 55px;
                }
                #welcome_background
                {
                    margin-top: 50px;
                    width: 100%;
                }
                #signup_box
                {
                    margin-top: 20%;
                    width: 98%;
                    height: auto;
                    border-width: 15px;
                    border-radius: 40px;
                    margin-bottom: 10%;
                }

                #signup_box_header
                {
                    margin-top: 50px;
                    font-size: 80px;
                }


                #signup_name
                {
                    margin-top: 80px;
                    padding: 35px 20px; 
                    font-size: 35px;
                }
                
                #signup_email
                {
                    margin-top: 30px;
                    padding: 35px 20px; 
                    font-size: 35px;
                }

                #signup_password
                {
                    margin-top: 30px;
                    padding: 35px 20px; 
                    font-size: 35px;
                }

                #signup_button
                {
                    margin-top: 7%;
                    margin-bottom: 1%;
                    width: 50%;
                    font-size: 38px;
                    padding: 25px 0px;
                    background: #4CAF50;
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
                    <div align="center" id="signup_box">
                        <form action="" method="post">
                            <h1 id="signup_box_header">Registration</h1>
                            <input id="signup_name" name="name" placeholder="Enter Your Name">
                            <br>
                            <input id="signup_email" name="email" placeholder="Enter Your Email">
                            <br>
                            <input id="signup_password" name="password" type="password" placeholder="Enter Your Password">
                            <br>
                            <button id="signup_button" type="submit" name="submit">Submit</button>
                            <br>
                        </form>
                    </div>
                </div>
            </div>
        </div>    
        
    </body>
    
    <!--JavaScript-->
    <script src="js/index.js"></script>
    
</html>