<?php
session_start();
$servername = "10.177.206.229";
$username = "LTC";
$password = "LTCpcgame5";
$dbname = "CyberCity";
$errorCaught = false;

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    $errorCaught = true;
    $_SESSION['flash_message'] = $e->getMessage();
}
if (!$errorCaught) {
    //echo "Database connection configured correctly, and database connection good.";
}

//$conn = null;
?>
