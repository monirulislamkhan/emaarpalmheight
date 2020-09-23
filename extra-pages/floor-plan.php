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
<meta name="description" content="Floor Plan - DLF Kings Court"/>
<?php require_once("common-part.php");?>
</head>
<body>
<?php require_once("header.php");?>
<?php require_once("banner_form.php");?>
<div class="container">
<div class="row">
<div class="col-lg-12 col-sm-12">
<h1>DLF Kings Court Floor Plan</h1>
<div class="flr_plan">
<ul class="full_view">
<li><p>Floor Plan - 5422 Sq. Ft.</p><a href="floor-plan/type-a02-2nd-to-8th-floor-5422-sqft.jpg" data-fancybox="gallery" data-caption="Apartment Type A02 ( 2nd Floor to 8th Floor)"><img src="floor-plan/type-a02-2nd-to-8th-floor-5422-sqft.jpg" class="img-responsive" alt="type-a02-2nd-to-8th-floor-5422-sqft"></a>
<p>Apartment Type A02 ( 2nd Floor to 8th Floor)</p></li>
<li><p>Floor Plan - 5442 Sq. Ft.</p><a href="floor-plan/type-a01-2nd-to-8th-floor-5442-sqft.jpg" data-fancybox="gallery" data-caption="Apartment Type A01 ( 2nd Floor to 8th Floor)"><img src="floor-plan/type-a01-2nd-to-8th-floor-5442-sqft.jpg" class="img-responsive" alt="type-a01-2nd-to-8th-floor-5442-sqft"></a>
<p>Apartment Type A01 ( 2nd Floor to 8th Floor)</p></li>
<li><p>Floor Plan - 7251 Sq. Ft.</p><a href="floor-plan/type-b-lig-unit-2nd--to-8th-floor-7251-sqft.jpg" data-fancybox="gallery" data-caption="Apartment Type B & LIG Unit ( 2nd Floor to 8th Floor)"><img src="floor-plan/type-b-lig-unit-2nd--to-8th-floor-7251-sqft.jpg" class="img-responsive" alt="type-b-lig-unit-2nd--to-8th-floor-7251-sqft"></a>
<p>Apartment Type B & LIG Unit ( 2nd Floor to 8th Floor)</p></li>
<li><p>Floor Plan - 6976 Sq. Ft.</p><a href="floor-plan/town-house-layout-plan-6976-sqft.jpg" data-fancybox="gallery" data-caption="Town House Layout Plan"><img src="floor-plan/town-house-layout-plan-6976-sqft.jpg" class="img-responsive" alt="town-house-layout-plan-6976-sqft"></a>
<p>Town House Layout Plan</p></li>
</ul>
</div>

</div>
</div>
</div>
<?php require_once("footer.php");?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.4.1/jquery.fancybox.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.4.1/jquery.fancybox.min.js"></script>
</body>
</html>