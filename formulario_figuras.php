<html>
<head><title>Calculos de Area y Perimetro</title></head>

<font size="+1">


<form action="./calcular_figuras.php" method="POST" name="calcu">


<label for="cal">Seleccione una figura:</label>
  <select name="cal" id="calcular">
    <option value="1">Triangulo</option>
    <option value="2">Cuadrado</option>
    <option value="3">Rectangulo</option>
    <option value="4">Circulo</option>
  </select>

    <div id="dtriangulo" aling="center">
    Introduzca el lado 1: <br>
    <input type="text" size=2 name="lado1"> <br>
    Introduzca el lado 2: <br>
    <input type="text" size=2 name="lado2"> <br> 
    Introduzca el lado 3: <br>
    <input type="text" size=2 name="lado3"> <br> 
    Introduzca la altura: <br>
    <input type="text" size=2 name="altura"> <br> 
    </div>

    <div id="dcuadrado">
    Introduzca el lado: <br>
    <input type="text" size=2 name="ladoc"> <br>
    </div>

    <div id="drectangulo">
    Introduzca el lado 1: <br>
    <input type="text" size=2 name="ladoh"> <br>
    Introduzca el lado 2: <br>
    <input type="text" size=2 name="ladob"> <br> 

    </div>

    
    <div id="dcirculo">
    Introduzca el valor del radio: <br>
    <input type="number" size=2 name="radio"> <br>
    </div>



    <input type=submit value="Calcular">


 </form>



 </body>
 </html>