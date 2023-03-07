<?php
    include 'conexao.php'; 

    if(isset($_POST['search_name']) !=''){
        $query = "SELECT * FROM tb_funcionarios WHERE nome_funcionario like '" . $_POST['search_name'] . "' "; 
    }else{
        $query = "SELECT * from tb_funcionarios order by nome_funcionario asc"; 

    }

    $result = $conn->query($query);
    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem </title>
</head>
<body>

    <form  name= "search-form"action="" method="post">
        ENCONTRAR FUNCIONARIO: <input type="search" name="search_name" id="search_name">
        <input type="submit" value="FILTRAR">

    </form>

    <table>
        <tr>
            <th>LISTAGEM DE FUNCIONARIOS</th>
        </tr>
        <tr>
            <th>IDENTIFICADOR</th>
            <th>NOME DO FUNCIONARIO</th>
            <th> DATA DE ADMISSAO</th>
            <th>CARGO</th>
            <th>SALARIOS MÍNIMOS</th>
            <th>SALARIO BRUTO</th>
            <th>INSS</th>
            <th>SALARIO LIQUIDO</th>
            <th>APAGAR</th>
            <th>EDITAR</th>
        </tr>
        <tr>
            <?php
                while (mysqli_fetch_assoc($result)){
                    
                }
            ?>
            <td><?php echo ['n_registro']; ?></td>
            <td><?php echo ['nome_funcionario']; ?></td>
            <td><?php echo ['data_admissao']; ?></td>
            <td><?php echo ['cargo']; ?></td>
            <td><?php echo ['qtde_salarios']; ?></td>
            <td><?php echo ['salario_bruto']; ?></td>
            <td><?php echo ['inss']; ?></td>
            <td><?php echo ['salario_liquido']; ?></td>
            <td><?php echo ['nome_funcionario']; ?></td>




    </table>
    
    
</body>
</html>