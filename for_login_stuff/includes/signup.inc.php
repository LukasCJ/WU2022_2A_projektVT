<?php

if (isset($_POST["submit"])) { //check if signup method is correct
    
    $name = $_POST["name"];
    $email = $_POST["email"];
    $username = $_POST["uid"];
    $pwd = $_POST["pwd"];
    $pwdRe = $_POST["pwdre"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if (emptyInputSignup($name, $email, $username, $pwd, $pwdRe) !== false) {
        header("location: ../signup.php?error=emptinput")
        exit();
    }
    if (invalidUid($username) !== false) {
        header("location: ../signup.php?error=invaliduid")
        exit();
    }
    if (invalidEmail($email) !== false) {
        header("location: ../signup.php?error=invalidemail")
        exit();
    }
    if (pwdMatch($pwd, $pwdRe) !== false) {
        header("location: ../signup.php?error=differentpasswords")
        exit();
    }
    if (uidExists($conn, $username) !== false) {
        header("location: ../signup.php?error=usernametaken")
        exit();
    }

    createUser($conn, $name, $email, $username, $pwd);

}
else {
    header("location: ../signup.php") //send user back to signup.php
    exit();
}