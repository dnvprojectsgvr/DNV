<?php
tcpdf();
$obj_pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
$obj_pdf->SetCreator(PDF_CREATOR);
$title = $this->session->portal_config['company_name'];
$obj_pdf->SetTitle($title);
$obj_pdf->SetPrintHeader(false);
$obj_pdf->SetPrintFooter(false);
$obj_pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, $title, PDF_HEADER_STRING);
$obj_pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$obj_pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
$obj_pdf->SetDefaultMonospacedFont('helvetica');
$obj_pdf->SetHeaderMargin('PDF_MARGIN_HEADER');
$obj_pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
$obj_pdf->SetMargins(0, 0, PDF_MARGIN_RIGHT);
$obj_pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
$obj_pdf->SetFont('helvetica', '', 8);
$obj_pdf->setFontSubsetting(false);
$obj_pdf->SetTextColor(0,0,0);

$obj_pdf->AddPage();
ob_start();

$obj_pdf->SetXY(150, 5);
$obj_pdf->SetFont('helvetica', '', 12);
$obj_pdf->Cell(30,0,implode('    ',str_split(date_format(date_create($this->input->post('date')), 'dmY'))),0,1,'L',0,'',0,FALSE,'','M');

$obj_pdf->SetXY(20, 13);
$obj_pdf->SetFont('helvetica', '', 10);
$obj_pdf->Cell(30,0,$this->input->post('pay'),0,1,'L',0,'',0,FALSE,'','M');

$obj_pdf->SetXY(30, 23);
$obj_pdf->Cell(10,0,$this->input->post('amountinwords'),0,1,'L',0,'',0,FALSE,'','M');

$obj_pdf->SetXY(165, 30);
$obj_pdf->SetFont('helvetica', 'B', 14);
$obj_pdf->Cell(30,0,$this->input->post('amount')."/-",0,1,'L',0,'',0,FALSE,'','M');

if($this->input->post('ac_payee') == 'YES')
{
$obj_pdf->SetFont('helvetica', 'ub', 8);

$obj_pdf->SetXY(90, 47);
$obj_pdf->Cell(45,0,'                                      ',0,1,'L',0,'',0,FALSE,'','M');

$obj_pdf->SetXY(90, 46);
$obj_pdf->Cell(45,0,'                                      ',0,1,'L',0,'',0,FALSE,'','M');

$obj_pdf->SetXY(90, 51);
$obj_pdf->Cell(45,0,'                                      ',0,1,'L',0,'',0,FALSE,'','M');

$obj_pdf->SetXY(90, 50);
$obj_pdf->Cell(45,0,'    A/C PAYEE ONLY',0,1,'L',0,'',0,FALSE,'','M');
}

$content = ob_get_contents();
ob_end_clean();
$obj_pdf->writeHTML($content, true, false, true, false, '');

$obj_pdf->Output('name.pdf', 'I');
?>