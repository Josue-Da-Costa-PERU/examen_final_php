<?php
include_once('includes/templates/header.php')
?>
  <?php
require "data/basedatos.php";

$sql = "SELECT * FROM departamentos;";

$resultado = $db->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matricula</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
    rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx"
    crossorigin="anonymous">
</head>
<body>
    <div class="container">
<h1>Registro de Inmobilaria </h1>
<hr></hr>
<a href="nuevo_registro.php"class="btn btn-secondary">Nuevo</a>
<table class="table">
    <thead>
        <tr>
        <th>Nombre</th>
        <th>Precio</th>
        <th>Descripcion</th>
        <th>Habitacion</th>
        <th>Cochera</th>
        </tr>
    </thead>
    <tbody id="tblData">
        <?php
        while($cliente = $resultado->fetch_assoc()):
        ?>
        <tr>
                            <td><?php echo $cliente['titulo']?></td>
                            <td><?php echo $cliente['precio']?></td>
                            <td><?php echo $cliente['descripcion']?></td>
                            <td><?php echo $cliente['habitaciones']?></td>
                            <td><?php echo $cliente['estacionamiento']?></td> 
                            <td>
                            <a href="editar_cliente.php?id=<?php echo $cliente['id'];?>" class="btn btn-primary">Editar</a>
                            <th><a href="eliminar.php?id=<?php echo $cliente['id']; ?>" class="btn btn-danger">Eliminar</a></th>
                            </td>
                        </tr>
                        <?php
                        endwhile;
                        ?>
                        </tbody>    
                </table>
                    </div>
            </boy>
        </html> 
<?php
include_once('includes/templates/footer.php')
?>