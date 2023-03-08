<?php
    include 'conexao.php'; 

    $id = $_GET['n_registro'];

    $sql = "DELETE FROM tb_funcionarios WHERE n_registro = '$id'";
    $resultado = $conn->query($sql);

    header("Location: listar.php");
    exit();



?>