<?php
include("dbInfo.php");
//define submit vairables
$post_username = $post_feeling = $post_comments = $post_date = "";

//create connection
$conn = new mysqli($servername,$username,$password,$dbname);
//check connection
if($conn->connect_error)
{
    die("Connection failed: " . $conn->connect_error);
}

//form input
$post_username = $_GET["username"];
$post_feeling = $_GET["feeling"];
$post_comments = $_GET["comments"];


//sql code
$sql = "INSERT INTO `posts`(`id`, `feeling`, `comments`, `username`, `dateSubmitted`) VALUES (NULL,'$post_feeling', '$post_comments','$post_username',NULL)";
$result = $conn->query($sql);
if(!mysqli_error($conn))
{
    echo "Success";
    header("Location: ../pages/main.php");
}
else
{
    echo $sql;
    echo mysqli_error($conn);
}

//close connection
$conn->close();
?>