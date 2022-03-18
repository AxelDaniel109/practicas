<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="css/Bootstrap.min.css">
    <title>REGISTRO</title>
</head>
<body>
    <div class="row d-flex justify-content-center">
<h1 class="text-center display-6 mt-5">REGISTRO</h1>
<div class="col-sm-10 colo-md-10 col-lg-10 py-5">
    <div class="card shadow bg-light">
<div class="container">
    <form action="chamba.php" method="Post">
<input type="text" class="form-control mt-3" name="Nombre" id="Nombre" placeholder="Nombre" required="por favor digita tu nombre">
<input type="data" class="form-control mt-3" name="Edad" id="Edad" placeholder="Edad" required="porfavor ingresa tu edad ">
<textarea name="Direccion" id="Direccion" class="form-control mt-3"placeholder="Direccion"></textarea>
<input type="varchar" class="form-control mt-3" name="Telefono" id="Telefono" placeholder="Telefono" required="por tu numero telefonico ">
<input type="email" class="form-control mt-3" name="Email" id="Email" placeholder="Email" required="pon tu Email">
<button onclick="enviar();" class="btn btn-sm btn-success st-3">ENVIAR</button>
</form>
</div>
    </div>
</div>
    </div>
<script>
    function enviar(){
       campo=document.getElementById('Nombre').value;
       campo1=document.getElementById('Edad').value;
       campo2=document.getElementById('Direccion').value;
       campo3=document.getElementById('Telefono').value;
       campo4=document.getElementById('Email').value;
       if (campo == '') {
           alert("por favor digita tu nombre ");
       } else if(campo1 == '') {
         alert("por favor pon tu edad , el campo no puede estar vacio") ;
       }else if(campo2 == ''){
           alert("por favor ingresa tu direccion , este campo no puede estar vacio");
       }else if (campo3 == ''){
           alert("ingresa tu telefono ,el campo no puede estar vacio");
       }else if(campo4 == ''){
           alert("por favor ingresa tu email , el campo no puede estar vacio");
       }else{
           return false;
       }
    }
</script>
    <script src="js/bootstrap.min.js"></script>

</body>
</html>
