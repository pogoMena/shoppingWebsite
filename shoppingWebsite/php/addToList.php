<?php
/*
 * I, Michael Mena, 000817498 certify that this material is my original work.  No other person's work has been used without due acknowledgement.
 * 
 * Date: 12/11/2020
 * 
 * This file handles the adding of items onto the shopping list of a designated user
 */
include "account.php";
include "connect.php";

session_start(); // starts the session

//Gets the parameters of the items
$itemName = filter_input(INPUT_GET, "itemName", FILTER_SANITIZE_SPECIAL_CHARS);
$price = filter_input(INPUT_GET, "price", FILTER_VALIDATE_FLOAT);

//Checks if the user is logged in
if ($_SESSION['username'] != null){
$username = $_SESSION['username'];}
else{
    echo "You need to be logged in";
    exit();
}



//Checks to see if there is already the same item on the shopping list
$checkItem = 0;
$command = "SELECT * FROM $username WHERE  itemName = '$itemName'";
$stmt = $dbh->prepare($command);
$success = $stmt->execute();
while ($row = $stmt->fetch()) {
    $checkItem +=1;
}

//If the item is not on the list already, adds the appropriate item onto the list , if it is already on the list it doesnt add and then tells the user
if ($checkItem == 0){
    $command = "INSERT INTO $username (itemName, itemPrice) VALUES ('$itemName', $price)";
    $stmt = $dbh->prepare($command);
    $success = $stmt->execute();
    echo "$itemName has been added to shopping list!";
}
else{
    echo "That item is already on your list!";
}
