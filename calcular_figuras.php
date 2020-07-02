<?php
$combo=$_POST["cal"];
$area=0;
$perimetro=0;
$figura="";
        if ($combo==1) {
            $figura="Triangulo";
        $lado1=$_POST["lado1"];
        $lado2=$_POST["lado2"];
        $lado3=$_POST["lado3"];
        $altura=$_POST["altura"];
        $area=($lado3 *$altura)/2;
        $perimetro=$lado1+$lado2+$lado3;
        
        } elseif ($combo ==2 ) {
            $figura="cuadrado";
            $ladoc=$_POST["ladoc"];
            $area=$ladoc**2;
            $perimetro=4*$ladoc;


        }
        elseif ($combo ==3 ) {
            $figura="Rectangulo";
            $ladoh=$_POST["ladoh"];
            $ladob=$_POST["ladob"];
            $area=$ladoh*$ladob;
            $perimetro=(2*$ladoh)+(2*$ladob);

        }
        elseif ($combo ==4 ) {
            $figura="Circulo";
            $radio=$_POST["radio"];
            $area=3.14*($radio**2);
            $perimetro=2*3.1416*$radio;
        }
        else {
            echo "no definido";
        }


?>
        <html>
            <head>
                <title>Calculo de Area y Perimetro</title>
            </head>
            <body>
                <h1>Calculos: <?= $figura?> </h1>
                <p> Perimetro: <?= $perimetro?> <br>Area: <?= $area?>  </p>
                <button class="enlace" role="link" onclick="window.location='./index.html'">Volver Al Menú Principal</button>

            </body>
        </html>