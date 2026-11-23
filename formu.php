<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $nombre = $_POST["nombre"] ?? "";
    $contrasena = $_POST["contrasena"] ?? "";
    $genero = $_POST["genero"] ?? "";
    $correo = $_POST["correo"] ?? "";
    $materia = $_POST["materia"] ?? "";

    if (
        empty($nombre) ||
        empty($contrasena) ||
        empty($genero) ||
        empty($correo) ||
        empty($materia)
    ) {
        echo "Debe completar todos los campos.";
        exit;
    }

    echo "<h1>Datos recibidos correctamente</h1>";

    echo "Nombre: " . htmlspecialchars($nombre) . "<br>";
    echo "Correo: " . htmlspecialchars($correo) . "<br>";
    echo "Género: " . htmlspecialchars($genero) . "<br>";
    echo "Materia: " . htmlspecialchars($materia) . "<br>";

    echo "<p>La contraseña fue recibida correctamente.</p>";

} else {

    echo "No se enviaron datos desde el formulario.";

}

?>