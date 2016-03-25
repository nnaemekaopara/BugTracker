<?php

if (isset($_POST['username']) && isset($_POST['email']) && isset($_POST['confmessage'])) {
    $username=$_POST['username'];
    $email=$_POST['email'];
    $confmessage=$_POST['confmessage'];

    if (!empty($username) && !empty($email) && !empty($confmessage)) {
        if ( strlen($username)>25 || strlen($email)>50 || strlen($confmessage)>1000) {
            echo 'Sorry, maxlength for some filed has been exceeded.';
        } else {

        $to = 'support@kimosabe.net';
        $subject = 'Forgot Password.';
        $body = $username."\n".$confmessage;
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
<style>
    form {background-image: url("images/np.gif");
    }
</style>

<!doctype html>
    <html>
        <head>
            <meta charset="utf-8">
            <title>Login</title>
            <link rel="stylesheet" href="css/design.css" type="text/css" />
            <link rel="stylesheet" href="css/menu.css" type="text/css" />
        </head>

        <body>
            <div id="Holder">
                <div id="Header"></div>
                <div id="NavBar">
                    <nav>
                        <ul>
                            <li><a href="index.php">Login</a></li>
                            <li><a href="Register.php">Register</a></li>
                        </ul>
                    </nav>
                </div>

                <div id="Content">
                    <div id="PageHeading">
                        <h1>Sorry About That</h1>
                    </div>
                    <div id="ContentLeft">
                        <h2> Fill in your Details</h2>
                    </div>
                </div>
            </div>

            <form id="ForgPass" method="post">
                <input  id = "username"  name="username" title="Username"
                        required type="text" placeholder="Username" />
                <input id = "email" name="email" required
                       type="email" placeholder="Email@address.com"/>
                Confirmation Message:<br>
                <textarea type="text" rows="6" cols="40" name="confmessage"/></textarea><br>
                <input type="submit" name="submit" value = "Send"/>
            </form>
        </body>
    </html>