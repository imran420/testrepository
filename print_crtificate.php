<?php
$emps = json_decode($_POST['emps'],true);
foreach ($emps as $emp){

    include("mpdf/mpdf.php");

    $mpdf=new mPDF('','A4',14,'nikosh');

    $mpdf->AddPage('L');
    $mpdf->useSubstitutions=false;
    $mpdf->setAutoTopMargin = 'stretch';
    $mpdf->SetDisplayMode('fullpage');

   $mpdf->SetDefaultBodyCSS('background-image',"url('./abc.svg')");
    $txt=" নামঃ মোঃ আরিফুল ইসলাম ইমেইলঃ";
    $mpdf->Image('./abc.svg', 5, 5, 100, 100, 'svg', '', true, false);
    $mpdf->SetY(120);
    $mpdf->SetX(45);
    $mpdf->SetFont('nikosh', '', 20);
    //$mpdf->MultiCell(200,10,$txt,0,1,'L');
    //ob_clean();

    $mpdf->Output();


}