<?php
session_start();
foreach ($_SESSION['dados'] as $produtos){
    $conexao = new PDO('mysql:host=localhost;dbname=GoDriver','root','senac');
    $insert=$conexao->prepare("insert into pedidos() values(null,?,?,?,?,now(),?)");
    $insert -> bindParam(1,$produtos['id_produto']);
    $insert -> bindParam(2,$produtos['quantidade']);
    $insert -> bindParam(3,$produtos['preco']);
    $insert -> bindParam(4,$produtos['total']);
    $insert -> bindParam(5,$produtos['data_entrega']);
    $insert -> execute();
}

// var_dump($_SESSION['dados']);
header('location:pagamento.php');
?>
