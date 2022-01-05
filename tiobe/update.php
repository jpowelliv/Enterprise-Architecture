<?php session_start();
    if (!isset($_SESSION['username'])) {
        header("location:index.php");
        // Make sure that code below does not get executed when we redirect.
        exit;
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        Enter the name of the language to update.
        <form action="display_for_update.php" method="post">
            Language: <input type="text" name="lang" />
            <input type="submit" />
        </form>
    </body>
</html>
