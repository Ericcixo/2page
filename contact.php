<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "tu-correo@gmail.com"; // CAMBIA ESTO POR TU EMAIL
    $subject = "NUEVO PEDIDO EN REVENDEFACIL";
    
    $email = $_POST['customer_email'];
    $platform = $_POST['platform'];
    $payment = $_POST['payment'];
    
    $message = "Detalles del pedido:\n\n";
    $message .= "Cliente: " . $email . "\n";
    $message .= "Plataforma: " . $platform . "\n";
    $message .= "Método de Pago: " . $payment . "\n";
    
    $headers = "From: webmaster@revendefacil.com";
    
    if(mail($to, $subject, $message, $headers)) {
        header("Location: gracias.html");
    } else {
        echo "Error al procesar el pedido.";
    }
}
?>
