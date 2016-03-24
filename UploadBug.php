<!doctype html>
 <html>
    <head>
        <meta charset="utf-8">
        <title>ShutterBug</title>
        <link rel="stylesheet" href="css/design.css" type="text/css" />
        <link rel="stylesheet" href="css/menu.css" type="text/css" />
    </head>

   <body>
        <div id="Holder">
            <div id="NavBar">
                <nav>
                    <ul>
                        <li><a href="logout.php">Log Out</a></li>
                    </ul>
                </nav>
            </div>
            <div id="Content">
                <div id="PageHeading">
                    <h1>Upload Bug Here</h1>
                </div>
                <div id="ContentLeft">
                    <h2></h2>
                </div>
            </div>
        </div>

        <form id="Bug" action="bugsubmit.php" method="post"
              enctype="multipart/form-data" autocomplete="off ">

            <input id="bugtitle" name="bugtitle" type="text"
                   placeholder="Bug Title" autofocus/>


            <textarea id="bugdescription" type="text" rows="6" cols="40"
             name="bugdescription" placeholder="Bug Description"/></textarea>

            <br>
            Date Posted:<input id="dateposted" type="date"
                               name="dateposted"value="Date Posted" />

            <textarea id="comments" type="text"rows="5" cols="40"
               name="comment" placeholder="Comment Here"/>
            </textarea>

            <input type="file" name="file">
            <input type="submit" name="btnSubmit" value="Submit"/>
        </form>
   </body>

   <footer>
        <p>(c) 2016 MCE </p>
   </footer>
 </html>
