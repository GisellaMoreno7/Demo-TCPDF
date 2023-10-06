<?php
// Extend the TCPDF class to create custom Header and Footer
class MYPDF extends TCPDF {

    //Page header
    public function Header() {
        // Logo
        $image_file = 'C:\xampp\htdocs\PWD\Demo-TCPDF\Vista\foto\photo_2019-07-01_08-35-35.jpg';
        $this->Image($image_file, 15, 15, 25, 25, '', '', '', false, 300, '', false, false, 0);
        //$this->Image($image_file, 30, 28, 20, 20, '', '', '', false, 30, '', false, false, 0);
        // Set font
        $this->SetFont('helvetica', 'B', 20);
        // Title
        $this->Cell(0, 15, '<< Auto >>', 0, false, 'C', 0, '', 0, false, 'M', 'M');
    }

    // Page footer
    public function Footer() {
        // Position at 15 mm from bottom
        $this->SetY(-15);
        // Set font
        $this->SetFont('helvetica', 'I', 8);
        // Page number
        $this->Cell(0, 10, 'Page '.$this->getAliasNumPage().'/'.$this->getAliasNbPages(), 0, false, 'C', 0, '', 0, false, 'T', 'M');
    }
}
?>