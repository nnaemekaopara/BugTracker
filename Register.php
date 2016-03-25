<?php

include("connection.php");

?>
<!doctype html>
    <html>
        <head>
            <meta charset="utf-8">
            <title>Sign Up</title>
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
                            <li><a href="#">Register</a></li>
                            <li><a href="Forgotpassword.php">Forgot Password</a></li>
                        </ul>
                    </nav>
                </div>

                <div id="Content">
                    <div id="PageHeading">
                        <h1>Sign Up</h1>
                    </div>
                </div>
             </div>

             <form id="Sign" action="submit.php" method="post" autocomplete="off">
                 <table>
                     <tr>
                         <td><input type="text" placeholder="Username" name="username"size="20"autofocus required/></td>
                     </tr>

                     <tr>
                         <td><input type="email" placeholder="Email Address" name="email"size="20" required/></td>
                     </tr>

                     <tr>
                         <td><input type="password"placeholder="Password" name="password"size="25" required/></td>
                     </tr>

                     <tr>
                         <td><input type="tel" placeholder="Mobile Number" name="phone"size="11"required/></td>
                     </tr>
                 </table>
                <h6>You already have an account?<a href="login.php">Click Here</a></h6>
                <input type="reset" name="reset" value="Reset"/>
                <input type="submit" name="submit" value="Sumbit" />
             </form>
        </body>
        <footer>
            <center><p> 2016 MCEv0.3 </p></center>
        </footer>
    </html>