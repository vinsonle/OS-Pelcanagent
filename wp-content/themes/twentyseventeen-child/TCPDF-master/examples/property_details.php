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
require_once('tcpdf_include.php');


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
<div class="pdf_content">
    
    
    
   <div class="Property"> 
   <h2 style="color:#5ca01d;">REI TRADER LLC PROPERTY DEAL SHEET</h2>
   </div>
   
  

   <div class="col-row">
     <div class="col-half3">
       <div class="table-responsive">
                                <table class="table serviceTable" cellpadding="5" border="1">
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
                                <table class="table serviceTable" cellpadding="5" border="1">
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
                                <table class="table serviceTable" cellpadding="5" border="1">
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
  
  <div style="clear:both"></div>
   </div>

   <div class="col-row">
     <div class="table2">    
		  <table class="table serviceTable" cellpadding="5" border="1">
			<tbody><tr>
				<th class="text-right"><span>LOCKBOX CODE</span></th>
				<td class="text-center" colspan="2"><span>NA</span></td>
			</tr>
			<tr>
				<th class="text-right"><span>COMPS</span></th>
				<td class="text-center" colspan="2"><span>http://galmls.paragonrels.com/publink/default.aspx?GUID=90134e36-8dba-4f29-b042-85030d0610fd&amp;Report=Yes</span></td>
			</tr>
			<tr>
				<th class="text-right"><span>SOURCE SHEET</span></th>
				<td class="text-center" colspan="2"><span> Homevestors</span></td>
			</tr>
			<tr>
				<th class="text-right"><span>PHOTOS</span></th>
				<td class="text-center" colspan="2"><span>  https://photos.shutterfly.com/story/id/20180211933</span></td>
			</tr>
		</tbody></table>
      </div>
   </div>
   

  <div class="col-row">
  <div class="top-border"></div>
  <div class="col-half4">
  <div class="border-lft">
  <div class="tbl-ht table-mob">
    <div class="table-responsive">
                                <table class="table serviceTable " width="100%" cellpadding="5" border="1">
                                    <tbody><tr>
                                        <td class="text-center" colspan="3">
                                            <h3 style="color:#5ca01d;">
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
                        </div>

                        <div class="table-responsive">
                                <table class="table serviceTable " cellpadding="5" border="1">
                                    <tbody><tr>
                                        <td class="text-center" colspan="3">
                                           <h3 style="color:#5ca01d;">
                                              ESTIMATED SALES DATA
                                           </h3>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Turn Key Flip Price</th>
                                        <td class="text-center"></td>
                                        <td class="text-center">$79,900.00</td>
                                    </tr>
                                    <tr>
                                        <th>Retail Flip Price</th>
                                        <td class="text-center"></td>
                                        <td class="text-center">$79,900.00</td>
                                    </tr>
                                    <tr>
                                        <th>WholeTALE Price</th>
                                        <td class="text-center"></td>
                                        <td class="text-center">$45,000.00</td>
                                    </tr>
                                    <tr>
                                        <th>WholeTALE Rehab</th>
                                        <td class="text-center"></td>
                                        <td class="text-center">$5,000.00</td>
                                    </tr>
                                    <tr>
                                        <th>WholeTALE Resale Costs</th>
                                        <td class="text-center"></td>
                                        <td class="text-center">$6,037.50</td>
                                    </tr>
                                    <tr>
                                        <th>WholeSALE Fee</th>
                                        <td class="text-center"></td>
                                        <td class="text-center">$7,250.00</td>
                                    </tr>
                                    <tr>
                                        <th>WholeSALE Price</th>
                                        <td class="text-center"></td>
                                        <td class="text-center">$44,750.00</td>
                                    </tr>
                                    <tr>
                                        <th>WholeTALE Costs</th>
                                        <td class="text-center"></td>
                                        <td class="text-center">$56,500.00</td>
                                    </tr>
                                    <tr>
                                        <th>Closing costs for Turkey Flip</th>
                                        <td class="text-center">6.00%</td>
                                        <td class="text-center">$4,794.00</td>
                                    </tr>
                                    <tr>
                                        <th>Turnkey Flip Price + 6% closing</th>
                                        <td class="text-center"></td>
                                        <td class="text-center">$84,694.00</td>
                                    </tr>
                                </tbody></table>
                       </div>
                  </div>
  </div>
</div>

   <div class="col-half4">
        <div class="border-lft">
            <div class="tbl-ht table-mob">
      <div class="table-responsive">
                                <table class="table serviceTable " cellpadding="5" border="1">
                                    <tbody><tr>
                                        <td class="text-center" colspan="2">
                                           <h3 style="color:#5ca01d;">
                                              RENTAL PROPERTY ASSUMPTIONS
                                           </h3>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Monthly Gross Rent</th>
                                        <td class="text-center">$800.00</td>
                                    </tr>
                                    <tr>
                                        <th>Annual Gross Rent</th>
                                        <td class="text-center">$9,600.00</td>
                                    </tr>
                                </tbody></table>
                       </div> 

                       <div class="table-responsive">
                                <table class="table serviceTable " cellpadding="5" border="1">
                                    <tbody><tr>
                                        <td class="text-center" colspan="2">
                                           <h3 style="color:#5ca01d;">
                                              Est. Property Expense Allowances:
                                           </h3>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Vacancy</th>
                                        <td class="text-center">8.00%</td>
                                    </tr>
                                    <tr>
                                        <th>Maintenance</th>
                                        <td class="text-center">5.00%</td>
                                    </tr>
                                    <tr>
                                        <th>Management</th>
                                        <td class="text-center">10.00%</td>
                                    </tr>
                                    <tr>
                                        <th>Taxes</th>
                                        <td class="text-center">0.50%</td>
                                    </tr>
                                    <tr>
                                        <th>Insurance</th>
                                        <td class="text-center">1.00%</td>
                                    </tr>
                                    <tr>
                                        <th>Other Fees</th>
                                        <td class="text-center">$0.00</td>
                                    </tr>
                                    <tr>
                                        <th>Total Monthly Expenses %</th>
                                        <td class="text-center">24.50%</td>
                                    </tr>
                                </tbody></table>
                       </div> 

                       <div class="table-responsive">
                                <table class="table serviceTable " cellpadding="5" border="1">
                                    <tbody><tr>
                                        <td class="text-center" colspan="2">
                                           <h3 style="color:#5ca01d;">
                                              TURN KEY RENTAL RETURN SUMMARY
                                           </h3>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Cap Rate (Cash)</th>
                                        <td class="text-center">7.75%</td>
                                    </tr>
                                    <tr>
                                        <th>Cap Rate (Financed)</th>
                                        <td class="text-center">14.44%</td>
                                    </tr>
                                    <tr>
                                        <th>GRM</th>
                                        <td class="text-center">12.90</td>
                                    </tr>
                                    <tr>
                                        <th>DSCR</th>
                                        <td class="text-center">1.59</td>
                                    </tr>
                                    <tr>
                                        <th>Cap Rate (Hold)</th>
                                        <td class="text-center">11.48%</td>
                                    </tr>
                                    <tr>
                                        <th>DSCR (Hold)</th>
                                        <td class="text-center">1.27</td>
                                    </tr>
                                </tbody></table>
                       </div> 

                       <div class="table-responsive">
                                <table class="table serviceTable " cellpadding="5" border="1">
                                    <tbody><tr>
                                        <td class="text-center" colspan="2">
                                           <h3 style="color:#5ca01d;">
                                              WHOLESALE W/TURN KEY SERVICE
                                           </h3>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Cap Rate (Cash)</th>
                                        <td class="text-center">10.98%</td>
                                    </tr>
                                    <tr>
                                        <th>Cash on Cash Rate (Financed)</th>
                                        <td class="text-center">54.01%</td>
                                    </tr>
                                </tbody></table>
                       </div> 
    </div>
  </div>
</div>

  <div class="col-half4">
    <div class="border-lft">
    <div class="tbl-ht table-mob">

                           <div class="table-responsive">
                                <table class="table serviceTable " cellpadding="5" border="1">
                                    <tbody><tr>
                                        <td class="text-center" colspan="2">
                                           <h3 style="color:#5ca01d;">
                                              INVESTMENT GUIDELINES
                                           </h3>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">LTV Analysis: (Max LTV)%</td>
                                    </tr>
                                    <tr>
                                        <th>Retail Flip LTV</th>
                                        <td class="text-center">70%</td>
                                    </tr>
                                    <tr>
                                        <th>Turn Key LTV</th>
                                        <td class="text-center">75%</td>
                                    </tr>
                                    <tr>
                                        <th>Actual Retail Flip LTV</th>
                                        <td class="text-center">71.76%</td>
                                    </tr>
                                    <tr>
                                        <th>Buy/Hold/Turnkey LTV</th>
                                        <td class="text-center">71.76%</td>
                                    </tr>
                                    <tr>
                                        <th>WholeTALE LTV</th>
                                        <td class="text-center">70.71%</td>
                                    </tr>
                                    <tr>
                                        <th>WholeSALE LTV</th>
                                        <td class="text-center">%</td>
                                    </tr>
                                </tbody></table>
                       </div> 

                       <div class="table-responsive">
                                <table class="table serviceTable " cellpadding="5" border="1">
                                    <tbody><tr>
                                        <td class="text-center" colspan="2">
                                           <h3 style="color:#5ca01d;">
                                             Minimum Project Return Rates:
                                           </h3>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Own/Occ (Retail)</th>
                                        <td class="text-center">ROI</td>
                                    </tr>
                                    <tr>
                                        <th>Sales Price &lt; $100K</th>
                                        <td class="text-center">10.00%</td>
                                    </tr>
                                    <tr>
                                        <th>SalesPrice &gt; $100K</th>
                                        <td class="text-center">12.00%</td>
                                    </tr>
                                </tbody></table>
                       </div> 

                       
                       <div class="table-responsive">
                                <table class="table serviceTable " cellpadding="5" border="1">
                                    <tbody><tr>
                                        <th>Rental/Invest:</th>
                                        <td class="text-center">Cap Rate/ROI</td>
                                    </tr>
                                    <tr>
                                        <th>Standard Project</th>
                                        <td class="text-center">9.50%</td>
                                    </tr>
                                    <tr>
                                        <th>Econo Project</th>
                                        <td class="text-center">11.00%</td>
                                    </tr>
                                </tbody></table>
                       </div> 

                       <div class="table-responsive">
                                <table class="table serviceTable " cellpadding="5" border="1">
                                    <tbody><tr>
                                        <td class="text-center" colspan="2">
                                           <h3 style="color:#5ca01d;">
                                              NET PROFIT SUMMARY
                                           </h3>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Turn Key Profit</th>
                                        <td class="text-center">$15,973.38</td>
                                    </tr>
                                    <tr>
                                        <th>Retail Flip Profit</th>
                                        <td class="text-center">$15,973.38</td>
                                    </tr>
                                    <tr>
                                        <th>Wholetale Profit</th>
                                        <td class="text-center">$-837.50</td>
                                    </tr>
                                    <tr>
                                        <th>Wholesale Profit</th>
                                        <td class="text-center">$7,250.00</td>
                                    </tr>
                                    <tr>
                                        <th>Ann Cash Flow - PL REFI</th>
                                        <td class="text-center">$6,193.50</td>
                                    </tr>
                                    <tr>
                                        <th>Ann Cash Flow - BANK REFI</th>
                                        <td class="text-center">$-154.86</td>
                                    </tr>
                                </tbody></table>
                       </div> 


    </div>
  </div>
</div>

  <div class="col-half4">
  <div class="tbl-ht table-mob">
    <div class="table-responsive">
                                <table class="table serviceTable " cellpadding="5" border="1">
                                    <tbody><tr>
                                        <td class="text-center" colspan="2">
                                           <h3 style="color:#5ca01d;">
                                              REHAB COSTS
                                           </h3>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Roof</th>
                                        <td class="text-center">$0.00</td>
                                    </tr>
                                    <tr>
                                        <th>Ext pres wash</th>
                                        <td class="text-center">$0.00</td>
                                    </tr>
                                    <tr>
                                        <th>Windows</th>
                                        <td class="text-center">$0.00</td>
                                    </tr>
                                    <tr>
                                        <th>Ext Paint</th>
                                        <td class="text-center">$0.00</td>
                                    </tr>
                                    <tr>
                                        <th>Gutters</th>
                                        <td class="text-center">$0.00</td>
                                    </tr>
                                    <tr>
                                        <th>Ext Repair Other</th>
                                        <td class="text-center">$0.00</td>
                                    </tr>
                                    <tr>
                                        <th>Landscaping</th>
                                        <td class="text-center">$0.00</td>
                                    </tr>
                                    <tr>
                                        <th>Interior Paint</th>
                                        <td class="text-center">$0.00</td>
                                    </tr>
                                    <tr>
                                        <th>Interior Floors</th>
                                        <td class="text-center">$0.00</td>
                                    </tr>
                                    <tr>
                                        <th>Bathrooms</th>
                                        <td class="text-center">$0.00</td>
                                    </tr>
                                    <tr>
                                        <th>Kitchen</th>
                                        <td class="text-center">$0.00</td>
                                    </tr>
                                    <tr>
                                        <th>Kitchen Appliances</th>
                                        <td class="text-center">$0.00</td>
                                    </tr>
                                    <tr>
                                        <th>Plumbing</th>
                                        <td class="text-center">$0.00</td>
                                    </tr>
                                    <tr>
                                        <th>Electrical</th>
                                        <td class="text-center">$0.00</td>
                                    </tr>
                                    <tr>
                                        <th>HVAC</th>
                                        <td class="text-center">$0.00</td>
                                    </tr>
                                    <tr>
                                        <th>Misc</th>
                                        <td class="text-center">$15,000.00</td>
                                    </tr>
    
                                    <tr>
                                        <td class="text-center" colspan="2">
                                           <h3 style="color:#5ca01d;">
                                              EXIT STRATEGY
                                           </h3>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Retail Flip</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Turnkey Flip</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">&nbsp;</td>
                                    </tr>
                                </tbody></table>
                       </div> 
  </div> 
</div>
<div class="btm-border"></div>
  </div>
</div>
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

