<?php session_start();
if (!isset($_SESSION['username'])) {
    header("location:index.php");
    exit;
}

// connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "programming";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    $_SESSION['error'] = "Connection failed: " . $conn->connect_error;
} 

$id = $_POST['id'];

// if rank was blank set value to NULL
if (isset($_POST['rank']) and strlen($_POST['rank']) > 0) {
    $rank = $_POST['rank'];
} else {
    $rank = "NULL";
}

// if last year was blank set value to NULL
if (isset($_POST['lastyr']) and strlen($_POST['lastyr']) > 0) {
    $lastyr = $_POST['lastyr'];
} else {
    $lastyr = "NULL";
}

// update the rank and last year's rank based on the id
// NOTE: you can't update the language's spelling
$sql = "UPDATE tiobe SET rank=".$rank.", last_year=".$lastyr." WHERE id=" . $id;

echo $sql . "<br>";
if ($conn->query($sql) === TRUE) {
    //echo "Record updated successfully";
} else {
    // communicate any errors using the session ('error' key)
    $_SESSION['error'] = "Error updating record: " . $conn->error;
}
// close the database connection
$conn->close();


header("location:index.php");
?>
