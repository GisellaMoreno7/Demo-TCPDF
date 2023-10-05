<?php
require_once "../Librerias/tcpdf/tcpdf.php";
//$page_format = array ('MediaBox'=>array('llx'=>0, 'lly'=>0, 'urx'=>21, 'ury'=>29.7));
$pdf= new TCPDF('P','mm','A4',true,'UTF-8',false);
$pdf->setPrintHeader(false);
$pdf->setPrintFooter(false);
$pdf->setMargins(0,0,0,false);
$pdf->setAutoPageBreak(true,0);
$pdf->setFont('Aefurat','',15);
$pdf->AddPage();
$html='<div style="text-align:center;"> Hola Mundo!</div>';
$pdf->writeHTML($html,true,0,false,0);
$pdf->lastPage();
ob_start();
$pdf->output();
ob_end_flush();
?>