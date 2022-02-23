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
            <div class="nav_item" id="nav_op"><h2>Open Menu</h2></div>
            <nav id="nav"> <!--id:et behövs för js. går det att göra utan? 'getElementsByTagName' och 'getElementByClassName' och 'querySelectorAll' funkar inte-->
                <a href="index.html" id="nav_logo"><img src="img/logo.jpg" alt="website logo"></a>
                <ul>
                    <li><a class="nav_item" id="log_button"><h2>Log</h2></a></li>
                    <li><a href="browse.html" class="nav_item"><h2>Browse</h2></a></li>
                    <li><a href="profile.html" class="nav_item profile"><h2>Profile</h2></a></li>
                    <li><a href='signup.php' class="nav_item" id="sign_up"><h2>Sign up</h2></a></li> <!--HIDE-->
                    <li><a href='login.php' class="nav_item" id="log_in"><h2>Log in</h2></a></li> <!--HIDE-->
                    <li class="nav_item" id="nav_close"><h2>Close Menu</h2></li> <!--kan detta få en gemensam klass med 'Open Menu' knappen istället för dessa id:en?-->
                </ul>
            </nav>
        </header>