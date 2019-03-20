<?php 
//compra online
$form1 = array(
    'formName' => 'compra-online',
    'formId' => 'compra-online',
    'formType' => 'questions',//el formulario questions va mostrando las preguntas individualmente
    'action' => '',
    'method' => 'POST',
    'loader' => false,
    'submit' => false,
    'indice' => true,
    'inputs' => array(
        array(
            'question' => 'Por favor, indicanos tu Nombre y apellido.',
            'label' => 'Nombre y Apellido',
            'inputName' => 'nombre',
            'inputType' => 'text',
            'error-msj' => 'Es necesario que complete este campo',
            'clases' => '',
        ),
        array(
            'question' => 'Tu número de teléfono',
            'label' => 'Teléfono',
            'inputName' => 'telefono',
            'inputType' => 'text',
            'error-msj' => 'Es necesario que complete este campo',
            'clases' => 'formulario-numero',
        ),
        array(
            'question' => 'Ahora tu Email',
            'label' => 'Email',
            'inputName' => 'email',
            'inputType' => 'text',
            'error-msj' => 'Es necesario que complete este campo',
            'clases' => 'formulario-email',
        ),
        array(
            'question' => 'Y dejanos un horario para contactarte',
            'label' => 'horario',
            'inputName' => 'horario',
            'inputType' => 'text',
            'error-msj' => 'Es necesario que complete este campo',
            'clases' => '',
        ),
        array(
            'question' => 'Ahora indicanos nombre del colegio al que asiste tu hijo/a',
            'label' => 'Colegio',
            'inputName' => 'colegio',
            'inputType' => 'text',
            'error-msj' => 'Es necesario que complete este campo',
            'clases' => '',
        ),
        array(
            'question' => '¿En qué localidad?',
            'label' => 'Localidad',
            'inputName' => 'localidad',
            'inputType' => 'text',
            'error-msj' => 'Es necesario que complete este campo',
            'clases' => '',
        ),
        array(
            'question' => 'Turno',
            'label' => 'Turno',
            'inputName' => 'turno',
            'inputType' => 'text',
            'error-msj' => 'Es necesario que complete este campo',
            'clases' => '',
        ),
        array(
            'question' => 'Año',
            'label' => 'año',
            'inputName' => 'año',
            'inputType' => 'text',
            'error-msj' => 'Es necesario que complete este campo',
            'clases' => '',
        ),
        array(
            'question' => 'División',
            'label' => 'División',
            'inputName' => 'division',
            'inputType' => 'text',
            'error-msj' => 'Es necesario que complete este campo',
            'clases' => '',
        ),
        array(
            'question' => '¿Qué cantidad de alumnos viaja?',
            'label' => 'alumnos',
            'inputName' => 'alumnos',
            'inputType' => 'text',
            'error-msj' => 'Es necesario que complete este campo',
            'clases' => '',
        ),
        array(
            'question' => 'Año en el que van a viajar',
            'label' => 'Fecha viaje',
            'inputName' => 'fecha-viaje',
            'inputType' => 'text',
            'error-msj' => 'Es necesario que complete este campo',
            'clases' => '',
        ),
    ),
);

$page = $data['page'];
switch ($page) {
    case 'inicio':
        $page = '';
    break;
    case 'villa-carlos-paz':
        $page = 'Villa Carlos Paz';
    break;
    case 'san-rafael':
        $page = 'San Rafael';
    break;
}

$counterIndex = 0;
if ($data == 'compra-online') {
    $formulario = $form1;
} else {
    $formulario = $form1;
}

?>
<form method="<?php echo $formulario['method']; ?>" name="<?php echo $formulario['formName']; ?>" id="<?php echo $formulario['formId']; ?>" action="<?php echo $formulario['action']; ?>" data-form-type="<?php echo $formulario['formType']; ?>" has-index="<?php echo $formulario['indice']; ?>">
    <input type="hidden" name="paquete" value="<?php echo $page; ?>">

    <?php if ( $formulario['loader'] ) : ?>
        <div class="loader"></div>
    <?php endif; ?>
    
    <div class="inner-wrapper-form">

        <?php if ( $formulario['formType'] == 'questions' ) : ?>

            <div class="wrapper-questions">

        <?php endif; ?>

        <?php foreach ( $formulario['inputs'] as $input ) { 
            
            if ( $formulario['formType'] == 'questions' ) : ?>
                
                <div data-index="<?php echo $counterIndex+1; ?>" class="form-group-question <?php echo $input['clases']; ?>">

                    <h4 class="question">
                        <?php echo $input['question']; ?>
                    </h4>

            <?php endif; ?>

            <div class="form-group <?php echo $input['clases']; ?>">

                <input type="<?php echo $input['inputType']; ?>" name="<?php echo $input['inputName']; ?>">
                <label for="<?php echo $input['inputName']; ?>">
                    <?php echo $input['label']; ?>
                </label>
                <span class="msj-error-input">
                    <?php echo $input['error-msj']; ?>
                </span>
                
                <?php if ( $formulario['formType'] == 'questions' ) : ?>
                
                    <button type="button" class="next-question-btn">
                        <span class="sr-only">Siguiente pregunta</span>
                    </button>

                <?php endif; ?>

                </div><!--//.form-group-->
                
                <?php if ( $formulario['formType'] == 'questions' ) : ?>
                    
                        <p class="aclaracion">
                            Presioná Enter para acceder a la siguiente pregunta.
                        </p>

                    </div><!--//.form-group-question-->

                <?php endif; 

            $counterIndex++;

        }//foreach inputs ?>

        <?php if ( $formulario['formType'] == 'questions' ) : ?>

        </div><!--//.wrapper-questions-->

        <?php endif; ?>
        
        <?php if ( $formulario['indice'] ) : ?>
            <div class="indice-formulario">
                <button id="previous-question" type="button">Anterior</button>
                <p>
                    <span class="input-activate">
                        1
                    </span>
                    <span class="input-total">
                        <?php echo count($formulario['inputs']); ?>
                    </span>
                </p>
                <button id="next-question" type="button">Siguiente</button>
            </div>
        <?php endif; ?>

        <?php if ( $formulario['submit'] ) : ?>
            <button type="submit" class="btn-submit">Enviar</button>
        <?php endif; ?>
        
    </div><!-- //.inner-wrapper-form -->
    <span class="msj-form"></span>
</form><!-- //default-form -->