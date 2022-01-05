<?php

// 1. validate the form input (set $_SESSION['error'] if there is a problem)
// (make sure that neither form input is blank and use the w3schools Form 
// Validation funtion to "scrub" all form data)
// 2. create a database connection (using the standard root user)
// 3. select the password from the users table (where the username came from 
// the form)
// 4. use password_verify to see if the form password matches the hashed 
// password from db: password_verify($pwdFromFrom, $dbPwd) returns a boolean
// 5. forward user to index.php
// 6. allow execution to continue and close db connection

?>
