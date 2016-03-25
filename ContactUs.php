<?php

if (isset($_POST['username']) && isset($_POST['email']) && isset($_POST['message'])) {
    $username=$_POST['username'];
    $email=$_POST['email'];
    $confmessage=$_POST['message'];

    if (!empty($username) && !empty($email) && !empty($message)) {
        if ( strlen($username)>25 || strlen($email)>50 || strlen($message)>1000) {
            echo 'Sorry, maxlength for some filed has been exceeded.';
        } else {

            $to = 'support@kimosabe.net';
            $subject = 'Forgot Password.';
            $body = $username."\n".$message;
            $headers = 'From: '.$email;

            if (mail ($to, $subject, $body, $headers)) {
                echo ' Thanks for contacting us. We\'ll be in touch soon.';
            } else {
                echo 'Sorry an error has occurred. Please try again later.';
            }
        }
    } else {
        echo 'All fields are required.';
    }
}
?>
<!doctype html>
 <html>
    <head>
        <meta charset="utf-8">
        <title>How can we Help</title>
        <link rel="stylesheet" href="css/design.css" type="text/css" />
        <link rel="stylesheet" href="css/menu.css" type="text/css" />
    </head>

    <body>
        <div id="Holder">
            <div id="Header"></div>
            <div id="NavBar">
                <nav>
                    <ul>
                        <li><a href="home.php">home</a></li>
                        <li><a href="UploadBug.php">Upload Bug</a></li>
                        <li><a href="logout.php">Logout</a></li>
                    </ul>
                </nav>
            </div>

            <div id="Content">
                <div id="PageHeading">
                   <center><h1>Hope your good</h1></center>
                    <center><h2> Tell us</h2></center>
                </div>
            </div>
        </div>

        <form id="Sign" action="contactusend.php" method="post">
            <input  id = "username"  name="username" title="Username"
                    required type="text" placeholder="Username" />
            <input id = "email" name="email" required
                   type="email" placeholder="Email@address.com"/>
            Message:<br>
            <textarea type="text" rows="6" cols="40" name="message"/></textarea><br>
            <input type="submit" name="submit" value = "Send"/>
        </form>
    </body>
 </html>