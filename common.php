<?php

// Language definitions for frequently used strings
$lang_common = array(

// Text orientation and encoding
'lang_direction'					=>	'ltr', // ltr (Left-To-Right) or rtl (Right-To-Left)
'lang_identifier'					=>	'es',

// Number formatting
'lang_decimal_point'				=>	',',
'lang_thousands_sep'				=>	' ',

// Notices
'Bad request'						=>	'Solicitud incorrecta. El enlace que seguiste es incorrecto o está desactualizado.',
'No view'							=>	'No tienes permiso para ver estos foros.',
'No permission'						=>	'No tienes permiso para acceder a esta página.',
'Bad referrer'						=>	'HTTP_REFERER incorrecto. Fuiste referido a esta página por una fuente no autorizada. Si el problema persiste por favor asegúrate de que \'Base URL\' esté configurado correctamente en Administración/Opciones, y de que estés visitando el foro navegando a dicha URL. Se puede obtener más información sobre la comprobación del remitente en la documentación de FluxBB.',
'No cookie'							=>	'Al parecer iniciaste sesión de manera correcta; sin embargo, no se ha establecido una «cookie». Por favor comprueba los ajustes de tu navegador, y de ser necesario, habilita las «cookies» para este sitio.',
// Missing – SEARCH ME //
'Pun include extension'  			=>	'No se puede procesar %s «user include» desde la plantilla %s. Los archivos «%s» no están permitidos.',
'Pun include directory'				=>	'No se puede procesar %s «user include» desde la plantilla %s. Los directorios transversales no están permitidos.',
'Pun include error'					=>	'No se puede procesar user include %s desde la plantilla %s. No existe tal archivo ni en el directorio de plantillas ni en el directorio «include».',

// Miscellaneous
'Announcement'						=>	'Anuncio',
'Options'							=>	'Opciones',
'Submit'							=>	'Enviar', // "Name" of submit buttons
'Ban message'						=>	'Estás suspendido de este foro.',
'Ban message 2'						=>	'La suspensión termina a finales de',
'Ban message 3'						=>	'El administrador o moderador que te ha suspendido dejó el siguiente mensaje:',
'Ban message 4'						=>	'Por favor dirige cualquier consulta al administrador del foro en',
'Never'								=>	'Nunca',
'Today'								=>	'Hoy',
'Yesterday'							=>	'Ayer',
'Info'								=>	'Información', // A common table header
'Go back'							=>	'Volver',
'Maintenance'						=>	'Mantenimiento',
'Redirecting'						=>	'Redirigiendo',
'Click redirect'					=>	'Haz clic si no deseas esperar más (o si tu navegador no te dirige automáticamente)',
'on'								=>	'on', // As in "BBCode is on"
'off'								=>	'off',
'Invalid email'						=>	'La dirección de correo electrónica introducida es inválida.',
'Required'							=>	'(Requerido)',
'required field'					=>	'es un campo requerido en esta forma.', // For javascript form validation
'Last post'							=>	'Último mensaje',
'by'								=>	'por', // As in last post by some user
'New posts'							=>	'Mensajes nuevos', // The link that leads to the first new post
'New posts info'					=>	'Ir al primer mensaje nuevo en este tema.', // The popup text for new posts links
'Username'							=>	'Nombre de usuario',
'Password'							=>	'Contraseña',
'Email'								=>	'Correo electrónico',
'Send email'						=>	'Enviar correo electrónico',
'Moderated by'						=>	'Moderado por',
'Registered'						=>	'Registrado',
'Subject'							=>	'Asunto',
'Message'							=>	'Mensaje',
'Topic'								=>	'Tema',
'Forum'								=>	'Foro',
'Posts'								=>	'Mensajes',
'Replies'							=>	'Respuestas',
'Pages'								=>	'Páginas:',
'Page'								=>	'Página %s',
'BBCode'							=>	'BBCode:', // You probably shouldn't change this
'url tag'							=>	'[url] etiqueta:',
'img tag'							=>	'[img] etiqueta:',
'Smilies'							=>	'Emoticonos:',
'and'								=>	'y',
'Image link'						=>	'imagen', // This is displayed (i.e. <image>) instead of images when "Show images" is disabled in the profile
'wrote'								=>	'escribió:', // For [quote]'s
'Mailer'							=>	'%s Mailer', // As in "MyForums Mailer" in the signature of outgoing emails // NOT used in the Spanish translation anyway
'Important information'				=>	'Información importante',
'Write message legend'				=>	'Escribe tu mensaje y envíalo',
'Previous'							=>	'Anterior',
'Next'								=>	'Siguiente',
'Spacer'							=>	'…', // Ellipsis for paginate

// Title
'Title'								=>	'Título',
'Member'							=>	'Miembro', // Default title
'Moderator'							=>	'Moderador',
'Administrator'						=>	'Administrador',
'Banned'							=>	'Suspendido',
'Guest'								=>	'Invitado',

// Stuff for include/parser.php
'BBCode error no opening tag'		=>	'Se encontró [/%1$s] sin una [%1$s] correspondiente',
'BBCode error invalid nesting'		=>	'Se abrió [%1$s] dentro de [%2$s], esto no está permitido',
'BBCode error invalid self-nesting'	=>	'Se abrió [%s] dentro de sí misma, esto no está permitido',
'BBCode error no closing tag'		=>	'Se encontró [%1$s] sin una [/%1$s] correspondiente',
'BBCode error empty attribute'		=>	'La etiqueta [%s] tenía un sección de atributo vacía',
'BBCode error tag not allowed'		=>	'No tienes permitido utilizar etiquetas [%s]',
'BBCode error tag url not allowed'	=>	'No tienes permitido publicar enlaces',
'BBCode code problem'				=>	'Hay un problema con tus etiquetas [code]',
'BBCode list size error'			=>	'¡Tu lista es demasiado larga, por favor hazla más pequeña!',

// Stuff for the navigator (top of every page)
'Index'								=>	'Índice',
'User list'							=>	'Lista de miembros',
'Rules'								=>	'Reglas',
'Search'							=>	'Buscar',
'Register'							=>	'Registrarse',
'Login'								=>	'Entrar',
'Not logged in'						=>	'No has iniciado sesión.',
'Profile'							=>	'Perfil',
'Logout'							=>	'Salir',
'Logged in as'						=>	'Conectado como',
'Admin'								=>	'Administración',
'Last visit'						=>	'Última visita: %s',
'Topic searches'					=>	'Temas:',
'New posts header'					=>	'Nuevos',
'Active topics'						=>	'Activos',
'Unanswered topics'					=>	'Sin respuesta',
'Posted topics'						=>	'Participado',
'Show new posts'					=>	'Encuentra temas con nuevos mensajes desde tu última visita.',
'Show active topics'				=>	'Encuentra temas con mensajes recientes.',
'Show unanswered topics'			=>	'Encuentra temas sin respuestas.',
'Show posted topics'				=>	'Encuentra temas en los que hayas participado.',
'Mark all as read'					=>	'Marca todos los temas como leídos',
'Mark forum read'					=>	'Marcar este foro como leído',
'Title separator'					=>	' / ',

// Stuff for the page footer
'Board footer'						=>	'Pie de página',
'Jump to'							=>	'Saltar a',
'Go'								=>	' Ir ', // Submit button in forum jump
'Moderate topic'					=>	'Moderar tema',
'Move topic'						=>	'Mover tema',
'Open topic'						=>	'Abrir tema',
'Close topic'						=>	'Cerrar tema',
'Unstick topic'						=>	'Marcar como tema normal',
'Stick topic'						=>	'Marcar como importante',
'Moderate forum'					=>	'Moderar foro',
'Powered by'						=>	'Powered by %s',

// Debug information
'Debug table'						=>	'Información de depuración',
'Querytime'							=>	'Generado en %1$s segundos, %2$s consultas ejecutadas',
'Memory usage'						=>	'Uso de memoria: %1$s',
'Peak usage'						=>	'(Pico: %1$s)',
'Query times'						=>	'Tiempo (s)',
'Query'								=>	'Consulta',
'Total query time'					=>	'Tiempo total de consulta: %s',

// For extern.php RSS feed
'RSS description'					=>	'Los temas más recientes en %s.',
'RSS description topic'				=>	'Los mensajes más recientes en %s.',
'RSS reply'							=>	'Re: ', // The topic subject will be appended to this string (to signify a reply)
'RSS active topics feed'			=>	'RSS de los temas activos',
'Atom active topics feed'			=>	'Atom de los temas activos',
'RSS forum feed'					=>	'RSS del foro',
'Atom forum feed'					=>	'Atom del foro',
'RSS topic feed'					=>	'RSS del tema',
'Atom topic feed'					=>	'Atom del tema',

// Admin related stuff in the header
'New reports'						=>	'Hay nuevos reportes',
'Maintenance mode enabled'			=>	'¡Modo de mantenimiento habilitado!',

// Units for file sizes
'Size unit B'						=>	'%s B',
'Size unit KiB'						=>	'%s KiB',
'Size unit MiB'						=>	'%s MiB',
'Size unit GiB'						=>	'%s GiB',
'Size unit TiB'						=>	'%s TiB',
'Size unit PiB'						=>	'%s PiB',
'Size unit EiB'						=>	'%s EiB',

);
