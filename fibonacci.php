<html>
 <head>
  <title>Fibonacci</title>
  <style>
    body{
        padding:2em;
        font-size:18px;
    }
    div{
        display:flex;
        flex-direction:column;
        align-items: center;
    }
    form{
        display: flex;
    }
    .result{
        background-color:#eee;
        display:block;
        word-break: break-all;
        padding:.5em;
    }
    .result span{
        font-weight:bold;
    }
  </style>
 </head>
 <body>
    <div>
        <form action="" method="get">
        Posição: <input type="number" name="posicao"/><br />
        <input type="submit" name="submit" value="Calcular" />
        </form>
    </div>
<?php
    function fibonacci($n) {
        $fib = [0, 1]; // Inicializa os primeiros dois números da sequência Fibonacci
        for ($i = 2; $i <= $n; $i++) {
            $fib[$i] = bcadd($fib[$i - 1], $fib[$i - 2]); // Calcula o próximo número da sequência usando a função bcadd para lidar com números grandes
        }
        return $fib[$n];
    }
    // Recebe o número da posição como entrada
    $posicao = $_GET['posicao']; // Você pode usar o método de requisição apropriado (GET ou POST) para obter a entrada do usuário
    // Verifica se a posição é um número inteiro positivo
    if (!is_numeric($posicao) || $posicao < 0 || floor($posicao) != $posicao) {
        echo "Posição inválida. Insira um número inteiro positivo.";
    } else {
        // Calcula o número da sequência Fibonacci para a posição informada
        $resultado = fibonacci($posicao);
        echo "<div class='result'><p><span>O número da sequência Fibonacci para a posição $posicao é:</span> $resultado</p></div>";
    }
?>
 </body>
</html>