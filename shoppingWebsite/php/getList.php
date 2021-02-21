<?php
/*
 * I, Michael Mena, 000817498 certify that this material is my original work.  No other person's work has been used without due acknowledgement.
 * 
 * Date: 12/11/2020
 * 
 * This file
 */

include "account.php";
include "connect.php";
include "items.php";
session_start(); //Starts the session

//Saves the session username
$username = $_SESSION['username'];

$itemArray = []; // Will hold all items and then sent with json
$debug = "";

//Gets all of the items from the shopping list that has the username of the user
$command = "SELECT * FROM $username";
$stmt = $dbh->prepare($command);
$success = $stmt->execute();

//Adds all of the items to the array
while ($row = $stmt->fetch()) {
    $item = [
        "itemName" => $row["itemName"],
        "itemPrice" => (float)$row["itemPrice"]
    ];
    array_push($itemArray, $item);
}

//Returns array with json
echo json_encode($itemArray);
