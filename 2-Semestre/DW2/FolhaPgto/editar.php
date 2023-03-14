<?php
    include_once('header.php');
    include 'conexao.php'; 
    
    if(isset($_GET['N_Registro'])){
        $id = $_GET['N_Registro'];
        $sql = "SELECT * FROM tb_funcionarios WHERE (N_Registro = '$id')"; 
        $result = $conn->query($sql); 

        if($result->num_rows == 1){
            $row = $result->fetch_assoc();
        }
    }
?>

<div class="container text-center">
    <form class="form mt-5" action="editarQuery.php" method="post">
        <input type="hidden" name="N_Registro" id="N_Registro" value="<?php echo $row['N_Registro']?>">
        <h1 class='my-5'>Editar funcionário</h1> 
                <div id="form-group">
                    <label class="text-left" for="nome_func">Nome do funcionário</label>
                    <input placeholder="Insira o novo nome" class="form-control" type="text" id="nome_func" name="nome_func" value="<?php echo $row['Nome_Funcionario']?>">
                </div>
                <div class="form-group">
                    <label for="cargos">Cargos</label>
                    <select placeholder="insira o novo cargo" class="form-control" name="cargos" id="cargos" value="<?php echo $row['cargo']?>">
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
                <input placeholder="Insira a nova quantidade de salarios" class="form-control" type="number" step="any" id="qtde_sal_min" name="qtde_sal_min" value="<?php echo $row['qtde_salarios']?>">
            </div>
            <div class="form-group ">
                <label for="data_admissao">Data de admissão:</label>
                <input placeholder="Insira a nova data de admissao" class="form-control mb-5" type="text" id="data_admissao" name="data_admissao" value="<?php echo $row['data_admissao']?>">                    
            </div>
            <div class="form-group buttons d-flex justify-content-center">
                <button type="submit" class="btn btn-success mx-3">Editar</button>
                <a href="listar.php" class="btn btn-danger">Cancelar</a>
            </div>
            
    </form>
</div>

<script>
    document.getElementById('cargos').value = "<?php echo $row['cargo']; ?>";
</script>

<?php
    include_once('footer.php'); 
?>