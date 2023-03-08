<?php
    include 'conexao.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style type="text/css">
        h1{
            text-align: center;
        }
        .form-control{
            margin: 1em 0;
        }
        td:last-child {
    width: 150px; /* ou um valor maior, se necessário */
    white-space: nowrap;
}

    </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Listagem </title>
</head>
<body>



    <h1>ENCONTRAR REGISTRO DE FUNCIONARIO</h1>
    
    <div class="container search-box ">
        <form class="search-form"  name= "search-form"action="" method="post">
            <input class="form-control mx-2 " type="search" name="search_name" id="search_name" placeholder="Encontrar funcionário">
            <div class=" container-fluid col" >
                    <input class="btn btn-info mx-1" type="submit" value="FILTRAR">
                    <a class="btn btn-info mx-1" href="listar.php">Atualizar</a>
                    <a class="btn btn-info mx-1" href="index.html">Voltar ao cadastro</a>
                    
                </div>
            </form>
    </div>
    
    <div class="container">

        <table class="table my-3" >
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Cargo</th>
                    <th>Data de Admissão</th>
                    <th>Quantidade de Salários</th>
                    <th>Salário Bruto</th>
                    <th>INSS</th>
                    <th>Salário Líquido</th>
                    <th>Ações</th>
    
                </tr>
            </thead>
            <tbody>
                <?php
                    $search = ""; 
                    if(isset($_POST['search_name'])){
                        $search = $_POST['search_name'];
                    }
                    $query = "SELECT * FROM tb_funcionarios WHERE (nome_funcionario LIKE '%$search%')";
                    $result = $conn->query($query);
                    
                    if($result->num_rows > 0 ){
                         while( $row = $result->fetch_assoc() ){
                            echo "<tr>";
                            echo "<td>" .$row["n_registro"] ."</td>";
                            echo "<td>" . $row["nome_funcionario"] . "</td>";
                            echo "<td>" . $row["data_admissao"] ."</td>";
                            echo "<td>" . $row["cargo"] . "</td>";
                            echo "<td>" . $row["qtde_salarios"] . "</td>";
                            echo "<td> R$" . $row["salario_bruto"] . "</td>";
                            echo "<td> R$" . $row["inss"] . "</td>";
                            echo "<td> R$" . $row["salario_liquido"] ."</td>";
                            echo "<td colspan='8'>";
                            echo "<a href='editar.php?n_registro=".$row['n_registro']."' class=' btn btn-primary mx-1'>Editar </a>";
                            echo "<a href='excluir.php?n_registro=".$row['n_registro']."'class=' btn btn-danger'> Excluir</a>";
                            echo "</td>";
                            echo "</tr>"; 
                    }
                }else{
                    echo "<tr><td colspan = '8'>Nenhum funcionario encontrado</td></tr>";
                }
                $conn->close();
                ?>
            </tbody>
        </table>
    </div>


    
</body>
</html>