<?php
$counter = 0;
foreach ($data as $itemData ) { ?>
    <article>
        <header class="slider-header-wrapper destinos-header">
            <div class="slider-destinos-wrapper">
            <?php if ( $itemData['header']['imagen']['imagen'] != '') : ?>

                <picture>

                    <?php if ( $itemData['header']['imagen']['imagenMobil'] != '') : ?>
                        <source srcset="<?php echo UPLOADSURL . $itemData['header']['imagen']['imagen']; ?> 1x, <?php echo UPLOADSURL . $itemData['header']['imagen']['imagenRetina']; ?> 2x" media="(min-width: 992px)">

                        <source srcset="<?php echo UPLOADSURL . $itemData['header']['imagen']['imagenMobil']; ?> 1x, <?php echo UPLOADSURL . $itemData['header']['imagen']['imagenMobilRetina']; ?> 2x" media="(min-width: 315px)">

                    <?php else : ?>

                        <source srcset="<?php echo UPLOADSURL . $itemData['header']['imagen']['imagen']; ?> 1x, <?php echo UPLOADSURL . $itemData['header']['imagen']['imagenRetina']; ?> 2x" media="(min-width: 315px)">

                    <?php endif; ?>

                    <img class="imagen-header" src="<?php echo UPLOADSURL . $itemData['header']['imagen']['imagen']; ?>" alt="<?php echo $itemData['titulo']; ?>">
                
                </picture>

                <?php endif; ?>
            </div>
            
            <div class="notice-menu">
                <?php echo $itemData['header']['menu']; ?>
            </div>
            <div class="super-title<?php echo ' '.$itemData['color']; ?>">
                <?php echo $itemData['header']['letras']; ?>
            </div>
            
            <h1 class="title-destino">
                <?php echo $itemData['titulo']; ?>
            </h1>

            <a class="icon-btn-right icon-header-destino open-form<?php echo ' '.$itemData['color']; ?>" href="<?php echo MAINSURL . '/' . $itemData['header']['link']; ?>" data-paquete="<?php echo $itemData['header']['paquete']; ?>">
                <span>Comprá ahora</span>
                <picture>
                    <source srcset="<?php echo IMAGES; ?>icon-plane-negro.svg" type="image/svg+xml">
                    <source srcset="<?php echo IMAGES; ?>icon-plane-negro.png 1x, <?php echo IMAGES; ?>icon-plane-negro@2x.png 2x" media="(min-width: 315px)">
                    <img src="<?php echo IMAGES; ?>icon-plane-negro.png">
                </picture>
            </a>
        </header>

        <section class="section-wrapper nosotros-wrapper destinos-page-section">

            <div class="icon-header" data-template="icon-header">
                <?php //getTemplate('icon-header'); ?>
            </div>

            <div class="icon-vertical<?php echo ' '.$itemData['color']; ?>">
                <picture>
                    <source srcset="<?php echo IMAGES; ?>logo-vertical-rosa.svg" type="image/svg+xml">
                    <source srcset="<?php echo IMAGES; ?>logo-vertical-rosa.png 1x, <?php echo IMAGES; ?>logo-vertical-rosa@2x.png 2x" media="(min-width: 315px)">
                    <img src="<?php echo IMAGES; ?>logo-vertical-rosa.png">
                </picture>
            </div>
            
            <div class="contenido-nosotros">
                
                <div class="destino">

                    <h2 class="destino-titulo">
                        <?php echo $itemData['titulo2']; ?>
                    </h2>
                    
                    <div class="resumen">
                        <?php echo $itemData['resumen']; ?>
                    </div>

                    <div class="data-destino">
                        <?php
                        foreach ( $itemData['dataDestino'] as $datos ) {
                            echo '<h4>'.$itemData['titulo'].':</h4>';

                            echo '<ul>';
                            foreach ($datos['lista'] as $lista ) {
                                echo '<li>'.$lista.'</li>';
                            }
                            echo '</ul>';
                        }
                        ?>
                    </div>

                </div>

                <div class="data-extra">

                    <a class="icon-download only-pc" data-tooltip="Tamaño: <?php echo $itemData['pdf_size']; ?>" href="<?php echo UPLOADSURL . '/' . $itemData['pdf']; ?>">
                        <span class="icon-download__textWrapper">
                            <span class="icon-download__text">Descargar PDF</span>
                            <picture>
                                <source srcset="<?php echo IMAGES; ?>descargar-icon.svg" type="image/svg+xml">
                                <source srcset="<?php echo IMAGES; ?>descargar-icon.png 1x, <?php echo IMAGES; ?>descargar-icon@2x.png 2x" media="(min-width: 315px)">
                                <img class="icon-download__icon" src="<?php echo IMAGES; ?>descargar-icon.png">
                            </picture>
                        </span>
                    </a>

                    
                    <ul class="extras">
                    <?php 
                    foreach ( $itemData['extra'] as $extra ) { ?>
                        
                        <li>
                            <picture>
                                <source srcset="<?php echo IMAGES . $extra['icon']['svg']; ?>" type="image/svg+xml">
                                <source srcset="<?php echo IMAGES . $extra['icon']['1X']; ?> 1x, <?php echo IMAGES . $extra['icon']['2x']; ?> 2x" media="(min-width: 315px)">
                                <img src="<?php echo IMAGES . $extra['icon']['1x']; ?>">
                            </picture>
                            <h4><?php echo $extra['titulo']; ?></h4>
                            <?php 
                            foreach ($extra['data'] as $item ) {
                                echo $item .'<br>';
                            }
                            ?>
                        </li>

                    <?php } ?>
                    </ul>
                    
                    <a class="icon-btn-right only-mobile" href="<?php echo UPLOADSURL . '/' . $itemData['pdf']; ?>">
                        <span>Descargar PDF</span>
                        <picture>
                            <source srcset="<?php echo IMAGES; ?>descargar-icon-rosa.svg" type="image/svg+xml">
                            <source srcset="<?php echo IMAGES; ?>descargar-icon-rosa.png 1x, <?php echo IMAGES; ?>descargar-icon-rosa@2x.png 2x" media="(min-width: 315px)">
                            <img src="<?php echo IMAGES; ?>descargar-icon-rosa.png">
                        </picture>
                    </a>

                </div>
            </div>
        </section>
    </article>
<?php
$counter++;
}