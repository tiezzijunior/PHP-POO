<pre>
<?php

require_once "ContaBanco.php";

$p1 = new ContaBanco();
$p2 = new ContaBanco();

$p1->abrirConta("CC");
$p1->setDono("Jubileu");
$p1->setNumConta(1111);
$p2->abrirConta("CP");
$p2->setDono("Creuza");
$p2->setNumConta(2222);

$p1->deposito(300);
$p2->deposito(500);

$p2->sacar(100);

$p1->pagarMensalidade();
$p2->pagarMensalidade();

print_r($p1);
print_r($p2);

?>

</pre>