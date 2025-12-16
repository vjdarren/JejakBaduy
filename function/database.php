<?php
//database connection
$host = "localhost";
$database = "JejakBaduy";
$username = "cms";
$password = "baduy";

// Make connection global
global $conn;

try {
    $conn = new PDO("mysql:host=$host;dbname=$database", $username, $password);
    // Set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $conn;
} catch (PDOException $error) {
    error_log("Connection failed: " . $error->getMessage());
    die("Connection failed: " . $error->getMessage());
}

function mysql_query($sql)
{
    global $conn;
    try {
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        return $stmt;
    } catch (PDOException $error) {
        error_log("Query Error: " . $error->getMessage());
        return false;
    }
}
?>