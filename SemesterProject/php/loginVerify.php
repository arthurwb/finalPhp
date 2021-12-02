<?php

use JetBrains\PhpStorm\NoReturn;

class loginVerify
{
    function checkVerify($username, $password): bool
    {
        if (!empty($username) and !empty($password)) {
            return true;
        } else {
            return false;
        }
    }
    function errorQuit() {
        echo "Incorrect username or password. <a href='../php/login.php'>Return to login page.</a>";
        exit();
    }
    function logUser($username, $password) {
        if ($this->checkVerify($username, $password)) {
            $_SESSION["username"] = $username;
            $_SESSION["password"] = $password;
        } else {
            echo "ERROR: no username/password entered.";
        }
    }
    function logoutUser($username, $password) {
        if ($this->checkVerify($username, $password)) {
            session_destroy();
        } else {
            echo "you were never logged in somehow.";
        }
    }
}