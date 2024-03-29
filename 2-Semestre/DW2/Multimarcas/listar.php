<?php
    include_once('header.php');
    include 'conexao.php';
?>

<h1 id="titulo">LISTAGEM DE VEÍCULOS</h1>

<div class="container search-box ">
    <form class="search-form" name= "search-form"action="" method="post">
        <input class="form-control mx-2 " type="search" name="search_name" id="search_name" placeholder="Digite a descrição do veículo">
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
                <th>Renavam</th>
                <th>Descrição do veículo</th>
                <th>Ano fabric.</th>
                <th>Placa </th>
                <th>Valor</th>
                <th>IPVA</th>
                <th>Ações</th>

            </tr>
        </thead>
        <tbody>
            <?php
                $search = ""; 
                if(isset($_POST['search_name'])){
                    $search = $_POST['search_name'];
                }
                $query = "SELECT * FROM tb_veiculo WHERE (Descricao_veiculo LIKE '%$search%')";
                $result = $conn->query($query);
                
                if($result->num_rows > 0 ){
                    while( $row = $result->fetch_assoc() ){
                        echo "<tr>";
                        echo "<td>" .$row["Renavam"] ."</td>";
                        echo "<td>" . $row["Descricao_veiculo"] . " - " . $row["Montadora"] . "</td>";
                        echo "<td>" . $row["Ano"] ."</td>";
                        echo "<td>" . $row["Placa"] . "</td>";
                        echo "<td> R$" . number_format($row["Valor"],2,'.',',') . "</td>";
                        echo "<td> R$" . number_format($row["IPVA"],2,'.',',') . "</td>";
                        echo "<td colspan='8'>";
                        echo "<a href='editar.php?Renavam=".$row['Renavam']."' class=' btn btn-primary mx-1'>Editar </a>";
                        echo "<a href='excluir.php?Renavam=".$row['Renavam']."'class=' btn btn-danger'> Excluir</a>";
                        echo "</td>";
                        echo "</tr>"; 
                    }
                }else{
                    echo "<tr><td colspan = '8'>Nenhum veículo encontrado</td></tr>";
                }
                $conn->close();
            ?>
        </tbody>
    </table>
</div>


<?php
    include "footer.php";
?>