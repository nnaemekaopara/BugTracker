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
                            <li><a href="index.html">Login</a></li>
                            <li><a href="#">Register</a></li>
                            <li><a href="#">Forgot Password</a></li>
                        </ul>
                    </nav>
                </div>

                <div id="Content">
                    <div id="PageHeading">
                        <h1>Sign Up</h1>
                    </div>
                </div>
             </div>

             <form id="Sign" autocomplete="off">

                <input  id = "username"  name="username" title="Choose a Username"
                        required type="text" placeholder="Username" />

                <input id = "email" name="email" required
                       type="email" placeholder="Email@address.com"/>

                <input id = phoneno" name="phoneno" required
                       type="tel" placeholder="+447-000-000-000"/>

                <input id="password" name="password" required
                       type="password" placeholder="Password"/>

                <input id="passwordconfirm" name="passwordconfirm" required
                       type="password" placeholder="Confirm Password"/>
                <h6>You already have an account?<a href="login.php">Click Here</a></h6>
                <input type="reset" name="reset" value="Reset"/>
                <input type="submit" name="submit" value="Sumbit" />
             </form>
        </body>
    </html>