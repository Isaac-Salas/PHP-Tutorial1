<?php
    function conectar() {
        $host = "localhost";
        $user = "root";
        $pass = "root";
        $bd = "proyectophp";
        $conn = mysqli_connect($host, $user, $pass);
        mysqli_select_db($conn, $bd); // <-- aquí se pasa $conn primero
        return $conn;
    }
?>