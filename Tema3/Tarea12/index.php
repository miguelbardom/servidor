<?php

require('../../fpdf186/fpdf.php');
require('./contenido.php');

$pdf = new Contenido();

$pdf->AddPage();
$pdf->SetFont('Arial','',10);
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
$pdf->SetFont('Arial','B',17);
$pdf->SetXY(115,40);
$pdf->Write(12, "Cliente:");
$pdf->Ln();
$pdf->SetFont('Arial','',10);
$pdf->SetXY(115,50);
$pdf->Write(5, "VicVal SL");
$pdf->Ln();
$pdf->SetXY(115,55);
$pdf->Write(5, "CIF/NIF: B30142516");
$pdf->Ln();
$pdf->SetXY(115,60);
$pdf->Write(5, "C/ Mala, no 1");
$pdf->Ln();
$pdf->SetXY(115,65);
$pdf->Write(5, "18190 Granada");
$pdf->Ln();
$pdf->SetXY(115,70);
$pdf->Write(5, "Granada, Espana");

//tabla abajo
$pdf->Ln();
$pdf->SetXY(28,135);
$pdf->Write(5, "Concepto");
$pdf->Ln();

$pdf->Cell(50,10,"Concepto",1,0,"",false);
$pdf->Cell(30,10,"Cantidad",1,0,"C",false);
$pdf->Cell(30,10,"Base Imponible",1,0,"C",false);
$pdf->Cell(30,10,"I.V.A.",1,0,"C",false);

// $text = "€";
// $pdfobj->Write(0,iconv('UTF-8', 'windows-1252', $text));

$array = array(
    array("Servicio de soporte tecnico y reparacion de sistemas informaticos", 2, 40.00),
    array("Reparacion sistema operativo smartphone", 1, 35.00),
    array("Venta mouse CA-3245", 1, 10.00),
    array("Venta teclado supra CA-992", 1, 25.00),
    array("Venta pantalla i32", 1, 60.00),
    array("Memoria usb 132GB", 1, 20.00)
);

function creaTabla($array, $pdf){
    $pdf->SetFont('Arial','B',15);
    foreach ($array as $row) {
        foreach ($row as $dato){
            $pdf->Cell(40,10,$dato,1,0,'C',false);
        }
        $pdf->Ln();
    }

}






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

function crearTabla($array, $pdf){
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