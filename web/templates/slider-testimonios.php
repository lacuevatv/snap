<?php 
$experiencias = array(
    array(
        'titulo'=> 'Adrenalina en Crazy Donkey.',
        'nombre'=> 'Powered by Snap',
        'imagen'=> '',
        'imagen2x'=> '',
        'video'=> 'https://vimeo.com/327286160/65642b94ca',
    ),
    array(
        'titulo'=> 'Hotelería Premium.',
        'nombre'=> 'Powered by Snap',
        'imagen'=> '',
        'imagen2x'=> '',
        'video'=> 'https://vimeo.com/327286551/9f2f9461ed',
    ),
    array(
        'titulo'=> 'Matinée en Khalama.',
        'nombre'=> 'Powered by Snap',
        'imagen'=> '',
        'imagen2x'=> '',
        'video'=> 'https://vimeo.com/327286859/8d8c2b624e',
    ),
    array(
        'titulo'=> 'Noche de graduados en Malambo.',
        'nombre'=> 'Powered by Snap',
        'imagen'=> '',
        'imagen2x'=> '',
        'video'=> 'https://vimeo.com/327287200/31407a7a51',
    ),
    array(
        'titulo'=> 'Pijama Party en Molino.',
        'nombre'=> 'Powered by Snap',
        'imagen'=> '',
        'imagen2x'=> '',
        'video'=> 'https://vimeo.com/327287677/2b52d678a4',
    ),
    array(
        'titulo'=> 'Día a pura diversión en Peko’s.',
        'nombre'=> 'Powered by Snap',
        'imagen'=> '',
        'imagen2x'=> '',
        'video'=> 'https://vimeo.com/327288081/5abc515107',
    ),
    array(
        'titulo'=> 'Tarde de kartings en Siquiman.',
        'nombre'=> 'Powered by Snap',
        'imagen'=> '',
        'imagen2x'=> '',
        'video'=> 'https://vimeo.com/327288880/89859835d4',
    ),
    array(
        'titulo'=> 'Diversión acuática en WaveZone.',
        'nombre'=> 'Powered by Snap',
        'imagen'=> '',
        'imagen2x'=> '',
        'video'=> 'https://vimeo.com/327289546/b8585524fe',
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