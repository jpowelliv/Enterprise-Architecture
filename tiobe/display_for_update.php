<?php
session_start();
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
            $sql = "SELECT * FROM tiobe where lang = '" . $_POST['lang'] . "'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                if ($row = $result->fetch_assoc()) {
        ?>
                    <form name="f" action="do_update.php" method="post">
                        <input type="hidden" name="id" 
                               value="<?php echo $row['id']; ?>" >
                        <label ><?php echo $row['lang']; ?></label><br/>
                        Rank: <input type="number" name="rank" 
                                     value="<?php echo $row['rank']; ?>"><br/>
                        Last Year: <input type="number" name="lastyr" 
                            value="<?php echo $row['last_year']; ?>"><br/>
                        <br/>
                        <input type="submit" value="Update">
                    </form>
        <?php
                }
            } else {
                echo "There is no language by that name in the database.";
                echo"<a href='index.php'>Menu</a>";
            }
            $conn->close();
        ?>
    </body>
</html>
