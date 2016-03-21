

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
                        <li><a href="#">Register</a></li>
                        <li><a href="#">Forgot Password</a></li>
                    </ul>
                </nav>
            </div>
            <div id="Content">
                <div id="PageHeading">
                    <?php

                    if (loggedin()) {
                        echo 'Welcome! [Firstname] [Lastame]';
                    } else if (!loggedin()) {
                        echo '';
                    }
                    ?>
                </div>
                <div id="ContentLeft">
                    <h2></h2>
                </div>
            </div>
        </div>

        <form id="Bug" autocomplete="off ">

            <input id="bugtitle" name="bugtitle" type="text"
                   placeholder="Bug Title" autofocus/>


             <textarea id="bugdescription" type="text" rows="6" cols="40"
             name="bugdescription" placeholder="Bug Description"/></textarea>

            <!--<tr>
                <td>User Reference </td>
                <td><textarea type="text" rows="6" cols="40" name="User Reference"value=""/></textarea></td>
            </tr> -->
            <br>
            Date Posted:<input id="dateposted" type="date"
                               name="dateposted"value="Date Posted" />
            <br>

             Date Fixed:<input id="datefixed" type="date"
                              name="datefixed"value=""/>

             <p> What is the issue<br>
                <input type="checkbox" name="issue" value="Not Responding"/> Not Responding<br>
                <input type="checkbox" name="issue" value="Syntax Error"/> Syntax Error<br>
                <input type="checkbox" name="issue" value="Error 525"/> Error 525<br>
                <input type="checkbox" name="issue" value="Potential malware"/> Potential Malware
             </p>

            <textarea id="comments" type="text"rows="5" cols="40"
               name="comment" placeholder="Comment Here"/>
            </textarea>

            <textarea id="suggestions" type="text" rows="6" cols="40"
                name="suggestions" placeholder="Suggestions"/>
            </textarea>

            <input type="file" name="upload" value="Upload Bug"/>
            <input type ="reset" name="reset" value="Reset"/>
            <input type="submit" name="btnSubmit" value="Submit"/>
        </form>
   </body>

   <footer>
        <p>(c) 2016 MCE </p>
   </footer>
 </html>
