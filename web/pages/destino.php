<?php
/*
 * PAGE DESTINO: 
 * es el html de la pagina de destino
*/

$villaCarlosPazData = array(
    'header' => array(
        'letras' => 'VCP',
        'link' => '#compra-online',
        'paquete' => 'villa-carlos-paz',
        'menu' => '<a href="'.MAINSURL.'">Snap&reg;</a> | Villa Carlos Paz',
        'imagen' => array(
            'imagen' => 'carlospaz.jpg',
            'imagenRetina' => 'carlospaz@2x.jpg',
            'imagenMobil' => 'carlospaz-mobile.jpg',
            'imagenMobilRetina' => 'carlospaz-mobile@2x.jpg',
        ),
    ),
    'color' => 'amarillo',
    'titulo' => 'Villa Carlos Paz',
    'titulo2' => '¡Elegí Villa Carlos Paz!',
    'icon' => array('svg' => 'bariloche-icon-top.svg', '1X' => 'bariloche-icon-top.png', '2X' => 'bariloche-icon-top@2x.png'),
    'resumen' => '<p>Te proponemos un viaje de egresados distinto, en el que los chicos van a disfrutar de las actividades más completas, dinámicas e impactantes, en los lugares más prestigiosos y seguros de la región. Nuestros planes ofrecen una gran variedad de opciones para todos los gustos y cubren todos los días de la estadía en la ciudad.</p>',
    'dataDestino' => array(
        array( 'titulo' => 'Duración', 'lista' => array( '5 Días totales' ) ),
        array( 'titulo' => 'Destinos', 'lista' => array( 'Villa Carlos Paz' ) ),
        array( 'titulo' => 'Noches de alojamiento', 'lista' => array( '4 Noches en Villa Carlos Paz' ) ),
    ),
    'pdf' => 'itinerario-villa-carlos-paz.pdf',
    'pdf_size' => '50MB',
    'extra' => array(
        /*array('titulo' => 'Días de nieve', 
            'icon' => array('svg' => 'nieve-icon.svg', '1X' => 'nieve-icon.png', '2X' => 'nieve-icon@2x.png'),
            'data' => array('Visita al Cerro Catedral', 'Piedras Blancas', 'Otto House Music', 'Montaña Boutique', 'Ski & Snowboard Selec.')
        ),
        array('titulo' => 'Actividades exclusivas',
            'icon' => array('svg' => 'actividades-icon.svg', '1X' => 'actividades-icon.png', '2X' => 'actividades-icon@2x.png'),
            'data' => array('Fiesta de Bienvenida', 'After Ski', 'Previa de Encuentro',' Cena de velas', 'Ice Bar Bariloche', 'Fiesta de Despedida')
        ),*/
        array('titulo' => 'Opciones de Excursiones', 'icon' => array('svg' => 'excursiones-icon.svg', '1X' => 'excursiones-icon.png', '2X' => 'excursiones-icon@2x.png'),
         'data' => array('Peko´s', 'Mundo Fantástico', 'Vértigo Acuático', 'Parque Siquiman', 'Frampie CocoGuana', 'El Pinar', 'Bahía Los Mimbres', 'Aventura Auckland', 'Acuatitobogan', 'Fly Rock', 'Aventura 4X4','Dique San Roque', 'Bosque Aventura', 'Tío Joe', 'Casa de Casper', 'Wavezone', 'Valle del Buitre', 'Crazy Donkey', 'Fogón' )
        ),
        array('titulo' => 'Programa nocturno',
            'icon' => array('svg' => 'estrella-outline.svg', '1X' => 'estrella-outline.png', '2X' => 'estrella-outline@2x.png'),
            'data' => array('Keop’s', 'Khalama', 'Molino Rojo', 'Paraíso Perdido', 'Fiesta de Disfraces' ,'Cena de Graduados')
        ), 
    ),
);

$sanRafaelData = array(
    'header' => array(
        'letras' => 'SRM',
        'link' => '#compra-online',
        'paquete' => 'san-rafael',
        'menu' => '<a href="'.MAINSURL.'">Snap&reg;</a> | San Rafael',
        'imagen' => array(
            'imagen' => 'san-rafael.jpg',
            'imagenRetina' => 'san-rafael.jpg',
            'imagenMobil' => 'san-rafael.jpg',
            'imagenMobilRetina' => 'san-rafael.jpg', 
        ),
    ),
    'color' => 'amarillo',
    'titulo' => 'San Rafael',
    'titulo2' => '¡Elegí San Rafael de Mendoza! ',
    'icon' => array('svg' => 'cancun-icon-top.svg', '1X' => 'cancun-icon-top.png', '2X' => 'cancun-icon-top@2x.png'),
    'resumen' => '<p>Tenemos una propuesta distinta, para que los egresados puedan vivir un viaje único, en el que los chicos van a disfrutar de las actividades más completas, dinámicas e impactantes, en los lugares más prestigiosos y seguros de la región. Nuestros planes ofrecen una gran variedad de opciones para todos los gustos y cubren todos los días de la estadía en la ciudad.</p>',
    'dataDestino' => array(
        array( 'titulo' => 'Duración', 'lista' => array( '5 Días totales' ) ),
        array( 'titulo' => 'Destinos', 'lista' => array( 'San Rafael' ) ),
        array( 'titulo' => 'Noches de alojamiento', 'lista' => array( '4 Noches San Rafael' ) ),
    ),
    'pdf' => '#',
    'pdf_size' => '50MB',
    'extra' => array(
        /*array('titulo' => 'Días de nieve', 
            'icon' => array('svg' => 'nieve-icon.svg', '1X' => 'nieve-icon.png', '2X' => 'nieve-icon@2x.png'),
            'data' => array('Visita al Cerro Catedral', 'Piedras Blancas', 'Otto House Music', 'Montaña Boutique', 'Ski & Snowboard Selec.')
        ),
        array('titulo' => 'Actividades exclusivas',
            'icon' => array('svg' => 'actividades-icon.svg', '1X' => 'actividades-icon.png', '2X' => 'actividades-icon@2x.png'),
            'data' => array('Fiesta de Bienvenida', 'After Ski', 'Previa de Encuentro',' Cena de velas', 'Ice Bar Bariloche', 'Fiesta de Despedida')
        ),*/
        array('titulo' => 'Opciones de Excursiones', 'icon' => array('svg' => 'excursiones-icon.svg', '1X' => 'excursiones-icon.png', '2X' => 'excursiones-icon@2x.png'),
         'data' => array('Peko´s', 'Mundo Fantástico', 'Vértigo Acuático', 'Parque Siquiman', 'Frampie CocoGuana', 'El Pinar', 'Bahía Los Mimbres', 'Aventura Auckland', 'Acuatitobogan', 'Fly Rock', 'Aventura 4X4','Dique San Roque', 'Bosque Aventura', 'Tío Joe', 'Casa de Casper', 'Wavezone', 'Valle del Buitre', 'Crazy Donkey', 'Fogón' )
        ),
        array('titulo' => 'Programa nocturno',
            'icon' => array('svg' => 'estrella-outline.svg', '1X' => 'estrella-outline.png', '2X' => 'estrella-outline@2x.png'),
            'data' => array('Keop’s', 'Khalama', 'Molino Rojo', 'Paraíso Perdido', 'Fiesta de Disfraces' ,'Cena de Graduados')
        ), 
    ),
);

switch (PAGEACTUAL) {
    case 'villa-carlos-paz':
        $pageData = array($villaCarlosPazData,$sanRafaelData);
    break;

    case 'san-rafael':
        $pageData = array($sanRafaelData,$villaCarlosPazData);
    break;
}


getTemplate( 'header' ); ?>

<div class="inner-wrapper">

    <?php if ( ! empty($pageData) ) : ?>
    <div class="destinos-page-sliders">

        <div id="destino-slider" class="owl-carousel">
            <?php getTemplate( 'slide-page-destino', $pageData ); ?>
        </div>

    </div>

    <?php else :
        
        getTemplate( 'error' );

    endif;
    ?>

    <section id="compraonline"></section>

</div><!-- // INNVER WRAPPER -->

<?php getTemplate( 'footer' );