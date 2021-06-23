<!DOCTYPE html>

<html>


<head>
    <title> Check Password Strength </title>
    <link rel=stylesheet href=index.css>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
</head>

<body id="body">

    <h1>Active Password Checker</h1>
    <div id="parentContainer">
        <form action="index.view.php" method="get">
            <h3>Password:</h3>
            <input type="password" name="password">
            <input type="submit"></input>
        </form>
    </div>
</body>

<?php
$checkPassword =  $_GET["password"];
$error = "0";
include "index.php";
?>


</html>