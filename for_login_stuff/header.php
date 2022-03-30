<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Zen+Kaku+Gothic+New:wght@300&display=swap" rel="stylesheet">
    <title>Logsite</title>
</head>

<body>

    <div id="grid_wrapper">

        <header>
            <div class="nav_item linkless" id="nav_op"><p>Open Menu</p></div>
            <nav>
                <a href="index.html" id="nav_logo"><img src="img/logo.png" alt="website logo"></a>
                <ul>
                    <li class="nav_item"><a href="#"><p>Log</p></a></li>
                    <li class="nav_item"><a href="#"><p>Browse</p></a></li>
                    <?php
                        if (isset($_SESSION["useruid"])) {
                            echo '<li class="nav_item"><a href="profile.php"><p>Profile</p></a></li>';
                            echo '<element><a href="includes/logout.inc.php">Log Out</a></element>';
                        }
                        else {
                            echo '<li class="nav_item"><a href="signup.php"><p>Sign up</p></a></li>';
                            echo '<li class="nav_item"><a href="login.php"><p>Log in</p></a></li>';
                        }
                    ?>
                    <li class="nav_item linkless" id="nav_close"><p>Close Menu</p></li>
                </ul>
            </nav>
        </header>