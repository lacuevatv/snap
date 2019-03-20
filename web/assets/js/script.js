/**
 * File script.js
 *
 * @required jQuery
 * @ver 1.0
 --------------------------------------------------------------
>>> TABLE OF CONTENTS:
1.0 NAVIGATION
2.0 FORMULARIOS
3.0 POPUP PROMO
4.0 IMAGENES ANIMACIONES Y SLIDERS
--------------------------------------------------------------*/

var baseUrl = 'http://' + window.location.host;
var ajaxFileUrl = baseUrl + '/inc/ajax.php';
var paginaIndex = 1;
var pageActual = $('body').attr('data-page');
var windowWidth;
//se pasa con numeral #page
function scrollToID ( id ) {
    $('html, body').stop().animate({
        scrollTop: $(id).offset().top -90
    }, 'slow');
}

/*--------------------------------------------------------------
1.0 BASE 
* navigation, scroll to
--------------------------------------------------------------*/
$(document).ready(function(){
    windowWidth = window.innerWidth;  
    
    $(window).resize(function(){
        windowWidth = window.innerWidth;
        //console.log(windowWidth);
    
        //vuelve a dimensionar slider superior
        var wrapper = $('.home-header');
        var contenido = $('.slider-header-wrapper')
        setTimeout(function(){
            getSetHeightSize(wrapper, contenido);
        },500)
        
    });
    
    /*
     * SCROLL TOP
    */
    $('.go-up').click(function(){
        $("html, body").animate({
            scrollTop: 0
        }, "slow");
    });
    
    /*
    * SCROLL TO (links)
    */
    $('.scroll-to').click(function( e ){
        var scroll = $(this).attr('data-scroll');
        if ( pageActual == 'inicio' || scroll ) {
            e.preventDefault();
        
            //var href = '#'+$(this).attr('href');
            var href = $(this).attr('href').split('#');
            href = '#'+href[1];

            scrollToID(href);

            MovilMenuToggle();
            
        }

    });

    //Buttons sliderheader inicio
    $(document).on('click','.btn-slider-header', function( e ){
        e.preventDefault();
        var scroll = $(this).attr('data-scroll');
    
        //var href = '#'+$(this).attr('href');
        var href = $(this).attr('href').split('#');
        href = '#'+href[1];

        scrollToID('#compraonline');
        
        var paquete = $(this).attr('data-paquete');
        //abre formulario
        openform(href.substring(1), paquete);

    });

    /*
     * TOGGLE
    */
    $('.toggle').click(MovilMenuToggle);

    function MovilMenuToggle (){
        $('.toggle').toggleClass('toggle-open');
        $('.brand-name').toggleClass('brand-name-open');
        
        var menu = $('.main-menu-wrapper');
        
        if ( $(menu).css('right') != '0px' ) {
            menu.animate({
                 'right': '0px',
                 'opacity':'1',
            }, 300);
        } else {
            menu.animate({
                'right': '-300%',
                'opacity':'0',
            }, 300);
        }
    }


    //scroll up /down navbar
    $(window).scroll(function() {
        var scroll = $(window).scrollTop();
        var menu = $('.main-menu-wrapper');

        if ( scroll > 250 ) {
            if(scroll > position) {
            
                $('.main-header').addClass('main-header-down');
                
                if ( $(menu).css('right') == '0px' ) {
                    menu.animate({
                        'right': '-300%',
                        'opacity':'0',
                    }, 300);

                    $('.toggle').toggleClass('toggle-open');
                    $('.brand-name').toggleClass('brand-name-open');
                }

            } else {
                
                $('.main-header').removeClass('main-header-down'); 

            }
        }
        
        position = scroll;
        
    });

    
    /*
     * FORMULARIO
    */
    //cerrar formulario
    $(document).on('click', '.close-form', function(){
        //$('.external-wrapper').fadeOut();
        $('.external-wrapper').css({'width':'0', 'height':'0'});
    });

    
    $(document).on('click', '.open-form', function(e){
        e.preventDefault();
        
        var href = $(this).attr('href');
        href = href.substring(1);

        var paquete = $(this).attr('data-paquete');
        openform(href, paquete)
        
    });

});//.ready()

/*--------------------------------------------------------------
2.0 FORMULARIOS
--------------------------------------------------------------*/
function initFormularios(){

    var specialcharacters = '@#$^&%*()+=[]\'\"\/{}|:;¡!¿?<>,.';
    var numeros = '0123456789';
    var letras = 'abcdefghijklmnñopqrstuvwxyz';

    //busca los caracteres indicados en un string y devuelve true si existen
    function areThereAny ( cadena, characters ) {
        for (var i = 0; i < characters.length; i++) {
        if ( cadena.indexOf(characters[i]) != -1 ) {
                return true;    
        }
    }
    return false;
    }

    //quita numeros de un string
    function cleanedOthers(cadena, caracteres){ 

    //eliminamos uno por uno
    for (var i = 0; i < caracteres.length; i++) {
        cadena= cadena.replace(new RegExp(caracteres[i], 'gi'), '');
    }   

    return cadena;
    }

    //quita caracteres extraños del string, los caracteres se pasan como una variable
    function cleanedSpecialCharacters(cadena, specialcharacters){ 

    //eliminamos uno por uno
    for (var i = 0; i < specialcharacters.length; i++) {
        cadena= cadena.replace(new RegExp("\\" + specialcharacters[i], 'gi'), '');
    }   

    return cadena;
    }

    //lo pasa a minúsculas
    function toLowerCase(cadena) {
        cadena = cadena.toLowerCase();
        return cadena;
    }

    //remplasa dashes "-" del string por espacios
    function replaceDashes( cadena ) {
    cadena = cadena.replace(/-/gi," ");
    cadena = cadena.replace(/_/gi," ");
    return cadena;
    }


    //borra espacios del string
    function removeDashesSpaces( cadena ) {
    cadena = cadena.replace(/-/gi,"");
    cadena = cadena.replace(/_/gi,"");
    cadena = cadena.replace(/ /gi,"");
    return cadena;
    }

    // Quitamos espacios y los sustituimos por - porque nos gusta mas asi
    function replaceSpaces( cadena ) {
    cadena = cadena.replace(/ /gi,"-");
    return cadena;
    }

    //quita acentos y ñ y lo pasa a minúsculas
    function cleanAcentos( cadena ) {

        // Lo queremos devolver limpio en minusculas
        cadena = cadena.toLowerCase();

        // Quitamos acentos y "ñ". Fijate en que va sin comillas el primer parametro
        cadena = cadena.replace(/á/gi,"a");
        cadena = cadena.replace(/é/gi,"e");
        cadena = cadena.replace(/í/gi,"i");
        cadena = cadena.replace(/ó/gi,"o");
        cadena = cadena.replace(/ú/gi,"u");
        cadena = cadena.replace(/ñ/gi,"n");
        return cadena;
    }


    /*
     * FUNCIONES DE LOS LABEL
    */
    //función que hace zoom out a las etiquetas para escribir en los input:
    function zoomOutLabel( input ) {
        var contenedor = $(input).closest('.form-group')
        var label = $(contenedor).find('label')
        $(label).addClass('on');
    }
    //funcion al hacer click en label
    function focusInput( label ) {
        var contenedor = $(label).closest('.form-group')
        var input = $(contenedor).find('input')
        $(input).focus();
    }

    //clic en label, focus en input
    $(document).on('click', 'label', function(){
        focusInput( this );
    });

    //on focus, etiqueta se achica
    $(document).on('focus', 'input', function(){
        zoomOutLabel( this );
        $(this).addClass('input-on');
    });


    /*
     * VALIDACIONES FORMULARIO
    */
    //FOCUS OUT INPUT
    //input text
    $(document).on('focusout', 'input[type=text]', function() {
        var valor = $(this).val();
        var contenedor = $(this).closest('.form-group');
        var msj = $(contenedor).find('.msj-error-input');

        if ( valor == '' ) {
            $(msj).fadeIn();
            return false;  
        } 

        valor = cleanedSpecialCharacters(valor,specialcharacters);
        
        valor = cleanedOthers(valor,numeros);
        valor = replaceDashes(valor);
        
        $(this).val(valor);

        //si hay números devuelve error
        if ( areThereAny(valor, numeros+specialcharacters) || valor == '' || valor.length < 3) {
            $(msj).fadeIn();
            
        } else { 
            $(msj).fadeOut();
           
        }
    });

    //input type numbers
    $(document).on('focusout', 'input[type=number]', function() {
        
        var valor = $(this).val();
        var contenedor = $(this).closest('.form-group');
        var msj = $(contenedor).find('.msj-error-input');

        if ( valor == '' ) {
            $(msj).fadeIn();
            return false;  
        } 
        
        valor = cleanedOthers(valor,letras);
    
        valor = cleanedSpecialCharacters(valor,specialcharacters)
                
        $(this).val(valor);

        //si hay letras o no pasa alguna de las validaciones devuelve error
        if ( areThereAny(valor, letras+specialcharacters || valor.length < 7) ) {
            $(msj).fadeIn();
            
        } else {
            $(msj).fadeOut(); 
        }
    });

    //input tyme email
    $(document).on('focusout', 'input[type=email]', function() {
        var valor = $(this).val();
        var contenedor = $(this).closest('.form-group');
        var msj = $(contenedor).find('.msj-error-input');

        if ( valor == '' ) {
            $(msj).fadeIn();
            return false;  
        } 

        valor = cleanedSpecialCharacters(valor,'#$^&%*()[]\'\"\/{}:;<>,');
        
        //remueve algún espacio si hay
        valor = valor.replace(/ /gi,"");
        
        $(this).val(valor);

        //si hay números devuelve error
        if ( valor == '' || valor.length < 8 || valor.indexOf('@') == -1 || valor.indexOf('@')  == 0 ) {
            $(msj).fadeIn();
        } else {
            $(msj).fadeOut();
        }
    });


    /*
     * SUBMIT FORMULARIO
    */    

    $(document).on('submit', '#default-form', function( e ) {
        e.preventDefault();
        var loader = $('.loader');
        var msj = $(this).find('.msj-form');
        var contenedor = $(loader).closest('form');

    	formData = new FormData( this );
        formData.append('function','formulario-default');

    	$.ajax( {
            type: 'POST',
            url: ajaxFileUrl,
            data: formData,
            processData: false,
            contentType: false,
            cache: false,
            //funcion antes de enviar
            beforeSend: function() {
                $(loader).fadeIn();
            },
            success: function ( response ) {
                //console.log(response);
                $(loader).fadeOut(); 
                msj.html(response);    
            },
            error: function ( ) {
                console.log('error');
            },
    	});//cierre ajax

    });//submit formulario default

}//initformulario

//esta funcion abre el formulario y lo busca por ajax de acuerdo a cual fue elegido
function openform(href, paquete) {
    //primero prepara el contenedor
    var section = $('#compraonline');
    var wrapper = $(section).find('.external-wrapper');
    //var sectionH = $(section).css('height');
    var sectionH = window.innerHeight;

    if (wrapper.length > 0) {

        var contenedor = $(wrapper).find('.formulario');

    } else {
        //var html = '<div class="external-wrapper"><div class="contenedor-formulario"><div class="formulario-wrapper"><picture><source srcset="'+baseUrl+'/assets/images/logo-header.svg" type="image/svg+xml"><source srcset="'+baseUrl+'/assets/images/logo-header.png 1x, '+baseUrl+'/assets/images/logo-header@2x.png 2x" media="(min-width: 315px)"><img src="'+baseUrl+'/assets/images/logo-header.png" alt="Fleek Logo"></picture><button class="close-form"><span class="tog1"></span><span class="tog2"></span></button><div class="formulario"><span class="loader">Cargando...</span></div></div></div></div>';
        var html = '<div class="external-wrapper"><div class="contenedor-formulario"><div class="formulario-wrapper"><a href="'+baseUrl+'"><picture><source srcset="'+baseUrl+'/assets/images/logo-header.svg" type="image/svg+xml"><source srcset="'+baseUrl+'/assets/images/logo-header.png 1x, '+baseUrl+'/assets/images/logo-header@2x.png 2x" media="(min-width: 315px)"><img class="logo-formulario" src="'+baseUrl+'/assets/images/logo-header.png" alt="Fleek Logo"></picture></a><button class="close-form"><span class="tog1"></span><span class="tog2"></span></button><div class="formulario"><span class="loader">Cargando...</span></div></div></div></div>';

        $(section).append( $(html) );

        var wrapper = $(section).find('.external-wrapper');

        var contenedor = $(wrapper).find('.formulario');
    }
    
    if (paquete == '') {
        paquete = $('body').attr('data-page');
    }

    //listo el contenedor busca el formulario de acuerdo a cual sea
    $.ajax( {
        type: 'POST',
        url: ajaxFileUrl,
        data: {
            function: 'get-form',
            formulario: href,
            page: paquete,
        },
        //funcion antes de enviar
        beforeSend: function() {
            console.log('Buscando formulario');
        },
        success: function ( response ) {
            //console.log(response);
            $('.loader').remove(); 
            $(contenedor).empty().append(response);
            initFormQuestion( $(contenedor).find('form') );
            //$(wrapper).fadeIn();
            $(wrapper).css({'width':'1920px', 'height':sectionH});
        },
        error: function ( ) {
            console.log('error');
        },
    });//cierre ajax
}

function initFormQuestion(formulario) {
    var formType = $(formulario).attr('data-form-type');
    var hasIndex = $(formulario).attr('has-index');

    if (formType == 'questions' ) {

        //oculta todas las preguntas y muestra solo la primera
        var questions = $(formulario).find('.form-group-question');

        $(questions[0]).addClass('activate');
        $(questions[0]).find('input').focus();

    }//if formtype

    //click boton siguiente pregunta del input
    $('.next-question-btn').click(function(){
        var question = $(this).closest('.form-group-question');

        moveQuestions('next');
    });

    //presionar enter
    $(document).keypress(function( e ) {
        if ( e.which == 13 ) {
           e.preventDefault();
           
           moveQuestions('next');
        }
    });

    $('#previous-question').click(function(){
        moveQuestions('prev');
    });

    $('#next-question').click(function(){
        moveQuestions('next');
    });

    /*
    * adelanta o atraza la pregunta
    */
    function moveQuestions(direction) {
        var question = $('.form-group-question.activate');
        var input = $(question).find('input');
        var indiceActual = $(question).attr('data-index');
        var siguiente = $(question).next();
        var anterior = $(question).prev();
        //borra todos los mensajes
        $('.msj-error-input').fadeOut();

        //sino es la ultima cambia la pregunta
        switch (direction) {
            case 'next':

                //primero valida para ver que todo este bien
                if (  ! validate ( $(input).val() ) ) {
                    var msj = $(question).find('.msj-error-input');
                    $(msj).fadeIn();
                    return true;   
                }

                //si es la ultima tiene que enviar el formulario
                if ( siguiente.length == 0 ) {
                    sendFormQuestions(formulario);
                }

                $(question).removeClass('activate');
                $(siguiente).addClass('activate')
                $(siguiente).find('input').focus();

                 //prepara el indice
                if (hasIndex ) {
                    $('.input-activate').text($('.form-group-question.activate').attr('data-index'));
                }

                if ( indiceActual >= 1 ) {
                    $('#previous-question').fadeIn();
                }

            break;

            case 'prev':

                $(question).removeClass('activate');
                $(anterior).addClass('activate')
                $(anterior).find('input').focus();

                if ( hasIndex ) {
                    $('.input-activate').text($('.form-group-question.activate').attr('data-index'));
                }

                if ( indiceActual <= 2 ) {
                    $('#previous-question').fadeOut();
                }

            break;
            
        }//switch

    }//moveQuestions

    //valida los datos
    function validate (datos) {
        var validar = true;

        if (datos == '') {
            validar = false;
        }

        return validar;
    }
    
    /*
     * envia el formulario
    */
    function sendFormQuestions(formulario) {
        var contenedor = $(formulario).closest('div');
        var inputs = formulario.find('input');
        var select = formulario.find('select');
        var textarea = formulario.find('textarea');
        var waiter = '<p class="msj-respuesta">Procesando la informacion...</p>';

        //busca los valores
        var valores = [];

        inputs.each(function(){
            input = { name: $(this).attr('name'), valor: $(this).val(), }
            valores.push(input);
        });

        select.each(function(){
            input = { name: $(this).attr('name'), valor: $(this).val(), }
            valores.push(input);
        });

        textarea.each(function(){
            input = { name: $(this).attr('name'), valor: $(this).val(), }
            valores.push(input);
        });

        //envia el formulario
        $.ajax({
            type: 'POST',
            url: ajaxFileUrl,
            data: {
                function: 'send-form',
                formulario: $(formulario).attr('name'),
                valores: valores,
            },
            //funcion antes de enviar
            beforeSend: function() {
                $(contenedor).empty().append( $(waiter) );
            },
            success: function ( response ) {
                console.log(response);
                var respuesta = JSON.parse(response);
                $(contenedor).empty().append(respuesta.mensaje);

                setTimeout(function(){
                    
                    //$('.external-wrapper').fadeOut();
                    $('.external-wrapper').css({'width':'0', 'height':'0'});
                    
                },2000);
            },
            error: function ( ) {
                console.log('error');
            },
        });//cierre ajax
    }
}//initFormQuestions()

/*--------------------------------------------------------------
3.0 POPUP PROMO
--------------------------------------------------------------*/

/*$(window).on('load', function(){

    var popup = $( '.popup' );
    var popupIMG = $( '.popup img' );
    var tiempo = 7000;
    if ( popup.length != 0 ) {
        var closeX = $( '.close-popup' );
        var closeBTN = $( '.cerrar-popup' );

        function openPop () {
            popup.addClass('popup-active');
            popupIMG.fadeIn();
        }

        setTimeout( openPop, tiempo);

        function closePopup() {
            popup.removeClass('popup-active');
            popupIMG.fadeOut(tiempo);
        }

        closeX.click(closePopup);
        closeBTN.click(closePopup);
    }
});*/

/*--------------------------------------------------------------
4.0 IMAGENES, ANIMACIONES SLIDERS
--------------------------------------------------------------*/

$(window).on('load', function(){

    if ( pageActual  == 'inicio') {
        //carga el header
        //loadAjaxTemplate('.slider-header-wrapper', initSliderHeader);
        initSliderHeader();
        //destinos boxes
        loadAjaxTemplate('.destinos-wrapper', startSliderBoxes);
        //experiencias
        loadAjaxTemplate( '.wrapper-slider-testimonios', initSliderTestimonios );
        //instagram
        getInstagram();

    } else {
        //loadAjaxTemplate('.slider-destinos-wrapper', initSliderDestinos);
        initSliderDestinos();
    }
    
    /*var templatesAjax = $('.load-ajax-template');
    templatesAjax.each(function(){
        var template = $(this).attr('data-template');
    });*/

    //cargaimaenes por ajax LAZY LOAD
    loadImages();

    //inicia paralax
    initParallax(pageActual);

    
});


/*
 * esta funcion quita el preloader
*/
function preloader(speed) {
    $('.preloader').fadeOut(speed);
}

/*
 * esta funcion hace el lazy load de las imagenes
 * para que una imagen sea lazy load hay que crear un div con la clase .lqva-lazy-load-images
*/
function loadImages() {
    var counter = 0;
    var images = $('.lqva-lazy-load-images');

    images.each(function() {
        loadImage (this);
        counter++;
    });

}//loadImages()


//esta funcion arma el html de la imagen que se va a cargar mediante "picture" y busca sus distintos srcset,y al finalizar realiza un pequeño fundido
function loadImage (image) {
    $(image).hide();
    var imagenDefault = $(image).attr('srcset');
    var imagenRetina = $(image).attr('srcset2x');
    var movil = $(image).attr('data-movil');
    var html = '<picture>';

    if ( movil ) {
        var imagenMovil = $(image).attr('srcsetmov');
        var imagenMovilRetina = $(image).attr('srcsetmov2x');

        if (imagenMovil == '') {
            imagenMovil = imagenDefault;
        }

        if (imagenMovilRetina == '') {
            imagenMovilRetina = imagenRetina;
        }

        html += '<source srcset="'+ imagenDefault + ' 1x, '+ imagenRetina +' 2x" media="(min-width: 992px)"></source>';
        html += '<source srcset="'+imagenMovil+' 1x, '+imagenMovilRetina+' 2x" media="(min-width: 315px)"></source>';
        
        
    } else {
        html += '<source srcset="' + imagenDefault + ' 1x, ' + imagenRetina + ' 2x" media="(min-width: 315px)">';
    }

    html += '<img src="'+imagenDefault+'">';
    html += '</picture>';

    $(image).append($(html)).fadeIn(1000);

}

/*
 * funcion que busca y setea la altura de un elemento
*/
function getSetHeightSize(target, elemento) {
    
    var h = $(elemento).css('height')
    $(target).css('height', h);
    //console.log('size '+ h);
}

/*
 * esta funcion arranca slider header
*/
function initSliderHeader() {

    var wrapper = $('.home-header');
    var sliderBar = $(wrapper).find('.slide-progress');

    var flechaIzqHtml = '<picture><source srcset="'+baseUrl+'/assets/images/flecha-azul.svg" type="image/svg+xml"><source srcset="'+baseUrl+'/assets/images/flecha-azul.png 1x, '+baseUrl+'/assets/images/flecha-azul@2x.png "media="(min-width: 315px)"><img class="flecha-izquierda" src="'+baseUrl+'/assets/images/flecha-azul.png" alt="icon-flecha"></picture>';
    var flechaDerHtml = '<picture><source srcset="'+baseUrl+'/assets/images/flecha-azul.svg" type="image/svg+xml"><source srcset="'+baseUrl+'/assets/images/flecha-azul.png 1x, '+baseUrl+'/assets/images/flecha-azul@2x.png "media="(min-width: 315px)"><img class="flecha-derecha" src="'+baseUrl+'/assets/images/flecha-azul.png" alt="icon-flecha"></picture>';

    $("#header-slider").owlCarousel({
        items: 1,
        animateOut: 'fadeOut',
        loop: true,
        autoplay: true,
        autoplayTimeout:6000,
        onInitialized: startProgressBar,
        onTranslate: resetProgressBar,
        onTranslated: startProgressBar,
        nav:true,
        navText : [flechaIzqHtml, flechaDerHtml],
        dots:true,
    });


    //inicia la progress bar de los sliders  
    function startProgressBar() {
        // apply keyframe animation
        //var persentajeWidth = '90%';
        var persentajeWidth = innerWidth - $(sliderBar).offset().left +20;
        $(window).resize(function(){
            persentajeWidth = innerWidth - $(sliderBar).offset().left +20;
        });
        if ( windowWidth < 960 ) {
            persentajeWidth = '100%'
        }

        $(sliderBar).css({
        width: persentajeWidth,
        transition: "width 6000ms"
        });
    }
    
    //vuelve a 0 la progras bar
    function resetProgressBar() {
        $(sliderBar).css({
        width: 0,
        transition: "width 0s"
        });
    }

    var elemento = $('.slider-header-wrapper')
    
    getSetHeightSize(wrapper, elemento);

    preloader(500);

    loadAjaxTemplate('.icon-header');
}//init slider header


/*
 * inicia los slider de destinos
*/
function initSliderDestinos() {
    var wrapper = $('.destinos-header');
    //var sliderBar = $(wrapper).find('.slide-progress');

    var flechaIzqHtml = '<picture><source srcset="'+baseUrl+'/assets/images/flecha-azul.svg" type="image/svg+xml"><source srcset="'+baseUrl+'/assets/images/flecha-azul.png 1x, '+baseUrl+'/assets/images/flecha-azul@2x.png "media="(min-width: 315px)"><img class="flecha-izquierda" src="'+baseUrl+'/assets/images/flecha-azul.png" alt="icon-flecha"></picture>';
    var flechaDerHtml = '<picture><source srcset="'+baseUrl+'/assets/images/flecha-azul.svg" type="image/svg+xml"><source srcset="'+baseUrl+'/assets/images/flecha-azul.png 1x, '+baseUrl+'/assets/images/flecha-azul@2x.png "media="(min-width: 315px)"><img class="flecha-derecha" src="'+baseUrl+'/assets/images/flecha-azul.png" alt="icon-flecha"></picture>';

    $("#destino-slider").owlCarousel({
        items: 1,
        loop: true,
        //autoHeight: true,
        /*autoplay: true,
        autoplayTimeout:6000,
        onInitialized: startProgressBar,
        onTranslate: resetProgressBar,
        onTranslated: startProgressBar,*/
        nav:true,
        navText : [flechaIzqHtml, flechaDerHtml],
        dots:true,
    });

    positionNav();

    function positionNav() {
        var hHeader = $('.destinos-header').css('height');
        var hnav = $('.owl-nav').css('height');
        var hdots = $('.owl-dots').css('height');
        var h = parseInt(hHeader)-parseInt(hnav);
        var h2 = parseInt(hHeader)-parseInt(hdots);
        $('.owl-nav').css('top', h+'px');

        $('.owl-dots').css('top', h2+'px');
    }
    
    $(window).resize(function(){
        positionNav();
    });

    preloader(500);

    loadAjaxTemplate('.icon-header');
}

/*
 * slider de testimonios o experiencias
*/
function initSliderTestimonios() {
    var wrapper = $('.wrapper-slider-testimonios');
    var sliderBar = $(wrapper).find('.slide-progress');

    var flechaIzqHtml = '<picture><source srcset="'+baseUrl+'/assets/images/flecha-azul.svg" type="image/svg+xml"><source srcset="'+baseUrl+'/assets/images/flecha-azul.png 1x, '+baseUrl+'/assets/images/flecha-azul@2x.png "media="(min-width: 315px)"><img class="flecha-izquierda" src="'+baseUrl+'/assets/images/flecha-azul.png" alt="icon-flecha"></picture>';
    var flechaDerHtml = '<picture><source srcset="'+baseUrl+'/assets/images/flecha-azul.svg" type="image/svg+xml"><source srcset="'+baseUrl+'/assets/images/flecha-azul.png 1x, '+baseUrl+'/assets/images/flecha-azul@2x.png "media="(min-width: 315px)"><img class="flecha-derecha" src="'+baseUrl+'/assets/images/flecha-azul.png" alt="icon-flecha"></picture>';

    $("#experiencias-slider").owlCarousel({
        items: 1,
        animateOut: 'fadeOut',
        loop: true,
        autoplay: true,
        autoplayTimeout:6000,
        video:true,
        videoWidth: '100%',
        onInitialized: startProgressBar,
        onTranslate: resetProgressBar,
        onTranslated: startProgressBar,
        nav:true,
        navText : [flechaIzqHtml, flechaDerHtml],
        dots:true,
    });


    //inicia la progress bar de los sliders  
    function startProgressBar() {
        // apply keyframe animation
        var persentajeWidth = '45%';
        if ( windowWidth < 960 ) {
            persentajeWidth = '100%'
        }

        $(sliderBar).css({
        width: persentajeWidth,
        transition: "width 6000ms"
        });
    }
    
    //vuelve a 0 la progras bar
    function resetProgressBar() {
        $(sliderBar).css({
        width: 0,
        transition: "width 0s"
        });
    }

    //var elemento = $('.slider-header-wrapper')
    //getSetHeightSize(wrapper, elemento);
    //loadAjaxTemplate('.icon-header');
}

function startSliderBoxes() {
    var box1 = $('#slide-nieve');
    var box2 = $('#slide-playa');
    
    var sliderBar1 = $(box1).find('.slide-progress');
    var sliderBar2 = $(box2).find('.slide-progress');

    var slider1 = $(box1).find('.owl-carousel');
    var slider2 = $(box2).find('.owl-carousel');

    var flechaIzqHtmlA = '<picture><source srcset="'+baseUrl+'/assets/images/flecha-amarillo.svg" type="image/svg+xml"><source srcset="'+baseUrl+'/assets/images/flecha-amarillo.png 1x, '+baseUrl+'/assets/images/flecha-amarillo@2x.png "media="(min-width: 315px)"><img class="flecha-izquierda" src="'+baseUrl+'/assets/images/flecha-amarillo.png" alt="icon-flecha"></picture>';
    var flechaDerHtmlA = '<picture><source srcset="'+baseUrl+'/assets/images/flecha-amarillo.svg" type="image/svg+xml"><source srcset="'+baseUrl+'/assets/images/flecha-amarillo.png 1x, '+baseUrl+'/assets/images/flecha-amarillo@2x.png "media="(min-width: 315px)"><img class="flecha-derecha" src="'+baseUrl+'/assets/images/flecha-amarillo.png" alt="icon-flecha"></picture>';

    var flechaIzqHtmlR = '<picture><source srcset="'+baseUrl+'/assets/images/flecha-rojo.svg" type="image/svg+xml"><source srcset="'+baseUrl+'/assets/images/flecha-rojo.png 1x, '+baseUrl+'/assets/images/flecha-rojo@2x.png "media="(min-width: 315px)"><img class="flecha-izquierda" src="'+baseUrl+'/assets/images/flecha-rojo.png" alt="icon-flecha"></picture>';
    var flechaDerHtmlR = '<picture><source srcset="'+baseUrl+'/assets/images/flecha-rojo.svg" type="image/svg+xml"><source srcset="'+baseUrl+'/assets/images/flecha-rojo.png 1x, '+baseUrl+'/assets/images/flecha-rojo@2x.png "media="(min-width: 315px)"><img class="flecha-derecha" src="'+baseUrl+'/assets/images/flecha-rojo.png" alt="icon-flecha"></picture>';

    $(slider1).owlCarousel({
        items: 1,
        loop: true,
        autoplay: true,
        autoplayTimeout:4000,
        animateIn:  'slideInRight',
        animateOut: 'slideOutLeft',
        onInitialized: startProgressBar,
        onTranslate: resetProgressBar1,
        onTranslated: startProgressBar,
        nav:true,
        navText : [flechaIzqHtmlA, flechaDerHtmlA],
        dots:false,
    });

    $(slider2).owlCarousel({
        items: 1,
        loop: true,
        autoplay: true,
        autoplayTimeout:5000,
        animateIn:  'slideInRight',
        animateOut: 'slideOutLeft',
        onInitialized: startProgressBar,
        onTranslate: resetProgressBar2,
        onTranslated: startProgressBar,
        nav:true,
        navText : [flechaIzqHtmlR, flechaDerHtmlR],
        dots:false,
    });


    //inicia la progress bar de los sliders  
    function startProgressBar() {
        // apply keyframe animation
        var persentajeWidth = '100%';

        $(sliderBar1).css({
        width: persentajeWidth,
        transition: "width 4000ms"
        });

        $(sliderBar2).css({
            width: persentajeWidth,
            transition: "width 5000ms"
        });
    }
    
    //vuelve a 0 la progras bar
    function resetProgressBar1() {
        
        $(sliderBar1).css({
            width: 0,
            transition: "width 0s"
        });
    }
    function resetProgressBar2() {
        
        $(sliderBar2).css({
            width: 0,
            transition: "width 0s"
        });
    }

    //var elemento = $('.slider-header-wrapper')
    //getSetHeightSize(wrapper, elemento);
    //loadAjaxTemplate('.icon-header');

}//startSliderBoxes()

/*
 * esta funcion carga el template
*/
function loadAjaxTemplate(contenedor, callback) {

    var template = $(contenedor).attr('data-template');

    $.ajax( {
        type: 'POST',
        url: ajaxFileUrl,
        data: {
          function: 'load-template',
          template: template,
          pagina:pageActual,
        },
        //funcion antes de enviar
        beforeSend: function() {
            console.log('Buscando template');
        },
        success: function ( response ) {
            //console.log(response);
            if ( response ) {
                $(contenedor).append( response );

                if ( typeof callback  == 'function' ) {
                    callback();
                }
            }
        },
        error: function ( ) {
            console.log('error');
        },
      });//cierre ajax
  
}


/*
 * activa las animaciones al scrolear
*/
function startAnimations() {
    /*
     * IN VIEW ANIMATION
    */
    /* var $animation_elements = $('.animate-element');
    var $window = $(window);

    function check_if_in_view() {
        var window_height = $window.height();
        var window_top_position = $window.scrollTop();
        var window_bottom_position = (window_top_position + window_height);

        $.each($animation_elements, function() {
            var $element = $(this);
            var element_height = $element.outerHeight();
            var element_top_position = $element.offset().top;
            var element_bottom_position = (element_top_position + element_height);

            //check to see if this current container is within viewport
            if ((element_bottom_position >= window_top_position) &&
                (element_top_position <= window_bottom_position)) {
                $element.addClass('in-view');
            } else {
                $element.removeClass('in-view');
            }
        });
    }

    $window.on('scroll resize', check_if_in_view);
    $window.trigger('scroll');
    */
}

/*
 * INICIA LOS PARALLAXS
*/

function initParallax (pagina) {
    var userAgent = navigator.userAgent || navigator.vendor || window.opera;
    if (/iPad|iPhone|iPod/.test(userAgent) && !window.MSStream) {
        return true;
    }

    if ( window.innerWidth < 767 ) {
        return true;
    }
    
    $(window).scroll(function(){
      
        //valor de barra que necesitan todos
        var barra = ($(window).scrollTop());
        //console.log(barra);

        switch (pagina) {
            case 'inicio':
                //imagen nosotros
                var imagenNos = $('.nosotros-wrapper .imagen-nosotros img')
                var moverImagenNos = ( (barra / 10) * 1.01 ) / 1.99;
                $(imagenNos).css('top', moverImagenNos + '%');

                //imagenes header
                var imagenesSlider = $('.item-slider .imagen-fondo img')
                var moverImagenesSlider = ( (barra / 1.1) / 10 ) + 50;
                $(imagenesSlider).css('top', moverImagenesSlider + '%');
            break;

            /*case 'bariloche':
            case 'cancun':
            case 'londres':
                //imagenes header
                var imagenesSlider = $('.item-slider .imagen-fondo img')
                var moverImagenesSlider = ( (barra / 1.1) / 10 ) + 50;
                $(imagenesSlider).css('top', moverImagenesSlider + '%');
            break;*/
        }

    });
}

/*
 * esta funcion carga el template del instagram
*/
function getInstagram() {

    if (window.innerWidth > 960 ) {
        var scripttoLoad = '<script src="https://cdn.lightwidget.com/widgets/lightwidget.js"></script><iframe src="//lightwidget.com/widgets/6d99a6fe971b567c99655fc78fe209b7.html" scrolling="no" allowtransparency="true" class="lightwidget-widget" style="width:100%;border:0;overflow:hidden;"></iframe>';
        var wrapper = $('.wrapper-feed');

        $(wrapper).empty().append(scripttoLoad);
    }
}