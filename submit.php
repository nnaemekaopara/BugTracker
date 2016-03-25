<?php
session_start();
include ("connection.php");

if(!empty($_POST['username']) && !empty($_POST['password'])
    && !empty($_POST['password'])&& !empty($_POST['phone']))
{
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password = md5(mysqli_real_escape_string($db, $_POST['password']));
    $phone = mysqli_real_escape_string($db, $_POST['phone']);

    $sql="SELECT email FROM users WHERE email='$email'";
    $result_email = mysqli_query($db,$sql);
    if(mysqli_fetch_assoc($result_email) == 1)
    {

        header("Location:Register.php");
        $echo = "Sorry...This email already exists...";

    }
    else
    {
        //echo $name." ".$email." ".$password;
        $registerquery = mysqli_query($db,
            "INSERT INTO users (username, email, password, phone, user_level,type) VALUES ('$username', '$email', '$password', '$phone', '2','a')") or die(mysqli_error($db));
        if($registerquery)
        {

            $_SESSION['username'] = $username;
            header("Location:home.php");
            echo  "<p>Thank You! you are now registered.</p>";
        }
        else
        {
            echo"<h2>Error</h2>";
            echo"<p>Someting's wrong</p>";
        }

    }
}
?>