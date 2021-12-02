<?php
session_start();
include 'loginVerify.php';
$servername = "localhost";
$username = "arthurwb_user";
$password = "Iamtheuser";
$databaseName = "arthurwb_MYSQL_SemesterProject";
$dbc = @mysqli_connect($servername,$username,$password,$databaseName);
?>
<!DOCTYPE html>
    <link rel="stylesheet" href="../stylefolder/stylesheet.css">
    <div id="page-container">
        <div id="content-wrap">
<?php
$user = new loginVerify();
if($user->checkVerify($_POST['username'], $_POST['password'])){
    $user->logUser($_POST['username'], $_POST['password']);

    echo "<div id='loginlogout'><p>Login was sucessful. Welcome ".$_SESSION['username'].'</p></div>';
} else {
    echo "<div id='loginlogout'>";
    $user->errorQuit();
    echo "</div>";
}
if($dbc->connect_error) {
    echo "bad connection";
    die("Connection failed: ".$dbc->connect_error);
}
$sql = "SELECT * FROM tUsers WHERE UserName='$_SESSION[username]' AND UserPassword='$_SESSION[password]'";
$result = mysqli_query($dbc, $sql);
if(mysqli_num_rows($result) > 0) {
    echo "<div id='loginlogout'><p>you have successfully connected to the database!</p>";
    while($row = mysqli_fetch_assoc($result)) {
        $array = $row;
        $_SESSION['userArray'] = $array;
        echo "<a href='../content.php'>continue to content</a></div>";
    }
} else {
    echo "<div id='loginlogout'>";
    $user->errorQuit();
    echo "</div>";
}
?>
        </div>
    </div>
