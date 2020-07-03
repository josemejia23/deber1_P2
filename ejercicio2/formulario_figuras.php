<!DOCTYPE html>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
<html>
<head><title>Calculos de Area y Perimetro</title></head>

<form action="./calcular_figuras.php" method="POST" name="calcu"  align="center">


<h1>Calculos de Area y Perimetro</h1>
<hr>
      <div id="comboBox" > 
      <label for="cal">Selecciona una figura:</label>
        <select name="cal" id="calcular"  onchange="Mostrar(this.value)">
        <option value="0">Selecciona Una figura</option> 
          <option value="1">Triangulo</option>
          <option value="2">Cuadrado</option>
          <option value="3">Rectangulo</option>
          <option value="4">Circulo</option>
        </select>
      </div>

      <div id="dtriangulo" >
      Introduzca el lado 1: <br>
      <input type="number" size=2 id="l1"  name="lado1" min="0" max="1000" step="1" > <br>
      Introduzca el lado 2: <br>
      <input type="number" size=2 id="l2" name="lado2" min="0" max="1000" step="1"> <br> 
      Introduzca el lado 3(Base): <br>
      <input type="number" size=2 id="l3" name="lado3" min="0" max="1000" step="1" > <br> 
      Introduzca la altura: <br>
      <input type="number" size=2 id="h" name="altura" min="0" max="1000" step="1" > <br> 
      </div>

      <div id="dcuadrado">
      Introduzca el lado: <br>
      <input type="number" size=2 id="ladocua" name="ladoc" min="0" max="1000" step="1"> <br>
      </div>

      <div id="drectangulo">
      Introduzca el lado 1(a): <br>
      <input type="number" size=2  id="la" name="ladoh" min="0" max="1000" step="1"> <br>
      Introduzca el lado 2(b): <br>
      <input type="number" size=2  id="lb" name="ladob" min="0" max="1000" step="1"> <br> 

      </div>

      
      <div id="dcirculo">
      Introduzca el valor del radio: <br>
      <input type="number" size=2 id="ra" name="radio" min="0" max="1000" step="1" > <br>
      </div>

    <hr>
      <div id="dbtn">
      <input type=submit value="Calcular">
        </div>

  </form>



  </body>
  </html>


  
<script type="text/javascript">
function Mostrar($variable){
  if($variable==1)
  {
     document.getElementById("dtriangulo").style.display="block";
      document.getElementById("dcuadrado").style.display="none";
      document.getElementById("drectangulo").style.display="none";
      document.getElementById("dcirculo").style.display="none"; 
      document.getElementById("dbtn").style.display="block";
      document.getElementById("l1").setAttribute("required","true");
      document.getElementById("l2").setAttribute("required","true");
      document.getElementById("l3").setAttribute("required","true");
      document.getElementById("h").setAttribute("required","true");
      
  }
  if($variable==2)
  {
     document.getElementById("dtriangulo").style.display="none";
      document.getElementById("dcuadrado").style.display="block";
      document.getElementById("drectangulo").style.display="none";
      document.getElementById("dcirculo").style.display="none"; 
      document.getElementById("dbtn").style.display="block";
      document.getElementById("ladocua").setAttribute("required","true");
  }
  if($variable==3)
  {
     document.getElementById("dtriangulo").style.display="none";
      document.getElementById("dcuadrado").style.display="none";
      document.getElementById("drectangulo").style.display="block";
      document.getElementById("dcirculo").style.display="none"; 
      document.getElementById("dbtn").style.display="block";
      document.getElementById("la").setAttribute("required","true");
      document.getElementById("lb").setAttribute("required","true");
  }
  if($variable==4)
  {
     document.getElementById("dtriangulo").style.display="none";
      document.getElementById("dcuadrado").style.display="none";
      document.getElementById("drectangulo").style.display="none";
      document.getElementById("dcirculo").style.display="block"; 
      document.getElementById("dbtn").style.display="block";
      document.getElementById("ra").setAttribute("required","true");
  }
}

    window.onload=function() {
      document.getElementById("dtriangulo").style.display="none";
      document.getElementById("dcuadrado").style.display="none";
      document.getElementById("drectangulo").style.display="none";
      document.getElementById("dcirculo").style.display="none"; 
      document.getElementById("dbtn").style.display="none"; 

		}

</script>