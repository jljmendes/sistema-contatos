<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <style>
        input[type=text],[type=email] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            }
            input[type=submit] {
            width: 100%;
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            }
    </style>
</head>

<body>
    <div class="container">
        <form class="frm" method="POST" action="adicionar_action.php">

            <div class="mb-3">
                <label for="exemplonome" class="form-label">Nome</label>
                <input type="text" class="form-control" name="name" id="exemplonome" aria-describedby="nomeHelp" />

            </div>
            <div class="mb-3">
                <label for="exemploemail" class="form-label">E-mail</label>
                <input type="email" name="email" class="form-control" id="exemploemail" aria-describedby="emailHelp" />
            </div>
            <button class="bt" type="submit" class="btn-outline-primary">Adicionar</button>
        </form>


        <script type="text/javascript" src="assets/js/jquery-3.6.0.mim.js"></script>
        <script type="text/javascript" src="assets/js/bootstrap.bundle.min.js"></script>
    </div>
</body>



</html>