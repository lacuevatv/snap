<?php 
$experiencias = array(
    array(
        'titulo'=> 'El mejor viaje de mi vida.',
        'nombre'=> 'Nombre Apellido',
        'imagen'=> '',
        'imagen2x'=> '',
        //'video'=> 'https://vimeo.com/1865983',
        'video'=> 'https://vimeo.com/1562621',
    ),
    array(
        'titulo'=> 'El Otro viaje de mi vida.',
        'nombre'=> 'Nombre Apellido',
        'imagen'=> '',
        'imagen2x'=> '',
        'video'=> 'https://vimeo.com/1865983',
    ),
);
?>

<div class="slide-progress"></div>
<ul id="experiencias-slider" class="owl-carousel">
<?php foreach ($experiencias as $slider ) { ?>
    
    <li class="experiencia<?php if ($slider['video'] != '') {echo ' item-video'; } ?>">
        <div class="experiencia-data">
            
            <h2 class="title-experiencia"><?php echo $slider['titulo']; ?></h2>
            <p class="nombre-experiencia"><?php echo $slider['nombre']; ?></p>
        </div>

        <div class="experiencia-contenido">
            <?php if ($slider['video'] != '') : ?>

            <span class="owl-video" href="<?php echo $slider['video']; ?>"></span>
            
            <?php else :

                if ($slider['imagen'] != '') : ?>

                <picture>
                    <source srcset="<?php echo UPLOADSURL . $slider['imagen']; ?> 1x<?php if ( $slider['imagen2x'] != '' ) { echo ', ' . UPLOADSURL . $slider['imagen2x'] . ' 2x'; } ?>" media="(min-width: 315px)">
                    <img class="icon-experiencias" src="<?php echo UPLOADSURL . $slider['imagen']; ?>" alt="Experiencia Fleek: <?php echo $slider['nombre']; ?>">
                </picture>
                
                <?php endif; ?>

            <?php endif; ?>
        </div>
    </li>

<?php } ?>

</div>