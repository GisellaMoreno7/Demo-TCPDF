<?php
//include_once "../Librerias/tcpdf/tcpdf.php";
require_once('../Librerias/tcpdf/tcpdf.php');
include_once "../../Utiles/funciones.php";

//$_POST=data_submitted();

if ($_FILES['imagen']["error"] <= 0) {

    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $edad = $_POST['edad'];
    $correo = $_POST['correo'];
    $sobreMi = $_POST['sobreMi'];
    $educacion = $_POST['estudios'];
    $experiencia = $_POST['exp'];
    $imagen = $_FILES['imagen']; //Recibe la imagen
    $directorio = "../foto/"; //donde se guarda la imagen de manera local
    $nombreImagen = uniqid() . "_" . $imagen['name']; //Le da un unico id a la imagen
    $ruta = $directorio . $nombreImagen; //ruta del directorio
    move_uploaded_file($imagen['tmp_name'], $ruta); //lo guarda en el directorio

    //creo un nuevo objeto tcpdf
    $pdf = new TCPDF('P', 'mm', 'A4', true, 'UTF-8', true);
    $pdf->setPrintHeader(false); //desabilita el header
    $pdf->setPrintFooter(false); //desabilita el footer

    //Se crea una pagina
    $pdf->AddPage();
    //Setear la fuente en general
    //$pdf->SetFont('falmily', 'style', tamaño);
    $pdf->SetFont('helvetica', '', 18);
    $html = '
    <h2>CURRÍCULUM VITAE</h2>
    <div class="contenedor-general">
    <div class="bloque-dato">
    <h4>DATOS PERSONALES</h4>
    Nombre y apellido: ' . $nombre . ' ' . $apellido . '<br>Edad: ' . $edad . '<br>Correo electrónico: ' . $correo . '
    </div>
    <div class="bloque-dato border">
    <h4>SOBRE MÍ</h4>' .
        $sobreMi . '
    </div>
    <div class="bloque-dato border">
    <h4>NIVEL DE ESTUDIOS</h4>' .
        $educacion . '
    </div>
    <div class="bloque-dato border">
    <h4>EXPERIENCIA LABORAL</h4> ' .
        $experiencia . '
    </div>
    </div>';

    $html .= '<style>' . file_get_contents('../estructura/css/estilos.css') . '</style>'; //agrega los estilos al pdf

    $pdf->writeHTML($html);
    //coloca una imagen en el pdf. Este coloca una foto en el curriculum
    $pdf->Image($ruta, 158, 32.8, 35, 45, '', '', '', false, 300, '', false, false, 0);

    $pdf->Output($nombre . 'curriculum.pdf', 'I'); //manda el documento a un destino dado


} else {
    echo "No se ah podido generar el Curriculum";
}
