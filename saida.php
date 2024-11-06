<?php
    include 'inc/funcoes.php';
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
        <table class="table table-striped-columns" border="1">
        <h3>Sistema de Entrada e Saída</h3>
        <thead>
            <tr>
                <th>Nome</th>
                <th>CPF</th>
                <th>Data/Hora</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if (empty($_SESSION['reg'])) {
                echo '<tr>';
                echo '<td colspan="4">Nenhum registro.</td>';
                echo '</tr>';
            } else {
                foreach (busca_registros() as $dados){
                    echo '<tr>';
                    echo '<td>'.$dados['nome'].'</td>';
                    echo '<td>'.$dados['cpf'].'</td>';
                    echo '<td>'.$dados['data'].'</td>';
                    echo '<td><a href="index.php?acao=remove&cpf="'.$dados['cpf'].'">Saída</a></td>';
                    echo '</tr>';
                }
            }
            ?>
        </tbody>
        </table>
        <a href="index.php">Voltar</a>
        </div>
    </div>
</body>
</html>