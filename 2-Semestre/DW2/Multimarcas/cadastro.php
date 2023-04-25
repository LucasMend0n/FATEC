
<?php

    include 'conexao.php';

    $renavam = $_POST['renavam'];
    $desc_veiculo = $_POST['desc_veiculo'];
    $montadora = $_POST['montadora'];
    $ano_veiculo = $_POST['ano_veiculo'];
    $placa = $_POST['placa'];
    $valor_veiculo = $_POST['valor_veiculo'];   
    
    $ipva = 0;
    if ($ano_veiculo > 1996){
        $ipva += ($valor_veiculo * 0.4);
    }

    if($renavam == "" || $desc_veiculo == "" || $montadora == "" || $ano_veiculo == "" || $placa == "" || $valor_veiculo == ""){
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
        $sql = "INSERT INTO tb_veiculo VALUES ('$renavam', '$desc_veiculo', '$montadora', '$ano_veiculo', '$placa', '$valor_veiculo', '$ipva')";
        
        if($conn->query($sql) === TRUE){
            echo "<center>";
            echo "<hr>";
            echo "<h1>Veiculo cadastrado com sucesso</h1>"; 
            echo "<hr>";
            echo "</center>";
            header("refresh:2; url=index.php");
        }else{
            echo "<center>";
            echo "<hr>";
            echo "<h1>Erro ao cadastrar Veiculo</h1>"; 
            echo "<hr>";
            echo "</center>";
            header("refresh:2; url=index.php");
        }
    }
    $conn->close();

?>