<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
<?php
include 'layouts/navbar.php';
?>
    <title>Document</title>
</head>
<body>

<form method="post" action="processes/store.php">
   
    <input type="text" name="Username" placeholder="Name">
    <input type="email" name="EmailAddress" placeholder="Email">

    <button type="submit">Submit</button>

    </body>
</form>
</html>