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
    $imagen = $_FILES['imagen'];//Recibe la imagen
    $directorio = "../foto/";//donde se guarda la imagen de manera local
    $nombreImagen = uniqid() . "_" . $imagen['name'];//Le da un unico id a la imagen
    $ruta = $directorio . $nombreImagen;//ruta del directorio
    move_uploaded_file($imagen['tmp_name'], $ruta);//lo guarda en el directorio

    //creo un nuevo objeto tcpdf
    $pdf = new TCPDF('P', 'mm', 'A4', true, 'UTF-8', true);
    $pdf->setPrintHeader(false);//desabilita el header
    $pdf->setPrintFooter(false);//desabilita el footer

    //Se crea una pagina
    $pdf->AddPage();
    //Setear la fuente en general
    //$pdf->SetFont('falmily', 'style', tamaño);
    $pdf->SetFont('helvetica','', 24);
    $html=
    "<h3>Curriculum Viate</h3>
    $nombre $apellido
    <p>PERFIL <br>
    $sobreMi</p>
    <p>DATOS PERSONALES: <br>
    Nombre: $nombre <br>
    Apellido: $apellido <br>
    Edad: $edad<br>
    Correo: $correo <br>
    </p>
    <p>Nivel de Estudios: $educacion</p>
    <p>EXPERIENCIA LABORAL: <br>
    $experiencia</p>";/*guarda el texto que va en el pdf. puede haber multiples o uno solo
    si se usa directamente el metodo writeHTML()*/
    //html .= '<style>'.file_get_contents('estilos.css').'</style>';//agrega los estilos al pdf
    $pdf->writeHTML($html);
    //coloca una imagen en el pdf. Este coloca una foto en el curriculum
   // $pdf->Image($ruta,10, 10, 40,40, '', '', '', false, 300, '', false, false, 0);

    $pdf->Output($nombre. 'curriculum.pdf','I');//manda el documento a un destino dado


}else{
    echo "No se ah podido generar el Curriculum";
}

?>