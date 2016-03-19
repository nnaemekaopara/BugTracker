<?php
include("connection.php"); //Establishing connection with our database
if(empty($_POST["username"]) || empty($_POST["password"]))
{
    echo "Both fields are required.";
}else
{
    $username=$_POST['username'];
    $password=$_POST['password'];
    $name = 'emeka';
    $pass = 'pass';
    $sql="SELECT uid FROM users WHERE username='$username' and password='$password'";
    $sql2 = "insert into users values '$name','$pass'";
    $result=mysqli_query($db,$sql);
    if(mysqli_num_rows($result) == 1)
    {
        $result2 = mysqli_query($db,$sql2);
        header("location: home.php"); // Redirecting To another Page
    }else
    {
        echo "Incorrect username or password.";
    }
}
?>