<?php
include("check.php");

include("function.php");
?>

<style>


</style>

<!doctype html>
    <html>
        <head>
            <meta charset="utf-8">
            <title>METCR</title>
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
                            <li><a href="ContactUs.php">Contact Us</a></li>
                        </ul>
                    </nav>
                </div>
                <div id="Content">
                    <div id="PageHeading">
                        <h1>Welcome <b><?php echo $login_user;?></b>[ <?php echo $$user_level; ?> ]</h1>
                    </div>
                    <div id="ContentLeft">
                        <p>
                            <?php
                            if($user_level == 1) {
                                echo "<a href='admin.php'>Admin Pannel</a>";
                            }


                            ?>
                        </p>
                        <div id="Contentbar">
                            <nav>
                                <ul>
                                    <li><a href="UploadBug.php">Upload Bug</a></li>
                                    <li><a href="bugstatus.php">View Bugs</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div id="ContentRight">
                    </div>
                </div>
            </div>
        </body>
        <footer>
            <center><p> 2016 MCEv0.3 </p></center>
        </footer>
    </html>