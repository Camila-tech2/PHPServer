<?php
  require './ler.php';

  $usuarios = realizarLeitura();
  $usuarios = json_decode($usuarios);

  // Mostrar usuários
  //echo "login 1: " . $usuarios[0]->login . "<br>";
  //echo "senha 1: " . $usuarios[0]->senha . "<br>";
  //echo "<br>";
  //echo "login 2: " . $usuarios[1]->login . "<br>";
  //echo "senha 2: " . $usuarios[1]->senha . "<br>";


?>
<!DOCTYPE>
<html>
  <head>
    <title>Autenticador</title>
    <link rel='stylesheet' type='text/css' href='./style.css'>
  </head>
  <body>
    <div class="container">
    <form method="post" action="autenticar.php"> 
      <h1>Login</h1>
    <div class="mb-3">
      <label for="email" class="form-label">Email</label>
      <input type="email" value="camila@gmail.com" class="form-control" id="login" name="login" required>
    </div>
    <div class="mb-3">
      <label for="senha" class="form-label">Senha</label>
      <input type="password" class="form-control" id="senha" name="senha" required>
    </div>
       <button type="submit" class="custom-btn btn-8" id="btn-enviar"><span>Login</span></button>
  </form>
      </div>
  </body>
</html>


