<?php
require_once "../Includes/dbconnection.php"; 


$dsn = "mysql:host=localhost;dbname=artcentre";
$username = "root";
$password = "";

$database = new DatabaseConnection($dsn, $username, $password);

$name = $_POST["Username"];
$email = $_POST["EmailAddress"];

$query = $database->prepare("INSERT INTO artists (Username, EmailAddress) VALUES (:name, :email)");
$query->bindParam(":name", $name);
$query->bindParam(":email", $email);

if ($query->execute()) {
    header("Location: ../index.php");
    exit();
} else {
    echo "Error inserting data.";
}
?>


