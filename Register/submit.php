<?php

if(isset($_POST['submit']))
{
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $username = htmlspecialchars($db, $username);
    $email = htmlspecialchars($db, $email);
    $password = htmlspecialchars($db, $password);
    $password = md5($password);

    $sql="SELECT email FROM users WHERE email='$email'";
    $result=mysqli_query($db,$sql);
    $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
    if(mysqli_num_rows($result) > 0)
    {
        $msg = "Sorry...This email already exists...";
    }
    else
    {
        //echo $name." ".$email." ".$password;
        $query = mysqli_query($db, "INSERT INTO users (username, email, password)VALUES ($username, $email, $password)")or die(mysqli_error($db));
        if($query)
        {
            $msg = "Thank You! you are now registered.";
            session_start();
            $_SESSION['login']="1";
            header("Location:home.php");
        }

    }
}
?>