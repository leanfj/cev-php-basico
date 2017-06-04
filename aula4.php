<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Aula 4 PHP Variáveis</title>
    <link rel="stylesheet" href="estilo.css">
  </head>
  <body>
    <div class="">

      <?php
        $idade = 22;
        // (string) typecast para forçar o tipo da variável
        $nome = "Leandro";
        // chamada de variável sem aspas""
        echo $nome." tem ".$idade. " anos !</br>";

        echo "$nome tem $idade anos !";
      ?>
   </div>
  </body>
</html>
