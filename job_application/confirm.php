<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<html>
    <head>
        <meta charset="UTF-8">
        <title>Confirmation</title>
    </head>
    <body>
        <h2>Reviewing Over Resume</h2>
        <p>Please Double Check Your Entry</p>
        <form>
            <form action="results.php" method="POST">
            <form action="index.php" method="GET">
            <form action="jobSkills.php.php" method="GET">
            <form action="jobHistory.php.php" method="GET">
        </form>
        <?php
        echo 'First Name: ' . $_GET["fname"] . '<br>';
        echo 'Last Name: ' . $_GET["lname"] . '<br>';
        echo 'Job History: ' . $_GET["jobHistory"] . '<br>';
       $skills = $_GET['skills'];
        foreach($skills as $value){
           echo "$value<br/>";
        endforeach;
          print_r($value);
        ?>
          <input name="form" type="submit"/><br/>
    </body>
</html>
