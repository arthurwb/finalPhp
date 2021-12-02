<?php
    session_start();
    include 'loginVerify.php';
?>
<!DOCTYPE html>

<link rel="stylesheet" href="../stylefolder/stylesheet.css">
<div id="page-container">
    <div id="content-wrap">
        <?php
        include "header.php";
        $destroyer = new loginVerify();
        $destroyer->logoutUser($_SESSION['username'],$_SESSION['password']);
        ?>
    </div>
    <div id="loginlogout">
        <h2 style="text-align: center">Login</h2>
        <p>you have been logged out</p>
        <form action="login.php" method="post">
            <div style="text-align: center">
                <input type="submit" value="Log back in" class="form-submit-button">
            </div>
        </form>
    </div>
    <?php
    include "footer.php";
    ?>
</div>