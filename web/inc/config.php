<?php
/*
 * CONFIG
 * 
*/
//BD
define('DB_SERVER', 'localhost');
define('DB_USER', 'dbuser');
define('DB_PASS', '123');
define('DB_NAME', 'dbname');

//DEFINICIONES HEAD Y SCRIPTS
define ( 'VERSION', '1.0' );

//CARPETAS
define ( 'UPLOADS', dirname( __FILE__ ) . '/../contenido' );
define ( 'PAGESDIR', dirname( __FILE__ ) . '/../pages' );
define ( 'TEMPLATEDIR', dirname( __FILE__ ) . '/../templates' );

//urls
define ('CARPETASERVIDOR', '' );//esta variable se define si el sitio no está en el root del dominio y si está en una subcarpeta
define ('MAINSURL', 'http://' . $_SERVER['HTTP_HOST'] . CARPETASERVIDOR );
define ('IMAGES', MAINSURL . '/assets/images/');
define ('UPLOADSURL', MAINSURL . '/contenido/');
define ('UPLOADSFILE', MAINSURL . '/contenido/');

//META TAGS
define('SITETITLE', 'Snap');
define('METADESCRIPTION', 'El mejor primer viaje de egresados.');
define('METAKEYS', '');

//LINKS REDES SOCIALES:
define('LINK_FACEBOOK', 'https://www.facebook.com/');
define('INSTAGRAM', 'wearesnap.travel');
define('LINK_INSTAGRAM', 'https://www.instagram.com/' . INSTAGRAM);
define('LINK_TWITTER', 'https://twitter.com/');
define('LINK_FLICKR', '#');
define('LINK_YOUTUBE', 'https://www.youtube.com/channel/');
define('WHATSAPP', '341.5935554');
define('WHATSAPPLINK', 'https://wa.me/543415935554');
define ( 'EMAIL', 'in@wearesnap.travel' );
//indica al paginador cuantos se muestran por pagina para calcular el offset además de que el loop muestra solo esos
define('POSTPERPAG', '1');

//EMAILS Y MENSAJES
define ( 'EMAILDEFAULT', 'in@wearesnap.travel' );
define ( 'ASUNTODEFAULT', 'Nuevo mensaje' );
define('MENSAJEEXITO', '<p class="msj-respuesta">Su mensaje ha sido enviado<br>Un asesor se comunicara a la brevedad.</p>');//este mensaje se imprime en el html
define('MENSAJEERROR', '<p>Hubo un pequeño error, intente otra vez.</p>');