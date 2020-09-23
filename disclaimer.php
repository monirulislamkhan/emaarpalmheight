<?php	
ob_start();
session_start();
include("include/var.inc.php");
include("include/class.messages.php");
$msg=new Messages();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Disclaimer</title>
<meta name="robots" content="noindex, nofollow, noarchive">
<?php require_once("common-part.php");?>
<style type="text/css">#toTop{display:none !important}</style>
</head>
<body>
<? require_once('header.php');?>
<div class="container">
<div class="row">
<div class="col-lg-12">
<div class="dis_con">
<div class="dis_heading">Disclaimer</div>
<p><strong>Disclaimer :</strong> This website is in the process of being updated. By accessing this website, the viewer confirms that the information including brochures and marketing collaterals on this website are solely for informational purposes only and the viewer has not relied on this information for making any booking/purchase in any project of the Company. Nothing on this website, constitutes advertising, marketing, booking, selling or an offer for sale, or invitation to purchase a unit in any project by the Company. The Company is not liable for any consequence of any action taken by the viewer relying on such material / information on this website.</p>
</div>
</div>
</div>
</div>
<? require_once('footer.php');?>
</body>
</html>