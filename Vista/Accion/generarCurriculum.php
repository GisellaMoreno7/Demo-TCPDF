<?php
include_once "../Librerias/tcpdf/tcpdf.php";

if ($_FILES['imagen']["error"] <= 0) {
    
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $edad = $_POST['edad'];
    $correo = $_POST['correo'];
    $sobreMi = $_POST['sobreMi'];
    $educacion = $_POST['educacion'];
    $experienca = $_POST['exp'];// como hacemos para acomodar la lista? o mas bien el formato?
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
    $html='';/*guarda el texto que va en el pdf. puede haber multiples o uno solo
    si se usa directamente el metodo writeHTML()*/
    $pdf->writeHTML($html);
    //coloca una imagen en el pdf. Este coloca una foto en el curriculum
    $pdf->Image($ruta,10, 10, 40,40, '', '', '', false, 300, '', false, false, 0);

    $pdf->Output($nombre. 'curriculum.pdf','I');


}else{
    echo "No se ah podido generar el Curriculum";
}

?>