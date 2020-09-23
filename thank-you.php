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
<title>Thank You</title>
<?php require_once("common-part-thanku.php");?>
<!-- Event snippet for Emaar Plam Heights conversion page -->
<script>
  gtag('event', 'conversion', {
      'send_to': 'AW-955362737/XjunCMi87pABELHbxscD',
      'value': 1.0,
      'currency': 'USD'
  });
</script>

<style type="text/css">#toTop{display:none !important}</style>
</head>
<body>
<? require_once('header.php');?>
<div class="container">
<div class="row">
<div class="col-lg-12">
<div class="thank">
<div class="thank-you">Thank You</div>
<p>We at <?=_WEBURL_?> would like to thank you for your interest in our services and contacting us.</p>
</div>
</div>
</div>
</div>
<? require_once('footer.php');?>
</body>
</html>