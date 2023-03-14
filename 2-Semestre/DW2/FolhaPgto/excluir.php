<?php
    include 'conexao.php'; 

    $id = $_GET['N_Registro'];

    $sql = "DELETE FROM tb_funcionarios WHERE N_Registro = '$id'";
    $resultado = $conn->query($sql);

    header("Location: listar.php");
    exit();



?>