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
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Emaar Palm Heights Signature Tower  Sample Flats- Gallery</title>
<meta name="description" content="Find the images of Emaar Palm Heights Signature Tower Gurgaon Sample Flats and  get the brief idea of elevation & constructions images of  3 BHK Uber  flats."/>
<?php require_once("common-part.php");?>
<link rel="canonical" href="<?=_BASEURL_?>signature-gallery.html" />
</head>
<body>
<?php require_once("header-signature.php");?>
<?php require_once("banner_form-signature.php");?>
<div class="container">
<div class="row">
<div class="col-lg-12 col-sm-12 col-md-12">
<div class="flr_area">
<h1>Emaar Palm Heights Signature Tower Sample Flats - Gallery</h1>
<hr/>
<div class="row">
<figure class="col-md-3 col-sm-6 gall_list"><a href="gallery/signature/ei-01.jpg" data-fancybox="gallery"><img src="gallery/signature/ei-01.jpg" class="img-responsive" alt="image"></a></figure>
<figure class="col-md-3 col-sm-6 gall_list"><a href="gallery/signature/ei-02.jpg" data-fancybox="gallery"><img src="gallery/signature/ei-02.jpg" class="img-responsive" alt="image"></a></figure>
<figure class="col-md-3 col-sm-6 gall_list"><a href="gallery/signature/ei-03.jpg" data-fancybox="gallery"><img src="gallery/signature/ei-03.jpg" class="img-responsive" alt="image"></a></figure>
<figure class="col-md-3 col-sm-6 gall_list"><a href="gallery/signature/ei-04.jpg" data-fancybox="gallery"><img src="gallery/signature/ei-04.jpg" class="img-responsive" alt="image"></a></figure>
<figure class="col-md-3 col-sm-6 gall_list"><a href="gallery/signature/ei-05.jpg" data-fancybox="gallery"><img src="gallery/signature/ei-05.jpg" class="img-responsive" alt="image"></a></figure>
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