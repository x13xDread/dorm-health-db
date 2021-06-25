<?php
    session_start();
    if($_SESSION["username"] == null)
    {
        header("Location: ../index.php");
    }
?>
<!DOCTYPE html>
<html>
    <header>
        <title>WVU Dorm Health Database - About</title>
        <link rel="icon" type="image/png" href="../images/wvufavicon.ico">
        <link rel="stylesheet" href="../styles/index.css">        
    </header>
    <body>
        <div class = "navBar">
            <!--Add a picture of the WVU Logo-->
            <a href="../index.php"><img src="../images/wvulogo.png" id = "logo"></a>   
            <h1 id = "pageTitle">About</h1>
            <a href = "main.php"><h4>Back</h4></a>
        </div>
        <div id = "content">
            <h2>The Basics</h2>
            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;This database was created by <b>Miles B. Weber</b> pseudonym <b>x13xDread</b>
            officially for the use of logging the health of his roomates at West Virginia Univeristy
            (WVU). The first official version of the database 1.0, was finished in under 2 weeks and
            was submitted for three different computer science projects. Future versions of the site
            are subject to change to meet the needs of future roomates.</p>
        </div>
    </body>
</html>

