<?php
    include 'conexao.php'; 

    $N_Registro = $_POST['N_Registro'];
    $Nome_Funcionario = $_POST['nome_func'];
    $cargo = $_POST['cargos'];
    $data_admissao = $_POST['data_admissao'];
    $qtde_salarios = $_POST['qtde_sal_min'];

    $salario_bruto = $qtde_salarios * 1212.00; 
    if ($salario_bruto > 1350.00){
        $inss = $salario_bruto * 0.11;
        $salario_liquido = $salario_bruto - $inss; 
    }else{
        $salario_liquido = $salario_bruto; 
        $inss = 0; 
    }

    $sql = "UPDATE tb_funcionarios SET Nome_Funcionario = '$Nome_Funcionario', data_admissao = '$data_admissao', cargo = '$cargo', qtde_salarios = '$qtde_salarios', salario_bruto = '$salario_bruto', inss = '$inss', salario_liquido = '$salario_liquido' WHERE N_Registro = $N_Registro";
    $resultado = $conn->query($sql);
    
    header("Location: listar.php");
    exit();
?>