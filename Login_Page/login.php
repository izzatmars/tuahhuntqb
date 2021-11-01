<?php
include_once 'header.php';
?>

<section class="signup-form">
    <div class="row text-center ">
        <h2>Log In</h2>
        <form action="login.inc.php" method="post">
            <input type="text" name="uid" placeholder="Enter Username/Email...">
            <input type="password" name="pwd" placeholder="Enter Password...">
            <button type="submit" name="submit">Log In</button>
        </form>
        <div class="row text-center ">
            <?php
            if (isset($_GET["error"])) {
                if ($_GET["error"] == "emptyinput") {
                    echo "<p> Fill in all fields !! </p>";
                } else if ($_GET["error"] == "wronglogin") {
                    echo "<p> Incorrect details enterd !! </p>";
                }
            }
            ?>
</section>

<?php
include_once 'footer.php';
?>