<?php
session_start();
include("connection.php"); //Establishing connection with our database

  if(empty($_POST["username"]) || empty($_POST["password"]))
        {
            $echo = "Both fields are required.";
        } else
        {
            // Define $username and $password
            $username=$_POST['username'];
            $password=$_POST['password'];


            //Check username and password from database
            $sql="SELECT uid FROM 'users' WHERE username='$username' and password='$password'";
            $sql2="insert into 'users' values '$username','$password'";
            $result=mysqli_query($db,$sql);

            //If username and password exist in our database then create a session.
            //Otherwise echo error.

            if(mysqli_num_rows($result) == 1)
            {
                $_SESSION['username'] = $username; // Initializing Session
                echo "fvrejhjvrej";
                header("location: home.php"); // Redirecting To Other Page
            }else
            {
                $error = "Incorrect username or password.";
            }

        }

?>