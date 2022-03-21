<?php include_once 'header.php'; ?>

<section id="signup_form">
    <div class="section_header"><h2>Sign Up</h2></div>
    <div class="section_main">
        <form action="includes/signup.inc.php" method="post">
            <input type="text" name="name" placeholder="Full Name...">
            <input type="text" name="email" placeholder="Email..">
            <input type="text" name="uid" placeholder="Username..">
            <input type="password" name="pwd" placeholder="Password..">
            <input type="password" name="pwdre" placeholder="Repeat Password...">
            <button type="submit" name="submit"><p>Sign Up</p></button>
        </form>
    </div>
</section>

<?php include_once 'footer.php' ?>