<?php

if(!empty($_POST['username']) && !empty($_POST['password']) && !empty($_POST['password']))
{
    $username = mysqli_real_escape_string($_POST['username']);
    $email = mysqli_real_escape_string($_POST['email']);
    $password = md5(mysqli_real_escape_string($_POST['password']));

    $sql=mysqli_query("SELECT email FROM users WHERE email='$email'");
    $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
    if(mysqli_num_rows($result) > 0)
    {
        $echo = "Sorry...This email already exists...";
    }
    else
    {
        //echo $name." ".$email." ".$password;
        $registerquery = mysqli_query($db, "INSERT INTO users (username, email, password)VALUES ('$username', '$email', '$password')")or die(mysqli_error($db));
        if($registerquery)
        {
            echo  "<p>Thank You! you are now registered.</p>";
            session_start();
            $_SESSION['login']="1";
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