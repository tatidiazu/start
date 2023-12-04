<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Llamada al CND de BOOTSTARP-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/method_get.css">                                                                                                     
    <title>Mayor o menor de edad</title>
</head>
<body>
<a href="index.html#section-respuestas">
        <img class="home" src="img/hogar.png" alt="casa">
    </a>
    <!--Metodo GET-->
    <div class="main-frame-cal">

        <!--Llamada del archivo .php con el método GET-->
    <form action="method_get.php" method="GET">

        <div class="form-group">
            <h2>Metodo GET </h2>
        <!--Solicitud campo Nombre-->
            <label for="exampleFormControlInput1">Nombre</label>
            <input type="text" name="nombre" class="form-control" id="exampleFormControlInput1" placeholder="Digite su Nombre">
        </div>

 <!--Solicitud campo Apellido-->
        <div class="form-group">
            <label for="exampleFormControlInput1">Apellido</label>
            <input type="text" name="apellido" class="form-control" id="exampleFormControlInput1" placeholder="Digite su Apellido">
        </div>

 <!--Solicitud campo Cédula-->
        <div class="form-group">
            <label for="exampleFormControlInput1">Cédula</label>
            <input type="text" name="cc" class="form-control" id="exampleFormControlInput1" placeholder="Digite su Cédula">
        </div>
        <button type="submit" name="verificar" class="btn btn-outline-info">Calcular</button>
    </form>

    <!--Metodo POST-->

    <form action="method_get.php" method="POST">
<div class="form-group">
    <h2>Metodo POST </h2>
    <label for="exampleFormControlInput2">Nombre</label>
    <input type="text" name="nombrep" class="form-control" id="exampleFormControlInput1" placeholder="Digite su Nombre">
</div>
<div class="form-group">
    <label for="exampleFormControlInput2">Apellido</label>
    <input type="text" name="apellidop" class="form-control" id="exampleFormControlInput1" placeholder="Digite su Apellido">
</div>
<div class="form-group">
    <label for="exampleFormControlInput2">Cédula</label>
    <input type="text" name="ccp" class="form-control" id="exampleFormControlInput1" placeholder="Digite su Cédula">
</div>
<button type="submit" name="verificarp" class="btn btn-outline-info">Calcular</button>
</form>

    <?php
    // metodo GET

    $nombre = null;
    $apellido = null;
    $cedula = null;
//Sentencia condicional que trae el método GET
    if (isset($_GET['verificarp'])) {
        $nombre = $_GET['nombrep'];
        $apellido = $_GET['apellidop'];
        $cedula = $_GET['cedulap'];
    //impresión de los datos ingresados por el usuario

        echo "Nombre : ".$nombre."<br>";
        echo "Apellido : ".$apellido."<br>";
        echo "Cédula : ".$cedula."<br>";

    }
    ?>
</body>
</html>