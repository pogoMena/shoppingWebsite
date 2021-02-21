<?php
/*
 * I, Michael Mena, 000817498 certify that this material is my original work.  No other person's work has been used without due acknowledgement.
 * 
 * Date: 12/11/2020
 * 
 * This file handles the logging in of the user. connects to the databse and verifies parameters
 */
include "account.php";
include "connect.php";


//Gets the parameters
$username = filter_input(INPUT_GET, "username", FILTER_SANITIZE_SPECIAL_CHARS);
$password = filter_input(INPUT_GET, "password", FILTER_SANITIZE_SPECIAL_CHARS);



$nameNum = 0;//Will be used to check if there are duplicates

//Checks for matching instance in database
$command = "SELECT * FROM users WHERE username = '$username' AND passwordcol = '$password'";
$stmt = $dbh->prepare($command);
$success = $stmt->execute();

//Checks for duplicates
while ($row = $stmt->fetch()) {
    $nameNum +=1;
}

//If there is one instance, the account is made
if($nameNum===1){
    session_start();
    $_SESSION['loggedin'] = true;
    $_SESSION['username'] = $username;
}

//Echos appropriate response to the query
    if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) { //Checks if loggedin is set and if loggedin is true.
        echo "Success!"; 
        }
    else { //If loggedin isn't true it'll send you somewhere else.
        echo "The password and username do not match anywhere on our database. Maybe sign up?";
        }