<?php
//============================================================+
// File name   : example_003.php
// Begin       : 2008-03-04
// Last Update : 2013-05-14
//
// Description : Example 003 for TCPDF class
//               Custom Header and Footer
//
// Author: Nicola Asuni
//
// (c) Copyright:
//               Nicola Asuni
//               Tecnick.com LTD
//               www.tecnick.com
//               info@tecnick.com
//============================================================+

/**
 * Creates an example PDF TEST document using TCPDF
 * @package com.tecnick.tcpdf
 * @abstract TCPDF - Example: Custom Header and Footer
 * @author Nicola Asuni
 * @since 2008-03-04
 */

// Include the main TCPDF library (search for installation path).
require_once('examples/tcpdf_include.php');


// Extend the TCPDF class to create custom Header and Footer
class MYPDF extends TCPDF {

	//Page header
	public function Header() {
		// Logo
		$image_file = K_PATH_IMAGES.'logo.png';
		$this->Image($image_file, 10, 10, 70, '', 'PNG', '', 'T', false, 300, '', false, false, 0, false, false, false);
		// Set font
		$this->SetFont('helvetica', 'B', 15);
		// Title
		//$this->Cell(-100, 150, 'Property Details', 0, false, 'C', 0, '', 0, false, 'M', 'M');
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

// create new PDF document
$pdf = new MYPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('REI Traider');
$pdf->SetTitle('Property Details');
$pdf->SetSubject('Property Details');
$pdf->SetKeywords('REI, Traider');

// set default header data
$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE, PDF_HEADER_STRING);

// set header and footer fonts
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// set some language-dependent strings (optional)
if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
	require_once(dirname(__FILE__).'/lang/eng.php');
	$pdf->setLanguageArray($l);
}

// ---------------------------------------------------------

// set font
$pdf->SetFont('dejavusans', '', 10);

// add a page
$pdf->AddPage();

// writeHTML($html, $ln=true, $fill=false, $reseth=false, $cell=false, $align='')
// writeHTMLCell($w, $h, $x, $y, $html='', $border=0, $ln=0, $fill=0, $reseth=true, $align='', $autopadding=true)

// create some HTML content
$html = '
<h2 style="color:green">REI TRADER LLC PROPERTY DEAL SHEET</h2>
<div class="col-row">
     <div class="col-half3">
       <div class="table-responsive">
                                <table class="table serviceTable">
                                    <tbody><tr>
                                        <th class="text-right "><span>Address:</span></th>
                                        <td class="text-center"><span>1829 5th Way NW</span></td>
                                    </tr>
                                    <tr>
                                        <th class="text-right"><span>City:</span></th>
                                        <td class="text-center"><span>Center Point</span></td>
                                    </tr>
                                    <tr>
                                        <th class="text-right"><span>State:</span></th>
                                        <td class="text-center"><span>AL</span></td>
                                    </tr>
                                    <tr>
                                        <th class="text-right"><span>Zip:</span></th>
                                        <td class="text-center"><span>35215</span></td>
                                    </tr>
                                    <tr>
                                        <th class="text-right"><span>Property Type:</span></th>
                                        <td class="text-center"><span>SFH</span></td>
                                    </tr>
                                    <tr>
                                        <th class="text-right"><span>Subdivision / Community:</span></th>
                                        <td class="text-center"><span>Oak Haven</span></td>
                                    </tr>
                                </tbody></table>
                        </div>
     </div>

     <div class="col-half3">
       <div class="table-responsive">
                                <table class="table serviceTable ">
                                    <tbody><tr>
                                        <th class="text-right"><span>Date:</span></th>
                                        <td class="text-center"><span>31/10/2017</span></td>
                                    </tr>
                                    <tr>
                                        <th class="text-right"><span>Bed:</span></th>
                                        <td class="text-center"><span>4</span></td>
                                    </tr>
                                    <tr>
                                        <th class="text-right"><span>Bath:</span></th>
                                        <td class="text-center"><span>2.0</span></td>
                                    </tr>
                                    <tr>
                                        <th class="text-right"><span>Sq. Feet:</span></th>
                                        <td class="text-center"><span>1500</span></td>
                                    </tr>
                                    <tr>
                                        <th class="text-right"><span>Yr Built:</span></th>
                                        <td class="text-center"><span>1973</span></td>
                                    </tr>
                                    <tr>
                                        <th class="text-right"><span>Occupancy:</span></th>
                                        <td class="text-center"><span>Tenant Occupied</span></td>
                                    </tr>
                                </tbody></table>
                        </div>
     </div>

     <div class="col-half3">
       <div class="table-responsive">
                                <table class="table serviceTable ">
                                    <tbody><tr>
                                        <th class="text-right"><span>Closing Date</span></th>
                                        <td class="text-center"><span>01/12/2017</span></td>
                                    </tr>
                                    <tr>
                                        <th class="text-right"><span>Earnest Money Due</span></th>
                                        <td class="text-center"><span>NA</span></td>
                                    </tr>
                                    <tr>
                                        <th class="text-right"><span>Inspection Period Start</span></th>
                                        <td class="text-center"><span>01/11/2017</span></td>
                                    </tr>
                                    <tr>
                                        <th class="text-right"><span>Inspection Period End</span></th>
                                        <td class="text-center"><span>01/11/2017</span></td>
                                    </tr>
                                </tbody></table>
                        </div>
     </div>
   </div>
   
   
   <div class="col-row">
     <div class="table2">
       <div class="table serviceTable ">
                                   <div class="col-half4">
                                     LOCKBOX CODE
                                   </div>
                                    <div class="col-full">
                                      NA
                                    </div>                           
                                    <div class="col-half4">
                                    COMPS
                                    </div>
                                    <div class="col-full">
                                    http://galmls.paragonrels.com/publink/default.aspx?GUID=90134e36-8dba-4f29-b042-85030d0610fd&amp;Report=Yes
                                    </div>
                                    <div class="col-half4">
                                    SOURCE SHEET
                                    </div>
                                    <div class="col-full">
                                    Homevestors
                                    </div>
                                    <div class="col-half4">
                                    PHOTOS
                                    </div>
                                    <div class="col-full">
                                    https://photos.shutterfly.com/story/id/20180211933
                                    </div>
        </div>
      </div>
   </div>
   
   <table class="table serviceTable ">
                                    <tbody><tr>
                                        <td class="text-center" colspan="3">
                                            <h3>
                                                PROJECT COST SUMMARY
                                            </h3>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Seller Asking Price</th>
                                        <td class="text-center">$</td>
                                        <td class="text-center">$37,500.00</td>
                                    </tr>
                                    <tr>
                                        <th>Est. Purchase / Offer Price</th>
                                        <td class="text-center">$</td>
                                        <td class="text-center">$37,500.00</td>
                                    </tr>
                                    <tr>
                                        <th>Est. Purchase Closing Costs</th>
                                        <td class="text-center">2.5%</td>
                                        <td class="text-center">$937.50 </td>
                                    </tr>
                                    <tr>
                                        <th>Est. Rehab Cost</th>
                                        <td class="text-center">$</td>
                                        <td class="text-center">$15,000.00</td>
                                    </tr>
                                    <tr>
                                        <th>10% contingency</th>
                                        <td class="text-center">$</td>
                                        <td class="text-center">$1,500.00</td>
                                    </tr>
                                    <tr>
                                        <th>TOTAL REHAB COST</th>
                                        <td class="text-center">$</td>
                                        <td class="text-center">$16,500.00</td>
                                    </tr>
                                    <tr>
                                        <th>Est. Holding Costs</th>
                                        <td class="text-center">$</td>
                                        <td class="text-center">$2,400.00</td>
                                    </tr>
                                    <tr>
                                        <th>Misc. Project Fees</th>
                                        <td class="text-center">$</td>
                                        <td class="text-center">$0.00</td>
                                    </tr>
                                    <tr>
                                        <th>Real Equity Commission</th>
                                        <td class="text-center">$</td>
                                        <td class="text-center">$0.00</td>
                                    </tr>
                                    <tr>
                                        <th>Loan Funding Fees</th>
                                        <td class="text-center">$</td>
                                        <td class="text-center">$0.00</td>
                                    </tr>
                                    <tr>
                                        <th>Loan Funding Points</th>
                                        <td class="text-center">0.00%</td>
                                        <td class="text-center">$0.00</td>
                                    </tr>
                                    <tr>
                                        <th>TOTAL PROJECT COST</th>
                                        <td class="text-center">$</td>
                                        <td class="text-center">$57,337.50</td>
                                    </tr>
                                </tbody></table>

';

// output the HTML content
$pdf->writeHTML($html, true, false, true, false, '');

// reset pointer to the last page
$pdf->lastPage();

// ---------------------------------------------------------

//Close and output PDF document
$pdf->Output('property_details.pdf', 'I');

//============================================================+
// END OF FILE
//============================================================+

