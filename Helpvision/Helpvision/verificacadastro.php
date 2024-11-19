<?php
include ("conexao.php");
include ("banco-cliente.php");

$nome = $_POST['txtnome'];
$email = $_POST['txtemail'];
$senha = $_POST['txtsenha'];

if(inserir($conexao,$nome,$email,$senha)) {
    header("Location: telaposcadastro.php");
}else{
    $msg = mysqli_errno ($conexao);
    echo $msg;
}
?>