<?php
session_start();
include("connection.php"); //Establishing connection with our database

  if(empty($_POST["username"]) || empty($_POST["password"]))
        {
            $error = "Both fields are required.";
        } elseif(!empty($_POST['username']) && !empty($_POST['password']))
        {
            $username = mysqli_real_escape_string($_POST['username']);
            $password = mysqli_real_escape_string($_POST['password']);


            //Check username and password from database
            $sql="SELECT userID FROM users WHERE username='$username' and password='$password'";
            $result=mysqli_query($db,$sql);

            //If username and password exist in our database then create a session.
            //Otherwise echo error.

            if(mysqli_num_rows($result) == 1)
            {
                $_SESSION['username'] = $username; // Initializing Session
                header("location: home.php"); // Redirecting To Other Page
            }else
            {
                echo " Incorrect username or password.";
            }

        }

?>