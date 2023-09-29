<?php
include_once "layouts/navbar.php";
require_once "Includes/dbconnection.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Artist List</title>
</head>
<body>
    <div class="container">
        <h2>Artist List</h2>
        <table class="artist-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
            <?php
            $dsn = "mysql:host=localhost;dbname=artcentre";
            $username = "root";
            $password = "";

            $database = new DatabaseConnection($dsn, $username, $password);

            $sql = "SELECT * FROM artists";

            try {
                $stmt = $database->query($sql); // Use the modified query method

                if ($stmt->execute()) { // Execute the statement
                    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

                    foreach ($rows as $row) {
                        echo '<tr>';
                        echo '<td class="artist-id">' . $row['ArtistID'] . '</td>';
                        echo '<td class="artist-name">' . $row['Username'] . '</td>';
                        echo '<td class="artist-email">' . $row['EmailAddress'] . '</td>';
                        echo '</tr>';
                    }
                } else {
                    echo "Error executing the query.";
                }
            } catch (PDOException $e) {
                echo "Error: " . $e->getMessage();
            }

            $database->close(); // Close the database connection when done
            ?>
            </tbody>
        </table>
    </div>
</body>
</html>
