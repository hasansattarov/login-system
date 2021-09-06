<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Main Page</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div class="container">
        <div class="nav-wrapper">
            <div class="left-side"></div>
            <div class="right-side">
                <div class="nav-link-wrapper">
                    <a href="index.php">Home</a>
                </div>
                <?php
                if (isset($_SESSION["useruid"])) {
                    echo "<div class='nav-link-wrapper'><a href='profile.php'>Profile Page</a></div>";
                    echo "<div class='nav-link-wrapper'><a href='includes/logout.inc.php'>Log Out</a></div>";
                } else {
                    echo "<div class='nav-link-wrapper'><a href='login.php'>Log In</a></div>";
                    echo "<div class='nav-link-wrapper'><a href='signup.php'>Sign Up</a></div>";
                }
                ?>
            </div>
        </div>
    </div>
</body>