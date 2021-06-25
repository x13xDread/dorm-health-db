<?php
include("dbInfo.php");

//define 
$msg = $error = $newUsername = $newPassword = $newPasswordConfirmation = "";

//create connection
$conn = new mysqli($servername,$username,$password,$dbname);
//check connection
if($conn->connect_error)
{
    die("Connection failed: " . $conn->connect_error);
}

$newUsername = $_POST["usernameInput"];
$newPassword = $_POST["passwordInput"];
$newPasswordConfirmation = $_POST["confirmPasswordInput"];

if(!($newPassword === $newPasswordConfirmation))
{
    $error = "Passwords do not match!";
    header("Location: ../pages/addUser.php?msg=" . $error);
    die();
}
else{
    //sql code - make sure username does not exist
    $sql = "SELECT username, password, privilege_level FROM login WHERE username='$newUsername'";
    $result = $conn->query($sql);

    if($result->num_rows > 0)
    {
        //close connection
        $conn->close();
        //redirect back
        $error = "User already exists!";
        header("Location: ../pages/addUser.php?msg=" . $error);
        die();
    }
    else{
        //sql code - add user
        $sql = "INSERT INTO `login`(`username`, `password`, `privilege_level`) VALUES ('$newUsername','$newPassword', '0')";
        $result = $conn->query($sql);
        if(!mysqli_error($conn))
        {
            echo "Success";
            header("Location: ../pages/addUser.php?msg=" . $newUsername . " added!");
            die();
        }
        else
        {
            echo $sql;
            echo mysqli_error($conn);
        }
    }
}
//close connection
$conn->close();
?>