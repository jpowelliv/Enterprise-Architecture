<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h3>Register</h3>
        <?php
            if (isset($_SESSION['error'])) {
                echo "<em>" . $_SESSION['error'] . "</em>";
                unset($_SESSION['error']);
            }
        ?>
        <form action="newUser.php" method="post">
            Username: <input type="text" name="user"><br>
            Password: <input type="password" name="pwd"><br>
            Repeat: <input type="password" name="repeat"><br>
            <input type="submit">
        </form>
    </body>
</html>
