<?php
include_once('header.php');
include 'conexao.php';

if (isset($_GET['Renavam'])) {
    $renavam = $_GET['Renavam'];
    $sql = "SELECT * FROM tb_veiculo WHERE (renavam = '$renavam')";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
    }
}
?>

<div class="container text-center">
    <form class="form mt-5" action="editarQuery.php" method="post">
        <h1 class='my-5'>Editar veículo</h1>
        <div id="form-group">
            <label class="text-left" for="renavam">Renavam</label>
            <input placeholder="Insira o Renavam" class="form-control" type="text" id="renavam" name="renavam" value="<?= $row["Renavam"] ?>">
        </div>
        <div id="form-group">
            <label class="text-left" for="desc_veiculo">Descrição do veículo</label>
            <input placeholder="Insira a descrição" class="form-control" type="text" id="desc_veiculo" name="desc_veiculo" value="<?= $row["Descricao_veiculo"] ?>">
        </div>
        <div class="form-group">
            <label for="montadora">Montadora</label>
            <select class="form-control" name="montadora" id="montadora" value="<?php echo $row['Montadora']?>">
                <option value=""></option>
                <option value="Toyota">Toyota</option>
                <option value="Ford">Ford</option>
                <option value="GM">GM</option>
                <option value="Fiat">Fiat</option>
            </select>
        </div>
        <div class="form-group">
            <label for="ano_veiculo">Ano do veículo</label>
            <input placeholder="Insira o ano do veículo" class="form-control" type="number" id="ano_veiculo" name="ano_veiculo" value="<?= $row["Ano"] ?>">
        </div>
        <div class="form-group">
            <label for="placa">Placa</label>
            <input placeholder="Insira a placa do veículo" class="form-control mb-5" type="text" id="placa" name="placa" value="<?= $row["Placa"] ?>">
        </div>
        <div class="form-group">
            <label for="valor_veiculo">Valor do veículo</label>
            <input placeholder="Insira o valor do veículo" class="form-control mb-5" type="number" step="any" id="valor_veiculo" name="valor_veiculo" value="<?= $row["Valor"] ?>">
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