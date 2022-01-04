<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
--><!-- Joseph Powell IV CIS 476 comment -->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Here's The Results</title>
    </head>
    <body>
        <form>
          <form action="results.php" method="POST">
          <form action="index.php" method="GET">
          <form action="jobSkills.php.php" method="GET">
          <form action="jobHistory.php.php" method="GET">   
        </form>
        <?php
        if (isset($_GET['skills'])){
            $skills = $_GET['skills'];
            echo "Your result: <br/>";
            foreach ($skills as $key => $value){
               echo "$value <br/>";
            }
        }
        else {
            "You Do Not Fit Our Criteria. We're Sorry... :-(";
        }
            
       var_dump($REQUEST);
       echo"<hr>";
       print_r($_SESSION);
       echo "<hr>";
       setcookie("skills", $_POST['skills'], $time() + (60*60*24), $path, $domain, $secure);
       foreach ($_SESSION as $value) {
           echo $value . "br";
           
       }
       
       $fname - $_SESSION['fname'];
       $lname - $_SESSION['lname'];
        ?>
        Goodbye, <?= $fname ?>
        <p>
            Cookie is <?= $_COOKIE['skills'] ?>
        </p>
    </body>
</html>
