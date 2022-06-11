<?php
  include_once("templates/header.php");
?>
  <div class="container">
    <?php include_once("templates/backbtn.php"); ?>
    <h1 id="main-title">Editar Transação</h1>
    <form id="create-form" action="<?= $BASE_URL ?>config/process.php" method="POST">
      <input type="hidden" name="type" value="edit">
      <input type="hidden" name="id" value="<?= $registro['id'] ?>">

      <div class="form-group">
        <label for="dataRegistro">Data da Transação:</label>
        <input type="text" class="form-control" id="dataRegistro" name="dataRegistro" placeholder="Digite a data em que foi realizada a transação" required>
      </div>

      <div class="form-group">
        <label for="debito">Débito:</label>
        <input type="text" class="form-control" id="debito" name="debito" placeholder="Informe a conta" required>
      </div>

      <div class="form-group">
        <label for="valorDebito">Valor do Débito:</label>
        <input type="text" class="form-control" id="valorDebito" name="valorDebito" placeholder="Informe o valor" required>
      </div>

      <div class="form-group">
        <label for="credito">Crédito:</label>
        <input type="text" class="form-control" id="credito" name="credito" placeholder="Informe a conta" required>
      </div>

      <div class="form-group">
        <label for="valorCredito">Valor do Crédito:</label>
        <input type="text" class="form-control" id="valorCredito" name="valorCredito" placeholder="Informe o valor" required>
      </div>

      <div class="form-group">
        <label for="historico">Historico:</label>
        <textarea type="text" class="form-control" id="historico" name="historico" placeholder="Digite o historico da movimentação" rows="6"></textarea>
      </div>

      <button type="submit" class="btn btn-primary">Atualizar</button>
    </form>
  </div>
<?php
  include_once("templates/footer.php");
?>