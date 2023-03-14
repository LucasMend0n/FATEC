
<?php

    include 'conexao.php';

    $nome = $_POST['nome_func'];
    $cargo = $_POST['cargos'];
    $data_admissao = $_POST['data_admissao'];
    $qtd_salarios = $_POST['qtd_min'];
    $salario_bruto = $qtd_salarios * 1212.00; 

    if ($salario_bruto > 1350.00){
        $inss = $salario_bruto * 0.11;
        $salario_liquido = $salario_bruto - $inss; 
    }else{
        $salario_liquido = $salario_bruto; 
        $inss = 0; 
    }

    if($nome == "" || $cargo == "" || $data_admissao == "" || $qtd_salarios == ""){
        echo "<center>";
		echo "<hr>";
        echo "<h1>Nao e permitido cadastrar com campos vazios</h1>"; 
		echo "<hr>";
        echo "</center>";
        header("refresh:2; url=index.php");
        $checkName = "SELECT Nome_Funcionario FROM tb_funcionarios WHERE Nome_Funcionario = '$nome'"; 
        $checkNameExecute = $conn->query($checkName);
        if($checkNameExecute->num_rows > 0){
            echo "<center>";
            echo "<hr>";
            echo "<h1>Erro ao cadastrar funcionario</h1>";
            echo "<p>O nome '$nome' ja esta cadastrado na base de dados.</p>";
            echo "<hr>";
            echo "</center>";
            header("refresh:2; url=index.php");
        }
    }
    else{
        $sql = "INSERT INTO tb_funcionarios (Nome_Funcionario, data_admissao, cargo, qtde_salarios, salario_bruto, inss, salario_liquido ) VALUES ('$nome','$data_admissao','$cargo','$qtd_salarios', '$salario_bruto', '$inss', '$salario_liquido' )";
        
        if($conn->query($sql) === TRUE){
            echo "<center>";
            echo "<hr>";
            echo "<h1>Funcionario cadastrado com sucesso</h1>"; 
            echo "<hr>";
            echo "</center>";
            header("refresh:2; url=index.php");
        }else{
            echo "<center>";
            echo "<hr>";
            echo "<h1>Erro ao cadastrar funcionario</h1>"; 
            echo "<hr>";
            echo "</center>";
            header("refresh:2; url=index.php");
        }
    }
    $conn->close();

?>