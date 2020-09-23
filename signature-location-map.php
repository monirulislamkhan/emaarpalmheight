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
include("mail-signature.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php require_once("signature-common.php");?>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Location Map of Emaar Palm Heights Signature Tower Gurgaon Sector 77</title>
<meta name="description" content="Get the location map of Emaar Palm Heights Signature Tower Gurgaon Sector 77. Find here location Map, connectivity & location advantages."/>
<?php require_once("common-part.php");?>
<link rel="canonical" href="<?=_BASEURL_?>signature-location-map.html" />
</head>
<body>
<?php require_once("header-signature.php");?>
<?php require_once("banner_form-signature.php");?>
<div id="abc"></div>
<div class="container">
<div class="row">
<div class="col-lg-12 col-sm-12 col-md-12">
<div class="location_area">
<h1>Location Map - Emaar Palm Heights Signature Tower Gurgaon</h1>
<? require_once('map-html-signature.php');?>
</div>
</div>
</div>
</div>
<?php require_once("footer.php");?>
<? require_once('map-js-signature.php');?>
<script type="text/javascript" src="js/global.js"></script>
</body>
</html>