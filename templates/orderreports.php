<?php
    require 'fpdf.php';
define('FPDF_FONTPATH','fonts/');

    $pdf=new fpdf('P','mm','A4');  
    //$pdf->AddFont('Arial','','SIXTY.php');  
    $pdf->AddPage(); 
    $pdf->SetFont('helvetica', 'BI', 18);
    
    
    // $image="uploads/logo1.jpg";
    // $pdf->Image($image,9,9,30,0,'JPG');

    $pdf->Cell(190,5,"dsd",0,1,'C');
    $pdf->Cell(180,5,"jknkj",0,1,'C');
    $pdf->Cell(190,5,"dsffwe",0,1,'C');
    $pdf->Cell(190,5,"Mobile : "."sdcsa",0,1,'C');
	
    $pdf->Cell(190,3,"",0,1,'C');
	$pdf->Cell(190,5,"Order Report",'BL',1,'C');

    $pdf->Output();


?>