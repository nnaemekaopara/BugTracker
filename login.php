
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
                        <li><a href="index.php">Login</a></li>
                        <li><a href="Sign%20Up.php">Register</a></li>
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

        <form id="LoginForm" method="post" action="index.php">
            <input  id = "username"  name="username" title="Username"
                    required type="text" placeholder="Username" />
            <input id="password" name="password" required
                   type="password" placeholder="Password"/>
            <h6>You don't have an account?<a href="Sign%20Up.php">Sign Up!</a></h6>
            <input type="submit" name="submit" value = "Login"/>
        </form>
    </body>
 </html>