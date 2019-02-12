<?php
    include("db.php");
    require_once('fpdf/fpdf.php'); 
    
	$qrcodeimage = "pdfqrcodes/someqrcode.png";
	
	$pdf = new FPDF('P','mm', 'a5');
	$pdf->SetTopMargin(75);
	$pdf->AddPage();
	$pdf->Image("QRCodeTemplate.png",0,0,150,210);
	$pdf->SetFont('Arial','',14);
	$pdf->Cell(0,10,$name,0,0,'C');
	$pdf->Ln();
	$pdf->Cell(0,10,$email,0,0,'C');
	$pdf->Image($qrcodeimage,38,100,75,75);
	$pdf->Output("pdfqrcodes/someqrpdf.pdf", "F");
        
    echo "Done generating QR Code PDF."
    
?>