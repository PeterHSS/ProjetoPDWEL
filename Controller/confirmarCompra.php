<?php
session_start();
require_once "../model/consultas.php";
        $email= $_SESSION['email'];
        $consulta = new Consultas();
        $produtos = $consulta->upProdutos($email);
        
         header('location:../view/produtos.php');


?>