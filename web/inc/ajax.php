<?php 
/*
 * AJAX FUNCTIONS
 * Funciones que se ejecutan por ajax
 * 
*/
require_once 'functions.php';

//chequea si es peticion de ajax y ejecuta la funcion
if( isAjax() ) :

	$function = isset($_POST['function']) ? $_POST['function'] : '';

	switch ( $function ) {

		case 'get-form':

			$form = array();
			$form['formulario'] = isset($_POST['formulario']) ? $_POST['formulario'] : '';
			$form['page'] = isset($_POST['page']) ? $_POST['page'] : '';
			
			getTemplate( 'formulario', $form );

		break;

		case 'send-form':
			
			$respuesta = array('mensaje' => MENSAJEEXITO);
			$formulario = $_POST['formulario'];

			$contenido = makeMsj($_POST);
			// Valores enviados desde el formulario
			$paquete = isset($_POST['valores']['paquete']) ? $_POST['valores']['paquete'] : '';
			$emailReplyTo = isset($_POST['valores']['email']) ? $_POST['valores']['email'] : '';
			$nombreReplyTo = isset($_POST['valores']['name']) ? $_POST['valores']['name'] : '';;
			$emailTo = EMAILDEFAULT;
			$nombreTo = 'Fleek';
			$asunto = ASUNTODEFAULT;

			if ( $paquete != '' ) {
				$asunto .= ' - ' . $paquete;
			}

			if ( $formulario != '' ) {
				$asunto .= ' - ' . $formulario;
			}

			//FUNCION QUE ENVIA FORMULARIO CON PHPMAILER			
			$status = sendEmailPhpMailer( $emailReplyTo, $nombreReplyTo, $emailTo, $nombreTo, $asunto, $contenido);

			//guardar en base de datos
			//saveNewContact ( $nombre, $telefono, $email, $mensaje, $fecha_viaje, 'contacto' );
			
			if ( $status == 'ok') {
				$respuesta['status'] = $status;
			} else {
				$respuesta['error'] = $status;
				$respuesta['status'] = 'error';
				$respuesta['mensaje'] = MENSAJEERROR;
			}
			
			echo json_encode($respuesta);
			
		break;

		case 'load-template':
			$template = isset($_POST['template']) ? $_POST['template'] : null;
			$page = isset($_POST['pagina']) ? $_POST['pagina'] : 'inicio';

			if ( $template != null ) {
				getTemplate($template, $page);
			}

		break;

	}

	
//sino es peticion ajax se cancela
else :
    throw new Exception("Error Processing Request", 1);   
endif;