<?php 

//session_unset();

//verifica se a variavel de sessão está vazia e se o contador dos produtos também esta 
if (empty($_SESSION['cart']) && empty($_SESSION['cont'])) {
    //inicializa o carrinho e o contador
    $_SESSION['cart'] = array();
    $_SESSION['cont'] = 0;
} else {
    //senão inplementa +1 no contador
    $_SESSION['cont']++;
}
