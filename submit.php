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

    $sql=mysqli_query("SELECT email FROM users WHERE email='$email'");
    $result=mysqli_query($db,$sql);
    if(mysqli_num_rows($result) == 1)
    {
        $echo = "Sorry...This email already exists...";
    }
    else
    {
        //echo $name." ".$email." ".$password;
        $registerquery = mysqli_query($db, "INSERT INTO users (username, email, password, phone)VALUES ('$username', '$email', '$password', '$phone')")or die(mysqli_error($db));
        if($registerquery)
        {
            echo  "<p>Thank You! you are now registered.</p>";
            $_SESSION['username'] = $username;
            header("Location:home.php");
        }
        else
        {
            echo"<h2>Error</h2>";
            echo"<p>Someting's wrong</p>";
        }

    }
}
?>