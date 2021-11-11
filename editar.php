<?php 
require 'conexao.php';

$info = [];
$id = filter_input(INPUT_GET, 'id');
if($id){

    $sql = $pdo->prepare("SELECT * FROM usuarios WHERE id = :id");
    $sql->bindValue(':id', $id);
    $sql->execute();

    if($sql->rowCount() > 0){

        $info = $sql->fetch(PDO::FETCH_ASSOC);

    }else{
    header("Location: index.php");
    exit;
    }
} else{
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
</head>
<body>
<div class="container">
<form method="POST" action="editar_action.php" >
    <input type="hidden" name="id" value="<?=$info['id'];?>" />

<div class="mb-3">
<label for="exemplonome" class="form-label">Nome</label>
    <input type="text" class="form-control" name="name" value="<?=$info['nome'];?>" id="exemplonome" aria-describedby="nomeHelp" />

</div>
<div class="mb-3">
<label for="exemploemail" class="form-label">E-mail</label>
    <input type="email" name="email" value="<?=$info['email'];?>" class="form-control" id="exemploemail" aria-describedby="emailHelp" />
    </div>
  <button type="submit" class="btn btn-primary">Salvar</button>
</form>


    <script type="text/javascript" src="assets/js/jquery-3.6.0.mim.js" ></script>
    <script type="text/javascript" src="assets/js/bootstrap.bundle.min.js" ></script>
    </div>
</body>



</html>