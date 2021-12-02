<?php
    session_start();
    session_unset();
    include 'loginVerify.php';
?>
<!DOCTYPE html>

<link rel="stylesheet" href="../stylefolder/stylesheet.css">
<div id="page-container">
    <div id="content-wrap">
        <?php
        include "header.php"
        ?>
    </div>
    <div id="loginlogout">
        <h2 style="text-align: center">Login</h2>
        <form action="logHandler.php" method="post">
            Username: <input type="text" name="username"><br>
            Password: <input type="password" name="password"><br>
            <input type="submit" value="Submit" class="form-submit-button">
        </form>
        <p>Not a user? Click <a href="newUser.php">here</a></p>
    </div>
    <?php
    include "footer.php";
    ?>
</div>