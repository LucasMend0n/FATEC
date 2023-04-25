<?php
    include 'conexao.php'; 

    $renavam = $_GET['Renavam'];

    $sql = "DELETE FROM tb_veiculo WHERE Renavam = '$renavam'";
    $resultado = $conn->query($sql);

    header("Location: listar.php");
    exit();
?>