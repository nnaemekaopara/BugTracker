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
   // $sql1=mysqli_query("SELECT username FROM users WHERE username='$username'");
    $result_email=mysqli_query($db,$sql);
   // $result_username=mysqli_query($db,$sql1);
    if(mysqli_num_rows($result_email) == 1)
    {
        header("location:Register.php");
        $echo = "Sorry...This email already exists...";

    }
    //elseif(mysqli_num_rows($result_username)==1){
      //  header("location:Register.php");
        //$echo = "Sorry...This username already exists...";
   // }
    else
    {
        //echo $name." ".$email." ".$password;
        $registerquery = mysqli_query($db,
            "INSERT INTO users (username, email, password, phone, user_level,type) VALUES ('$username', '$email', '$password', '$phone', '2','a')") or die(mysqli_error($db));
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