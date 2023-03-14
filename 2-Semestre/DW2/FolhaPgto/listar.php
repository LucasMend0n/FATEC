<?php
    include_once('header.php');
    include 'conexao.php';
?>

<h1 id="titulo">ENCONTRAR REGISTRO DE FUNCIONARIO</h1>

<div class="container search-box ">
    <form class="search-form" name= "search-form"action="" method="post">
        <input class="form-control mx-2 " type="search" name="search_name" id="search_name" placeholder="Encontrar funcionário">
        <div class=" container-fluid col" >
                <input class="btn btn-info mx-1" type="submit" value="Filtrar">
                <a class="btn btn-info mx-1" href="listar.php">Atualizar</a>
                <a class="btn btn-info mx-1" href="index.php">Voltar ao cadastro</a>
                
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
                $query = "SELECT * FROM tb_funcionarios WHERE (Nome_Funcionario LIKE '%$search%')";
                $result = $conn->query($query);
                
                if($result->num_rows > 0 ){
                    while( $row = $result->fetch_assoc() ){
                        echo "<tr>";
                        echo "<td>" .$row["N_Registro"] ."</td>";
                        echo "<td>" . $row["Nome_Funcionario"] . "</td>";
                        echo "<td>" . $row["data_admissao"] ."</td>";
                        echo "<td>" . $row["cargo"] . "</td>";
                        echo "<td>" . $row["qtde_salarios"] . "</td>";
                        echo "<td> R$" . number_format($row["salario_bruto"],2,'.',',') . "</td>";
                        echo "<td> R$" . number_format($row["inss"],2,'.',',') . "</td>";
                        echo "<td> R$" . number_format($row["salario_liquido"],2,'.',',') ."</td>";
                        echo "<td colspan='8'>";
                        echo "<a href='editar.php?N_Registro=".$row['N_Registro']."' class=' btn btn-primary mx-1'>Editar </a>";
                        echo "<a href='excluir.php?N_Registro=".$row['N_Registro']."'class=' btn btn-danger'> Excluir</a>";
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


<?php
    include "footer.php";
?>