<?php
require 'conexao.php';

$lista = [];
$sql = $pdo->query("SELECT * FROM usuarios");
if ($sql->rowCount() > 0) {
  $lista = $sql->fetchAll(PDO::FETCH_ASSOC);
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>



  <title>Contatos</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
  <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
  <div class="container">
    <div class="d-grid gap-2"><br>
      <<<<<<< HEAD <a href="adicionar.php" button type="button" class="btn btn-outline-success btn-lg" data-toggle="modal" data-target="#addUsuarioModal">CADASTRAR NOVO USUÁRIO</a>
        =======
        <a href="adicionar.php" button type="button" class="btn btn-outline-success btn-sm" data-toggle="modal" data-target="#addUsuarioModal">CADASTRAR NOVO USUÁRIO</a>
        >>>>>>> c226020d29176aaa09a53c29fd64d880abbcee07
    </div>
    <!--<a href="adicionar.php" >ADICIONAR USUÁRIO</a>-->
    <table class="table table-hover">
      <thead class="table-dark">
        <tr>
          <th scope="col">Id</th>
          <th scope="col">Nome</th>
          <th scope="col">E-mail</th>
          <th scope="col">Ações</th>
        </tr>
      </thead>

      <tbody>
        <?php foreach ($lista as $usuario) : ?>
          <tr>
            <td><?php echo $usuario['id']; ?></td>
            <td><?php echo $usuario['nome']; ?></td>
            <td><?php echo $usuario['email']; ?></td>
            <td>
              <a href="editar.php?id=<?php echo $usuario['id']; ?>" class="btn btn-outline-warning">Editar</a>
              <a href="excluir.php?id=<?php echo $usuario['id']; ?>" onclick="return confirm('Tem certeza que deseja excluir? ')" class="btn btn-outline-danger">Excluir</a>
            </td>
          </tr>
      </tbody>
    <?php endforeach; ?>
    </table>
  </div>

  <script type="text/javascript" src="assets/js/jquery-3.6.0.mim.js"></script>
  <script type="text/javascript" src="assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>