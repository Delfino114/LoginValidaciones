<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
    $p1 = $_POST['pass'];
    $p2 = $_POST['pass2'];

    if ($p1 !== $p2) 
    {
        echo "<script>alert('Confirma correctamente tu contraseña');</script>";
        exit;
    }

    $nombre = !empty($_POST['nombre']) ? htmlspecialchars(trim($_POST['nombre'])) : "El nombre es requerido";
    $edad = !empty($_POST['edad']) ? htmlspecialchars(trim($_POST['edad'])) : "La edad es requerida";
    $contraseña = !empty($_POST['pass']) ? htmlspecialchars(trim($_POST['pass'])) : "La contraseña es requerida";

    if ($nombre != "El nombre es requerido" && $edad != "La edad es requerida" && $contraseña != "La contraseña es requerida") 
    {
        
        $nombre = $_POST['nombre'];
        $contraseña = $_POST['pass'];
        $edad = $_POST['edad'];
        
        // Validacion de usuario y contraseña
        if ($nombre !== "luis" || $contraseña !== "mendoza" || $edad < 18) 
        {
            echo "Verifique que los datos sean los correctos (nombre o password)";
            exit;
        }

        echo "Hola, ¿cómo estás, " . $nombre . "? tu edad exactamente es: " . $edad;
    } 
    else 
    {
        echo "Por favor llena todos los campos solicitados que se encuentran en el formulario...";
    }
}
?>