<?php

/**
 * Determina tipo de método que ingresa a ser evaluado,
 * retorna array con todos los datos correspondientes
 * @return array
 */
function data_submitted()
{
    $datos = [];
    if (!empty($_POST))
        $datos = $_POST;
    elseif (!empty($_GET)) {
        $datos = $_GET;
    }
    if (count($datos)) {
        foreach ($datos as $indice => $valor) {
            if ($valor == "")
                $datos[$indice] = 'null';
        }
    }
    return $datos;
}

function verEstructura($e)
{
    echo "<pre>";
    print_r($e);
    echo "</pre>";
}

// autoload para version 8.0
spl_autoload_register(function ($class_name) {
    $directorys = array(
        $_SESSION['ROOT'] . 'Modelo/',
        $_SESSION['ROOT'] . 'Modelo/Conector/',
        $_SESSION['ROOT'] . 'Control/',
        //  $GLOBALS['ROOT'].'util/class/',
    );
    //print_object($directorys) ;
    foreach ($directorys as $directory) {
        if (file_exists($directory . $class_name . '.php')) {
            // echo "se incluyo".$directory.$class_name . '.php';
            require_once($directory . $class_name . '.php');
            return;
        }
    }
});
