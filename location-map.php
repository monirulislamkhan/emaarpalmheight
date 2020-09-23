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
<title>Location Map, Address of Emaar Palm Heights Gurgaon</title>
<meta name="description" content="Find the best location map, Google map & location advantages of the Emaar Palm Heights Gurgaon. Get Connectivity to the Dwarka Expressway & sector 77."/>
<?php require_once("common-part.php");?>
<link rel="canonical" href="<?=_BASEURL_?>location-map.html" />
</head>
<body>
<?php require_once("header.php");?>
<?php require_once("banner_form.php");?>
<div class="container">
<div class="row">
<div class="col-lg-12 col-sm-12 col-md-12">
<div class="location_area">
<h1>Location Map - <?=_heading1_?></h1>
<? require_once('map-html.php');?>
</div>
</div>
</div>
</div>
<?php require_once("footer.php");?>
<? require_once('map-js.php');?>
<script type="text/javascript" src="js/global.js"></script>
</body>
</html>