<-<!-- Joseph Powell IV CIS 376 -->
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "stock";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

var_dump($_GET);

// sql to delete a record
$sql = "DELETE FROM products WHERE id='$_GET[id]' ";

if ($conn->query($sql) === TRUE) {
  header("refresh:1; url=index.php");
} else {
  echo "Error: Sorry was not deleted" . $sql . "<br>" . $conn->error;
}
?>
