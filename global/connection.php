<?php
$servidor = "mysql:dbname=" . BD . ";host=" . Server;

try {
    $pdo = new PDO(
        $servidor,
        User,
        Password,
        array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
    );
    // echo "<script> alert('Connected successfully')</script>";
} catch (PDOException $e) {
    echo "<script> alert('Error..')</script>";
}

?>
<!-- 
// $dbName = "onlinebuy";
// $dbUser = "root";
// $dbPassword = "";

// try {
// $pdo = new PDO("mysql:host=localhost;dbname=$dbName", $dbUser, $dbPassword);
// $pdo->query("SET NAMES 'utf8' ");
// echo "Connected successfully";
// } catch (PDOException $ex) {
// echo "Connection failed: " . $ex->getMessage();
// die();
// } -->