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
<title>Master Plan of Emaar Palm Heights Gurgaon Sector 77</title>
<meta name="description" content="Find the master plan of the Emaar Palm Heights Gurgaon Sector 77, 3 Bedroom + 3 Toilet + Lounge + Utility"/>
<?php require_once("common-part.php");?>
<link rel="canonical" href="<?=_BASEURL_?>master-plan.html" />
</head>
<body>
<?php require_once("header.php");?>
<?php require_once("banner_form.php");?>
<div class="container">
<div class="row">
<div class="col-md-10 col-md-offset-1">
<h1>Master Plan - <?=_heading1_?></h1>
<div class="master_area">
<a href="images/master-plan.jpg" data-fancybox="gallery" data-caption="Emaar Palm Heights Master Plan"><img src="images/master-plan.jpg" class="img-responsive" alt="emaar-palm-heights-master-plan"></a>
</div>
</div>
</div>
</div>
<?php require_once("footer.php");?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.4.1/jquery.fancybox.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.4.1/jquery.fancybox.min.js"></script>
</body>
</html>