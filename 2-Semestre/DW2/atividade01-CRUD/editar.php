<?php
include 'conexao.php';

if(isset($_GET['n_registro'])) {
    $id = $_GET['n_registro'];
    $sql = "SELECT * FROM tb_funcionarios WHERE n_registro = $id";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $nome = $row['nome_funcionario'];
        $cargo = $row['cargo'];
        $data_admissao = $row['data_admissao'];
        $qtd_salarios = $row['qtde_salarios'];
    } else {
        echo "Funcionário não encontrado";
        exit();
    }
} else {
    header('Location: listar.php');
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
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
        $inss = 0.0; 
    }

    if($nome == "" || $cargo == "" || $data_admissao == "" || $qtd_salarios == ""){
        echo "<center>";
        echo "<hr>";
        echo "<h1>Não é permitido atualizar valores, se houverem campos vazios</h1>"; 
        echo "<hr>";
        echo "</center>";
    } else {
        $sql = "UPDATE tb_funcionarios SET nome_funcionario = '$nome', data_admissao = '$data_admissao', cargo = '$cargo', qtde_salarios = '$qtd_salarios', salario_bruto = '$salario_bruto', inss = '".addslashes($inss)."', salario_liquido = '$salario_liquido' WHERE n_registro = $id";

        if ($conn->query($sql) === TRUE) {
            echo "atualização concluida";
            header('Location: listar.php');
            exit();
        } else {
            echo "Erro ao atualizar o funcionário: ".$conn->error;
        }
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Funcionario</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    

</head>
<body>
    <div class="container text-center">
        <form class="form mt-5" action="editar.php" method="post">
                    <?php echo " <h1 class='my-5'>Editar funcionário: ". $row['nome_funcionario']."</h1>" ?>
                    <div id="form-group">
                        <label class="text-left" for="nome_func">Nome do funcionário</label>
                        <input placeholder="Insira o novo nome" class="form-control" type="text" id="nome_func" name="nome_func">
                    </div>
                    <div class="form-group">
                        <label for="cargos">Cargos</label>
                        <select placeholder="insira o novo cargo" class="form-control" name="cargos" id="cargos">
                            <option value=""></option>
                            <option value="Analista de sistemas">Analista de sistemas</option>
                            <option value="Gerente">Gerente</option>
                            <option value="Desenvolvedor Senior">Desenvolvedor Senior</option>
                            <option value="Desenvolvedor Pleno">Desenvolvedor Pleno</option>
                            <option value="Desenvolvedor Junior">Desenvolvedor Junior</option>
                            <option value="Product Owner">Product Owner</option>
                        </select>
                    </div>
                <div class="form-group">
                    <label for="qtde_sal_min">Qtde salários mínimos:</label>
                    <input placeholder="Insira a nova quantidade de salarios" class="form-control" type="number" step="any" id="qtde_sal_min" name="qtd_min">
                </div>
                <div class="form-group ">
                    <label for="data_admissao">Data de admissão:</label>
                    <input placeholder="Insira a nova data de admissao" class="form-control mb-5" type="text" id="data_admissao" name="data_admissao">                    
                </div>
                <div class="form-group buttons d-flex justify-content-center">
                    <button type="submit" class="btn btn-success mx-3">Editar</button>
                    <a href="listar.php" class="btn btn-danger">Cancelar</a>
                </div>    
        </form>
        
</body>
</html>