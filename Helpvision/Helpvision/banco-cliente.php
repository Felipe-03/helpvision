<?php
function inserir($conexao,$nome,$email,$senha) {
    $sql = "insert into cliente (nome,email,senha) values ('$nome','$email','$senha')";
    return mysqli_query($conexao, $sql);
}

function alterar ($conexao, $nome, $email, $senha, $cod_cliente) {
    $sql = "update cliente set nome='$nome',"
            . "email='$email',"
            . "senha='$senha' where cod_cliente=$cod_cliente";
    return mysqli_query($conexao, $sql);
}

function excluir ($conexao, $cod_cliente) {
    $sql = "delete from cliente where cod_cliente = $cod_cliente";
    return mysqli_query($conexao, $sql);
}

function listar ($conexao) {
    $clientes = array();
    $sql = "select * from cliente";
    $resultado = mysqli_query($conexao,$sql);

    while($cliente = mysqli_fetch_assoc($resultado)) {
        array_push($clientes,$cliente);
    }
    return $clientes;
}

function busca ($conexao, $cod_cliente) {
    $sql= "select * from cliente where cod_cliente = $cod_cliente";
    $resultado= mysqli_query($conexao, $sql);
    return mysqli_fetch_assoc($resultado);
}

?>