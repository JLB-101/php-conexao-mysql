<?php 
# -----------  MyQLI ----------------

/* Lnks:
// For more info:  https://www.hostinger.com.br/tutoriais/como-conectar-php-com-mysql/
// para mais: https://www.hostinger.com.br/tutoriais/como-conectar-php-com-mysql/
*/

/**
 * you can import or include 
 * those values from the config.php file
 * 
 * Você pode importar ou 
 * incluir esses valores do arquivo config.php
 * 
 * ex: include('config.php'); || require_once 'config.php';
 */

$servername = "localhost"; // or host ="localhost"
$database = "myapp";
$username = "mode";
$password = "12345";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
mysqli_close($conn);
