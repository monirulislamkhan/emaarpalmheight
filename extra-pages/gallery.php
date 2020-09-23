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
<title>DLF Kings Court Gallery Image</title>
<meta name="description" content="DLF Kings Court Gallery Elevation Image - Construction Update."/>
<?php require_once("common-part.php");?>
</head>
<body>
<?php require_once("header.php");?>
<?php require_once("banner_form.php");?>
<div class="container">
<div class="row">
<div class="col-lg-12 col-sm-12">
<h1>DLF Kings Court Gallery Image</h1>
<div class="flr_plan">
<div class="topplan">Elevation Images</div>
<ul class="full_view">
<li><a href="gallery/ei/ei-01.jpg" data-fancybox="gallery"><img src="gallery/ei/ei-01.jpg" class="img-responsive" alt="Elevation Image 01"></a></li>
<li><a href="gallery/ei/ei-02.jpg" data-fancybox="gallery"><img src="gallery/ei/ei-02.jpg" class="img-responsive" alt="Elevation Image 02"></a></li>
<li><a href="gallery/ei/ei-03.jpg" data-fancybox="gallery"><img src="gallery/ei/ei-01.jpg" class="img-responsive" alt="Elevation Image 03"></a></li>
<li><a href="gallery/ei/ei-04.jpg" data-fancybox="gallery"><img src="gallery/ei/ei-04.jpg" class="img-responsive" alt="Elevation 04"></a></li>
<li><a href="gallery/ei/ei-05.jpg" data-fancybox="gallery"><img src="gallery/ei/ei-05.jpg" class="img-responsive" alt="Elevation Image 05"></a></li>
<li><a href="gallery/ei/ei-06.jpg" data-fancybox="gallery"><img src="gallery/ei/ei-06.jpg" class="img-responsive" alt="Elevation Image 06"></a></li>
<li><a href="gallery/ei/ei-07.jpg" data-fancybox="gallery"><img src="gallery/ei/ei-07.jpg" class="img-responsive" alt="Elevation Image 07"></a></li>
<li><a href="gallery/ei/ei-08.jpg" data-fancybox="gallery"><img src="gallery/ei/ei-08.jpg" class="img-responsive" alt="Elevation Image 08"></a></li>
<li><a href="gallery/ei/ei-09.jpg" data-fancybox="gallery"><img src="gallery/ei/ei-09.jpg" class="img-responsive" alt="Elevation Image 09"></a></li>
<li><a href="gallery/ei/ei-10.jpg" data-fancybox="gallery"><img src="gallery/ei/ei-10.jpg" class="img-responsive" alt="Elevation Image 10"></a></li>
<li><a href="gallery/ei/ei-11.jpg" data-fancybox="gallery"><img src="gallery/ei/ei-11.jpg" class="img-responsive" alt="Elevation Image 11"></a></li>
<li><a href="gallery/ei/ei-12.jpg" data-fancybox="gallery"><img src="gallery/ei/ei-12.jpg" class="img-responsive" alt="Elevation Image 12"></a></li>
<li><a href="gallery/ei/ei-13.jpg" data-fancybox="gallery"><img src="gallery/ei/ei-13.jpg" class="img-responsive" alt="Elevation Image 13"></a></li>
<li><a href="gallery/ei/ei-14.jpg" data-fancybox="gallery"><img src="gallery/ei/ei-14.jpg" class="img-responsive" alt="Elevation Image 14"></a></li>
<li><a href="gallery/ei/ei-15.jpg" data-fancybox="gallery"><img src="gallery/ei/ei-15.jpg" class="img-responsive" alt="Elevation Image 15"></a></li>
<li><a href="gallery/ei/ei-16.jpg" data-fancybox="gallery"><img src="gallery/ei/ei-16.jpg" class="img-responsive" alt="Elevation Image 16"></a></li>
<li><a href="gallery/ei/ei-17.jpg" data-fancybox="gallery"><img src="gallery/ei/ei-17.jpg" class="img-responsive" alt="Elevation Image 17"></a></li>
<li><a href="gallery/ei/ei-18.jpg" data-fancybox="gallery"><img src="gallery/ei/ei-18.jpg" class="img-responsive" alt="Elevation Image 18"></a></li>
<li><a href="gallery/ei/ei-19.jpg" data-fancybox="gallery"><img src="gallery/ei/ei-19.jpg" class="img-responsive" alt="Elevation Image 19"></a></li>
<li><a href="gallery/ei/ei-20.jpg" data-fancybox="gallery"><img src="gallery/ei/ei-20.jpg" class="img-responsive" alt="Elevation Image 20"></a></li>
<li><a href="gallery/ei/ei-21.jpg" data-fancybox="gallery"><img src="gallery/ei/ei-21.jpg" class="img-responsive" alt="Elevation Image 21"></a></li>
<li><a href="gallery/ei/ei-22.jpg" data-fancybox="gallery"><img src="gallery/ei/ei-22.jpg" class="img-responsive" alt="Elevation Image 22"></a></li>
<li><a href="gallery/ei/ei-23.jpg" data-fancybox="gallery"><img src="gallery/ei/ei-23.jpg" class="img-responsive" alt="Elevation Image 23"></a></li>
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