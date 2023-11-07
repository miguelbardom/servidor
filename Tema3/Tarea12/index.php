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
$pdf->SetFont('Arial','',13);
$pdf->SetTextColor(0,0,0);

// $text = "€";
// $pdfobj->Write(0,iconv('UTF-8', 'windows-1252', $text));

$array = array(
    array("Servicio de soporte tecnico y reparacion", 2, 80.00),
    array("Reparacion sistema operativo smartphone", 1, 35.00),
    array("Venta mouse CA-3245", 1, 10.00),
    array("Venta teclado supra CA-992", 1, 25.00),
    array("Venta pantalla i32", 1, 60.00),
    array("Memoria usb 132GB", 1, 20.00)
);

function creaTabla($array, $pdf){
    $pdf->SetFillColor(0,154,255);
    $pdf->Cell(70,10,"Concepto",0,0,"",true);
    $pdf->Cell(30,10,"Cantidad",0,0,"C",true);
    $pdf->Cell(30,10,"Precio",0,0,"C",true);
    $pdf->Cell(30,10,"I.V.A.",0,0,"C",true);
    $pdf->Ln();
    $pdf->SetFont('Arial','',10);
    $pdf->SetTextColor(0,0,70);
    $pdf->SetFillColor(224,235,255);
    $fill = false;
    $x = 28;
    $y = 135;
    foreach ($array as $row) {
        $y += 10;
        $pdf->SetXY($x,$y);
        $pdf->Cell(70, 10, $row[0], 0, 0, "", $fill);
        $pdf->Cell(30, 10, $row[1], 0, 0, "C", $fill);
        $pdf->Cell(30, 10, number_format($row[2],2), 0, 0, "C", $fill);
        $pdf->Cell(30, 10, number_format(($row[2]*0.21), 2), 0, 0, "C", $fill);
        $pdf->Ln();
        $fill = !$fill;
    }
    // $pdf->SetXY(28,205);
    // $pdf->Cell(160,0,'','T');
}
creaTabla($array, $pdf);

$pdf->Ln();
$pdf->SetFont('Arial','',12);
$pdf->SetXY(120,210);
$pdf->Write(5, "Total Precio:");
$pdf->Ln();
$pdf->SetXY(122,218);
$pdf->Write(5, "I.V.A. 21%:");
$pdf->Ln();
$pdf->SetXY(166,210);
$pdf->Write(5, number_format(230.00, 2));//lo he intentado con bucle pero me salia un error
$pdf->Ln();
$pdf->SetXY(167,218);
$pdf->Write(5, number_format(230.00*0.21, 2));
$pdf->Ln();
$pdf->SetFont('Arial','B',15);
$pdf->SetXY(28,226);
$pdf->Cell(160,0,'','T');
$pdf->SetXY(124,233);
$pdf->Write(5, "TOTAL:");
$pdf->Ln();
$pdf->SetXY(163,233);
$pdf->Write(5, number_format((230.00 + 230.00*0.21), 2));
$pdf->Write(5, " E");


$pdf->Output();