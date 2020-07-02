<!DOCTYPE html>
<html>

<head>
    <title>Resultado Tabla de Multiplicar</title>
</head>

<body>
    <div align="center">
        <h2>Resultado de la tabla de multiplicar</h2>
        <h3>Número ingresado: <?php
                                $valor = $_POST['valor'];
                                echo $valor;
                                ?></h3>
        <h3>TABLA DE MULTIPLICAR DEL NÚMERO: <?php
                                $valor = $_POST['valor'];
                                echo $valor;
                                ?> </h3>
                                <?php
$valorInicial = 0;
$valorFinal = 20;

if ($valorInicial < $valorFinal) {
    for ($i = $valorInicial; $i <= $valorFinal; $i++) {
        echo $valor . ' x ' .  $i . ' = ' .  ($valor * $i) . '<br/>';
    }
} else {
    for ($i = $valorInicial; $i >= $valorFinal; $i--) {
        echo $valor . ' x ' .  $i . ' = ' .  ($valor * $i) . '<br/>';
    }
}
?>
    </div>
    
    
</body>

</html>
