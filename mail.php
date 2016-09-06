<?php
    
    $asunto = "Probando funcion mail de PHP";
    $destino = "tu_correo_destino@example.com";
    $mensaje = "Este mensaje puede contener <strong>etiquetas html</strong>";

    // Para enviar un correo HTML, debe establecerse la cabecera Content-type
    $cabeceras  = 'MIME-Version: 1.0' . "\r\n";
    $cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

    // Cabeceras adicionales
    $cabeceras .= 'To: Maria <maria@example.com>, Luis <luis@example.com>' . "\r\n"; //direccion de respuesta
    $cabeceras .= 'From: Recordatorio <administrador@programadorphp.pe>' . "\r\n";
    $cabeceras .= 'Cc: jose@example.com' . "\r\n"; //con copia
    $cabeceras .= 'Bcc: pedro@example.com' . "\r\n"; // con copia oculta


    if(mail($destino, $asunto, $mensaje, $cabeceras)){
        echo "Mensaje enviado con éxito";
    }else{
        echo "Error al enviar mensaje";
    }
?>
