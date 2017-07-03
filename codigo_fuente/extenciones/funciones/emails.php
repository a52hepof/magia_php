<?php

/**
 * Para la gestion de los emails
 */
function emails_pedidos_crear($pedidos_email, $body) {
    global $email_usuario, $email_nombre, $email_cc_usuario, $email_cc_nombre, $config_nombre_web, $config_direccion, $config_nombre_web, $config_tel;
    // recibo el id del pedido 
    // saco el email del pedido
    // obtengo el email de admin de la web
    // obtengo los detalles del pedido
    // 
    //echo "<p>email cliente: ". pedidos_campo_segun_email('email', $email)."</p>"; 
    //echo "<p>email cliente: ". pedidos."</p>"; 
    //echo "Un nueo pedido";

    // Datos del cliente segun email 
    $pedidos_empresa = pedidos_campo_segun_email('empresa', $pedidos_email);
    $pedidos_cliente = pedidos_campo_segun_email('cliente', $pedidos_email);

    /**
     * This example shows sending a message using PHP's mail() function.
     */
    require '../includes/PHPMailer-5.2.23/PHPMailerAutoload.php';


//Create a new PHPMailer instance
    $mail = new PHPMailer;
//Set who the message is to be sent from
    $mail->setFrom("robinson@facturas.be", 'robin');
//Set an alternative reply-to address
    // Este es el email del cliente
    $mail->addReplyTo($pedidos_email, $pedidos_cliente);
//Set who the message is to be sent to
    $mail->addAddress('robinson@facturas.be', "Robin Coello San");
//Set the subject line
    $mail->Subject = "$config_nombre_web : Order";
//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body

    /*
    $body = "";
    $body .= "<p>" . _tr("Hola") . ",</p>";
    $body .= "<p>" . _tr("Un nuevo pedido se a registrado en el sistema") . "</p>";
    $body .= '<table border=0 width="600">';
    $body .= '<tr><td colspan=3><h2>' . _tr('Detalles del pedido') . '</h2></td></tr>';
    $body .= '<tr bgcolor="#F5EFFB"><td><b>' . _tr('Items') . '</b></td><td><b>' . _tr('Valor') . '</b></td></tr>';
    $i = 0;
    foreach ($_POST as $key => $value) {

        $color = ($i % 2 == 0) ? "#F5EFFB" : "#ffffff";

        if ($i > 0 && $value) {
            $body .= '<tr bgcolor="' . $color . '"><td width="40%">' . $i . ' : <font color="#2E64FE">' . _tr($key) . '</font> </td><td>' . $value . ' </td></tr>';
            if ($i % 5 == 0) {
                //    $body .=  '<tr bgcolor="'.$color.'"><td width="40%"><font color="#2E64FE">.</font> </td><td>.</td></tr>';     
            }
        }
        $i++;
    }
    $body .= '<tr bgcolor="#F5EFFB"><td colspan="3"> .</td></tr>';
    $body .= "</table>";
    $body .= "<p></p>";
    $body .= "<h2>$config_nombre_web</h2>";
    $body .= "<p>$config_direccion</p>";
    $body .= "<p>$config_tel</p>";

*/





    $mail->msgHTML($body);
    // $mail->msgHTML(file_get_contents('../gestion/emails/vista/pedido_nuevo.php'), dirname(__FILE__));
//Replace the plain text body with one created manually
    $mail->AltBody = 'This is a plain-text message body';
//Attach an image file
    //  $mail->addAttachment('images/phpmailer_mini.png');
//send the message, check for errors
    if (!$mail->send()) {
        echo "Mailer Error: " . $mail->ErrorInfo;
    } else {
        echo "Message sent!";
        //echo "<hr>!";
        //echo "Ref: $pedidos_email";
    }
}
