<?php session_start(); ?>
<html>
    
    <?php
 var_dump($_POST);
 $_SESSION['email'] = $_POST['email'];
 
 var_dump($_SESSION);
    ?>
    
</html>


