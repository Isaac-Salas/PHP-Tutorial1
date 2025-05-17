<?php
include("conexion.php");
$conn = conectar();
$id = $_GET['id'];
$sql = "SELECT * FROM alumnos WHERE cod_estudiante = '$id'";
$query = mysqli_query($conn, $sql);
$alumno = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto PHP - Update</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
    <div class="container mt-2">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center">Actualizar Datos</h1>
            </div>
        </div>
        <form action="update.php" method = "post">
            <input type="text" 
                    name = "cod_estudiante" 
                    class="form-control mb-3" 
                    value = "<?php echo $alumno['cod_estudiante'] ?>"
                    hidden>
            <input type="text" 
                    name = "ine" 
                    class="form-control mb-3" 
                    value = "<?php echo $alumno['ine'] ?>"
                    required>
            <input type="text" 
                    name = "nombre" 
                    class="form-control mb-3" 
                    value = "<?php echo $alumno['nombre'] ?>"
                    required>
            <input type="text" 
                    name = "apellidos" 
                    class="form-control mb-3" 
                    value = "<?php echo $alumno['apellidos'] ?>" 
                    required>
            <input type="submit" value="Actualizar" class="btn btn-primary btn-block">
            <button class="btn btn-dark btn-block" @onclick="window.location.href='index.php'">
                Regresar
            </button>
        </form>

    </div>
    
</body>
</html>