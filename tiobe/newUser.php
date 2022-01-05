<?php
session_start();

$user = $pwd = $repeat = "";

$servername = "localhost";
$username = "root";
$password = " ";
$repeat = " ";
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $form_username = trim($_POST['user']);
    $new_password = trim($_POST['pwd']);
    $repeat = trim($_POST['repeat']);
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// TODO: make sure that pwd and repeat match.  If they don't match, send the 
// user back to the form with an appropriate error message.
// TODO: make sure that the new user is not already in the database.  If the
// new username has already been used, send the user back to the form with an 
// appropriate error message.
// HINT: SELECT * FROM users where username = '$form_username'
if (isset($_POST['user']) && isset($_POST['pwd'])) {
    $user = $_POST['user'];
    $pwd = $_POST['pwd'];

    $query = mysql_query("SELECT * FROM users WHERE username = '$user'");
    if (mysql_num_rows($query) > 0) {
        echo 'Username Already Exists!';
    } else {
        mysql_query("INSERT INTO users (Username, Password) VALUES ('$user', '$pwd')");
    }
}

// TODO: insert the new user into the database
// HINT: INSERT INTO users(username, password) VALUES('$form_username', '$hashed_password')
// HINT: you'll need to call password_hash to get $hashed_password
if ($username === $user) {
    $_SESSION['authenticate'] = "Bad Username";
    header('location: index.php');
} else {
    if ($password === $repeat) {// 3. make sure that pwd and repeat match
        $newPwd = password_hash($pwd, PASSWORD_DEFAULT);
        $sql = "INSERT INTO users (username, password) VALUES ('$user', '$newPwd')";

        if ($conn->query($sql) === TRUE) {
            echo "SUCCESS: New User created.";
        } else {
            echo "ERROR: " . $sql . "<br>" . $conn->error;
        }

        $_SESSION['authenticate'] = "Good Username"; // 5. redirect to home page
        header("Location: index.php");
    } else {
        $_SESSION['authenticate'] = "Bad Password";
        header("Location: index.php");
    }
}
// TODO: close the database connection
$conn->close();
header("location:index.php");
?>
