<?php
    session_start();
    include 'php/loginVerify.php';
$servername = "localhost";
$username = "arthurwb_user";
$password = "Iamtheuser";
$databaseName = "arthurwb_MYSQL_SemesterProject";
$dbc = @mysqli_connect($servername,$username,$password,$databaseName);
?>
<!DOCTYPE html>
<link rel="stylesheet" href="stylefolder/stylesheet.css">
<div id="page-container">
    <div id="content-wrap">
        <?php
        include 'php/header.php';
        ?>
        <?php
        $user = new  loginVerify();
        echo "welcome ".$_SESSION['username'];
        ?>
        <h2>
            Contents of your database
        </h2>
        <?php
        $sql = "SELECT CharacterName, CharacterRace, CharacterClass, CharacterLevel 
                FROM tCharacters 
                INNER JOIN tUsers ON tCharacters.UserID = tUsers.UserID 
                WHERE tUsers.UserID = ".$_SESSION['userArray']['UserID'];
        $result = mysqli_query($dbc, $sql);
        if(mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
                $personalArray = $row;
                $_SESSION['personalArray'] = $personalArray;
                echo "<b>Character Name : </b>" . $row['CharacterName'] . " || <b>Character Race : </b>" . $row['CharacterRace'] . " || <b>Character Class : </b>" . $row['CharacterClass'] . " || <b>Character Level : </b>" . $row['CharacterLevel'];
                echo "<br>";
            }
        } else {
            echo "There is nothing in your database.";
        }
        ?>
        <div id="addContentButton">
            <form action="php/editAddDelete.php" method="post">
                <input type="submit" value="Add, Edit, or Delete Content." class="add-edit-delete">
            </form>
        </div>
        <div id="logoutButton">
            <form action="php/logout.php" method="post">
                <p>
                    <input type="submit" value="Logout" class="form-submit-button">
                </p>
            </form>
        </div>
    </div>
    <?php
    include 'php/footer.php';
    ?>
</div>