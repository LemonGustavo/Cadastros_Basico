<?php
    include 'inc/funcoes.php';
    if(!empty($_GET)) {
        if ($_GET['acao'] == 'limpa') {
            echo limpar_dados();
        }
        if ($_GET['acao'] == 'remove') {
            echo registrar_saida($_GET['cpf']);
        }
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Sistema de Entrada e Saída</title>
</head>
<body class="bg-warning">
    <div class="card w-50 mt-2 mx-auto">
        <div class="card-body">
            <h3>Sistema de Entrada e Saída</h3>
            <p>O Sistema a seguir registra a Entrada e Saída de todos os que passaram por aqui, com as seguintes configurações:</p>
            <div class="container text-center">
                <div class="row">
                  <div class="col">
                    <a class="btn btn-outline-warning" href="entrada.php">Registrar Entrada</a>
                  </div>
                  <div class="col">
                    <a class="btn btn-outline-warning" href="saida.php">Registrar Saída</a>
                  </div>
                  <div class="col">
                    <a class="btn btn-outline-danger" href="index.php?acao=limpa">Limpar dados</a>
                  </div>
                </div>
              </div>
        </div>
    </div>
</body>
</html>