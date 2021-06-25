<?php session_start();
if(!$_SESSION["pl"])
{
    header("Location: ../index.php");
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>WVU Dorm Health Database - Add a User</title>
        <link rel="icon" type="image/png" href="../images/wvufavicon.ico">
        <link rel="stylesheet" href="../styles/index.css">
        <link rel="stylesheet" href="../styles/addUser.css">
    </head>
    <body>
        <div class = "navBar">
            <!--Add a picture of the WVU Logo-->
            <a href="../index.php"><img src="../images/wvulogo.png" id = "logo"></a>
            <h1 id = "pageTitle">WVU Dorm Health Database - Add a User</h1>
        </div>
        <div class = "addUserFormContainer">
            <form class = "addUserForm" id = "addUserForm" method = "post" action = "../scripts/submitUser.php">
                <div id = "textContainer">
                    <label for = "usernameInput">New Username:</label>
                    <input type = "text" id = "usernameInput" name = "usernameInput">
                    <br>
                    <label for = "passwordInput">New Password:</label>
                    <input type = "password" id = "passwordInput" name = "passwordInput">
                    <br>
                    <label for = "confirmPasswordInput">Confirm Password:</label>
                    <input type = "password" id = "confirmPasswordInput" name = "confirmPasswordInput">
                </div>
                <br>
                <div class = "submitControls">
                    <input type = "submit" id = "submit" name = "submit" value = "Add User">
                    
                </div>
            </form>
            <div class = "submitControls">
                <a href = "main.php"><button id = "cancelButton">Cancel</button></a>
            </div>
            <p style = "color: white"><?php
                    if($_SERVER["REQUEST_METHOD"] == "GET")
                    {
                        echo $_GET["msg"];
                    }
                ?></p>
        </div>
        
    </body>
</html>