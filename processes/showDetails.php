<?php
include 'layouts/navbar.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">

    <title>Document</title>
</head>

<?php
require_once "../Includes/dbconnection.php";




$query = $db->query("SELECT * FROM artists");

if ($query) {
    while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
        echo "Name: " . $row['Username'] . "<br>";
        echo "Email: " . $row['EmailAddress'] . "<br><br>";
    }
} else {
    echo "Error fetching data.";
}
?>

</html>