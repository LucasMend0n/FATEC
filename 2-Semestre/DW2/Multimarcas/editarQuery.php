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
        $ipva += ($valor_veiculo * 0.04);
    }

    $sql = "UPDATE tb_veiculo SET Renavam = '$renavam', Descricao_veiculo = '$desc_veiculo', Montadora = '$montadora', Ano = '$ano_veiculo', Placa = '$placa', Valor = '$valor_veiculo', IPVA = '$ipva' WHERE renavam = $renavam";
    $resultado = $conn->query($sql);
    
    header("Location: listar.php");
    exit();
?>