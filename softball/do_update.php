<?php session_start();
if (!isset($_SESSION['username'])) {
    header("location:index.php");
    // Make sure that code below does not execute when we redirect.
    exit;
}

// TODO: connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "softball";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("ERROR: Failed Connection " . $conn->connect_error);
}

// TODO: initialize the variables used in $sql via the POST superglobal
$opponent = $_POST['opponent'];
$site = $_POST['site'];
$result = $_POST['result'];
$id = $_POST['id'];

$sql = "UPDATE games SET opponent='$opponent', site='$site', result='$result' WHERE id=" . $id;

// TODO: execute the query and if it works clear the error in the session
// (just to make sure)
// else
if (mysqli_query($conn, $sql)) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . mysqli_error($conn);
}

//TODO: set the error in the session to read "Error updating record: "
// and append the sql error message from the database
if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}

// TODO: close the db connection
header("location:index.php");
$conn->close();
?>
