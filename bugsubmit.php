<?php
session_start();
include ("connection.php");

if(!empty($_POST['bugtitle']) && !empty($_POST['bugdescription'])
    && !empty($_POST['dateposted']) )
    {
        $bugtitle = mysqli_real_escape_string($db, $_POST['bugtitle']);
        $bugdescription = mysqli_real_escape_string($db, $_POST['bugdescription']);
        $dateposted = mysqli_real_escape_string($db, $_POST['dateposted']);

        $sql=mysqli_query("SELECT bugtitle FROM bugs WHERE bugtitle='$bugtitle'");
        $result=mysqli_query($db,$sql);
        if(mysqli_num_rows($result) == 1)
        {
            $echo = "Sorry...This bugtitle already exists...";
        }

        else
        {
            //echo $name." ".$email." ".$password;
            $registerquery = mysqli_query($db, "INSERT INTO bugs (bugtitle, bugdescription, dateposted, userID)VALUES ('$bugtitle', '$bugdescription', '$dateposted', '$userID')")
            or die(mysqli_error($db));
            if($registerquery)
            {
                echo  "<p>\Bug Uploaded</p>";
                header("Location:bugloader.php");
            }
            else
            {
                echo"<h2>Error</h2>";
                echo"<p>Someting's wrong</p>";
            }

        }
    }

?>