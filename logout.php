<?php
session_start();
session_destroy();
if (isset($_SESSION['username'])) {
    $msg = "You are now logged out";
} else {
    $msg = "<h2>Omo problem dey o</h2>";
}
?>

<!doctype html>
 <html>
    <head>
        <meta charset="utf-8">
        <title>See Ya</title>
        <link rel="stylesheet" href="css/design.css" type="text/css" />
        <link rel="stylesheet" href="css/menu.css" type="text/css" />
    </head>

    <body>
        <div id="Holder">
            <div id="NavBar">
                <nav>
                    <ul>
                        <li><a href="login.php">Login</a></li>
                        <li><a href="#">Register</a></li>
                        <li><a href="#">Forgot Password</a></li>
                    </ul>
                </nav>
            </div>
            <div id="Content">
                <div id="PageHeading">
                    <h1>Bubye</h1>
                </div>
                <div id="ContentLeft">
                    <h2></h2>
                </div>
            </div>
        </div>

        <?php echo "msg"; ?><br>
        <p><a href="index.php">Click here</a> to return to our home page </p>
    </body>
 </html>