<!DOCTYPE html>
<html>
    <head>
        <title>WVU Dorm Health Database</title>
        <link rel="stylesheet" href="styles/index.css">
        <link rel="icon" type="image/png" href="images/wvufavicon.ico">
    </head>
    <body>
        <div class = "navBar">
            <!--Add a picture of the WVU Logo-->
            <a href="index.php"><img src="images/wvulogo.png" id = "logo"></a>
            <h1 id = "pageTitle">WVU Dorm Health Database</h1>
            
        </div>
        <div class = "login">            
            <form class = "login" id = "loginForm" action = "scripts/login.php" method = "post">
                <p><label for = "usernameEntryField">Enter Username: </label></p> <input type="text" id = "usernameEntryField" name = "usernameEntryField"> <br>
                <p><label for = "passwordEntryField">Enter Password: </label></p> <input type="password" id = "passwordEntryField" name = "passwordEntryField"> <br>
                <br>
                <p style = "color: red"><?php
                    if($_SERVER["REQUEST_METHOD"] == "GET")
                    {
                        echo $_GET["msg"];
                    }
                ?></p>
                <input type="submit" id = "submitButton" name = "submitButton" value = "Login"> <br>
            </form>
        </div>
        
    </body>
    <footer>
        <p>Version 1.0</p>
    </footer>
</html>

