<!doctype html>
 <html>
    <head>
        <meta charset="utf-8">
        <title>METCR Upload</title>
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
                    <center><h1>Bug Details</h1></center>
                </div>
                <div id="ContentLeft">
                    <h2></h2>
                </div>
            </div>
        </div>

        <form id="Bug" action="bugsubmit.php" method="post" autocomplete="off ">

            <table>
                <tr>
                    <td>Bug Title:</td>
                    <td><input id="bugtitle" name="bugtitle" type="text"
                               placeholder="Bug Title" autofocus/></td>
                </tr>


                <tr>
                    <td>Bug Descrip:</td>
                    <td><textarea id="bugdescription" type="text" rows="6" cols="40"
                                  name="bugdescription" placeholder="Bug Description"/></textarea></td>
                </tr>
            </table>
            <br>
            <center><input id ="bugsubmit" type="submit" name="btnSubmit" value="Submit"/></center>
        </form>
   </body>

    <footer>
        <center><p> 2016 MCEv0.3 </p></center>
    </footer>
 </html>
