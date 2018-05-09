<?php

if (isset ($_POST['nome']) && empty($_POST['nome'] ) ) {
    echo 'Preencha o nome completo<br>';
}

if (isset ($_POST['cpf']) && empty($_POST['cpf'] ) ) {
    echo 'Preencha o CPF<br>';
}
if (isset ($_POST['cpf']) && !is_numeric($_POST['cpf'] ) ) {
    echo 'Apenas números no CPF<br>';
}

 ?>
<form class="" action="" method="post">
  <label>
    Nome completo*:
  <input type="text" name="nome" value="">
  </label>
  <label>
    CPF*:
  <input type="text" name="cpf" value="">
  </label>

  <input type="submit" name="" value="cadastrar">
</form>
