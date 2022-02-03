<?php
$state = intval($_REQUEST['state']);
if($_REQUEST['state'] == getCities($_REQUEST['state'])) {
getCities('state');
}

function getCities($state) {
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ajax_demo";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

$mysqli = new mysqli($servername, $username, $password, $dbname);
if($mysqli->connect_error) {
exit('Could not connect');
}

$sql = "SELECT city_name FROM cities WHERE state_name='" . $state . "'";
$result = $conn->query($sql);

$stmt = $mysqli->prepare($sql);
//$stmt->bind_param("s", $_GET['q']);
$stmt->execute();
$stmt->store_result();
//$stmt->bind_result($states, $cities);
$stmt->fetch();
$stmt->close();

echo "<table>";
echo "<tr>";
echo "<th>state_name</th>";
//echo "<td>" . $states . "</td>";
echo "<th>city_name</th>";
//echo "<td>" . $cities . "</td>";
echo "</tr>";
echo "</table>";

if ($result->num_rows > 0) {
while ($row = $result->fetch_assoc()) {
echo $row['city_name'], ", ";
}
} else {
echo "0 results";
}
$conn->close();
}
?>


<!-- comment $q = intval($_GET['q']);

$con = mysqli_connect('localhost','my_db');
if (!$con) {
die('Could not connect: ' . mysqli_error($con));
}


  /**print_r($_REQUEST);

  /**if ($_REQUEST['state'] == 'Colorado') {
    echo "<select>";
    echo "<option value='Denver'>Denver</option>";
    echo "</select>";
  } else {
    echo "<select>";
    echo "<option value='Montgomery'>Montgomery</option>";
    //echo "</select>";
--->
