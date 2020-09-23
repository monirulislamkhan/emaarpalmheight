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
<?php require_once("signature-common.php");?>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Floor Plan of the Emaar Palm Heights Signature Tower</title>
<meta name="description" content="Find the leading floor plan, floor size or Layout plan of the 3 BHK Uber flats of the Emaar Palm Heights Signature Tower Gurgaon."/>
<?php require_once("common-part.php");?>
<link rel="canonical" href="<?=_BASEURL_?>signature-floor-plan.html" />
</head>
<body>
<?php require_once("header-signature.php");?>
<?php require_once("banner_form-signature.php");?>
<div id="abc"></div>
<div class="container">
<div class="row">
<div class="col-lg-12 col-sm-12 col-md-12">
<div class="flr_area">
<h1>Floor Plan - Emaar Palm Heights Signature Tower</h1>
<hr/>
<div class="row">
<figure class="col-md-3 col-sm-6 flr_list"><a href="floor-plan/signature/3bhk+3t+lounge+utility-2025-sqft.jpg" data-fancybox="gallery" data-caption="3 Bedroom + 3 Toilet + Lounge + Utility : 2025 Sq.Ft."><img src="floor-plan/signature/3bhk+3t+lounge+utility-2025-sqft.jpg" class="img-responsive" alt="3 Bedroom + 3 Toilet + Lounge + Utility : 2025 Sq.Ft."><figcaption>3 Bedroom + 3 Toilet + Lounge + Utility : 2025 Sq.Ft.</figcaption></a></figure>

</div>
</div>
</div>
</div>
</div>
<?php require_once("footer.php");?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.2/dist/jquery.fancybox.min.css" />
<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.2/dist/jquery.fancybox.min.js"></script>
<script type="text/javascript" src="js/global.js"></script>
</body>
</html>