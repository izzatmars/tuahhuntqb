<?php
include_once 'header.php';
?>


<section class="signup-form">
    <div class="row text-center ">
        <h2>Sign Up</h2>
        <form action="signup.inc.php" method="POST">
            <input type="text" name="name" placeholder="Enter Full Name...">
            <input type="text" name="email" placeholder="Enter Email...">
            <input type="text" name="uid" placeholder="Enter Username...">
            <input type="password" name="pwd" placeholder="Enter Password...">
            <input type="password" name="pwdRepeat" placeholder="Re-Enter Password...">
            <button type="submit" name="submit">Sign Up</button>
        </form>
        <div class="row text-center ">
            <?php
            if (isset($_GET["error"])) {
                if ($_GET["error"] == "emptyinput") {
                    echo "<p> Fill in all fields !! </p>";
                } else if ($_GET["error"] == "invaliduid") {
                    echo "<p> Choose a proper username !! </p>";
                } else if ($_GET["error"] == "invalidemail") {
                    echo "<p> Choose a proper email !! </p>";
                } else if ($_GET["error"] == "passwordsdontmatch") {
                    echo "<p> Password doesn't match !! </p>";
                } else if ($_GET["error"] == "stmtfailed") {
                    echo "<p> Something went wrong, try again later !! </p>";
                } else if ($_GET["error"] == "usernametaken") {
                    echo "<p> Username already taken !! </p>";
                } else if ($_GET["error"] == "none") {
                    echo "<p> You have signed up !! </p>";
                }
            }
            ?>
</section>





<?php
include_once 'footer.php';
?>