<?php

if (isset($_POST["submit"])) { //check if signup method is correct
    
    $name = $_POST["name"];
    $email = $_POST["email"];
    $username = $_POST["uid"];
    $password = $_POST["pwd"];
    $passwordRe = $_POST["pwdre"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if (emptyInputSignup($name, $email, $username, $password, $passwordRe) !== false) {
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
    if (pwdMatch($password, $passwordRe) !== false) {
        header("location: ../signup.php?error=differentpasswords")
        exit();
    }
    if (uidExists($conn, $username) !== false) {
        header("location: ../signup.php?error=usernametaken")
        exit();
    }

    createUser($conn, $name, $email, $username, $password);

}
else {
    header("location: ../signup.php") //send user back to signup.php
    exit();
}