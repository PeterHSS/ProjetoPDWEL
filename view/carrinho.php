<?php
session_start();
include_once('../controller/headerCarrinho.php');
include_once('../controller/ProdutoDAO.php');

if (isset($_POST['excluir']) && isset($_POST['id'])) {
    //crio um objeto da classe controller produtoDAO
    $dao = new ProdutoDAO;
    $result = $dao->excluir($_POST);
}

if (isset($_POST['resetCart'])) {
    $_SESSION['cart'] = array();
    header('Location:carrinho.php');
}
if (isset($_POST['comprar'])) {
    header('Location:comprou.php');
}



if((!isset ($_SESSION['email']) == true) and (!isset ($_SESSION['senha']) == true))
{
  unset($_SESSION['email']);
  unset($_SESSION['senha']);
  $logado=false;
  header('location:login.php');
  }

$logado = true;
   

        ?>

<html>

<head>
    <Title> Carrinho </title>
    <link href="css/estilo.css" rel="stylesheet" type="text/css" media="screen" />
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style.min.css" rel="stylesheet">
    <meta charset="UTF-8">
    <style>
        .botao-comprar {
            width: 100%;
        }
    </style>
</head>

<body>
<?php
require_once "../model/consultas.php";
        $email= $_SESSION['email'];
        $consulta = new Consultas();
        $produtos = $consulta->listarProdutos($email);
        ?>
        
    <h2>Lista de produtos:</h2>
    <?php
    //se a variavel de sessão cart não estiver vazia
    if (!empty($_SESSION['cart'])) {
        //variavel a qual irá armazenar o carrinho para manipulação
        $produtos = $_SESSION['cart'];

        //subtotal dos produtos
        $total = 0;
        ?>
        <table style="width: 100%;">
            <tr>
                <td></td>
                <td>Nome</td>
                <td>Quantidade</td>
                <td>Preco unitario</td>
                <td>Subtotal</td>
            </tr>
            <?php
            //foreach é uma estrutura de repetição especifica para manipulação de arrays, onde manipulamos os valores inseridos deles por identificadores de chave => valor 
            foreach ($produtos as $subKey => $subArray) :
                if (isset($subArray['idProduto'])) {
                    ?>
                    <tr>
                        <td><img style="width: 100px;height: 100px;" src="<?php echo "{$subArray['imagemProduto']}"; ?>" class="imagens"></td>
                        <td><?php echo $subArray['nomeProduto']; ?></td>
                        <td><?php echo intval($subArray['qtdProduto']); ?></td>
                        <td><?php echo floatval($subArray['precoUnidade']); ?></td>
                        <td><?php echo (intval($subArray['qtdProduto']) * floatval($subArray['precoUnidade'])); ?></td>
                        <td>
                            <form action="carrinho.php" method="post">
                                <input type="submit" name="excluir" value="Excluir">
                                <input type="hidden" name="id" value="<?php echo "{$subArray['id']}"; ?>">
                            </form>
                        </td>
                    </tr>

                    <?php
                    $total += (intval($subArray['qtdProduto']) * floatval($subArray['precoUnidade']));
                }
            endforeach;
            ?>
            <tr>


                <td><b>SUBTOTAL DOS PRODUTOS:</b></td>
                <td><?php echo $total; ?></td>
                <td>
                    <form action="carrinho.php" method="post">
                        <input type="submit" name="resetCart" value="Limpar Carrinho">
                    </form>
                </td>
            </tr>
        </table>
        <form action="carrinho.php" method="post">
            <br> <input class="botao-comprar" type="submit" name="comprar" value="comprar">
        </form>
    <?php
} else {
    ?>
        
    <?php
}
?>
<div class="table-responsive-xl">
  <table class="table">
<table class="table table-striped">

 <form class="w-50 p-3 pt-5 mx-auto mt-5" method="post" action="../controller/confirmarCompra.php">
                
            <table border = "1">
                <tr>
                    <th>Produto</th>
                    <th>Quantidade</th>
                    <th>Valor</th>
                    <th>Situacao</th>                   


                <style>
                    th{
                        margin-top: 10px;
                    }
                </style>
                </tr>
                <?php
                 

                 $i= 0;
                foreach ($produtos as $item) {
                    
                    ?>

                    <tr>
                        <td><?php echo $item["nomeProduto"]; ?></td>
                        <td><?php echo $item["quantidade"]; ?></td>
                        <td><?php echo $item["valor"]; ?></td>
                        <td><?php echo $item["situacao"]; ?> </td>

                    </tr>
                    <?php
                     ++$i; }
                
                
                ?>
                
            </table>
     <input type="submit" class="btn btn-info" value="Concluir">
     <style>.btn-info{} </style>
            </form>


            </table>
</div>




</div>
</body>

</html>