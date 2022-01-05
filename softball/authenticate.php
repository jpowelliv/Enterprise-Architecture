<?php session_start();

// TODO: Validate (sanitize) the form data using the test_input function. 
$user = $pass = $endUser = "";

$user = $_POST['$username'];
$pass = $_POST['$password'];
$endUser = $_POST['$endUser'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = test_input($_POST["user"]);
    $pass = test_input($_POST["pass"]);
    $endUser = test_input($_POST["endUser"]);
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// TODO: place the sanitized strings into $endUser and $endUserPassword
// 
if(strlen($endUser) < 1 or strlen($endUserPassword) < 1) {
    $_SESSION['error'] = "invalid";
}else {

// TODO: if the strings don't have at least one char, send the user
// back to the form (with an appropriate error message) 
if (strlen($endUser) > 1 or strlen($endUserPassword) > 1) {
    trigger_error("Sorry string doesn't possess more than one char");
     header("location:index.php");
}
}




$servername = "localhost";
$username = "root";
$password = "";
$dbname = "softball";

// TODO: study this code; make sure that you understand it!
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT password FROM users WHERE username = '$endUser'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    if ($row = $result->fetch_assoc()) {
        $verified = password_verify( $endUserPassword, trim($row['password']));
        if ($verified) {
            $_SESSION['username'] = $endUser;
            $_SESSION['error'] = '';
        } else {
            $_SESSION['error'] = 'invalid username or password';
        }
    }
} else {
    $_SESSION['error'] = 'invalid username or password';
}
$conn->close();
header("location:index.php");
?>