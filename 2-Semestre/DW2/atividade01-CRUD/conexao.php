<?php>

    $user = "root"; 
    $pass = "usbw";
    $host = "localhost";
    $db = "folha_pgto"; 
    $connectDB = mysql_connect ($host, $user, $pass) or die (mysql_error()); 

    mysql_select_db($db) or die ("Erro ao conectar ao Banco");


?>