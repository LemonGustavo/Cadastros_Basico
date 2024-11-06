<?php
    include 'inc/funcoes.php';
?>

<!DOCTYPE html>
<html lang="en">
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
            <form>
                <h3>Sistema de Entrada e Saída</h3>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Nome</span>
                    <input type="text" name="cpnome" class="form-control" placeholder="Exemplo: Ramón Ramirez Rodrigues..." aria-label="Username" aria-describedby="basic-addon1">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">CPF</span>
                    <input type="text" name="cpCpf" class="form-control" placeholder="Exemplo: 000.000.000-00..." aria-label="Username" aria-describedby="basic-addon1">
                </div>
                <input type="submit" class="btn btn-outline-warning" value="Registrar">
                <input type="reset" class="btn btn-outline-warning" value="Limpar">
                <br>
                <br><a href="index.php">Voltar</a>
            </form>
        </div>
    </div>
</body>
</html>
<?php
    if(!empty($_GET)) {
        echo cadastrar_entrada($_GET['cpnome'], $_GET['cpCpf']);
    }
?>