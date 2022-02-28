<?php include_once 'header.php'; ?>

<section id="login_form"> <!--ska passa in i gridden!!-->
    <div class="section_header"><h1>Log In</h1></div>
    <div class="section_main">
        <form action="includes/login.inc.php" method="post">
            <input type="text" name="name" placeholder="USername/Email...">
            <input type="password" name="pwd" placeholder="Password..">
            <button type="submit" name="submit">Log In</button>
        </form>
    </div>
</section>

<?php include_once 'footer.php' ?>