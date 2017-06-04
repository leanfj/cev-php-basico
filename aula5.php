<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Aula 5 - Operadores Aritméticos</title>
    <link rel="stylesheet" href="estilo.css">
  </head>
  <body>
    <div class="">
      <h3>Operadores Aritméticos</h3>
      <?php
        // Declaração de variáveis
        // $numero1 = 4;
        // $numero2 = 2;

        // Pegando variáveis
        $numero1 = $_GET["a"];
        $numero2 = $_GET["b"];

        // Operação de soma
        $soma = $numero1 + $numero2;
        $subtracao = $numero1 - $numero2;
        $multiplicacao = $numero1 * $numero2;
        $divisao = $numero1 / $numero2;
        $modulo = $numero1 % $numero2;
        $media = ($numero1 + $numero2)/2;

        echo "O valor da soma $numero1 + $numero2 é $soma";
        echo "</br>O valor da subtração de $numero1 - $numero2 é $subtracao";
        echo "</br>O valor da multipĺicação de $numero1 * $numero2 é $multiplicacao";
        echo "</br>O valor da divisão de $numero1 / $numero2 é $divisao";
        echo "</br>O valor do módulo de $numero1 % $numero2 é $modulo";
        echo "</br>O valor da media é $media";
       ?>
    </div>
  </body>
</html>
