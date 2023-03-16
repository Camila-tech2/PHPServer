<?php

  require "./ler.php";

  $usuarios = realizarLeitura();
  $usuarios = json_decode($usuarios);
  
?>

<!DOCTYPE>
<html>
  <head>
    <title>Logado!</title>
    <link rel='stylesheet' type='text/css' href='./style.css'>
  </head>
  <body>
    <div class="card">
      <img class="icon" src="./img/verificacao.png">
      <?php if (isset($_GET['login']) && isset($_GET['cargo'])): ?>
  <h1>Bem-vindo(a) <?php echo $_GET['login']; ?>!</h1>
  <p>Cargo: <?php echo $_GET['cargo']; ?>.</p>
     <?php endif; ?>
      
      </div>
  </body>
</html>


