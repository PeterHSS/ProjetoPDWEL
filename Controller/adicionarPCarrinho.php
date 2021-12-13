<?php
require_once "../model/consultas.php";
$inserir = new Consultas();
$email= $_POST["emailUser"];
$produto = $_POST["nomeProduto"];
$quantidade= $_POST["quantidade"];
$custoProduto= $_POST["valor"];
$valor= $quantidade * $custoProduto;
$situacao= "aguardo";

  
    $inserir->adicionarCarrinho($email, $produto,$quantidade, $valor,$situacao);
    
    header("Location:../view/produtos.php");   
    
?>