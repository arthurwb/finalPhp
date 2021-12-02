<!DOCTYPE html>

<link rel="stylesheet" href="../stylefolder/stylesheet.css">
<div id="page-container">
    <div id="content-wrap">
        <?php
        include "header.php"
        ?>
    </div>
    <div id="loginlogout">
        <h2 style="text-align: center">Enter New User Information</h2>
        <form action="addUserHandler.php" method="post">
            Enter New Username: <input type="text" name="newUsername"><br>
            Enter New Password: <input type="password" name="newPassword"><br>
            <input type="submit" value="Submit" class="form-submit-button">
        </form>
        <p>Already a user? Click <a href="login.php">here</a></p>
    </div>
    <?php
    include "footer.php";
    ?>
</div>