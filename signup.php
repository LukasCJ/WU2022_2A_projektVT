<?php include_once 'header.php'; ?>

<section id="signup_form"> <!--ska passa in i gridden!!-->
    <div class="section_header"><h1>Sign Up</h1></div>
    <div class="section_main">
        <form action="includes/signup.inc.php" method="post">
            <input type="text" name="name" placeholder="Full Name...">
            <input type="text" name="email" placeholder="Email..">
            <input type="text" name="uid" placeholder="Username..">
            <input type="password" name="pwd" placeholder="Password..">
            <input type="password" name="pwdre" placeholder="Repeat Password...">
            <button type="submit" name="submit">Sign Up</button>
        </form>
    </div>
</section>

<?php include_once 'footer.php' ?>