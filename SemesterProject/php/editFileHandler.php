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

        $name = $_POST["editName"];
        $editType = $_POST["editChoice"];
        $newInput = $_POST["newEditChoice"];
        $userID = $_SESSION['userArray']['UserID'];
        $sql = "UPDATE tCharacters
                SET ".$editType."='".$newInput."'
                WHERE CharacterName='".$name."'
                AND UserID=".$userID.";";

        if ($dbc->connect_error) {
            die("Connection failed: " . $dbc->connect_error);
        }

        if ($dbc->query($sql) === TRUE) {
            echo "<p>New record updated successfully</p>";
        } else {
            echo "Error: " . $sql . "<br>" . $dbc->error;
        }

        echo "<a href='../content.php'>continue to content</a></div>";
        ?>
    </div>
</div>
