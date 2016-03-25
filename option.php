<?php

include 'connection.php';

include'function.php';

$u_userID = $_GET['userID'];
$type = $_GET['type'];

if($type == 'a'){

    mysqli_query($db, "UPDATE users SET type =d WHERE userID='$u_userID'");
    header('location:admin.php?type=user');

}   else if($type =='d'){

    mysqli_query($db, "UPDATE users SET type =a WHERE userID='$u_userID'");
    header('location:admin.php?type=user');
}

?>