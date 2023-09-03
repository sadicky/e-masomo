<?php
require('../../assets/fpdf/fpdf.php');

require '../../Models/Admin/order.class.php';

// This will output the barcode as HTML output to display in the browser
$orders = new Repair();
$id=isset($_POST['id'])?$_POST['id']:'';
$view = $orders->getOrder($id);

$pdf = new FPDF('P','mm',array(80,150));
$pdf->AddPage();

$pdf->SetFont('Arial','B',16);
$pdf->Cell(60,8,'Icare SM',1,1,'C');

$pdf->SetFont('Arial','B',8);
$pdf->Cell(60,5,'Adresse:1) Bata Gallery Kilimanjaro',0,1,'C');
$pdf->Cell(60,5,'2) Bella Vista Building, 2e Etage Num 13',0,1,'C');
$pdf->Cell(60,5,'Tel: +257 71 197 197/65 199 226',0,1,'C');
$pdf->Cell(60,5,'Email: icaresolutionsmole@gmail.com',0,1,'C');
$pdf->Cell(60,5,'Website: www.icaresolutionsmobile.com',0,1,'C');

$pdf->SetDash(1,1);
$pdf->Line(7,43,72,43);

$pdf->SetFont('Courier','',8);
$pdf->Cell(20,4,'FACTURE:',0,0,'');

$pdf->SetFont('Courier','',10);
$pdf->Cell(40,4,$view->uuid,0,1,'');

$pdf->SetFont('Courier','',8);
$pdf->Cell(20,4,'DATE:',0,0,'');

$pdf->SetFont('Courier','',10);
$pdf->Cell(40,4,$view->date,0,1,'');

$pdf->SetFont('Courier','',8);
$pdf->Cell(20,4,'GARANTIE:',0,0,'');

$pdf->SetFont('Courier','',10);
$pdf->Cell(40,4,$view->has_warranty."Jrs",0,1,'');

$pdf->SetFont('Courier','',8);
$pdf->Cell(20,4,'STATUT:',0,0,'');

$pdf->SetFont('Courier','',10);
$pdf->Cell(40,4,$view->body,0,1,'');

$pdf->SetFont('Courier','',8);
$pdf->Cell(20,4,'MARQUE:',0,0,'');

$pdf->SetFont('Courier','',10);
$pdf->Cell(40,4,$view->name_brand,0,1,'');

$pdf->SetFont('Courier','',8);
$pdf->Cell(20,4,'NOM:',0,0,'');

$pdf->SetFont('Courier','',10);
$pdf->Cell(40,4,$view->name,0,1,'');

$pdf->SetFont('Courier','',8);
$pdf->Cell(20,4,'MODEL:',0,0,'');

$pdf->SetFont('Courier','',10);
$pdf->Cell(40,4,$view->model,0,1,'');

$pdf->SetFont('Courier','',8);
$pdf->Cell(20,4,'SERIE:',0,0,'');

$pdf->SetFont('Courier','',10);
$pdf->Cell(40,4,$view->serial_number,0,1,'');

$pdf->SetFont('Courier','',8);
$pdf->Cell(20,4,'CLIENT:',0,0,'');

$pdf->SetFont('Courier','',10);
$pdf->Cell(40,4,$view->customer_name,0,1,'');

$pdf->SetFont('Courier','',8);
$pdf->Cell(20,4,'TEL:',0,0,'');

$pdf->SetFont('Courier','',10);
$pdf->Cell(40,4,$view->customer_tel,0,1,'');

$pdf->Line(7,83,72,83);
$pdf->Ln(1);

$pdf->SetFont('Courier','',8);
$pdf->Cell(20,4,'A REPARER:',0,0,'');

$pdf->SetFont('Courier','',10);
$pdf->Cell(40,4,$view->title,0,1,'');

$pdf->SetFont('Courier','',8);
$pdf->Cell(20,4,'PRIX REP.:',0,0,'');

$pdf->SetFont('Courier','',10);
$pdf->Cell(40,4,number_format($view->price,0,',', ' ').'fbu',0,1,'');

$pdf->SetFont('Courier','',8);
$pdf->Cell(20,4,'PAYE:',0,0,'');

$pdf->SetFont('Courier','',10);
$pdf->Cell(40,4,number_format($view->montant,0,',', ' ').'fbu',0,1,'');

$pdf->SetFont('Courier','',8);
$pdf->Cell(20,4,'PRIX PIECE:',0,0,'');

$pdf->SetFont('Courier','',10);
$pdf->Cell(40,4,number_format($view->piece,0,',', ' ').'fbu',0,1,'');

$pdf->SetFont('Courier','',8);
$pdf->Cell(20,4,'MAGASIN:',0,0,'');

$pdf->SetFont('Courier','',10);
$pdf->Cell(40,4,$view->ours,0,1,'');

$pdf->SetFont('Courier','',8);
$pdf->Cell(20,4,'CREATED BY:',0,0,'');

$pdf->SetFont('Courier','',10);
$pdf->Cell(40,4,$view->username,0,1,'');

$pdf->SetFont('Arial','BI',10);
$pdf->Cell(60,8,'Welcome again',0,1,'C');

$pdf->Output();
?>