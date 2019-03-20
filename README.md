# SITIO PHP

## Versiones:
- 1.0
* Estructura básica, por htaccess
* Front en php y jquery

## RUTAS
* .htaccess redirige todo a index y desde ahí parsea url y va a pages
* index.php solo sirve como roter y busca la pagina en pages
* para que funcione bien en vez de pasarle el url se le pasa una funcion que omite la carpeta en la cual está instalado el sitio y empieza a armar el host sin esa carpeta o subdominio: dominio.com/carpeta-definida/pagina-actual/

## Instalación:
### Front:
* Javascript: archivo propio: custom.js, se edita la variable baseUrl si esta instalado en otra carpeta
* Archivo '/inc/config.php', se edita el nombre de base de datos y si está instalado en otra carpeta se define en la CONSTANTE Carpeta servidor: '/nombre-carpeta'
* No olvidar subir el archivo oculto .httaccess y si no está instalado en la raís del sitio hay que modificar: RewriteBase y cambiar la / por /nombre-carpeta

### Librerias utilizadas
* PHP version 5.6
* MySQL version 5.6
* phpmailer version 5.2.17
* Jquery 3.2.1
* Modernizr 3.5.0
* Mobile detect 2.8.25
* OwlCarousel v2.2.1
