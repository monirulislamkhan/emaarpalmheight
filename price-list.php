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
<td class="topplan" colspan="3">Payment Plan (20 : 20 : 60)</td>
</tr>
<tr>
<td><strong>Break-up</strong></td>
<td><strong>Milestone</strong></td>
<td><strong> Percentage</strong></td>
</tr>
<tr>
  <td rowspan="2">20%</td>
  <td>Within 30 days from Registration of Buyer’s Agreement</td>
  <td>10%</td>
</tr>
<tr>
  <td>Within 60 days from Registration of Buyer’s Agreement</td>
  <td>10%</td>
</tr>
<tr>
<td rowspan="2">20%</td>
<td>On completion of 12th Floor Roof slab</td>
<td>10%</td>
</tr>
<tr>
<td>On completion of Top Floor Roof slab</td>
<td>10%</td>
</tr>
<tr>
  <td rowspan="3">60%</td>
  <td>On completion of Flooring of the Unit</td>
  <td>15%</td>
</tr>
<tr>
<td>On Application of OC</td>
<td>15%</td>
</tr>
<tr>
<td>On Offer of Possession</td>
<td>30%</td>
</tr>
<tr>
  <td colspan="3"><strong>Notes: - </strong>
  <ul>
  <li>Token Amount : Rs. 1 Lac</li>
  <li>Balance Booking Amount : Rs. 3.99 Lacs</li>
  <li>Cheque Favoring :<strong> EMAAR MGF Land Ltd A/c PALM HEIGHTS</strong></li>
  </ul></td>
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