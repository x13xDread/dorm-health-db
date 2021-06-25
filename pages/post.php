<?php session_start();
if($_SESSION["username"] == null)
{
header("Location: ../index.php");
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>WVU Dorm Health Database - Post</title>
        <link rel="icon" type="image/png" href="../images/wvufavicon.ico">
        <!--stylesheets-->
        <link rel="stylesheet" href="../styles/index.css">
        <link rel="stylesheet" href="../styles/post.css">
    </head>
    <body> 
        <div class = "navBar">
            <!--Add a picture of the WVU Logo-->
            <a href="../index.php"><img src="../images/wvulogo.png" id = "logo"></a>   
            <h1 id = "pageTitle">Create Post</h1>
        </div>
        <div class = "formContainer">
            <form class = "postForm" method = "get" action = "../scripts/submitPost.php">
                <!--radio input-->
                <h3>How are you feeling?</h3>
                <div class = "radioButtonsContainers">
                    <input type = "radio" name = "feeling" id = "great" value = "great">
                    <label for = "great">Great</label><br>
                    <input type = "radio" name = "feeling" id = "good" value = "good">
                    <label for = "good">Good</label><br>
                    <input type = "radio" name = "feeling" id = "bad" value = "bad">
                    <label for = "bad">Bad</label><br>
                    <input type = "radio" name = "feeling" id = "terrible" value = "terrible">
                    <label for = "terrible">Terrible</label><br>
                </div>
                <!--Comments input-->
                <h3>Comments (Explain why you feel how you do here):</h3>
                <textarea id = "comments" name = "comments" rows = "5" cols = "30"></textarea>
                <!--hidden inputs input the current user and the date of entry-->
                <input type = "hidden" name = "username" value = <?php echo $_SESSION["username"];?>>                
                <!--submit button and time stamp-->
                <input type = "submit" name = "submit" value = "Post">
                 <p>Time: <?php echo date("m-d-y h:i:s");?></p>

            </form>
            <!--returns to main-->
            <a href = "main.php"><button id = "cancelButton">Cancel</button></a>
        </div>
    </body>
</html>