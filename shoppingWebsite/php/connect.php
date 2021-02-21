<?php


/* I, Michael Mena, student number 000817498 certify that this code was not shared with anybody and no other code has been created by anyone else without due credit
 * Michael Mena
 * 000817498
 * 12/11/2020
 */
 /* This file is to connect the entire program to phpmyadmin on csunix
 */

try {
    $dbh = new PDO(
        

        /*
        "mysql:host=localhost;dbname=michael",
        "root",
        ""
        */

        
        "mysql:host=localhost;dbname=michael",
        "mikel1993",
        "Icebomb1"
        
    );
} catch (Exception $e) {
    die("ERROR: Couldn't connect. {$e->getMessage()}");
}
?>