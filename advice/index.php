<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // 1. display the error message in the session (if any)
        // 2. display either the user's name and a link to your advice page 
        // or the form below
        ?>
        <form action="authenticate.php" method="post">
            Username: <input type="text" name="user"><br>
            Password: <input type="password" name="pwd"><br>
            <input type="submit">
        </form>
    </body>
</html>
