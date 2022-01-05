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
        <form action="do_insert.php" method="post">
            Rank: <input type="number" name="rank"><br/>
            Last Year: <input type="number" name="lastyr"><br/>
            Language: <input type="text" name="lang"><br />
            <br/>
            <input type="submit"/>
        </form>
    </body>
</html>
