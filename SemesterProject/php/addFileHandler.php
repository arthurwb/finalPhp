<?php
session_start();
$servername = "localhost";
$username = "arthurwb_user";
$password = "Iamtheuser";
$databaseName = "arthurwb_MYSQL_SemesterProject";
$dbc = @mysqli_connect($servername,$username,$password,$databaseName);
?>
    <!DOCTYPE html>
    <link rel="stylesheet" href="../stylefolder/stylesheet.css">
    <div id="page-container">
        <div id="loginlogout">
<?php

$newName = $_POST["inputName"];
$newRace = $_POST["inputRace"];
$newClass = $_POST["inputClass"];
$newLevel = $_POST["inputLevel"];
$userID = $_SESSION['userArray']['UserID'];
$sql = "INSERT INTO tCharacters (CharacterName, CharacterRace, CharacterClass, CharacterLevel, UserID)
        VALUES ('".$newName."', '".$newRace."', '".$newClass."', '".$newLevel."', '".$userID."');";

if ($dbc->connect_error) {
    die("Connection failed: " . $dbc->connect_error);
}

if ($dbc->query($sql) === TRUE) {
    echo "<p>New record created successfully</p>";
} else {
    echo "Error: " . $sql . "<br>" . $dbc->error;
}

echo "<a href='../content.php'>continue to content</a></div>";
?>
        </div>
    </div>
