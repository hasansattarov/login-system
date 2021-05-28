<?php
    include_once 'header.php'
?>

<?php
    if (isset($_SESSION["useruid"])) {
        echo "<h1 style='text-align: center; color: white'>Welcome " . $_SESSION["useruid"] . "</h1";
    } 
    else {
        echo "<h1 style='text-align: center; color: white'>You are not logged in, please sign up or login!</h1>";
    }
?>

</html>