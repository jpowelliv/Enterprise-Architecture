<-<!-- Joseph Powell IV CIS 376 -->
<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "stock";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

//var_dump($_POST);
$title = $_POST['title'];
$price = $_POST['price'];

$sql = "INSERT INTO products (title, price) VALUES ('" . $title . "'," . $price . ")";

if ($conn->query($sql) === TRUE) {
  header("location: index.php");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

