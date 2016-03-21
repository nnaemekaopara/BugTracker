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
                </div>
            </div>
        </body>
    </html>