<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("location:index.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <!-- TODO: display all language data except id -->
        <!-- TODO: display must be ordered by the language rank -->
        /**<!--   $session = mysql_edevapi\getSession("mysqlix: //user:password@localhost");
            $schema = $session->getSchema("tiobe");

            $table = $schema->getTable("lang");
            $results = $table->select('rank', 'lang')
                ->orderBy('rank desc')
                ->execute();

            $row = $result->fetchAll();
            print_r($row); -->**/
       <?php
           $sql = "SELECT * FROM programming ORDERED BY rank WHERE NOT user_id = < id >";
           $result = $conn->query($sql);

           if ($result->num_rows > 0) {
  // output data of each row
           while($row = $result->fetch_assoc()) {
                echo "lang: " . $row["lang"]. " - rank: " . $row["rank"]. "<br>";
           }
           } else {
                echo "0 results";
           }
        ?>
        
        
    </body>
</html>
