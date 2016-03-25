<?php

if (isset($_SESSION['username']) )
{
    header('Location: home.php');
}
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
                         <li><a href="#">Login</a></li>
                         <li><a href="Register.php">Register</a></li>
                         <li><a href="Forgotpassword.php">Forgot Password</a></li>
                     </ul>
                 </nav>
             </div>
             <div id="Content">
                 <div id="PageHeading">
                     <h1>Login Here</h1>
                 </div>
                 <div id="ContentLeft">
                     <h2> Allzeit Bereit!</h2>
                 </div>
             </div>
         </div>

         <form id="LoginForm" autocomplete="off" method="post" action="login.php">
             <input  id = "username"  name="username" title="Username"
                     required type="text" placeholder="Username" />
             <input id="password" name="password" required
                    type="password" placeholder="Password"/>
             <h6>You don't have an account?<a href="Register.php">Sign Up!</a></h6>
             <input type="submit" name="submit" value = "Login"/>
         </form>
         <div class="error"><?php echo $error;?></div>
     </body>
     <footer>
         <center><p> 2016 MCEv0.3 </p></center>
     </footer>
 </html>