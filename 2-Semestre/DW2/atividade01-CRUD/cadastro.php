
<?php

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);


    $servername = "localhost";
    $username = "root";
    $password = "usbw";
    $dbname = "folha_pgto";
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    if ($conn->connect_error) 
    {
        die("Conexão falhou: " . $conn->connect_error);
    }

    $nome = $_POST['nome_func'];
    $cargo = $_POST['cargos'];
    $data_admissao = $_POST['data_admissao'];
    $qtd_salarios = $_POST['qtd_min'];
    $salario_bruto = $qtd_salarios * 1212.00; 

    if ($salario_bruto > 1350.00){
        $salario_liquido = $salario_bruto * 0.89;
        $inss = 11;  
    }else{
        $salario_liquido = $salario_bruto; 
        $inss = 0; 
    }

    $sql = "INSERT INTO tb_funcionarios (nome_funcionario, data_admissao, cargo, qtde_salarios, salario_bruto, inss, salario_liquido ) VALUES ('$nome','$data_admissao','$cargo','$qtd_salarios', '$salario_bruto', '$inss', '$salario_liquido' )";

    if($conn->query($sql) === TRUE){
        echo "<center>";
		echo "<hr>";
        echo "<h1>Funcionario cadastrado com sucesso</h1>"; 
		echo "<hr>";
        echo "</center>";
    }else{
        echo "<center>";
		echo "<hr>";
        echo "<h1>Erro ao cadastrar funcionario</h1>"; 
		echo "<hr>";
        echo "</center>";
    }

    $conn->close();



?>