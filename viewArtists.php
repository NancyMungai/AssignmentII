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
              

                
                $query = $db->query("SELECT * FROM artists");

                if ($query) {
                    while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
                        echo "<tr>";
                        echo "<td>" . $row['ArtistID'] . "</td>";
                        echo "<td>" . $row['Username'] . "</td>";
                        echo "<td>" . $row['EmailAddress'] . "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='3'>Error fetching data.</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
