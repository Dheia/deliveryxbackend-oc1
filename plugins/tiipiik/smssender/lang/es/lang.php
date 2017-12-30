<?php

return [
    'backend'=> [
        'from_label'=>'Remitente',
        'from_ph'=>'Use número internacional. Ej. +591',
        'from_comment'=>'Especifique el nombre del remitente.',
        
        'gateways_label'=>'Gateways',
        'gateways_comment'=>'Seleccione el gateway de SMS',
        'gateways_ph'=>'-- Seleccionar --',
        'clickatell_tab'=>'Clickatell',
        'twilio_tab'=>'Twilio',
        
        'clickatell_username'=>'Useario',
        'clickatell_username_ph'=>'Usuario de Clickatell',
        'clickatell_username_comment'=>'Nombre de usuario Clickatell',
        
        'clickatell_passwd'=>'Password',
        'clickatell_passwd_ph'=>'Contraseña de Clickatell',
        'clickatell_passwd_comment'=>'La contraseña de Clickatell',
        
        'clickatell_api_id'=>'API ID',
        'clickatell_api_id_ph'=>'Ingrese el API ID de Clickatell',
        'clickatell_api_id_comment'=>'API ID provisto por Clickatell',
        
        'clickatell_api_url'=>'API URL',
        'clickatell_api_url_ph'=>'URL Api Clickatell',
        'clickatell_api_url_comment'=>'Modifique esta opción solo si está seguro de lo que hace',
        
        'twilio_account_id'=>'AccountSid',
        'twilio_account_id_ph'=>'AccountSid de Twilio',
        'twilio_account_id_comment'=>'AccountSid provided by Twilio (www.twilio.com/user/account)',
        
        'twilio_token'=>'AuthToken',
        'twilio_token_ph'=>'Twilio AuthToken',
        'twilio_token_comment'=>'AuthToken provisto por Twilio (www.twilio.com/user/account)',
    ]
];