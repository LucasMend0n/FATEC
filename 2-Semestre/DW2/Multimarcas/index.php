<?php
    include_once('header.php');
?>

<div class="container text-center">
    <form class="form mt-5" action="cadastro.php" method="post">
        <h3 class="my-3">Felipe Douglas dos Santos Félix</h3>
        <h3 class="my-3">Lucas Mendonça da Silva Junior </h3>
        <h3 class="my-3">Joao Pedro Sassi Granado</h3>

        <hr>

        <h2 class="my-5">Multimarcas Veículos</h2>

            <div id="form-group">
                <label class="text-left" for="renavam">Renavam</label>
                <input placeholder="Insira o Renavam" class="form-control" type="text" id="renavam" name="renavam">
            </div>
            <div id="form-group">
                <label class="text-left" for="desc_veiculo">Descrição do veículo</label>
                <input placeholder="Insira a descrição" class="form-control" type="text" id="desc_veiculo" name="desc_veiculo">
            </div>
            <div class="form-group">
                <label for="montadora">Montadora</label>
                <select class="form-control" name="montadora" id="montadora">
                    <option value=""></option>
                    <option value="Toyota">Toyota</option>
                    <option value="Ford">Ford</option>
                    <option value="GM">GM</option>
                    <option value="Fiat">Fiat</option>
                </select>
            </div>
            <div class="form-group">
                <label for="ano_veiculo">Ano do veículo</label>
                <input placeholder="Insira o ano do veículo" class="form-control" type="number" id="ano_veiculo" name="ano_veiculo">
            </div>
            <div class="form-group">
                <label for="placa">Placa</label>
                <input placeholder="Insira a placa do veículo" class="form-control mb-5" type="text" id="placa" name="placa">                    
            </div>
            <div class="form-group">
                <label for="valor_veiculo">Valor do veículo</label>
                <input placeholder="Insira o valor do veículo" class="form-control mb-5" type="number" step="any" id="valor_veiculo" name="valor_veiculo">                    
            </div>
            <div class="form-group buttons d-flex justify-content-center">
                <button type="submit" class="btn btn-primary mx-3">Cadastrar veículo</button>
                <a href="listar.php" class="btn btn-primary">Listar veículos</a>
            </div>    
    </form>
    
<?php
    include_once('footer.php'); 
?>