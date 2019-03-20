<?php 
$sliders = array(
//slider 1
    array(
        'titulo' => 'We are <br>Snap.',
        'imagen' => 'slider1.jpg',
        'imagenRetina' => 'slider1@2x.jpg',
        'imagenMobil' => 'slider1-mobile.jpg',
        'imagenMobilRetina' => 'slider1-mobile@2x.jpg',
        'texto' => '<p>El mejor primer viaje de egresados.</p>',
        'color' => 'rosa',
        'botones' => array(
            array(
                'texto' => 'Comprá ahora',
                'link' => MAINSURL . '/#compraonline',
                'paquete' => '',
                'icon' => 'icon-plane-rosa.png',
                'icon2x' => 'icon-plane-rosa@2x.png',
                'iconSVG' => 'icon-plane-rosa.svg',
            ),
            array(
                'texto' => 'Pedí tu reunión',
                'link' => MAINSURL . '/#reunion',
                'paquete' => '',
                'icon' => 'icon-persona-rosa.png',
                'icon2x' => 'icon-persona-rosa@2x.png',
                'iconSVG' => 'icon-persona-rosa.svg',
            ),
        ),
    ),
//slider 2
    array(
        'titulo' => 'We are <br>Snap.',
        'imagen' => 'slider2.jpg',
        'imagenRetina' => '',
        'imagenMobil' => 'slider2-mobile.jpg',
        'imagenMobilRetina' => '',
        'texto' => '<p>El mejor primer viaje de egresados.</p>',
        'color' => 'rosa',
        'botones' => array(
            array(
                'texto' => 'Comprá ahora',
                'link' => MAINSURL . '/#compraonline',
                'paquete' => '',
                'icon' => 'icon-plane-rosa.png',
                'icon2x' => 'icon-plane-rosa@2x.png',
                'iconSVG' => 'icon-plane-rosa.svg',
            ),
            array(
                'texto' => 'Pedí tu reunión',
                'link' => MAINSURL . '/#reunion',
                'paquete' => '',
                'icon' => 'icon-persona-rosa.png',
                'icon2x' => 'icon-persona-rosa@2x.png',
                'iconSVG' => 'icon-persona-rosa.svg',
            ),
        ),
    ),
);
?>


<div class="slide-progress"></div>

<div id="header-slider" class="slider-header owl-carousel">

<?php
foreach ( $sliders as $slider ) { ?>
    
    <article class="item-slider">
        
        <?php if ( $slider['imagen'] != '') : ?>
        <div class="imagen-fondo">

            <picture>

                <?php if ( $slider['imagenMobil'] != '') : ?>
                    <source srcset="<?php echo UPLOADSURL . $slider['imagen']; ?> 1x, <?php  if ( $slider['imagenRetina'] != '' ) { echo UPLOADSURL . $slider['imagenRetina']; } ?> 2x" media="(min-width: 992px)">

                    <source srcset="<?php echo UPLOADSURL . $slider['imagenMobil']; ?> 1x, <?php if ( $slider['imagenMobilRetina'] != '' ) { echo UPLOADSURL . $slider['imagenMobilRetina']; } ?> 2x" media="(min-width: 315px)">

                <?php else : ?>

                    <source srcset="<?php echo UPLOADSURL . $slider['imagen']; ?> 1x, <?php if ( $slider['imagenRetina'] != '' ) { echo UPLOADSURL . $slider['imagenRetina']; } ?> 2x" media="(min-width: 315px)">

                <?php endif; ?>
    
                <img src="<?php echo UPLOADSURL . $slider['imagen']; ?>">
            </picture>

        </div>

        <?php endif; ?>

        <div class="contenido <?php echo $slider['color']; ?>">
            <h1>
                <?php echo $slider['titulo']; ?>
            </h1>

            <div class="texto">
                <?php echo $slider['texto']; ?>
            </div>

            <div class="wrapper-buttons">
                
                <?php foreach (  $slider['botones'] as $boton ) { ?>

                    <a class="icon-btn-right btn-slider-header" href="<?php echo $boton['link']; ?>" data-paquete="<?php echo $boton['paquete']; ?>">
                        <span><?php echo $boton['texto']; ?></span>

                        <?php if ( $boton['icon'] != '' ) : ?>

                        <picture>

                            <?php if ( $boton['iconSVG'] != '' ) : ?>

                            <source srcset="<?php echo IMAGES . $boton['iconSVG']; ?>" type="image/svg+xml">

                            <?php endif; ?>

                            <source srcset="<?php echo IMAGES . $boton['icon']; ?> 1x, <?php if (  $boton['icon2x'] != '' ) { echo IMAGES . $boton['icon2x'] . ' 2x'; } ?>" media="(min-width: 315px)">

                            <img class="icon-btn" src="<?php echo IMAGES . $boton['icon']; ?>">
                        </picture>

                        <?php endif; ?>
                    </a>

                <?php } ?>
            </div>
        </div>
    </article>

<?php } ?>

</div>