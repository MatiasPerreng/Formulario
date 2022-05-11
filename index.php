<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <title>Document</title>
</head>
<body>
    <form action="datos.php" method="post" class="form">
        
Cedula: <input type="number" name="cedula" placeholder="Cedula" class="input">
<br>
Nombre: <input type="text" name="nombre" placeholder="Nombre" class="input">
<br>
Apellido : <input type="text" name="apellido" placeholder="Apellido" class="input">
<br>
Especificación: <input type="text" name="especificacion" placeholder="Especificación" class="input">
<br>
 <input type="submit" name="enviar" class="btn">
    </form>
    <?php 

    include(register.php);
    
    ?>
</body>
</html>