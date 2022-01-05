<?php session_start();

// create variables for the input form data
$endUser = $_POST['enduser'];
$userPass = $_POST['userpass'];

// TODO: query the database for the input user's credentials
// if not found, use the key 'error' in the session to communicate an
// error message on the homepage
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "programming";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

// HINT: SELECT password FROM users where username = '".$endUser."'"
// all we need from the database is the hashed password
$hashedPassword = "SELECT * FROM users where username = '".$endUser."'";

// TODO: authenticate the user using password_verify
// if the input password is valid, put the user in the SESSION 
// (using the key "username") and clear the "error" in the session (just to
// be sure)
// otherwise, put "invalid username or password" in the session using 
// the "error" key
if ($result->num_rows > 0) {
   if ($row = $result->fetch_assoc()){
       $hash = $row["password"];
   }else {
       $_SESSION['error'] = "No results";
   }
   echo "Password is $pass<br>";
   echo "Hash is $hash<br>";

if (password_verify($pass, $hash)) {
    $_SESSION['user'] = $user;
    //echo "it works";
}else {
    $_SESSION['error'] = "invalid username or password";
    //echo "You suck";
  } 
  }


// TODO: close the database connection
$conn->close();
// TODO: redirect to index
header("location: index.php");
?>
