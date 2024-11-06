<?php
    session_start();
    $registros = empty($_SESSION['reg'])? $registros = array() : $_SESSION['reg'];

    function cadastrar_entrada($nome, $cpf) {
        global $registros;
        array_push($registros, array(
            'nome' => $nome,
            'cpf' => $cpf,
            'data' => date('j/m/y - H:i:s')
        ));
        $_SESSION['reg'] = $registros;

        return 'Cadastrado com Sucesso!<br>';
    }

    function busca_registros() {
        global $registros;
        return $registros;
    }

    function registrar_saida($cpf) {
        global $registros;
        $pos = array_search($cpf, array_column($registros, 'cpf'));
        if($pos>=0) {
            unset($registros[$pos]);
            $_SESSION['reg'] = $registros;
        }
        return "CPF $cpf removido com sucesso!";
    }

    function limpar_dados() {
        session_destroy();
        return 'Dados removidos com sucesso!';
    }
?>