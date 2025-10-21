<?php
$servername = "localhost";
$username = "root";
$password "";
$dbname = " todo_list_db";
$conm = new mysqli ($servername, $username, $password, dbname);
if($conm ->connect_error){
    die("Erro na conexão:".$con ->connect_error);
}
?>
