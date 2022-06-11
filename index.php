<?php
  include_once("templates/header.php");
?>
  <div class="container">
    <?php if(isset($printMsg) && $printMsg != ''): ?>
      <p id="msg"><?= $printMsg ?></p>
    <?php endif; ?>
    <h1 id="main-title">Financas</h1>
    <?php if(count($registros) > 0): ?>
      <table class="table" id="registros-table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Data</th>
            <th scope="col">Débito</th>
            <th scope="col">Valor do Débito</th>
            <th scope="col">Crédito</th>
            <th scope="col">Valor do Crédito</th>
            <th scope="col">Histórico</th>
            <th scope="col"></th>
          </tr>
        </thead>

        <tbody>
          <?php foreach($registros as $registro): ?>
            <tr>
              <td scope="row" class="col-id"><?= $registro["id"] ?></td>
              <td scope="row"><?= $registro["dataRegistro"] ?></td>
              <td scope="row"><?= $registro["debito"] ?></td>
              <td scope="row"><?= $registro["valorDebito"] ?></td>
              <td scope="row"><?= $registro["credito"] ?></td>
              <td scope="row"><?= $registro["valorCredito"] ?></td>
              <td scope="row"><?= $registro["historico"] ?></td>
              
              <td class="actions">
                <a href="<?= $BASE_URL ?>show.php?id=<?= $registro["id"] ?>"><i class="fas fa-eye check-icon"></i></a>
                <a href="<?= $BASE_URL ?>edit.php?id=<?= $registro["id"] ?>"><i class="far fa-edit edit-icon"></i></a>
                <form class="delete-form" action="<?= $BASE_URL ?>/config/process.php" method="POST">
                  <input type="hidden" name="type" value="delete">
                  <input type="hidden" name="id" value="<?= $registro["id"] ?>">
                  <button type="submit" class="delete-btn"><i class="fas fa-times delete-icon"></i></button>
                </form>
              </td>

            </tr>

          <?php endforeach; ?>

        </tbody>
        
      </table>

    <?php else: ?>  
      <p id="empty-list-text">Ainda não há movimentações financeiras, <a href="<?= $BASE_URL ?>create.php">clique aqui para adicionar</a>.</p>
    <?php endif; ?>
    
  </div>

<?php
  include_once("templates/footer.php");
?>