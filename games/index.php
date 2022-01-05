<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // 1. display error message in the session (if any): $_SESSION['error']
        // 2. display either the user's name and the game menu or the form/link below
        // (display the menu by using a php include of menu.html)
        ?>
        <form action="authenticate.php" method="post">
            Username: <input type="text" name="user"><br>
            Password: <input type="password" name="pwd"><br>
            <input type="submit">
        </form>
        <a href="register.php">Register a new login</a>
    </body>
</html>
