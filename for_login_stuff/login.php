<?php include_once 'header.php'; ?>

<section id="login_form">
    <div class="section_header"><h2>Log In</h2></div>
    <div class="section_main">
        <form action="includes/login.inc.php" method="post">
            <input type="text" name="uid" placeholder="Username/Email...">
            <input type="password" name="pwd" placeholder="Password..">
            <button type="submit" name="submit"><p>Log In</p></button>
        </form>
    </div>
</section>

<?php include_once 'footer.php' ?>