<?php
include("check.php");
?>
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
                    <li><a href="logout.php">Logout</a></li>
                </ul>
            </nav>
        </div>
        <div id="Content">
            <div id="PageHeading">
                <h1>Welcome <?php echo $login_user;?></h1>
            </div>
            <div id="ContentLeft">
                <div id="Contentbar">
                    <nav>
                        <ul>
                            <li><a href="UploadBug.php">Upload Bug</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div id="ContentRight">

            </div>
        </div>
    </div>
    </body>
 </html>