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
<title>Location Map - DLF Kings Court</title>
<meta name="description" content="Location Map - DLF Kings Court"/>
<?php require_once("common-part.php");?>
</head>
<body>
<?php require_once("header.php");?>
<?php require_once("banner_form.php");?>
<div class="container">
<div class="row">
<div class="col-lg-6 col-sm-12">
<h1>DLF Kings Court Location Map</h1>
<div class="location_map"><a href="images/dlf-kings-court-location-map.jpg" data-fancybox="gallery" data-caption="DLF kings Court Location Map"><img src="images/dlf-kings-court-location-map.jpg" class="img-responsive" alt="dlf-kings-court-location-map"></a>
</div>
</div>
</div>
</div>
<?php require_once("footer.php");?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.4.1/jquery.fancybox.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.4.1/jquery.fancybox.min.js"></script>
</body>
</html>