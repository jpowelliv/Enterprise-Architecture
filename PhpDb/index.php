<!DOCTYPE html>
<!-- Joseph Powell IV CIS 376
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
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

        $sql = "SELECT * FROM products";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                $id = $row['id'];
                $url = "do_delete.php?id=$id";
                $link = "<a href='$url'>Delete</a>";
                echo " - Name: " . $row["title"] . " " . $row["price"] . " $link<br>";
            }
        } else {
            echo "0 results";
        }
        $conn->close();
        ?>
        
        <a href="insert.php"> insert a new product</a>
    </body>
</html>
