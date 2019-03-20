<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<?php
	SeoTitlePage( PAGEACTUAL );
	getHeaderMetaInfo( PAGEACTUAL ); ?>

	<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
	<link rel="manifest" href="/site.webmanifest">
	<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
	<meta name="msapplication-TileColor" content="#da532c">
	<meta name="theme-color" content="#ffffff">
	
	<?php getStyles(PAGEACTUAL, array('default', 'owlcarousel')); ?>

</head>

<body data-page="<?php echo PAGEACTUAL; ?>">	
<div class="main-wrapper">
	<div class="preloader" style="display: flex; display: -ms-flex;display: -webkit-flex;-webkit-align-items: center;-ms-align-items: center;align-items: center;-webkit-justify-content: center;-ms-justify-content: center;justify-content: center;position: fixed;z-index: 99999999999999999;top: 0;left: 0;width: 100%;height: 100%;background-color: #fff;">
		<img style="width: 125px;" src="<?php echo IMAGES; ?>preloading.gif" alt="Fleek Preloader">
	</div>
	<header class="main-header">
		<nav class="navbar">
			<a href="<?php echo MAINSURL; ?>" class="brand-name">
				<picture>
					<source srcset="<?php echo IMAGES; ?>logo-header.svg" type="image/svg+xml">
					<source srcset="<?php echo IMAGES; ?>logo-header.png 1x, <?php echo IMAGES; ?>logo-header@2x.png 2x" media="(min-width: 315px)">
					<img src="<?php echo IMAGES; ?>logo-header.png" alt="Fleek Logo">
				</picture>
			</a>
			<!--<p class="tagline">viajá<span class="line"></span><br>distinto.</p>-->
			
			<button class="toggle" role="menu">
				<span class="sr-only">Toggle</span>
				<span class="tog1"></span>
				<span class="tog2"></span>
				<span class="tog3"></span>
			</button>

			<div class="main-menu-wrapper" style="right: -300%;">
				<ul>
					<li>
						<a class="scroll-to" href="<?php echo MAINSURL;?>/#nosotros">
							Sobre Nosotros
						</a>
					</li>
					<li>
						<a class="scroll-to" href="<?php echo MAINSURL;?>/#destinos">
							Destinos Snap
						</a>
					</li>
					<li>
						<a class="scroll-to" href="<?php echo MAINSURL;?>/#experiencias">
							Experiencias
						</a>
					</li>
					<li>
						<a class="scroll-to" class="scroll-to" href="<?php echo MAINSURL;?>/#compraonline">
							Comprar Online
						</a>
					</li>
					<li>
						<a class="scroll-to" href="<?php echo MAINSURL;?>/#social">
							Snap Social
						</a>
					</li>
					<li>
						<a class="scroll-to" data-scroll="true" href="#contacto">
							Contacto
						</a>
					</li>
					<li>
						<a class="scroll-to" data-scroll="true" href="#puntosdeventa">
							Puntos de venta
						</a>
					</li>
				</ul>

				<ul>
					<li>
						<a class="btn-icon-left scroll-to" href="<?php echo MAINSURL;?>/#viajo">
							<picture>
								<source srcset="<?php echo IMAGES; ?>hapyface.svg" type="image/svg+xml">
								<source srcset="<?php echo IMAGES; ?>hapyface.png 1x, <?php echo IMAGES; ?>hapyface@2x.png 2x" media="(min-width: 315px)">
								<img src="<?php echo IMAGES; ?>hapyface.png" alt="Icon Whatsapp">
							</picture>
							Yo viajo 
						</a>
					</li>
					<li>
						<a class="btn-icon-left scroll-to" href="<?php echo MAINSURL;?>/#viaje">
							<picture>
								<source srcset="<?php echo IMAGES; ?>camera.svg" type="image/svg+xml">
								<source srcset="<?php echo IMAGES; ?>camera.png 1x, <?php echo IMAGES; ?>camera@2x.png 2x" media="(min-width: 315px)">
								<img src="<?php echo IMAGES; ?>camera.png" alt="Icon Whatsapp">
							</picture>
							Yo viajé
						</a>
					</li>
				</ul>

				<ul class="menu-contacto">
					<li>
						<a class="btn-icon-left" href="<?php echo WHATSAPPLINK; ?>" target="_blank">
							<picture>
								<source srcset="<?php echo IMAGES; ?>wa-icon.svg" type="image/svg+xml">
								<source srcset="<?php echo IMAGES; ?>wa-icon.png 1x, <?php echo IMAGES; ?>wa-icon@2x.png 2x" media="(min-width: 315px)">
								<img src="<?php echo IMAGES; ?>wa-icon.png" alt="Icon Whatsapp">
							</picture>
							<?php echo WHATSAPP; ?>
						</a>
					</li>
					<li>
						<a class="btn-icon-left" href="<?php echo LINK_INSTAGRAM; ?>" target="_blank">
							<picture>
								<source srcset="<?php echo IMAGES; ?>instagram-icon.svg" type="image/svg+xml">
								<source srcset="<?php echo IMAGES; ?>instagram-icon.png 1x, <?php echo IMAGES; ?>instagram-icon@2x.png 2x" media="(min-width: 315px)">
								<img src="<?php echo IMAGES; ?>instagram-icon.png" alt="Icon Instagram">
							</picture>
							<?php echo '@'.INSTAGRAM; ?>
						</a>
					</li>
					<li>
						<a class="btn-icon-left" href="mailto:<?php echo EMAIL; ?>" target="_blank">
							<picture>
								<source srcset="<?php echo IMAGES; ?>email-icon.svg" type="image/svg+xml">
								<source srcset="<?php echo IMAGES; ?>email-icon.png 1x, <?php echo IMAGES; ?>email-icon@2x.png 2x" media="(min-width: 315px)">
								<img src="<?php echo IMAGES; ?>email-icon.png" alt="Icon Email">
							</picture>
							<?php echo EMAIL; ?>
						</a>
					</li>
				</ul>
			</div>
			<div class="legales-header">
	            <p>
	                Snap es un marca de productos para jóvenes de la empresa Auckland Turismo S.R.L.
	            </p>
	        </div>
		</nav>
	</header>