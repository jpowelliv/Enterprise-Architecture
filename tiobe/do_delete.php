<?php session_start();
    if (!isset($_SESSION['username'])) {
        header("location:index.php");
        // Make sure that code below does not get executed when we redirect.
        exit;
    }
    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "programming";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            // TODO: Create the appropriate SQL statement to delete the row
            $sql = "DELETE FROM programming WHERE id='$_POST[id]'";
            if ($conn->query($sql) === TRUE) {
                echo "Record deleted successfully";
            } else {
                echo "Error deleting record: " . $conn->error;
            }

            $conn->close();
        ?>
        <a href="index.php">Main menu</a>
    </body>
</html>
