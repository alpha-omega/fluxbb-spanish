<?php

// Language definitions used in install.php, localized by adaur

$lang_install = array(

'Install message'				=>	'El archivo \'config.php\' no existe o está corrupto. Esto implica que FluxBB no ha sido instalado aún.',
'Choose install language'		=>	'Elige el idioma del script de instalación',
'Choose install language info'	=>	'El idioma utilizado por este script de instalación. El idioma por defecto utilizado para el foro se puede seleccionar a continuación.',
'Install language'				=>	'Instalar idioma',
'Change language'				=>	'Cambiar idioma',
'Next'							=>	'Siguiente',
'Already installed'				=>	'Al parecer FluxBB ya está instalado. Debes dirigirte <a href="index.php">aquí</a>.',
'You are running error'			=>	'Utilizas %1$s en su versión %2$s. FluxBB %3$s requiere al menos %1$s %4$s para funcionar adecuadamente. Debes actualizar tu instalación de %1$s para poder de continuar.',
'My FluxBB Forum'				=>	'Mi foro FluxBB',
'Description'					=>	'Desafortunadamente nadie te puede decir lo que es FluxBB: tienes que verlo por ti mismo.',
'Username 1'					=>	'Los nombres de usuario deben tener una longitud de al menos 2 caracteres.',
'Username 2'					=>	'Los nombres de usuario deben tener una longitud mayor a 25 caracteres.',
'Username 3'					=>	'El nombre de usuario «guest» está reservado.',
'Username 4'					=>	'Los nombres de usuario no pueden ser como una dirección IP.',
'Username 5'					=>	'Los nombres de usuario no pueden contener todos los caracteres \', " y [ o ] a la vez.',
'Username 6'					=>	'Los nombres de usuario no pueden contener ninguna de las etiquetas de formato de texto (BBCode) utilizadas por el foro.',
'Short password'				=>	'Las contraseñas deben tener una longitud de al menos 4 caracteres.',
'Passwords not match'			=>	'Las contraseñas no coinciden',
'Wrong email'					=>	'El correo electrónico de administrador que ingresaste es inválido.',
'No board title'				=>	'Debes ingresar un título para el foro.',
'Error default language'		=>	'El lenguaje por defecto seleccionado no existe.',
'Error default style'			=>	'El estilo por defecto seleccionado no existe.',
'No DB extensions'				=>	'Este entorno PHP no tiene soporte para ninguna de las bases de datos que FluxBB soporta. Es necesario que PHP tenga soporte para MySQL, PostgreSQL o SQLite, para que FluxBB pueda ser instalado.',
'Administrator username'		=>	'Nombre de usuario del administrador',
'Administrator password 1'		=>	'Contraseña del administrador 1',
'Administrator password 2'		=>	'Contraseña del administrador 1',
'Administrator email'			=>	'Correo electrónico del administrador',
'Board title'					=>	'Título del foro',
'Base URL'						=>	'URL base',
'Required field'				=>	'es un campo requerido en este formulario.',
'FluxBB Installation'			=>	'Instalación de FluxBB',
'Welcome'						=>	'Estás a punto de instalar FluxBB. Para poder instalar FluxBB, debes completar el formulario que se muestra a continuación. Si encuentras cualquier dificultad con la instalación, por favor consulta la documentación.',
'Install'						=>	'Instalar FluxBB %s',
'Errors'						=>	'Los siguientes errores deben ser corregidos:',
'Database setup'				=>	'Configuración de la base de datos',
'Info 1'						=>	'Por favor introduce la información requerida para poder configurar tu base de datos para FluxBB. Debes conocer toda la información solicitada antes de proceder con la instalación.',
'Select database'				=>	'Selecciona tu tipo de base de datos',
'Info 2'						=>	'Actualmente, FluxBB soporta MySQL, PostgreSQL o SQLite. Si la base de datos de tu elección no está presente en el menú desplegable que se muestra a continuación, significa que este entorno PHP no cuenta con soporte para dicha base de datos. Consulta las preguntas frecuentes para obtener más información sobre el soporte para versiones particulares de cada base de datos.',
'Dual MySQL'					=>	'FluxBB ha detectado que tu entorno PHP soporta dos maneras distintas de comunicarse con MySQL. Las opciones se llamas estándar y mejorada. Si no estás seguro sobre cuál usar, comienza con la versión mejorada, y si falla, intenta con la estándar.',
'InnoDB'						=>	'FluxBB ha detectado que tu servidor MySQL podría soportar <a href="http://dev.mysql.com/doc/refman/5.0/en/innodb.html">InnoDB</a>. Esto sería una buena opción si planeas tener un foro grande. Si no estás seguro, se recomienda que no utilices InnoDB.',
'Database type'					=>	'Tipo de base de datos',
'Required'						=>	'(Requerido)',
'Database hostname'				=>	'Ingresa el nombre del servidor de tu base de datos',
'Info 3'						=>	'La dirección del servidor de la base de datos (ejemplo: localhost, db.myhost.com o 192.168.0.15). Puedes especificar un número de puerto personalizado si tu base de datos no se ejecuta en el puerto predeterminado (ejemplo: localhost:3580). Para tener soporte para SQLite, simplemente no introduzcas nada, o deja el campo como \'localhost\'.',
'Database server hostname'		=>'Nombre del servidor de la base de datos',
'Database enter name'			=>	'Ingresa el nombre de tu base de datos',
'Info 4'						=>	'El nombre de la base de datos en la cual se instalará FluxBB. La base de datos debe existir. Para SQLite, esta es la ruta relativa al archivo de la base de datos. Por motivos de seguridad, se recomienda ampliamente colocar la base de datos SQLite en un directorio privado (no accesible desde la Web) siempre que sea posible. Si el archivo de la base de datos SQLite no existe, FluxBB intentará crearlo.',
'Database name'					=>	'Nombre de la base de datos',
'Database enter informations'	=>	'Ingresa tu nombre de usuario y contraseña de la base de datos',
'Database username'				=>	'Nombre de usuario de la base de datos',
'Info 5'						=>	'Ingresa el nombre de usuario y la contraseña con los cuales te conectas a la base de datos. Ignora este campo en caso de utilizar SQLite.',
'Database password'				=>	'Contraseña de la base de datos',
'Database enter prefix'			=>	'Prefijo de las tablas de la base de datos',
'Info 6'						=>	'Si lo deseas, puedes especificar un prefijo para las tablas. De esta forma, puedes ejecutar múltiples copias de FluxBB en la misma base de datos (ejemplo: foo_).',
'Table prefix'					=>	'Prefijo de las tablas',
'Administration setup'			=>	'Configuración de la administración',
'Info 7'						=>	'Por favor introduce la información solicitada para poder configurar un administrador para tu instalación de FluxBB.',
'Admin enter username'			=>	'Ingresa el nombre de usuario del administrador',
'Info 8'						=>	'El nombre de usuario del administrador del foro. Más adelante puedes crear más administradores y moderadores. Los nombres de usuario pueden tener entre 2 y 25 caracteres.',
'Admin enter password'			=>	'Introduce y confirma la contraseña del administrador',
'Info 9'						=>	'Las contraseñas deben tener al menos 4 caracteres. Las contraseñas distinguen entre mayúsculas y minúsculas.',
'Password'						=>	'Contraseña',
'Confirm password'				=>	'Confirmar contraseña',
'Admin enter email'				=>	'Ingresa el correo electrónico del administrador',
'Info 10'						=>	'La dirección de correo electrónico del administrador del foro.',
'Board setup'					=>	'Configuración del foro',
'Info 11'						=>	'Por favor ingresa la información solicitada para poder configurar tu Foro FluxBB.',
'Enter board title'				=>	'Ingresa el título de tu foro',
'Info 12'						=>	'El título de este foro de discusión (mostrado en la parte superior de cada página).',
'Enter board description'		=>	'Ingresa la descripción de tu foro',
'Info 13'						=>	'Una descripción breve sobre este foro de discusión (mostrada en la parte superior de cada página). Este campo puede contener HTML.',
'Board description'				=>	'Descripción del foro',
'Enter base URL'				=>	'Ingresa la URL base de tu instalación de FluxBB',
'Info 14'						=>	'La URL (sin diagonal final) de tu foro FluxBB (ejemplo: http://foro.mihost.com o http://mihost.com/~usuario). Esto <strong>debe</strong> ser correcto, de otra forma, los administradores y moderadores no serán capaces de enviar ningún formulario. Por favor considera que el valor presente es únicamente una suposicón educada por parte de FluxBB.',
'Choose the default language'	=>	'Elige el idioma predeterminado',
'Info 15'						=>	'El idioma por defecto utilizado para invitados y usuarios que no hayan cambiado la opción predeterminda en su perfil.',
'Default language'				=>	'Idioma predeterminado',
'Choose the default style'		=>	'Elig el estilo predeterminado',
'Info 16'						=>	'El estilo por defecto utilizado para invitados y usuarios que no hayan cambiad la opción predeterminada en su perfil.',
'Default style'					=>	'Estilo predeterminado',
'Start install'					=>	'Comenzar la instalación',
'DB type not valid'				=>	'\'%s\' no es un tipo de base de datos válido',
'Table prefix error'			=>	'El prefijo \'%s\' contiene caracteres ilegales, o es demasiado largo. El prefijo puede contener letras de la (a-z), cualquier número, y el carácter guión bajo. Sin embargo, no debe comenzar con un número. La longitud máxima es de 40 caracteres. Por favor selecciona un prefijo distinto.',
'Prefix reserved'				=>	'El prefijo \'sqlite_\' está reservado para el uso del motor SQLite. Por favor selecciona un prefijo distinto',
'Existing table error'			=>	'Una tabla llamada \'%susers\' está presente en la base ded datos \'%s\'. Esto puede significar que FluxBB ya está instalado o que otro software está instalado y ocupando uno o más de los nombres de tablas que FluxBB requiere. Si deseas instalar múltiples copias de FluxBB en la misma base de datos, debes elegir un prefijo de tablas distinto',
'InnoDB off'					=>	'Al parecer InnoDB no está instalado. Por favor selecciona una capa de base de datos que no tenga soporte para InooDB, o habilita InnoDB en tu servidor MySQL.',
'Administrators'				=>	'Administradores',
'Administrator'					=>	'Administrador',
'Moderators'					=>	'Moderadores',
'Moderator'						=>	'Moderador',
'Guests'						=>	'Invitados',
'Guest'							=>	'Invitado',
'Members'						=>	'Miembros',
'Announcement'					=>	'Ingresa tu anuncio aquí.',
'Rules'							=>	'Ingresa tus reglas aquí',
'Maintenance message'			=>	'Este foro está temporalmente cerrado por mantenimiento. Por favor intenta de nuevo en unos minutos.',
'Test post'						=>	'Tema de prueba',
'Message'						=>	'¡Si estás viendo esto significa que la instalación de FluxBB parece haber funcionado! Inicia sesión y dirígete al panel de control de administración para configurar tu foro.',
'Test category'					=>	'Categoría de prueba',
'Test forum'					=>	'Foro de prueba',
'This is just a test forum'		=>	'Este es simplemente un foro de prueba',
'Alert cache'					=>	'<strong>¡El directorio de caché actualmente no tiene permisos de escritura!</strong> Para que FluxBB funcione de manera correcta, PHP debe tener permisos de escritura en el directorio <em>%s</em>. Utiliza chmod para establecer los permisos de directorio apropiados. Si tienes dudas, cambia los permisos a 0777.',
'Alert avatar'					=>	'<strong>¡El directorio para los avatares no tiene permisos de escritura!</strong> Si deseas que los usuarios puedan subir sus propios avatares, PHP debe tener permisos de escritura en el directorio <em>%s</em>. Utiliza chmod para establecer los permisos de directorio apropiados. Si tienes dudas, cambia los permisos a 0777.',
'Alert upload'					=>	'<strong>¡La carga de archivos parece estar deshabilitada en este servidor!</strong> Si deseas que los usuarios puedan subir sus propios avatares, debes habilitar la configuración de file_uploads en PHP. Una vez que la carga de archivos esté habilitada, la subida de avatares se puede habilitar en Administración/Opciones/Funciones.',
'FluxBB has been installed'		=>	'FluxBB se ha instalado. Para finalizar la instalación por favor sigue las instrucciones que se muestran a continuación.',
'Final instructions'			=>	'Instrucciones finales',
'Info 17'						=>	'Para finalizar la instalación, necesitas hacer clic en el botón que aparece enseguida, para descargar un archivo llamado config.php. Después debes subir este archivo al directorio raíz de tu instalación de FluxBB.',
'Info 18'						=>	'Una vez que hayas subido el archivo config.php, ¡FluxBB estará completamente instalado! En ese momento, puedes <a href="index.php">ir al índice del foro</a>.',
'Download config.php file'		=>	'Descargar archivo config.php',
'FluxBB fully installed'		=>	'¡FluxBB se ha instalado completamente! Ahora puedes <a href="index.php">ir al índice del foro</a>.',

);
