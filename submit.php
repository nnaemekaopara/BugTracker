<?php

if(!empty($_POST['username']) && !empty($_POST['password'])
    && !empty($_POST['password'])&& !empty($_POST['phone']))
{
    $username = ($_POST['username']);
    $email = ($_POST['email']);
    $password = md5($_POST['password']);
    $phone = ($_POST['phone']);

    $sql=mysqli_query("SELECT email FROM users WHERE email='$email'");
    $result=mysqli_query($db,$sql);
    $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
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