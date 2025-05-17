<?php
    include("conexion.php");
    $conn = conectar();
    $sql = "SELECT * FROM alumnos";
    $query = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto PHP</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-2">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center"> PROYECTO CRUD</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <h1>Ingresa los Datos</h1>
                <form action="insertar.php" method = "post">
                    <input type="text" 
                    name = "ine" 
                    class="form-control mb-3" 
                    placeholder="Escribe tu INE" 
                    required>
                    <input type="text" 
                    name = "nombre" 
                    class="form-control mb-3" 
                    placeholder="Escribe tu nombre" 
                    required>
                    <input type="text" 
                    name = "apellidos" 
                    class="form-control mb-3" 
                    placeholder="Escribe tus apellidos" 
                    required>
                    <input type="submit" value="Insertar" class="btn btn-primary">
                </form>
            </div>
            <div class="col-md-8">
                <div class="row">
                    <div class="col-12">
                        <h3 class="text-center">Lista de Alumnos</h3>
                    </div>
                </div>
                <table class="table">
                  <thead class="table-success table-striped">
                    <tr>
                        <th>Codigo</th>
                        <th>INE</th>
                        <th>Nombre</th>
                        <th>Apellidos</th>
                        <th>Acciones</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                        while($row = mysqli_fetch_array($query)){
                    ?>
                        <tr>
                            <td><?php echo $row['cod_estudiante']; ?></td>
                            <td><?php echo $row['ine']; ?></td>
                            <td><?php echo $row['nombre']; ?></td>
                            <td><?php echo $row['apellidos']; ?></td>
                            <td>
                                <a href="actualizar.php?id=<?php echo $row['cod_estudiante'] ?>" class="btn btn-warning">Editar</a>
                                !
                                <a href="delete.php?id=<?php echo $row['cod_estudiante'] ?>" class="btn btn-danger">Borrar</a>
                            </td>
                        </tr>
                    <?php
                        }
                    ?>
                  </tbody>
                </table>
            </div>
        </div>
    </div>
    
</body>
</html>