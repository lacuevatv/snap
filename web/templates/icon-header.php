<div class="left-icons-header animate-slide-up">
    <picture>
        <source srcset="<?php echo IMAGES; ?>icon-raton<?php if ($data == 'inicio' ) {echo '-amarillo'; } else {echo '-rosa'; } ?>.svg" type="image/svg+xml">
        <source srcset="<?php echo IMAGES; ?>icon-raton<?php if ($data == 'inicio' ) {echo '-amarillo'; } else {echo '-amarillo'; } ?>.png 1x, <?php echo IMAGES; ?>icon-raton<?php if ($data == 'inicio' ) {echo '-amarillo'; } else {echo '-rosa'; } ?>@2x.png 2x" media="(min-width: 315px)">
        <img class="raton" src="<?php echo IMAGES; ?>icon-raton<?php if ($data == 'inicio' ) {echo '-amarillo'; } else {echo '-rosa'; } ?>.png">
    </picture>
    <p>Scroll down</p>
</div>

<div class="right-icons-header">
    <ul class="animate-slide-left">
        <li>
            <a class="btn-icon-left-notransition" href="<?php echo WHATSAPPLINK; ?>" target="_blank">
                <picture>
                    <source srcset="<?php echo IMAGES; ?>wa-icon<?php if ($data == 'inicio' ) {echo '-rojo'; } else {echo '-azul'; } ?>.svg" type="image/svg+xml">
                    <source srcset="<?php echo IMAGES; ?>wa-icon<?php if ($data == 'inicio' ) {echo '-rojo'; } else {echo '-azul'; } ?>.png 1x, <?php echo IMAGES; ?>wa-icon<?php if ($data == 'inicio' ) {echo '-rojo'; } else {echo '-azul'; } ?>@2x.png 2x" media="(min-width: 315px)">
                    <img class="rotate-img" src="<?php echo IMAGES; ?>wa-icon<?php if ($data == 'inicio' ) {echo '-rojo'; } else {echo '-azul'; } ?>.png" alt="Icon Whatsapp">
                </picture>
                <?php echo WHATSAPP; ?>
            </a>
        </li>
        <li>
            <a class="btn-icon-left-notransition" href="<?php echo LINK_INSTAGRAM; ?>" target="_blank">
                <picture>
                    <source srcset="<?php echo IMAGES; ?>instagram-icon<?php if ($data == 'inicio' ) {echo '-rojo'; } else {echo '-azul'; } ?>.svg" type="image/svg+xml">
                    <source srcset="<?php echo IMAGES; ?>instagram-icon<?php if ($data == 'inicio' ) {echo '-rojo'; } else {echo '-azul'; } ?>.png 1x, <?php echo IMAGES; ?>instagram-icon<?php if ($data == 'inicio' ) {echo '-rojo'; } else {echo '-azul'; } ?>@2x.png 2x" media="(min-width: 315px)">
                    <img src="<?php echo IMAGES; ?>instagram-icon<?php if ($data == 'inicio' ) {echo '-rojo'; } else {echo '-azul'; } ?>.png" alt="Icon Instagram">
                </picture>
                <?php echo '@'.INSTAGRAM; ?>
            </a>
        </li>
        <li>
            <a class="btn-icon-left-notransition" href="mailto:<?php echo EMAIL; ?>" target="_blank">
                <picture>
                    <source srcset="<?php echo IMAGES; ?>email-icon<?php if ($data == 'inicio' ) {echo '-rojo'; } else {echo '-azul'; } ?>.svg" type="image/svg+xml">
                    <source srcset="<?php echo IMAGES; ?>email-icon<?php if ($data == 'inicio' ) {echo '-rojo'; } else {echo '-azul'; } ?>.png 1x, <?php echo IMAGES; ?>email-icon<?php if ($data == 'inicio' ) {echo '-rojo'; } else {echo '-azul'; } ?>@2x.png 2x" media="(min-width: 315px)">
                    <img class="rotate-img" src="<?php echo IMAGES; ?>email-icon<?php if ($data == 'inicio' ) {echo '-rojo'; } else {echo '-azul'; } ?>.png" alt="Icon Email">
                </picture>
                <?php echo EMAIL; ?>
            </a>
        </li>
    </ul>
</div>