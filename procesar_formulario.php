<?php
// Verifica si se ha enviado una solicitud POST
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Accede a los datos del formulario enviados mediante POST
    $comidaPollo = $_POST["ComidaPollo"];
    $porcionesPollo = $_POST["cantporcionpollo"];
    $comidaCarne = $_POST["ComidaCarne"];
    $porcionesCarne = $_POST["cantporcioncarne"];

    // Realiza las operaciones necesarias con los datos recibidos

    // Envía una respuesta al cliente
    echo "¡Solicitud POST recibida correctamente!";
}
?>
