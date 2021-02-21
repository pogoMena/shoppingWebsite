<?php
/*
 * I, Michael Mena, 000817498 certify that this material is my original work.  No other person's work has been used without due acknowledgement.
 * 
 * Date: 12/11/2020
 * 
 * This file handles the adding of accounts onto the database
 */
include "account.php";
include "connect.php";

//Parameters to be added
$username = filter_input(INPUT_GET, "username", FILTER_SANITIZE_SPECIAL_CHARS);
$password = filter_input(INPUT_GET, "password", FILTER_SANITIZE_SPECIAL_CHARS);
$email = "example@example.com";

//Checks to see if there is already an account with these parameters before adding it
$nameNum = 0;
$command = "SELECT * FROM users WHERE username = '$username'";
$stmt = $dbh->prepare($command);
$success = $stmt->execute();
while ($row = $stmt->fetch()) {
    $nameNum +=1;
}

//Is triggered if there are any matching rows
if($nameNum != 0){
    echo "An account with that username already exists";

}//Adds the new account to the database
else{
    $command = "INSERT INTO users (username, passwordcol, email) VALUES ('$username', '$password', '$email')";
    $stmt = $dbh->prepare($command);
    $success = $stmt->execute();

    $command = "CREATE TABLE $username (itemName varchar(255), itemPrice decimal(10,2))";
    $stmt = $dbh->prepare($command);
    $success = $stmt->execute();

    echo "Your account has been successfully created";

}


