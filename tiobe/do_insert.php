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

$sql = "INSERT INTO tiobe (rank, last_year, lang) VALUES ('$_POST[rank]','$_POST[lastyr]','$_POST[lang]')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

header("location:index.php");
?>
