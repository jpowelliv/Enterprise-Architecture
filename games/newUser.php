<?php
session_start();

// 1. validate the input
// 2. make sure user is not already in the database
// 3. make sure that pwd and repeat match
// 4. insert a new row (be sure to hash the pwd first)

// 5. redirect to home page
header("Location: index.php");
?>
