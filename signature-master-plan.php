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
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Master Plan of Emaar Palm Heights Signature Tower Gurgaon</title>
<meta name="description" content="Master Plan of the Emaar Palm heights Signature Tower provides the overall area of the project such as Entrance plaza, lawn, kid’s play area & more."/>
<?php require_once("common-part.php");?>
<link rel="canonical" href="<?=_BASEURL_?>signature-master-plan.html" />
</head>
<body>
<?php require_once("header-signature.php");?>
<?php require_once("banner_form-signature.php");?>
<div id="abc"></div>
<div class="container">
<div class="row">
<div class="col-md-10 col-md-offset-1">
<h1>Master Plan - Emaar Palm Heights Signature Tower</h1>
<div class="master_area">
<a href="images/signature-master-plan.jpg" data-fancybox="gallery" data-caption="Emaar Palm Heights Signature Master Plan"><img src="images/signature-master-plan.jpg" class="img-responsive" alt="emaar-palm-heights-signature-master-plan"></a>
</div>
</div>
</div>
</div>
<?php require_once("footer.php");?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.4.1/jquery.fancybox.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.4.1/jquery.fancybox.min.js"></script>
</body>
</html>