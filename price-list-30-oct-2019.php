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
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Price List, Payment Plan, Cost, Rate list of Emaar India</title>
<meta name="description" content="Find here price list, payment plan, available offers & discount of Emaar Palm Heights Gurgaon Sector 77 nearby National Highway - 8"/>
<?php require_once("common-part.php");?>
<link rel="canonical" href="<?=_BASEURL_?>price-list.html" />
</head>
<body>
<?php require_once("header.php");?>
<?php require_once("banner_form.php");?>
<div class="container">
<div class="row">
<div class="col-lg-12 col-sm-12 col-md-12">
<div class="location_area">
<h1>Price List - <?=_heading1_?></h1>

<table class="table table-bordered table-stripped">
<tbody>
<tr>
<td class="topplan" colspan="2">Price List</td>
</tr>
<tr>
<td>Basic Sale Price</td>
<td>As Applicable</td>
</tr>
</tbody>
</table>
<table class="table table-bordered table-stripped">
<tbody>
<tr>
<td class="topplan" colspan="3">Payment Plan (10:20:30:40)</td>
</tr>
<tr>
<td><strong>Break-up</strong></td>
<td><strong>Milestone</strong></td>
<td><strong> Amount/ Percentage</strong></td>
</tr>
<tr>
<td rowspan="3">10%</td>
<td rowspan="2">Booking Amount</td>
<td>Rs. 1 Lac</td>
</tr>
<tr>
<td>Rs. 6 Lac + 100% BA Registration Charges + Admin Charges</td>
</tr>
<tr>
<td>Within 30 days of Issuance of AL and BA</td>
<td>10% of Unit price less Booking Amount</td>
</tr>
<tr>
<td rowspan="2">20%</td>
<td>On Completion of Ground floor Roof Slab</td>
<td>10% of Unit Price + 100% of EDC/ IDC</td>
</tr>
<tr>
<td>On Completion of 12th floor Roof Slab</td>
<td>10% of Unit Price</td>
</tr>
<tr>
<td rowspan="2">30%</td>
<td>On Completion of Top Floor Roof Slab</td>
<td>15% of Unit Price</td>
</tr>
<tr>
<td>On completion of Internal Plaster till Top Floor of tower</td>
<td>15% of Unit Price</td>
</tr>
<tr>
<td rowspan="2">40%</td>
<td>On Completion of Flooring of entire tower (excluding Wooden Flooring)</td>
<td>10% of Unit price</td>
</tr>
<tr>
<td>On Offer of Possession</td>
<td>30% of Unit Price + 100% IFMS + 100% Operational Charges</td>
</tr>
<tr>
<td colspan="3"><strong>Notes: - </strong>
<ul>
<li>Cheque to be made in Favour of “Emaar MGF Land Ltd. A/c ________________________________”</li>
<li>*Unit Price comprises of Basic Price + PLCs + Exclusive right to use 1 car parking space + Club Membership charges</li>
<li>Total Consideration is inclusive of Unit Price + EDC + IDC + IFMS + Operational Charges + GST</li>
<li>Stamp Duty/Registration charges for BA registration &amp; Conveyance Deed shall be payable as and when demanded based on then prevailing rates</li>
<li>Customer to deduct TDS as per Government norms and provide certificate to the Company</li>
<li>GST would be as per applicable law and would be raised from time to time</li>
</ul>
</td>
</tr>
</tbody>
</table>
</div>
</div>
</div>
</div>
<?php require_once("footer.php");?>
<script type="text/javascript" src="js/global.js"></script>
</body>
</html>