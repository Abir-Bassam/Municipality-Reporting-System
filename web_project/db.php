<?php
// الاتصال بقاعدة البيانات Oracle
$username = "municipality";  // اليوزر اللي أنشأنا
$password = "123";           // الباسوورد تبعه
$connection_string = "localhost:1521/XEPDB1"; // PDB name مع localhost

$conn = oci_connect($username, $password, $connection_string);

if (!$conn) {
    $e = oci_error();
    die("Connection failed: " . $e['message']);
}

// echo "Connected successfully!";
?>
