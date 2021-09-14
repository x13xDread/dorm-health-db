<?php session_start();
if($_SESSION["username"] == null)
{
header("Location: ../index.php");
}

//connection info
$servername = "localhost";
$username = "root";
$password = "Elan2244";
$dbname = "dorm_health_db";


//create connection
$conn = new mysqli($servername,$username,$password,$dbname);
//check connection
if($conn->connect_error)
{
    die("Connection failed: " . $conn->connect_error);
}

//sql code
$sql = "SELECT feeling, comments, username, dateSubmitted FROM posts";
$result = $conn->query($sql);
while($row = $result->fetch_assoc())
{
    $data[] = $row;
}

$data = json_encode($data);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>WVU Dorm Health Database - Main</title>
        <link rel="icon" type="image/png" href="../images/wvufavicon.ico">
        <!--stylesheets-->
        <link rel="stylesheet" href="../styles/index.css">
        <link rel="stylesheet" href="../styles/main.css"> 
        <!--datatable + jquerey import-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>       
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.css">
        <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.js"></script>
    </head>
    <body>
        <div class = "navBar">
            <!--Add a picture of the WVU Logo-->
            <a href="../index.php"><img src="../images/wvulogo.png" id = "logo"></a>
            <h1 id = "pageTitle">WVU Dorm Health Database</h1>
            <div class = "navbarContainer">
                <a href="post.php"><button>Post</button></a>  
                <a href="about.php"><button>About</button></a>      
                <a href="https://eternalbox.dev/jukebox_search.html" target="_blank"><button>Eternal Jukebox</button></a>                        
                <?php 
                    if($_SESSION["pl"])
                    {
                        echo "<a href = \"addUser.php\"><button>Add User</button></a>";
                    }
                ?>
            </div>
            <h2 id = "welcomeMessage">Welcome 
                <?php 
                    echo $_SESSION["username"];                   
                    if($_SESSION["pl"])
                    {
                        echo " the admin";
                    }
                ?>!</h2>            
        </div>
        <div class = "recentPosts">
            <h2>Recent Posts</h2>
            <table id = "postsTable">   
                <thead>           
                    <tr>
                        <th>Time</th>
                        <th>Name</th>
                        <th>Feeling</th>
                        <th>Comments</th>
                        
                    </tr>
                </thead>               
                <tfoot>
                    <tr>
                        <th>Time</th>
                        <th>Name</th>
                        <th>Feeling</th>
                        <th>Comments</th>
                        
                    </tr>
                </tfoot>
            </table>
        </div>
        
    </body>
    <footer>
        <p>Version 1.0</p>
    </footer>
    <script>
    $(document).ready( function () {
        console.log(<?php echo $data ?>);
        $('#postsTable').DataTable({
            
            "data": <?php echo $data ?>,
            "columns":[
                {"data": "dateSubmitted"},
                {"data": "username"},
                {"data": "feeling"},
                {"data": "comments"}                
            ],
            "order": [ 0, 'dateSubmitted' ]
        });
    } )
</script>
</html>
