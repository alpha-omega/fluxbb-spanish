<?php

// Language definitions used in admin_bans.php
$lang_admin_bans = array(

'No user message'			=>	'No existe ningún usuario registrado con ese nombre. Si deseas añadir una suspensión que no esté asociada con un nombre de usuario específico, simplemente deja vacío el campo de nombre de usuario.',
'No user ID message'		=>	'No existe ningún usuario registrado con ese ID.',
'User is admin message'		=>	'El usuario %s es un administrador, y no puede ser suspendido. Si deseas suspender a un administrador, primero debes relegarlo/a.',
'User is mod message'		=>	'El usuario %s es un moderador, y no puede ser suspendido. Si deseas suspender a un moderador, primero debes relegarlo/a.',
'Must enter message'		=>	'Debes introducir ya sea un nombre de usuario, una dirección IP, o una dirección de correo electrónico (al menos).',
'Cannot ban guest message'	=>	'El usuario invitado no puede ser suspendido.',
'Invalid IP message'		=>	'Ingresaste una dirección IP inválida, o un rango de direcciones IP inválido.',
'Invalid e-mail message'	=>	'La dirección de correo electrónico (ejemplo: usuario@domino.com), o el dominio parcial de la dirección de correo electrónico (ejemplo: dominio.com) que ingresaste son inválidos.',
'Invalid date message'		=>	'Ingresaste una fecha de expiración inválida.',
'Invalid date reasons'		=>	'El formato debe ser AAAA-MM-DD, y la fecha debe ser al menos un día en el futuro.',
'Ban added redirect'		=>	'Suspensión añadida. Redirigiendo……' ,
'Ban edited redirect'		=>	'Suspensión editada. Redirigiendo…',
'Ban removed redirect'		=>	'Suspensión removida. Redirigiendo…',

'New ban head'				=>	'Nueva suspensión',
'Add ban subhead'			=>	'Añadir suspensión',
'Username label'			=>	'Nombre de usuario',
'Username help'				=>	'El usuario que se va a suspender (no distingue entre mayúsculas y minúsculas).',
'Username advanced help'	=>	'El usuario que se va a suspender (no distingue entre mayúsculas y minúsculas). La siguiente página te permitirá introducir una IP personalizada, y una dirección de correo electrónico. Si únicamente deseas suspender a una IP o un rango de IPs específico, o una dirección de correo electrónico, simplemente deja este campo vacío.',

'Ban search head'			=>	'Búsqueda de suspensiones',
'Ban search subhead'		=>	'Ingresa el criterio de búsqueda',
'Ban search info'			=>	'Busca suspensiones en la base de datos. Puedes introducir uno o más términos para buscar. Los comodines en forma de asterisco (*) son aceptados. Para mostrar todas las suspensiones, deja todos los campos vacíos.',
'Date help'					=>	'(aaaa-mm-dd)',
'Message label'				=>	'Mensaje',
'Expire after label'		=>	'Expira después',
'Expire before label'		=>	'Expira antes',
'Order by label'			=>	'Ordenar por',
'Order by username'			=>	'Nombre de usuario',
'Order by ip'				=>	'IP',
'Order by e-mail'			=>	'Correo electrónico',
'Order by expire'			=>	'Fecha de expiración',
'Ascending'					=>	'Ascendente',
'Descending'				=>	'Descendente',
'Submit search'				=>	'Enviar búsqueda',

'E-mail label'				=>	'Correo electrónico',
'E-mail help'				=>	'El correo electrónico o dominio de correo electrónico que deseas suspender (ejemplo: usuario@dominio.com o dominio.com). Véase «Permitir direcciones de correo electrónico suspendidas» en Permisos para obtener más información.',
'IP label'					=>	'Dirección IP o rango de IPs',
'IP help'					=>	'La dirección IP, o el rango de direcciones IP que deseas suspender (ejemplo 150.11.110.1 o 150.11.110). Separa las direcciones con espacios. Si una IP ya se ha ingresado, es la última dirección IP conocida de este usuario en la base de datos.',
'IP help link'				=>	'Haz clic en %s para ver las estadísticas de IP para este usuario.',
'Ban advanced head'			=>	'Configuración avanzada de suspensión',
'Ban advanced subhead'		=>	'Complementar suspensión con una IP y correo electrónico',
'Ban message label'			=>	'Mensaje de suspensión',
'Ban message help'			=>	'Un mensaje que será mostrado al usuario suspendido cuando visite el foro.',
'Message expiry subhead'	=>	'Mensaje de suspensión y fecha de expiración',
'Ban IP range info'			=>	'Debes tener mucho cuidado cuando suspendas rangos de IPs, pues existe la posibilidad de que múltiples usuarios coincidan con la misma IP parcial.',
'Expire date label'			=>	'Fecha de expiración',
'Expire date help'			=>	'La fecha en que esta suspensión será automáticamente removida (formato: aaaa-mm-dd). Deja en blanco para removerla manualmente.',

'Results head'				=>	'Buscar resultados',
'Results username head'		=>	'Nombre de usuario',
'Results e-mail head'		=>	'Correo electrónico',
'Results IP address head'	=>	'Dirección IP o rango de IPs',
'Results expire head'		=>	'Expira',
'Results message head'		=>	'Mensaje',
'Results banned by head'	=>	'Suspendido por',
'Results actions head'		=>	'Acciones',
'No match'					=>	'No hay coincidencias',
'Unknown'					=>	'Desconocido',

);
