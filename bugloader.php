 <html>
    <head>
         <meta charset="utf-8">
         <title>Bugloader</title>
         <link rel="stylesheet" href="css/design.css" type="text/css" />
         <link rel="stylesheet" href="css/menu.css" type="text/css" />
    </head>

    <body>
        <div id="Holder">
            <div id="Header"></div>
            <div id="NavBar">
                <nav>
                    <ul>
                        <li><a href="logout.php">Log Out</a></li>
                    </ul>
                </nav>
            </div>
            <div id="Content">
                <div id="PageHeading">
                    <center><h1>Upload Here</h1></center>
                </div>
                <div id="ContentLeft">
                    <div id="Contentbar">
                        <nav>
                            <ul>
                                <li><a href="UploadBug.php">Restart Sequence</a></li>
                                <li><a href="bugstatus.php">View Bugs</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <form id="Bugloader" action="loadbug.php" method="post" enctype="multipart/form-data">

                Upload Bug:<input type="file" name="bug">
            <br>
            <center><input id ="bugsubmit" type="submit" name="btnSubmit" value="Submit"/></center>
        </form>
    </body>

    <footer>
        <p>(c) 2016  </p>
    </footer>
 </html>
