<?php
    include_once('header.php');
?>

<div class="container text-center">
    <form class="form mt-5" action="cadastro.php" method="post">
        <h1 class="my-5">Atividade 01 - DWII</h1>
            <div id="form-group">
                <label class="text-left" for="nome_func">Nome do funcionário</label>
                <input placeholder="Insira o nome" class="form-control" type="text" id="nome_func" name="nome_func">
            </div>
            <div class="form-group">
                <label for="cargos">Cargos</label>
                <select class="form-control" name="cargos" id="cargos">
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
                <input placeholder="Insira a quantidade de salarios do funcionario" class="form-control" type="number" step="any" id="qtde_sal_min" name="qtd_min">
            </div>
            <div class="form-group">
                <label for="data_admissao">Data de admissão:</label>
                <input placeholder="Insira a data de admissão do funcionario" class="form-control mb-5" type="text" id="data_admissao" name="data_admissao">                    
            </div>
            <div class="form-group buttons d-flex justify-content-center">
                <button type="submit" class="btn btn-primary mx-3">Cadastrar</button>
                <a href="listar.php" class="btn btn-primary">Demonstrativos de pagamento</a>
            </div>    
    </form>
    
<?php
    include_once('footer.php'); 
?>