<?php
 // Start Session
 session_start();

 //Establishing connection with our database
 include("connection.php");
    //make sue both fields are not empty
    if(empty($_POST["username"]) || empty($_POST["password"]))
        {
            $error = "Both fields are required.";
        } elseif(!empty($_POST['username']) && !empty($_POST['password']))
        {
            $username = mysqli_real_escape_string($db, $_POST['username']);
            $password = md5(mysqli_real_escape_string($db, $_POST['password']));


            //Check username and password from database
            $sql="SELECT userID FROM users WHERE username='$username' and password='$password'";
            $result=mysqli_query($db,$sql);

            //If username and password exist in our database then create a session.


            if(mysqli_num_rows($result) == 1)
            {   $run = mysqli_fetch_array($result);
                $user_id  =$run['userID'];
                $type = $run['type'];
                if($type == 'd'){
                    echo "<p>Your account has been deactivated</p>";
                } else {
                     // Initializing Session
                    $_SESSION['username'] = $username;
                    $_SESSION['user_id'] = $user_id;
                     // Redirecting To Other Page
                     header("location: home.php");
                }
            }else{
              //Otherwise redirect back to inder and echo error
                header("location: index.php");
                echo " <p>Incorrect username or password.</p>";
            }

        }

?>