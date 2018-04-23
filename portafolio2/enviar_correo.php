<?php 


    require('class_correo.php');



 
    
    //Mensaje vendedor
    $mensaje_vendedor = '<img src="cid:logo" alt="Logo" width="120">';
    $mensaje_vendedor .= '<h3>Contacto </h3>';
	$mensaje_vendedor .= '<h4>Datos del contacto</h4>';
	$mensaje_vendedor .= 'Nombre: '.$_POST['nombre'].'<br/>';
    $mensaje_vendedor .= 'Correo: '.$_POST['email'].'<br/>';
    $mensaje_vendedor .= 'Teléfono: '.$_POST['telefono'].'<br/>';
  
    $mensaje_vendedor .= 'Comentario: '.$_POST['mensaje'].'<br/><br/>'; 
   
    $mail_vendedor = 'erikaavalos@theloop.cl';
    //$mail_vendedor = 'eac1992@icloud.com';
    //$mail_vendedor = 'contacto-web@ingenieriarso.cl';
    $cc = '';
    enviar_correo($mail_vendedor, $mensaje_vendedor, $cc);
    
    //Mensaje cliente 
    $mensaje_cliente = '<img src="cid:logo" alt="Logo" width="120">';
    $mensaje_cliente .= '<h3>Contacto</h3>';
    $mensaje_cliente .= 'Estimado(a) '.$_POST['nombre'].', muchas gracias por contactarte  con nosotros.<br/><br/>';

    $mensaje_cliente .= 'Nos comunicaremos contigo a la brevedad';
    $cc = '';
	enviar_correo($_POST['email'], $mensaje_cliente, $cc);
	
	//Redireccionar al gracias por cotizar

	//session_destroy();
	header('Location: index.php');
	
	function enviar_correo($email, $mensaje, $cc){
	    $from = "contacto@e.avalos.laboratoriodiseno.cl";
        $mail = new PHPMailer();
        $mail->CharSet = 'UTF-8';
        $mail->setFrom($from, 'Portafolio');
        $mail->addAddress($email);
    	$mail->addCC($cc);
        $mail->Subject = 'Portafolio'; 
        $mail->msgHTML($mensaje);
        $mail->AddEmbeddedImage('assets/img/logo_correo.png', 'logo');
        if($mail->send()){
            return true;
        }
        return false;
    }	
    
    


 ?>