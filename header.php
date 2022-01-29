<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KRESZ - Prototípus</title>
</head>
<body>
    <div class="container">
    <ul>
    <li style="display:<?php echo(isset($_SESSION["id"]))?"block":"none" ?>;float:right"><form action="logout.php" method="POST"><a><input type="submit" name="logout" value="Logout" id="logout" style="background:none; color: white; border: none;font-size: 1.1em;"></a></form></li>
    <li style="display:<?php echo(isset($_SESSION["id"]))?"block":"none" ?>;float:left"><form action="welcome.php" method="POST"><a><input type="submit" name="logout" value="Home" id="logout" style="background:none; color: white; border: none;font-size: 1.1em;"></a></form></li>
    </ul>