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
                            <li><a href="UploadBug.php">BugUpload</a></li>
                            <li><a href="#">Forgot Password</a></li>
                        </ul>
                    </nav>
                </div>
                <div id="Content">
                    <div id="PageHeading">
                        <h1>Welcome <?echo $username = $_SESSION['username'] ?></h1>
                    </div>
                    <div id="ContentLeft">
                        <h2> Allzeit Bereit!</h2>
                    </div>
                    <?php

                    $sql = "SELECT id,bugtitle, bugdescription, dateposted,datefixed, issue, comments suggestions FROM bugtracker ";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
                            echo "id: " . $row["id"]. "" . $row["bugtitle"]. " " . $row["bugdescription"]." " . $row["dateposted"]." " . $row["datefixed"]." " . $row["issue"]." " . $row["comment"]." " . $row["suggestion"]. "<br>";
                        }
                    } else {
                        echo "0 results";
                    }
                    $conn->close();
                    ?>
                </div>
            </div>
        </body>
    </html>