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
        Enter the name of the language to delete.
        <form action="do_delete.php" method="post" 
              onSubmit="if(confirm('Are you sure?')) return true; return false;">
            Language: <input type="text" name="language" />
            <input type="submit" />
        </form>
    </body>
</html>
