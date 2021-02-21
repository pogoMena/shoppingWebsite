<?php
session_start();
session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Home page</title>
</head>
<body>
    <ul id="navBar">
        <li><a href="index.html">Home Page</a></li>
        <li><a href="about.html">About us</a></li>
        <li><a href="shopping.html">Shopping</a></li>
        <li><a href="login.html">Log in</a></li>
        <li><a href="signUp.html">Sign up</a></li>
        <li><a href="shoppingCart.html">Shopping cart</a></li>
        <li><a class = "active">Log out</a></li>
    </ul>
    <h1>
        You have successfully logged out
    </h1>
</body>
</html>