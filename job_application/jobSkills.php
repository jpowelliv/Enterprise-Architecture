<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<!-- Joseph Powell IV CIS 476 comment -->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Your Skills</title>
    </head>
    <body>
        <?php
        var_dump($_POST);
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        echo "First name: " . $fname;
        ?>
        <form action="jobHistory.php" method="POST">
            <p>What Skills You Bring To The Table?</p>
            
            <input type="checkbox" value="PHP" name="skills[]"> PHP<br/>
            <input type="checkbox" value="MariaDB" name="skills[]"> MariaDB<br/>
            <input type="checkbox" value="Python" name="skills[]"> Python<br/>
            <input type="checkbox" value="Java" name="skills[]"> Java<br/>
            <input type="checkbox" value="HTML" name="skills[]"> HTML<br/>
            <input type="checkbox" value="CSS" name="skills[]"> CSS<br/>
            <input type="checkbox" value="C#" name="skills[]"> C#<br/>
            <input type="checkbox" value="Git" name="skills[]"> Git<br/>
            
            <input type="hidden" id="fname" name="fname" value="<?=$fname ?> ">
             <input type="hidden" id="lname" name="lname" value="<?=$lname ?> ">
            <input type="submit">
        </form>
    </body>
</html>
