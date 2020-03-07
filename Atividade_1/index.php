<?php
session_start();
?>
<?php
include "cabecalho.php";
?>

Bem vindo ao Jogo da Velha -IFSP.

</body>
<html>

<?php
include "cabecalho.php";
?>
   <h1>Insira Nome do Jogador 1</h1>
   <form action="instanciar_carro.php" method="post">

       <input type="text" step="20" min="20" max="500" name="nome1" placeholder="Nome Jogador 1" />
       <br />

       <input type="submit" value="Novo Jogador" />

       <h1>Insira Nome do Jogador 2</h1>
   <form action="instanciar_carro.php" method="post">

       <input type="text" step="20" min="20" max="500" name="nome2" placeholder="Nome do Jogador 2" />
       <br />

       <input type="submit" value="Novo Jogador" />

