<?php 
# -----------  PDO ----------------

/* Lnks:
// For more info:  https://www.hostinger.com.br/tutoriais/como-conectar-php-com-mysql/
// para mais: https://www.hostinger.com.br/tutoriais/como-conectar-php-com-mysql/
*/

// Verify if pdo is enable on:  phpinfo();
// verifique-se pdo esta disponivel em: phpinfo();
// phpinfo();

// connecting to the databases. | conectando -se aos bancos de dados.


/**    bd info:
 * These values or variables may be 
 * required or included from the config.php file
 * 
 * esses valores ou variaveis podem ser 
 * requeridas ou incluidas do arquivo config.php
 * 
 * ex: require_once 'config.php'; ||  include('config.php'); 
 */

// bd info:
require 'config.php';

$host = "localhost";
$username = 'mode';  
$password = '12345'; 

// create connection | criar conexão
try{
    $conn = new PDO("mysql:host=$servername;dbame=myapp",$username,$password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo"Connection SUCESSFULL <br> Conectado com sucesso ";

}catch(PDOException $e){
 echo "Connection FAILED: {$e->getMessage()} <br> Conexao Falhou";

}



