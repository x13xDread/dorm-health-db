<?php
include("dbInfo.php");

//variables
$form_username = $form_password = "";
$msg = "";


//create connection
$conn = new mysqli($servername,$username,$password,$dbname);
//check connection
if($conn->connect_error)
{
    die("Connection failed: " . $conn->connect_error);
}

//form input
$form_username = $_POST["usernameEntryField"];
$form_password = $_POST["passwordEntryField"];

//sql code
$sql = "SELECT username, password, privilege_level FROM login WHERE username='$form_username'";
$result = $conn->query($sql);
if($result->num_rows > 0)
{
    while($row = $result->fetch_assoc()){
        if($form_password === $row["password"])
        {
            //close connection
            $conn->close();
            session_start();            
            $_SESSION["username"] = $form_username;
            $_SESSION["pl"] = $row["privilege_level"];
            header("Location: ../pages/main.php");
            die();
        }
    }
    $msg =  "That password is incorrect!";
    header("Location: ../index.php?msg=" . $msg);
    die();
}
else{
    $msg =  "This username does not exist!";
    header("Location: ../index.php?msg=" . $msg);
    die();
}



//close connection
$conn->close();
?>