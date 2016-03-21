 <?php
session_start();
    require("connection.php");

    if($_POST['username']) {


        $username = strip_tags($_POST["username"]);
        $password = strip_tags($_POST["password"]);

        if ($username == $dbUsername && $password == $dbPassword) {
            //Set session variables
            $_SESSION['username'] = $username;
            $_SESSION['id'] = $uid;
            //Now direct to users feed
            header("Location: home.php");
        }else {
            echo "<h2> Bros/Sista abeg this your username or password get as e be.
            <br /> Abeg try am again.</h2>";
        }
    }
?>
