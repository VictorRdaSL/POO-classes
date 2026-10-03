<?php

//require_once "Conta.php

require_once "Conta.php";
require_once "administrador.php";

$conta = new Conta(1, "patati@patata.com", "2345678");
echo $conta->login("2345678") ? "Login realizado com sucesso \n" :"Senha incorreta \n";
?>