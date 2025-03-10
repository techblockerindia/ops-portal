<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);

$host = "n1.deccanhost.in";
$user = "u7_x5uMnalVJg"; 
$pass = "fWndf@R^+t6!r6ZKyW343d.m";  
$dbname = "s7_opsportal";

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?>
 