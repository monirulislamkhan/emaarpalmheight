<?php	
ob_start();
session_start();
include("include/db.inc.php");
include("include/var.inc.php");
include("include/function.inc.php");
include("include/class.messages.php");
$db1=new db();
$db1->open();
$msg=new Messages();
$page="Overview";
include("mail.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Price List - DLF Kings Court</title>
<meta name="description" content="Price List - DLF Kings Court"/>
<?php require_once("common-part.php");?>
</head>
<body>
<?php require_once("header.php");?>
<?php require_once("banner_form.php");?>
<div class="container">
<div class="row">
<div class="col-lg-12 col-sm-12 col-md-12">
<h1>DLF Kings Court Price List</h1>
<table class="table table-bordered">
<tbody>
<tr>
<td class="topplan" colspan="2">Price List</td>
</tr>
<tr>
<td>Basic Sale Price of Low Rise( Block 1, 5 &amp; 6)</td>
<td>Rs. 50,000/- Per Sq.Ft</td>
</tr>
<tr>
  <td>Basic Sale Price of High Rise( Block A1, A2 &amp; B)</td>
  <td>Rs.47,000/- Per Sq.Ft</td>
</tr>
<tr>
<td>Parking</td>
<td>Rs. 10 Lacs Per Slot&nbsp;</td>
</tr>
<tr>
<td>Down Payment Rebate</td>
<td>8.5%</td>
</tr>
<tr>
<td>Interest Bearing Maintenance      Security  (IBMS)</td>
<td>Rs. 500/- Per Sq.Ft.</td>
</tr>
<tr>
<td>Preferential Location Charges</td>
<td>As applicable</td>
</tr>
<tr>
<td colspan="2">Note:-Prices indicated above can be revised at the sole discretion of the company; will be applicable at the time of booking.</td>
</tr>
</tbody>
</table>
<table class="table table-bordered">
<tbody>
<tr>
  <td class="topplan" colspan="2">Payment Plan Applicable for Block-1</td>
</tr>
<tr>
<td colspan="2"><strong>Subvention Payment Plan</strong></td>
</tr>
<tr>
<td>On Application for Booking</td>
<td>50 Lacs + Service Tax (By Customer)</td>
</tr>
<tr>
<td>Within 2 Months of Booking</td>
<td>10% of Sale Value (less booking amt) - (By Customer)</td>
</tr>
<tr>
<td>Within 4 Months of booking</td>
<td>15% of Sale Value (by Bank subvention till
  Application of OC)</td>
</tr>
<tr>
<td>Within 6 Months of booking</td>
<td>10% of Sale Value (by Bank subvention till
Application of OC)</td>
</tr>
<tr>
<td>On Casting of Ground Floor</td>
<td>10% of Sale Value (by Bank subvention till
Application of OC)</td>
</tr>
<tr>
<td>On Casting of IInd Floor</td>
<td>10% of Sale Value (by Bank subvention till
Application of OC)</td>
</tr>
<tr>
<td>On Casting of Terrace Floor</td>
<td>10% of Sale Value (by Bank subvention till
Application of OC)</td>
</tr>
<tr>
<td>On Commencement of Internal Masonry</td>
<td>10% of Sale Value (by Bank subvention till
Application of OC)</td>
</tr>
<tr>
<td>On Commencement of External Glazing</td>
<td>10% of Sale Value (by Bank subvention till
Application of OC)</td>
</tr>
<tr>
<td>On filling of Occupance Certficate</td>
<td>10% of Sale Value (By Customer)</td>
</tr>
<tr>
<td>On offer of possession</td>
<td>5% of Sale Value (By Customer)</td>
</tr>

<tr>
  <td colspan="2"><strong>Down Payment Plan</strong></td>
</tr>
<tr>
<td>On Application for Booking</td>
<td>Rs. 50 Lacs + Service Tax</td>
</tr>
<tr>
<td>Within 30 days of Booking</td>
<td>95 % of Total Price (Less: Down Payment Rebate &amp; Booking Amount)</td>
</tr>
<tr>
<td>On Offer of Possession</td>
<td>5 % of Total Price + IBMS + Stamp duty &amp;  Registration Charges#</td>
</tr>
<tr>
<td colspan="2"><strong>Installment Payment Plan </strong></td>
</tr>
<tr>
<td>On Application for Booking</td>
<td>Rs.50 Lacs(Plus Service Tax)</td>
</tr>
<tr>
<td>Within 45 days of Booking</td>
<td>15% of Total Price (less: Booking Amount)</td>
</tr>
<tr>
<td>Within 3 Months of Booking</td>
<td>10% of Total Price</td>
</tr>
<tr>
<td>Within 6 Months of Booking</td>
<td>10% of Total Price</td>
</tr>
<tr>
<td>Casting of Ground Floor / Within 9 Months of Booking*</td>
<td>10% of Total Price</td>
</tr>
<tr>
<td>Casting of Second Floor / Within 12 Months of Booking*</td>
<td>10% of Total Price</td>
</tr>
<tr>
<td>Casting of Terrace Floor / Within 15 Months of Booking*</td>
<td>10% of Total Price</td>
</tr>
<tr>
<td>Commencement of Internal Masonry/ Within 18 Months of Booking*</td>
<td>10% of Total Price</td>
</tr>
<tr>
<td>Commencement of External Glazing / Within 21 Months of Booking*</td>
<td>10% of Total Price</td>
</tr>
<tr>
<td>On Filing of occupancy Certificate/ Within 24 Months of Booking*</td>
<td>10% of Total Price</td>
</tr>
<tr>
<td>On Offer of Possession</td>
<td>5% of Total Price + IBMS + Stamp Duty &amp;Regn.
  Charges#</td>
</tr>
<tr>
<td colspan="2"><strong>TOTAL Price = </strong>( Basic Selling Price x Super Area of Apartment ) + Cost of Parking Slots</td>
</tr>
<tr>
<td colspan="2">
<ul>
<li>Prices indicated above are subject to revision from time to time at the sole discretion of the company</li>
<li>Service Tax / Other Taxes extra as applicable</li>
<li>Stamp Duty &amp; Registration Charges extra, payable at the time of possession</li>
</ul>
</td>
</tr>
</tbody>
</table>
<table class="table table-bordered">
<tbody>
<tr>
  <td class="topplan" colspan="2">Payment Plan Applicable for Block-5 &amp; 6</td>
</tr>
<tr>
<td colspan="2"><strong>Subvention Payment Plan</strong></td>
</tr>
<tr>
  <td>On Application for Booking</td>
  <td>50 Lacs + Service Tax (By Customer)</td>
</tr>
<tr>
  <td>Within 2 Months of Booking</td>
  <td>10.0% of Sale Value (less booking amt) - (By Customer)</td>
</tr>
<tr>
  <td>Within 4 Months of booking</td>
  <td>10.0% of Sale Value (by Bank subvention till
Application of OC)</td>
</tr>
<tr>
  <td>Within 6 Months of booking</td>
  <td>10.0% of Sale Value (by Bank subvention till
Application of OC)</td>
</tr>
<tr>
  <td>On commencement of excavation</td>
  <td>7.5% of Sale Value (by Bank subvention till
Application of OC)</td>
</tr>
<tr>
  <td>On Casting of Stilt Floor</td>
  <td>7.5% of Sale Value (by Bank subvention till
Application of OC)</td>
</tr>
<tr>
  <td>On Casting of Ground Floor</td>
  <td>7.5% of Sale Value (by Bank subvention till
Application of OC)</td>
</tr>
<tr>
  <td>On Casting of Ist Floor</td>
  <td>7.5% of Sale Value (by Bank subvention till
Application of OC)</td>
</tr>
<tr>
  <td>On Casting of IInd Floor</td>
  <td>7.5% of Sale Value (by Bank subvention till
Application of OC)</td>
</tr>
<tr>
  <td>On Casting of Terrace Floor</td>
  <td>7.5% of Sale Value (by Bank subvention till
Application of OC)</td>
</tr>
<tr>
  <td>On Commencement of Internal Masonry</td>
  <td>5.0% of Sale Value (by Bank subvention till
Application of OC)</td>
</tr>
<tr>
  <td>On Commencement of External Glazing</td>
  <td>5.0% of Sale Value (by Bank subvention till
Application of OC)</td>
</tr>
<tr>
  <td>On filling of Occupance Certficate</td>
  <td>10.0% of Sale Value (By Customer)</td>
</tr>
<tr>
  <td>On offer of possession</td>
  <td>5.0% of Sale Value (By Customer)</td>
</tr>
<tr>
  <td colspan="2"><strong>Down Payment Plan</strong></td>
</tr>
<tr>
<td>On Application for Booking</td>
<td>Rs. 50 Lacs + Service Tax</td>
</tr>
<tr>
<td>Within 30 days of Booking</td>
<td>95 % of Total Price (Less: Down Payment Rebate &amp; Booking Amount)</td>
</tr>
<tr>
<td>On Offer of Possession</td>
<td>5 % of Total Price + IBMS + Stamp duty &amp;  Registration Charges#</td>
</tr>
<tr>
<td colspan="2"><strong>Installment Payment Plan</strong></td>
</tr>
<tr>
<td>On Application for Booking</td>
<td>Rs. 50 Lacs (Plus Service Tax)</td>
</tr>
<tr>
<td>Within 45 days of Booking</td>
<td>15% of Total Price (less: Booking Amount)</td>
</tr>
<tr>
<td>Within 3 Months of Booking</td>
<td>10% of Total Price</td>
</tr>
<tr>
<td>Within 6 Months of Booking</td>
<td>10% of Total Price</td>
</tr>
<tr>
<td>On Commencement of excavation / Within8 Months of Booking*</td>
<td>7.5% of Total Price</td>
</tr>
<tr>
<td>Casting of Stilt Floor / Within 10 Months of Booking*</td>
<td>7.5% of Total Price</td>
</tr>
<tr>
<td>Casting of Ground Floor / Within 12 Months of Booking*</td>
<td>7.5% of Total Price</td>
</tr>
<tr>
<td>Casting of First Floor / Within 14 Months of Booking*</td>
<td>7.5% of Total Price</td>
</tr>
<tr>
<td>Casting of Second Floor / Within 16 Months of Booking*</td>
<td>7.5% of Total Price</td>
</tr>
<tr>
<td>Casting of Terrace Floor / Within 18 Months of Booking*</td>
<td>7.5% of Total Price</td>
</tr>
<tr>
<td>Commencement of Internal Masonry/ Within 20 Months of Booking*</td>
<td>5% of Total Price</td>
</tr>
<tr>
<td>Commencement of External Glazing / Within 22 Months of Booking*</td>
<td>5% of Total Price</td>
</tr>
<tr>
<td>On Filing of occupancy Certificate/ Within 24 Months of Booking*</td>
<td>5% of Total Price</td>
</tr>
<tr>
<td>On Offer of Possession</td>
<td>5% of Total Price + IBMS + Stamp Duty<br>
  &amp;Regn. Charges#</td>
</tr>
<tr>
<td colspan="2"><strong>Total Price</strong> = ( Basic Selling Price x Super Area of Apartment ) + Cost of Parking Slots</td>
</tr>
<tr>
<td colspan="2">
<ul>
<li>Prices indicated above are subject to revision from time to time at the sole discretion of the company</li>
<li>Service Tax / Other Taxes extra as applicable</li>
<li># Stamp Duty &amp; Registration Charges extra, payable at the time of possession</li>
</ul>
</td>
</tr>
</tbody>
</table>
<table class="table table-bordered">
<tbody>
<tr>
<td class="topplan" colspan="2">Payment Plan (Apartments)</td>
</tr>
<tr>
<td colspan="2"><strong>Down Payment Plan (Block A1, A2 &amp; B)</strong></td>
</tr>
<tr>
<td>On Application for Booking</td>
<td>Rs. 2 Cr. (Plus Service Tax)</td>
</tr>
<tr>
<td>Within 30 days of Booking</td>
<td>95 % of Total Price (Less: Down Payment Rebate &amp; Booking Amount)</td>
</tr>
<tr>
<td>On Offer of Possession</td>
<td>5 % of Total Price + IBMS + Stamp duty &amp;  Registration Charges#</td>
</tr>
<tr>
<td colspan="2"><strong>Construction Linked Interest Free Installment  Payment Plan</strong></td>
</tr>
<tr>
<td>On Application for Booking</td>
<td>Rs. 2 Cr.(Plus Service Tax)</td>
</tr>
<tr>
  <td>Within 45 days of Booking</td>
  <td>15% of the Sales Price (less: Booking Amount)</td>
</tr>
<tr>
  <td>Within 3 Months” /On commencement of excavation*</td>
  <td>10% of the Sales Price</td>
</tr>
<tr>
  <td>Within 6 Months”/On commencement of tower foundation*</td>
  <td>10% of the Sales Price</td>
</tr>
<tr>
  <td>Within 9 Months”/On commencement of tower upper basement*</td>
  <td>10% of the Sales Price</td>
</tr>
<tr>
  <td>Within 12 Months”/On commencement of super structure*</td>
  <td>10% of the Sales Price</td>
</tr>
<tr>
<td>Within 15 Months”/On commencement of 4th Floor*</td>
<td>10% of the Sales Price</td>
</tr>
<tr>
<td>Within 18 Months”/ On commencement of top floor roof*</td>
<td>10% of the Sales Price</td>
</tr>
<tr>
<td>Within 21 Months”/ On application for Occupation Certificate*</td>
<td>10% of the Sales Price</td>
</tr>
<tr>
<td>Within 24 Months”/ On offer of possession*</td>
<td>10% of the Sales Price</td>
</tr>
<tr>
<td>On Offer of conveying</td>
<td>5% “ + IBMS + Stamp Duty &amp;Regn. Charges#</td>
</tr>
<tr>
  <td colspan="2"><strong>Sale Price of Unit:-</strong> (Basic Selling Price + PLC) X (Super Area of Apartments) + Cost of 3/4 Parking Slots</td>
</tr>
<tr>
  <td colspan="2">
  <ul>
  <li>Prices indicated above are subject to revision from time to time at the sole discretion of the company.</li>
  <li>Service Tax extra as applicable</li>
  </ul>
  </td>
</tr>
</tbody>
</table>
</div>
</div>
</div>
<?php require_once("footer.php");?>
</body>
</html>