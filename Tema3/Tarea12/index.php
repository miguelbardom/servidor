<?php

require('../../fpdf186/fpdf.php');
require('./contenido.php');

$pdf = new Contenido();

$pdf->AddPage();
$pdf->SetFont('Arial','',9);
$pdf->SetX(27);
$pdf->SetTextColor(0,0,70);

$pdf->Image("./logo-company.jpg",20,10);

//texto bajo el logo
$pdf->Ln(45);
$pdf->SetX(28);
$pdf->Write(5, "Miguel Barba Dominguez");
$pdf->Ln();
$pdf->SetX(28);
$pdf->Write(5, "CIF/NIF: 15402650F");
$pdf->Ln();
$pdf->SetX(28);
$pdf->Write(4, "Avda. Requejo, 1");
$pdf->Ln();
$pdf->SetX(28);
$pdf->Write(5, "CP:49003 Zamora");
$pdf->Ln();
$pdf->SetX(28);
$pdf->Write(5, "Zamora, Espana");

//texto derecha
$pdf->Ln();
$pdf->SetXY(137,15);
$pdf->Write(5, "Numero de factura: 2023-0001");
$pdf->Ln();
$pdf->SetXY(144,25);
$pdf->Write(5, "Fecha factura: 21/11/2023");

$pdf->Ln();
$pdf->SetFont('Arial','B',16);
$pdf->SetXY(120,40);
$pdf->Write(12, "Cliente:");
$pdf->Ln();
$pdf->SetFont('Arial','',9);
$pdf->SetXY(120,50);
$pdf->Write(5, "VicVal SL");







$pdf->AddPage();

$pdf->Cell(30,10,"Prueba",1,0,"C",false);
$pdf->Cell(30,10,"Prueba",1,0,"C",false);
$pdf->Cell(30,10,"Prueba",1,0,"C",false);

$array = array(
    array('pc1','Lenovo','1TB','4GB RAM'),
    array('pc2','Dell','2TB','16GB RAM'),
    array('pc3','HP','1TB','8GB RAM'),
    array('pc4','Even','2TB','4GB RAM'),
);
$pdf->AddPage();

creaTabla($array,$pdf);

$pdf->Output();

function creaTabla($array, $pdf){
    $pdf->SetFont('Arial','B',15);
    $pdf->SetFillColor(1,100,255);
    $pdf->Cell(40,10,"PC",1,0,"C",true);
    $pdf->Cell(40,10,"Marca",1,0,"C",true);
    $pdf->Cell(40,10,"Disco Duro",1,0,"C",true);
    $pdf->Cell(40,10,"RAM",1,0,"C",true);

    $pdf->Ln();

    foreach ($array as $row) {
        foreach ($row as $dato){
            $pdf->Cell(40,10,$dato,1,0,'C',false);
        }
        $pdf->Ln();
    }

}