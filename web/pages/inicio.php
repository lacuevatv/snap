<?php
/*
 * PAGE TEMPLATE: PAGINA INICIO
 * es el html de la pagina de inicio
*/
getTemplate( 'header' ); ?>
<div class="inner-wrapper">
    
    <header class="home-header">

        <div class="slider-header-wrapper" data-template="slider-header">
            <?php getTemplate('slider-header'); ?>
        </div>

        <div class="legales-header">
            <p>
                Snap es un marca de productos para jóvenes de la empresa Auckland Turismo S.R.L.
            </p>
        </div>

    </header>

<!-- SECTION NOSOTROS -->
    <section class="section-wrapper nosotros-wrapper" id="nosotros">

        <div class="icon-header" data-template="icon-header">
            <?php //getTemplate('icon-header'); ?>
        </div>
        
        <div class="icon-vertical">
            <picture>
                <source srcset="<?php echo IMAGES; ?>logo-vertical.svg" type="image/svg+xml">
                <source srcset="<?php echo IMAGES; ?>logo-vertical.png 1x, <?php echo IMAGES; ?>logo-vertical@2x.png 2x" media="(min-width: 315px)">
                <img src="<?php echo IMAGES; ?>logo-vertical.png">
            </picture>
        </div>
        <div class="contenido-nosotros">
            <div class="contenido">
                <h2>
                    <span class="higline">Elegí Snap,</span><br>
                    <span class="higline">La experiencia de</span><br>
                    <span class="color-invert">vivir una aventura</span>
                </h2>
            
                <p>
                    La nueva marca Auckland para el viaje de egresados de los más peques de la familia.
                </p>
                <p>
                    Una división especializada en niños, donde se desarrollan propuestas basadas en servicios de excelencia, lo último en atracciones y la atención más cuidada para que, aun estando lejos, se sientan como en casa.
                </p>
                <p>
                    Snap es un equipo de profesionales formado por más de treinta personas, docentes dedicados exclusivamente a cuidar cada detalle de un viaje distinto, con los más altos estándares de prevención y seguridad. En Snap trabajamos todos los días para lograr la más inolvidable de las experiencias para tus hijos.
                </p>

                <a class="btn" href="#">
                    Ver más
                </a>
            </div>

            <div class="imagen-nosotros lqva-lazy-load-images" data-prioridad="2" srcset="<?php echo UPLOADSURL; ?>nosotros.jpg" srcset2x="<?php echo UPLOADSURL; ?>nosotros@2x.jpg"></div>
            
        </div>
    </section>

<!-- SECTION DESTINOS -->
    <section class="section-wrapper" id="destinos">
        <h2 class="sr-only">
            Destinos
        </h2>
        
        <ul class="destinos-wrapper" data-template="boxes-destinos"></ul>
    </section>

<!-- SECTION EXPERIENCIAS -->
    <section class="section-wrapper" id="experiencias">
        <div class="wrapper-slider-testimonios" data-template="slider-testimonios">
            
            <?php //getTemplate( 'slider-testimonios' ); ?>
            
        </div>
    </section>

<!-- SECTION COMPRA ONLINE -->
    <section class="section-wrapper section-compra" id="compraonline">
        <div class="texto-destacado">
            <span class="only-mobile">
                Reservá tu lugar ahora
            </span>
            <span class="only-pc">
                Comprá<br>tu viaje
            </span>
        </div>
        <div class="compra-wrapper">
            <h2>
                <span class="only-mobile">
                    Comprá tu viaje para tu hijo/a con un solo click.
                </span>
                <span class="only-pc">
                    Comprá tu viaje para tu hijo/a con un solo click.
                </span>
            </h2>
            
            <p class="texto-azul-pc">
                Hacé la reserva para tu grupo en forma online.
            </p>

            <div class="wrapper-button">
                <a class="icon-btn-right open-form" href="#compra-online">
                    <span>Comprá online</span>
                    <picture>
                        <source srcset="<?php echo IMAGES; ?>icon-plane.svg" type="image/svg+xml">
                        <source srcset="<?php echo IMAGES; ?>icon-plane.png 1x, <?php echo IMAGES; ?>icon-plane.png 2x" media="(min-width: 315px)">
                        <img src="<?php echo IMAGES; ?>icon-plane.png">
                    </picture>
                </a>
            </div>

            <p class="only-pc">Si preferís la asistencia de un asesor <a class="texto-azul-pc open-form" href="#reunion">envianos tus datos acá.</a>
        </div>
        
        
    </section>

<!-- SECTION YO VIAJO/VIAJE -->
    <section class="section-wrapper viajo-viaje-wrapper">
        <div id="viajo" class="viajo-wrapper">
            <picture>
                <source srcset="<?php echo IMAGES; ?>hapyface.svg" type="image/svg+xml">
                <source srcset="<?php echo IMAGES; ?>hapyface.png 1x, <?php echo IMAGES; ?>hapyface@2x.png 2x" media="(min-width: 315px)">
                <img src="<?php echo IMAGES; ?>hapyface.png" alt="Icon Whatsapp">
            </picture>
            <h3>
            Va a viajar
            </h3>
            <ul>
                <li>
                    <a href="#" target="_blank">
                        Inscripciones
                    </a>
                </li>
                <li>
                    <a href="#" target="_blank">
                        Cupones de Pago
                    </a>
                </li>
                <li>
                    <a href="#" target="_blank">
                        Ficha Médica
                    </a>
                </li>
                <li>
                    <a href="#" target="_blank">
                        Tips de Viaje
                    </a>
                </li>
            </ul>
        </div>
        <div id="viaje" class="viaje-wrapper">
            <picture>
                <source srcset="<?php echo IMAGES; ?>camera.svg" type="image/svg+xml">
                <source srcset="<?php echo IMAGES; ?>camera.png 1x, <?php echo IMAGES; ?>camera@2x.png 2x" media="(min-width: 315px)">
                <img src="<?php echo IMAGES; ?>camera.png" alt="Icon Whatsapp">
            </picture>
            <h3>
                Ya viajó
            </h3>
            <p>
                Encontrá las mejores imágenes de tu viaje.
            </p>
        </div>
    </section>


<!-- INSTAGRAM -->
    <section class="section-wrapper instagram-wrapper" id="social">
        <a href="<?php echo LINK_INSTAGRAM; ?>" class="instagram" target="_blank">
            <picture>
                <source srcset="<?php echo IMAGES; ?>instagram.svg" type="image/svg+xml">
                <source srcset="<?php echo IMAGES; ?>instagram.png 1x, <?php echo IMAGES; ?>instagram@2x.png 2x" media="(min-width: 315px)">
                <img src="<?php echo IMAGES; ?>instagram.png" alt="Icon Instagram">
            </picture>
            <h2>
                @<?php echo INSTAGRAM; ?>
            </h2>
        </a>
        <div class="wrapper-feed">
            <p>Cargando instagram...</p>
        </div>
    </section>

</div><!-- // INNVER WRAPPER -->
<?php getTemplate( 'footer' );