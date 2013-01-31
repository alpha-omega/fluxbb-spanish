<?php

// Language definitions used in admin_options.php
$lang_admin_options = array(

'Bad HTTP Referer message'			=>	'HTTP_REFERER incorrecto. Si moviste estos foros de una locación a otra, o cambiaste dominios, necesitas actualizar la URL base manualmente in la base de datos (busca o_base_url en la tabla config), y luego limpia el caché eliminando todos los archivos .php en el directorio /cache.',
'Must enter title message'			=>	'Debes introducir un título para el foro.',
'Invalid e-mail message'			=>	'El correo electrónico de administrador que ingresaste es inválido.',
'Invalid webmaster e-mail message'	=>	'El correo electrónico de webmaster que ingresaste es inválido.',
'SMTP passwords did not match'		=>	'Necesitas ingresar la contraseña SMTP dos veces y de manera exactamente igual para poder cambiarla.',
'Enter announcement here'			=>	'Introduce tu anuncio aquí.',
'Enter rules here'					=>	'Introduce tus reglas aquí.',
'Default maintenance message'		=>	'El foro está temporalmente fura de servicio por mantenimiento. Por favor inténtalo nuevamente en unos minutos.',
'Timeout error message'				=>	'El valor de «Tiempo de espera de conexión» debe ser menor que el valor de «Tiempo de espera de visita».',
'Options updated redirect'			=>	'Opciones actualizadas. Redirigiendo…',
'Options head'						=>	'Opciones',

// Essentials section
'Essentials subhead'				=>	'Esenciales',
'Board title label'					=>	'Título del foro',
'Board title help'					=>	'El título de este foro de discusión (mostrado en la parte superior de cada página). Este campo puede <strong>no</strong> puede contener HTML.',
'Board desc label'					=>	'Descripción del foro',
'Board desc help'					=>	'Una breve descripción de este foro de discusión (mostrada en la parte superior de cada página). Este campo puede contener HTML.',
'Base URL label'					=>	'URL base',
'Base URL help'						=>	'La URL completa del foro, sin barra diagonal final (por ejemplo: http://www.midominio.com/foro). Esto <strong>debe</strong> ser correcto para que todas las funciones de administración y moderación funcionen. Si recibes errores «Bad referer», probablemente sea incorrecto.',
'Timezone label'					=>	'Zona horaria predeterminada',
'Timezone help'						=>	'La zona horaria por defecto para invitados y usuarios que intenten registrarse en el foro.',
'DST label'							=>	'Ajustar para horario de verano',
'DST help'							=>	'Verifica si el horario de verano está en efecto (avanza el reloj una hora).',
'Language label'					=>	'Idioma predeterminado',
'Language help'						=>	'El idioma por defecto para invitados y miembros que no han modificado la opción predeterminada en su perfil. Si eliminas un paquete de idioma, esto debe ser actualizado.',
'Default style label'				=>	'Estilo predeterminado',
'Default style help'				=>	'El estilo por defecto para invitados y usuarios que no han modificado la opción predeterminada en su perfil.',

// Essentials section timezone options
'UTC-12:00'         =>  '(UTC-12:00) Línea internacional de cambio de fecha',
'UTC-11:00'         =>  '(UTC-11:00) Niue, Samoa Americana',
'UTC-10:00'         =>  '(UTC-10:00) Hawái, Islas Cook',
'UTC-09:30'         =>  '(UTC-09:30) Islas marquesas',
'UTC-09:00'         =>  '(UTC-09:00) Alaska, Islas Gambier',
'UTC-08:30'         =>  '(UTC-08:30) Islas Pitcairn',
'UTC-08:00'         =>  '(UTC-08:00) Pacífico',
'UTC-07:00'         =>  '(UTC-07:00) Montaña',
'UTC-06:00'         =>  '(UTC-06:00) Centro',
'UTC-05:00'         =>  '(UTC-05:00) Este',
'UTC-04:00'         =>  '(UTC-04:00) Atlántico',
'UTC-03:30'         =>  '(UTC-03:30) Terranova y Labrador',
'UTC-03:00'         =>  '(UTC-03:00) Amazonas, Groenlandia Central',
'UTC-02:00'         =>  '(UTC-02:00) Atlántico',
'UTC-01:00'         =>  '(UTC-01:00) Islas Azores, Cabo Verde, Groenladia Oriental',
'UTC'           =>  '(UTC) Europa Occidental, Greenwich',
'UTC+01:00'         =>  '(UTC+01:00) Europa central, África Occidental',
'UTC+02:00'         =>  '(UTC+02:00) Europa del este, África Central',
'UTC+03:00'         =>  '(UTC+03:00) África Oriental',
'UTC+03:30'         =>  '(UTC+03:30) Irán',
'UTC+04:00'         =>  '(UTC+04:00) Moscú, Samara',
'UTC+04:30'         =>  '(UTC+04:30) Afganistán',
'UTC+05:00'         =>  '(UTC+05:00) Pakistán',
'UTC+05:30'         =>  '(UTC+05:30) India, Sri Lanka',
'UTC+05:45'         =>  '(UTC+05:45) Nepal',
'UTC+06:00'         =>  '(UTC+06:00) Bangladesh, Bután, Ekaterimburgo',
'UTC+06:30'         =>  '(UTC+06:30) Islas Cocos, Myanmar',
'UTC+07:00'         =>  '(UTC+07:00) Indochina, Novosibirsk',
'UTC+08:00'         =>  '(UTC+08:00) China, Australia Occidental, Krasnoyarsk',
'UTC+08:45'         =>  '(UTC+08:45) Australia Occidental',
'UTC+09:00'         =>  '(UTC+09:00) Japón, Corea, Palaos, Irkutsk',
'UTC+09:30'         =>  '(UTC+09:30) Australia Meridional',
'UTC+10:00'         =>  '(UTC+10:00) Australia',
'UTC+10:30'         =>  '(UTC+10:30) Islas Lord Howe',
'UTC+11:00'         =>  '(UTC+11:00) Islas Salomón, Micronesia, Vanuatu',
'UTC+11:30'         =>  '(UTC+11:30) Isla Norfolk',
'UTC+12:00'         =>  '(UTC+12:00) Nueva Zelanda, Fiyi, Magadan',
'UTC+12:45'         =>  '(UTC+12:45) Islas Chatham',
'UTC+13:00'         =>  '(UTC+13:00) Tonga, Islas Phoenix, Kamchatka',
'UTC+14:00'         =>  '(UTC+14:00) Islas de la línea',

// Timeout Section
'Timeouts subhead'					=>	'Fecha y tiempos de espera',
'Time format label'					=>	'Formato de fecha',
'PHP manual'						=>	'manual de PHP',
'Time format help'					=>	'[Formato actual: %s]. Ver el %s para conocer las opciones de formato.',
'Date format label'					=>	'Formato de fecha',
'Date format help'					=>	'[Formato actual: %s]. Ver %s para conocer las opciones de formato.',
'Visit timeout label'				=>	'Tiempo de espera de visita',
'Visit timeout help'				=>	'Número de segundos que un usuario debe estar inactivo antes de que la información de su visita sea actualizada (afecta primariamente a los indicadores de nuevos mensajes).',
'Online timeout label'				=>	'Tiempo de espera de conexión',
'Online timeout help'				=>	'Número de segundos que un usuario debe estar inactivo antes de que sea removido de la lista de usuarios conectados.',
'Redirect time label'				=>	'Tiempo de redirección',
'Redirect time help'				=>	'Número de segundos de espera al redirigir. Si se indica 0, la página de redirección no se mostrará (no recomendado).',

// Display Section
'Display subhead'					=>	'Visualización',
'Version number label'				=>	'Número de versión',
'Version number help'				=>	'Muestra la versión de FluxBB en el pie de página.',
'Info in posts label'				=>	'Información del usuario en los mensajes',
'Info in posts help'				=>	'Muestra información sobre el autor bajo el nombre de usuario en la vista de tema. La información afectada afectada es: ubicación, fecha de registro, número de mensajes, y enlaces de contacto (correo electrónico y URL).',
'Post count label'					=>	'Número de mensajes de usuario',
'Post count help'					=>	'Muestra el número de mensajes que el usuario ha realizado (afecta a la vista de tema, perfil, y lista de usuarios).',
'Smilies label'						=>	'Emoticonos en mensajes',
'Smilies help'						=>	'Convierte emoticonos a pequeños íconos gráficos.',
'Smilies sigs label'				=>	'Emoticonos y firmas',
'Smilies sigs help'					=>	'Convierte emoticonos a pequeños íconos gráficos en las firmas de usuario.',
'Clickable links label'				=>	'Convertir enlaces en hipervínculos',
'Clickable links help'				=>	'Cuando está habilitado, FluxBB automáticamente detectará cualquier URL en los mensajes, y las convertirá en hipervínculos en los cuales se puede hacer clic.',
'Topic review label'				=>	'Revisión de tema',
'Topic review help'					=>	'Número máximo de mensajes a mostrar cuando al publicar una respuesta (los más nuevos primero). Elige 0 para deshabilitar.',
'Topics per page label'				=>	'Temas por página',
'Topics per page help'				=>	'El número predeterminado de temas a mostrar por página en un foro. Los usuarios pueden personalizar este ajuste.',
'Posts per page label'				=>	'Mensajes por página',
'Posts per page help'				=>	'El número predeterminado de mensajes a mostrar por página en un tema. Los usuarios pueden personalizar este ajuste.',
'Indent label'						=>	'Tamaño de sangría',
'Indent help'						=>	'Si se elige 8, una tabulación regular se utilizará cuando se muestre texto dentro de la etiqueta [code][/code]. De lo contrario, esta cantidad de espacios se usarán para sangrar el texto.',
'Quote depth label'					=>	'Máxima profundidad para la etiqueta [quote]',
'Quote depth help'					=>	'La máxima cantidad de veces que una etiqueta [quote] puede aparecer dentro de otras etiquetas [quote], cualquier etiqueta que se encuentre a mayor profundidad que esto será descartada.',

// Features section
'Features subhead'					=>	'Funciones',
'Quick post label'					=>	'Respuesta rápida',
'Quick post help'					=>	'Cuando se habilita, FluxBB añadirá un formulario de respuesta rápida al inferior de los temas. De esta manera, los usuarios pueden publicar directamente desde la vista de tema.',
'Users online label'				=>	'Usuarios conectados',
'Users online help'					=>	'Muestra información en el índice acerca de invitados y usuarios registrados que actualmente se encuentren navegando en el foro.',
'Censor words label'				=>	'Censurar palabras',
'Censor words help'					=>	'Habilita esto para censurar palabras específicas en el foro. Ver %s para obtener más información.',
'Signatures label'					=>	'Firmas',
'Signatures help'					=>	'Permitir a los usuarios adjuntar una firma a sus mensajes.',
'User has posted label'				=>	'El usuario ha publicado antes',
'User has posted help'				=>	'Esta función muestra un punto frente a los temas en viewforum.php, en caso de que el usuario conectado actualmente haya publicado en dicho tema con anterioridad. Deshabilita en caso de experimentar una alta carga del servidor.',
'Topic views label'					=>	'Vista de temas',
'Topic views help'					=>	'Llevar un conteo de la cantidad de veces que se ha visto un tema. Deshabilita en caso de experimentar una alta carga del servidor en un foro con mucha actividad.',
'Quick jump label'					=>	'Salto rápido',
'Quick jump help'					=>	'Habilita la función de salto rápido (ir al foro) en el menú desplegable.',
'GZip label'						=>	'GZip de salida.',
'GZip help'							=>	'Si esta habilitado, FluxBB comprimirá el contenido enviado a los navegadores como gzip. Esto reducirá el uso de banda ancha, pero utilizará un poco más de CPU. Esta función requiere que PHP esté configurado con zlib (--with-zlib). Nota: Si ya cuentas con uno de los módulos de Apache, mod_gzip o mod_deflate configurados para comprimir scripts de PHP, deberías deshabilitar este función.',
'Search all label'					=>	'Buscar en todos los foros',
'Search all help'					=>	'Cuando está deshabilitado, las búsquedas solo se permitirán en un foro a la vez. Deshabilita si la carga del servidos es alta debido a búsquedas excesivas.',
'Menu items label'					=>	'Elementos de menú adicionales',
'Menu items help'					=>	'Al introducir hipervínculos HTML en esta caja de texto, cualquier número de elementos pueden ser añadidos al menú de navegación en la parte superior de todas las páginas. El formato para añadir nuevos enlaces es X = &lt;a href="URL"&gt;ENLACE&lt;/a&gt; donde X es la posición en la cual debe insertarse el enlace (por ejemplo: 0 para insertar al principio, y 2 para insertar después de «Lista de usuarios»). Separa las entradas con un salto de línea.',

// Feeds section
'Feed subhead'						=>	'Sindicación',
'Default feed label'				=>	'Tipo fuente predeterminado',
'Default feed help'					=>	'Selecciona el tipo de fuente de sindicación para mostrar. Nota: elegir «ninguno» no deshabilitará las fuentes, solamente las ocultará por defecto.',
'None'								=>	'Ninguna',
'RSS'								=>	'RSS',
'Atom'								=>	'Atom',
'Feed TTL label'					=>	'Duración del caché de las fuentes',
'Feed TTL help'						=>	'Las fuentes se pueden almacenar en caché para reducir el uso de recursos.',
'No cache'							=>	'No almacenar en caché',
'Minutes'							=>	'%d minutos',

// Reports section
'Reports subhead'					=>	'Reportes',
'Reporting method label'			=>	'Método de reporte',
'Internal'							=>	'Interno',
'By e-mail'							=>	'Correo electrónico',
'Both'								=>	'Ambos',
'Reporting method help'				=>	'Selecciona el método para manejar los reportes de temas/mensajes. Puedes elegir si es que los reportes se manejarán por el sistema de reportes internos, se enviarán por correo electrónico a las direcciones de la lista de correo (ver abajo), o ambos.',
'Mailing list label'				=>	'Lista de correo',
'Mailing list help'					=>	'Una lista de suscriptores, separada por comas. La gente en esta lista son los destinatarios de los reportes.',

// Avatars section
'Avatars subhead'					=>	'Avatares',
'Use avatars label'					=>	'Utilizar avatares',
'Use avatars help'					=>	'Cuando está habilitado, los usuarios podrán cargar un avatar, el cual se mostrará bajo su título.',
'Upload directory label'			=>	'Directorio de carga',
'Upload directory help'				=>	'El directorio donde se almacenarán los avatares (relativo al directorio raíz de FluxBB). PHP debe contar con permisos de escritura en este directorio.',
'Max width label'					=>	'Ancho máximo',
'Max width help'					=>	'El ancho máximo permitido para los avatares, en pixeles (se recomienda 60).',
'Max height label'					=>	'Altura máxima',
'Max height help'					=>	'La altura máxima permitida para los avatares, en pixeles (se recomienda 60).',
'Max size label'					=>	'Tamaño máximo',
'Max size help'						=>	'El tamaño máximo permitido para los avatares, en bytes (se recomienda 10240).',

// E-mail section
'E-mail subhead'					=>	'Correo electrónico',
'Admin e-mail label'				=>	'Correo electrónico del administrador',
'Admin e-mail help'					=>	'La dirección de correo electrónico del administrador del foro.',
'Webmaster e-mail label'			=>	'Correo del webmaster',
'Webmaster e-mail help'				=>	'Esta es la dirección que se mostrará en todos los correos electrónicos enviados por le foro.',
'Forum subscriptions label'			=>	'Suscripciones de foro',
'Forum subscriptions help'			=>	'Permite a los usuarios suscribirse a los foros (recibir correos electrónicos cuando alguien crea un nuevo tema).',
'Topic subscriptions label'			=>	'Suscripciones de tema',
'Topic subscriptions help'			=>	'Permite a los usuarios suscribirse a los temas (recibir correos electrónicos cuando alguien responde).',
'SMTP address label'				=>	'Dirección del servidor SMTP',
'SMTP address help'					=>	'La dirección de un servidor SMTP externo para enviar correos electrónicos. Puedes especificar un número de puerto personalizado, si el servidor SMTP no utiliza el puerto por defecto 25 (ejemplo: correo.servidor.com:3580). Deja en blanco para utilizar el programa local de correo electrónico.',
'SMTP username label'				=>	'Nombre de usuario SMTP',
'SMTP username help'				=>	'Nombre de usuario para el servidor SMTP. Solamente ingresa un nombre de usuario en caso de ser requerido por el servidor SMTP (la mayoría de los servidores <strong>no</strong> requieren autenticación).',
'SMTP password label'				=>	'Contraseña SMTP',
'SMTP change password help'			=>	'Marca esta opción si deseas cambiar o eliminar la contraseña actualmente almacenada.',
'SMTP password help'				=>	'Contraseña para el servidor SMTP. Introduce una contraseña únicamente en caso de ser requerida por el servidor SMTP (la mayoría de los servidores <strong>no</strong> requieren autenticación). Por favor ingresa tu contraseña dos veces para confirmar.',
'SMTP SSL label'					=>	'Cifrar SMTP utilizando SSL',
'SMTP SSL help'						=>	'Utiliza cifrado en la conexión con el servidor SMTP, usando SSL. Solo debería utilizarse si tu servidor SMTP lo requiere, y si tu versión de PHP cuenta con soporte para SSL.',

// Registration Section
'Registration subhead'				=>	'Registro',
'Allow new label'					=>	'Permitir nuevos registros.',
'Allow new help'					=>	'Controla si este foro acepta nuevos registros. Deshabilita únicamente bajo circunstancias especiales.',
'Verify label'						=>	'Verificar registros',
'Verify help'						=>	'Cuando se habilita, se envía a los usuarios una contraseña aleatoria al momento de registrarse. Después pueden iniciar sesión y cambiar su contraseña en su perfil, si lo consideran oportuno. Esta función también requiere que los usuarios verifiquen nuevas direcciones de correo electrónico se deciden cambiar la dirección con la cual se registraron. Esta es una manera efectiva de evitar el abuso en los registros, y asegurarse de que todos los usuarios tengan la dirección de correo electrónico «correcta» en sus perfiles.',
'Report new label'					=>	'Reportar nuevos registros',
'Report new help'					=>	'Si está habilitado, FluxBB notificará a los usuarios en la lista de correo (ver arriba) cuando un nuevo usuario se registre en el foro.',
'Use rules label'					=>	'Reglas del foro',
'Use rules help'					=>	'Cuando está habilitado, los usuarios deben aceptar un conjunto de reglas al momento de registrarse (introduce el texto debajo). Estas reglas siempre estarán disponibles a través de un enlace en la tabla de navegación, en la parte superior de cada página.',
'Rules label'						=>	'Ingresa tus reglas aquí',
'Rules help'						=>	'Aquí puedes introducir cualquier regla, u otra información que el usuario debe revisar y aceptar al registrarse. Si habilitaste las reglas arriba, debes ingresar algo aquí, de lo contrario se deshabilitará. Este texto no será procesado como los mensajes normales, y por tanto puede contener HTML.',
'E-mail default label'				=>	'Ajuste de correo electrónico predeterminado',
'E-mail default help'				=>	'Elige el ajuste de privacidad por defecto para los registros de nuevos usuarios.',
'Display e-mail label'				=>	'Mostrar dirección de correo electrónico a otros usuarios.',
'Hide allow form label'				=>	'Ocultar dirección de correo electrónico, pero permitir el envío de correo por medio de formulario.',
'Hide both label'					=>	'Ocultar dirección de correo electrónico, y deshabilitar el envío de correo por medio de formulario.',

// Announcement Section
'Announcement subhead'				=>	'Anuncios',
'Display announcement label'		=>	'Mostrar anuncio',
'Display announcement help'			=>	'Habilita esto para mostrar el siguiente mensaje en el foro.',
'Announcement message label'		=>	'Mensaje de anuncio',
'Announcement message help'			=>	'Este texto no será procesado como los mensajes normales, y por tanto puede contener HTML.',

// Maintenance Section
'Maintenance subhead'				=>	'Mantenimiento',
'Maintenance mode label'			=>	'Modo de mantenimiento',
'Maintenance mode help'				=>	'Cuando está habilitado, el foro estará disponible solamente para los administradores. Esto debería utilizarse en caso de que se necesite poner el foro fuera de servicio temporalmente, a causa de mantenimiento. <strong>¡ADVERTENCIA! No cierres sesión cuando el foro esté en modo de mantenimiento.</strong> No te será posible entrar de nuevo.',
'Maintenance message label'			=>	'Mensaje de mantenimiento',
'Maintenance message help'			=>	'El mensaje que se mostrará a los usuarios cuando el foro esté en modo de mantenimiento. Si se deja en blanco, un mensaje predeterminado será utilizado. Este texto no será procesado como los mensajes normales, y por tanto puede contener HTML.',

);
