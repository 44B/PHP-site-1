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
        <form action="index.view.php" method="get" id="form">
            <input type="password" name="password" id="textbox">
            <button type="submit">Check Password</button>
        </form>
    </div>
</body>

<?php
if (array_key_exists("password", $_GET)) {
    $checkPassword =  $_GET["password"];
    $error = "0";
    include "index.php";
}

?>


</html>