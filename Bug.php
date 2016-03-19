<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <title> ShutterBug</title>

    <link type="text/css" rel="stylesheet" href="css/style.css"/>
</head>

<header>


    <h1 style="">Welcome to Shutterbug</h1>
</header>

<!-- <nav>
     <ul>
        <li><a href="index.html">Home Page</a></li>
        <li><a href="Login%20form.html">Login</a></li>
        <li><a href="Sign%20Up.html">Signup</a></li>
       </ul>
    </nav>-->

<body>

<!-- <form name="form1"action="demo.aspx" method="post"> for the posting-->


<form id="Bug" autocomplete="off ">

    <input id="Bug Title" name="Bug Title" type="text"
           placeholder="Bug Title" autofocus/>


                      <textarea id="Bug Description" type="text" rows="6" cols="40"
                                name="Bug Description" placeholder="Bug Description"/></textarea>

    <!--<tr>
        <td>User Reference </td>
        <td><textarea type="text" rows="6" cols="40" name="User Reference"value=""/></textarea></td>
    </tr> -->
    <br>
    Date Posted:<input id="Date Posted" type="date"
                       name="date posted"value="Date Posted" />
    <br>

    Date Fixed:<input id="Date fixed" type="date"
                      name="date fixed"value=""/>

    <p> What is the issue<br>
        <input type="checkbox" name="issue" value="Not Responding"/> Not Responding<br>
        <input type="checkbox" name="issue" value="Syntax Error"/> Syntax Error<br>
        <input type="checkbox" name="issue" value="Error 525"/> Error 525<br>
        <input type="checkbox" name="issue" value="Potential malware"/> Potential Malware</p>

                      <textarea id="comments" type="text"rows="5" cols="40"
                                name="comment" placeholder="Comment Here"/></textarea>

                      <textarea id="suggestions" type="text" rows="6" cols="40"
                                name="suggestions" placeholder="Suggestions"/></textarea>

    <input type="file" name="upload" value="Upload Bug">
    <input type ="reset" name="rese" value="Reset"/>
    <input type="submit" name="btnSubmit" value="Submit"/>

</form>
</body>

<footer>
    <p>(c) 2016 MCE </p>
</footer>
</html>
