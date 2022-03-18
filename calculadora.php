<!DOCTYPE html>
 <html>
 <body>
   <link rel="stylesheet"  type="text/css" href="css\bootstrap.min.css">
   <a href="practicas.php" class="nav-link">
     <svg class="bi" width="20" height="19" fill="currentColor">
      <use xlink:href="main/icons/bootstrap-icons.svg#archive"/>
    </svg> practicas</a>
 <h1>Sumar dos numeros</h1>
 <p>Por favor, introduce dos numeros:</p>
 <input id="num1">
 <input id="num2">
 <button type="button" onclick="myFunction()">Sumar</button>
 <p id="sumando"></p>
 <script>
 function myFunction() {
   var x,y,suma,text;
   x = document.getElementById("num1").value;
   y = document.getElementById("num2").value;
   if (isNaN (x) || isNaN (y)) {
     text = "Es necesarios introducir dos numeros validos";
   } else {

     suma=parseFloat(x)+parseFloat(y);
     text= suma;
   }
   document.getElementById("sumando").innerHTML = text;
 }
 </script>

  <script src="js/bootstrap.min.js"></script>
 </body>
 </html>
