<!-- <html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>



<body>
    
    </body>
    </html>
<?php
// $dsn = "mysql:host=localhost;dbname=artcentre";
// $username = "root";
// $password = "";

// try {
//     $db = new PDO($dsn, $username, $password);
//     $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// } catch (PDOException $e) {
//     die("Database connection failed: " . $e->getMessage());
// }
?> -->
<?php
class DatabaseConnection {
    private $db;

    public function __construct($dsn, $username, $password) {
        try {
            $this->db = new PDO($dsn, $username, $password);
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Database connection failed: " . $e->getMessage());
        }
    }

    // Add a prepare method to the class
    public function prepare($sql) {
        return $this->db->prepare($sql);
    }

 public function query($sql) {
        try {
            return $this->db->prepare($sql);
        } catch (PDOException $e) {
            die("Query preparation failed: " . $e->getMessage());
        }
    }
    

    public function execute($sql, $params = []) {
        try {
            $stmt = $this->db->prepare($sql);
            $stmt->execute($params);
            return $stmt->rowCount();
        } catch (PDOException $e) {
            die("Execution failed: " . $e->getMessage());
        }
    }

    public function close() {
        $this->db = null;
    }
}
?>


