<?php 
/* 	
If you see this text in your browser, PHP is not configured correctly on this hosting provider. 
Contact your hosting provider regarding PHP configuration for your site.

PHP file generated by Adobe Muse CC 2017.0.2.363
*/

require_once('form_process.php');

$form = array(
	'subject' => 'Envío de Formulario Reservas',
	'heading' => 'Envío de nuevo formulario',
	'success_redirect' => '',
	'resources' => array(
		'checkbox_checked' => 'Marcada',
		'checkbox_unchecked' => 'No marcada',
		'submitted_from' => 'Formulario enviado desde el sitio web: %s',
		'submitted_by' => 'Dirección IP del visitante: %s',
		'too_many_submissions' => 'Se han realizado recientemente demasiados envíos a través de esta IP',
		'failed_to_send_email' => 'Error al enviar el correo electrónico',
		'invalid_reCAPTCHA_private_key' => 'Clave privada de reCAPTCHA no válida.',
		'invalid_reCAPTCHA2_private_key' => 'Clave privada de reCAPTCHA 2.0 no válida.',
		'invalid_reCAPTCHA2_server_response' => 'Respuesta de servidor de reCAPTCHA 2.0 no válida.',
		'invalid_field_type' => 'Tipo de campo desconocido: %s.',
		'invalid_form_config' => 'El campo \'%s\' contiene una configuración no válida.',
		'unknown_method' => 'Método de solicitud de servidor desconocido'
	),
	'email' => array(
		'from' => 'painter@adobe.com',
		'to' => 'painter@adobe.com'
	),
	'fields' => array(
		'custom_U12939' => array(
			'order' => 2,
			'type' => 'string',
			'label' => 'Name',
			'required' => true,
			'errors' => array(
				'required' => 'El campo \'Name\' es obligatorio.'
			)
		),
		'Email' => array(
			'order' => 4,
			'type' => 'email',
			'label' => 'Email',
			'required' => true,
			'errors' => array(
				'required' => 'El campo \'Email\' es obligatorio.',
				'format' => 'El campo \'Email\' contiene un correo electrónico no válido.'
			)
		),
		'custom_U12911' => array(
			'order' => 8,
			'type' => 'string',
			'label' => 'Message',
			'required' => false,
			'errors' => array(
			)
		),
		'custom_U12934' => array(
			'order' => 3,
			'type' => 'string',
			'label' => 'Mobile Phone',
			'required' => true,
			'errors' => array(
				'required' => 'El campo \'Mobile Phone\' es obligatorio.'
			)
		),
		'custom_U12921' => array(
			'order' => 5,
			'type' => 'string',
			'label' => 'Custom',
			'required' => true,
			'errors' => array(
				'required' => 'El campo \'Custom\' es obligatorio.'
			)
		),
		'custom_U12930' => array(
			'order' => 1,
			'type' => 'string',
			'label' => 'Custom',
			'required' => true,
			'errors' => array(
				'required' => 'El campo \'Custom\' es obligatorio.'
			)
		),
		'custom_U12943' => array(
			'order' => 7,
			'type' => 'string',
			'label' => 'Custom',
			'required' => true,
			'errors' => array(
				'required' => 'El campo \'Custom\' es obligatorio.'
			)
		),
		'custom_U12916' => array(
			'order' => 6,
			'type' => 'string',
			'label' => 'Custom',
			'required' => true,
			'errors' => array(
				'required' => 'El campo \'Custom\' es obligatorio.'
			)
		)
	)
);

process_form($form);
?>
